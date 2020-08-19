<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YESGEAR-ADMIN</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    {{-- bootstrap end --}}
    {{--  fontawesome  --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    {{-- texteditor starts --}}
    <script src="https://cdn.tiny.cloud/1/1jc85oh0f27pqf9x8r1nudp0heovwg7jwgsbth4hqwn10mtu/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({selector:'textarea'});
    </script>
    {{-- texteditor ends --}}
    {{-- <!-- style --> --}}
    <link rel="stylesheet" href="{{asset('admin-style.css')}}">


</head>

<body>
    {{-- header start --}}
    @include('layout.admin-header')
    {{-- header end --}}



    {{-- sidebar start --}}
    @include('layout.admin-sidebar')
    {{-- sidebar and --}}

    {{-- content start --}}
    @yield('content')
    {{-- content end --}}



    {{-- footer start - we dont need footer in admin--}}
    {{-- @include('layout.admin-footer') --}}
    {{-- footer end --}}


    {{-- texteditor script starts --}}
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
          toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
          toolbar_mode: 'floating',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
        });
    </script>
    {{-- texteditor script ends --}}




    {{-- validation of all forms in this admin  --}}
    {{-- 2 lines below -starts here --}}
    <script src="{{asset('js/validation/validate.js')}}"></script>
    <script src="{{asset('js/validation/check-data.js')}}"></script>
    {{-- ends here--}}





    {{-- bootstrap --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    {{-- bootstrap end --}}


</body>

</html>
