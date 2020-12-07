<?php include("header.php")?>

<!--SEO start-->
<!--這個是連結頁面的標題-->
<title>聯絡我們 | 邦妮美腿會館</title>
<!--這個是社群網站連結頁面的標題-->
<meta property="og:title" content="聯絡我們 | 邦妮美腿會館">

<!--這個是連結頁面文章的敘述-->
<meta name="description" content="彈性襪各種丹數可選！美腿,塑型,舒緩腿部壓力,靜脈曲張,按摩您久站的雙腿！邦妮美腿會館 彈性襪.醫療襪.小腿襪.靜脈曲張襪.歡迎來到邦妮美腿會館。">
<!--這個是社群網站連結頁面文章的敘述-->
<meta property="og:description" content="您好，若有任何有關商品訂購或相關問題想詢問我們，請您填寫下列資料，我們將盡速與您聯絡，感謝您!">

<!--這個是連結頁面關鍵字-->
<meta name="keyword" content="邦妮美腿會館,靜脈曲張襪,醫療襪,彈性襪,靜脈區張襪,健康襪,褲襪,保暖襪,靜脈曲張,健康彈性襪">
<!--這個是連結頁面的網址-->
<meta property="og:url" content="https://www.bonniee.com.tw/contact.php">
<!--這個是分享畫面的圖片路徑 解析須200x200至1500x1500之間，檔案大小在5MB以內-->
<meta property="og:image" content=" https://www.bonniee.com.tw/upload/image.jpg">
<!--SEO end-->

<?php include("nav.php")?>

<!--note: pages css-->
<link rel="stylesheet"  href="css/pages.css">
<link rel="stylesheet"  href="css/d-pages.css">

<!--banner-->
<section class="banner">
    <img src="upload/img-page-banner.jpg" alt="">
</section>

<section class="container products pt-sm-5 pt-4 pb-3 px-md-5">
    <!--title-->
    <div class="title d-sm-flex justify-content-sm-between align-items-end px-3">
        <h1>聯絡我們<span>Contact us</span></h1>
        <div class="navi deskTopTablets">
            <span><a href=".">首頁</a></span>
            <span>聯絡我們</span>
        </div>
    </div>

    <div class="contactIntro my-4">
        <p>您好，若有任何有關商品訂購或相關問題想詢問我們，</p>
        <p>請您填寫下列資料，我們將盡速與您聯絡，感謝您!</p>
    </div>

    <!--contact form-->
    <form action="">
        <dl class="row col-xl-8 col-md-10 mx-auto px-0 align-items-center form">
            <dd class="col-lg-7 d-sm-flex justify-content-sm-start align-items-center">
                <label class="col-auto" for="name"><sup>*</sup>姓　　名</label>
                <input type="text" name="name" required>
                <label class="col-auto mt-sm-0 mt-2"><input type="radio"> 先生</label>
                <label class="col-auto mt-sm-0 mt-2"><input type="radio"> 小姐</label>
            </dd>
            <dd class="col-sm-6 d-sm-flex justify-content-sm-start align-items-center">
                <label class="col-auto" for="tel"><sup>*</sup>電話號碼</label>
                <input type="tel" name="tel" required>
            </dd>
            <dd class="col-sm-6 d-sm-flex justify-content-sm-start align-items-center">
                <label class="col-auto" for="email">電子信箱</label>
                <input type="email" name="email">
            </dd>
            <dd class="col-12 d-sm-flex justify-content-sm-start align-items-center">
                <label class="col-auto align-self-start" for="subject">詢問內容</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </dd>
            <dd class="col-lg-8 d-sm-flex justify-content-start align-items-center px-sm-3 cap_show">
                <label class="col-auto" for="text"><sup>*</sup>驗&nbsp;&nbsp;證&nbsp;&nbsp;碼</label>
                <input type="code" name="code" placeholder="(驗證碼不分大小寫)" required>
                <img class="ml-sm-2 mt-sm-0 mt-2" src="imgcode/securimage_show.png" alt="">
            </dd>
            <dd class="w-100">
                <button type="reset">重新填寫</button>
                <button type="submit">確認送出</button>
            </dd>
        </dl>
    </form>

</section>

<?php include("footer.php")?>

</body>
</html>