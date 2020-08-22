{{-- header start --}}
@include('layout.header')
{{-- header end --}}


<div class="container" id="wp-body">
    <div class="row">
        <div class="col">
            @yield('content')
        </div>
    </div>
</div>



{{-- footer start --}}
@include('layout.footer')
{{-- footer end --}}
