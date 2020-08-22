{{-- header start --}}
@include('layout.header')
{{-- header end --}}


<div id="wp-body">
    @yield('content')
</div>



{{-- footer start --}}
@include('layout.footer')
{{-- footer end --}}
