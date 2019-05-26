@extends('Customer.Layout.master')
@section('content')
<body id="top">
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="group latest">
      <article class="sidebar one_quarter">
        <nav class="sdb_holder">
              <ul>
                <li><a href="#">Đăng bài</a></li>
                <li><a href="#">Thông tin</a>
                  <ul>
                    <li><a href="{{route('getListProfile')}}">Xem thông tin</a></li>
                    <li><a href="#">Cập nhật</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
      </article>
      <article class="one_third">
        <h1>
          <figure class="avatar"><img src="natucam/images/demo/avatar.png" alt="">
            <a href="" "email me">Nguyen Thi Ti</a>
          </figure> 
        </h1>
        <li><a href="#"><img class="comment_image" src="natucam/images/demo/gallery/01.png" alt=""></a></li>
      </article>
      <article class="one_third">
        <div id="comments">
                  <ul>
                    <li>
                      <article>
                        <header>
                          <figure class="avatar">
                            <img src="natucam/images/demo/avatar.png" alt="">
                          </figure>
                          <address>
                            Bởi <a href="#">Ngo Thi Kim Thao</a></img>
                          </address>
                          <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                        </header>
                        <div class="comcont">
                          <p>May minh mua ve dung thu cam thay oke</p>
                        </div>
                      </article>
                    </li>
                    <li>
                      <article>
                        <header>
                          <figure class="avatar">
                            <img src="natucam/images/demo/avatar.png" alt="">
                          </figure>
                          <address>
                            Bởi <a href="#">Hồ Thị Mong</a></img>
                          </address>
                          <time datetime="2045-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2045 @08:15:00</time>
                        </header>
                        <div class="comcont">
                          <p>Sao đẹp vậy</p>
                        </div>
                      </article>
                    </li>
                    <footer><a href="#">Thêm &raquo;</a></footer>
                  </ul>
              <form action="#" method="post">
                <div class="block clear">
                  <label for="comment">Bình luận</label>
                  <input type="text">
                </div>
                <div>
                  <input type="submit" name="submit" value="Gửi">
                  &nbsp;
                </div>
              </form>
            </div>
      </article>
    </div>
  </section>
</div>
</body>
@endsection
</html>