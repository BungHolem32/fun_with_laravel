<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RankedGroups extends Model {

    protected $table = 'rankedgroups';

    protected $fillable = ['title', 'access_control'];

    public function users()
    {
        return $this->hasMany('App\User');
    }


    public function allowed(){
        return explode(',', $this->access_control);
    }

    public static function getList(){
        foreach(self::all() as $group){
            $temp[$group->id] = $group->title;
        }
        return $temp;
    }

}
