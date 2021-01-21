<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{ 
    public function __construct()
    {
         
    }

     public function index()
     {
        $data=User::all();
        return response()->json(array('list'=>$data,200)); 
     }

     public function user($id)
     {
        $data=User::find($id);
        return response()->json(array('list'=>$data,200)); 
     }

     public function store(Request $r)
     {
        $data=$r->all();
        User::create($data);
        return response()->json(array('statas'=>'Successfully Inserted',201)); 
     }

     public function update(Request $r,$id)
     {
        $data=$r->all();
        User::where('id',$id)->update($data);
        return response()->json(array('statas'=>'Updated Successfully',201)); 
     }
     public function destroy($id)
     {
        $d=User::find($id);
        $d->delete();
        return response()->json(array('statas'=>'Deleted Successfully',201)); 
     }

}
