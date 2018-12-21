@extends('layouts.default')
@section('content')

<div class="container">
<br/>
<div class="panel panel-default">
        
    <div class="panel-heading">
        <p class="panel1">Wellcome to our test</p>
        <p class="panel2" style="margin-left: -10px;">{{$student_infos ->fullname}}</p>
    </div>

        <div class="panel-body">
             
                        <h2 class="topic">{{$topics->name_topic}}</h2>
                          <div id="timer"></div>

                        <div class="panel panel-default">

                        <div class="panel-body">
                        <div id="page-wrap">   
                            <form action="{{route('student_results',$topic->id)}}" method="get" id="quiz" name="quiz" id="quiz">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <?php $num_ques = 0; ?>
                                @foreach($quess as $quesss)
                                <div>
                                    <label>

                                    <input class="question" type="text" name="question_id[{{$num_ques}}]" value="{{$quesss->id_question}}">{!!$quesss->question->content!!}

                                    </label>
                                </div>
                                    @foreach($quesss->Question->answers as $ans)
                                        <div>
                                            <label>
                                                <input type="radio" name="answer[{{$num_ques}}]" value="{{$ans->id}}"/>{!!$ans->answer!!}

                                            </label>
                                        </div>
                                    @endforeach
                                    <?php $num_ques++; ?>
                                @endforeach
                                <button type="submit" class="button_send">Submit</button>
                            </form>  
                            

                            </div>

                </div>   
          
                        </div>   

                </fieldset>             
            <div class="clearfix"></div>

        </div>              

    </div>

</div>
@endsection
