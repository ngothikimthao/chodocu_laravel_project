@extends('Customer.Layout.master')
@section('content')
<body id="top">
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="group latest">
      <article class="sidebar one_quarter">
        <nav class="sdb_holder">
              <ul>
                <li><a href="{{route('baidang1')}}">Bài đăng</a></li>
                <li><a href="{{route('sanpham')}}">Sản phẩm trả giá</a></li>
                <li><a href="{{route('viewprofile')}}">Thông tin cá nhân</a></li>
              </ul>
            </nav>
      </article>
      <article class="one_third">
        <h2>
          <figure class="avatar"><img src="natucam/images/demo/avatar.png" alt="">
            <a href="">Nguyen Thi Ti</a>
          </figure> 
        </h2>
        <h5>
          <ul class= 'nospace btmspace-30 linklist contact'>
            <li><a href="#"><img class="comment_image" src="natucam/images/demo/gallery/01.png" alt=""></a></li>
            
          </ul>
        </h5>
      </article>
      <article class="one_third">
        <br><br><br><br>
        <h5>
          <ul class= 'nospace'>
            <li><i class="fa fa-phone"></i> Số điện thoại:</li><br>
            <li><i class="fa fa-envelope-open"></i> Email:</li><br>
            <li><i class="fa fa-user-circle"></i> Tên người dùng:</li><br>
            <li><i class="fa fa-thermometer-full"></i> Mật khẩu:</li><br>
            <li><i class="fa fa-ravelry "></i> Địa chỉ:</li><br>
            <li><i class=" "><button class = 'btn btn-success'>Sửa</button></i></li>
          </ul>
        </h5>
      </article>
      
    </div>
  </section>
</div>
</body>
@endsection
</html>
