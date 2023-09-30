<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Songs;

class usercontroller extends Controller
{

public function store(Request $request){

$store = new Songs();

$file=$request->file;

$filename= time().'.' . $file->getClientOriginalExtension();

$request->file->move('audio',$filename);

$store->file=$filename;


$store->name=$request->name;
$store->information=$request->inform;

$store->save();
 return redirect()->back()->with('us','Succesfully Added');


}

public function show(){

$data=Songs::all();
return view('admin.home', compact('data'));


}


// public function view($id){
// $data=Songs::find($id);
// return view('index' , 'data => $asd');



// }

public function delete( $id){

     $destroy = Songs::findOrFail($id);

     $destroy->delete();

 return redirect()->back()->with('as' , 'Succesfully deleted');

  }


}

