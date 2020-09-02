<!-- header start -->

<div id="wp-header" class="bg-dark position-fixed d-block w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="{{ url('admin') }}" class="display-4 font-weight-bold text-decoration-none"><span
                        class="text-light">HELLO</span><span class="text-danger">ADMIN</span></a>
            </div>
            <div class="col">
                <p class="text-light text-right" id="user-login">Hello {{ session('name') }}</p>
            </div>
        </div>
    </div>


</div>
<!-- header end -->
