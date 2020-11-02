<!-- Start top-post Area -->
<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row small-gutters">
						<div class="col-lg-8 top-post-left">
							<div class="feature-image-thumb relative">
								<div class="overlay overlay-bg"></div>
								<img class="img-fluid" src="<?=base_url();?>assets/img/top-post1.jpg" alt="">
							</div>
                            <div class="top-post-details">
								
								<a href="image-post.html">
									<h1>Sistem Informasi Desa Panji</h1>
								</a>
								
							</div>
						</div>
						<div class="col-lg-4 top-post-right">
							<div class="single-top-post">
								<div class="feature-image-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="<?=base_url();?>assets/img/top-post2.jpg" alt="">
								</div>
								<div class="top-post-details">
									<a href="<?php echo base_url().'index.php/latihan/detail/berita1'?>">
										<h4>TALK SHOW PEMILIHAN PERBEKEL PANJI PERIODE TAHUN 2019 - 2025</h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>28 Oktober 2019 10:04:09 WITA</a></li>
									</ul>
								</div>
							</div>
							<div class="single-top-post mt-10">
								<div class="feature-image-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="<?=base_url();?>assets/img/top-post3.jpg" alt="">
								</div>
								<div class="top-post-details">
									<a href="<?php echo base_url().'index.php/latihan/detail/berita2'?>">
										<h4>PENYAMPAIAN METODE KAMPANYE PEMILIHAN PERBEKEL DESA PANJI TAHUN 2019</h4>
									</a>
									<ul class="meta">
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>18 Oktober 2019 12:23:11 WITA</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
				  <div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
						  <div class="latest-post-wrap">
								<h4 class="cat-title"><center>ARTIKEL TERKINI</center></h4>
								<?php foreach($berita as $val){?>
								<div class="single-latest-post row align-items-center">
									<div class="col-lg-5 post-left">
										<div class="feature-img relative">
											<div class="overlay overlay-bg"></div>
											
											<img class="img-fluid" src="<?=base_url('assets/img/'.$val->Foto);?>" alt="">
											
										</div>
									</div>
									<div class="col-lg-7 post-right">
										
											<tr>
                                                <h4><?=$val->Judul_Berita;?></h4>
                                            </tr>
											
										</a>
										<ul class="meta">
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?=$val->Tgl_berita;?></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span><?=$val->Admin;?></a></li>
										</ul>
										<p class="excert">
										<?=$val->Isi_Berita;?>
										</p>
										<hr></hr>
										
									</div>
								</div>
								<?php } ?>
							</div>
							<!-- End latest-post Area -->
							
						</div>
						<!-- start sidebar-->
						<div class="col-lg-4">
						  <div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget">
									<h6 class="title">Arsip Artikel</h6>
									<div class="editors-pick-post">
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="<?=base_url();?>assets/img/e1.jpg" alt="">
											</div>
										</div>
										<div class="details">
											<a href="<?php echo base_url().'index.php/latihan/detail/berita3'?>">
												<h4 class="mt-20">MUSRENBANG DESA PANJI TAHUN 2019</h4>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>02 Oktober 2019 08:20:23 WITA </a></li>
											</ul>
											<p class="excert">
												Panji, Selasa, 1 Oktober 2019 bertempat di aula Kantor Kepala Desa Panji, diadakan acara Musrebang Desa tentang Penysusunan Rencana Kerja Pemerintah Desa (RKP Des) Tahun Anggaran 2020.
											</p>
										</div>
                                        <div class="single-sidebar-widget editors-pick-widget">
									<h6 class="title">Galeri Foto</h6>
									<div class="editors-pick-post">
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
											</div>
										</div>
										<div class="post-lists">
											<div class="single-post d-flex flex-row">
												<div class="thumb">
													<img src="<?=base_url();?>assets/img/e2.jpg" alt="">
												</div>
											</div>
											<div class="single-post d-flex flex-row">
												<div class="thumb">
													<img src="<?=base_url();?>assets/img/e3.jpg" alt="">
												</div>
											</div>
											<div class="single-post d-flex flex-row">
												<div class="thumb">
													<img src="<?=base_url();?>assets/img/e4.jpg" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="single-sidebar-widget ads-widget"></div>
							  <div class="single-sidebar-widget newsletter-widget"></div>
							  <div class="single-sidebar-widget most-popular-widget">
								  <div class="single-list flex-row d-flex">
									  <div class="thumb"></div>
							    </div>
						    </div>
							  <div class="single-sidebar-widget social-network-widget"></div>
						  </div>
						</div>
						<!-- end sidebar-->
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->