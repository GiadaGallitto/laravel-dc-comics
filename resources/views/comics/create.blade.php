@extends('home')

@section('main-content')
    <div class="comic">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-12 text-center mb-3">
                    <h6>Enter the data of the comic and press the button to send it to the database</h6>
                </div>
                <div class="col-12">
                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>

                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control" id="series" name="series">
                        </div>

                        <div class="mb-3">
                            <label for="sale_date">Sale Date</label>
                            <input type="date" name="sale_date" id="sale_date" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" id="description" class="form-control" name="description">
                        </div>

                        <div class="mb-3">
                            <label for="thumb" class="form-label">Thumb </label>
                            <input type="text" class="form-control" id="thumb" name="thumb">
                        </div>

                        <button type="submit" class="btn btn-primary">Inserisci</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
