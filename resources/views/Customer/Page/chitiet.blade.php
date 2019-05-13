@extends('Customer.Layout.master')
@section('precontent')
<div class="wrapper row3">
  <section class="hoc container clear"> 
     
    <div class="group latest">
      <article class="sidebar one_quarter">
      	<h6>Danh muc</h6>
        <nav class="sdb_holder">
	        <ul>
	          <li><a href="#">Navigation - Level 1</a></li>
	          <li><a href="#">Navigation - Level 1</a>
	            <ul>
	              <li><a href="#">Navigation - Level 2</a></li>
	              <li><a href="#">Navigation - Level 2</a></li>
	            </ul>
	          </li>
	          <li><a href="#">Navigation - Level 1</a>
	            <ul>
	              <li><a href="#">Navigation - Level 2</a></li>
	              <li><a href="#">Navigation - Level 2</a>
	                <ul>
	                  <li><a href="#">Navigation - Level 3</a></li>
	                  <li><a href="#">Navigation - Level 3</a></li>
	                </ul>
	              </li>
	            </ul>
	          </li>
	          <li><a href="#">Navigation - Level 1</a></li>
	        </ul>
      	</nav>
      </article>
      <article class="one_third">
        <figure><a href="#"><img src="natucam/images/demo/320x220.png" alt=""></a>
         
        </figure>
        <div class="txtwrap">
          <h4 class="heading">Thong tin san pham</h4>
          <p>Tellus integer viverra ante nec ullamcorper ullamcorper nulla tempus placerat ultricies interdum et malesuada fames [&hellip;]</p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </div>
      </article>
      <article class="one_third">
       <div class="sdb_holder">
        <h6>Lorem ipsum dolor</h6>
        <address>
        Full Name<br>
        Address Line 1<br>
        Address Line 2<br>
        Town/City<br>
        Postcode/Zip<br>
        <br>
        Tel: xxxx xxxx xxxxxx<br>
        Email: <a href="#">contact@domain.com</a>
        </address>
      </div>
      </article>
    </div>
  </section>
</div>
<<br><br><br><br><br><br><br>
@endsection