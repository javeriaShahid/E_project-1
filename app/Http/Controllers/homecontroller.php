<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
 public function redirect(){
if($usertype === '1'){
    return view('admin.home');
}
else{
    return view('dashboard');
}

 }
}
