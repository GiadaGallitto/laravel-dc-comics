@extends('home')

@section('main-content')
    <div class="comic">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-12 text-center mb-3">
                    <h6>Enter the data of the comic and press the button to send it to the database</h6>
                </div>
                <div class="col-12">
                    @include('comics.partials.formEditCreate',
                    ['route'=> 'comics.store',
                    'method'=>'POST', 
                    'comic'=> $comic ])
                </div>
            </div>
        </div>
    </div>
@endsection
