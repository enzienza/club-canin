<?php
/*
Name:   section-newsletter
Description: Section de la page d'accueil dédiée à la newsletter du club
Author: Enza Lombardo
Author URI: www.enzalombardo.be
copyright : 2019 © Enza Lombardo
Version: 2.0
*/

/* ---- SECTION 5 : NEWSLETTER ---- */
?>

<section id="section-newsletter">
    <div class="container-fluid ">
        <div class="container bg-silhouette">
            <div class="row justify-content-center">
                <div class="offset-lg-1 col-lg-7 col-12">
                    <p class="text-line-1">
                        Tu souhaites <strong>recevoir</strong> par email tous
                        <strong class="strong-color">nos activités, nos événements, et autres.</strong>
                    </p>
                    <p class="text-line-2">
                        N’hésite plus et <strong class="strong-color">abonne-toi</strong> à notre newsletter.
                    </p>
                </div>
            </div><!-- /.row .justify-content-center -->

            <div class="row justify-content-center">
                <div class="offset-lg-1 col-lg-7 col-12">
                    <form id="form-newsletter" action="index.html" method="post" class="row">
                        <div class="col-md-9 col-12">
                            <input type="email" name="mail" id="mail" placeholder="Votre adresse email" class="form-mail">
                        </div>
                        <div class="col-md-3 col-12">
                            <input type="submit" value="Envoyer" class="form-bouton">
                        </div>
                    </form>
                </div>
            </div><!-- /.row .justify-content-center -->
        </div><!-- /.container .bg-silhouette -->
    </div><!-- /.container-fluid -->
</section><!-- /#section-newsletter -->
