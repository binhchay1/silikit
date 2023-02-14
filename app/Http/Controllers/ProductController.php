<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Models\Product;

class ProductController extends Controller
{
    private ProductRepository $productRepository;

    public function __construct(
        ProductRepository $productRepository,
    ) {
        $this->productRepository = $productRepository;
    }

    public function listProductAdmin(Request $request)
    {
        $filters = [];
        if (isset($request->name)) {
            $filters['name'] = $request->name;
        }

        if (isset($request->description)) {
            $filters['description'] = $request->description;
        }

        if (isset($request->type)) {
            $filters['type'] = $request->type;
        }

        $product = $this->productRepository->getListProduct($filters);

        return view('admin.product.index', compact('product'));
    }

    public function createProduct()
    {
        return view('admin.product.create');
    }

    public function viewUpdateProduct(Product $product)
    {
        return view('admin.product.update', compact('product'));
    }

    public function updateProduct(UpdateProductRequest $request, Product $product)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'type' => $request->type,
        ];

        if ($request->file()) {

            $path = '/uploads/product';
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $image_add = $image_name . "_" . time();
            $image->move(public_path($path), $image_add);

            $data['image'] = "$path/$image_add";
        }

        $isUpdated = $this->productRepository->updateById($product->id, $data);
        if ($isUpdated) {
            alert()->success('Thành công!', 'Cập nhật ' . $request->name . ' thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Cập nhật sản phẩm lỗi!');
        }

        return redirect()->route('admin.products.index');
    }

    public function storeProduct(ProductRequest $request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'type' => $request->type,
        ];

        if ($request->file()) {

            $path = '/uploads/product';
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $image_add = $image_name . "_" . time();
            $image->move(public_path($path), $image_add);

            $data['image'] = "$path/$image_add";
        }

        $product = $this->productRepository->create($data);

        if ($product instanceof Product) {
            alert()->success('Thành công!', 'Tạo sản phẩm thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Tạo sản phẩm lỗi!');
        }

        return redirect()->route('admin.products.index');
    }

    public function deleteProduct(int $productId = 0)
    {
        if (request()->get('id')) {
            $productId = (int) request()->get('id');
        }

        $product = $this->productRepository->deleteById($productId);

        alert()->success('Thành công!', 'Xóa sản phẩm thành công!');
        return redirect()->route('admin.products.index');
    }
}
