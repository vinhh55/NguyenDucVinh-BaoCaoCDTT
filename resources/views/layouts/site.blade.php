<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MUSIC &ndash; Official Lana Del Rey Store</title>
    <link rel="icon" type="image/x-icon" href="image/icon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href={{ @asset('fontawesome/css/all.min.css') }}>
    <link rel="stylesheet" href={{ @asset('css/vinh.css') }}>

</head>

<body>
    {{-- LIÊN HỆ --}}
 
   
    <div class="container">
        <section class="header">
            <div class="row">
                <div class="col-md-3 ">
                    <img style="height: 50px; width: 200px;" src="{{ @asset('image/logo.webp') }}" alt="hinh">
                </div>
                <div class="col-md-3 py-2">
                    <a href="#"><i class="fas fa-phone-square-alt ms-4 fs-4" style="color: #000000;"></i><strong
                            class="text-body" style="margin-top: 5px">
                            Liên hệ:0123456789</strong></a>
                </div>
                <div class="col-md-2 py-2">
                    <a href="#"><i class="fa-regular fa-heart fa-fade ms-4 fs-4" style="color: #000000;"></i>
                        <strong class="text-body  col-12">
                            Yêu Thích</strong> </a>
                </div>
                <div class="col-md-2 py-2">
                    <a href="account.blade.php"> <i class="fa-solid fa-user text-black ms-4 fs-4 "></i><strong
                            class="text-body col-12"> Tài
                            Khoản</strong> </a>
                </div>
                <div class="col-md-2 py-2">
                    <a href="index.php"> <i class="fa-solid fa-bag-shopping text-black  ms-4 fs-4"></i><strong
                            class="text-body col-12"> Giỏ Hàng</strong> </a>
                </div>
            </div>
    </div>
        <x-mainmenu />

    {{-- Slider --}}
    <x-slider-show />
    </section>
    {{-- mainmenu --}}
    
    <!-----------------------------danh sách sp----------------------------------->

    <h4> CLARENCE Xin Chào</h4>
  
    {{-- <section>
        <div id="wrapper">
               @foreach ($list_category as $category)
                    <x-product-home :cat="$category"/>
               @endforeach
        </div>

  
    </section> --}}
    @foreach ($list_category as $cat)
        <x-product-home :cat='$cat' />
    @endforeach
    {{-- CUỐI --}}



    <section class="tuyendung text-center border-top py-2">
        <div class="container">
            <h2 class="text-center py-1">BÀI VIẾT MỚI NHẤT</h2>
            <div class="row py-1">
                <div class="col-4">
                    <img src="image/bb1.jpg" width="80%" alt="">
                    <p>Billie Eilish Pirate Baird O'Connell (/ˈaɪlɪʃ/ EYE-lish;[2] sinh ngày 18 tháng 12 năm 2001) là
                        một nữ ca sĩ và nhạc sĩ người Mỹ. Cô lần đầu tiên được công chúng chú ý vào năm 2015 với đĩa đơn
                        đầu tay "Ocean Eyes", sau đó được phát hành bởi công ty con Darkroom của Interscope Records. Bài
                        hát được viết và sản xuất bởi anh trai của cô là Finneas O'Connell, người mà cô thường xuyên hợp
                        tác về âm nhạc và trong các buổi biểu diễn trực tiếp. </p>
                </div>
                <div class="col-4">
                    <img src="image/bb2.jpg" width="90%" alt="">
                    <p>Album phòng thu đầu tiên When We All Fall Asleep, Where Do We Go? (2019) của nữ ca sĩ dẫn đầu
                        bảng xếp hạng Billboard 200 của Hoa Kỳ và đạt vị trí số 1 tại Vương quốc Anh. Đây là một trong
                        những album bán chạy nhất năm 2019, nổi lên nhờ vào sự thành công từ đĩa đơn thứ năm "Bad Guy"
                        của cô - đĩa đơn quán quân đầu tiên của Billie Eilish trên Billboard Hot 100.</p>
                </div>
                <div class="col-4">
                    <img src="image/bb3.jpg" width="90%" alt="">
                    <p>Billie Eilish đã nhận được nhiều giải thưởng, bao gồm 7 giải Grammy Awards, 4 giải Brit Awards, 3
                        giải MTV Video Music Awards, 2 giải American Music Awards, 1 giải Golden Globe Awards, 1 giải
                        Oscar cho hạng mục Ca khúc trong phim xuất sắc nhất, và 2 kỷ lục Guinness thế giới.</p>
                </div>
            </div>
        </div>
    </section>
    <section class=" footer py-4 text-center border-top py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2>Địa chỉ:</h2>
                    <p> Số 55 Quang Trung, Nguyễn Du, Hai Bà Trưng, Hà Nội
                        Số điện thoại:
                        (+84) 1900571595
                        Email: cskh_online@nxbkimdong.com.vn. </p>
                </div>
                <div class="col-md-3">
                    <h2>HỖ TRỢ</h2>
                    <ul>
                        <li> <a href="#">Hướng dẫn đặt hàng</a> </li>
                        <li> <a href="#">Chính sách đổi trả - hoàn tiền</a> </li>
                        <li> <a href="#"> Phương thức vận chuyển</a> </li>
                        <li> <a href="#">Phương thức thanh toán</a> </li>
                        <li> <a href="#">Chính sách khách hàng mua sỉ</a> </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2>Dịch vụ</h2>
                    <ul>
                        <li> <a href="#">Điều khoản sử dụng</a> </li>
                        <li> <a href="#">Chính sách bảo mật</a> </li>
                        <li> <a href="#">Liên hệ</a> </li>
                        <li> <a href="#">Hệ thống nhà sách</a> </li>
                        <li> <a href="#">Tra cứu đơn hàng</a> </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h2>Mạng xã hội</h2>
                    <div class="icon">
                        <a href="#"> <i class="fa-brands fa-apple fa-fade fa-2xl"
                                style="color:#f6da69;"></i></a>
                        <a href="#"> <i class="fa-brands fa-youtube fa-fade fa-2xl"
                                style="color:#f6da69;"></i></a>
                        <a href="#"> <i class="fa-brands fa-spotify fa-fade fa-2xl"
                                style="color:#f6da69;"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/HB-Bk3nvvpo?si=DiWzNOY-vGyq_b6m"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <h5>ĐĂNG KÝ NHẬN TIN</h5>
                    <p>Hãy nhập địa chỉ email của bạn vào ô dưới đây để có thể nhận được tất cả các tin tức mới nhất của
                        tôi về các sản phẩm mới, các chương trình khuyến mãi mới. Chúng tôi xin đảm bảo sẽ
                        không gửi mail rác, mail spam tới bạn.</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text text-white bg-black" id="basic-addon2">Đăng nhập</span>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62703.810674954286!2d106.67646922534743!3d10.812217030461785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175289f02a8eae9%3A0x34ec9d90e055cde3!2zQsOsbmggVGjhuqFuaCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1688107799399!5m2!1svi!2s"
                        width="550" height="160" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class=" text-center border-top py-2">
                    <strong><a href="https://www.facebook.com/xvihr.553" class="text-black">NGUYỄN ĐỨC VINH
                            © 2023 Official Lana Del Rey Store. All Rights Reserved.
                        </a>
                    </strong>
                </div>
    </section>
    <div class="container">
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
            integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>
</html>
