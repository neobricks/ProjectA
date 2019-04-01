<div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog"
     aria-labelledby="modalSignUp" aria-hidden="true">
    <div class="modal-dialog modal-dm modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header border-secondary">
                <h5 class="modal-title text-warning">
                    <?= __('Sign Up') ?>
                </h5>
                <button type="button" class="close text-light"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="input-transparent">

                    <!-- input email -->
                    <div class="form-group row">
                        <label class="col-4 text-primary">
                            <span class="align-middle">
                                <?= __('Email') ?>
                            </span>
                        </label>
                        <div class="col-8">
                            <input name="email" type="email"
                                   class="form-control"
                                   value=""/>
                        </div>
                    </div>
                    <!-- /input email -->

                    <!-- input password -->
                    <div class="form-group row">
                        <label class="col-4 text-primary">
                            <span class="align-middle">
                                <?= __('Password') ?>
                            </span>
                        </label>
                        <div class="col-8">
                            <input name="password" type="password"
                                   class="form-control"
                                   value=""/>
                        </div>
                    </div>
                    <!-- /input password -->

                    <!-- input confirm password -->
                    <div class="form-group row">
                        <label class="col-4 text-primary">
                            <span class="align-middle">
                                <?= __('Confirm Password') ?>
                            </span>
                        </label>
                        <div class="col-8">
                            <input name="confirm_password"
                                   type="password"
                                   class="form-control"
                                   value=""/>
                        </div>
                    </div>
                    <!-- /input confirm password -->

                    <!-- checkboxes terms -->
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="signupCheckboxTerms">
                                <label class="form-check-label" for="signupCheckboxTerms">
                                    <?= __('I’ve read and accepted the Terms & Conditions and Privacy Policy'); ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="signupCheckboxNews">
                                <label class="form-check-label" for="signupCheckboxNews">
                                    <?= __('NeoBricks can send me newsletters with offers and news from games not related to the Partner Program'); ?>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /checkboxes terms


                    <!-- submit button -->
                    <div class="form-group row mt-6 mb-0">
                        <div class="col-4"></div>
                        <div class="col-8">
                            <button class="btn btn-block btn-warning"
                                    type="submit">
                                <?= __('Register') ?>
                            </button>
                            <p class="small text-center py-2 mb-0">
                                <?= __('Already have an account?') ?>
                                <a class="bold" href="javascript:void(0)"
                                   data-dismiss="modal"
                                   data-toggle="modal"
                                   data-target="#modalSignIn">
                                    <?= __('Sign In'); ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- /submit button -->

                </form>

            </div> <!-- modal-body -->

        </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
</div> <!-- /modal -->


<div class="form-check">
    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
    <label class="form-check-label" for="defaultCheck1">
        Default checkbox
    </label>
</div>