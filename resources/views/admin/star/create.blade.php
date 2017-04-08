@extends('admin.layouts.desktop')
@push('js')
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
@endpush
@section('content')
    <article class="content item-editor-page">
        <div class="title-block">
            <h3 class="title">
                {{ trans('star.create') }} <span class="sparkline bar" data-type="bar"></span>
            </h3></div>
        <form name="item">
            <div class="card card-block">
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right">{{ trans('string.name') }}</label>
                    <div class="col-sm-10"><input type="text" class="form-control boxed" placeholder=""></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right">{{ trans('string.content') }}</label>
                    <div class="col-sm-10">
                        <textarea id="content" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label text-xs-right">{{ trans('string.category') }}</label>
                    <div class="col-sm-10">
                        <select class="c-select form-control boxed">
                            <option selected>Select Category</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">{{ trans('string.submit') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </article>
@endsection