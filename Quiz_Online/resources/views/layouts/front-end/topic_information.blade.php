@extends('layouts.default')
@section('content') 
	<div class="container">
<br/>
<div class="panel panel-default">
        
    <div class="panel-heading">
    	<p class="panel1">Wellcome to your result</p>
	</div>
        <div class="panel-body">
              
                        <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="row">
                        	<div class="col-md-3">
								<div id="page-wrap">
									<p class="name"><b>{{$student_info -> fullname}}</b></p>
									<p class="name"><b>{{$student_info -> email}}</b></p>
									<p class="name"><b>{{$student_info -> school}}</b></p>
								</div>   
	                        </div>
	                        <div class="col-md-2"></div>
                        	<div class="col-md-6">
                        		<p class="name"><b>Result is:</b></p>
	                        	@foreach($result as $rs)
								<div class="col-md-3">
									<p class="show">{{$rs ->name_topic}}</p>
								</div>
								<div class="col-md-3">
									<p class="show">{{$rs ->total_corect}}</p>
								</div>
								@endforeach
                        	</div>
						</div>

                    </div>

                </div>   
           
            <div class="clearfix"></div>

        </div>              

    </div>
    <div class="panel panel-default">
        
	    <div class="panel-heading">
	    	<p class="panel1">Wellcome to our test</p>
	    </div>
	    <div class="panel-body">
	        <div class="panel panel-default">
	            <div class="panel-body" style="margin-left: 100px">
	           		<!-- <div id="page-wrap"> -->
	           			<div class="row">   
		       				@foreach($topic as $top)
		                	<div class="col-md-2">
		                		{{ $top -> name_topic}}
		                	</div>
			                <?php $dem = 0 ?> 
			                @foreach($tested as $top1)
					
								@if($top1->id_topic == $top->id )
								<div class="col-md-2">
									<button type="button" class="btn btn-warning" disabled="false">Test</button>
								</div> 
								<?php $dem++; ?>
								@endif
							
							@endforeach
							@if($dem == 0)
							
							<div class="col-md-2">
								<button type="button" class="btn btn-warning" ><a href="{{route('tests', $top->id)}}">Test</a></button>
							</div> 
						@endif 
						<div class="col-md-2">
								<button type="button" class="btn btn-warning" ><a href="{{route('resultss', $top->id)}}">Result</a></button>
							</div>       
		  		@endforeach
		            	</div>
		        	<!-- </div> -->
	        	</div>
	    	</div>        
	        <div class="clearfix"></div>
	    </div>              
    </div>

</div>
@endsection