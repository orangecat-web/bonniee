<?php include("header.php")?>
<!--note: pages css-->
<link rel="stylesheet"  href="css/pages.css">
<link rel="stylesheet"  href="css/d-pages.css">

<!--banner-->
<section class="banner">
	<img src="upload/img-page-banner.jpg" alt="">
</section>

<section class="container">
	<div class="title d-flex justify-content-between align-items-end px-3">
		<h1>最新消息<span>News</span></h1>
		<div class="navi deskTopTablets">
			<span><a href=".">首頁</a></span>
			<span>最新消息</span>
		</div>
	</div>
	<!--pagination-->
	<nav aria-label="Page navigation">
		<ul class="pagination justify-content-center">
			<li class="page-item">
				<a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
				<a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
			</li>
		</ul>
	</nav>

	<!--contact form-->
	<form action="">
		<dl class="form row col-md-8 mx-auto align-items-center">
			<dt class="col-md-2"><label for="name">聯絡人</label></dt>
			<dd class="col-md-10">
				<input type="text" name="name" required="">
				<input type="radio"> 先生
				<input type="radio"> 小姐
			</dd>
			<dt class="col-md-2"><label for="tel">連絡電話</label></dt>
			<dd class="col-md-10"><input type="tel" name="tel" required=""></dd>
			<dt class="col-md-2"><label for="email">電子信箱</label></dt>
			<dd class="col-md-10"><input type="email" name="email"></dd>
			<dt class="col-md-2"><label for="subject">標題</label></dt>
			<dd class="col-md-10"><input type="text" name="subject"></dd>
			<dt class="col-md-2 align-self-start"><label for="content">內容</label></dt>
			<dd class="col-md-10"><textarea name="" id="" cols="30" rows="10"></textarea></dd>
			<dt class="col-md-2"><label for="code">驗證碼</label></dt>
			<dd class="col-md-10">
				<input type="text" name="code">
				<img src="imgcode/securimage_show.png" alt="">
			</dd>
			<dd class="w-100">
				<button type="reset">重新填寫</button>
				<button type="submit">確認送出</button>
			</dd>
		</dl>
	</form>

</section>

<!--link-->

<?php include("footer.php")?>

<!--slider-->
<script src="js/jssor/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/jssor/js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
<script src="js/jssor/jssor.js" type="text/javascript"></script>
</body>
</html>