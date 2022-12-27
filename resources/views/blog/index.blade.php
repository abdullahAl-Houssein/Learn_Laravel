@extends('layout')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <div class="row">
                        <div class="col-8">
                            <h1>Our Blog</h1>
                            <p>Enjoy Reading Our Posts.</p>
                        </div>
                        <div class="col-4">
                            <p>Creat new post</p>
                            <a href="/blog/create/post" class="btn btn-primary btn-sm">Add Post</a>
                        </div>
                    </div>
                    @forelse($posts as $post)
                        <ul>
                            <li><a href="./blog/{{$post->id}}">{{$post->title}}</a></li>
                        </ul>
                    @empty
                        <p class="text-warning">No blog posts available</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
