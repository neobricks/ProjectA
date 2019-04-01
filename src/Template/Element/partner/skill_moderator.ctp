<div class="card card-information my-3" id="moderators_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Moderator') ?></span>
            <span class="text-light">information</span>
        </h4>

        <form class="input-transparent">

            <!-- username -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('How you want to be called') ?>
                </label>
                <div class="col-8">
                    <input name="username" type="text"
                           class="form-control"
                           value=""/>
                </div>
            </div>
            <!-- /username -->

            <!-- discord -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Discord') ?>
                </label>
                <div class="col-8">
                    <input name="discord" type="text"
                           class="form-control"
                           value="" placeholder="discord  ID"/>
                </div>
            </div>
            <!-- /discord -->

            <!-- have previous experience -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Do you have previous experience as a moderator?') ?> *
                </label>
                <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="moderatorExperient" id="moderatorExperientYes" value="yes">
                        <label class="form-check-label" for="moderatorExperientYes"><?= __('Yes'); ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="moderatorExperient" id="moderatorExperientNo" value="no">
                        <label class="form-check-label" for="moderatorExperientNo"><?= __('No') ?></label>
                    </div>
                </div>
            </div>
            <!-- /have previous experience -->

            <!-- games -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Would you like to partner for?') ?> *
                </label>
                <div class="col-8">
                    <?php
                    $games_dummyData = [
                        ['value' => 'black_squad', 'label' => 'Black Squad'],
                        ['value' => 'asd', 'label' => 'Game 2'],
                    ];
                    ?>

                    <?php foreach ($games_dummyData as $game): ?>
                        <div class="form-check form-check">
                            <input class="form-check-input" type="checkbox"
                                   name="game"
                                   value="<?= $game['value'] ?>"
                                   id="<?= 'game' . $game['value'] ?>"/>
                            <label class="form-check-label"
                                   for="<?= 'game' . $game['value'] ?>">
                                <?= $game['label'] ?>
                            </label>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
            <!-- /games -->

        </form>

    </div> <!-- /card-body -->
</div> <!-- /card -->