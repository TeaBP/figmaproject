<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>
<div id="divSection1Wrap">
		<div id="divSection1">
			<div id="divSection1Col1" class="gridCol2">
				<?php 
					echo 'Ovo je prvi PHP - Hello world'; 
					$a = 15;
					$b = 20;
					$c = $a + $b;
					echo $c;
					$ime = 'Pavle';
					$godine = 38;
					$txt = 'Moje ime je '.$ime.' i imam '.$godine.' godina.';
					echo '<h3>'.$txt.'</h3>';
				?>
				<h2 class="titleStyle1">Dobro došli</h2>
				<h1 class="titleStyle2">We are<span> Profesional Teams </span>to Growth Your bussines</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in</p>
				<a class="buttonStyle1" href="#">More about us</a>
				<ul id="gallery-1">
					<li>
						<a data-fancybox="galerija-1" href="<?php bloginfo( 'template_url' ); ?>/images/portfolio/work-1.jpg"><img src="<?php bloginfo( 'template_url' ); ?>/images/portfolio/work-1.jpg"></a>
					</li>
					<li>
						<a data-fancybox="galerija-1" href="<?php bloginfo( 'template_url' ); ?>/images/portfolio/work-2.jpg"><img src="<?php bloginfo( 'template_url' ); ?>/images/portfolio/work-2.jpg"></a>
					</li>
					<li>
						<a data-fancybox="galerija-1" href="<?php bloginfo( 'template_url' ); ?>/images/portfolio/work-3.jpg"><img src="<?php bloginfo( 'template_url' ); ?>/images/portfolio/work-3.jpg"></a>
					</li>
					<li>
						<a data-fancybox="galerija-2" href="<?php bloginfo( 'template_url' ); ?>/images/portfolio/work-4.jpg"><img src="<?php bloginfo( 'template_url' ); ?>/images/portfolio/work-4.jpg"></a>
					</li>
					<li>
						<a data-fancybox="galerija-2" href="<?php bloginfo( 'template_url' ); ?>/images/portfolio/work-5.jpg"><img src="<?php bloginfo( 'template_url' ); ?>/images/portfolio/work-5.jpg"></a>
					</li>
				</ul>
			</div>
			
			<div id="divSection1Col2" class="gridCol2 last">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/about.jpg">
			</div>
			<div style="clear:both;"></div>
		</div>
	</div><!-- end #divSection1Wrap -->
<!-------- SECTION 2 ZADATAK --------->
	<div id="divSection2Wrap">
		<div id="divSection2">
			<h2>The Expert Team on</h2>
			<h1>ReveTive</h1>
			<?php 
				for($i=0;$i<5;$i++){
					echo '<div>Neki član tima broj '.$i.'</div>';
				}
			?>
			<?php 
				for($i=1;$i<=3;$i++){
			?>
			<div id="divSection2Col1" class="gridCol3 <?php if($i==3) echo 'last'; ?>">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/teams/team_<?php echo $i; ?>.jpg">
				<h1>Walter White <?php echo $i; ?></h1>
				<p>Chief Executive Officer</p>
			</div>
			<?php } ?>

			<h2>The Expert Team on</h2>
			<h1>Ispis 6 i više članova tima</h1>

			<?php 
				for($i=1;$i<=6;$i++){
			?>
			<div id="divSection2Col1" class="gridCol3 <?php if($i%3==0) echo 'last'; ?>">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/teams/team_<?php echo $i; ?>.jpg">
				<h1>Walter White <?php echo $i; ?></h1>
				<p>Chief Executive Officer</p>
			</div>
			<?php } ?>


		</div>
	</div>
	<div style="clear:both;"></div>
<!----SECTION 3 ---------->
	<div id="divSection3Wrap">
		<div id="divSection3">
			<h2 class="titleStyle2">Our Services</h2>
			<h1 class="titleStyle1">Lorem ipsum dolor sit amet, consectetur</h1>
			<div class="gridCol4">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/person/person_1.jpg">
				<h3>Naša usluga</h3>
			</div>
			<div class="gridCol4">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/person/person_1.jpg">
				<h3>Naša usluga</h3>
			</div>
			<div class="gridCol4">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/person/person_1.jpg">
				<h3>Naša usluga</h3>
			</div>
			<div class="gridCol4 last">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/person/person_1.jpg">
				<h3>Naša usluga</h3>
			</div>
			<div class="gridCol4">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/person/person_1.jpg">
				<h3>Naša usluga</h3>
			</div>
			<div class="gridCol4">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/person/person_1.jpg">
				<h3>Naša usluga</h3>
			</div>
			<div class="gridCol4">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/person/person_1.jpg">
				<h3>Naša usluga</h3>
			</div>
			<div class="gridCol4 last">
				<img src="<?php bloginfo( 'template_url' ); ?>/images/person/person_1.jpg">
				<h3>Naša usluga</h3>
			</div>
		</div>
	</div>
	<div style="clear:both"></div>
<?php get_footer(); ?>
