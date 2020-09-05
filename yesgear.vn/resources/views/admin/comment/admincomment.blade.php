@extends('layout.admin-layout')
@section('content')

<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 alert alert-light">
                <h3>Quản lý bình luận</h3>
            </div>
            @if(session('success'))
            <script>
            alert("{{session('success')}}");
            </script>
            @endif
        </div>
        <div class="row">
            <div class="col">
                @foreach ($comments as $comment)
                <ul>
                    <span><b>Bình luận cho sản phẩm có ID: {{$comment->product_id}} - Bấm vào <a
                                href="{{url('product/show/'.$comment->product_id)}}">
                                <font style color="blue">đây</font>
                            </a> để truy cập sản phẩm</b></span>
                    <li class="alert alert-secondary">
                        <span style="text-transform: uppercase;"><b>{{ $comment->name }}</b> |</span>
                        <span>{{date('d/m/Y H:i',strtotime($comment->created_at))}}</span>
                        <hr>
                        &ensp;<span>{{ $comment->content }}</span>
                        <a href="{{url('admin/delete/comment/'.$comment->id)}}" class="btn btn-link">Delete</a>
                        <br>
                    </li>
                    <ul style="margin-left:6rem;">
                        @foreach($comment->comment_reply as $reply)
                        <li class="alert alert-secondary">
                            <span class="font-weight-bold">{{$reply->name}}:</span>
                            {{$reply->content}}
                            <a href="{{url('admin/delete/commentrep/'.$reply->id)}}" class="btn btn-link">Delete</a>
                        </li>

                        @endforeach
                    </ul>
                </ul>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="paginate-bar">
                    {{$comments->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content end-->
@endsection