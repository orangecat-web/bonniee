<body>
	<header>
		<section class="topBar fixed-top py-2">
			<dl class="d-flex justify-content-between px-2">
				<dd>
					<a href="#" target="_blank"><i class="fas fa-envelope"></i></a>
					<a href="#" target="_blank"><i class="fab fa-line"></i></a>
				</dd>
				<dd class="col-sm-auto col d-flex justify-content-end">
					<!--search bar-->
					<div>
						<a href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<div class="d-flex justify-content-between searchbar">
								<input class="search" type="text" placeholder="請輸入關鍵字">
								<button class="col-auto">搜尋</button>
							</div>
						</div>
					</div>
					<!--signin & signup-->
					<div>
						<a href="signin.php">會員登入</a>
						<a href="signup.php">加入會員</a>
					</div>
					<!--cart-->
					<div>
						<a href="cart.php"><span>99</span><i class="fas fa-shopping-cart"></i></a>
					</div>
				</dd>
			</dl>
		</section>
		<!--nav for mobile-->
		<div off-canvas="slidebar-2 left overlay" class="slidebars">
			<div class="closeBtn"><button class="js-close-right-slidebar btn_close"><i class="fas fa-times"></i></button></div>
			<dl class="slidebarNav">
				<dd class="nav-item">
					<a class="nav-item nav-link" href="hotsale.php">優惠專區</a>
				</dd>
				<dd class="nav-item">
					<a class="nav-item nav-link" href="products.php">商品專區</a>
				</dd>
				<dd class="nav-item">
					<a class="nav-item nav-link" href="news.php">最新消息</a>
				</dd>
				<dd class="nav-item">
					<a class="nav-item nav-link" href="faq.php">常見問題</a>
				</dd>
				<dd class="nav-item">
					<a class="nav-item nav-link" href="contact.php">聯絡我們</a>
				</dd>
				<dd class="nav-item">
					<a class="nav-item nav-link" href="privacy.php">隱私權聲明</a>
				</dd>
				<dd class="nav-item">
					<a class="nav-item nav-link" href="sitemap.php">網站地圖</a>
				</dd>
			</dl>
		</div>
		<!-- nav for desktop -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light align-items-end">
			<a class="navbar-brand" href="." title="邦妮美腿會館"><img src="images/layout/logo.svg" alt="邦妮美腿會館"></a>
			<button class="navbar-toggler navbar-toggler-right js-toggle-right-slidebar"><i class="fas fa-bars"></i></button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
				<ul class="navbar-nav pt-2">
					<li class="nav-item">
						<a class="nav-link" href="hotsale.php">優惠專區<br><span>Sale</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">商品專區<br><span>Products</span></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="products.php">褲　　　襪</a>
							<a class="dropdown-item" href="products.php">睡　眠　襪</a>
							<a class="dropdown-item" href="products.php">小　腿　襪</a>
							<a class="dropdown-item" href="products.php">大　腿　襪</a>
							<a class="dropdown-item" href="products.php">九　分　襪</a>
							<a class="dropdown-item" href="products.php">孕　婦　襪</a>
							<a class="dropdown-item" href="products.php">塑　身　衣</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-item nav-link" href="news.php">最新消息<br><span>News</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-item nav-link" href="faq.php">常見問題<br><span>Q&amp;A</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-item nav-link" href="contact.php">聯絡我們<br><span>Contact us</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<article class="" canvas="container"></article>
