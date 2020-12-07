<!--footer-->
<footer>
	<section class="row mx-auto companyInfo py-4">
		<div itemscope itemtype="http://schema.org/LocalBusiness" class="col-lg row mx-lg-0 col-md-9 col-11 mx-auto mb-md-0 mb-md-4 align-items-start">
			<div itemprop="name" class="col-sm-4 col-6 mx-auto mb-sm-0 mb-3">
				<a href="." title="邦妮美腿會館"><img src="images/layout/logo.svg" alt="邦妮美腿會館"></a>
			</div>
			<div class="col-sm-8 px-0 addInfo">
				<p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><a href="https://maps.google.com/maps?q=邦妮美腿會館" data-lity>110 <span itemprop="addressRegion">台北市</span><span itemprop="addressLocality">信義區</span><span itemprop="streetAddress">基隆路一段 155 號 8 樓之 3</span></a></p>
				<p><span>Tel：<a href="tel:02227566200">02-2756-6200</a></span>  <span>Fax：02-2756-6201</span></p>
				<p>E-mail：<a href="mailto:bonniee@bonniee.com.tw">bonniee@bonniee.com.tw</a></p>
				<p>( 服務時間 9:00~18:00 六日及國定假日休息 )</p>
			</div>
		</div>

		<div class="col-lg mx-lg-0 mx-auto no-gutters d-flex justify-content-md-end justify-content-sm-center">
			<div class="row col-lg-3 mx-lg-0 mx-auto deskTop fNav">
				<p class="col-lg-12 col-md col-6"><a href="news.php">最新消息</a></p>
				<p class="col-lg-12 col-md col-6"><a href="faq.php">常見問題</a></p>
				<p class="col-lg-12 col-md col-6"><a href="contact.php">聯絡我們</a></p>
				<p class="col-lg-12 col-md col-6"><a href="privacy.php">隱私權聲明</a></p>
				<p class="col-lg-12 col-md col-6"><a href="sitemap.php">網站地圖</a></p>
			</div>
			<div class="deskTop fNav">
				<p><a href="hotsale.php">優惠專區</a></p>
				<p><a href="products.php">褲　襪</a></p>
				<p><a href="products.php">睡眠襪</a></p>
				<p><a href="products.php">小腿襪</a></p>
			</div>
			<div class="deskTop fNav">
				<p><a href="products.php">大腿襪</a></p>
				<p><a href="products.php">九分襪</a></p>
				<p><a href="products.php">孕婦襪</a></p>
				<p><a href="products.php">塑身衣</a></p>
			</div>
			<div class="col-lg-auto qrCode deskTop">
				<img src="images/layout/icon-line-qrcode.svg">
				<p>LINE 線上客服</p>
			</div>
		</div>
	</section>
	<!-- copyright -->
	<section class="copyright py-3">
		<dl class="col-lg-3 col-md-6 mx-auto d-flex justify-content-center align-items-center path deskTopTablets">
			<dd class="px-1"><img src="images/layout/icon-b-okmart.png" alt="OK 便利商店通路支付"></dd>
			<dd class="px-1"><img src="images/layout/icon-b-familymart.png" alt="全家便利商店通路支付"></dd>
			<dd class="px-1"><img src="images/layout/icon-b-hilife.png" alt="萊爾富便利商店通路支付"></dd>
			<dd class="px-1"><img src="images/layout/icon-b-mastercard.png" alt="支援萬事達卡支付"></dd>
			<dd class="px-1"><img src="images/layout/icon-b-visa.png" alt="支援 VISA 信用卡支付"></dd>
			<dd class="px-1"><img src="images/layout/icon-b-linepay.png" alt="支援 LINEPAY 支付"></dd>
		</dl>
		<p>Copyright &copy; <?php echo date("Y"); ?> 邦妮美腿會館 all rights reserved</p>
	</section>
</footer>
<!--goTOP-->
<a href="#0" class="cd-top">Top</a>

<?php include("side_cart.php"); ?>

<!--bootstrap 4-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!--nav dropdown-->
<script>
	$('body').on('mouseenter mouseleave','.dropdown',function(e){
		var _d=$(e.target).closest('.dropdown');_d.addClass('show');
		setTimeout(function(){
			_d[_d.is(':hover')?'addClass':'removeClass']('show');
			$('[data-toggle="dropdown"]', _d).attr('aria-expanded',_d.is(':hover'));
		},300);
	});
</script>

<!--slidebars-->
<script src="js/slidebars/slidebars.js"></script>
<script src="js/slidebars/scripts.js"></script>

<!--goTop-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/backtop.js"></script>

<!-- lity box -->
<link rel="stylesheet" type="text/css" href="js/lity/dist/lity.css">
<script type="text/javascript" src="js/lity/dist/lity.js"></script>