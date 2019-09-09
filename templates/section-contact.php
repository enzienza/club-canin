<!-- ===== DEBUT SECTION-CONTACT ===== -->
<section id="section-contact" class="bg-fonce">
    <div class="container-fluid map">
        <iframe src="<?php echo get_option('info_googlemap'); ?>"  frameborder="0" style="border:0" allowfullscreen></iframe>
    </div><!-- /.container-fluid map -->

    <div class="container">
        <div class="row info">
            <div class="col-lg-6 col-md-6 col-12 footer-left">
                <h1><?php echo get_option('location_titre'); ?></h1>
                <table class="table-location">
                    <tbody>
                        <tr>
                            <th class="th-icon"><span class="icons icon-location-pin"></span></th>
                            <td><?php echo get_option('info_adresse'); ?></td>
                        </tr>
                        <tr>
                            <th class="th-icon"><span class="icons icon-phone"></span></th>
                            <td><?php echo get_option('info_phone'); ?></td>
                        </tr>
                        <tr>
                            <th class="th-icon"><span class="icons icon-envelope"></span></th>
                            <td><?php echo get_option('info_mail'); ?></td>
                        </tr>
                    </tbody>
                </table><!-- /.table-location -->
            </div><!-- /.footer-left -->

            <div class="col-lg-6 col-md-6 col-12 footer-right">
                <h1><?php echo get_option('horaire_titre'); ?></h1>
                <table class="table-horaire">
                    <tbody>

                        <!-- lundi -->
                        <?php if(checked(1, get_option('lundi_open'), false)) { ?>
                            <tr>
                                <th>Lundi</th>
                                <td>
                                    <span><?php echo get_option('lundi_de') ?></span>
                                    -
                                    <span><?php echo get_option('lundi_a') ?></span>
                                </td>
                            </tr>
                        <?php } ?>

                        <!-- mardi -->
                        <?php if(checked(1, get_option('mardi_open'), false)) { ?>
                            <tr>
                                <th>Mardi</th>
                                <td>
                                    <span><?php echo get_option('mardi_de') ?></span>
                                    -
                                    <span><?php echo get_option('mardi_a') ?></span>
                                </td>
                            </tr>
                        <?php } ?>

                        <!-- mercredi -->
                        <?php if(checked(1, get_option('mercredi_open'), false)) { ?>
                            <tr>
                                <th>Mercredi</th>
                                <td>
                                    <span><?php echo get_option('mercredi_de') ?></span>
                                    -
                                    <span><?php echo get_option('mercredi_a') ?></span>
                                </td>
                            </tr>
                        <?php } ?>

                        <!-- jeudi -->
                        <?php if(checked(1, get_option('jeudi_open'), false)) { ?>
                            <tr>
                                <th>Jeudi</th>
                                <td>
                                    <span><?php echo get_option('jeudi_de') ?></span>
                                    -
                                    <span><?php echo get_option('jeudi_a') ?></span>
                                </td>
                            </tr>
                        <?php } ?>

                        <!-- vendredi -->
                        <?php if(checked(1, get_option('vendredi_open'), false)) { ?>
                            <tr>
                                <th>Vendredi</th>
                                <td>
                                    <span><?php echo get_option('vendredi_de') ?></span>
                                    -
                                    <span><?php echo get_option('vendredi_a') ?></span>
                                </td>
                            </tr>
                        <?php } ?>

                        <!-- samedi -->
                        <?php if(checked(1, get_option('samedi_open'), false)) { ?>
                            <tr>
                                <th>Samedi</th>
                                <td>
                                    <span><?php echo get_option('samedi_de') ?></span>
                                    -
                                    <span><?php echo get_option('samedi_a') ?></span>
                                </td>
                            </tr>
                        <?php } ?>

                        <!-- dimanche -->
                        <?php if(checked(1, get_option('dimanche_open'), false)) { ?>
                            <tr>
                                <th>Dimanche</th>
                                <td>
                                    <span><?php echo get_option('dimanche_de') ?></span>
                                    -
                                    <span><?php echo get_option('dimanche_a') ?></span>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table><!-- /.table-horaire -->
            </div><!-- /.footer-right -->
        </div><!-- /.row .info -->
    </div><!-- /.container -->
</section><!-- /#section-contact .bg-fonce -->
<!-- =====  FIN SECTION-CONTACT ===== -->
