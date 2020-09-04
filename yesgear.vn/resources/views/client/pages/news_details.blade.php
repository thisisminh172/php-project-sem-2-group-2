@extends('layout.layout')

@section('content')
    <!-- content start -->
    <div class="container">
        <br><br>
        <div class="" style="">
            <div class="card-body">
                <a href=''>
                    <h5 class="card-title">{{ $news->title }}</h5>
                </a>
                <a href=''>
                    <p class="card-text">{!! $news->content !!}</p>
                </a>
            </div>
        </div>
        <hr>


    </div>
    <!-- content end -->
@endsection
