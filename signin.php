<?php include("header.php");?>

<!--SEO start-->
<!--這個是連結頁面的標題-->
<title>邦妮美腿會館 | 彈性襪 | 孕婦襪 | 靜脈區張襪 | 睡眠襪 | 大腿襪 | 小腿襪 | 靜脈曲張襪 | 褲襪 | 絲襪 | 塑身衣</title>
<!--這個是社群網站連結頁面的標題-->
<meta property="og:title" content="邦妮美腿會館 | 彈性襪 | 孕婦襪 | 靜脈區張襪 | 睡眠襪 | 大腿襪 | 小腿襪 | 靜脈曲張襪 | 褲襪 | 絲襪 | 塑身衣">

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

<section class="container products pt-sm-5 pt-4 pb-3 px-md-5">
    <!-- for Mobile -->
    <div class="Mobile">
        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true">會員登入</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-goshop-tab" data-toggle="pill" href="#pills-goshop" role="tab" aria-controls="pills-goshop" aria-selected="false">首次購物</a>
            </li>
        </ul>
        <div class="tab-content col-12" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
                <dl class="signin">
                    <dd>
                        <input type="text" id="id" name="id" placeholder="請輸入電子信箱或帳號" required>
                    </dd>
                    <dd>
                        <input type="password" name="password" placeholder="請輸入密碼" required>
                    </dd>
                    <dd><a href="#">忘記密碼？</a></dd>
                    <dd>
                        <input type="text" name="code" required=""> <img src="imgcode/securimage_show.png" alt=""> 換另一張
                    </dd>
                    <dd class="mt-3">
                        <button onclick="location.href='member.php'">登　入</button>
                        <button class="facebook">FB 登入</button>
                    </dd>
                </dl>
            </div>
            <div class="tab-pane fade" id="pills-goshop" role="tabpanel" aria-labelledby="pills-goshop-tab">
                <dl class="signup">
                    <dd>
                        <p>您不須先加入會員，按此即可進入結帳，</p>
                        <p>結帳成功後系統將自動為您升級為會員！</p>
                        <p>(如已有購買紀錄，請由左邊登入會員)</p>
                    </dd>
                </dl>
                <div class="signupBtn align-self-end">
                    <button onclick="location.href='products.php'">立即首次購物</button>
                </div>
            </div>
        </div>
    </div>
    <!-- for PC -->
    <div class="container col-xl-7 col-lg-8 row mx-auto px-sm-3 px-0 align-items-stretch deskTopTablets">
        <div class="col-sm-6 signin">
            <h2>會員登入</h2>
            <dl class="signin">
                <dd>
                    <input type="text" id="id" name="id" placeholder="請輸入電子信箱或帳號" required>
                </dd>
                <dd>
                    <input type="password" name="password" placeholder="請輸入密碼" required>
                </dd>
                <dd><a href="#">忘記密碼？</a></dd>
                <dd>
                    <input type="text" name="code" required=""> <img src="imgcode/securimage_show.png" alt=""> 換另一張
                </dd>
                <dd class="mt-3">
                    <button onclick="location.href='member.php'">登　入</button>
                    <button class="facebook">FB 登入</button>
                </dd>
            </dl>
        </div>
        <div class="col-sm-6 signup">
            <h2>首次購物</h2>
            <dl class="signup">
                <dd>
                    <p>您不須先加入會員，按此即可進入結帳，</p>
                    <p>結帳成功後系統將自動為您升級為會員！</p>
                    <p>(如已有購買紀錄，請由左邊登入會員)</p>
                </dd>
            </dl>
            <div class="signupBtn align-self-end">
                <button onclick="location.href='products.php'">立即首次購物</button>
            </div>
        </div>
    </div>

</section>

<?php include("footer.php")?>
<link rel="stylesheet" href="js/magiczoom/magiczoom.css">
<script src="js/magiczoom/magiczoom.js"></script>
</body>
</html>