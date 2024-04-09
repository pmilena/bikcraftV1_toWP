<?php
//Template Name: Portfolio
get_header();
 ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

		<section class="container animar-interno">
			<ul class="rslides">
			<?php if(have_rows('quote_portfolio')): while(have_rows('quote_portfolio')) : the_row(); ?>
				<li>
					<blockquote class="quote_clientes">
						<p><?php the_sub_field('quote') ?></p>
						<cite><?php the_sub_field('nome_quote') ?></cite>
					</blockquote>
				</li>
				<?php endwhile; else : endif; ?>
			</ul>
		</section>

		<section class="portfolio">
			<div class="container">
			<?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
			</div>
		</section>
		
		<div class="quebra">
			<blockquote class="quote-externo container">
				<p>“o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana.”</p>
				<cite>WILLIAM MORRIS</cite>
			</blockquote>
		</div>

		<?php endwhile; else: endif; ?>

		<?php get_footer(); ?>