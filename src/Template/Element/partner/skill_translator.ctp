<div class="card card-information my-3" id="translators_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Translator') ?></span>
            <span class="text-light"><?= __('information') ?></span>
        </h4>

        <form class="input-transparent">

            <!-- have previous experience -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Do you have previous experience as a translator?') ?> *
                </label>
                <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="translatorExperient" id="translatorExperientYes" value="yes">
                        <label class="form-check-label" for="translatorExperientYes"><?= __('Yes'); ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="translatorExperient" id="translatorExperientNo" value="no">
                        <label class="form-check-label" for="translatorExperientNo"><?= __('No') ?></label>
                    </div>
                </div>
            </div>
            <!-- /have previous experience -->


            <!-- how do you translate -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                            <span class="align-middle">
                                <?= __('How would you translate this on your language:');?>
                                <span class="text-warning">
                                    “You must become a hero in your world, crossing path with other counterparts from other worlds to stop a threat for all worlds”
                                </span>
                                ? *
                            </span>
                </label>
                <div class="col-8">
                    <textarea class="form-control" name="translate_example"></textarea>
                </div>
            </div>
            <!-- /how do you translate -->







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