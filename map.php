<?php

/*
Template Name: Map
*/

?>



<?php get_header(); ?>

	<?php if (have_posts()): ?>
		<?php while (have_posts()): the_post(); ?>

		<div class="entry">
			<div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
				<div class="post-meta">
					<h1><?php the_title(); ?></h1>
					<?php printf(__('by <span class="post-author"><a href="%s" title="Posts by %s">%s</a></span> on <span class="post-date">%s</span> &bull; <span>%s</span>', 'sight'),
						get_author_posts_url(get_the_author_meta('ID')),
						get_the_author(),
						get_the_author(),
						get_the_time('M j, Y'),
						get_the_time()
					); ?>
					<?php edit_post_link( __( 'Edit entry', 'sight'), '&bull; '); ?>
					<?php if (comments_open()): ?>
						<a href="#comments" class="post-comms"><?php comments_number(__('No Comments', 'sight'), __('1 Comment', 'sight'), __('% Comments', 'sight'), '', __('Comments Closed', 'sight') ); ?></a>
					<?php endif; ?>
				</div>
				<div class="post-content">

					<div style="position: relative; left: 0; top: 0;">
						<!-- Background map of the UK -->
						<img src="http://localhost/wordpress/50for15/wp-content/themes/fiftyforfifteen/GBOverviewPlus.jpeg" style="position: relative; bottom: 0; left: 0;"/>
						<!-- Constituency circles -->
						<a href="http://50for15.com/constituency/arfon">
							<img src="http://50for15.com/wp-content/uploads/2015/02/plaid_circle.png" style="bottom: 315px; right: 350px;" class="constituency-circles" id="arfon"/>
						</a>
						<a href="http://50for15.com/constituency/argyll-and-bute">
							<img src="http://50for15.com/wp-content/uploads/2015/02/libdem_circle.png" style="bottom: 590px; right: 400px;" class="constituency-circles" id="argyll-and-bute"/>
						</a>
						<a href="http://50for15.com/constituency/ashfield">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 320px; right: 190px;" class="constituency-circles" id="ashfield"/>
						</a>
						<a href="http://50for15.com/constituency/birmingham-edgbaston">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 250px; right: 220px;" class="constituency-circles" id="birmingham-edgbaston"/>
						</a>
						<a href="http://50for15.com/constituency/bolton-west">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 350px; right: 250px;" class="constituency-circles" id="bolton-west"/>
						</a>
						<a href="http://50for15.com/constituency/bradford-east">
							<img src="http://50for15.com/wp-content/uploads/2015/02/libdem_circle.png" style="bottom: 370px; right: 220px;" class="constituency-circles" id="bradford-east"/>
						</a>
						<a href="http://50for15.com/constituency/brent-central">
							<img src="http://50for15.com/wp-content/uploads/2015/02/libdem_circle.png" style="bottom: 168px; right: 130px;" class="constituency-circles" id="brent-central"/>
						</a>
						<a href="http://50for15.com/constituency/brentford-and-isleworth">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 158px; right: 130px;" class="constituency-circles" id="brentford-and-isleworth"/>
						</a>
						<a href="http://50for15.com/constituency/brighton-pavilion">
							<img src="http://50for15.com/wp-content/uploads/2015/02/green_circle.png" style="bottom: 100px; right: 125px;" class="constituency-circles" id="brighton-and-pavilion"/>
						</a>
						<a href="http://50for15.com/constituency/bristol-west">
							<img src="http://50for15.com/wp-content/uploads/2015/02/libdem_circle.png" style="bottom: 155px; right: 265px;" class="constituency-circles" id="bristol-west"/>
						</a>
						<a href="http://50for15.com/constituency/broxtowe">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 295px; right: 185px;" class="constituency-circles" id="broxtowe"/>
						</a>
						<a href="http://50for15.com/constituency/camborne-and-redruth">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 45px; right: 420px;" class="constituency-circles" id="camborne-and-redruth"/>
						</a>
						<a href="http://50for15.com/constituency/cardiff-north">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 163px; right: 300px;" class="constituency-circles" id="cardiff-north"/>
						</a>
						<a href="http://50for15.com/constituency/carlisle">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 470px; right: 275px;" class="constituency-circles" id="carlisle"/>
						</a>
						<a href="http://50for15.com/constituency/cleethorpes">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 355px; right: 130px;" class="constituency-circles" id="cleethorpes"/>
						</a>
						<a href="http://50for15.com/constituency/derby-north">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 287px; right: 200px;" class="constituency-circles" id="derby-north"/>
						</a>
						<a href="http://50for15.com/constituency/dover-and-deal">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 130px; right: 40px;" class="constituency-circles" id="dover-and-deal"/>
						</a>
						<a href="http://50for15.com/constituency/dundee-east">
							<img src="http://50for15.com/wp-content/uploads/2015/02/snp_circle.png" style="bottom: 615px; right: 280px;" class="constituency-circles" id="dundee-east"/>
						</a>
						<a href="http://50for15.com/constituency/edinburgh-south">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 565px; right: 290px;" class="constituency-circles" id="edinburgh-south"/>
						</a>
						<a href="http://50for15.com/constituency/gedling">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 295px; right: 180px;" class="constituency-circles" id="gedling"/>
						</a>
						<a href="http://50for15.com/constituency/great-grimsby">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 350px; right: 125px;" class="constituency-circles" id="great-grimsby"/>
						</a>
						<a href="http://50for15.com/constituency/great-yarmouth">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 260px; right: 20px;" class="constituency-circles" id="great-yarmouth"/>
						</a>
						<a href="http://50for15.com/constituency/hampstead-and-kilburn">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 165px; right: 125px;" class="constituency-circles" id="hampstead-and-kilburn"/>
						</a>
						<a href="http://50for15.com/constituency/hendon">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 170px; right: 120px;" class="constituency-circles" id="hendon"/>
						</a>
						<a href="http://50for15.com/constituency/hull-north">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 367px; right: 140px;" class="constituency-circles" id="hull-north"/>
						</a>
						<a href="http://50for15.com/constituency/lancaster-and-fleetwood">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 395px; right: 270px;" class="constituency-circles" id="lancaster-and-fleetwood"/>
						</a>
						<a href="http://50for15.com/constituency/lincoln">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 320px; right: 145px;" class="constituency-circles" id="lincoln"/>
						</a>
						<a href="http://50for15.com/constituency/mid-dorset-and-north-poole">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 93px; right: 235px;" class="constituency-circles" id="mid-dorset-and-north-poole"/>
						</a>
						<a href="http://50for15.com/constituency/morley-and-outwood">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 365px; right: 210px;" class="constituency-circles" id="morley-and-outwood"/>
						</a>
						<a href="http://50for15.com/constituency/newton-abbot">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 75px; right: 320px;" class="constituency-circles" id="newton-abbot"/>
						</a>
						<a href="http://50for15.com/constituency/north-warwickshire">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 255px; right: 210px;" class="constituency-circles" id="north-warwickshire"/>
						</a>
						<a href="http://50for15.com/constituency/northampton-north">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 235px; right: 190px;" class="constituency-circles" id="northampton-north"/>
						</a>
						<a href="http://50for15.com/constituency/norwich-south">
							<img src="http://50for15.com/wp-content/uploads/2015/02/libdem_circle.png" style="bottom: 270px; right: 45px;" class="constituency-circles" id="norwich-south"/>
						</a>
						<a href="http://50for15.com/constituency/oxford-west-and-abingdon">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 185px; right: 187px;" class="constituency-circles" id="oxford-west-and-abingdon"/>
						</a>
						<a href="http://50for15.com/constituency/plymouth-sutton-and-devonport">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 65px; right: 350px;" class="constituency-circles" id="plymouth-sutton-and-devonport"/>
						</a>
						<a href="http://50for15.com/constituency/rochdale">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 355px; right: 235px;" class="constituency-circles" id="rochdale"/>
						</a>
						<a href="http://50for15.com/constituency/sheffield-central">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 332px; right: 198px;" class="constituency-circles" id="sheffield-central"/>
						</a>
						<a href="http://50for15.com/constituency/solihull">
							<img src="http://50for15.com/wp-content/uploads/2015/02/libdem_circle.png" style="bottom: 245px; right: 210px;" class="constituency-circles" id="solihull"/>
						</a>
						<a href="http://50for15.com/constituency/somerset-north-east">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 150px; right: 258px;" class="constituency-circles" id="somerset-north-east"/>
						</a>
						<a href="http://50for15.com/constituency/south-thanet">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 150px; right: 35px;" class="constituency-circles" id="south-thanet"/>
						</a>
						<a href="http://50for15.com/constituency/southampton-itchen">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 110px; right: 190px;" class="constituency-circles" id="southampton-itchen"/>
						</a>
						<a href="http://50for15.com/constituency/stockton-south">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 440px; right: 190px;" class="constituency-circles" id="stockton-south"/>
						</a>
						<a href="http://50for15.com/constituency/stroud">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 185px; right: 240px;" class="constituency-circles" id="stroud"/>
						</a>
						<a href="http://50for15.com/constituency/sutton-and-cheam">
							<img src="http://50for15.com/wp-content/uploads/2015/02/libdem_circle.png" style="bottom: 155px; right: 123px;" class="constituency-circles" id="sutton-and-cheam"/>
						</a>
						<a href="http://50for15.com/constituency/swansea-west">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 175px; right: 342px;" class="constituency-circles" id="swansea-west"/>
						</a>
						<a href="http://50for15.com/constituency/thurrock">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 163px; right: 105px;" class="constituency-circles" id="thurrock"/>
						</a>
						<a href="http://50for15.com/constituency/walsall-north">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 260px; right: 235px;" class="constituency-circles" id="walsall-north"/>
						</a>
						<a href="http://50for15.com/constituency/watford">
							<img src="http://50for15.com/wp-content/uploads/2015/02/conservative_circle.png" style="bottom: 170px; right: 140px;" class="constituency-circles" id="watford"/>
						</a>
						<a href="http://50for15.com/constituency/wells">
							<img src="http://50for15.com/wp-content/uploads/2015/02/libdem_circle.png" style="bottom: 140px; right: 270px;" class="constituency-circles" id="wells"/>
						</a>
						<a href="http://50for15.com/constituency/wirral-south">
							<img src="http://50for15.com/wp-content/uploads/2015/02/labour_circle.png" style="bottom: 330px; right: 283px;" class="constituency-circles" id="wirral-south"/>
						</a>


						<!-- CONSTITUENCY TEXTS -->
						<div class="constituency-text" id="arfon-text">
							<p>
								<strong>Arfon</strong><br>
								<span class="plaid">Plaid Cymru</span> majority: 1,455 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="argyll-and-bute-text">
							<p>
								<strong>Argyll and Bute</strong><br>
								<span class="libdem">Lib Dem</span> majority: 3,431 votes<br>
								<span class="conservative">Conservative</span> target<br>
								<span class="labour">Labour</span> target<br>
								<span class="snp">SNP</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="ashfield-text">
							<p>
								<strong>Ashfield</strong><br>
								<span class="labour">Labour</span> majority: 192 votes<br>
								<span class="libdem">Lib Dem</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="birmingham-edgbaston-text">
							<p>
								<strong>Birmingham Edgbaston</strong><br>
								<span class="labour">Labour</span> majority: 1, 274 votes<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="bolton-west-text">
							<p>
								<strong>Bolton West</strong><br>
								<span class="labour">Labour</span> majority: 92 votes<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="bradford-east-text">
							<p>
								<strong>Bradford East</strong><br>
								<span class="libdem">Liberal Democrat</span> majority: 365 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="brent-central-text">
							<p>
								<strong>Brent Central</strong><br>
								<span class="libdem">Liberal Democrat</span> majority: 1,345 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="brentford-and-isleworth-text">
							<p>
								<strong>Brentford and Isleworth</strong><br>
								<span class="conservative">Conservative</span> majority: 853 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="brighton-pavilion-text">
							<p>
								<strong>Brighton Pavilion</strong><br>
								<span class="green">Green</span> majority: 1,252 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="bristol-west-text">
							<p>
								<strong>Bristol West</strong><br>
								<span class="libdem">Liberal Democrat</span> majority: 11, 366 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="broxtowe-text">
							<p>
								<strong>Broxtowe</strong><br>
								<span class="conservative">Conservative</span> majority: 389 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="camborne-and-redruth-text">
							<p>
								<strong>Camborne and Redruth</strong><br>
								<span class="conservative">Conservative</span> majority: 66 votes<br>
								<span class="libdem">Liberal Democrat</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="cardiff-north-text">
							<p>
								<strong>Cardiff North</strong><br>
								<span class="conservative">Conservative</span> majority: 194  votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="carlisle-text">
							<p>
								<strong>Carlisle</strong><br>
								<span class="conservative">Conservative</span> majority: 1, 958 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="cleethorpes-text">
							<p>
								<strong>Cleethorpes</strong><br>
								<span class="conservative">Conservative</span> majority: 4,298 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="derby-north-text">
							<p>
								<strong>Derby North</strong><br>
								<span class="labour">Labour</span> majority: 613<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="dover-and-deal-text">
							<p>
								<strong>Dover and Deal</strong><br>
								<span class="conservative">Conservative</span> majority: 5,274 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="dundee-east-text">
							<p>
								<strong>Dundee East</strong><br>
								<span class="snp">SNP</span> majority: 1,821 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="edinburgh-south-text">
							<p>
								<strong>Edinburgh South</strong><br>
								<span class="labour">Labour</span> majority: 316 votes<br>
								<span class="libdem">Liberal Democrat</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="gedling-text">
							<p>
								<strong>Gedling</strong><br>
								<span class="labour">Labour</span> majority: 1,859 votes<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="great-grimsby-text">
							<p>
								<strong>Great Grimsby</strong><br>
								<span class="labour">Labour</span> majority: 714 votes<br>
								<span class="conservative">Conservative</span> target<br>
								<span class="ukip">UKIP</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="great-yarmouth-text">
							<p>
								<strong>Great Yarmouth</strong><br>
								<span class="conservative">Conservative</span> marjority: 4,276 votes<br>
								<span class="libdem">Liberal Democrat</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="hampstead-and-kilburn-text">
							<p>
								<strong>Hampstead and Kilburn</strong><br>
								<span class="labour">Labour</span> majority: 42 votes<br>
								<span class="conservative">Conservative</span> target<br>
								<span class="libdem">Liberal Democrat</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="hendon-text">
							<p>
								<strong>Hendon</strong><br>
								<span class="conservative">Conservative</span> marjority: 106 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="hull-north-text">
							<p>
								<strong>Hull North</strong><br>
								<span class="labour">Labour</span> majority: 641 votes<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="lancaster-and-fleetwood-text">
							<p>
								<strong>Lancaster and Fleetwood</strong><br>
								<span class="conservative">Conservative</span> marjority: 333 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="lincoln-text">
							<p>
								<strong>Lincoln</strong><br>
								<span class="conservative">Conservative</span> marjority: 1,058 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="mid-dorset-and-north-poole-text">
							<p>
								<strong>Mid Dorset and North Poole</strong><br>
								<span class="libdem">Liberal Democrat</span> majority: 269 votes<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="morley-and-outwood-text">
							<p>
								<strong>Morley and Outwood</strong><br>
								<span class="labour">Labour</span> majority: 1,001 votes<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="newton-abbot-text">
							<p>
								<strong>Newton Abbot</strong><br>
								<span class="conservative">Conservative</span> majority: 523 votes<br>
								<span class="libdem">Liberal Democrat</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="north-warwickshire-text">
							<p>
								<strong>North Warwickshire</strong><br>
								<span class="conservative">Conservative</span> majority: 54 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="northampton-north-text">
							<p>
								<strong>Northampton North</strong><br>
								<span class="conservative">Conservative</span> majority: 1,936 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="norwich-south-text">
							<p>
								<strong>Norwich South</strong><br>
								<span class="libdem">Liberal Democrat</span> majority: 310 votes<br>
								<span class="labour">Labour</span> target<br>
								<span class="green">Green</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="oxford-west-and-abingdon-text">
							<p>
								<strong>Oxford West and Abingdon</strong><br>
								<span class="conservative">Conservative</span> majority: 176 votes<br>
								<span class="libdem">Liberal Democrat</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="plymouth-sutton-and-devonport-text">
							<p>
								<strong>Plymouth Sutton and Devonport</strong><br>
								<span class="conservative">Conservative</span> majority: 1,149 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="rochdale-text">
							<p>
								<strong>Rochdale</strong><br>
								<span class="labour">Labour</span> majority: 889 votes<br>
								<span class="libdem">Liberal Democrat</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="sheffield-central-text">
							<p>
								<strong>Sheffield Central</strong><br>
								<span class="labour">Labour</span> majority: 165 votes<br>
								<span class="libdem">Liberal Democrat</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="solihull-text">
							<p>
								<strong>Solihull</strong><br>
								<span class="libdem">Liberal Democrat</span> majority: 175<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="somerset-north-east-text">
							<p>
								<strong>Somerset North East</strong><br>
								<span class="conservative">Conservative</span> majority: 4,914<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="south-thanet-text">
							<p>
								<strong>South Thanet</strong><br>
								<span class="conservative">Conservative</span> majority: 7,617<br>
								<span class="ukip">UKIP</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="southampton-itchen-text">
							<p>
								<strong>Southampton Itchen</strong><br>
								<span class="labour">Labour</span> majority: 192<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="stockton-south-text">
							<p>
								<strong>Stockton South</strong><br>
								<span class="conservative">Conservative</span> majority: 332<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="stroud-text">
							<p>
								<strong>Stroud</strong><br>
								<span class="conservative">Conservative</span> majority: 1,299 votes<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="sutton-and-cheam-text">
							<p>
								<strong>Sutton and Cheam</strong><br>
								<span class="libdem">Liberal Democrat</span> majority: 1,608<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="swansea-west-text">
							<p>
								<strong>Swansea West</strong><br>
								<span class="labour">Labour</span> majority: 504<br>
								<span class="libdem">Liberal Democrat</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="thurrock-text">
							<p>
								<strong>Thurrock</strong><br>
								<span class="conservative">Conservative</span> majority: 92 votes<br>
								<span class="labour">Labour</span> target<br>
								<span class="ukip">UKIP</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="walsall-north-text">
							<p>
								<strong>Walsall North</strong><br>
								<span class="labour">Labour</span> majority: 990<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="watford-text">
							<p>
								<strong>Watford</strong><br>
								<span class="conservative">Conservative</span> majority: 1,425 votes<br>
								<span class="libdem">Liberal Democrat</span> target<br>
								<span class="labour">Labour</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="wells-text">
							<p>
								<strong>Wells</strong><br>
								<span class="libdem">Liberal Democrat</span> majority: 800 votes<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
						<div class="constituency-text" id="wirral-south-text">
							<p>
								<strong>Wirral South</strong><br>
								<span class="labour">Labour</span> majority: 531<br>
								<span class="conservative">Conservative</span> target<br>
								<em>Click to read more</em>
							</p>
						</div>
					</div>




								<span class="conservative">Conservative</span> target<br>
								<span class="labour">Labour</span> target<br>
								<span class="libdem">Liberal Democrat</span> target<br>
								<span class="ukip">UKIP</span> target<br>
								<span class="green">Green</span> target<br>
								<span class="snp">SNP</span> target<br>
								<span class="plaid">Plaid Cymru</span> target<br>
					<script type="text/javascript" src="<?= get_site_url() . "/wp-content/themes/fiftyforfifteen" ;?>/map.js"></script>
					<script type="text/javascript">
					<!--
						map();
							//--></script>


<p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass.</p>



				</div>
				<div class="post-footer"><?php the_tags('<strong>'.__('Tags:', 'sight').' </strong>', ', '); ?></div>
			</div>
		</div>

		<?php endwhile; ?>
	<?php endif; ?>

<?php comments_template(); ?>
<?php get_footer(); ?>



<script type="text/javascript">

// jQuery(".constituency-circles").hover(function(){

//  	//Find constituency with correct id
// 	var thisConstituency = "#" + jQuery(this).attr('id');

// 	//Find position of thisConstituency
// 	var thisConstituencyBottom = parseInt(jQuery(thisConstituency).css("bottom").replace(/[^-\d\.]/g, ''));
// 	var thisConstituencyRight = parseInt(jQuery(thisConstituency).css("right").replace(/[^-\d\.]/g, ''));

// 	//Define thisConstituencyText variable
// 	var thisConstituencyText = thisConstituency + "-text";

// 	//Define thisConstituencyText position
// 	var thisConstituencyTextBottom = thisConstituencyBottom + 40 + "px";
// 	var thisConstituencyTextRight = thisConstituencyRight + 20 + "px";

// 	//Add CSS to thisConstituency text so that it displays just above the circle
// 	jQuery(thisConstituencyText).css("bottom", thisConstituencyTextBottom);
// 	jQuery(thisConstituencyText).css("right", thisConstituencyTextRight);

// 	//Show constituency text for constituency that's been clicked on
// 	jQuery(thisConstituencyText).show();	
// 	}, function () {
// 		//Make array of all constituencies
// 		var allConstituencies = []
// 		jQuery('.constituency-circles').each(function(){
// 		 	allConstituencies.push( "#" + jQuery(this).attr('id') );
// 		});
// 		//Hide all constituency texts
// 		jQuery(allConstituencies).each(function(){
// 			jQuery(this + "-text").hide();
// 		});

// 	}
// );

// </script>
