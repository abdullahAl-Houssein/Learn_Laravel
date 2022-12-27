@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{config('app.name')}}</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam incidunt, ratione! Atque consectetur distinctio explicabo illo magnam minus, quas quod repudiandae vitae voluptatum. Cumque, explicabo laborum minima nesciunt nihil quod?</p>
                <br>
                <a href="/blog" class="btn btn-outline-dark">Show Blog</a>
            </div>
        </div>
    </div>
@endsection
