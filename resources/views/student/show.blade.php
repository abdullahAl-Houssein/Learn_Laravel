{{--
@extends('layout')
@section('content')
    <div class="container">
        <div class="col-12 pt-2">
            <a href="/student" class="btn btn-outline-primary btn-sm">G0 Back</a>
            <table class="table">
                <th>
                    <tr>
                        <td>Name</td>
                        <td>Father</td>
                        <td>Age</td>
                    </tr>
                </th>
                <tr>
                    <td>{{$student->name}}</td>
                    <td>{{$student->father}}</td>
                    <td>{{$student->age}}</td>
                </tr>
            </table>
            <hr>
            <a href="/student/{{$student->id}}/edit" class="btn btn-outline-primary">Edit Student</a>
            <br><br>
            <form class="" id="delete-form" action="" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-outline-danger">Delete Student</button>
            </form>
        </div>
    </div>

@endsection

--}}
@extends('layout')
@section('content')
    <style>
        h1{
            color: blue;
        }
        hr{
            border:  1px black double;
        }
    </style>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <a href="/student" class="btn btn-outline-primary btn-sm">G0 Back</a>
                    <h1>Name Student</h1>
                    <p>{{$student->name}}</p>
                    <h1>Type Car</h1>
                    <p>{!! $student->father !!}</p>
                    <h1>Price Car</h1>
                    <p>{!! $student->age !!}</p>
                    <hr>
                    <a href="/car/{{$student->id}}/edit" class="btn btn-outline-primary">Edit Student</a>
                    <br><br>
                    <form class="" id="delete-form" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger">Delete Student</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

