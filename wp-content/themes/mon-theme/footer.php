<footer>
    <!-- img footer -->
    <section class="banner-footer">
        <!-- <div class="container">
            <img src="/wp-content/themes/mon-theme/assets/img/footer.png" class="img-fluid" alt="">
        </div> -->
    </section>
    <!-- card footer -->
    <section class="py-3 py-lg-5 bg-gray">
        <div class="container">
            <div class="text-center text-white mb-3 mb-lg-5">
                <h5 class="text-uppercase">Découvrez</h5>
                <h2 class="fw-bold">Articles les plus populaires</h2>
                <img src="/wp-content/themes/mon-theme/assets/img/shape.svg" height="6" alt="">
            </div>
            <div class="row">
                <?php 
                // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
                $args = array(
                    'post_type' => 'post',
                    'showposts' => 3,
                );

                // 2. On exécute la WP Query
                $my_query = new WP_Query( $args );

                if( have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
                $urlthumbnail = get_the_post_thumbnail_url();
                $altthumbnail = get_the_post_thumbnail_caption();
                $category = get_the_category ();
                ?>
                <div class="col-lg-4">
                    <div class="card rounded-0 border-0 mb-3 mx-xl-5">
                        <img src="<?= $urlthumbnail ?>" class="img-cover-card object-fit-cover" alt="<?= $altthumbnail ?>">
                        <div class="card-img-overlay px-0 text-end">
                            <h5><span class="badge text-bg-warning rounded-0 px-3 text-decoration-none"><?= $category[0]->cat_name ?></span></h5>
                        </div>
                        <div class="card-body p-lg-5">
                            <h5><a class="text-decoration-none fw-bold title-blue stretched-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p class="card-text"><?php the_excerpt() ?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>

                <!-- <div class="col-lg-4">
                    <div class="card rounded-0 border-0 mb-3 mx-xl-5">
                        <img src="/wp-content/themes/mon-theme/assets/img/img-card.jpg" class="img-cover-card object-fit-cover" alt="...">
                        <div class="card-img-overlay px-0 text-end">
                            <h5><span class="badge text-bg-warning rounded-0 px-3">Catégorie</span></h5>
                        </div>
                        <div class="card-body p-lg-5">
                            <h5><a class="text-decoration-none fw-bold title-blue stretched-link" href="">Titre de l'article</a></h5>
                            <p class="card-text">Description de l'article sur plusieurs lignes.</p>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </section>
    <!-- nav footer -->
    <section class="py-3 py-lg-5 bg-gray text-light">
        <div class="container">
            <div class="row gx-xl-5">
                <div class="col-6 col-lg-4 mb-3 text-center">
                    <h5 class="fw-bold">Accès rapide</h5>
                    <ul class="nav flex-column" data-bs-theme="dark">
                        <li class="nav-item mb-2"><a href="<?php echo home_url( '/' ); ?>" class="nav-link p-0 text-body-secondary">Accueil</a></li>
                        <?php
                        $menuitems = wp_get_nav_menu_items( 'Menu' );
                        
                        foreach ( $menuitems as $item ) { ?>
                        <li class="nav-item mb-2">
                            <a class="nav-link p-0 text-body-secondary" href="<?= $item->url ?>"><?= $item->title ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="col-6 col-lg-4 mb-3 text-center">
                    <h5 class="fw-bold">Contactez-nous</h5>
                    <ul class="nav flex-column" data-bs-theme="dark">
                        <li class="nav-item mb-2 p-0 text-body-secondary">70 rue des jacobins</li>
                        <li class="nav-item mb-2 p-0 text-body-secondary">80000 Amiens</li>
                        <li class="nav-item mb-2 p-0 text-body-secondary">contactus@lamanu.fr</li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-3">
                    <form>
                        <h6>Inscrivez-vous à notre newsletter</h6>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control rounded-0" placeholder="Entrez votre email" aria-label="Entrez votre email" aria-describedby="newsletter1">
                                <button class="btn gradient-btn border-0" type="button" id="newsletter1"><i class="bi bi-envelope-fill text-white fs-4"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

</body>

</html>