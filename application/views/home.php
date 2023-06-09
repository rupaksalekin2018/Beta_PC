
<?php echo $header; ?>

    
	
	<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class='container'>
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
						<img width = '40%' src="<?php echo $baseurl ?>assets/img/banner1.png" alt="">
						<div class="banner-caption text-center">
							<h1 class="primary-color">AMD Ryzen Threadripper</h1>
							<h3 class="white-color font-weak">32/64 Core</h3>
							<!-- <button class="primary-btn">Shop Now</button> -->
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img width = '40%' src="<?php echo $baseurl ?>assets/img/banner2.webp" alt="">
						<div class="banner-caption">
							<h1 class="primary-color">Intel 10th genaration<br><span class="white-color font-weak">A whole new genaration</span></h1>
							<!-- <button class="primary-btn">Shop Now</button> -->
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img width = '40%' src="<?php echo $baseurl ?>assets/img/banner3.webp" alt="">
						<div class="banner-caption">
							<h1 class="primary-color">Nvidia<span></span></h1>
							<!-- <button class="primary-btn">Shop Now</button> -->
						</div>
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Popular</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="<?php echo $baseurl ?>/assets/img/popular.jpg" alt="">
						<!-- <div class="banner-caption">
							<h2 class="white-color">NEW<br>COLLECTION</h2>
							<button class="primary-btn">Shop Now</button>
						</div> -->
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('cpu');
								$this->db->order_by('hits','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','cpu');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/cpu/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
										for($i=1;$i<=5;$i++){
											if($i<=$rating){
												echo '<i class="fa fa-star"></i>';
											}else{
												echo '<i class="fa fa-star-o empty"></i>';
											}
										} 
									?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/cpu/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('gpu');
								$this->db->order_by('hits','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','gpu');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/gpu/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/gpu/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('motherboard');
								$this->db->order_by('hits','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','motherboard');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/motherboard/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/motherboard/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('ram');
								$this->db->order_by('hits','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','ram');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/ram/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/ram/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('hdd');
								$this->db->order_by('hits','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','hdd');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/hdd/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/hdd/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('ssd');
								$this->db->order_by('hits','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','ssd');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/ssd/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/ssd/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('psu');
								$this->db->order_by('hits','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','psu');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/psu/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/psu/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('casing');
								$this->db->order_by('hits','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','casing');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/casing/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
										for($i=1;$i<=5;$i++){
											if($i<=$rating){
												echo '<i class="fa fa-star"></i>';
											}else{
												echo '<i class="fa fa-star-o empty"></i>';
											}
										} 
									?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/casing/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->
		</div>
	</div>
<!-- /section -->


<!-- section -->
<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">New Collections</h2>
						<div class="pull-right">
							<div class="product-slick-dots-2 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="<?php echo $baseurl ?>assets/img/new.jpg" alt="">
						<!-- <div class="banner-caption">
							<h2 class="white-color">NEW<br>COLLECTION</h2>
							<button class="primary-btn">Shop Now</button>
						</div> -->
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-2" class="product-slick">
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('cpu');
								$this->db->order_by('datetime','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','cpu');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/cpu/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/cpu/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('gpu');
								$this->db->order_by('datetime','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','gpu');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/gpu/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/gpu/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('motherboard');
								$this->db->order_by('datetime','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','motherboard');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/motherboard/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/motherboard/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('ram');
								$this->db->order_by('datetime','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','ram');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/ram/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/ram/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('hdd');
								$this->db->order_by('datetime','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','hdd');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/hdd/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/hdd/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('ssd');
								$this->db->order_by('datetime','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','ssd');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/ssd/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/ssd/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('psu');
								$this->db->order_by('datetime','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','psu');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/psu/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/psu/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
							<!-- Product Single -->
							<?php
								$this->db->select('*');
								$this->db->from('casing');
								$this->db->order_by('datetime','desc');
								$this->db->limit(1);
								$t = $this->db->get();
								$p = $t->result();
							?>
							<?php 
								$this->db->select('*');
								$this->db->where('id',$p[0]->ID);
								$this->db->where('type','casing');
								$this->db->from('review');
								$q = $this->db->get();
								$reviews =  $q->result();
								$rating=0;
								$count=0;
								foreach($reviews as $re) {
									$rating+=$re->rating;
									$count++;
								}
								if($reviews){
									$rating = $rating/$count;
								}

							?>
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<!-- <span>New</span>
										<span class="sale">-20%</span> -->
									</div>
									<!-- <ul class="product-countdown">
										<li><span>00 H</span></li>
										<li><span>00 M</span></li>
										<li><span>00 S</span></li>
									</ul> -->
									<!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
									<img src="<?php echo $baseurl ?>/uploads/casing/<?php echo $p[0]->path ?>" alt="">
								</div>
								<div class="product-body">
									<h3 class="product-price"><?php echo $p[0]->price.'TK' ?> <del class="product-old-price"></del></h3>
									<div class="product-rating">
									<?php
									for($i=1;$i<=5;$i++){
										if($i<=$rating){
											echo '<i class="fa fa-star"></i>';
										}else{
											echo '<i class="fa fa-star-o empty"></i>';
										}
									} 
								?>
									</div>
									<h2 class="product-name"><a href="<?php echo $baseurl ?>product-page/casing/<?php echo $p[0]->ID ?>"><?php echo $p[0]->name ?></a></h2>
									<div class="product-btns">
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<!-- <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
									</div>
								</div>
							</div>
							<!-- /Product Single -->
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->
		</div>
	</div>
<!-- /section -->

<?php echo $footer; ?>