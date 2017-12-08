@extends('layouts.app')

@section('title', '| Create New Post')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Create New Post</h1>
        <hr>
        {{-- @include ('errors.list') --}}

        {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'posts.store' , 'files' => 'true')) }} 

        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}
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
            {{ Form::textarea('body', null, ['class' => 'form-control']) }}
            <br>
            
             {{ Form::label('category', 'Category') }}
            {{ Form::text('category', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>

@endsection