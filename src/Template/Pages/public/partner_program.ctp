<?php
/**
 * Dummy Data:
 */

$firstName = 'Pamella';
?>


<div class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <h5 class="py-6 text-gray"> <?= __('Partner Program'); ?> </h5>

                <h2 class="card-title">
                    <span class="text-light"><?= __('Welcome,'); ?></span>
                    <span class="text-primary"><?= $firstName; ?></span>
                </h2>

                <div class="profile-divider text-uppercase text-light mb-2">
                    <span><?= __('Your profile'); ?></span>
                </div>

                <!-- Partner information -->
                <?= $this->element('/partner/information'); ?>

                <!-- Skills -->
                <?= $this->element('/partner/skills'); ?>

                <!--Content Creator -->
                <?= $this->element('partner/skill_content_creator'); ?>

                <!--Moderator -->
                <?= $this->element('partner/skill_moderator'); ?>

                <!-- Tester -->
                <?= $this->element('partner/skill_tester'); ?>

                <!-- Pro Gamer -->
                <?= $this->element('partner/skill_pro_gamer'); ?>

                <!-- Translator -->
                <?= $this->element('partner/skill_translator'); ?>

                <!--Caster -->
                <?= $this->element('partner/skill_caster'); ?>

                <!--Company -->
                <?= $this->element('partner/skill_company'); ?>

                <!--Other -->
                <?= $this->element('partner/skill_other'); ?>


            </div> <!-- /col-12 -->
        </div> <!-- /row -->
    </div> <!-- /content -->
</div> <!-- /bg -->



<?php return;
/**************************************
 *
 *
 *
 *
 *
 *
 *
 *
 *
 */ ?>
<ul class="nav nav-tabs step-anchor">
    <li class="nav-item active">
        <a href="#becomePartnerFlow-step-1"
           class="nav-link">
            ACCOUNT
        </a>
    </li>
    <li class="nav-item ">
        <a href="#becomePartnerFlow-step-2"
           class="nav-link">
            CHOOSE YOUR SKILLS(S)
        </a>
    </li>
    <li class="nav-item ">
        <a href="#becomePartnerFlow-step-3"
           class="nav-link">
            Information
        </a>
    </li>
    <li class="nav-item ">
        <a href="#becomePartnerFlow-step-4"
           class="nav-link">
            TERMS
        </a>
    </li>
</ul>
<div class="sw-container tab-content">
    <div id="becomePartnerFlow-step-1"
         class="tab-pane step-content bg-dark py-5">
        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('Email') ?>
            </label>
            <div class="col-9">
                <input name="email" type="email"
                       class="form-control"
                       value=""/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('Password') ?>
            </label>
            <div class="col-9">
                <input name="password" type="password"
                       class="form-control"
                       value=""/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('Confirm Password') ?>
            </label>
            <div class="col-9">
                <input name="confirm_password"
                       type="password"
                       class="form-control"
                       value=""/>
            </div>
        </div>
    </div>



    <!-- become partner flow: step 3 --->
    <div id="becomePartnerFlow-step-3"
         class="tab-pane step-content bg-dark">


    </div>
    <!-- /become partner flow: step 3 --->


    <div id="becomePartnerFlow-step-4"
         class="tab-pane step-content bg-dark">
        Step Content
    </div>
</div>
</div>
<!-- /Become a partner flow -->
</div>
</div>
</div>
</div>
<!-- /Become a partner modal  -->
