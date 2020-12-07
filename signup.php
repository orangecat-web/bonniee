<?php include("header.php");?>

<!--SEO start-->
<!--這個是連結頁面的標題-->
<title>加入會員 - 邦妮美腿會館 | 彈性襪 | 孕婦襪 | 靜脈區張襪 | 睡眠襪 | 大腿襪 | 小腿襪 | 靜脈曲張襪 | 褲襪 | 絲襪 | 塑身衣</title>
<!--這個是社群網站連結頁面的標題-->
<meta property="og:title" content="加入會員 - 邦妮美腿會館 | 彈性襪 | 孕婦襪 | 靜脈區張襪 | 睡眠襪 | 大腿襪 | 小腿襪 | 靜脈曲張襪 | 褲襪 | 絲襪 | 塑身衣">

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
    <!--title-->
    <div class="title d-flex justify-content-between align-items-end px-3 mb-4">
        <h1>加入會員<span>Register</span></h1>
        <div class="navi deskTopTablets">
            <span><a href=".">首頁</a></span>
            <span>加入會員</span>
        </div>
    </div>

    <!-- signup -->
    <form class="col-lg-10 mx-auto" action="member.php">
        <div class="Title my-md-4 mb-3"><h3><span>會員帳號 (*為必填項目)</span></h3></div>
        <dl class="row mx-auto px-0 form">
            <dd class="col-md-4 d-sm-flex justify-content-sm-start align-items-center px-sm-3">
                <label for="" class="col-auto mb-md-0 mb-2 pl-0"><sup>*</sup>會員帳號</label>
                <input type="email" name="email" placeholder="(請填寫電子郵件，信箱即為登入帳號)" required>
            </dd>
            <dd class="w-100"></dd>
            <dd class="col-md-4 d-sm-flex justify-content-sm-start align-items-center px-sm-3">
                <label for="" class="col-auto mb-md-0 mb-2 pl-0"><sup>*</sup>會員密碼</label>
                <input type="password" name="password" placeholder="(請輸入密碼)" required>
            </dd>
            <dd class="col-md-4 d-sm-flex justify-content-sm-start align-items-center px-sm-3">
                <label for="" class="col-auto mb-md-0 mb-2 pl-0"><sup>*</sup>確認密碼</label>
                <input type="password" name="password" placeholder="(請輸入密碼)" required>
            </dd>
        </dl>
        <div class="Title my-md-4 mb-3"><h3><span>會員資料 (*為必填項目)</span></h3></div>
        <dl class="row mx-auto px-0 form">
            <dd class="col-lg-6 col-md-7 d-sm-flex justify-content-sm-start align-items-center px-sm-3">
                <label for="" class="col-auto mb-md-0 mb-2 pl-0">姓　　名</label>
                <p class="d-flex justify-content-start align-items-center">
                    <input type="fullname" name="fullname" required class="mr-2">
                    <label for="" class="col-auto px-0 ml-2"><input type="radio" value="male"> 先生</label>
                    <label for="" class="col-auto px-0 ml-2"><input type="radio" value="female"> 小姐</label>

                </p>
            </dd>
            <dd class="col-md-4 d-sm-flex justify-content-sm-start align-items-center px-sm-3">
                <label for="" class="col-auto mb-md-0 mb-2 pl-0">聯絡電話</label>
                <input type="tel" name="tel" required>
            </dd>

            <!-- <dd class="col-xl-10 d-sm-flex justify-content-sm-start align-items-center px-sm-3">
                <label for="" class="col-auto mb-md-0 mb-2 pl-0">聯絡地址</label>
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
            </dd> -->
            <dd class="d-sm-flex justify-content-start align-items-center px-3 cap_show">
                <sup>*</sup><label for="text" class="col-auto mb-md-0 mb-2 pl-0">驗&nbsp;&nbsp;證&nbsp;&nbsp;碼</label>
                <p class="d-flex justify-content-start align-items-center">
                    <input type="code" name="code" placeholder="(驗證碼不分大小寫)" required>
                    <img class="ml-sm-2 mt-sm-0 mt-2" src="imgcode/securimage_show.png" alt="">
                </p>
            </dd>
            <dd class="d-flex justify-content-center col-12">
                <p><input type="checkbox"> 我已經閱讀並同意條款 <a href="privacy.php">隱私權聲明</a></p>
            </dd>
            <dd class="d-flex justify-content-center col-12">
                <button type="submit">確認送出</button>
            </dd>
        </dl>
    </form>
</section>

<?php include("footer.php")?>
<link rel="stylesheet" href="js/magiczoom/magiczoom.css">
<script src="js/magiczoom/magiczoom.js"></script>
</body>
</html>