@extends('layouts.main')

@section('title')
	Subscribe to The Newsletter
@endsection

@section('content')

	<div class="content">
          <div class="form-container">
             
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
       
            {{ Form::open(array('route' => 'signup', 'class' => 'form')) }}
               
              <div class="form-group">
               {{ Form::label('first_name', 'First Name', array('class' => 'form-label')) }}
               {{ Form::text('first_name' , null, array('class' => 'form-control', 'placeholder' => 'Orlando')) }}
              </div>
                
              <div class="form-group">
                 {{ Form::label('last_name', 'Last Name', array('class' => 'form-label')) }}
                 {{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Polanco')) }}
               </div>
               
              <div class="form-group">
              {{ Form::checkbox('validate', null, false, array('class' => 'inline')) }}
              {{ Form::label('validate', 'Validate with JS?', array('class' => 'form-label inline')) }}
              	
              </div>
              
              <div class="form-group">
               {{ Form::submit('Sign Up!', array('class'=> 'btn btn-primary')) }}
              </div>
              
            {{ Form::close() }}
            
      </div>
	</div>
@endsection

@section('footer')
	<script type="text/javascript">
		
		$('.form').on('submit', function(e){
		   
		   
		   if( $("input[type='checkbox']").is(':checked') ){
			   
			 
			 if ((!$("#first_name").val()) || (!$("#last_name").val())) {
				   $("input[type='text']").addClass('error');
				   return false
			  }
				
		   }//end if
		  
		});

	</script>
@endsection
