<?php
$this->assign('title', __('Partner Program'));
//$this->Html->meta('keywords', 'keywords, are, sweet', ['block' => true]);
//$this->Html->meta('description', 'Become a Partner', ['block' => true]);

$firstName = '';
$firstTime = true;


if (!empty($userInfo['partner'])) {
    $firstName = !empty($userInfo['partner']['name']) ? $userInfo['partner']['name'] : '';
    $firstTime = false;
}

?>


<div class="bg-dark">
    <div id="PartnerProgramContainer" class="container <?= $firstTime ? 'firstTime' : 'preFilled' ?>">
        <div class="row">
            <div class="col-12">

                <h5 class="py-6 text-gray"> <?= __('Partner Program'); ?> </h5>

                <h2 class="card-title">
                    <span class="text-light"><?= __('Welcome') ?><?= empty($firstName) ? "!" : ',' ?></span>
                    <span class="text-primary"><?= $firstName; ?></span>
                </h2>

                <div class="profile-divider text-uppercase text-light mb-2">
                    <span><?= __('Your profile'); ?></span>
                </div>

                <!-- Partner information -->
                <?= $this->element('/partner/information', [$firstTime, $userInfo]); ?>

                <!-- Skills -->
                <?= $this->element('/partner/skills', [$firstTime, $userInfo]); ?>

                <!--Content Creator -->
                <?= $this->element('partner/skill_content_creator', [$firstTime, $userInfo]); ?>

                <!--Moderator -->
                <?= $this->element('partner/skill_moderator', [$firstTime, $userInfo]); ?>

                <!-- Tester -->
                <?= $this->element('partner/skill_tester', [$firstTime, $userInfo]); ?>

                <!-- Pro Gamer -->
                <?= $this->element('partner/skill_pro_gamer', [$firstTime, $userInfo]); ?>

                <!-- Translator -->
                <?= $this->element('partner/skill_translator', [$firstTime, $userInfo]); ?>

                <!--Caster -->
                <?= $this->element('partner/skill_caster', [$firstTime, $userInfo]); ?>

                <!--Company -->
                <?= $this->element('partner/skill_company', [$firstTime, $userInfo]); ?>

                <!--Other -->
                <?= $this->element('partner/skill_other', [$firstTime, $userInfo]); ?>


            </div> <!-- /col-12 -->
        </div> <!-- /row -->
    </div> <!-- /content -->
</div> <!-- /bg -->

<div class="d-none">
    <i id="noInformedHtmlBase" class='text-light_A-50'>No informed</i>
</div>