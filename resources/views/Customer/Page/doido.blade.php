@extends('Customer.Layout.master')
@section('precontent')
<div class="wrapper row3">
  <main class=" hoc container clear"> 
      <div class="w3-bar">
        @foreach($category as $cate)
          <button class="w3-bar-item w3-button" onclick="openCity('{{$cate->id}}')">{{$cate->name}}</button>
        @endforeach
      </div>
      {{-- @foreach($category as $cate)
      <div class=" sidebar one_quarter first" id='{{$cate->id}}'> 
          <h6>{{$cate->name}}</h6>
          <nav class="sdb_holder">
            <ul>
              @foreach($sup_cat as $sup)
              @if($cate->id==$sup->id_cat)
              <li><a href="#">{{$sup->name}}</a></li>
              @endif
              @endforeach
            </ul>
          </nav>
        </div>
      @endforeach --}}
      @foreach($category as $cate)
        <div id= {{$cate->id}} class="w3-container city">
        
          <?php echo $cate->id ?>
          <h2>London</h2>
          <p>London is the capital city of England.</p>
        </div>
        @endforeach
        {{-- <button class="w3-bar-item w3-button" onclick="openCity('Paris')">Paris</button>
          <button class="w3-bar-item w3-button" onclick="openCity('Tokyo')">Tokyo</button>
        <div id="London" class="w3-container city">
          <h2>London</h2>
          <p>London is the capital city of England.</p>
        </div>
        
        <div id="Paris" class="w3-container city" style="display:none">
          <h2>Paris</h2>
          <p>Paris is the capital of France.</p> 
        </div>
        
        <div id="Tokyo" class="w3-container city" style="display:none">
          <h2>Tokyo</h2>
          <p>Tokyo is the capital of Japan.</p>
        </div> --}}
        
        <script>
        function openCity(cityName) {
          var i;
          var x = document.getElementsByClassName("city");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          document.getElementById(cityName).style.display = "block";  
        }
        </script>
    <div class=" sidebar one_quarter first "> 
      <h6>Đồ điện tử</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="#">Đồ điện tử</a></li>
          <li><a href="#">Đồ gia dụng</a></li>
          <li><a href="#">Sách, báo</a></li>
          <li><a href="#">Thời trang</a></li>
          <li><a href="#">Văn phòng phẩm</a></li>
          <li><a href="#">Khác</a></li>
        </ul>
      </nav>
    </div>
   <div class=" content three_quarter  "> 
      <div class="content"> 
        <div id="gallery">
          <figure>
            <header class="heading">Đồ điện tử</header>
            <ul class="nospace clear">
              <li class="one_quarter first"><a href="#"><img src="natucam/images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="natucam/images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="natucam/images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="natucam/images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter first"><a href="#"><img src="natucam/images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="natucam/images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="natucam/images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="natucam/images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter first"><a href="#"><img src="natucam/images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="natucam/images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="natucam/images/demo/gallery/01.png" alt=""></a></li>
              <li class="one_quarter"><a href="#"><img src="natucam/images/demo/gallery/01.png" alt=""></a></li>
            </ul>
            <figcaption>Gallery Description Goes Here</figcaption>
          </figure>
        </div>
        <nav class="pagination">
          <ul>
              <li><a href="#">&laquo; Previous</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><strong>&hellip;</strong></li>
              <li><a href="#">6</a></li>
              <li class="current"><strong>7</strong></li>
              <li><a href="#">8</a></li>
              <li><a href="#">9</a></li>
              <li><strong>&hellip;</strong></li>
              <li><a href="#">14</a></li>
              <li><a href="#">15</a></li>
              <li><a href="#">Next &raquo;</a></li>
          </ul>
        </nav>
       
      </div>
      <div class="clear"></div>
  </div>
  </main>	
</div>
@endsection
