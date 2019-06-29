@extends('layouts.app')


            @section('content')
                <h1>create post</h1>
            <form method="post" , action="{{action('PostsController@update', $id)}}" >
                {{csrf_field()}}
                <input name="_method" type="hidden" value="PATCH">
                <div class="form-group container">
                    <label class="col-form-label" for="inputDefault">Subject</label>
                    <input type="text" class="form-control" placeholder="" id="inputDefault" name="subject" > </div>
                <div class="form-group container">
                    <label class="col-form-label" for="inputDefault">First Name</label>
                    <input type="text" class="form-control" placeholder="" id="inputDefault" name="firstname">
                </div>
                <div class="form-group container">
                    <label class="col-form-label" for="inputDefault">Last Name</label>
                    <input type="text" class="form-control" placeholder="" id="inputDefault" name="lastname" >
                </div>
                <div class="form-group container">
                    <label class="col-form-label" for="inputDefault">Body</label>
                    <input type="text" class="form-control" placeholder="" id="inputDefault" name="body">
                </div>
                
                <div class="form-group container">
                    <button type="submit" class="btn btn-primary" id="article-ckeditor">Update</button>
                </div>    

                
            </form>
              

 

            @endsection    