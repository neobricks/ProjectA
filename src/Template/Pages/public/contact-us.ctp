<section class="content-section">
    <div class="container">
        <div class="row gutters-y">
            <div class="col-lg-7">
                <div class="mb-6">
                    <h1 class="text-primary"><?= __('Contact Us');?></h1>
                    <!-- <p class="lead-1"><?= __('');?></p> -->
                </div>
                <form data-form="contact_form" action="#"
                      class="input-transparent" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input class="form-control form-control-lg"
                                type="text" name="name"
                                placeholder="<?= __('Your name')?>" required>
                        </div>

                        <div class="form-group col-md-6">
                            <input class="form-control form-control-lg"
                                type="email" name="email"
                                placeholder="<?= __('Your email address')?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <input name="subject" type="text" class="form-control"
                               placeholder="<?= __('Subject')?>" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control form-control-lg" rows="4"
                                placeholder="<?= __('Your message')?>" name="message" required></textarea>
                    </div>
                    <button class="btn btn-lg btn-warning" type="submit"><?= __('Send message')?></button>
                </form>
            </div>
            <div class="col-lg-5">
                <div class="p-4 border border-secondary" data-overlay="9">
                    <div class="p-relative">
                        <div class="mb-7">
                            <h5 class="lead-2 fw-500 text-warning"><?= __('Reach us'); ?></h5>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt mr-3"></i>
                                    Feringastraße 4‬
                                    85774 Unterföhring, <?= __('Germany'); ?>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="fas fa-phone mr-3"></i>
                                    (818) 555-4709
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h5 class="lead-2 fw-500 text-warning"><?= __('Looking for support?'); ?></h5>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center">
                                    <a href=""><?= __('Black Squad Support'); ?></a>
                                </li> 
                                <li class="d-flex align-items-center">
                                    <a href=""><?= __('Black Squad Steam Discussions'); ?></a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div>
                            <h5 class="lead-2 fw-500 text-warning"><?= __('Follow Us'); ?></h5>
                            <div class="social-buttons">
                                <a class="mr-3 unset social-twitter" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                <a class="mr-3 unset social-facebook"
                                   href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                <a class="mr-3 unset social-dribbble"
                                   href="#"><i class="fab fa-dribbble"></i></a>
                                <a class="mr-3 unset social-instagram" href="#"><i
                                            class="fab fa-instagram"></i></a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="map_box">
    <div class="py-13" data-map="true"
         data-lat="48.178042" data-lng="11.632208"
         data-marker-lat="35.61030245" data-marker-lng="140.11365268"
         data-marker-animation="drop" data-marker-title="Neobricks"
         data-zoom="15">

    </div>
</div>

