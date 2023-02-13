@extends('home')

@section('main-content')
    <div class="comics">
        <div class="container">
            <div class="row justify-content-around">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{$comic->id}}</th>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->price}}</td>
                            <td>{{$comic->type}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
