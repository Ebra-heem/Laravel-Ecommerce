<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturar;
use App\Product;
use DB;
use Alert;

class ProductController extends Controller {

    public function createProduct() {
        $category = Category::where('publicationStatus', 1)->get();
        $manufacturar = Manufacturar::where('publicationStatus', 1)->get();
        return view('backend.product.add', ['categories' => $category], ['manufacturars' => $manufacturar]);
        
    }

    public function storeProduct(Request $request) {
        //return $request->all();
        $this->validate($request, [
            'productName' => 'required',
            'productPrice' => 'required',
            'productImage' => 'required',
        ]);

        $productImage = $request->file('productImage');
        $name = $productImage->getClientOriginalName();
        $uploadPath = 'public/productImage/';
        $productImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;
        $this->saveProductInfo($request, $imageUrl);
        Alert::success('Congratulations', 'Product info Save Successfully');
        return redirect('/product/manage');
    }

    protected function saveProductInfo($request, $imageUrl) {
        $product = new Product();
        $product->productName = $request->productName;
        $product->productCode = $request->productCode;
        $product->categoryId = $request->categoryId;
        $product->manufacturarId = $request->manufacturarId;
        $product->productPrice = $request->productPrice;
        $product->sproductPrice = $request->sproductPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productInfo = $request->productInfo;
        $product->productImage = $imageUrl;
        $product->stockStatus = $request->stockStatus;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();
    }

    public function manageProduct() {
        $products = DB::table('products')
                ->join('categories', 'products.categoryId', '=', 'categories.id')
                ->join('manufacturars', 'products.manufacturarId', '=', 'manufacturars.id')
                ->select('products.*', 'categories.categoryName', 'manufacturars.manufacturarName')
                ->get();

        return view('backend.product.show', ['products' => $products]);
    }

    public function viewProduct($id) {
        $productById = DB::table('products')
                ->join('categories', 'products.categoryId', '=', 'categories.id')
                ->join('manufacturars', 'products.manufacturarId', '=', 'manufacturars.id')
                ->select('products.*', 'categories.categoryName', 'manufacturars.manufacturarName')
                ->where('products.id', $id)
                ->first();

        return view('backend.product.view', ['product' => $productById]);
    }

    public function editProduct($id) {
        $categories = Category::where('publicationStatus', 1)->get();
        $manufacturars = Manufacturar::where('publicationStatus', 1)->get();
        $productById = Product::where('id', $id)->first();

        return view('backend.product.edit', ['productById' => $productById], ['categories' => $categories])->with('manufacturars', $manufacturars);
    }

    public function updateProduct(Request $request) {

   
        $imageUrl = $this->imageExistStatus($request);
        $product = Product::find($request->productId);
        $product->productName = $request->productName;
        $product->productCode = $request->productCode;
        $product->categoryId = $request->categoryId;
        $product->manufacturarId = $request->manufacturarId;
        $product->productPrice = $request->productPrice;
        $product->sproductPrice = $request->sproductPrice;
        $product->productQuantity = $request->productQuantity;
        $product->productInfo = $request->productInfo;
        $product->productImage = $imageUrl;
        $product->stockStatus = $request->stockStatus;
        $product->publicationStatus = $request->publicationStatus; 
        $product->save();
        Alert::success('Congratulations', 'Product info Updated Successfully');
        return redirect('/product/manage');
    }

    private function imageExistStatus($request) {
        $productById = Product::where('id', $request->productId)->first();
        $productImage = $request->file('productImage');
        if ($productImage) {
            unlink($productById->productImage);
            
            $name = $productImage->getClientOriginalName();
            $uploadPath = 'public/productImage/';
            $productImage->move($uploadPath, $name);
            $imageUrl = $uploadPath.$name;
           
        } else {
            
            $imageUrl = $productById->productImage;
            
        }
        return $imageUrl;
    }
    
    public function deleteProduct($id){
        $product= Product::find($id);
        $product->delete();
        Alert::success('Congratulations', 'Product info Deleted Successfully');
        return redirect('/product/manage');
    }

}
