
@extends('Customer.Layout.master')
@section('precontent')
<!-- Slider hien thi thong tin trang web -->
<div class="container-full">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="natucam/images/demo/backgrounds/02.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="natucam/images/demo/backgrounds/02.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="natucam/images/demo/backgrounds/02.png" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
@endsection
@section('content')

<!-- Hiển thị danh mục sản phẩm -->
<div class="wrapper bgded overlay light" style="background-image:url('images/demo/backgrounds/02.png');">
  <section class="hoc container clear"> 
    <div class="sectiontitle">
      <h6 class="heading">Danh mục sản phẩm</h6>
    </div>
    <ul class="nospace group">
      <li class="one_third first btmspace-30">
        <article><i class="btmspace-30 fa fa-3x fa-ravelry"></i>
          <h6 class="heading"><a href="#">Đồ điện tử</a></h6>
          <p>Non id nulla quisque laoreet ullamcorper enim vel porta nam interdum [&hellip;]</p>
        </article>
      </li>
      <li class="one_third btmspace-30">
        <article><i class="btmspace-30 fa fa-3x fa-s15"></i>
          <h6 class="heading"><a href="#">Đồ gia dụng</a></h6>
          <p>Nunc posuere imperdiet nam pharetra urna nec vulputate consectetur nam [&hellip;]</p>
        </article>
      </li>
      <li class="one_third btmspace-30">
        <article><i class="btmspace-30 fa fa-3x fa-ge"></i>
          <h6 class="heading"><a href="#">Báo, sách </a></h6>
          <p>Augue sed velit tempor vehicula ultricies interdum interdum et malesuada [&hellip;]</p>
        </article>
      </li>
      <li class="one_third first">
        <article><i class="btmspace-30 fa fa-3x fa-gg"></i>
          <h6 class="heading"><a href="#">Thời trang</a></h6>
          <p>Fames ac ante ipsum primis in faucibus nam lacus diam pulvinar quis [&hellip;]</p>
        </article>
      </li>
      <li class="one_third">
        <article><i class="btmspace-30 fa fa-3x fa-superpowers"></i>
          <h6 class="heading"><a href="#">Phụ kiện</a></h6>
          <p>Semper cursus dolor suspendisse dictum quam eu consectetur donec [&hellip;]</p>
        </article>
      </li>
      <li class="one_third">
        <article><i class="btmspace-30 fa fa-3x fa-yelp"></i>
          <h6 class="heading"><a href="#">Khác</a></h6>
          <p>Blandit elementum quam ac imperdiet turpis ultrices quis sed enim [&hellip;]</p>
        </article>
      </li>
    </ul>
  </section>
</div>

<!-- Hiển thị hình ảnh được trả phí -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
     <center> <h6 class="heading">Mặt hàng mới nhất </h6></center>
    <div class="group latest">
      <article class="one_third first">
        <figure><a href="#"><img src="natucam/images/demo/320x220.png" alt=""></a>
          
        </figure>
        <div class="txtwrap">
          <h4 class="heading">Iphone X</h4>
          <ul class="nospace meta">
            <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="fa fa-tag"></i> <a href="#">Category Name</a></li>
          </ul>
          <p>Lorem posuere magna quis fermentum lorem elit nec lorem curabitur in finibus urna vivamus magna enim semper [&hellip;]</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </div>
      </article>
      <article class="one_third">
        <figure><a href="#"><img src="natucam/images/demo/320x220.png" alt=""></a>
         
        </figure>
        <div class="txtwrap">
          <h4 class="heading">Iphone 6 </h4>
          <ul class="nospace meta">
            <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="fa fa-tag"></i> <a href="#">Category Name</a></li>
          </ul>
          <p>Tellus integer viverra ante nec ullamcorper ullamcorper nulla tempus placerat ultricies interdum et malesuada fames [&hellip;]</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </div>
      </article>
      <article class="one_third">
        <figure><a href="#"><img src="natucam/images/demo/320x220.png" alt=""></a>
         
        </figure>
        <div class="txtwrap">
          <h4 class="heading">Iphone 7 </h4>
          <ul class="nospace meta">
            <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="fa fa-tag"></i> <a href="#">Category Name</a></li>
          </ul>
          <p>Curabitur tincidunt at quam sed fermentum in at leo non quam rutrum aliquet nullam quam odio fermentum [&hellip;]</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </div>
      </article>
    </div>
    <!-- <div class="clear"></div> -->
  </section>
</div>
<!-- Hiển thị CLB -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <center> <h6 class="heading">Câu lạc bộ được từ thiện nhiều nhất</h6></center>
    <div class="group latest">
      <article class="one_third first">
        <figure><a href="#"><img src="natucam/images/demo/320x220.png" alt=""></a>
          
        </figure>
        <div class="txtwrap">
          <h4 class="heading">CLB Hope Đà Nẵng</h4>
          <ul class="nospace meta">
            <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="fa fa-tag"></i> <a href="#">Category Name</a></li>
          </ul>
          <p>Lorem posuere magna quis fermentum lorem elit nec lorem curabitur in finibus urna vivamus magna enim semper [&hellip;]</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </div>
      </article>
      <article class="one_third">
        <figure><a href="#"><img src="natucam/images/demo/320x220.png" alt=""></a>
         
        </figure>
        <div class="txtwrap">
          <h4 class="heading">CLB Ánh Hồng </h4>
          <ul class="nospace meta">
            <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="fa fa-tag"></i> <a href="#">Category Name</a></li>
          </ul>
          <p>Tellus integer viverra ante nec ullamcorper ullamcorper nulla tempus placerat ultricies interdum et malesuada fames [&hellip;]</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </div>
      </article>
      <article class="one_third">
        <figure><a href="#"><img src="natucam/images/demo/320x220.png" alt=""></a>
         
        </figure>
        <div class="txtwrap">
          <h4 class="heading">CLB Ánh Sáng</h4>
          <ul class="nospace meta">
            <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
            <li><i class="fa fa-tag"></i> <a href="#">Category Name</a></li>
          </ul>
          <p>Curabitur tincidunt at quam sed fermentum in at leo non quam rutrum aliquet nullam quam odio fermentum [&hellip;]</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </div>
      </article>
    </div>
    <!-- <div class="clear"></div> -->
  </section>
</div>
@endsection