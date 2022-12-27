
@extends('layout')
@section('content')
    <dev class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/student" class="btn btn-outline-primary btn sm">Go Back</a>
            </div>
            <div class="border rounded mt-5 p-4">
                <h1>Create a New Student</h1>
                <p>fill and submit this form to create a Student</p>
                <hr>
                <form  action=""method="post">
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="name">Student Name</label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="father">Father</label>
                            <textarea id="father" class="form-control" name="father" required></textarea>
                        </div>
                        <div class="control-group col-12">
                            <label for="avg">Avg</label>
                            <textarea id="avg" class="form-control" name="avg" required></textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-primary">
                                Create Student
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </dev>
@endsection

