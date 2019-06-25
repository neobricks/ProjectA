<div class="card card-information my-3  d-none" id="companies_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Company'); ?></span>
            <span class="text-light"><?= __('information') ?></span>
            <span class="float-right">
                <span class="text-primary fs-3 fw-400 text-required-field">
                    * <?= __('Required field') ?>
                </span>
                <button type="button"
                        class="btn btn-sm text-dark btn-primary btn-update">
                    <?= __('Update'); ?>
                </button>
            </span>
        </h4>

        <?php echo $this->Form->create(null, [
                        'id' => 'formPartnerCompany',
                        'url' => ['controller' => 'partner', 'action' => 'information'],
                        'class' => 'input-transparent',
                        'type' => 'post'
                    ]); ?>

            <!-- company name -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Name of your company') ?> *
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('company[name]', [
                            'class' => 'form-control',
                            'value' => !empty($userInfo['company']['name']) ? $userInfo['company']['name'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /company name -->

            <!-- what company do/sale -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What does your company do or sell?') ?> *
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('company[sales]', [
                            'class' => 'form-control',
                            'value' => !empty($userInfo['company']['sales']) ? $userInfo['company']['sales'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>

            <!-- /what company do/sale -->

            <!-- preferred business contact -->
            <?php
                # XGH
                $email = "";
                $phone = "";
                $skype = "";
                if(!empty($userInfo['company']['contact'])) {
                    foreach($userInfo['company']['contact'] as $c) {
                        if(!empty($c['email'])) {
                            $email = $c['email'];
                        } else if(!empty($c['phone'])) {
                            $phone = $c['phone'];
                        } else if(!empty($c['skype'])) {
                            $skype = $c['skype'];
                        } 
                    }
                }
            ?>

            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Preferred business contact') ?> * 
                </label>
                <div class="col-12 col-sm-8">

                    <div class="form-group row">
                        <label class="col-12 col-sm-3 text-warning">
                            <?= __('Email') ?>
                        </label>
                        <div class="col-12 col-sm-9">
                            <div class="view py-2 px-3">
                                <p>
                                
                                </p>
                            </div>
                            <div class="edit-text">
                                <?php echo $this->Form->text('company[contact][][email]', [
                                    'class' => 'form-control company_contact',
                                    'value' => $email
                                ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 text-warning">
                            <?= __('Phone') ?>
                        </label>
                        <div class="col-12 col-sm-9">
                            <div class="view py-2 px-3">
                                <p>
                                
                                </p>
                            </div>
                            <div class="edit-text">
                                <?php echo $this->Form->text('company[contact][][phone]', [
                                    'class' => 'form-control company_contact',
                                    'value' => $phone
                                ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 text-warning">
                            <?= __('Skype') ?>
                        </label>
                        <div class="col-12 col-sm-9">
                            <div class="view py-2 px-3">
                                <p>
                                
                                </p>
                            </div>
                            <div class="edit-text">
                                <?php echo $this->Form->text('company[contact][][skype]', [
                                    'class' => 'form-control company_contact',
                                    'value' => $skype
                                ]); ?>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- preferred business contact -->

            <!-- what company do/sale -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What kind of opportunities are you looking for?') ?>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                        
                        </p>
                    </div>
                    <div class="edit-textarea">
                        <textarea name="company[kind_of_opportunities]" class="form-control"><?php if(!empty($userInfo['company']['kind_of_opportunities'])) {
                                echo $userInfo['company']['kind_of_opportunities'];
                            } ?></textarea>
                    </div>                    
                </div>
            </div>
            <!-- /what company do/sale -->
                            
            <!-- country list -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Country(ies) available for partnership') ?> *
                </label>
                <div class="col-12 col-sm-8" id="company_countries_select_wrapper">

                    <?php 
                        $countries = [
                            'AF' => 'Afghanistan',
                            'AX' => 'Aland Islands',
                            'AL' => 'Albania',
                            'DZ' => 'Algeria',
                            'AS' => 'American Samoa',
                            'AD' => 'Andorra',
                            'AO' => 'Angola',
                            'AI' => 'Anguilla',
                            'AQ' => 'Antarctica',
                            'AG' => 'Antigua And Barbuda',
                            'AR' => 'Argentina',
                            'AM' => 'Armenia',
                            'AW' => 'Aruba',
                            'AU' => 'Australia',
                            'AT' => 'Austria',
                            'AZ' => 'Azerbaijan',
                            'BS' => 'Bahamas',
                            'BH' => 'Bahrain',
                            'BD' => 'Bangladesh',
                            'BB' => 'Barbados',
                            'BY' => 'Belarus',
                            'BE' => 'Belgium',
                            'BZ' => 'Belize',
                            'BJ' => 'Benin',
                            'BM' => 'Bermuda',
                            'BT' => 'Bhutan',
                            'BO' => 'Bolivia',
                            'BA' => 'Bosnia And Herzegovina',
                            'BW' => 'Botswana',
                            'BV' => 'Bouvet Island',
                            'BR' => 'Brazil',
                            'IO' => 'British Indian Ocean Territory',
                            'BN' => 'Brunei Darussalam',
                            'BG' => 'Bulgaria',
                            'BF' => 'Burkina Faso',
                            'BI' => 'Burundi',
                            'KH' => 'Cambodia',
                            'CM' => 'Cameroon',
                            'CA' => 'Canada',
                            'CV' => 'Cape Verde',
                            'KY' => 'Cayman Islands',
                            'CF' => 'Central African Republic',
                            'TD' => 'Chad',
                            'CL' => 'Chile',
                            'CN' => 'China',
                            'CX' => 'Christmas Island',
                            'CC' => 'Cocos (Keeling) Islands',
                            'CO' => 'Colombia',
                            'KM' => 'Comoros',
                            'CG' => 'Congo',
                            'CD' => 'Congo, Democratic Republic',
                            'CK' => 'Cook Islands',
                            'CR' => 'Costa Rica',
                            'CI' => 'Cote D\'Ivoire',
                            'HR' => 'Croatia',
                            'CU' => 'Cuba',
                            'CY' => 'Cyprus',
                            'CZ' => 'Czech Republic',
                            'DK' => 'Denmark',
                            'DJ' => 'Djibouti',
                            'DM' => 'Dominica',
                            'DO' => 'Dominican Republic',
                            'EC' => 'Ecuador',
                            'EG' => 'Egypt',
                            'SV' => 'El Salvador',
                            'GQ' => 'Equatorial Guinea',
                            'ER' => 'Eritrea',
                            'EE' => 'Estonia',
                            'ET' => 'Ethiopia',
                            'FK' => 'Falkland Islands (Malvinas)',
                            'FO' => 'Faroe Islands',
                            'FJ' => 'Fiji',
                            'FI' => 'Finland',
                            'FR' => 'France',
                            'GF' => 'French Guiana',
                            'PF' => 'French Polynesia',
                            'TF' => 'French Southern Territories',
                            'GA' => 'Gabon',
                            'GM' => 'Gambia',
                            'GE' => 'Georgia',
                            'DE' => 'Germany',
                            'GH' => 'Ghana',
                            'GI' => 'Gibraltar',
                            'GR' => 'Greece',
                            'GL' => 'Greenland',
                            'GD' => 'Grenada',
                            'GP' => 'Guadeloupe',
                            'GU' => 'Guam',
                            'GT' => 'Guatemala',
                            'GG' => 'Guernsey',
                            'GN' => 'Guinea',
                            'GW' => 'Guinea-Bissau',
                            'GY' => 'Guyana',
                            'HT' => 'Haiti',
                            'HM' => 'Heard Island & Mcdonald Islands',
                            'VA' => 'Holy See (Vatican City State)',
                            'HN' => 'Honduras',
                            'HK' => 'Hong Kong',
                            'HU' => 'Hungary',
                            'IS' => 'Iceland',
                            'IN' => 'India',
                            'ID' => 'Indonesia',
                            'IR' => 'Iran, Islamic Republic Of',
                            'IQ' => 'Iraq',
                            'IE' => 'Ireland',
                            'IM' => 'Isle Of Man',
                            'IL' => 'Israel',
                            'IT' => 'Italy',
                            'JM' => 'Jamaica',
                            'JP' => 'Japan',
                            'JE' => 'Jersey',
                            'JO' => 'Jordan',
                            'KZ' => 'Kazakhstan',
                            'KE' => 'Kenya',
                            'KI' => 'Kiribati',
                            'KR' => 'Korea',
                            'KW' => 'Kuwait',
                            'KG' => 'Kyrgyzstan',
                            'LA' => 'Lao People\'s Democratic Republic',
                            'LV' => 'Latvia',
                            'LB' => 'Lebanon',
                            'LS' => 'Lesotho',
                            'LR' => 'Liberia',
                            'LY' => 'Libyan Arab Jamahiriya',
                            'LI' => 'Liechtenstein',
                            'LT' => 'Lithuania',
                            'LU' => 'Luxembourg',
                            'MO' => 'Macao',
                            'MK' => 'Macedonia',
                            'MG' => 'Madagascar',
                            'MW' => 'Malawi',
                            'MY' => 'Malaysia',
                            'MV' => 'Maldives',
                            'ML' => 'Mali',
                            'MT' => 'Malta',
                            'MH' => 'Marshall Islands',
                            'MQ' => 'Martinique',
                            'MR' => 'Mauritania',
                            'MU' => 'Mauritius',
                            'YT' => 'Mayotte',
                            'MX' => 'Mexico',
                            'FM' => 'Micronesia, Federated States Of',
                            'MD' => 'Moldova',
                            'MC' => 'Monaco',
                            'MN' => 'Mongolia',
                            'ME' => 'Montenegro',
                            'MS' => 'Montserrat',
                            'MA' => 'Morocco',
                            'MZ' => 'Mozambique',
                            'MM' => 'Myanmar',
                            'NA' => 'Namibia',
                            'NR' => 'Nauru',
                            'NP' => 'Nepal',
                            'NL' => 'Netherlands',
                            'AN' => 'Netherlands Antilles',
                            'NC' => 'New Caledonia',
                            'NZ' => 'New Zealand',
                            'NI' => 'Nicaragua',
                            'NE' => 'Niger',
                            'NG' => 'Nigeria',
                            'NU' => 'Niue',
                            'NF' => 'Norfolk Island',
                            'MP' => 'Northern Mariana Islands',
                            'NO' => 'Norway',
                            'OM' => 'Oman',
                            'PK' => 'Pakistan',
                            'PW' => 'Palau',
                            'PS' => 'Palestinian Territory, Occupied',
                            'PA' => 'Panama',
                            'PG' => 'Papua New Guinea',
                            'PY' => 'Paraguay',
                            'PE' => 'Peru',
                            'PH' => 'Philippines',
                            'PN' => 'Pitcairn',
                            'PL' => 'Poland',
                            'PT' => 'Portugal',
                            'PR' => 'Puerto Rico',
                            'QA' => 'Qatar',
                            'RE' => 'Reunion',
                            'RO' => 'Romania',
                            'RU' => 'Russian Federation',
                            'RW' => 'Rwanda',
                            'BL' => 'Saint Barthelemy',
                            'SH' => 'Saint Helena',
                            'KN' => 'Saint Kitts And Nevis',
                            'LC' => 'Saint Lucia',
                            'MF' => 'Saint Martin',
                            'PM' => 'Saint Pierre And Miquelon',
                            'VC' => 'Saint Vincent And Grenadines',
                            'WS' => 'Samoa',
                            'SM' => 'San Marino',
                            'ST' => 'Sao Tome And Principe',
                            'SA' => 'Saudi Arabia',
                            'SN' => 'Senegal',
                            'RS' => 'Serbia',
                            'SC' => 'Seychelles',
                            'SL' => 'Sierra Leone',
                            'SG' => 'Singapore',
                            'SK' => 'Slovakia',
                            'SI' => 'Slovenia',
                            'SB' => 'Solomon Islands',
                            'SO' => 'Somalia',
                            'ZA' => 'South Africa',
                            'GS' => 'South Georgia And Sandwich Isl.',
                            'ES' => 'Spain',
                            'LK' => 'Sri Lanka',
                            'SD' => 'Sudan',
                            'SR' => 'Suriname',
                            'SJ' => 'Svalbard And Jan Mayen',
                            'SZ' => 'Swaziland',
                            'SE' => 'Sweden',
                            'CH' => 'Switzerland',
                            'SY' => 'Syrian Arab Republic',
                            'TW' => 'Taiwan',
                            'TJ' => 'Tajikistan',
                            'TZ' => 'Tanzania',
                            'TH' => 'Thailand',
                            'TL' => 'Timor-Leste',
                            'TG' => 'Togo',
                            'TK' => 'Tokelau',
                            'TO' => 'Tonga',
                            'TT' => 'Trinidad And Tobago',
                            'TN' => 'Tunisia',
                            'TR' => 'Turkey',
                            'TM' => 'Turkmenistan',
                            'TC' => 'Turks And Caicos Islands',
                            'TV' => 'Tuvalu',
                            'UG' => 'Uganda',
                            'UA' => 'Ukraine',
                            'AE' => 'United Arab Emirates',
                            'GB' => 'United Kingdom',
                            'US' => 'United States',
                            'UM' => 'United States Outlying Islands',
                            'UY' => 'Uruguay',
                            'UZ' => 'Uzbekistan',
                            'VU' => 'Vanuatu',
                            'VE' => 'Venezuela',
                            'VN' => 'Viet Nam',
                            'VG' => 'Virgin Islands, British',
                            'VI' => 'Virgin Islands, U.S.',
                            'WF' => 'Wallis And Futuna',
                            'EH' => 'Western Sahara',
                            'YE' => 'Yemen',
                            'ZM' => 'Zambia',
                            'ZW' => 'Zimbabwe'
                        ];
                    ?>

                    <div>
                        <select class="form-control custom-select" id="company_countries_select" multiple name="company[countries][]">
                                <?php 
                                $selected_countries = [];
                                if(!empty($userInfo['company']['countries'])){
                                    $selected_countries = $userInfo['company']['countries'];
                                } 
                                ?>     
                                <?php foreach($countries as $country_code => $country_label): ?>

                                    <?php 
                                    $option_selected = "";
                                    if(!empty($selected_countries)) {
                                        foreach($selected_countries as $selected_country) {
                                            if($selected_country == $country_code) {
                                                $option_selected = "selected";
                                            }
                                        }
                                    }
                                    ?>


                                <option value="<?= $country_code ?>"  <?= $option_selected; ?> ><?= $country_label ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <!-- /country list -->

            <!-- partner games -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Would you like to partner for?') ?> *
                </label>
                <div class="col-12 col-sm-8">
                    <?php
                    $games_dummyData = [
                        ['value' => 'black_squad', 'label' => 'Black Squad'],
                        ['value' => 'all_games', 'label' => __('All games')],
                    ];
                    ?>
                    <?php foreach ($games_dummyData as $partner_game): ?>
                        <div class="view">
                            <span class="checkbox-value" data-value="<?= $partner_game['value'] ?>">
                                <?= $partner_game['label'] ?>
                            </span>
                        </div>
                        <div class="edit-checkbox ">
                            <?php
                                $checked = 0;
                                $partner_game_text = "";
                                if(!empty($userInfo['company']['partner_games'])) {
                                    foreach($userInfo['company']['partner_games'] as $p) {
                                        if(!empty($p[$partner_game['value']])) {
                                            
                                            $checked = $p[$partner_game['value']];
                                        }
                                    }
                                }
                            ?>
                            <div class="custom-control custom-checkbox form-check">
                                <input type='hidden' name="company[partner_games][][<?= $partner_game['value'] ?>]" value="<?= $checked; ?>" />
                                <input class="form-check-input custom-control-input checkbox-partner_game" 
                                        type="checkbox"
                                        name="company[partner_games][]"
                                        id="company_partner_game<?= $partner_game['value'] ?>"
                                        <?= $checked ? "checked" : ""  ?>
                                        data-value="<?=  $partner_game['value']?>"
                                        />
                                <label class="form-check-label w-100 custom-control-label"
                                        for="<?= 'company_partner_game' . $partner_game['value'] ?>">
                                    <?= $partner_game['label'] ?>
                                </label>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- /partner games -->
            
            <!-- submit -->
            <div class="form-group row mt-6 mb-0 submit-wrapper">
                <div class="col-12 col-sm-6"></div>
                <div class="col-12 col-sm-6">
                   <?php echo $this->Form->submit(__('Submit'), [
                        'class' => 'btn btn-lg btn-primary float-right  mx-2 text-dark',
                    ]); ?>

                    <?php echo $this->Form->button(__('Cancel'), [
                        'class' => 'btn btn-lg btn-secondary float-right mx-2',
                    ]); ?>
                </div>
            </div>
            <!-- /submit --> 


        <?= $this->Form->end(); ?>


    </div> <!-- /card-body -->
</div> <!-- /card -->