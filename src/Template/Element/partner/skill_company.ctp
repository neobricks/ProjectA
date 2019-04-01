<div class="card card-information my-3" id="companies_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Company'); ?></span>
            <span class="text-light"><?= __('information') ?></span>
        </h4>

        <form class="input-transparent">

            <!-- company name -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Name of your company:') ?>
                </label>
                <div class="col-8">
                    <input name="username" type="text"
                           class="form-control"
                           value=""/>
                </div>
            </div>
            <!-- /company name -->

            <!-- what company do/sale -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('What your company do or sale?') ?>
                </label>
                <div class="col-8">
                    <input name="username" type="text"
                           class="form-control"
                           value=""/>
                </div>
            </div>
            <!-- /what company do/sale -->

            <!-- preferred business contact -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Preferred business contact') ?>
                </label>
                <div class="col-8">

                    <div class="form-group row">
                        <label class="col-3 text-warning">
                            Email
                        </label>
                        <div class="col-9">
                            <input type="text" class="form-control "/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 text-warning">
                            Phone
                        </label>
                        <div class="col-9">
                            <input type="text" class="form-control "/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 text-warning">
                            Skype
                        </label>
                        <div class="col-9">
                            <input type="text" class="form-control "/>
                        </div>
                    </div>


                </div>
            </div>
            <!-- preferred business contact -->

            <!-- what company do/sale -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('What kind of opportunities are you looking for?') ?>
                </label>
                <div class="col-8">
                    <textarea name="kind_of_opportunities"
                              class="form-control"></textarea>
                </div>
            </div>
            <!-- /what company do/sale -->

            <!-- country list -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Country(ies) available for partnership:') ?>*
                </label>
                <div class="col-8">
                    <select class="custom-select">
                        <option value="">asddsa
                        </option>
                        <option value="">dsad
                        </option>
                        <option value="">dsadsa
                        </option>
                    </select>

                </div>
            </div>
            <!-- /country list -->

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