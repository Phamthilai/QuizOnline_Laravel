<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Subject;
use App\Topic;
use App\Topic_question;
use App\Question;
use DB;
use Mail;
class ContactController extends Controller
{
    //contact form
     public function create()
    {
        return view('layouts.front-end.contact');
    }
    public function store(Request $request)
    {
        
        $this->validate($request,[
                    'name' => 'required',
                    'email'=> 'required|email',
                    'phone'=>'required|numeric',
                    'messages'=>'required']);

        // send email to thank you the contacting
        $data = ['name'=>$request->name,
                 'email'=>$request->email,
                 'phone'=>$request->phone,
                 'messages'=>$request->messages
             ];
        Mail::send('layouts.front-end.emails.mail',$data,function($message) use ($data)
        {
        $message -> from('ptlai98@gmail.com','laravel');
        $message -> to($data['email']);
        $message -> subject('[Moon-Cactus] Thank you for your contatc');
        });
      
      // Save data into database
        $contact= new Contact();
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->phone = $request['phone'];
        $contact->message = $request['messages']; 
        $contact->save();
            return redirect()->back()->with('flash_message','Thank you for your message');
    }

    /// create topic 

    public function TopicCreate()
    {
        $subject = Subject::all();
        return view('layouts.front-end.topic',compact('subject'));

    }
    public function TopicStore(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'quantity'=> 'required|numeric',
            'duration'=>'required|numeric']);
        $topic = new Topic();
        $topic->name_topic = $request['name'];
        $topic->quantity_question = $request['quantity'];
        $topic->duration = $request['duration'];
        $topic->id_subject = $request->id_subject;        
        $topic->save();
        $quanlity = $request['quantity'];
        $id_topic = DB::table('topics')->select('id')->where('id_subject',$request->id_subject)->orderBy('id','desc')->limit(1)->get();
        $ques = Question::inRandomOrder()->limit($request['quantity'])->get();
        foreach ($ques as $quess => $ques) {
        $top_ques = new Topic_question;
        $top_ques -> id_topic = $id_topic[0]->id;
        $top_ques -> id_question = $ques['id'];
        $top_ques ->save();  
        }  
        return redirect()->back()->with('flash_message','Create successed');      
    }  
}
