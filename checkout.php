<?php include("header.php")?>

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

<?php include("nav.php")?>
<!--note: pages css-->
<link rel="stylesheet"  href="css/pages.css">
<link rel="stylesheet"  href="css/d-pages.css">

<!--banner-->
<section class="banner">
    <img src="upload/img-page-banner.jpg" alt="">
</section>

<section class="container mt-5">
    <!--title-->
    <div class="title d-flex justify-content-between align-items-end px-3 mb-4">
        <h1>購物車<span>Cart</span></h1>
        <div class="navi deskTopTablets">
            <span><a href=".">首頁</a></span>
            <span>購物車</span>
        </div>
    </div>

    <div class="Cart">
        <!--step-->
        <dl class="cartStep col-lg-10 col-md-11 row mx-auto">
            <dd class="col active">Step01 選擇付款方式</dd>
            <dd class="col active">Step02 填寫資料</dd>
            <dd class="col">Step03 訂購完成</dd>
        </dl>

        <!--location-->
        <div class="pTitle mt-5"><h3><span>所在地區</span></h3></div>
        <div class="location p-3">
            <label>選擇您所在的地區 :</label>
            <span>台灣及離島</span>
        </div>

        <!--paycheck-->
        <div class="pTitle"><h3><span>付款方式</span></h3></div>
        <dl class="paycheck">
            <dd class="p-3">
                <p>轉　　帳 轉帳或匯款，將酌收 50 元物流費。若單筆購物滿 790 元，即享有免運費優惠。</p>
                <p>銀　　行：國泰世華銀行</p>
                <p>銀行代碼：013</p>
                <p>帳　　號：078504080250</p>
            </dd>
        </dl>

        <!--shop list-->
        <div class="pTitle"><h3><span>購物明細</span></h3></div>
        <div class="row mx-auto no-gutters mt-3">
            <!-- start -->
            <dl class="col-md-6 row mx-auto cartList">
                <dt class="col-md-6">商品名稱</dt>
                <dt class="col-md-2 deskTopTablets">顏色</dt>
                <dt class="col-md-2 deskTopTablets">尺寸</dt>
                <dt class="col-md-2 deskTopTablets">數量</dt>
                <dd class="col-md-6"><a href="product_detail.php">睡眠襪/萊卡材質/320丹(大腿襪)(露趾)(雙)</a></dd>
                <dt class="col-md-2 col-4 Mobile">顏色</dt>
                <dd class="col-md-2 col-8">淺紫</dd>
                <dt class="col-md-2 col-4 Mobile">尺寸</dt>
                <dd class="col-md-2 col-8">S</dd>
                <dt class="col-md-2 col-4 Mobile">數量</dt>
                <dd class="col-md-2 col-8">
                    <select>
                        <option>1</option>
                        <option>2</option>
                    </select>
                </dd>
            </dl>
            <dl class="col-md-6 row mx-auto cartList">
                <dt class="col-md-3 col-4">原價</dt>
                <dt class="col-md-3 deskTopTablets">特價</dt>
                <dt class="col-md-4 deskTopTablets">小計</dt>
                <dt class="col-md-2 deskTopTablets">刪除</dt>
                <dd class="col-md-3 col-8">NT$490</dd>
                <dt class="col-4 Mobile">特價</dt>
                <dd class="col-md-3 col-8">NT$390</dd>
                <dt class="col-4 Mobile">小計</dt>
                <dd class="col-md-3 col-8">NT$390</dd>
                <dt class="col-4 Mobile">刪除</dt>
                <dd class="col-md-3 col-8">
                    <button><i class="far fa-trash-alt"></i></button>
                </dd>
            </dl>
            <!-- end -->
            <div class="col-12 mt-4 Total">
                <p>共2項商品，金額 NT$<span>990 元</span></p>
                <p>商品運費 NT$<span>990 元</span></p>
                <p>訂單金額小計 NT$<span>990 元</span></p>
                <p>本訂單所需付款金額 NT$<span>990 元</span></p>
            </div>
        </div>

        <!-- coupon -->
        <div class="pTitle mt-4"><h3><span>優惠代碼</span></h3></div>
        <div class="coupon d-sm-flex justify-content-sm-start align-items-center py-4">
            <p>請輸入優惠券代碼</p><input type="text" name="" class="mx-3" value="123456789" disabled="">
        </div>
        <!--paycheck end-->
        <form action="">
            <div class="row mx-auto">
                <div class="col-md-6 px-md-3 px-0">
                    <div class="pTitle mt-4"><h3><span>訂購人資訊</span></h3></div>
                    <!--orderer-->
                    <dl class="p-3 payInfo">
                        <dd class="d-sm-flex justify-content-sm-start align-items-center">
                            <label class="col-auto" for="fullname">中文全名</label>
                            <input type="text" id="fullname" name="fullname" required>
                        </dd>
                        <dd class="d-sm-flex justify-content-sm-start align-items-center">
                            <label class="col-auto" for="mail">電子郵件</label>
                            <input type="mail" id="mail" name="mail" placeholder="訂單成立後，電子郵件即為您的會員帳號。" required>
                        </dd>
                        <dd class="d-sm-flex justify-content-sm-end align-items-center">
                            <button>檢查是否可使用此信箱</button>
                        </dd>
                        <dd class="d-sm-flex justify-content-sm-start align-items-center">
                            <label class="col-auto" for="mail">郵件確認</label>
                            <input type="mail" id="mail" name="mail" placeholder="請再輸入一次以做確認" required>
                        </dd>
                        <dd class="d-sm-flex justify-content-sm-start align-items-center">
                            <label class="col-auto" for="fullname">設定密碼</label>
                            <input type="text" id="fullname" name="fullname" placeholder="請熟記密碼，此為往後登入的會員密碼並請定期更換。" required>
                        </dd>
                        <dd class="d-sm-flex justify-content-sm-start align-items-center">
                            <label class="col-auto" for="fullname">密碼確認</label>
                            <input type="text" id="fullname" name="fullname" placeholder="請再輸入一次密碼。" required>
                        </dd>
                        <dd class="d-sm-flex justify-content-sm-start align-items-center">
                            <label class="col-auto" for="fullname">聯絡電話</label>
                            <input type="text" id="fullname" name="fullname" required>
                        </dd>
                        <dd class="d-sm-flex justify-content-sm-start align-items-center">
                            <label class="col-auto" for="fullname">聯絡地址</label>
                            <select class="col-md col mr-sm-2 mb-sm-0 mb-3" name="" id="">
                                <option value="台北市">台北市</option>
                            </select>
                            <select class="col-md col" name="" id="">
                                <option value="台北市">台北市</option>
                            </select>
                        </dd>
                        <dd class="d-sm-flex justify-content-sm-end align-items-center">
                            <input class="col-sm-10" type="add" placeholder="※ 地址請勿填寫郵政信箱">
                        </dd>
                        <dd class="d-sm-flex justify-content-sm-start align-items-center">
                            <label class="col-auto" for="fullname">身高及體重</label>
                            <label class="col-sm-auto">身高：</label>
                            <input class="col-auto" type="text"><span class="col-auto">cm</span>
                            <label class="col-sm-auto">體重：</label>
                            <input class="col-auto" type="text"><span class="col-auto">kg</span>
                        </dd>
                        <dd class="col-sm-10 ml-auto d-sm-flex justify-content-sm-end align-items-center">
                            (若您不確定您的穿著尺寸，請留下身高及體重，邦妮會依據相關資料，為您寄出適合您的尺寸，謝謝!!)
                        </dd>

                        <dd class="d-sm-flex justify-content-sm-start align-items-center">
                            <label class="col-auto" for="fullname">預計轉帳帳號後五碼</label>
                            <input type="text" id="fullname" name="fullname" required>
                        </dd>
                        <dd class="d-sm-flex justify-content-sm-start align-items-center">
                            <label class="col-auto" for="fullname">告知事項</label>
                            <textarea></textarea>
                        </dd>
                    </dl>
                    <!--orderer end-->
                </div>
                <div class="col-md-6 px-md-3 px-0">
                    <div class="pTitle mt-4"><h3><span>收件人資訊</span></h3></div>
                    <dl class="p-3 payInfo">
                        <dd class="d-sm-flex justify-content-sm-start align-items-center">
                            <input type="checkbox"><span class="ml-2">同訂購人資訊請打勾。</span>
                        </dd>
                        <dd class="d-sm-flex justify-content-sm-start align-items-center">
                           <label class="col-auto" for="fullname">中文全名</label>
                           <input type="text" id="fullname" name="fullname" class="mr-2" required>
                           <input class="col-auto" type="radio" name="">
                           <label class="col-auto">小姐</label>
                           <input class="col-auto" type="radio" name="">
                           <label class="col-auto">先生</label>
                       </dd>
                       <dd class="d-sm-flex justify-content-sm-start align-items-center">
                           <label class="col-auto" for="fullname">聯絡電話</label>
                           <input type="text" id="fullname" name="fullname" required>
                       </dd>
                       <dd class="d-sm-flex justify-content-sm-start align-items-center">
                           <label class="col-auto" for="fullname">聯絡地址</label>
                           <select class="col-md col mr-sm-2 mb-sm-0 mb-3" name="" id="">
                               <option value="台北市">台北市</option>
                           </select>
                           <select class="col-md col" name="" id="">
                               <option value="台北市">台北市</option>
                           </select>
                       </dd>
                       <dd class="d-sm-flex justify-content-sm-end align-items-center">

                           <input class="col-sm-10" type="add" placeholder="※ 地址請勿填寫郵政信箱">
                       </dd>
                   </dl>
               </div>
           </div>

           <div class="btnCart">
            <button><i class="fas fa-angle-left"></i> 上一步</button>
            <button type="submit" onclick="location.href='checkdone.php'">確認，下一步 <i class="fas fa-angle-right"></i></button>
        </div>
    </form>
</div>
</section>


<?php include("footer.php")?>

</body>
</html>