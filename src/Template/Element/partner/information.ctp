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
                        <span class="text-primary fs-3 fw-400 text-required-field">
                            * <?= __('Required field'); ?>
                        </span>
                        <button type="button"
                                class="btn btn-sm text-dark btn-primary btn-update">
                            <?= __('Update'); ?>
                        </button>
                    </span>
                </h4>

                <div class="row">
                    <div class="col-12">

                        <?php 
                        echo $this->Form->create(null, [
                            'id' => 'formPartnerInformation',
                            'url' => ['controller' => 'partner', 'action' => 'information'],
                            'class' => 'input-transparent',
                            'type' => 'post',
                        ]); ?>

                        <!-- input name -->
                        <div class="form-group row">
                            <label class="col-12 col-sm-4 text-primary">
                                    <span class="align-middle">
                                      <?= __('Name') ?>
                                    </span>
                            </label>
                            <div class="col-12 col-sm-8">
                                <div class="view py-2 px-3">
                                    <p>
                                        
                                    </p>
                                </div>
                                <div class="edit-text flex-column">
                                    <?php echo $this->Form->text('partner[name]', [
                                        'class' => 'form-control',
                                        'value' => !empty($userInfo['partner']['name']) ? $userInfo['partner']['name'] : '',
                                    ]); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /input name -->

                        <!-- input surname -->
                        <div class="form-group row">
                            <label class="col-12 col-sm-4 text-primary">
                            <span class="align-middle">
                                <?= __('Surname') ?>
                            </span>
                            </label>
                            <div class="col-12 col-sm-8">
                                <div class="view py-2 px-3">
                                    <p>
                                        <?php
                                        if (!empty($user['surname'])):
                                            echo $user['surname'];
                                        endif;
                                        ?>
                                    </p>
                                </div>
                                <div class="edit-text flex-column">
                                    <?php echo $this->Form->text('partner[surname]', [
                                        'class' => 'form-control',
                                        'value' => !empty($userInfo['partner']['surname']) ? $userInfo['partner']['surname'] : '',
                                    ]); ?>
                                </div>
                            </div>
                        </div>
                        <!-- /input surname -->

                        <?php
                        $language_codes = [
                           'en' => 'English' , 'aa' => 'Afar' , 'ab' => 'Abkhazian' , 'af' => 'Afrikaans' , 'am' => 'Amharic' , 'ar' => 'Arabic' , 'as' => 'Assamese' , 'ay' => 'Aymara' , 'az' => 'Azerbaijani' , 'ba' => 'Bashkir' , 'be' => 'Byelorussian' , 'bg' => 'Bulgarian' , 'bh' => 'Bihari' , 'bi' => 'Bislama' , 'bn' => 'Bengali/Bangla' , 'bo' => 'Tibetan' , 'br' => 'Breton' , 'ca' => 'Catalan' , 'co' => 'Corsican' , 'cs' => 'Czech' , 'cy' => 'Welsh' , 'da' => 'Danish' , 'de' => 'German' , 'dz' => 'Bhutani' , 'el' => 'Greek' , 'eo' => 'Esperanto' , 'es' => 'Spanish' , 'et' => 'Estonian' , 'eu' => 'Basque' , 'fa' => 'Persian' , 'fi' => 'Finnish' , 'fj' => 'Fiji' , 'fo' => 'Faeroese' , 'fr' => 'French' , 'fy' => 'Frisian' , 'ga' => 'Irish' , 'gd' => 'Scots/Gaelic' , 'gl' => 'Galician' , 'gn' => 'Guarani' , 'gu' => 'Gujarati' , 'ha' => 'Hausa' , 'hi' => 'Hindi' , 'hr' => 'Croatian' , 'hu' => 'Hungarian' , 'hy' => 'Armenian' , 'ia' => 'Interlingua' , 'ie' => 'Interlingue' , 'ik' => 'Inupiak' , 'in' => 'Indonesian' , 'is' => 'Icelandic' , 'it' => 'Italian' , 'iw' => 'Hebrew' , 'ja' => 'Japanese' , 'ji' => 'Yiddish' , 'jw' => 'Javanese' , 'ka' => 'Georgian' , 'kk' => 'Kazakh' , 'kl' => 'Greenlandic' , 'km' => 'Cambodian' , 'kn' => 'Kannada' , 'ko' => 'Korean' , 'ks' => 'Kashmiri' , 'ku' => 'Kurdish' , 'ky' => 'Kirghiz' , 'la' => 'Latin' , 'ln' => 'Lingala' , 'lo' => 'Laothian' , 'lt' => 'Lithuanian' , 'lv' => 'Latvian/Lettish' , 'mg' => 'Malagasy' , 'mi' => 'Maori' , 'mk' => 'Macedonian' , 'ml' => 'Malayalam' , 'mn' => 'Mongolian' , 'mo' => 'Moldavian' , 'mr' => 'Marathi' , 'ms' => 'Malay' , 'mt' => 'Maltese' , 'my' => 'Burmese' , 'na' => 'Nauru' , 'ne' => 'Nepali' , 'nl' => 'Dutch' , 'no' => 'Norwegian' , 'oc' => 'Occitan' , 'om' => '(Afan)/Oromoor/Oriya' , 'pa' => 'Punjabi' , 'pl' => 'Polish' , 'ps' => 'Pashto/Pushto' , 'pt' => 'Portuguese' , 'qu' => 'Quechua' , 'rm' => 'Rhaeto-Romance' , 'rn' => 'Kirundi' , 'ro' => 'Romanian' , 'ru' => 'Russian' , 'rw' => 'Kinyarwanda' , 'sa' => 'Sanskrit' , 'sd' => 'Sindhi' , 'sg' => 'Sangro' , 'sh' => 'Serbo-Croatian' , 'si' => 'Singhalese' , 'sk' => 'Slovak' , 'sl' => 'Slovenian' , 'sm' => 'Samoan' , 'sn' => 'Shona' , 'so' => 'Somali' , 'sq' => 'Albanian' , 'sr' => 'Serbian' , 'ss' => 'Siswati' , 'st' => 'Sesotho' , 'su' => 'Sundanese' , 'sv' => 'Swedish' , 'sw' => 'Swahili' , 'ta' => 'Tamil' , 'te' => 'Tegulu' , 'tg' => 'Tajik' , 'th' => 'Thai' , 'ti' => 'Tigrinya' , 'tk' => 'Turkmen' , 'tl' => 'Tagalog' , 'tn' => 'Setswana' , 'to' => 'Tonga' , 'tr' => 'Turkish' , 'ts' => 'Tsonga' , 'tt' => 'Tatar' , 'tw' => 'Twi' , 'uk' => 'Ukrainian' , 'ur' => 'Urdu' , 'uz' => 'Uzbek' , 'vi' => 'Vietnamese' , 'vo' => 'Volapuk' , 'wo' => 'Wolof' , 'xh' => 'Xhosa' , 'yo' => 'Yoruba' , 'zh' => 'Chinese' , 'zu' => 'Zulu'];

                        $language_profiencies = [
                            'native' => __('Native'),
                            'basic' => __('Basic'),
                            'intermediate' => __('Intermediate'),
                            'advanced' => __('Advanced'),
                            'fluent' => __('Fluent'),
                        ]
                        ?>
                        <!-- input languages -->
                        <div class="form-group row">
                            <label class="col-12 col-md-4 text-primary">
                                <?= __('What languages do you speak?') ?>*
                            </label>
                            <div class="col-12 col-md-8">
                                <div class="view py-2 px-3">

                                </div>
                                <div class="edit-language-input w-100">
                                    <div class="row mb-1 language-input">
                                        <input type="hidden" />
                                        <div class="col-12 col-md-3  py-1">
                                            <select class="custom-select language-code" id="language-primary-native">
                                                <?php foreach($language_codes as $lang_code_key => $lang_code_value): ?>
                                                    <option value="<?= $lang_code_key ?>"><?= __($lang_code_value); ?></option>
                                                <?php endforeach; ?>
                                            </select>                                            
                                        </div>
                                        <label class="col-12 col-md-3  py-1 text-primary">
                                            <?= __('Proficiency') ?> *
                                        </label>
                                        <div class="col-6 col-md-3  py-1">
                                            <select class="custom-select language-prof"
                                                    readonly="">
                                                <option value="native"> <?= __('Native') ?>
                                                </option>
                                            </select>
                                        </div>

                                        <div class="col-6 col-md-3 py-1">
                                            <button class="btn btn-link btn-add-language text-light pt-3">
                                                <?= __('Add another') ?>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="language-base d-none">
                                        <div class="row mb-1 language-input">
                                            
                                            <input type="hidden" />
                                            <div class="col-12 col-md-3 py-1">
                                            <hr class="border-light my-3 my-md-1">
                                                <select class="custom-select language-code">
                                                    <?php foreach($language_codes as $lang_code_key => $lang_code_value): ?>
                                                        <option value="<?= $lang_code_key ?>"><?= __($lang_code_value); ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                
                                            </div>
                                            <label class="col-6 col-md-3 py-1 text-primary">
                                                <?= __('Proficiency') ?> *
                                            </label>
                                            <div class="col-6 col-md-3 py-1col-12 col-md-3 py-1">
                                                <select class="custom-select language-prof">
                                                    <?php foreach($language_profiencies as $lang_prof_key => $lang_prof_value): ?>
                                                        <option value="<?= $lang_prof_key ?>">
                                                            <?= __($lang_prof_value); ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <div class="col-12 col-md-3 py-1">
                                                <button type="button"
                                                        class="btn btn-link text-danger  btn-remove-language pt-3">
                                                    <?= __('Remove') ?>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="languages-loop"></span>

                                </div> <!-- /edit-language-input -->

                                <?php 
                                    $languages_data = [];
                                    $languages_data = !empty($userInfo['partner']['languages']) ? $userInfo['partner']['languages'] : [] ;
                                    $languages_data = json_encode($languages_data, true);
                                ?>
                                <span id="languages-data" data-languages='<?= $languages_data  ?>' ></span>

                            </div>
                        </div>
                        <!-- /input languages --> 

                        <!-- games you like -->
                        <div class="form-group row">
                            <label class="col-12 col-sm-4 text-primary">
                                <?= __('What game or games do you like to play?') ?> *
                            </label>
                            <div class="col-12 col-sm-8">
                                <div class="row  pb-2">
                                        <span class="col-12 text-warning">
                                            <?= __('I like to play these games'); ?>:
                                        </span>
                                    <span class="col-12">
                                        <div class="view py-2 px-3">

                                        </div>
                                        <div class="edit-tag-input flex-column">
                                           <input name="partner[like_games]"
                                                  type="text"
                                                  data-role="tagsinput"
                                                  value="<?=!empty($userInfo['partner']['like_games']) ? $userInfo['partner']['like_games'] : '';?>"
                                                  placeholder="Black Squad, PUBG, Fortnite, CS:GO, Apex Legends, Overwatch, etc"
                                                  class="form-control">
                                        </div>
                                    </span>
                                </div>
                                <div class="row pb-2">
                                        <span class="col-12 text-warning">
                                            <?= __('I like to play these types of games'); ?>:
                                        </span>
                                    <span class="col-12">
                                        <div class="view py-2 px-3">

                                        </div>
                                        <div class="edit-tag-input flex-column">
                                            <input name="partner[like_type_games]"
                                                  type="text"
                                                  data-role="tagsinput"
                                                  value="<?=!empty($userInfo['partner']['like_type_games']) ? $userInfo['partner']['like_type_games'] : '';?>"
                                                  placeholder="Shooter, RPG, MMORPG, MOBA, Anime style, JRPG, Indie, Strategy, Casual, Free to play, Pay to play, Hardcore games, Games for kids, Adventure, etc"
                                                  class="form-control">
                                        </div>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <!-- /games you like -->

                        <!-- platforms -->
                        <div class="form-group row">
                            <label class="col-12 col-sm-4 text-primary">
                                <?= __('What game platform(s) do you play?') ?> *
                            </label>
                            <div class="col-12 col-sm-8">
                                <?php
                                $platforms_dummyData = [
                                    ['value' => 'all_platforms', 'label' => __('All game platforms'), 'inputText' => false],
                                    ['value' => 'desktop', 'label' => __('PC/Mac games'), 'inputText' => false],
                                    ['value' => 'mobile', 'label' => __('Mobile games'), 'inputText' => false],
                                    ['value' => 'console', 'label' => __('Console games'), 'inputText' => false],
                                    ['value' => 'others', 'label' => __('Others'),
                                        'inputText' => true, 'placeholder' => '']
                                ];
                                ?>
                                <?php foreach ($platforms_dummyData as $platform): ?>
                                    <div class="view">
                                        <span class="checkbox-value" data-value="<?= $platform['value'] ?>">
                                            <?= $platform['label'] ?>
                                        </span>
                                    </div>
                                    <div class="edit-checkbox ">
                                        <?php
                                            $checked = 0;
                                            $platform_text = "";
                                            if(!empty($userInfo['partner']['platforms'])) {
                                                foreach($userInfo['partner']['platforms'] as $p) {
                                                    if(!empty($p[$platform['value']])) {
                                                        
                                                        $checked = $p[$platform['value']];
                                                    }
                                                    if ($platform['inputText']) {
                                                        if (!empty($p[$platform['value'].'_text'])){
                                                            $platform_text = $p[$platform['value'].'_text'];
                                                        }
                                                    }
                                                }
                                            }
                                        ?>
                                        <div class="custom-control custom-checkbox form-check">
                                            <input type='hidden' name="partner[platforms][][<?= $platform['value'] ?>]" value="<?= $checked; ?>" />
                                            <input class="form-check-input custom-control-input checkbox-platform" 
                                                   type="checkbox"
                                                   name="partner[platforms][]"
                                                   id="<?= 'platform' . $platform['value'] ?>"
                                                   <?= $checked ? "checked" : ""  ?>
                                                   data-value="<?=  $platform['value']?>"
                                                   />
                                            <label class="form-check-label w-100 custom-control-label"
                                                   for="<?= 'platform' . $platform['value'] ?>">
                                                
                                                <?php if (!$platform['inputText']): ?>
                                                    <?= $platform['label'] ?>
                                                <?php else: ?>
                                                    <span class="row">
                                                        <span class="col-12">
                                                            <?= $platform['label'] ?>
                                                        </span>
                                                        <span class="col-12">
                                                               <input id="<?= 'platform_' . $platform['value'] ?>_text"
                                                                      name="partner[platforms][][<?= $platform['value'] ?>_text]"
                                                                      type="text"
                                                                      value="<?= $platform_text; ?>"
                                                                      placeholder="<?= $platform['placeholder'] ?>"
                                                                      class="form-control <?= $checked ? '' : 'd-none' ?>">
                                                        </span>
                                                    </span>
                                                <?php endif; ?>
                                            </label>
                                        </div>

                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <!-- /platforms -->


                        <!-- nicknames -->
                        <div class="form-group row">
                            <label class="col-12 col-sm-4 text-primary">
                                <?= __('Do you have an in-game nickname for any of these games?'); ?>
                            </label>
                            <div class="col-12 col-sm-8">
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 text-warning">
                                        <?= __('Black Squad') ?>
                                    </label>
                                    <div class="col-12 col-sm-9">
                                        <div class="view py-2 px-3">
                                            <p>
                                               
                                            </p>
                                        </div>
                                        <?php 
                                            $nickname_blacksquad = '';
                                            if(!empty($userInfo['partner']['nicknames'][0]['black_squad'])) {
                                                $nickname_blacksquad = $userInfo['partner']['nicknames'][0]['black_squad'];
                                            }
                                        ?>
                                        <div class="edit-text">
                                            <?php echo $this->Form->text('partner[nicknames][][black_squad]', [
                                                'class' => 'form-control',
                                                'value' =>  $nickname_blacksquad
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
                            <div class="col-6 text-right">
                                <?php echo $this->Form->submit(__('Submit'), [
                                    'class' => 'btn btn-lg btn-primary text-dark',
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