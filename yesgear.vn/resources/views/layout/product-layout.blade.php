
    {{-- header start --}}
    @include('layout.header')
    {{-- header end --}}


    <div class="container-fluid" id="wp-body">
        <div class="row">
            <div class="col-sm-2 bg-light p-0 mt-2">
                {{-- sidebar start --}}
                @include('layout.product-sidebar')
                {{-- sidebar and --}}
            </div>

            <div class="col-sm-10 bg-light p-0 mt-2">
                {{-- content start --}}

                @yield('content')

                {{-- content end --}}
            </div>

        </div>
    </div>



    {{-- footer start --}}
    @include('layout.footer')
    {{-- footer end --}}






