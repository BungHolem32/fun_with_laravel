<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Languages;
use Carbon\Carbon;
use Franzose\ClosureTable\Tests\Models\Page;
use Request;


/**
 * Class PageController
 * @package App\Http\Controllers\Admin
 */
class PageController extends Controller {


    /**
     * @return \Illuminate\View\View
     */
    public function create()
	{
        return view('admin.newPage');
	}


    /**
     * @param Requests\createNewPageRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\createNewPageRequest $request)
	{
        $page = new \App\Page();
        $page->save();

        $page->{'title'} = Request::get('title');
        if(Request::get('parent_id')){
            $parent = \App\Page::findOrFail(Request::get('parent_id'));
            $parent->addChild($page);
        }
        $slug = str_slug(Request::get('slug'));

        \DB::insert("INSERT INTO routes (page_id, lang_id, slug, controller)
          VALUES ({$page->{'id'}}, 4, '{$slug}', 'FunnelController')");

        \Session::flash('flash_msg', ['success', 'Page was created, now you can edit it.']);
        return redirect('admin/'.$page->{'id'});

	}

    public function destroy($page_id){
        $page = \App\Page::findOrFail($page_id);

        if($page->parent_id == null)
            $parent = '';
        else
            $parent = $page->parent_id;

        $msg = 'Page "'.$page->title.'" has been deleted.';
        $page->deleteSubtree(true);
        \Session::flash('flash_msg', ['success', $msg]);
        return json_encode(['status'=>1,'msg'=>$msg, 'parent_id'=>$parent]);
    }

    public function addRoute($page_id){

        $routes = Request::get('route');
        $langDiffSum = count(array_unique($routes['lang_id']));
        $langSum = count($routes['lang_id']);

        if($langDiffSum != $langSum)
            return json_encode(['status'=>0, 'alert'=>'danger', 'msg'=>'Routes cant be with the same language.']);

        foreach($routes as $key => $fields)
            foreach($fields as $k => $val){
                if($key == 'slug')
                    $val = urlencode($val);
                $temp[$k][$key] = $val;
            }

        foreach($temp as $field){
            //$vals[] = "({$page_id}, {$field['lang_id']}, '{$field['slug']}', '{$field['controller']}')";
            $vals[] = "(?, ?, ?, ?)";
            $valsArray[] = $page_id;
            $valsArray[] = $field['lang_id'];
            $valsArray[] = $field['slug'];
            $valsArray[] = $field['controller'];
            $langAdded[] = Languages::find($field['lang_id'])->code;
        }


        //dd($vals);
        \DB::beginTransaction();
            \DB::delete("DELETE FROM routes WHERE page_id = ?",[$page_id]);
            \DB::insert("INSERT INTO routes (page_id, lang_id, slug, controller) VALUES ".implode(', ', $vals ), $valsArray);
        \DB::commit();

        return json_encode(['status'=>1, 'alert'=>'success', 'msg'=>'Routes have been Saved.', 'langAdded'=>$langAdded]);

    }


    public function order(){
        $inputs = Request::all();
        if(isset($inputs['list']) && !empty($inputs['list'])){
            $list = explode(',',$inputs['list']);
            $list = array_filter($list);
            foreach($list as $pos => $id)
                \DB::update("UPDATE pages SET position ={$pos} WHERE id={$id};");

            $msgs[] = ['msg'=> 'Order saved.', 'alert'=>'success'];
            return json_encode(['status'=>1, 'msgs'=>$msgs]);
        }
    }


    public function search($q){
        $pages = \App\Page::getPages(4,$q);
        $html = view('admin.partials._pagesNav', ['pages'=>$pages]);
        $temp = preg_replace('/[ \t]+/', ' ', preg_replace('/\s*$^\s*/m', "\n", $html));
        $temp = preg_replace("/[\r\n]+/", "\n", $temp);
        $temp = preg_replace("/\s+/", ' ', $temp);

        return json_encode(['status'=>1, 'searchResult'=>$temp]);
    }


    public function moveUnder( $parent_id, $page_id){
        echo $parent_id;
        $page = \App\Page::find($page_id);
        $page->moveTo(0, \App\Page::find($parent_id));
    }
}