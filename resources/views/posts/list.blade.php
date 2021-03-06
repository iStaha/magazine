@extends('layouts.app')

@section('title', '| Create New Post')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>List</h1>
        <hr>

        <table class="table table-stripped table-responsive">
        <thead> <th> ID</th>  <th> Title</th>  <th> Status</th>  <th> Action </th></thead>
         <tbody>
          @if ($posts) 
          @foreach ($posts as $post)
         <tr>
         <td> {{$post->id}}</td>
         <td> {{$post->title}}</td> 
         <td>{{$post->status}} </td> 
         <td> 
         @can('Edit Post')
         <a  href="{{ route('posts.edit', $post->id) }}"> <i class="fa fa-edit"> </i> </a>  
         @endcan
       
         <a  href="" > <i class="fa fa-trash"> </i>  </a>
         </td> 
         </tr>
          @endforeach
         @endif
          </tbody>
            

        </table>
        
        </div>
        </div>
   

@endsection