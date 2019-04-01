<div class="card card-information my-3" id="testers_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Tester'); ?></span>
            <span class="text-light"><?= __('information') ?></span>
        </h4>

        <form class="input-transparent">

            <!-- have previous experience -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Do you have previous experience as a tester?') ?> *
                </label>
                <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="testerExperient" id="testerExperientYes" value="yes">
                        <label class="form-check-label" for="testerExperientYes"><?= __('Yes'); ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="testerExperient" id="testerExperientNo" value="no">
                        <label class="form-check-label" for="testerExperientNo"><?= __('No') ?></label>
                    </div>
                </div>
            </div>
            <!-- /have previous experience -->

            <!-- type of tester -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('What type of testing do you prefer?') ?> *
                </label>
                <div class="col-8">
                    <?php
                    $games_dummyData = [
                        ['value' => 'QA', 'label' => 'Quality Assurance (QA)'],
                        ['value' => 'gameplay_experience', 'label' => 'Gameplay Experience'],
                    ];
                    ?>

                    <?php foreach ($games_dummyData as $game): ?>
                        <div class="form-check form-check">
                            <input class="form-check-input" type="radio"
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
            <!-- /type of tester -->

            <!-- type of games -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('What game or games you have a lot of experience?') ?>
                </label>

                <?php
                $type_of_games_dummyData = [
                    "Shooter",
                    "MOBA",
                    "RPG",
                    "MMORPG",
                    "Mobile",
                    "Adventure",
                    "Indie",
                    "Strategy",
                    "Adventure",
                    "Action",
                    "Simulators",
                    "Puzzle",
                    "Browser",
                    "Others"
                ]
                ?>
                <div class="col-8">
                    <?php foreach ($type_of_games_dummyData as $type): ?>
                    <div class="form-group row">
                        <label class="col-3 text-warning">
                            <?= __($type) ?>
                        </label>
                        <div class="col-9">
                            <input type="text" class="form-control "/>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <!-- /type of games -->

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