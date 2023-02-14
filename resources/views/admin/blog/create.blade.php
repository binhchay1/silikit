@extends('layouts.adminlte-custom')

@section('title', 'Tạo sản phẩm | SILI - KIT')

@section('content_header')
<div style="display: flex;justify-content: space-between;">
    <h1 class="m-0 text-dark"></h1>
</div>
@stop

@push('css')
<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" href="{{ asset('/css/common.css') }}">
@endpush

@section('content')
@include('sweetalert::alert')
<section class="content">
    <form action="{{ route('admin.store.blog') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row form-area">
                <div class="col-md-12 form-header text-center">
                    <h1 class="form-title fs-20 pd5">Thêm bài viết</h1>
                </div>
                <div class="col-md-12 form-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tiêu đề</label>
                        <div class="col-sm-10 col-form-input">
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" style="width: 40%;">
                            @if ($errors->has('title'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('title') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ảnh</label>
                        <div class="col-sm-10 col-form-input">
                            <img src="{{ asset('img/preview.png') }}" id="previewImg" class="p-0 logo-preview" alt="100x40" style="min-width: 100px; max-height: 100px;" />
                            <input type="file" class="form-control input-image-preview" name="img" onchange="previewFile(this)">
                            @if ($errors->has('img'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('img') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nội dung</label>
                        <div class="col-sm-10 col-form-input">
                            <textarea name="description" id="editor"></textarea>
                            @if ($errors->has('description'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('description') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12  form-footer pd20 d-inline-block text-right">
                <button type="submit" class="btn btn-primary" id="submit">Tạo</button>
            </div>
        </div>
    </form>
</section>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    let editor;

    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(newEditor => {
            window.editor = newEditor;
            editor = newEditor;
        })
        .catch(error => {
            console.error(error);
        });


    document.querySelector('#submit').addEventListener('click', () => {
        const editorData = editor.getData();
        var textArea = document.getElementById('editor');
        textArea.innerHTML = editorData;
    });
</script>
@stop