@extends('home')

@section('main-content')
    <div class="comics">
        <div class="container">
            <div class="row justify-content-around">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Type</th>
                            <th class="col">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{$comic->id}}</th>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->price}}</td>
                            <td>{{$comic->type}}</td>
                            <td>
                                <a class="btn btn-sm btn-outline-primary" href="{{route('comics.show', $comic->id)}}">Show</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
