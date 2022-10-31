<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theam-sweeft
 */
$box_content = get_field('box_content', 'option');
$box_content_two = get_field('box_content_two', 'option');
$bottom_footer = get_field('bottom_footer', 'option');
 


$show_footer = get_field("show_footer");
$disable_footer_box = get_field('disable_footer_box');

$padding_zero	=	get_field("padding_zero");

?>


<footer class="start-footer" id="<?= $padding_zero ?>">
    <div class="container">

	<!-- Start Boxs  -->
	<?php if(isset($show_footer) && in_array('show', $show_footer)):  ?>
	
		<div id="<?= $disable_footer_box ?>" class="row row-cols-1 row-cols-md-12 row-cols-md-1 g-3">

			<?php if(isset($box_content_two) && $box_content_two) : ?>
				<?php foreach($box_content_two as $content_two) : ?>
					<div class="col footer_box_card">
						<a class="card-link" href="<?= $content_two['Url']['url']; ?>">
							<div class="card footer-card box-card p-4">
								<div class="card-body footer-card-body px-0">
									<div class="footer-contact-help"> 
										<h5 class="card-title my-4"><?= $content_two['text']; ?></h5>
										<button class="btn-career"><?= $content_two['url']['title']; ?></button>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

		</div>
 
	<?php else : ?>

	<!-- start footer two box  -->
		<div id="<?= $disable_footer_box ?>" class="row row-cols-1 row-cols-md-12 row-cols-md-2 g-3">

			<?php if(isset($box_content) && $box_content) : ?>
				<?php foreach($box_content as $content) : ?>
					<div class="col footer_box_card">
						<a class="card-link" href="<?= $content['read_more']['url']; ?>">
							<div class="card footer-card box-card p-4">
								<img src="<?= $content['icon']['url'] ?>" class="card-img-top" alt="...">
								<div class="card-body footer-card-body px-0">
									<h5 class="card-title my-4"><?= $content['title']; ?></h5>
									<div class="footer-contact-carers"> 
										<p class="card-text mb-0"><?= $content['description']; ?></p>
										<button class="btn-career"><?= $content['read_more']['title']; ?></button>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

		</div>
	<!-- End footer two box  -->
	<?php endif; ?>
 
	<!-- End Boxs  -->


	<!-- start botton footer  -->
	<?php if(isset($bottom_footer) && $bottom_footer):  ?>
		<div class="footer-bootom"> 
			<div class="row row-cols-1 row-cols-md-3 row-cols-md-3 g-3 d-flex justify-content-between align-items-center ">
				<?php foreach($bottom_footer as $footer):  ?>

					<div class="col booton-footer text-start">
	
						<span class="agency">
							<?= $footer['content_link']; ?>
						</span>
					</div>

					<div class="col">
						<div class="logo-booton-footer text-center p-4">
							<?= $footer['logo']; ?> 
						</div>
					</div>

					<div class="col">
						<div class="text-end soc-media">
							<?= $footer['social_networks']; ?>
						</div>
					</div>
					
				<?php endforeach ?>
			</div>
		</div>

	<?php endif; ?>
	</div>
</footer>


 
</div> 
 
<?php wp_footer(); ?>
 
</body>
</html>
