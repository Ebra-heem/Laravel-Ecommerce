<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturar;
use Alert;

class ManufacturarController extends Controller
{
    public function createCategory(){
        return view('backend.manufacturar.add');
    }
    
    public function storeCategory(Request $request){
        
        $this->validate($request, [
            'manufacturarName' => 'required',
            'publicationStatus' =>'required',
        ]);
        
        $manufacturar = new Manufacturar();
        $manufacturar->manufacturarName = $request->manufacturarName;
        $manufacturar->publicationStatus = $request->publicationStatus;
        $manufacturar->save();
        Alert::success('Congratulations', 'Manufacturar info Save Successfully');
        return redirect('/manufacturar/manage');;
    }
    
    public function manageCategory(){
        $manufacturars = Manufacturar::all();
        return view('backend.manufacturar.show',['manufacturars'=> $manufacturars]);
    }
    
    public function editCategory($id){
        $manufacturarById = Manufacturar::where('id',$id)->first();
        return view('backend.manufacturar.edit',['manufacturarById'=>$manufacturarById]);
    }
    
        public function updateCategory(Request $request){
   
        $manufacturar = Manufacturar::find($request->manufacturarId);
        
        $manufacturar->manufacturarName = $request->manufacturarName;
        $manufacturar->publicationStatus = $request->publicationStatus;
        $manufacturar->save();
        Alert::success('Congratulations', 'Manufacturar info Updated Successfully');
        return redirect('/manufacturar/manage');
    }
    
    public function deleteCategory($id){
        $manufacturar = Manufacturar::find($id);
        $manufacturar->delete();
        Alert::success('Congratulations', 'Manufacturar info Deleted Successfully');
        return redirect('/manufacturar/manage');
    }
    
}
