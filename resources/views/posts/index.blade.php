@extends('layouts.app')


            @section('content')
                <div class="content">
                    <div class="container">
                    	<h1>posts</h1>
                        @if(count($posts) > 0 )
                        <div class="row container">
                    	@foreach($posts as $post)
                        <div class="col-sm-4">
                    	<div class="panel panel-primary">
                    		<div class="panel-heading">
                    			<h3 class="panel-title">{{$post->firstname}} - {{$post->lastname}}</h3>
                    		</div>
                    		<div class="panel-body">
                    			<h2>{{$post->subject}}</h2>
                                <span class="badge badge-danger">created at: {{$post->created_at}} by: {{$post->user->name}}</span>
                                <a class="pull-right" href="/project/public/posts/{{$post->id}}" type="button" class="btn btn-warning">More</a>

                    		</div>
                    	</div>
                        </div>
@endforeach   
</div> 
                </div>
            </div>


@else
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oh snap!</strong> <a href="#" class="alert-link">no posts !</a> and try submitting again.
</div>

@endif            



            @endsection    