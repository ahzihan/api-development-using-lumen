<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;
class QuizController extends Controller
{ 
    public function __construct()
    {
         
    }

     public function index()
     {
        $data=Quiz::all();
        return response()->json(array('list'=>$data,200)); 
     }

     public function quiz($id)
     {
        $data=Quiz::find($id);
        return response()->json(array('list'=>$data,200)); 
     }

     public function store(Request $r)
     {
        $data=$r->all();
        Quiz::create($data);
        return response()->json(array('statas'=>'Successfully Inserted',201)); 
     }

     public function update(Request $r,$id)
     {
        $data=$r->all();
        Quiz::where('id',$id)->update($data);
        return response()->json(array('statas'=>'Updated Successfully',201)); 
     }
     public function destroy($id)
     {
        $d=Quiz::find($id);
        $d->delete();
        return response()->json(array('statas'=>'Deleted Successfully',201)); 
     }

}
