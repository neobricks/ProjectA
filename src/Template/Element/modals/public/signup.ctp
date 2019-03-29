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
                </form>

            </div>
        </div>
    </div>
</div>