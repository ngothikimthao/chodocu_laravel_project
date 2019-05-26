@extends('Customer.Layout.master')
@section('precontent')
	<body id="top">
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="group latest">
        <center><h1>Thông Tin</h1></center>
        @foreach($clubs as $cl)
        <div class="row row-large"  id="row-10147327">
          <div class="col small-12 large-12"  data-animate="fadeInUp"><div class="col-inner"  >
          <p style="text-align: center;"><span style="font-size: 120%;">
          {{$cl['content']}}
         </span></p>
          </div></div>
        @endforeach

        @foreach($clubs as $cl)
        <div>
          <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/club/{{$cl['image']}});">
          <div class="centered">{{$cl->email}}</div>
        </div>
        @endforeach
        
        <center><h1>Bản tin</h1></center>
        <div class="row">
          @foreach($img as $im)
          <div class="column imageClub">
              <img src="img/club/{{$im['image']}}" class="imgstyleac" alt="Image">
          </div>
          @endforeach
        </div>

        <center><h1>Quyên Góp</h1></center>
        <h2>Điền Thông Tin Sản Phẩm</h2>
        <form action="#" method="post">
            <div class="one_third first">
              <label for="name">Tên Sản Phẩm<span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22" required>
            </div>
            <div class="one_third">
              <label for="">Thể Loại<span>*</span></label>
              <input type="text" name="email" id="email" value="" size="22" required>
            </div>
            <div class="one_third">
              <label for="url">Liên Hệ</label>
              <input type="url" name="url" id="url" value="" size="22">
            </div>
            <div class="block clear">
              <label for="comment">Nội Dung</label>
              <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
            </div>
            <div>
              <input type="submit" name="submit" value="Đóng Góp">
              &nbsp;
            
            </div>
          </form>
    </div>

  </section>
</div>

</body>
@endsection