<?php
    require 'header.php';
 ?>
 
    <body data-spy="scroll" data-target="#mainNav" data-offset="70">
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index"><img src="img/zum.png" width="100px" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="#home">Home</a></li> 
								<li class="nav-item submenu dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FEATURES</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="#feature">Smart Dashboard</a></li>
										<li class="nav-item"><a class="nav-link" href="#tracking">Tracking</a></li>
									</ul>
								</li> 
									<!-- <li class="nav-item"><a class="nav-link" href="#client">Client</a> -->
								<li class="nav-item"><a class="nav-link" href="about">About</a></li> 
								<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area" id="home">
			<div class="parallax">
            <div class="banner_inner">
				<div class="container">
					<div class="row banner_content">
						<div class="col-lg-7">
							<h2 class="wow fadeInUp">ZUM* iot</h2><br /><h3 class="wow fadeInRight"> Solusi IoT </h3>
							<h4 class="wow fadeInLeftBig">Dengan solusi IoT Membuat segalanya lebih mudah dan efisien </h4>
							<a href="#feature"><img class="wow fadeInDown 1s infinite" style="margin-top: 40px;" src="img/down.png" width="40px" /></a>
						</div>
						<!-- <div class="col-lg-4">
							<div class="banner_map_img">
								<img class="img-fluid wow lightSpeedIn" src="img/4.png" width="350px" style="max-width: 100%; margin-left: 50px" alt="">
							</div>
						</div> -->
					</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <br>
        
        <!--================Interior Area =================-->
        <section class="interior_area" id="feature">
        	<div class="container">
        		<div class="interior_inner row">
        			<div class="col-lg-6">
        				<img class="img-fluid wow fadeInLeft" src="img/3.png" alt="">
        			</div>
        			<div class="col-lg-5 offset-lg-1">
        				<div class="interior_text">
							<h4 class="wow fadeInUp" >SMART DASHBOARD</h4>
							<p class="wow fadeInRight">Cukup satu dashboard untuk memantau seluruh sistem
								Pantau dan kelola seluruh sistem area industri Anda dengan dashboard tunggal yang disesuaikan dengan kebutuhan dan dilengkapi kemampuan integrasi melalui Application Programming Interface (API). </p>
        					
        					<!-- <a class="main_btn" href="#">See Details</a> -->
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Interior Area =================-->
        
        <!--================Interior Area =================-->
        <section class="interior_area" id="tracking">
        	<div class="container">
        		<div class="interior_inner row">
        			<div class="col-lg-5 offset-lg-1">
        				<div class="interior_text">
        					<h4 class="wow fadeInLeft">TRACKING</h4>
        					<p class="wow fadeInDown">Solusi yang diberikan bagi pelanggan korporasi untuk memantau posisi kendaraan, armada, dan aset bergerak lainnya. Solusi ini sangat menguntungkan bagi perusahaan bergerak dalam bidang distribusi/pengiriman dan angkutan.</p>
        					<!-- <a class="main_btn" href="#">See Details</a> -->
        				</div>
        			</div>
        			<div class="col-lg-6">
						<img class="img-fluid wow fadeInRight" src="img/kota.png" alt="">
        			</div>
        		</div>
        	</div>
		</section>
		<br><br><br>
        <!--================End Interior Area =================-->        
        
        <!--================Start work App Area =================-->
        <section class="download_app_area" id="screen">
			<div class="parallax2 p_180">
        	<div class="container">
        		<div class="app_inner">
        			<h2 class="wow fadeInUp">Start Work With ZUM* iot ?</h2>
        			<div class="app_btn_area wow fadeInRightBig">
        				<div class="app_btn">
        					<div class="media">
								<div class="d-flex">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="media-body">
									<a href="contact"><h4>Contact</h4></a>
								</div>
							</div>
        				</div>
        				
        			</div>
        		</div>
			</div>
		</div>
        </section>
        <!--================End Work App Area =================-->
		
		<!--================Testimonials Area =================-->
        <!-- <section class="testimonials_area p_120" id="client"> 
				<div class="container">
					<div class="main_title">
						<h2 class="wow fadeInRight">Client</h2>
					</div>
					<div class="testi_slider owl-carousel">
						<div class="item">
							<div class="testi_item">
								<div class="media">
									<div class="d-flex">
										<img src="img/kpc.png" style="width: 100px; height: 100px;" alt="">
									</div>
									<div class="media-body">
										<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
										<h4>PT. Kaltim Prima Coal</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testi_item">
								<div class="media">
									<div class="d-flex">
										<img src="img/pkt.png" style="width: 100px; height: 100px;" alt="">
									</div>
									<div class="media-body">
										<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
										<h4>PT. Pupuk Kaltim</h4>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
								<div class="testi_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/pdam.png" style="width: 100px; height: 100px;" alt="">
										</div>
										<div class="media-body">
											<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware.</p>
											<h4>PDAM</h4>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</section> -->
			<!--================End Testimonials Area =================-->
       <?php
	require 'footer.php';
	   ?>