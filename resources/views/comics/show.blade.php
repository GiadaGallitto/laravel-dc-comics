@extends('home')

@section('main-content')
    <div class="comic">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-12">
                    <div class="card p-4">
                        <div class="card-img text-center">
                            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="img-fluid">
                        </div>
                        <div class="card-title text-center">
                            <h2>{{$comic->title}}</h2>
                        </div>
                        <div class="card-subtitle text-center">
                            <h4>{{$comic->series}}</h4>
                        </div>
                        <p><strong>Sale date: </strong>{{$comic->sale_date}}</p>
                        <h5><strong>Price: </strong>{{$comic->price}} &euro;</h5>
                        <span><strong>Type: </strong>{{$comic->type}}</span>
                        <p class="mt-2"><strong>Description: </strong><br>
                            {{$comic->description}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection