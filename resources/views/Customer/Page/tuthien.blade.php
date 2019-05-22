@extends('Customer.Layout.master')
@section('precontent')
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class=" sidebar one_quarter first "> 
      <h6>Danh mục các CLB</h6>
      
      <nav class="sdb_holder">
        <ul>
          @foreach($club as $cl)
          <li><a href="#">{{$cl->username}}</a></li>
          @endforeach
        </ul>
      </nav>
      
    </div>
   <div class="content three_quarter"> 
      <div class="content"> 
        <div id="gallery">
          @foreach($club as $cl)
            <li class="one_quarter"><a href="#"><img src="img/club/{{$cl->avata}}" alt="" class="img_club"></a>
            </li>
          @endforeach
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
        <div id="comments">
          <h2>Comments</h2>
          <ul>
            <li>
              <article>
                <header>
                  <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                  <address>
                  By <a href="#">A Name</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                  <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                </div>
              </article>
            </li>
            <li>
              <article>
                <header>
                  <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                  <address>
                  By <a href="#">A Name</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                  <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                </div>
              </article>
            </li>
            <li>
              <article>
                <header>
                  <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                  <address>
                  By <a href="#">A Name</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                </header>
                <div class="comcont">
                  <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                </div>
              </article>
            </li>
          </ul>
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
      </div>
      <div class="clear"></div>
  </div>
  </main>	
</div>
@endsection