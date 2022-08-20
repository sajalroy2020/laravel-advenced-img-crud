<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestingController extends Controller
{


    public function save_data(Request $request){
        $id = $request->id;
        
        if(isset($id)){
            $edit=Testing::findorfail($id);
            $edit->name=$request->name;
            $edit->email=$request->email;
            if($request->hasFile('image')){
                $edit->image = $request->file('image')
                ->store('images/todos');
            }
            $edit->update();
            return redirect()->route('dataList');
        }else{
            $path = "";
            if($request->hasFile('image')){
                $path = $request->file('image')->store('images/todos');
            }
            Testing::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'image' => $path,
            ]);
            return back();
        }

    }


    public function dataList(){
        $data['allData']=Testing::get();
        return view('dataList',$data);
    }


    public function edit($id){
        $data['edit']=Testing::findorfail($id);
        return view('add-data',$data);
    }


    public function delete($id){

        $kk = Testing::where('id', $id)->first();
        unlink(storage_path(). '/app/public/'.$kk->image);
        $kk->delete();
        return back();
    }



}
