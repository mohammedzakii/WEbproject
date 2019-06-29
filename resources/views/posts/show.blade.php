@extends('layouts.app')

            @section('content')
            <div class="panel panel-danger container">
            	<div class="panel-heading">
            		<h3 class="panel-title">{{$post->firstname}} - {{$post->lastname}}</h3>
                    @if(!Auth::guest())
                    @if(Auth::user()->id == $post->user_id)
                    <a href="/project/public/posts/{{$post->id}}/edit" class="pull-right" >Edit</a>
                    @endif
                    @endif

            	</div>
            	<div class="panel-body">

                    @if(!Auth::guest())
                    @if(Auth::user()->id == $post->user_id)

                    <form action="{{action('PostsController@destroy', $post['id'])}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    @endif    
                    @endif    
                    <h2>{{$post->subject}}</h2>
                    <p>{{$post->body}}</p>
                    <span class="badge badge-danger">created at: {{$post->created_at}}</span>
                    <a class="pull-right" href="/project/public/posts" type="button" class="btn btn-warning">Back</a>
                    <br>
                             		
            		
            	</div>
            </div>

            @endsection    