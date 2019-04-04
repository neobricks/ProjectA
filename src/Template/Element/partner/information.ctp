<?php
$showForm = false;
// if it is the first time, showForm
?>

<div class="row">
    <div class="col-12">
        <div class="card card-information active my-3"
             id="partner_info_wrapper">
            <div class="card-body">
                <h4 class="card-title">
                    <span class="text-light">
                        <?= __('Partner information'); ?>
                    </span>
                    <span class="float-right">
                        <button type="button"
                                class="btn btn-sm text-dark btn-primary btn-update">
                            <?= __('Update'); ?>
                        </button>
                    </span>
                </h4>

                <div class="row">
                    <div class="col-12">

                        <?php echo $this->Form->create(null, [
                            'id' => 'formPartnerInformation',
                            'url' => ['controller' => 'partner', 'action' => 'information'],
                            'class' => 'input-transparent',
                            'type' => 'post'
                        ]); ?>

                        <!-- input name -->
                        <div class="form-group row">
                            <label class="col-4 text-primary">
                                    <span class="align-middle">
                                      <?= __('Name') ?>
                                    </span>
                            </label>
                            <div class="col-8">
                                <div class="view py-2 px-3">
                                    <p>
                                        <?php
                                        if (!empty($user['name'])):
                                            echo $user['name'];
                                        endif;
                                        ?>
                                    </p>
                                </div>
                                <div class="edit-text">
                                    <?php echo $this->Form->text('name', [
                                        'class' => 'form-control',
                                    ]); ?>
                                </div>
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
                                <div class="view py-2 px-3">
                                    <p>
                                        <?php
                                        if (!empty($user['surname'])):
                                            echo $user['surname'];
                                        endif;
                                        ?>
                                    </p>
                                </div>
                                <div class="edit-text">
                                    <?php echo $this->Form->text('surname', [
                                        'class' => 'form-control',
                                    ]); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /input surname -->


                        <!-- input languages -->
                        <div class="form-group row">
                            <label class="col-4 text-primary">
                                <?= __('What languages do you speak?') ?>*
                            </label>
                            <div class="col-8">

                                <div class="row mb-1 language-input">
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
                                        <select class="custom-select"
                                                readonly="">
                                            <option value="native"> Native
                                            </option>
                                        </select>
                                    </div>

                                    <div class="col-3">
                                        <button class="btn btn-success btn-block btn-add-language">
                                            Add another
                                        </button>
                                    </div>
                                </div>

                                <div class="language-base d-none">
                                    <div class="row mb-1 language-input">
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
                                                <option value="basic">Basic
                                                </option>
                                                <option value="fluent">Fluent
                                                </option>
                                            </select>
                                        </div>

                                        <div class="col-3">
                                            <button type="button"
                                                    class="btn btn-danger btn-block btn-remove-language">
                                                Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <span class="languages-loop">

                                    </span>


                            </div>

                        </div>
                        <!-- /input languages -->


                        <!-- games you like -->
                        <div class="form-group row">
                            <label class="col-4 text-primary">
                                <?= __('What game or games you like to play') ?>
                                *
                            </label>
                            <div class="col-8">
                                <div class="row  pb-2">
                                        <span class="col-12 text-warning">
                                            <?= __('I like to play these games:'); ?>
                                        </span>
                                    <span class="col-12">
                                               <input name="like_games"
                                                      type="text"
                                                      data-role="tagsinput"
                                                      value=""
                                                      placeholder="Black Squad, PUBG, Fortnite, CS:GO, Apex Legends, Overwatch…"
                                                      class="form-control">
                                        </span>
                                </div>
                                <div class="row pb-2">
                                        <span class="col-12 text-warning">
                                            <?= __('I like to play these types of games:'); ?>
                                        </span>
                                    <span class="col-12">
                                               <input name="like_type_games"
                                                      type="text"
                                                      data-role="tagsinput"
                                                      value=""
                                                      placeholder="Shooter, RPG, MMORPG, MOBA, Anime style, JRPG, Indie, Strategy, Casual, Free to play, Pay to play, Hardcore games, Games for kids, Adventure…"
                                                      class="form-control">
                                        </span>
                                </div>
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
                                        <div class="view py-2 px-3">
                                            <p>
                                                <?php
                                                if (!empty($user['in_game_nickname']['black_squad'])):
                                                    echo $user['in_game_nickname']['black_squad'];
                                                endif;
                                                ?>
                                            </p>
                                        </div>
                                        <div class="edit-text">
                                            <?php echo $this->Form->text('in_game_nickname', [
                                                'class' => 'form-control',
                                            ]); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /nicknames -->

                        <!-- submit -->
                        <div class="form-group row mt-6 mb-0 submit-wrapper">
                            <div class="col-6"></div>
                            <div class="col-6">
                                <?php echo $this->Form->submit(__('Submit'), [
                                    'class' => 'btn btn-block btn-warning',
                                ]); ?>

                            </div>
                        </div>
                        <!-- /submit -->

                        <?= $this->Form->end(); ?>

                    </div> <!-- /col-12 -->
                </div> <!-- /row -->

            </div> <!-- /card-body -->
        </div> <!-- /card -->

    </div> <!-- /col-12 -->
</div> <!-- /row -->