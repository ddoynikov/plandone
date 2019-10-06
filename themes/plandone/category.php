<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package plandone
 */

get_header('2');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

<h1 class="page__title">Блог Plan Done!</h1>
        <p class="page__descriptor">
            Здесь вы найдете полезные материалы для практики в маркетинге, интересные статьи, новости и планы на будущее
        </p>
    </header>
    <section class="blog-page container">
        <!-- Primary Start-->
        <div id="primary" class="blog-page__articles blog-page__post">
            <a href="<?php the_permalink(); ?>" class="post__link">
                
            <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
                <article class="post">
                    <h4 class="post__title"><?php the_title(); ?>    </h4>
                    <p class="post-meta">
                        <time class="date" datetime="06-08-2019T11:24"><?php the_time('d.m.Y') ?></time>
                        /
                        <span class="categories">
                            <?php the_category($separator = ' / ', ''); ?>
                        </span>
                    </p>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_thumbnail') ?></a>
                        <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>

                </article>
                </a>
            <?php    }  ?> <!-- конец while -->
                <!-- Pagination -->
                <?php the_posts_pagination(array(
			'end_size' => 3,
			'mid_size' => 3,
			'prev_next' => true,
			'prev_text'    => __('‹'),
			'next_text'    => __('›'),
		) ); ?>
        </div>
            <?php }  ?> <!-- //конец if -->
            
            
   <?php get_sidebar(); ?>
</section>


		
<?php

get_footer();
