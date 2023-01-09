@extends('layout.main')

@section('content')
    <div class="container">
        <h1>Elenco libri</h1>

        <div class="row">

            @foreach ($books as $book)
                <div class="col-4 mb-3">
                    <div class="card" >
                        <a href="{{route('bookDetail', $book->id)}}">
                             <img src="{{$book->cover_image}}" class="card-img-top" alt="{{$book->title}}">
                         </a>
                        <div class="card-body">
                          <h5 class="card-title text-black">{{$book->title}}</h5>
                          <p class="card-text text-black">{{$book->plot}}</p>
                        </div>
                      </div>
                </div>

            @endforeach

        </div>



    </div>
@endsection
