<?php

namespace App\Http\Controllers;
use App\Models\Answer;
use Illuminate\Http\Request;
class AnswerController extends Controller
{ 
    public function __construct()
    {
         
    }

     public function index()
     {
        $data=Answer::all();
        return response()->json(array('list'=>$data,200)); 
     }

     public function quiz($id)
     {
        $data=Answer::find($id);
        return response()->json(array('list'=>$data,200)); 
     }

     public function store(Request $r)
     {
        $data=$r->all();
        Answer::create($data);
        return response()->json(array('statas'=>'Successfully Inserted',201)); 
     }

     public function update(Request $r,$id)
     {
        $data=$r->all();
        Answer::where('id',$id)->update($data);
        return response()->json(array('statas'=>'Updated Successfully',201)); 
     }
     public function destroy($id)
     {
        $d=Answer::find($id);
        $d->delete();
        return response()->json(array('statas'=>'Deleted Successfully',201)); 
     } 

}
