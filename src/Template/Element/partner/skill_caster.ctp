<div class="card card-information my-3" id="casters_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Caster') ?></span>
            <span class="text-light"><?= __('information') ?></span>
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

            <!-- channels -->
            <h6 class="text-primary"> Your main channel(s):</h6>
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Youtube') ?>
                </label>
                <div class="col-8">
                    <input name="youtube" type="text"
                           class="form-control"
                           placeholder="<?= __(' your username'); ?>"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Twitch') ?>
                </label>
                <div class="col-8">
                    <input name="twitch" type="text"
                           class="form-control"
                           placeholder="<?= __(' your username'); ?>"/>
                </div>
            </div>
            <!-- /channels -->

            <!-- social networls -->
            <h6 class="text-primary"> Your social network:</h6>
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Twitter') ?>
                </label>
                <div class="col-8">
                    <input name="twitch" type="text"
                           class="form-control"
                           placeholder="<?= __(' your username'); ?>"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Discord') ?>
                </label>
                <div class="col-8">
                    <input name="discord" type="text"
                           class="form-control"
                           placeholder="<?= __(' your username'); ?>"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Instagram') ?>
                </label>
                <div class="col-8">
                    <input name="instagram" type="text"
                           class="form-control"
                           placeholder="<?= __(' your username'); ?>"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Other') ?>
                </label>
                <div class="col-8">
                    <input name="other" type="text"
                           class="form-control"
                           placeholder="<?= __('link'); ?>"/>
                </div>
            </div>
            <!-- /social networks -->

            <!-- caster at -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('What game or games do you cast') ?>*
                </label>
                <div class="col-8">
                    <?php
                    $caster_at_dummyData = [
                        ['value' => 'these_games', 'label' => 'I cast at these games:',
                            'inputText' => true, 'placeholder' => 'Black Squad, PUBG, Fortnite, CS:GO, Apex Legends, Overwatch…'],
                        ['value' => 'types_of_games', 'label' => 'I cast these types of games:',
                            'inputText' => true, 'placeholder' => 'Shooter, RPG, MMORPG, MOBA, Anime style, JRPG, Indie, Strategy, Casual, Free to play, Pay to play, Hardcore games, Games for kids, Adventure… ']
                    ];
                    ?>

                    <?php foreach ($caster_at_dummyData as $game): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                   name="talk_about_games"
                                   value="<?= $game['value'] ?>"
                                   id="<?= 'cast_games' . $game['value'] ?>"/>
                            <label class="form-check-label w-100"
                                   for="<?= 'cast_games' . $game['value'] ?>">
                                <?php if (!$game['inputText']): ?>
                                    <?= $game['label'] ?>
                                <?php else: ?>
                                    <span class="row">
                                        <span class="col-12">
                                            <?= $game['label'] ?>
                                        </span>
                                        <span class="col-12">
                                               <input id="<?= 'like_play_games' . $game['value'] ?>_text"
                                                      name="<?= 'like_play_games' . $game['value'] ?>_text"
                                                      type="text"
                                                      value=""
                                                      placeholder="<?= $game['placeholder'] ?>"
                                                      class="form-control">
                                        </span>
                                    </span>
                                <?php endif; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
            <!-- /caster at -->

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