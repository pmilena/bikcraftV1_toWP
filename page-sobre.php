<?php
//Template Name: Sobre
get_header();
 ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

		<section class="missao_sobre container animar-interno">
			<div class="grid-10">
				<h2 class="subtitulo-interno">História, Missão e Visão</h2>
				<p><?php the_field('missao'); ?></p>
			</div>
			<div class="grid-6">
				<h2 class="subtitulo-interno">Valores</h2>
				<p><?php the_field('valores'); ?></p>
			</div>

			<div class="grid-16 foto-equipe">
				<img src="<?php the_field('imagem_equipe');?>" alt="Equipe Bikcraft">
			</div>

		</section>

		<?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>

		<div class="quebra">
			<blockquote class="quote-externo container">
				<p>“o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana.”</p>
				<cite>WILLIAM MORRIS</cite>
			</blockquote>
		</div>

		<?php endwhile; else: endif; ?>

		<?php get_footer(); ?>