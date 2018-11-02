<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messges;

class MessagesController extends Controller
{
   	public function submit(Request $request){
   		$this -> validate($request, [
   			'name' => 'required',
   			'email' => 'required']);
   		
   		//create new message

   		$message = new Messges;
   		$message->name=$request->input('name'); 
   		$message->email=$request->input('email'); 
   		$message->message=$request->input('message');

   		//save message

   		$message ->Save();

   		//redeirect

   		return redirect('/')->with('success','Message sent');

   	}	

   	public function getMessages(){
         $messages = Messges::all();
         return view('messages')->with('messages',$messages);
   		
   	}
}
