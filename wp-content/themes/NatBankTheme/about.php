<?php

/**
 * Template name: about
 */
get_header(); ?>
<section class="section-hero text-white" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="section-team">
    <div class="container text-center position-relative">
        <h2 class="team-title mb-30"><?php the_field('who_we_are_title'); ?></h2>
        <div class="row justify-content-center text-left">
            <?php
            if (have_rows('who_we_are_cards')) : $team_idx = 0;
                while (have_rows('who_we_are_cards')) : the_row();
                    $team_idx++; ?>
                    <div class="col-lg-6 team-col">
                        <div class="position-relative">
                            <h3><?php the_sub_field('title'); ?></h3>
                            <?php echo wpautop(get_sub_field('text')); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="section-team section-our-team">
    <div class="container text-center position-relative">
        <h2 class="team-title mb-30 text-white"><?php the_field('our_leadership_team_title'); ?></h2>
        <div class="row justify-content-center text-left">
            <?php
            if (have_rows('our_team')) :
                while (have_rows('our_team')) : the_row(); ?>
                    <div class="col-lg-4 col-md-6 team-card-col mb-30">
                        <div class="position-relative team-card">
                            <div class="card-front">
                                <h4 class="text-medium"><?php the_sub_field('title'); ?></h4>
                                <img src="<?php the_sub_field('image'); ?>" alt="" class="team-card-img" />
                                <h4 class="text-bold">
                                    <?php the_sub_field('name'); ?>
                                    <img src="/wp-content/themes/logivote/assets/images/info.svg" alt=""  class="team-card-info-img" >
                                </h4>
                            </div>
                            <div class="card-back">
                                <h4><?php the_sub_field('name'); ?></h4>
                                <?php echo wpautop(get_sub_field('info')); ?>
                                <h4 class="card-back-team-title"><?php the_sub_field('title'); ?></h4>
                                <img src="<?php the_sub_field('image'); ?>" alt="" class="" />
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>