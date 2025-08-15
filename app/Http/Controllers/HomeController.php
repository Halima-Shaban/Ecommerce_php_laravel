<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller{

public function index(){
        return view('front.home');

}


public function sendMessage(Request $request){

       $data= $request->validate([

                "name"=>["required","min:3"],
                "email"=>["required","min:3","email"],
                "message"=>["required","min:5","max:200"],

        ]
        );
        // $data=($request->all());
        // echo $data['name'];
        // echo"</br>";
        // echo $data['email'];

        $message = new Message();
        $message->name = $data['name'];
        $message->email = $data['email'];
        $message->message = $data['message'];
        $message->save(); 
        return back()->with('success',"data inserted successfully");

        // dd($message);
        
}
}