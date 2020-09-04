@extends('layout.layout')
@section('content')
    <!-- content start -->
    <div class="container">
        <div class="row">
            @foreach ($news as $n)
                <div class="col">
                    <br><br>
                    <div class="card" style="">
                        <a href='{{ url("news/show/$n->id") }}'><img class="card-img-top" src="{{ asset($n->thumbnail) }}"
                                alt="Card image cap"></a>
                        <div class="card-body">
                            <a href='{{ url("news/show/$n->id") }}'>
                                <h5 class="card-title">{{ $n->title }}</h5>
                            </a>
                        </div>
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
    <!-- content end -->
@endsection
