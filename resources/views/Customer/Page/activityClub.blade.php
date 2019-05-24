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
          <img src="img/club/{{$cl['image']}}" class="imgbackground" alt="Image">
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
        
      <!-- <article class="sidebar one_quarter">
      	<h6>Danh mục các CLB</h6>
        @foreach($club as $cl)
          <li><a href="{{route('clb',$cl['id'])}}">{{$cl->username}}</a></li>
          @endforeach
      </article>
      <article class="one_third">
        <div id="comments">
           @foreach($img as $im)
          <img src="{{$im['image']}}" class="img-responsive" alt="Image">
          @endforeach
        </div>
      </article>
      <article class="one_third">
         @foreach($clubs as $cl)
          <h1>{{$cl['content']}}</h1>
         @endforeach
      </article> -->
      
    </div>
  </section>
</div>
</body>
@endsection