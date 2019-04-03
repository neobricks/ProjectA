<div class="card card-information my-3" id="pro_gamers_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Pro Gamer') ?></span>
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


            <!-- pro gamer at -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('What game or games you like to play') ?>*
                </label>
                <div class="col-8">
                    <div class="row  pb-2">
                        <span class="col-12 text-warning">
                            <?= __('I am pro at these games:'); ?>
                        </span>
                        <span class="col-12">
                           <input name="pro_games"
                                  type="text"
                                  data-role="tagsinput"
                                  value=""
                                  placeholder="Black Squad, PUBG, Fortnite, CS:GO, Apex Legends, Overwatch…"
                                  class="form-control">
                        </span>
                    </div>
                    <div class="row pb-2">
                        <span class="col-12 text-warning">
                            <?= __('I am pro at these types of games:'); ?>
                        </span>
                        <span class="col-12">
                           <input name="pro_type_games"
                                  type="text"
                                  data-role="tagsinput"
                                  value=""
                                  placeholder="Shooter, RPG, MMORPG, MOBA, Anime style, JRPG, Indie, Strategy, Casual, Free to play, Pay to play, Hardcore games, Games for kids, Adventure…"
                                  class="form-control">
                        </span>
                    </div>
                </div>
            </div>
            <!-- /pro gamer at -->

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