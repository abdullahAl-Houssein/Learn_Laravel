@extends('layout')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <a href="/car" class="btn btn-outline-primary btn-sm">G0 Back</a>
                    <h1>{{$car->nameCar}}</h1>
                    <p>{!! $car->typeCar !!}</p>
                    <hr>
                    <a href="/car/{{$car->id}}/edit" class="btn btn-outline-primary">Edit Car</a>
                    <br><br>
                    <form class="" id="delete-form" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger">Delete Car</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
