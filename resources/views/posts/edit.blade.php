@extends('layouts.app')

@section('title', '| Edit Post')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">
    
        <h1>Edit Post</h1>
        <hr>
        @include ('errors.list')
            {{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT' , 'files' => true)) }}
            <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}<br>

             <br>
            {{ Form::label('body', 'Upload') }}

            {{ Form::file('img',   ['class' => 'form-control'])  }}

         <!--  <input type="file" name="img[]" class="form-control" multi ple > -->
      <!--  {{ Form::file('img[]', ['multiple' => 'multiple']) }}  -->

        <br>
            {{ Form::label('body', 'Upload') }}

            {{ Form::file('main',   ['class' => 'form-control'])  }}

         <!--  <input type="file" name="img[]" class="form-control" multi ple > -->
      <!--  {{ Form::file('img[]', ['multiple' => 'multiple']) }}  -->

            <br>

            {{ Form::label('body', 'Post Body') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}<br>


            
             {{ Form::label('category', 'Category') }}
            {{ Form::text('category', null, array('class' => 'form-control')) }}  <br>


            <br>


            
            {{ Form::label('status', 'Status') }}
            {{ Form::text('status', null, array('class' => 'form-control')) }}  <br>

            {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
    </div>
    </div>
</div>

@endsection