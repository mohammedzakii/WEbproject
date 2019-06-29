@extends('layouts.app')


            @section('content')
                <h1>create post</h1>
            <form method="post" , action="{{url('posts')}}" , enctype="'multipart/form-data" >
                {{csrf_field()}}
                <div class="form-group container">
                    <label class="col-form-label" for="inputDefault">Subject</label>
                    <input type="text" class="form-control" placeholder="" id="inputDefault" name="subject">
                </div>
                <div class="form-group container">
                    <label class="col-form-label" for="inputDefault">First Name</label>
                    <input type="text" class="form-control" placeholder="" id="inputDefault" name="firstname">
                </div>
                <div class="form-group container">
                    <label class="col-form-label" for="inputDefault">Last Name</label>
                    <input type="text" class="form-control" placeholder="" id="inputDefault" name="lastname">
                </div>
                <div class="form-group container">
                    <label class="col-form-label" for="inputDefault">Body</label>
                    <input type="textarea" class="form-control" placeholder="" id="inputDefault" name="body">
                </div>

               
                
                <div class="form-group container">
                    <button type="submit" class="btn btn-primary" id="article-ckeditor">Submit</button>
                </div>    

                
            </form>
              

 

            @endsection    