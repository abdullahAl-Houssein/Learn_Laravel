@extends('layout')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <div class="row">
                        <div class="col-8">
                            <h1>Our Car</h1>
                            <p>Enjoy Reading Our Car.</p>
                        </div>
                        <div class="col-4">
                            <p>Creat new post</p>
                            <a href="/car/create/post" class="btn btn-primary btn-sm">Add Car</a>
                        </div>
                    </div>
                    @forelse($cars as $car)
                        <ul>
                            Name Car <li><a href="./car/{{$car->id}}">{{$car->nameCar}}</a></li>
                            <hr style="border: 1px black double">
                        </ul>
                    @empty
                        <p class="text-warning">No cars available</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
