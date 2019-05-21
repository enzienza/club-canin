<!-- ===== DEBUT SECTION-CONTACT ===== -->
        <section id="section-contact" class="bg-fonce">
            <div class="container-fluid map">
                <iframe src="<?php echo get_option('info_googlemap'); ?>"  frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="container">
                <div class="row info">
                    <div class="col-lg-6 col-md-6 col-12 footer-left">
                        <h1>Nous contacté</h1>
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
                        </table>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 footer-right">
                        <h1>Nous sommes ouvert</h1>
                        <table class="table-horaire">
                            <tbody>
                                <tr>
                                    <th>Mercredi</th>
                                    <td>17:30 - 21:00</td>
                                </tr>
                                <tr>
                                    <th>Dimanche</th>
                                    <td>09:00 - 12:30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- =====  FIN SECTION-CONTACT ===== -->
