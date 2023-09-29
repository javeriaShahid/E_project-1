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

$request->file->move('assets',$filename);

$store->file=$filename;


$store->name=$request->name;
$store->information=$request->inform;

$store->save();
 return view('index');


}





}

