<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Repositories\BlogRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;

class BlogController extends Controller
{
    private BlogRepository $blogRepository;

    public function __construct(
        BlogRepository $blogRepository,
    ) {
        $this->blogRepository = $blogRepository;
    }

    public function listBlogAdmin(Request $request)
    {
        $filters = [];
        if (isset($request->title)) {
            $filters['title'] = $request->title;
        }

        if (isset($request->description)) {
            $filters['description'] = $request->description;
        }

        if (isset($request->author)) {
            $filters['author'] = $request->author;
        }

        $blog = $this->blogRepository->getListBlog($filters);

        return view('admin.blog.index', compact('blog'));
    }

    public function createBlog()
    {
        return view('admin.blog.create');
    }

    public function viewUpdateBlog(Blog $blog)
    {
        return view('admin.blog.update', compact('blog'));
    }

    public function updateBlog(UpdateBlogRequest $request, Blog $blog)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'author' => Auth::user()->name
        ];

        if ($request->file()) {

            $path = '/uploads/blog';
            $image = $request->file('img');
            //Lấy Tên files
            $image_name = $image->getClientOriginalName();
            $image_add = $image_name . "_" . time();
            $image->move(public_path($path), $image_add);

            $data['image'] = "$path/$image_add";
        }

        $isUpdated = $this->blogRepository->updateById($blog->id, $data);
        if ($isUpdated) {
            alert()->success('Thành công!', 'Cập nhật ' . $request->title . ' thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Cập nhật bài viết lỗi!');
        }

        return redirect()->route('admin.blog.index');
    }

    public function storeBlog(BlogRequest $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'author' => Auth::user()->name
        ];

        if ($request->file()) {

            $path = '/uploads/blog';
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $image_add = $image_name . "_" . time();
            $image->move(public_path($path), $image_add);

            $data['image'] = "$path/$image_add";
        }

        $blog = $this->blogRepository->create($data);

        if ($blog instanceof Blog) {
            alert()->success('Thành công!', 'Tạo bài viết thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Tạo bài viết lỗi!');
        }

        return redirect()->route('admin.blog.index');
    }

    public function deleteBlog(int $blogId = 0)
    {
        if (request()->get('id')) {
            $blogId = (int) request()->get('id');
        }

        $product = $this->blogRepository->deleteById($blogId);

        alert()->success('Thành công!', 'Xóa bài viết thành công!');
        return redirect()->route('admin.blog.index');
    }
}
