<a href="{{ route('newPage', ['parent_id'=>$page->id]) }}"><i class="fa fa-fw fa-2x fa-plus"></i></a>
<a href="/admin/{{ Request::local()->code }}/{{ $page->id }}?edit"><i class="fa fa-fw fa-2x fa-pencil"></i></a>
<a href="#" class="pageDelete" data-page_id="{{ $page->id }}"><i class="fa fa-fw fa-2x fa-trash"></i></a>
<a href="#"><i class="fa fa-fw fa-2x fa-floppy-o"></i></a>
<a href="/{{ $page->fullSlug() }}" target="_blank"><i class="fa fa-fw fa-2x fa-eye"></i></a>
