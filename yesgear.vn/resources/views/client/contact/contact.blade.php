@extends('layout.layout')
@section('content')
<!-- content start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <h3>Hệ thống phân phối đồ chơi gaming</h3>
            <hr>
            <div>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Họ tên</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Số điện thoại</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nội dung</label>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Nội dung..." class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-success">
                        <input type="reset" value="Reset" class="btn btn-dark">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <h2>Offices system</h2>
            <div class="jumbotron">
                <h3>Ho Chi Minh City</h3>
                <p>593 CMT8, District 3</p>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal1"><span
                        class="glyphicon glyphicon-map-marker" data-target="#mymodal1"></span>
                    Map
                </button>
                <!-- The Modal -->
                <div class="modal" id="myModal1">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" id="content">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3699.4451890017294!2d106.69927063846427!3d10.778679666879658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f557086335b%3A0x16750de4f0e41e8a!2zQ8O0bmcgdHkgQuG6o28gVmnhu4d0IFPDoGkgR8Oybg!5e0!3m2!1sen!2s!4v1576292645628!5m2!1sen!2s"
                                    width="570" height="450" frameborder="" allowfullscreen=""></iframe>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
                <button class="btn btn-info"><span class="glyphicon glyphicon-phone-alt"></span> Phone</button>
            </div>

            <div class="jumbotron">
                <h3>Ha Noi City</h3>
                <p>21 Tran Duy Hung, Ba Dinh District</p>
                <!-- Button to Open the Modal  -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal3"><span
                        class="glyphicon glyphicon-map-marker" data-target="#mymodal"></span>
                    Map
                </button>
                <!-- The Modal -->
                <div class="modal" id="myModal3">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" id="content">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3699.4451890017294!2d106.69927063846427!3d10.778679666879658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f557086335b%3A0x16750de4f0e41e8a!2zQ8O0bmcgdHkgQuG6o28gVmnhu4d0IFPDoGkgR8Oybg!5e0!3m2!1sen!2s!4v1576292645628!5m2!1sen!2s"
                                    width="570" height="450" frameborder="0" style="border:0;"
                                    allowfullscreen=""></iframe>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>
                <button class="btn btn-info"><span class="glyphicon glyphicon-phone-alt"></span> Phone</button>
            </div>
        </div>
    </div>
</div>


<!-- content end -->
@endsection
