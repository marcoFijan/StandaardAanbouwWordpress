<?php

/**
 * Template Name: Homepage
 * 
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main" role="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!-- <article class="post" id="post-<?php the_ID(); ?>"> -->
  <?php $image = get_field('hoofdAchtergrondAfbeelding')?>
  <article class="homeArticle" style ="background-image:url('<?php echo $image['url']; ?> ');">
    <section>
        <h1 class="headTitle"><?php the_field('hoofdtitel')?></h1>
        <h2 class="subHeadTitle"><?php the_field('hoofd_subtitel')?></h2>
        <ul class="homeButtons">
            <li><a href="<?php echo home_url("/zzp-service/"); ?>">ZZP'er aanbouwer</a></li>
            <li><a class ="CTAButton" href="<?php echo home_url("/zelf-aanbouwen-service/"); ?>">Zelf aanbouwen</a></li>
            <li><a href="<?php echo home_url("/service-aannemer/"); ?>">Aannemer</a></li>
        </ul>
    </section>
  </article>
  <?php endwhile; endif; ?>
  <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

  <?php comments_template(); ?>

  <h1 class="header">TEEEEEEEEEEEEEEEEST</h1> 

</div> 


<?php get_footer(); ?>
