<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Session;
use DB;
use Auth;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class usercontroller extends Controller
{
    //     public function index(){

    // return view('index');

    //     }
    //     public function contact(){

    //         return view('contact');

    //             }

    //             public function album(){

    //                 return view('albums-store');

    //                     }
    //                     public function blog(){

    //                         return view('blog');

    //                             }

    // public function event(){

    // return view('event');
    // }

    // public function login(){

    //  return view('login');
    //  }

    public function index() {}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::user()->id ;
        if(Input::file('song_name')->isValid()) {
            //$dest_path = "C:/www/Fuck/resources/assets/upload/";

            $dest_path = "E:/htdocs/Fuck/resources/assets/upload/";
            $name = Input::file('song_name');
            $extension = Input::file('song_name')->getClientOriginalExtension();
            $newFileName = rand(1111, 99999) . '.' . $extension;

            $all = Input::all();
            $fileSize = "";

            //echo base_path();
            Input::file('song_name')->move($dest_path, $newFileName);
            $up_data = array('song_title' => $all['song_title'],
                     'song_file' => $newFileName,
                     'song_remarks' => $all['song_remarks'],
                     'request_status' => 0,
                     'user_id' => $user_id ,
                     'created_at' => date('Y-m-d H:i:s') ,
                     'updated_at' => date('Y-m-d H:i:s') );

            $upload_songs  = DB::table('song_requests')
                    ->insert($up_data);

            /*
            $log = array('user_id' => $user_id ,
                        'activity_info'=> 'Song Request page browse and Upload File',
                        'user_ip'=>$_SERVER['REMOTE_ADDR'] ,
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s')
                        );

             DB::table('user_activity_log')
                ->insert($log);  */

            Session::flush('success', 'Upload Successfully!');
            return Redirect::to('/up');
        } else {


            /*$log = array('user_id' => $user_id ,
                        'activity_info'=> 'Song Request page browse and Upload Fail',
                        'user_ip'=>$_SERVER['REMOTE_ADDR'] ,
                        'created_at'=> date('Y-m-d H:i:s'),
                        'updated_at'=> date('Y-m-d H:i:s')
                        );

             DB::table('user_activity_log')
                ->insert($log); */

            Session::flush('success', 'Upload Error!');
            return Redirect::to('/up');
        }

    }



}

