<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

use App\Mail\SendMail;

use Illuminate\Support\Facades\Mail;

class start extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function trailers(){
        $Movie = Movie::paginate(6);
        return view('trailers', compact('Movie'));
    }

    public function contact(){
        return view('contact');
    }

    public function show($id){
        $Movie = Movie::findOrFail($id);

        return view('store', compact('Movie'));
    }

    public function send(Request $request){

        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
           ]);
           
        $data = array(
              'name'      =>  $request->input('name'),
              'message'   =>   $request->input('message')
          );
      
        $email = $request->input('email');

        Mail::to($email)->send(new SendMail($data));
        return back()->with('success', 'Sent succesfully!');
        
    }
}
