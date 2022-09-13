<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Config, Validator;
class CategoryController extends Controller
{   
    // rp = Result per Page
    var $rp = 2;
    public function index(){
        $categories = Category::all();
        return view('category/index', compact('categories'));
    }

    public function search(Request $request) {
        $query = $request->q;
        if($query) {
            $categories = Category::where('id', 'like', '%'.$query.'%')
            ->orWhere('name', 'like', '%'.$query.'%')
            ->paginate($this->rp);
        } else {
            $categories = category::paginate($this->rp);
        }
        return view ('category/index', compact('categories'));
    }

    public function edit($id = null)
    { 
        if($id) {
            $category = Category::find($id);

            return view('category/edit')->with('category', $category);
        } 
        else
        {
            return view('category/add');
        }
    }

    public function remove($id) {
        Category::find($id)->delete();
        return redirect('category')
        ->with('ok', true)
        ->with('msg', 'ลบข้อมูลสําเร็จ');
        }

    public function insert(Request $request) {


        $category = new Category();
        $category->id = $request->id;
        $category->name = $request->name;
        $category->save();

        return redirect('category')
        ->with('ok', true)
        ->with('msg', 'เพิ่มข้อมูลเรียบร้อยแล้ว ');
        }


        public function update(Request $request)
        {
            $id = $request->id;
            $rules = array(
                'name' => 'required'
            );
    
            $message = array(
                'required' => 'กรุณากรอกข้อมูล :attribute ให้ครบถ้วน'
            );
    
            $temp = array(
                'name' => $request->name
            );
    
            $validator = Validator::make($temp , $rules , $message);
    
    
            if($validator -> fails()){
                return redirect('category/edit/'.$id)
                ->withErrors($validator)
                ->withInput();
            }
    
            $category = Category::find($id);
            $category->name = $request->name;
            $category->save();
    
            return redirect('category')
            ->with('ok',true)
            ->with('msg','บันทึกข้อมูลเรียบร้อยแล้ว');
        } 
}
