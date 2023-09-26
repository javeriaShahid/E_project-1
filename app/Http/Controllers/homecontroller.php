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
    return view('components.welcome');

}

 }

public function show(Request $request)
{
$fetch = User::all();
   return view('admin.home',compact("fetch"));
}

    public function update($id){
      $update = User::find($id);
      return view("update" , compact("update"));
}
public function edit($id, Request $request){



    $edit = new User();


        $edit->name = $request->name;
        $edit->email = $request->email;




    $edit->update();

    $update = User::all();


       return view("admin.home"  , compact('update'));

    // return redirect()->intended("/redirect")->with('we' , 'succesfully updated');


    }
public function destroy(string $id){

    $delete = User::findOrFail($id);

    $delete->delete();

return redirect()->back()->with('we' , 'succesfully deleted');

 }


}
