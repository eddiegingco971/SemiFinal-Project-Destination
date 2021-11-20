@extends('base')

@section('content')
    
<h1>Adding new person</h1>

   <div class="row">
       <div class="col-md-6">
        {!! Form::open(['url'=>'/destinations', 'method'=>'post']) !!}

        <div class="form-group"> 
         {{Form::label('name', 'Full Name')}}
         {{Form::text('name', null,['class'=>'form-control'])}}
      </div>

        <div class="form-group"> 
            {{Form::label('address', 'Address')}}
            {{Form::text('address', null,['class'=>'form-control'])}}
         </div>

         <div class="form-group"> 
            {{Form::label('type', 'Type of Destination')}}
            {{Form::select('type',[
               '' => '',
               'First Class' =>  'First Class',
               'Second Class'=>  'Second Class',
               'Third Class' =>  'Third Class',
            ], null,['class'=>'form-control'])}}
         </div>

         <div class="form-group"> 
            {{Form::label('rating', 'Rating for Destination')}}
            {{Form::select('rating',[
               '' => '',
               '1 Star' => '1 STAR',
               '2 Star' => '2 STAR',
               '3 Star' => '3 STAR',
               '4 Star' => '4 STAR',
               '5 Star' => '5 STAR',
         ], null,['class'=>'form-control'])}}
         </div>

         <div class="form-group">
            <button class="btn btn-primary float-right">Add New</button>
            </div>
            
        {!! Form::close() !!}
       </div>

       @include('errors')
      </div>
   </div>
@endsection