@extends('layout')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <div class="row">
                        <div class="col-8">
                            <h1>Our Student</h1>
                            <p>Enjoy Reading Our Student.</p>
                        </div>
                        <div class="col-4">
                            <p>Creat new Student</p>
                            <a href="/student/create/post" class="btn btn-primary btn-sm">Add Student</a>
                        </div>
                    </div>
                    @forelse($students as $student)
                        <ul>
                            Name Student <li><a href="./student/{{$student->id}}">{{$student->name}}</a></li>
                            <hr style="border: 1px black double">
                        </ul>
                    @empty
                        <p class="text-warning">No student available</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
