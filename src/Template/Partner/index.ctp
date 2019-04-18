<?php
$this->assign('title', __('Partner Program'));
//$this->Html->meta('keywords', 'keywords, are, sweet', ['block' => true]);
//$this->Html->meta('description', 'Become a Partner', ['block' => true]);

$firstName = '';
$firstTime = true;
if (!empty($user['partner'])) {
    $firstName = $user['partner']['name'];
    $firstTime = false;
}

?>


<div class="bg-dark">
    <div class="container">
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
                <?= $this->element('/partner/information', [$firstTime]); ?>

                <!-- Skills -->
                <?= $this->element('/partner/skills', [$firstTime]); ?>

                <!--Content Creator -->
                <?= $this->element('partner/skill_content_creator', [$firstTime]); ?>

                <!--Moderator -->
                <?= $this->element('partner/skill_moderator', [$firstTime]); ?>

                <!-- Tester -->
                <?= $this->element('partner/skill_tester', [$firstTime]); ?>

                <!-- Pro Gamer -->
                <?= $this->element('partner/skill_pro_gamer', [$firstTime]); ?>

                <!-- Translator -->
                <?= $this->element('partner/skill_translator', [$firstTime]); ?>

                <!--Caster -->
                <?= $this->element('partner/skill_caster', [$firstTime]); ?>

                <!--Company -->
                <?= $this->element('partner/skill_company', [$firstTime]); ?>

                <!--Other -->
                <?= $this->element('partner/skill_other', [$firstTime]); ?>


            </div> <!-- /col-12 -->
        </div> <!-- /row -->
    </div> <!-- /content -->
</div> <!-- /bg -->

<div class="d-none">
    <i id="noInformedHtmlBase" class='text-light_A-50'>No informed</i>
</div>