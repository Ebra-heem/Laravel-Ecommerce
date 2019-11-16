<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Category;
use Alert;

class CategoryController extends Controller
{
    
//    public function __construct() {
//        $this->middleware('auth');
//    }
    public function createCategory(){
        return view('backend.category.add');
    }
    
    public function storeCategory(Request $request){
        
        $this->validate($request, [
            'categoryName' => 'required',
            'categoryDescription' => 'required',
            'publicationStatus' =>'required',
        ]);
        
        $category = new Category();
        $category->categoryName = $request->categoryName;
        $category->parent_id = $request->parent_id;
        $category->categoryDescription = $request->categoryDescription;
        $category->publicationStatus = $request->publicationStatus;
        $category->save();
        Alert::success('Congratulations', 'Category info Save Successfully');
        return redirect('/category/manage');

    }
    
    public function manageCategory(){
        $category = Category::all();
        return view('backend.category.show',['categoris'=>$category]);
    }
    
    public function editCategory($id){
        $categoryById = Category::where('id',$id)->first();
        return view('backend.category.edit',['categoryById'=>$categoryById]);
    }
    
        public function updateCategory(Request $request){
   
        $category = Category::find($request->categoryId);
        $category->categoryName = $request->categoryName;
        $category->parent_id = $request->parent_id;
        $category->categoryDescription = $request->categoryDescription;
        $category->publicationStatus = $request->publicationStatus;
        $category->save();
         Alert::success('Congratulations', 'Category info Updated Successfully');
        return redirect('/category/manage');
    }
    
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        Alert::success('Congratulations', 'Category info Deleted Successfully');
        return redirect('/category/manage')->with('message','Category info Deleted Successfully');
    }
    
}
