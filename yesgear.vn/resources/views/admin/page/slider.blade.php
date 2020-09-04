@extends('layout.admin-layout')
@section('content')

<!-- +++++++++++++++++++++ -->
<!-- content start-->
<div id="wp-content" class="bg-light w-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 alert alert-light">
                <h4>Điểu chỉnh quảng cáo trang chủ</h4>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <h5 class=""><u>Bảng hình slider</u></h5>
                    <table class="table table-bordered table-hover text-center">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Hình đang hiển thị</th>
                                <th>Chọn hình mới</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="font-weight-bold">1</td>
                                <td>
                                    <img class="d-block img-fluid"
                                        src="https://hanoicomputercdn.com/media/banner/30_Jun002e814b718497418291b567512c7463.jpg"
                                        width="400" height="150" alt="Second slide">
                                </td>

                                <td>
                                    <div class="custom-file w-75 mt-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="img1">
                                        <label class="custom-file-label" for="">chọn file ảnh 1</label>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">2</td>
                                <td>
                                    <img class="d-block img-fluid"
                                        src="https://hanoicomputercdn.com/media/banner/30_Jun002e814b718497418291b567512c7463.jpg"
                                        width="400" height="150" alt="Second slide">
                                </td>

                                <td>
                                    <div class="custom-file w-75 mt-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="img2">
                                        <label class="custom-file-label" for="">chọn file ảnh 2</label>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">3</td>
                                <td>
                                    <img class="d-block img-fluid"
                                        src="https://hanoicomputercdn.com/media/banner/30_Jun002e814b718497418291b567512c7463.jpg"
                                        width="400" height="150" alt="Second slide">
                                </td>

                                <td>
                                    <div class="custom-file w-75 mt-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="img3">
                                        <label class="custom-file-label" for="">chọn file ảnh 3</label>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">4</td>
                                <td>
                                    <img class="d-block img-fluid"
                                        src="https://hanoicomputercdn.com/media/banner/30_Jun002e814b718497418291b567512c7463.jpg"
                                        width="400" height="150" alt="Second slide">
                                </td>

                                <td>
                                    <div class="custom-file w-75 mt-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="img4">
                                        <label class="custom-file-label" for="">chọn file ảnh 4</label>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold">5</td>
                                <td>
                                    <img class="d-block img-fluid"
                                        src="https://hanoicomputercdn.com/media/banner/30_Jun002e814b718497418291b567512c7463.jpg"
                                        width="400" height="150" alt="Second slide">
                                </td>

                                <td>
                                    <div class="custom-file w-75 mt-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="img5">
                                        <label class="custom-file-label" for="">chọn file ảnh 5</label>
                                    </div>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="form-group float-right">
                        <input type="submit" value="Cập nhật hình mới" class="btn btn-success">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- content end-->
@endsection
