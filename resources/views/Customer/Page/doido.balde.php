@extends('Customer.Layout.master')
@section('precontent')
<div class="wrapper row3">
  <main class=" hoc container clear"> 
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
