<div class="card" id="contentcreators_wrapper">
    <div class="card-body">
        <h5 class="card-title">
            <span class="text-primary">Content Creator</span>
            <span class="text-light">information</span>
        </h5>

        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('How you want to be called') ?>
            </label>
            <div class="col-9">
                <input name="username" type="text"
                       class="form-control"
                       value=""/>
            </div>
        </div>

        <h6 class="text-primary"> Your main channel(s):</h6>
        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('Youtube') ?>
            </label>
            <div class="col-9">
                <input name="youtube" type="text"
                       class="form-control"
                       placeholder="<?= __(' your username'); ?>"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('Twitch') ?>
            </label>
            <div class="col-9">
                <input name="twitch" type="text"
                       class="form-control"
                       placeholder="<?= __(' your username'); ?>"/>
            </div>
        </div>

        <h6 class="text-primary"> Your social network:</h6>
        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('Twitter') ?>
            </label>
            <div class="col-9">
                <input name="twitch" type="text"
                       class="form-control"
                       placeholder="<?= __(' your username'); ?>"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('Discord') ?>
            </label>
            <div class="col-9">
                <input name="discord" type="text"
                       class="form-control"
                       placeholder="<?= __(' your username'); ?>"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('Instagram') ?>
            </label>
            <div class="col-9">
                <input name="instagram" type="text"
                       class="form-control"
                       placeholder="<?= __(' your username'); ?>"/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('Other') ?>
            </label>
            <div class="col-9">
                <input name="other" type="text"
                       class="form-control"
                       placeholder="<?= __('link'); ?>"/>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-12 text-primary">
                <?= __('What type of content do you create?*') ?>
            </label>
            <div class="col-12">
                <?php
                $type_of_content_dummyData = [
                    ['value' => 'streams', 'label' => 'Streams'],
                    ['value' => 'gameplay', 'label' => 'Gameplay'],
                    ['value' => 'reviews', 'label' => 'Reviews'],
                    ['value' => 'humor', 'label' => 'Humor'],
                    ['value' => 'unboxing', 'label' => 'Unboxing'],
                    ['value' => 'mods', 'label' => 'Mods'],
                    ['value' => 'fanfics', 'label' => 'Fanfics'],
                    ['value' => 'guides_articles', 'label' => 'Guides/Articles'],
                    ['value' => 'events_coverage', 'label' => 'Events coverage'],
                    ['value' => 'lifestyle', 'label' => 'Lifestyle'],
                    ['value' => 'tutorials', 'label' => 'Tutorials'],
                ];
                ?>

                <?php foreach ($type_of_content_dummyData as $type_of_content): ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"
                               name="type_of_content"
                               value="<?= $type_of_content['value'] ?>"
                               id="<?= 'type_of_content_' . $type_of_content['value'] ?>"/>
                        <label class="form-check-label"
                               for="<?= 'type_of_content_' . $type_of_content['value'] ?>">
                            <?= $type_of_content['label'] ?>
                        </label>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 text-primary">
                <?= __('What is your channel about?') ?>*
            </label>
            <div class="col-12">
                <?php
                $channel_about_dummyData = [
                    ['value' => 'games', 'label' => 'Games'],
                    ['value' => 'technology', 'label' => 'Technology'],
                    ['value' => 'nerd_geek', 'label' => 'Nerd/Geek'],
                    ['value' => 'other', 'label' => 'Others']
                ];
                ?>

                <?php foreach ($channel_about_dummyData as $channel_about): ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"
                               name="channel_about"
                               value="<?= $channel_about['value'] ?>"
                               id="<?= 'channel_about' . $channel_about['value'] ?>"/>
                        <label class="form-check-label"
                               for="<?= 'channel_about' . $channel_about['value'] ?>">
                            <?= $channel_about['label'] ?>
                        </label>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 text-primary">
                <?= __('What game or games you talk about?') ?>*
            </label>
            <div class="col-12">
                <?php
                $talk_about_games_dummyData = [
                    ['value' => '', 'label' => 'I talk about all kind of games', 'inputText' => false],
                    ['value' => 'these_games', 'label' => 'I talk about these games:',
                        'inputText' => true, 'placeholder' => 'Black Squad, PUBG, Fortnite, CS:GO, Apex Legends, Overwatch…'],
                    ['value' => 'types_of_games', 'label' => 'I talk about these types of games:',
                        'inputText' => true, 'placeholder' => 'Shooter, RPG, MMORPG, MOBA, Anime style, JRPG, Indie, Strategy, Casual, Free to play, Pay to play, Hardcore games, Games for kids, Adventure… ']
                ];
                ?>

                <?php foreach ($talk_about_games_dummyData as $talk_about_games): ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"
                               name="talk_about_games"
                               value="<?= $talk_about_games['value'] ?>"
                               id="<?= 'talk_about_games' . $talk_about_games['value'] ?>"/>
                        <label class="form-check-label w-100"
                               for="<?= 'talk_about_games' . $talk_about_games['value'] ?>">
                            <?php if (!$talk_about_games['inputText']): ?>
                                <?= $talk_about_games['label'] ?>
                            <?php else: ?>
                                <span class="row">
                                                        <span class="col-12">
                                                            <?= $talk_about_games['label'] ?>
                                                        </span>
                                                        <span class="col-12">
                                                               <input id="<?= 'talk_about_games' . $talk_about_games['value'] ?>_text"
                                                                      name="<?= 'talk_about_games' . $talk_about_games['value'] ?>_text"
                                                                      type="text"
                                                                      value=""
                                                                      placeholder="<?= $talk_about_games['placeholder'] ?>"
                                                                      class="form-control">
                                                        </span>
                                                    </span>
                            <?php endif; ?>
                        </label>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>


        <div class="form-group row">
            <label class="col-12 text-primary">
                <?= __('What game platforms do you create content for?') ?>*
            </label>
            <div class="col-12">
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
                        <input class="form-check-input" type="checkbox"
                               name="platform"
                               value="<?= $platform['value'] ?>"
                               id="<?= 'platform' . $platform['value'] ?>"/>
                        <label class="form-check-label w-100"
                               for="<?= 'platform' . $platform['value'] ?>">
                            <?php if (!$platform['inputText']): ?>
                                <?= $platform['label'] ?>
                            <?php else: ?>
                                <span class="row">
                                                        <span class="col-3">
                                                            <?= $platform['label'] ?>
                                                        </span>
                                                        <span class="col-9">
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

        <div class="form-group row">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <label class="col-12 text-primary">
                        <?= __('What languages do you speak?') ?>*
                    </label>
                    <select class="custom-select" multiple>
                        <option value="en">English</option>
                        <option value="fr">Français</option>
                        <option value="de">Deutsch</option>
                    </select>
                </div>

                <div class="col-12 col-lg-6">
                    <label class="col-12 text-primary">
                        <?= __('Proficiency') ?>*
                    </label>
                    <select class="custom-select">
                        <option value="en">English</option>
                        <option value="fr">Français</option>
                        <option value="de">Deutsch</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('Country of residence:') ?>*
            </label>
            <div class="col-9">
                <select class="custom-select">
                    <option value="en">English</option>
                    <option value="fr">Français</option>
                    <option value="de">Deutsch</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('Want to tell us more about what you do?') ?>*
            </label>
            <div class="col-9">
                <textarea class="form-control " rows="4"></textarea>
            </div>
        </div>

        <h6 class="text-primary">Do you have an in-game nickname for any of
            these
            games?</h6>
        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('Black Squad') ?>
            </label>
            <div class="col-9">
                <input type="text" class="form-control "/>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-3 text-primary">
                <?= __('Kurtzpel') ?>
            </label>
            <div class="col-9">
                <input type="text" class="form-control "/>
            </div>
        </div>
    </div>
</div>