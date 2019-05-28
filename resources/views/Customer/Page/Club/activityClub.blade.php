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
          </div>
        </div>
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
         <div class="row">
          @foreach($user_donate as $value)
            <div class="column imageClub">
                <?php
                  $image = explode('|',$value->image);
                  $size=sizeof($image);
                ?>
                @foreach ($image as $img)
                  <img src="img/product/{{$img}}" class="imgstyleac" alt="Image">
                @endforeach
                  <h5>Người quyên góp:<b> {{$value->name}}</b></h5>
                  <h5><b>{{$value->content}}</b></h5>
            </div>
          @endforeach
        </div>
    </div>
  </section>
</div>

</body>
@endsection