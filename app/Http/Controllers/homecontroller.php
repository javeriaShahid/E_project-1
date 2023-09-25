<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
 public function redirect(){
    $usertype=Auth::user()->usertype;
if($usertype === '1'){
    return view('admin.home');
}
else{
    return view('dashboard');
    
}

 }

public function fetch(Request $request)
{

$fetch = User::all();




    return view('admin.home',compact("fetch"));
}
public function destroy(string $id){

    $delete = User::findOrFail($id);

    $delete->delete();

return redirect()->back()->with('we' , 'succesfully deleted');

 }


}
