<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
 public function admin_panel(){
    $usertype=Auth::user()->usertype;
if($usertype == '1'){
    return view('admin.home');
}
else{
    return view('dashboard');

}

 }


//  public function abc(Request $request)
//  {

//   $show = User::all();




//      return view('admin.home',compact("show"));
//  }

//     public function update($id){
//       $update = User::find($id);
//       return view("update" , compact("update"));
// }
// public function edit($id, Request $request){



//     $update = new User();


//         $update->name = $request->name;
//         $update->email = $request->email;




//     $update->update();

//     $update = User::all();
//        return view("admin.home"  ,compact('update'));

//     // return redirect()->intended("/redirect")->with('we' , 'succesfully updated');


//     }
// public function destroy( $id){

//     $delete = User::findOrFail($id);

//     $delete->delete();

// return redirect()->back()->with('we' , 'succesfully deleted');

//  }


}
