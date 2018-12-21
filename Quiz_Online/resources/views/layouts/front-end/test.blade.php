@extends('layouts.default')
@section('content')

<div class="container">
<br/>
<div class="panel panel-default">
        
    <div class="panel-heading">
        <p class="panel1">Wellcome to our test</p>
        <p class="panel2" style="margin-left: -10px;">{{$student_info ->fullname}}</p>
    </div>

        <div class="panel-body">
             
                        <h2 class="topic">{{$topic->name_topic}}</h2>
                          <div id="timer"></div>

    <script type="text/javascript">
      var total_seconds = 60*{{$topic -> duration}};
      var c_minutes = parseInt(total_seconds/60);
      var c_seconds = parseInt(total_seconds%60);
      function checktime()
      {
        document.getElementById("timer").innerHTML =c_minutes + ' : ' + c_seconds ;
        if(total_seconds <= 0)
        {
            setTimeout('document.quiz.submit()',1);
        }
        else
        {
            total_seconds = total_seconds -1; 
            c_minutes = parseInt(total_seconds/60);
            c_seconds = parseInt(total_seconds%60);
            setTimeout("checktime()",1000);
        }
      }
      setTimeout("checktime()",1000);



</script>
                        <div class="panel panel-default">

                        <div class="panel-body">
                        <div id="page-wrap">   
                            <form action="{{route('student_results',$topic->id)}}" method="get" id="quiz" name="quiz" id="quiz">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <?php $num_ques = 0; ?>
                                @foreach($ques as $quess)
                                <div>
                                    <label>

                                    <input class="question" type="text" name="question_id[{{$num_ques}}]" value="{{$quess->id_question}}">{!!$quess->question->content!!}

                                    </label>
                                </div>
                                    @foreach($quess->Question->answers as $ans)
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
