<?php get_header(); ?>

<main class="pt-lg-5">
    <section class="pt-3 pt-lg-5">
        <div class="container">
            <div class="row g-lg-5">
                <div class="col-lg-9 order-lg-2">
                    <div id="single-article">
                    <?php if( have_posts() ) : while( have_posts() ) : the_post();
                    $url = get_the_post_thumbnail_url();
                    $alt = get_the_post_thumbnail_caption();
                    ?>
                    <h2 class="text-uppercase mb-1"><?php the_title(); ?></h2>
                        <p><small><?php the_author() ?> - <?php the_time( 'l j F Y' ) ?></small></p>
                        <p class="mb-3 mb-lg-5"><em><?php the_excerpt() ?></em></p>
                        <img src="<?= $url ?>" class="img-fluid" alt="<?= $alt ?>">
                        <p class="mb-5 mb-lg-1"><?php the_content() ?></p>
                    </div>
                    <?php endwhile; endif; ?>
                    
                </div>
                <div class="col-lg-3 order-lg-1">
                    <div class="text-star mb-3 mb-lg-4">
                        <h3 class="fw-bold mb-2">Sur le même sujet</h3>
                        <img src="<?= get_template_directory_uri() . '/assets/img/shape.svg' ?>" height="6" alt="vague bleue" class="mb-3">
                    </div>
                        <?php 
                        // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
                        $args = array(
                            'post_type' => 'post',
                            'showposts' => 3,
                            'cat' => 0,
                        );

                        // 2. On exécute la WP Query
                        $my_query = new WP_Query( $args );

                        if( have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
                        $urlthumbnail = get_the_post_thumbnail_url();
                        $altthumbnail = get_the_post_thumbnail_caption();
                        ?>
                        <div class="card rounded-0 border-0 mb-2">
                            <img src="<?= $urlthumbnail ?>" class="img-cover-card-single object-fit-cover" alt="<?= $altthumbnail ?>">
                            <div class="card-body px-0">
                                <a class="text-decoration-none fw-bold title-blue h5 stretched-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>

                    <!-- <div class="card rounded-0 border-0 mb-2">
                        <img src="/wp-content/themes/mon-theme/assets/img/img-card.jpg" class="img-cover-card-single object-fit-cover" alt="...">
                        <div class="card-body px-0">
                            <a class="text-decoration-none fw-bold title-blue h5 stretched-link" href="">Titre de l'article</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>    
</main>

<?php get_footer(); ?>