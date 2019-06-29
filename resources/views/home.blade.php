@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a  href="posts/" type="button" class="btn btn-primary btn-lg">Posts</a>
                    <a  href="posts/create" type="button" class="btn btn-primary btn-lg">create</a>
                    <hr>
                @foreach($posts as $post)
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{$post->subject}}</h3>
                    </div>
                    <div class="panel-body">س
                        {!!$post->body!!}
                        <a class="pull-right" href="posts/{{$post->id}}/edit" type="button" class="btn btn-warning">Edit</a>
                        <form action="{{action('PostsController@destroy', $post['id'])}}" method="post">
                        {{csrf_field()}}
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

  
                    </div>
       
                </div>
                @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
