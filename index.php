<?php get_header();?>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">

      <img class="navbar-image img-fluid" src="<?php echo get_template_directory_uri() . '/images/eagle-white.png'; ?>" alt="Het logo van Klusbedrijf De Arend" />
      Klusbedrijf De Arend
    </a>
    <button class="text-uppercase navbar-toggler navbar-toggler-right bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars"></i>
      Menu
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">
            <i class="fa fa-fw fa-user"></i>
            Over
          </a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">
            <i class="fa fa-fw fa-wrench"></i>
            Projecten
          </a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#reviews">
            <i class="fa fa-fw fa-comment-alt"></i>
            Reviews
          </a>
        </li>
        <li class="nav-item mx-0 mx-lg-1">
          <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">
            <i class="fa fa-fw fa-envelope-open"></i>
            Contact
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<header class="masthead bg-primary text-white text-center">
  <div class="header container">
    <h4 class="mb-0">Klusbedrijf</h4>
    <h1 class="mb-3">De Arend</h1>

    <div class="header-image mb-3">
      <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 211.18 132.28"><defs><style>.cls-1{fill:#010101;}.cls-2{fill:#020202;}.cls-3{fill:#050505;}.cls-4{fill:#030303;}</style></defs><title>logo</title><path d="M985.31,512c-9.83,5.5-17.49,11.2-26.69,18.13-3.31,2.49-6.22,5.51-9.34,8.25-0.6.53-1.4,1.2-2.18,0.58-1-.78-0.65-1.83.1-2.6a63.05,63.05,0,0,1,5.7-5.6c27-21.56,55.1-41.38,88.29-52.57,21.6-7.28,43.56-12.8,66.59-12.38,5.81,0.11,11.59.77,17,3.17,2.23,1,4.19,2.32,3.16,5.25s-3.42,2.67-5.81,2.18c-15.05-3.13-30.09-2.36-45.11.19a239.53,239.53,0,0,0-73.25,25.09c-1.74.93-3.32,1.65-5.43,2.8-1.79,1,.45-0.24-4.17,2.25-1.7,1-.93.53-3.14,1.88C987.38,510.77,988.94,509.77,985.31,512Z" transform="translate(-917.02 -451.42)"/><path class="cls-1" d="M994.33,508.12l-5.56,3.22c-1.4.73-2.91,1.73-2.78,3.44,0.49,6.09,9.59,12.6,15.15,10.28a22.62,22.62,0,0,0,12.38-12.93c1.07-2.7-.18-5.58-1.66-7.86-1.6-2.46-4.22-1.58-6.42-1a46.83,46.83,0,0,0-6.83,2.77" transform="translate(-917.02 -451.42)"/><path class="cls-2" d="M969.81,500.34a28.27,28.27,0,0,1,5.57-11.63c13.35-16.71,30.74-28,50-36.55a3.57,3.57,0,0,1,1.38-.51c1.24,0,2.92-.91,3.58.68,0.73,1.78-1.16,2.09-2.22,2.64a234.09,234.09,0,0,0-22,12.51,174.06,174.06,0,0,0-17.58,13c-6.71,5.79-12.66,12.17-15.55,20.83-0.37,1.11-.72,2.45-2.23,2.16S969.41,501.89,969.81,500.34Z" transform="translate(-917.02 -451.42)"/><path class="cls-2" d="M932.4,580.46c2-5.75,4.2-10.72,8.42-14.53a16.92,16.92,0,0,1,19-2.48c0.72,0.38,1.8.49,1.63,1.51-0.22,1.32-1.38,1.21-2.37,1-1.6-.38-3.16-1-4.78-1.25-8.38-1.13-15.42,4.49-18.86,14.94-1.58,4.78-3,5.19-7,2-8.08-6.44-13.55-23.41-10.69-33.16,2.67-9.1,13.41-15.63,21.25-12.81,0.94,0.34,2.55.5,2.5,2s-1.41,1-2.3,1c-15.23.75-22,10.39-17.37,25.26A34.47,34.47,0,0,0,932.4,580.46Z" transform="translate(-917.02 -451.42)"/><path class="cls-2" d="M976.3,520c3.1,8.62,8.23,14.07,17.67,13.56,3.7-.2,7.07-1.68,10.32-3.31,6.84-3.44,13-8,19.16-12.44,5.46-3.94,7.28-8.72,6.06-15.06-0.19-1-1.51-2.31.27-2.93,1.35-.47,2.16.86,2.63,1.81,2.09,4.26,3.13,9.36-.12,12.74-11.63,12.1-24.4,22.68-42.64,22.21-6.66-.17-13.45-6.44-14.65-12.9A3.28,3.28,0,0,1,976.3,520Z" transform="translate(-917.02 -451.42)"/><path class="cls-3" d="M1039.44,492.36c10.93-11.89,68-18,76.33-7.85C1089.31,479.35,1064.4,484.57,1039.44,492.36Z" transform="translate(-917.02 -451.42)"/><path class="cls-4" d="M1065.56,458.2c-9.91.29-18.11,4.13-26,8.78a91.34,91.34,0,0,0-14.38,10.63c-0.86.77-1.63,2.6-3.13,1.12-1.13-1.12,0-2.15.82-2.94,10.93-10.83,23.53-18.62,39-21.19a13.83,13.83,0,0,1,3,0c2,0.11,4.74.36,4.58,2.66C1069.22,460,1066.55,457.78,1065.56,458.2Z" transform="translate(-917.02 -451.42)"/><path class="cls-2" d="M929.83,548.74a5.16,5.16,0,0,1,3.62-3.6c1.8-.68,4.47-1.8,5.11.38,0.69,2.34-2.35,1.52-3.67,1.83C933.22,547.73,932,549.79,929.83,548.74Z" transform="translate(-917.02 -451.42)"/></svg>
    </div>
    <h4 class="font-weight-light mb-0">Een scherpe blik voor elke klus</h4>
  </div>
</header>

<!-- About Section -->
<section class="text-white mb-0" id="about">
    <div class="container">
        <h2 class="text-center text-secondary">Over</h2>
        <div class="black-logo-hline"></div>
        <div class="row">
            <div class="about-img-container col-lg-4 ml-auto">
                <img class="img-fluid about-img" src="images/arend.jpg" alt="Een foto van Arend van der Veekens">
            </div>
            <div class="col-lg-4 ml-auto">
                <p class="lead text-secondary">Mijn naam is Arend van der Veekens. Ik ben geboren en getogen in Zaandam.
                    <br>
                    <br> Het idee van het starten van een eigen bedrijf speelde al heel lang en ik heb nu besloten om mijn hart
                    te volgen en een eigen klusbedrijf te starten. Ik ben opgeleid tot timmerman en kan u op dit gebied alles
                    aanbieden. Echter, in de loop der jaren ben ik doorgegroeid naar een echte allrounder. Dus ook voor het
                    plaatsen van keukens, badkamers, schilderwerk, sierpleister en het leggen van houten vloeren kunt u bij
                    mij terecht.
                </p>
            </div>
            <div class="col-lg-4 ml-auto">
                <p class="lead text-secondary">Voor klussen in de tuin, zoals het plaatsen van een nieuwe schutting, een veranda of een overkapping, bent
                    u bij klusbedrijf De Arend aan het juiste adres. Ik ben een perfectionist en zorg ervoor dat u en ik
                    tevreden zullen zijn.
                    <br>
                    <br>Kortom bent u op zoek naar een professioneel en betrouwbaar klusbedrijf voor al uw klussen? Dan hoop
                    ik u als klant te mogen begroeten. U kunt mij bereiken via de e-mail, telefoon of het contactformulier
                    onderaan de pagina.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section class="bg-primary portfolio" id="portfolio">
    <div class="container">
        <h2 class="text-center text-white mb-0">Projecten</h2>
        <div class="white-logo-hline"></div>
        <div class="row">
            <?php
            $args = array( 'post_type' => 'project', 'posts_per_page' => 10 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                get_template_part('project', get_post_format());
            endwhile;    
            ?>
        </div>
    </div>
</section>

<!-- Reviews Section -->
<section class="text-secondary mb-0" id="reviews">
    <div class="container">
        <h2 class="text-center text-secondary">Reviews</h2>
        <div class="black-logo-hline"></div>

        <div id="review-slider">
            <?php
            $args = array( 'post_type' => 'review', 'posts_per_page' => 10 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                get_template_part('review', get_post_format());
            endwhile;    
            ?>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="bg-primary text-white mb-0" id="contact">
    <div class="container">
        <h2 class="text-center text-white">Contact</h2>
        <div class="white-logo-hline"></div>

        <div id="contact-row" class="row">
            <div class="col-lg-5 mb-4">
                <div class="row h-100">
                    <div class="col-sm-6 col-lg-12">
                        <h5 class="mb-4">Adres</h5>
                        <p class="lead">Klusbedrijf De Arend
                            <br>Eline Vereplantsoen 14
                            <br>1507 PN Zaandam
                            <br>
                            <br>+31 6 83915993
                            <br>info@klusbedrijfdearend.nl
                            <br>
                            <br>KvK: 70506671
                    </div>
                    <div id="map-container" class="col-sm-6 col-lg-12">
                        <div id="map" class="h-100 white-border"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 mb-4">
                <h5 class="mb-4">E-mail</h5>
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group controls mb-0">
                            <label>Naam</label>
                            <input class="form-control" id="name" type="text" required="required" data-validation-required-message="Vul uw naam in">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group controls mb-0">
                            <label>E-mailadres</label>
                            <input class="form-control" id="email" type="email" required="required" data-validation-required-message="Vul uw e-mailadres in">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group controls mb-0">
                            <label>Telefoonnummer</label>
                            <input class="form-control" id="phone" type="tel" required="required" data-validation-required-message="Vul uw telefoonnummer in">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group controls mb-0">
                            <label>Bericht</label>
                            <textarea class="form-control" id="message" rows="6" required="required" data-validation-required-message="Het bericht is leeg"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-custom btn-lg" id="sendMessageButton">Versturen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>