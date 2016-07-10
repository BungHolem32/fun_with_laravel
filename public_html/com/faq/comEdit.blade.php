<h4>
    <i class="fa fa-question-circle" aria-hidden="true"></i>
    {!! Form::label('FAQ', 'FAQ') !!}
</h4>

<div class="multiple-mother foldable">
    <div class="multiple sortableMongo">
    @forelse($page->faq->getChildren() as $i => $field)
        <div class="mongo form-group" data-id="{{ $field->id }}" data-num="{{ $i }}" data-name="mongo[faq]">
            <button class="del-mongo btn-del-float">X</button>
            Question:  <input data-name="question" class="form-control" type="text" value="{{ $field->question }}">
            Answer:  <textarea data-name="answer" class="form-control">{{ $field->answer }}</textarea>
        </div>
    @empty
        <div data-num="0" data-name="mongo[faq]" class="form-group">
            Question:  <input data-name="question" class="form-control" type="text" value="">
            Answer:  <textarea data-name="answer" class="form-control"></textarea>
        </div>
    @endforelse
    </div>
    <div>
        <button class="btn btn-primary addNewRow"><i class="fa fa-plus-square"></i></button>
    </div>
</div>