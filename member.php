<?php include("header.php");?>

<!--SEO start-->
<!--這個是連結頁面的標題-->
<title>會員中心 - 邦妮美腿會館 | 彈性襪 | 孕婦襪 | 靜脈區張襪 | 睡眠襪 | 大腿襪 | 小腿襪 | 靜脈曲張襪 | 褲襪 | 絲襪 | 塑身衣</title>
<!--這個是社群網站連結頁面的標題-->
<meta property="og:title" content="會員中心 - 邦妮美腿會館 | 彈性襪 | 孕婦襪 | 靜脈區張襪 | 睡眠襪 | 大腿襪 | 小腿襪 | 靜脈曲張襪 | 褲襪 | 絲襪 | 塑身衣">

<!--這個是連結頁面文章的敘述-->
<meta name="description" content="彈性襪各種丹數可選！美腿,塑型,舒緩腿部壓力,靜脈曲張,按摩您久站的雙腿！邦妮美腿會館 彈性襪.醫療襪.小腿襪.靜脈曲張襪.歡迎來到邦妮美腿會館。">
<!--這個是社群網站連結頁面文章的敘述-->
<meta property="og:description" content="彈性襪各種丹數可選！美腿,塑型,舒緩腿部壓力,靜脈曲張,按摩您久站的雙腿！邦妮美腿會館 彈性襪.醫療襪.小腿襪.靜脈曲張襪.歡迎來到邦妮美腿會館。">

<!--這個是連結頁面關鍵字-->
<meta name="keyword" content="邦妮美腿會館,靜脈曲張襪,醫療襪,彈性襪,靜脈區張襪,健康襪,褲襪,保暖襪,靜脈曲張,健康彈性襪">
<!--這個是連結頁面的網址-->
<meta property="og:url" content="https://www.bonniee.com.tw/">
<!--這個是分享畫面的圖片路徑 解析須200x200至1500x1500之間，檔案大小在5MB以內-->
<meta property="og:image" content=" https://www.bonniee.com.tw/upload/image.jpg">
<!--SEO end-->

<?php include("nav.php");?>
<!--note: pages css-->
<link rel="stylesheet"  href="css/pages.css">
<link rel="stylesheet"  href="css/d-pages.css">

<!--banner-->
<section class="banner">
	<img src="upload/img-page-banner.jpg" alt="">
</section>


<section class="container mt-5 mb-5">
	<!--title-->
	<div class="title d-flex justify-content-between align-items-end px-3 mb-4">
		<h1>會員專區<span>Member</span></h1>
		<div class="navi deskTopTablets">
			<span><a href=".">首頁</a></span>
			<span>會員專區</span>
		</div>
	</div>
	<div class="col-lg-10 mx-auto">
		<nav class="tabs mb-3">
			<div class="nav nav-pills Member" id="pills-tab" role="tablist">
				<a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">會員資料修改</a>
				<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">訂單查詢</a>
			</div>
		</nav>

		<div class="tab-content" id="nav-tabContent">
			<!-- member -->
			<div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

				<div class="Title my-md-4 mb-3"><h3><span>修改密碼</span></h3></div>
				<dl class="row mx-auto px-0 member">
					<dd class="col-sm-6 d-sm-flex justify-content-sm-start align-items-center px-sm-3">
						<label for="" class="col-auto pl-0">修改密碼</label>
						<input type="password" name="password" placeholder="如不修改請留空" required>
					</dd>
					<dd class="col-sm-6 d-sm-flex justify-content-sm-start align-items-center px-sm-3">
						<label for="" class="col-auto pl-0">確認密碼</label>
						<input type="password" name="password" placeholder="如不修改請留空" required>
					</dd>
				</dl>
				<div class="Title my-md-4 mb-3"><h3><span>資料修改</span></h3></div>
				<dl class="row mx-auto px-0 member">
					<dd class="col-lg-4 col-md-5 d-sm-flex justify-content-sm-start align-items-center px-sm-3">
						<label for="" class="col-auto px-0">帳　　號</label>
						<input type="id" name="id" value="000@000.com.tw" disabled>
					</dd>
					<dd class="col-lg-6 col-md-7 d-sm-flex justify-content-sm-start align-items-center px-sm-3">
						<label for="" class="col-auto px-0">姓　　名</label>
						<input type="fullname" name="fullname" required class="mr-2">
						<label for="" class="col-auto px-0"><input type="radio" value="male"> 先生</label>
						<label for="" class="col-auto px-0"><input type="radio" value="female"> 小姐</label>
					</dd>
					<dd class="col-md-4 d-sm-flex justify-content-sm-start align-items-center px-sm-3">
						<label for="" class="col-auto px-0">聯絡電話</label>
						<input type="tel" name="tel" required>
					</dd>
					<dd class="col-md-4 d-sm-flex justify-content-sm-start align-items-center px-sm-3">
						<label for="" class="col-auto px-0">電子信箱</label>
						<input type="email" name="email" required>
					</dd>

					<dd class="col-xl-10 d-sm-flex justify-content-sm-start align-items-center px-sm-3">
						<label for="" class="col-auto px-0">聯絡地址</label>
						<div class="col px-0 d-lg-flex justify-content-lg-start align-items-center">
                            <div class="col mb-lg-0 mb-2 px-0 d-flex justify-content-start align-items-center">
                                <input class="col-3 mr-2" type="text">
                                <select class="col mr-2" name="" id="">
                                    <option value="-">-</option>
                                    <option value="台北市">台北市</option>
                                </select>
                                <select class="col mr-lg-2">
                                    <option value="-">-</option>
                                    <option value="信義區">信義區</option>
                                </select>
                            </div>
                            <div class="col-lg-7 px-0"><input type="add" placeholder="※ 地址請勿填寫郵政信箱"></div>
                        </div>
					</dd>
					<dd class="col-12" style="text-align: center">
						<button onclick="location.href='member.php'">確認修改</button>
					</dd>
				</dl>
			</div>
			<!-- order history -->
			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

				<!-- mobile 吃 id id="order01" data-target="#order01" -->
				<div id="accordion" class="orderHistory Mobile">
					<div class="card faq">
						<div class="card-header orderHeader" id="heading1">
							<h5 class="mb-0">
								<button class="btn btn-link col-12 faq" data-toggle="collapse" data-target="#order01" aria-expanded="true" aria-controls="order01">
									<span>訂單編號</span>
									<span>001200123</span>
								</button>
							</h5>
						</div>
						<div id="order01" class="collapse orderContent" aria-labelledby="heading1" data-parent="#accordion">
							<div class="card-body">
								<div class="editor mx-md-5">
									<dl class="row mx-auto orderHistory">
										<dt class="col-4">訂購日期</dt>
										<dd class="col-8">2018-05-17</dd>
										<dt class="col-4">付款方式</dt>
										<dd class="col-8">信用卡付款</dd>
										<dt class="col-4">狀態</dt>
										<dd class="col-8">已付款</dd>
										<dt class="col-4">處理進度</dt>
										<dd class="col-8">已出貨</dd>
										<dd class="col-12 d-sm-flex justify-content-sm-center">
											<button>我要取消</button>
											<button data-toggle="modal" data-target="#feedback">回傳後五碼</button>
										</dd>
									</dl>
								</div>
							</div>
						</div>
					</div>

					<div class="card faq">
						<div class="card-header orderHeader" id="heading2">
							<h5 class="mb-0">
								<button class="btn btn-link col-12 faq" data-toggle="collapse" data-target="#order02" aria-expanded="true" aria-controls="order02">
									<span>訂單編號</span>
									<span>123456</span>
								</button>
							</h5>
						</div>
						<div id="order02" class="collapse orderContent" aria-labelledby="heading2" data-parent="#accordion">
							<div class="card-body">
								<div class="editor mx-md-5">
									<dl class="row mx-auto orderHistory">
										<dt class="col-4">訂購日期</dt>
										<dd class="col-8">123456</dd>
										<dt class="col-4">付款方式</dt>
										<dd class="col-8">123456</dd>
										<dt class="col-4">狀態</dt>
										<dd class="col-8">123456</dd>
										<dt class="col-4">處理進度</dt>
										<dd class="col-8">123456</dd>
										<dd class="col-12 d-sm-flex justify-content-sm-center">
											<button>我要取消</button>
											<button data-toggle="modal" data-target="#feedback">回傳後五碼</button>
										</dd>
									</dl>
								</div>
							</div>
						</div>
					</div>
				</div>

				<table class="orderHistory deskTopTablets">
					<tbody><tr>
						<th>訂購日期</th>
						<th>訂單編號</th>
						<th>付款方式</th>
						<th>狀態</th>
						<th>處理進度</th>
						<th>取消訂單</th>
						<th>繳費回傳</th>
					</tr>
					<tr>
						<td>2018-05-17</td>
						<td>001200123</td>
						<td>ATM轉帳</td>
						<td>未付款</td>
						<td>未出貨</td>
						<td><button>我要取消</button></td>
						<td>
							<button data-toggle="modal" data-target="#feedback">回傳後五碼</button>
						</td>
					</tr>
					<tr>
						<td>2018-05-17</td>
						<td>001200123</td>
						<td>ATM轉帳</td>
						<td>未付款</td>
						<td>未出貨</td>
						<td><button>我要取消</button></td>
						<td>
							<button data-toggle="modal" data-target="#feedback">回傳後五碼</button>
						</td>
					</tr>
					<tr>
						<td>2018-05-17</td>
						<td>001200123</td>
						<td>ATM轉帳</td>
						<td>未付款</td>
						<td>未出貨</td>
						<td><button>我要取消</button></td>
						<td>
							<button data-toggle="modal" data-target="#feedback">回傳後五碼</button>
						</td>
					</tr>
				</tbody>
			</table>
			<!-- 回傳後五碼 -->
			<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="feedback" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="feedback">回傳後五碼</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<!-- start -->
							<div class="d-sm-flex justify-content-sm-start align-items-center feedback">
								<label class="col-sm-auto" name="">匯款帳號後五碼</label>
								<input class="mx-sm-1" type="text" name="" required>
								<button class="col-sm-auto" type="submit">確認送出</button>
							</div>
							<!-- end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<?php include("footer.php")?>
<link rel="stylesheet" href="js/magiczoom/magiczoom.css">
<script src="js/magiczoom/magiczoom.js"></script>
</body>
</html>