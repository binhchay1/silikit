@extends('layouts.adminlte-custom')

@section('title', 'Bài viết | SILI - KIT')

@section('content_header')
<div style="display: flex;justify-content: space-between;">
    <h1 class="m-0 text-dark">Bài viết</h1>
</div>
@stop

@section('content')
@include('sweetalert::alert')

<form action="" id="filter-product" method="get">
    <div class="d-flex">
        <div class="mb-2 ml-2">
            <label> Tiêu đề</label>
            <input type="text" name="title" placeholder="Nhập tiêu đề" value="{{ old('title', request()->title ?? null) }}" class="form-control">
        </div>
        <div class="mb-2 ml-2">
            <label> Nội dung</label>
            <input type="text" name="description" placeholder="Nhập nội dung" value="{{ old('description', request()->description ?? null) }}" class="form-control">
        </div>
        <div class="mb-2 ml-2">
            <label> Tác giả</label>
            <input type="text" name="author" placeholder="Nhập tác giả" value="{{ old('author', request()->author ?? null) }}" class="form-control">
        </div>
        <div class="mb-2 ml-2">
            <label class="w-100"> &nbsp;</label>
            <button type="submit" class="btn btn-primary pl-5 pr-5 pl-sm-3 pr-sm-3">Tìm kiếm</button>
            <a href="{{ route('admin.create.blog') }}" type="submit" class="btn btn-warning ml-2 pl-5 pr-5 pl-sm-3 pr-sm-3">Tạo bài viết</a>
        </div>
    </div>
</form>

<section class="content mt-4 fnz-style-table">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 overflow-auto">
                <table class="table bg-white table-hover table-nowrap" id="blog-table-list">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Tác giả</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col" class="pl-4">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blog->items() as $item)
                        <tr>
                            <td>
                                {{ (($blog->currentPage() - 1) * $blog->perPage()) + $loop->iteration }}
                            </td>
                            <td>{{ $item->title }}</td>
                            <td>{!! $item->description !!}</td>
                            <td>{{ $item->author }}</td>
                            <td>
                                <img src="{{ url($item->image) }}" width="150" height="100">
                            </td>
                            <td>
                                @if ($item->created_at)
                                {{ $item->created_at->format('Y-m-d h:i:s') }}
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.update.blog.view', $item->id) }}" class="btn btn-success" role="button"><i class="fas fa-edit"></i></a>
                                <a href="javascript:void(0)" data-id="{{ $item->id }}" data-name="{{ $item->title }}" class="btn btn-md btn-danger delete_blog ml-2"><i class="fas fa-lock"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @if ($blog->hasPages())
        <div class="col-12 clearfix text-right">
            {{ $blog->appends($_GET)->links("pagination::bootstrap-4") }}
        </div>
        @endif
    </div>
</section>

<!-- Modal -->
@include('include.modal_user_delete')
@stop