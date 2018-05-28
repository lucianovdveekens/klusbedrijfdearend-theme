<?php get_header();?>


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