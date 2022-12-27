@extends('layout')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <a href="/blog" class="btn btn-outline-primary btn-sm">G0 Back</a>
                    <h1>{{$post->title}}</h1>
                    <p>{!! $post->body !!}</p>
                    <hr>
                    <a href="/blog/{{$post->id}}/edit" class="btn btn-outline-primary">Edit Post</a>
                    <br><br>
                    <form class="" id="delete-form" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger">Delete Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
