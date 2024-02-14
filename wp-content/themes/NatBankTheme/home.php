<?php

/**
 * Template name: home
 */
get_header(); ?>
<section class="section-hero">
    <div class="container">
        <div class="row">
            <aside class="col-sm-3 col-12">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Dashboard</li>
                    <li class="list-group-item">Home</li>
                    <li class="list-group-item">Contacts</li>
                    <li class="list-group-item">About</li>
                    <li class="list-group-item">Blog</li>
                </ul>
            </aside>
            <main class="col-sm-9 col-12">
                <h1>Exchange rates and foreign currencies</h1>
                <hr>
                <div class="row">
                    <div class="col-md-6 col-12 position-relative">
                    <p class=""><?php echo date("F j, Y, g:i a"); ?></p>
                    <span class="rates-text text-success">Rates Have Been Updated!</span>
                    </div>
                    <div class="col-md-6 col-12 text-center">
                    <a role="button" class=" custom-btn currency-btn ms-auto">Click to update the rates</a>
                    </div>
                   
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/us.png" class="card-img-top" alt="USD">
                                <h5 class="card-title">USD <span class="currency-text usd-text"></span> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/eu.png" class="card-img-top" alt="EUR">
                                <h5 class="card-title">EUR <span class="currency-text  eur-text"></span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kz.png" class="card-img-top" alt="KZT">
                                <h5 class="card-title">KZT <span class="currency-text  kzt-text"></span></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ru.png" class="card-img-top" alt="RUB">
                                <h5 class="card-title">RUB <span class="currency-text  rub-text"></span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>

<?php get_footer(); ?>