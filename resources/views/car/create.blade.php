
@extends('layout')
@section('content')
    <dev class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/car" class="btn btn-outline-primary btn sm">Go Back</a>
            </div>
            <div class="border rounded mt-5 p-4">
                <h1>Create a New Car</h1>
                <p>fill and submit this form to create a car</p>
                <hr>
                <form  action=""method="post">
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="nameCar">Car Name</label>
                            <input type="text" id="nameCar" class="form-control" name="nameCar" required>
                        </div>
                        <div class="control-group col-12">
                            <label for="typeCar">Type Car</label>
                            <textarea id="typeCar" class="form-control" name="typeCar" required></textarea>
                        </div>
                        <div class="control-group col-12">
                            <label for="priceCar">Price Car</label>
                            <textarea id="priceCar" class="form-control" name="priceCar" required></textarea>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button id="btn-submit" class="btn btn-primary">
                                Create Car
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </dev>
@endsection

