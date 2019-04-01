<div class="row">
    <div class="col-12">
        <div class="card card-information my-3"
             id="partner_info_wrapper">
            <div class="card-body">
                <h4 class="card-title">
                    <span class="text-light">
                        <?= __('Partner information'); ?>
                    </span>
                </h4>

                <div class="row">
                    <div class="col-12">

                        <form class="input-transparent">

                            <!-- input name -->
                            <div class="form-group row">
                                <label class="col-4 text-primary">
                            <span class="align-middle">
                                <?= __('Name') ?>
                            </span>
                                </label>
                                <div class="col-8">
                                    <input name="text" type="name"
                                           class="form-control"
                                           value=""/>
                                </div>
                            </div>
                            <!-- /input name -->

                            <!-- input surname -->
                            <div class="form-group row">
                                <label class="col-4 text-primary">
                            <span class="align-middle">
                                <?= __('Surname') ?>
                            </span>
                                </label>
                                <div class="col-8">
                                    <input name="text" type="surname"
                                           class="form-control"
                                           value=""/>
                                </div>
                            </div>
                            <!-- /input surname -->


                            <!-- input languages -->
                            <div class="form-group row">
                                <label class="col-4 text-primary">
                                    <?= __('What languages do you speak?') ?>*
                                </label>
                                <div class="col-8">

                                    <div class="row mb-1">
                                        <div class="col-3">
                                            <select class="custom-select">
                                                <option value="en">English
                                                </option>
                                                <option value="fr">Français
                                                </option>
                                                <option value="de">Deutsch
                                                </option>
                                            </select>
                                        </div>
                                        <label class="col-3 text-primary">
                                            <?= __('Proficiency') ?> *
                                        </label>
                                        <div class="col-3">
                                            <select class="custom-select">
                                                <option value="en">English
                                                </option>
                                                <option value="fr">Français
                                                </option>
                                                <option value="de">Deutsch
                                                </option>
                                            </select>
                                        </div>

                                        <div class="col-3">
                                            <button class="btn btn-success  btn-block">
                                                Add another
                                            </button>
                                        </div>
                                    </div>

                                    <!-- loop here -->
                                    <div class="row mb-1">
                                        <div class="col-3">
                                            <select class="custom-select">
                                                <option value="en">English
                                                </option>
                                                <option value="fr">Français
                                                </option>
                                                <option value="de">Deutsch
                                                </option>
                                            </select>
                                        </div>
                                        <label class="col-3 text-primary">
                                            <?= __('Proficiency') ?> *
                                        </label>
                                        <div class="col-3">
                                            <select class="custom-select">
                                                <option value="en">English
                                                </option>
                                                <option value="fr">Français
                                                </option>
                                                <option value="de">Deutsch
                                                </option>
                                            </select>
                                        </div>

                                        <div class="col-3">
                                            <button class="btn btn-danger btn-block">
                                                Remove
                                            </button>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-3">
                                            <select class="custom-select">
                                                <option value="en">English
                                                </option>
                                                <option value="fr">Français
                                                </option>
                                                <option value="de">Deutsch
                                                </option>
                                            </select>
                                        </div>
                                        <label class="col-3 text-primary">
                                            <?= __('Proficiency') ?> *
                                        </label>
                                        <div class="col-3">
                                            <select class="custom-select">
                                                <option value="en">English
                                                </option>
                                                <option value="fr">Français
                                                </option>
                                                <option value="de">Deutsch
                                                </option>
                                            </select>
                                        </div>

                                        <div class="col-3">
                                            <button class="btn btn-danger btn-block">
                                                Remove
                                            </button>
                                        </div>
                                    </div>



                                </div>

                            </div>
                            <!-- /input languages -->



                            <!-- games you like -->
                            <div class="form-group row">
                                <label class="col-4 text-primary">
                                    <?= __('What game or games you like to play') ?>*
                                </label>
                                <div class="col-8">
                                    <?php
                                    $like_play_games_dummyData = [
                                        ['value' => 'these_games', 'label' => 'I talk about these games:',
                                            'inputText' => true, 'placeholder' => 'Black Squad, PUBG, Fortnite, CS:GO, Apex Legends, Overwatch…'],
                                        ['value' => 'types_of_games', 'label' => 'I talk about these types of games:',
                                            'inputText' => true, 'placeholder' => 'Shooter, RPG, MMORPG, MOBA, Anime style, JRPG, Indie, Strategy, Casual, Free to play, Pay to play, Hardcore games, Games for kids, Adventure… ']
                                    ];
                                    ?>

                                    <?php foreach ($like_play_games_dummyData as $like_games): ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                   name="talk_about_games"
                                                   value="<?= $like_games['value'] ?>"
                                                   id="<?= 'like_play_games' . $like_games['value'] ?>"/>
                                            <label class="form-check-label w-100"
                                                   for="<?= 'like_play_games' . $like_games['value'] ?>">
                                                <?php if (!$like_games['inputText']): ?>
                                                    <?= $like_games['label'] ?>
                                                <?php else: ?>
                                                    <span class="row">
                                                            <span class="col-12">
                                                                <?= $like_games['label'] ?>
                                                            </span>
                                                            <span class="col-12">
                                                                   <input id="<?= 'like_play_games' . $like_games['value'] ?>_text"
                                                                          name="<?= 'like_play_games' . $like_games['value'] ?>_text"
                                                                          type="text"
                                                                          value=""
                                                                          placeholder="<?= $like_games['placeholder'] ?>"
                                                                          class="form-control">
                                                            </span>
                                                        </span>
                                                <?php endif; ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>


                                </div>
                            </div>
                            <!-- /games you like -->

                            <!-- platforms -->
                            <div class="form-group row">
                                <label class="col-4 text-primary">
                                    <?= __('What game platform(s) do you play?') ?>
                                    *
                                </label>
                                <div class="col-8">
                                    <?php
                                    $platforms_dummyData = [
                                        ['value' => 'all_platforms', 'label' => 'All game platforms', 'inputText' => false],
                                        ['value' => 'desktop', 'label' => 'PC/Mac games', 'inputText' => false],
                                        ['value' => 'mobile', 'label' => 'Mobile games', 'inputText' => false],
                                        ['value' => 'console', 'label' => 'Console games', 'inputText' => false],

                                        ['value' => 'others', 'label' => 'Others',
                                            'inputText' => true, 'placeholder' => '']
                                    ];
                                    ?>
                                    <?php foreach ($platforms_dummyData as $platform): ?>
                                        <div class="form-check">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   name="platform"
                                                   value="<?= $platform['value'] ?>"
                                                   id="<?= 'platform' . $platform['value'] ?>"/>
                                            <label class="form-check-label w-100"
                                                   for="<?= 'platform' . $platform['value'] ?>">
                                                <?php if (!$platform['inputText']): ?>
                                                    <?= $platform['label'] ?>
                                                <?php else: ?>
                                                    <span class="row">
                                                            <span class="col-12">
                                                                <?= $platform['label'] ?>
                                                            </span>
                                                            <span class="col-12">
                                                                   <input id="<?= 'platform' . $platform['value'] ?>_text"
                                                                          name="<?= 'platform' . $platform['value'] ?>_text"
                                                                          type="text"
                                                                          value=""
                                                                          placeholder="<?= $platform['placeholder'] ?>"
                                                                          class="form-control">
                                                            </span>
                                                        </span>
                                                <?php endif; ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <!-- /platforms -->


                            <!-- nicknames -->
                            <div class="form-group row">
                                <label class="col-4 text-primary">
                                    <?= __('Do you have an in-game nickname for any of these games?'); ?>
                                </label>
                                <div class="col-8">
                                    <div class="form-group row">
                                        <label class="col-3 text-warning">
                                            <?= __('Black Squad') ?>
                                        </label>
                                        <div class="col-9">
                                            <input type="text" class="form-control "/>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 text-warning">
                                            <?= __('Kurtzpel') ?>
                                        </label>
                                        <div class="col-9">
                                            <input type="text" class="form-control "/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /nicknames -->

                        </form>

                    </div> <!-- /col-12 -->
                </div> <!-- /row -->

            </div> <!-- /card-body -->
        </div> <!-- /card -->

    </div> <!-- /col-12 -->
</div> <!-- /row -->