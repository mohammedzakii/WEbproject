@extends('layouts.app')



            @section('content')
                <div class="content">
                    <div class="title m-b-md">
                        programming language
                    </div>    
                </div>


                <div class="content">
                    <div class="title m-b-md">
                    
                        @foreach($myname as $mynames)
                        
                            {{$mynames}}
                        
                        @endforeach
                    
                    </div>    
                </div>
            @endsection    