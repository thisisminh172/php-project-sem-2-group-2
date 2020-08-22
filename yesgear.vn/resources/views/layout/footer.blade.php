<!-- footer start -->

<footer id="wp-footer" class="container-fluid bg-dark text-white p-0 m-0">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>© 2020 Công Ty Cổ Phần Máy Tính Hà Nội</p><br>
                <p>Địa chỉ: Số 129 + 131, phố Lê Thanh Nghị, Phường Đồng Tâm, Quận Hai Bà Trưng, Hà Nội</p><br>
                <p>GPĐKKD số 0101161194 do Sở KHĐT Tp.Hà Nội cấp ngày 31/8/2001</p><br>
                <p>Email: hnc@hanoicomputer.com. Điện thoại: 1900 1903</p>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->



{{-- script starts --}}

<script>
$(document).ready(function() {

    $('#search-box').keyup(function() { //bắt sự kiện keyup khi người dùng gõ từ khóa tim kiếm
        var query = $(this).val(); //lấy gía trị ng dùng gõ
        if (query != '') //kiểm tra khác rỗng thì thực hiện đoạn lệnh bên dưới
        {
            var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
            $.ajax({
                url: "{{ route('home.find') }}", // đường dẫn khi gửi dữ liệu đi 'search', là tên route đã đặt
                method: "POST", // phương thức gửi dữ liệu.
                data: {
                    query: query,
                    _token: _token
                },
                success: function(data) { //dữ liệu nhận về
                    $('#productList').fadeIn();
                    $('#productList').html(data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là productList
                }
            });
        }
    });

    $(document).on('click', 'li', function() {
        $('#search-box').val($(this).text());
        $('#productList').fadeOut();
    });

});
</script>

{{-- script ends --}}




<!-- bootstrap start-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>

<!-- ajax start-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- ajax end-->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
<!-- bootstrap end-->

</body>

</html>
