<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic_question;
use App\Topic;
use App\Subject;
use App\Student_test;
use DB;
use Session;
use App\Student_result;
use App\Answer_question;
use App\Student;
use App\Result;
class TestController extends Controller
{
	public function getTopic()
	{
		$id2 = Session::get('ids');		
		$id_topic = Session::get("topic");
                   $id_topic[] = array(
                       "topic " => 0,
                   );
                   Session::put('id_topic', $id_topic);
    	$topic =Topic::all();

    	$student_info = Student::where('id',$id2[0]['id'])->first();
    	$tested = DB::table('student_result')->distinct()->select('id_topic')->where('id_student',$id2[0]['id'])->get();

    	$result = Result::where('id_student',$id2[0]['id'])->get();
    															 
    	 // dd(Session::get('id_topic'));
        return view('layouts.front-end.topic_information',
        	 compact('topic','student_info','tested','result'));

    }

    public function getTest($id)
    {
    	$id2 = Session::get('ids');

        $student_info = Student::where('id',$id2[0]['id'])->first();
    	$id_subject = DB::table('topics')->select('id_subject')->first();
    	$topic =Topic::where('id',$id)->first();
    	$subjects =Subject::where('id',$id_subject->id_subject)->first();
        $ques = Topic_question::where('id_topic',$id)->get();


        $student = new Student_test();
        $student->id_student = $id2[0]['id'];
        $student->id_topic = $topic->id;
        $student->start_time = date("h:i:s");
        $student->end_time = date("h:i:s" ,strtotime("+ $topic->duration minutes", strtotime(date("h:i:sa"))));
        $student->status_student_start = "1";
        $student->save();
        return view('layouts.front-end.test', compact('subjects','ques','topic','student_info'));
    }

    public function postStudent_resul(Request $request,$id)
    {

    	$id2 = Session::get('ids');

    	// $topic = Topic::all();
    	$topic = Topic::where('id',$id)->first();
    	$question_ids = $request->input('question_id');
    	 $ans = $request->input('answer');
    	 // var_dump($question_ids);
    	 // var_dump($ans);
    	 // var_dump($id);

$count = 0;
    	for($x= 0; $x < count($question_ids); $x++)
    	{	

        $id_ques = (int)$question_ids[$x];
        $id_anss =(int)$ans[$x];

        $correctt = DB::table('answer_question')->select('id')->where('id_question',$id_ques)
                                                                 ->where('correct',1)->first();
        $student_resul = new Student_result();

    	$student_resul->id_student = $id2[0]['id'];
        $student_resul->id_topic = $id;
        $student_resul->id_question = (int)$question_ids[$x];
        $student_resul->id_answer_st = (int)$ans[$x];
        $student_resul->id_correct =  $correctt ->id;
        $student_resul->save();
    	}

		
    	for($x= 0; $x < count($question_ids); $x++)
    	{
    		$id_que = (int)$question_ids[$x];
    		$id_ans =(int)$ans[$x];
    		// var_dump($id_ans);
    		$correct = DB::table('answer_question')->select('id')->where('id_question',$id_que)
    															 ->where('correct',1)->first();
    		if($correct->id == $id_ans)
    		{
    			$count++;

    		}

    	}


		$result = new Result();

    	$result->id_student = $id2[0]['id'];
        $result->name_topic = $topic->name_topic;
        $result->total_corect = $count;
        $result->save();
                  
    	return redirect()->route('infor') ;

    }

    
    public function getResult($id)
    {
        $id2 = Session::get('ids');
        $student_infos = Student::where('id',$id2[0]['id'])->first();
        $topics =Topic::where('id',$id)->first();
        $quess = Topic_question::where('id_topic',$id)->get();

        $results= DB::table('student_result')->where('id_student',$id2[0]['id'])
                                                                 ->where('id_topic',$id)->get();

        return view('layouts.front-end.return_answer', compact('quess','topics','student_infos','results'));
    }
}
