<?php get_header(); ?>

<main class="pt-lg-5">
    <section class="pt-3 pt-lg-5">
        <div class="container">
            <div class="text-center mb-3 mb-lg-5">
                <h2 class="fw-bold mb-2 fs-1"><?php wp_title(''); ?></h2>
                <img src="<?= get_template_directory_uri() . '/assets/img/shape.svg' ?>" height="6" alt="vague bleue" class="mb-3">
                <p class="text-secondary"><?php the_archive_description(); ?></p>
            </div>
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                        $url = get_the_post_thumbnail_url();
                        $altthumbnail = get_the_post_thumbnail_caption();
                        ?>

                        <div class="col-lg-4">
                            <div class="card rounded-0 border-0 mb-4 mb-lg-5 mx-xl-5">
                                <img src="<?= $url ?>" class="img-cover-card object-fit-cover" alt="<?= $altthumbnail ?>">
                                <div class="card-body px-0 pt-4">
                                    <h5><a class="text-decoration-none fw-bold title-blue stretched-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    <p class="card-text text-secondary"><?php the_excerpt() ?></p>
                                </div>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>

            <!-- <div class="row">
                <div class="col-lg-4">
                    <div class="card rounded-0 border-0 mb-4 mb-lg-5 mx-xl-5">
                        <img src="/wp-content/themes/mon-theme/assets/img/img-card.jpg" class="img-cover-card object-fit-cover" alt="...">
                        <div class="card-body px-0 pt-4">
                            <h5><a class="text-decoration-none fw-bold title-blue stretched-link" href="">Titre de l'article</a></h5>
                            <p class="card-text text-secondary">Description de l'article sur plusieurs lignes.</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
</main>

<?php get_footer(); ?>