<div class="card card-information my-3" id="others_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Other') ?></span>
            <span class="text-light"><?= __('information') ?></span>
        </h4>

        <form class="input-transparent">
            <!-- special skill -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('What is your special skill or experience?') ?>
                </label>
                <div class="col-8">
                    <input name="special_skill" type="text"
                           class="form-control"/>
                </div>
            </div>
            <!-- /special skill -->

            <!-- What kind of opportunities -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                            <span class="align-middle">
                                <?= __('What kind of opportunities are you looking for?');?> *
                            </span>
                </label>
                <div class="col-8">
                    <textarea class="form-control" name="kind_of_opportunities"></textarea>
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