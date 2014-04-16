<?php namespace Pyro\FieldType;

use Pyro\Module\Streams\FieldType\FieldTypeAbstract;

class Phone extends FieldTypeAbstract
{
    /**
     * Field type slug
     *
     * @var string
     */
    public $field_type_slug = 'phone';

    /**
     * BD col type
     *
     * @var string
     */
    public $db_col_type = 'string';

    /**
     * Version
     *
     * @var string
     */
    public $version = '1.1';

    /**
     * Field type author information
     *
     * @var array
     */
    public $author = array(
        'name' => 'Ryan Thompson',
        'url'  => 'http://www.aiwebsystems.com/'
    );

    /**
     * Custom parameters
     *
     * @var array
     */
    public $custom_parameters = array(
        'default_country',
    );

    /**
     * Country codes
     *
     * @var array
     */
    protected $countryCodes = array(
        'AF'  => array(
            'country'     => 'Afghanistan',
            'callingCode' => '+93',
        ),
        'AL'  => array(
            'country'     => 'Albania',
            'callingCode' => '+355',
        ),
        'DZ'  => array(
            'country'     => 'Algeria',
            'callingCode' => '+213',
        ),
        'AS'  => array(
            'country'     => 'American Samoa',
            'callingCode' => '+1684',
        ),
        'AD'  => array(
            'country'     => 'Andorra',
            'callingCode' => '+376',
        ),
        'AO'  => array(
            'country'     => 'Angola',
            'callingCode' => '+244',
        ),
        'AI'  => array(
            'country'     => 'Anguilla',
            'callingCode' => '+1264',
        ),
        'AG'  => array(
            'country'     => 'Antigua and Barbuda',
            'callingCode' => '+1268',
        ),
        'AR'  => array(
            'country'     => 'Argentina',
            'callingCode' => '+54',
        ),
        'AM'  => array(
            'country'     => 'Armenia',
            'callingCode' => '+374',
        ),
        'AW'  => array(
            'country'     => 'Aruba',
            'callingCode' => '+297',
        ),
        'AC'  => array(
            'country'     => 'Ascension Island',
            'callingCode' => '+247',
        ),
        'AU'  => array(
            'country'     => 'Australia',
            'callingCode' => '+61',
        ),
        'AT'  => array(
            'country'     => 'Austria',
            'callingCode' => '+43',
        ),
        'AZ'  => array(
            'country'     => 'Azerbaijan',
            'callingCode' => '+994',
        ),
        'BS'  => array(
            'country'     => 'Bahamas',
            'callingCode' => '+1242',
        ),
        'BH'  => array(
            'country'     => 'Bahrain',
            'callingCode' => '+973',
        ),
        'BD'  => array(
            'country'     => 'Bangladesh',
            'callingCode' => '+880',
        ),
        'BB'  => array(
            'country'     => 'Barbados',
            'callingCode' => '+1246',
        ),
        'BY'  => array(
            'country'     => 'Belarus',
            'callingCode' => '+375',
        ),
        'BE'  => array(
            'country'     => 'Belgium',
            'callingCode' => '+32',
        ),
        'BZ'  => array(
            'country'     => 'Belize',
            'callingCode' => '+501',
        ),
        'BJ'  => array(
            'country'     => 'Benin',
            'callingCode' => '+229',
        ),
        'BM'  => array(
            'country'     => 'Bermuda',
            'callingCode' => '+1441',
        ),
        'BT'  => array(
            'country'     => 'Bhutan',
            'callingCode' => '+975',
        ),
        'BO'  => array(
            'country'     => 'Bolivia',
            'callingCode' => '+591',
        ),
        'BA'  => array(
            'country'     => 'Bosnia and Herzegovina',
            'callingCode' => '+387',
        ),
        'BW'  => array(
            'country'     => 'Botswana',
            'callingCode' => '+267',
        ),
        'BR'  => array(
            'country'     => 'Brazil',
            'callingCode' => '+55',
        ),
        'BN'  => array(
            'country'     => 'Brunei',
            'callingCode' => '+673',
        ),
        'BG'  => array(
            'country'     => 'Bulgaria',
            'callingCode' => '+359',
        ),
        'BF'  => array(
            'country'     => 'Burkina Faso',
            'callingCode' => '+226',
        ),
        'BI'  => array(
            'country'     => 'Burundi',
            'callingCode' => '+257',
        ),
        'KH'  => array(
            'country'     => 'Cambodia',
            'callingCode' => '+855',
        ),
        'CM'  => array(
            'country'     => 'Cameroon',
            'callingCode' => '+237',
        ),
        'CA'  => array(
            'country'     => 'Canada',
            'callingCode' => '+1',
        ),
        'CV'  => array(
            'country'     => 'Cape Verde',
            'callingCode' => '+238',
        ),
        'KY'  => array(
            'country'     => 'Cayman Islands',
            'callingCode' => '+1345',
        ),
        'CF'  => array(
            'country'     => 'Central African Republic',
            'callingCode' => '+236',
        ),
        'TD'  => array(
            'country'     => 'Chad',
            'callingCode' => '+235',
        ),
        'CL'  => array(
            'country'     => 'Chile',
            'callingCode' => '+56',
        ),
        'CN'  => array(
            'country'     => 'China',
            'callingCode' => '+86',
        ),
        'CO'  => array(
            'country'     => 'Colombia',
            'callingCode' => '+57',
        ),
        'KM'  => array(
            'country'     => 'Comoros',
            'callingCode' => '+269',
        ),
        'CG'  => array(
            'country'     => 'Congo',
            'callingCode' => '+242',
        ),
        'CD'  => array(
            'country'     => 'Congo Democratic Republic',
            'callingCode' => '+243',
        ),
        'CK'  => array(
            'country'     => 'Cook Islands',
            'callingCode' => '+682',
        ),
        'CR'  => array(
            'country'     => 'Costa Rica',
            'callingCode' => '+506',
        ),
        'CI'  => array(
            'country'     => 'Cote d\'Ivoire',
            'callingCode' => '+225',
        ),
        'HR'  => array(
            'country'     => 'Croatia',
            'callingCode' => '+385',
        ),
        'CU'  => array(
            'country'     => 'Cuba',
            'callingCode' => '+53',
        ),
        'CY'  => array(
            'country'     => 'Cyprus',
            'callingCode' => '+357',
        ),
        'CZ'  => array(
            'country'     => 'Czech Republic',
            'callingCode' => '+420',
        ),
        'DK'  => array(
            'country'     => 'Denmark',
            'callingCode' => '+45',
        ),
        'DJ'  => array(
            'country'     => 'Djibouti',
            'callingCode' => '+253',
        ),
        'DM'  => array(
            'country'     => 'Dominica',
            'callingCode' => '+1767',
        ),
        'DO'  => array(
            'country'     => 'Dominican Republic',
            'callingCode' => '+1809',
        ),
        'EC'  => array(
            'country'     => 'Ecuador',
            'callingCode' => '+593',
        ),
        'EG'  => array(
            'country'     => 'Egypt',
            'callingCode' => '+20',
        ),
        'SV'  => array(
            'country'     => 'El Salvador',
            'callingCode' => '+503',
        ),
        'GQ'  => array(
            'country'     => 'Equatorial Guinea',
            'callingCode' => '+240',
        ),
        'ER'  => array(
            'country'     => 'Eritrea',
            'callingCode' => '+291',
        ),
        'EE'  => array(
            'country'     => 'Estonia',
            'callingCode' => '+372',
        ),
        'ET'  => array(
            'country'     => 'Ethiopia',
            'callingCode' => '+251',
        ),
        'FK'  => array(
            'country'     => 'Falkland Islands',
            'callingCode' => '+500',
        ),
        'FO'  => array(
            'country'     => 'Faroe Islands',
            'callingCode' => '+298',
        ),
        'FJ'  => array(
            'country'     => 'Fiji',
            'callingCode' => '+679',
        ),
        'FI'  => array(
            'country'     => 'Finland',
            'callingCode' => '+358',
        ),
        'FR'  => array(
            'country'     => 'France',
            'callingCode' => '+33',
        ),
        'GF'  => array(
            'country'     => 'French Guiana',
            'callingCode' => '+594',
        ),
        'PF'  => array(
            'country'     => 'French Polynesia',
            'callingCode' => '+689',
        ),
        'GA'  => array(
            'country'     => 'Gabon',
            'callingCode' => '+241',
        ),
        'GM'  => array(
            'country'     => 'Gambia',
            'callingCode' => '+220',
        ),
        'GE'  => array(
            'country'     => 'Georgia',
            'callingCode' => '+995',
        ),
        'DE'  => array(
            'country'     => 'Germany',
            'callingCode' => '+49',
        ),
        'GH'  => array(
            'country'     => 'Ghana',
            'callingCode' => '+233',
        ),
        'GI'  => array(
            'country'     => 'Gibraltar',
            'callingCode' => '+350',
        ),
        'GR'  => array(
            'country'     => 'Greece',
            'callingCode' => '+30',
        ),
        'GL'  => array(
            'country'     => 'Greenland',
            'callingCode' => '+299',
        ),
        'GD'  => array(
            'country'     => 'Grenada',
            'callingCode' => '+1473',
        ),
        'GP'  => array(
            'country'     => 'Guadeloupe',
            'callingCode' => '+590',
        ),
        'GU'  => array(
            'country'     => 'Guam',
            'callingCode' => '+1671',
        ),
        'GT'  => array(
            'country'     => 'Guatemala',
            'callingCode' => '+502',
        ),
        'GN'  => array(
            'country'     => 'Guinea',
            'callingCode' => '+224',
        ),
        'GW'  => array(
            'country'     => 'Guinea Bissau',
            'callingCode' => '+245',
        ),
        'GY'  => array(
            'country'     => 'Guyana',
            'callingCode' => '+592',
        ),
        'HT'  => array(
            'country'     => 'Haiti',
            'callingCode' => '+509',
        ),
        'HN'  => array(
            'country'     => 'Honduras',
            'callingCode' => '+504',
        ),
        'HK'  => array(
            'country'     => 'Hong Kong',
            'callingCode' => '+852',
        ),
        'HU'  => array(
            'country'     => 'Hungary',
            'callingCode' => '+36',
        ),
        'IS'  => array(
            'country'     => 'Iceland',
            'callingCode' => '+354',
        ),
        'IN'  => array(
            'country'     => 'India',
            'callingCode' => '+91',
        ),
        'ID'  => array(
            'country'     => 'Indonesia',
            'callingCode' => '+62',
        ),
        'IR'  => array(
            'country'     => 'Iran',
            'callingCode' => '+98',
        ),
        'IQ'  => array(
            'country'     => 'Iraq',
            'callingCode' => '+964',
        ),
        'IE'  => array(
            'country'     => 'Ireland',
            'callingCode' => '+353',
        ),
        'IL'  => array(
            'country'     => 'Israel',
            'callingCode' => '+972',
        ),
        'IT'  => array(
            'country'     => 'Italy',
            'callingCode' => '+39',
        ),
        'JM'  => array(
            'country'     => 'Jamaica',
            'callingCode' => '+1876',
        ),
        'JP'  => array(
            'country'     => 'Japan',
            'callingCode' => '+81',
        ),
        'JO'  => array(
            'country'     => 'Jordan',
            'callingCode' => '+962',
        ),
        'KZ'  => array(
            'country'     => 'Kazakhstan',
            'callingCode' => '+7',
        ),
        'KE'  => array(
            'country'     => 'Kenya',
            'callingCode' => '+254',
        ),
        'KI'  => array(
            'country'     => 'Kiribati',
            'callingCode' => '+686',
        ),
        'KP'  => array(
            'country'     => 'North Korea',
            'callingCode' => '+850',
        ),
        '82'  => array(
            'country'     => 'South Korea',
            'callingCode' => '+82',
        ),
        'KW'  => array(
            'country'     => 'Kuwait',
            'callingCode' => '+965',
        ),
        'KG'  => array(
            'country'     => 'Kyrgyzstan',
            'callingCode' => '+996',
        ),
        'LA'  => array(
            'country'     => 'Laos',
            'callingCode' => '+856',
        ),
        'LV'  => array(
            'country'     => 'Latvia',
            'callingCode' => '+371',
        ),
        'LB'  => array(
            'country'     => 'Lebanon',
            'callingCode' => '+961',
        ),
        'LS'  => array(
            'country'     => 'Lesotho',
            'callingCode' => '+266',
        ),
        'LR'  => array(
            'country'     => 'Liberia',
            'callingCode' => '+231',
        ),
        'LY'  => array(
            'country'     => 'Libya',
            'callingCode' => '+218',
        ),
        'LI'  => array(
            'country'     => 'Liechtenstein',
            'callingCode' => '+423',
        ),
        'LT'  => array(
            'country'     => 'Lithuania',
            'callingCode' => '+370',
        ),
        'LU'  => array(
            'country'     => 'Luxembourg',
            'callingCode' => '+352',
        ),
        'MO'  => array(
            'country'     => 'Macau',
            'callingCode' => '+853',
        ),
        'MK'  => array(
            'country'     => 'Macedonia',
            'callingCode' => '+389',
        ),
        'MG'  => array(
            'country'     => 'Madagascar',
            'callingCode' => '+261',
        ),
        'MW'  => array(
            'country'     => 'Malawi',
            'callingCode' => '+265',
        ),
        'MY'  => array(
            'country'     => 'Malaysia',
            'callingCode' => '+60',
        ),
        'MV'  => array(
            'country'     => 'Maldives',
            'callingCode' => '+960',
        ),
        'ML'  => array(
            'country'     => 'Mali',
            'callingCode' => '+223',
        ),
        'MT'  => array(
            'country'     => 'Malta',
            'callingCode' => '+356',
        ),
        'MH'  => array(
            'country'     => 'Marshall Islands',
            'callingCode' => '+692',
        ),
        'MQ'  => array(
            'country'     => 'Martinique',
            'callingCode' => '+596',
        ),
        'MR'  => array(
            'country'     => 'Mauritania',
            'callingCode' => '+222',
        ),
        'MU'  => array(
            'country'     => 'Mauritius',
            'callingCode' => '+230',
        ),
        'MX'  => array(
            'country'     => 'Mexico',
            'callingCode' => '+52',
        ),
        'FM'  => array(
            'country'     => 'Micronesia',
            'callingCode' => '+691',
        ),
        'MD'  => array(
            'country'     => 'Moldova',
            'callingCode' => '+373',
        ),
        'MC'  => array(
            'country'     => 'Monaco',
            'callingCode' => '+377',
        ),
        'MN'  => array(
            'country'     => 'Mongolia',
            'callingCode' => '+976',
        ),
        'MS'  => array(
            'country'     => 'Montserrat',
            'callingCode' => '+1664',
        ),
        'MA'  => array(
            'country'     => 'Morocco',
            'callingCode' => '+212',
        ),
        'MZ'  => array(
            'country'     => 'Mozambique',
            'callingCode' => '+258',
        ),
        'MM'  => array(
            'country'     => 'Myanmar',
            'callingCode' => '+95',
        ),
        'NA'  => array(
            'country'     => 'Namibia',
            'callingCode' => '+264',
        ),
        'NR'  => array(
            'country'     => 'Nauru',
            'callingCode' => '+674',
        ),
        'NP'  => array(
            'country'     => 'Nepal',
            'callingCode' => '+977',
        ),
        'NL'  => array(
            'country'     => 'Netherlands',
            'callingCode' => '+31',
        ),
        'NC'  => array(
            'country'     => 'New Caledonia',
            'callingCode' => '+687',
        ),
        'NZ'  => array(
            'country'     => 'New Zealand',
            'callingCode' => '+64',
        ),
        'NI'  => array(
            'country'     => 'Nicaragua',
            'callingCode' => '+505',
        ),
        'NE'  => array(
            'country'     => 'Niger',
            'callingCode' => '+227',
        ),
        'NG'  => array(
            'country'     => 'Nigeria',
            'callingCode' => '+234',
        ),
        'NU'  => array(
            'country'     => 'Niue',
            'callingCode' => '+683',
        ),
        'NF'  => array(
            'country'     => 'Norfolk Island',
            'callingCode' => '+6723',
        ),
        'MP'  => array(
            'country'     => 'Northern Mariana Islands',
            'callingCode' => '+1',
        ),
        'NO'  => array(
            'country'     => 'Norway',
            'callingCode' => '+47',
        ),
        'OM'  => array(
            'country'     => 'Oman',
            'callingCode' => '+968',
        ),
        'PK'  => array(
            'country'     => 'Pakistan',
            'callingCode' => '+92',
        ),
        'PW'  => array(
            'country'     => 'Palau',
            'callingCode' => '+680',
        ),
        'PA'  => array(
            'country'     => 'Panama',
            'callingCode' => '+507',
        ),
        'PG'  => array(
            'country'     => 'Papua New Guinea',
            'callingCode' => '+675',
        ),
        'PY'  => array(
            'country'     => 'Paraguay',
            'callingCode' => '+595',
        ),
        'PE'  => array(
            'country'     => 'Peru',
            'callingCode' => '+51',
        ),
        'PH'  => array(
            'country'     => 'Philippines',
            'callingCode' => '+63',
        ),
        'PL'  => array(
            'country'     => 'Poland',
            'callingCode' => '+48',
        ),
        'PT'  => array(
            'country'     => 'Portugal',
            'callingCode' => '+351',
        ),
        'PR'  => array(
            'country'     => 'Puerto Rico',
            'callingCode' => '+1787',
        ),
        'QA'  => array(
            'country'     => 'Qatar',
            'callingCode' => '+974',
        ),
        'RE'  => array(
            'country'     => 'Reunion',
            'callingCode' => '+262',
        ),
        'RO'  => array(
            'country'     => 'Romania',
            'callingCode' => '+40',
        ),
        'RU'  => array(
            'country'     => 'Russia',
            'callingCode' => '+7',
        ),
        'RW'  => array(
            'country'     => 'Rwanda',
            'callingCode' => '+250',
        ),
        'KN'  => array(
            'country'     => 'Saint Kitts and Nevis',
            'callingCode' => '+1869',
        ),
        'LC'  => array(
            'country'     => 'Saint Lucia',
            'callingCode' => '+1758',
        ),
        'WS'  => array(
            'country'     => 'Samoa',
            'callingCode' => '+685',
        ),
        'SM'  => array(
            'country'     => 'San Marino',
            'callingCode' => '+378',
        ),
        'ST'  => array(
            'country'     => 'Sao Tome and Principe',
            'callingCode' => '+239',
        ),
        'SA'  => array(
            'country'     => 'Saudi Arabia',
            'callingCode' => '+966',
        ),
        'SN'  => array(
            'country'     => 'Senegal',
            'callingCode' => '+221',
        ),
        'SC'  => array(
            'country'     => 'Seychelles',
            'callingCode' => '+248',
        ),
        'SL'  => array(
            'country'     => 'Sierra Leone',
            'callingCode' => '+232',
        ),
        'SG'  => array(
            'country'     => 'Singapore',
            'callingCode' => '+65',
        ),
        'SK'  => array(
            'country'     => 'Slovakia',
            'callingCode' => '+421',
        ),
        'SI'  => array(
            'country'     => 'Slovenia',
            'callingCode' => '+386',
        ),
        'SB'  => array(
            'country'     => 'Solomon Islands',
            'callingCode' => '+677',
        ),
        'SO'  => array(
            'country'     => 'Somalia',
            'callingCode' => '+252',
        ),
        'ZA'  => array(
            'country'     => 'South Africa',
            'callingCode' => '+27',
        ),
        '211' => array(
            'country'     => 'South Sudan',
            'callingCode' => '+211',
        ),
        'ES'  => array(
            'country'     => 'Spain',
            'callingCode' => '+34',
        ),
        'LK'  => array(
            'country'     => 'Sri Lanka',
            'callingCode' => '+94',
        ),
        'SD'  => array(
            'country'     => 'Sudan',
            'callingCode' => '+249',
        ),
        'SR'  => array(
            'country'     => 'Suriname',
            'callingCode' => '+597',
        ),
        'SZ'  => array(
            'country'     => 'Swaziland',
            'callingCode' => '+268',
        ),
        'SE'  => array(
            'country'     => 'Sweden',
            'callingCode' => '+46',
        ),
        'CH'  => array(
            'country'     => 'Switzerland',
            'callingCode' => '+41',
        ),
        'SY'  => array(
            'country'     => 'Syria',
            'callingCode' => '+963',
        ),
        'TW'  => array(
            'country'     => 'Taiwan',
            'callingCode' => '+886',
        ),
        'TJ'  => array(
            'country'     => 'Tajikistan',
            'callingCode' => '+992',
        ),
        'TZ'  => array(
            'country'     => 'Tanzania',
            'callingCode' => '+255',
        ),
        'TH'  => array(
            'country'     => 'Thailand',
            'callingCode' => '+66',
        ),
        'TP'  => array(
            'country'     => 'East Timor',
            'callingCode' => '+670',
        ),
        'TG'  => array(
            'country'     => 'Togo',
            'callingCode' => '+228',
        ),
        'TK'  => array(
            'country'     => 'Tokelau',
            'callingCode' => '+690',
        ),
        'TO'  => array(
            'country'     => 'Tonga',
            'callingCode' => '+676',
        ),
        'TT'  => array(
            'country'     => 'Trinidad and Tobago',
            'callingCode' => '+1868',
        ),
        'TN'  => array(
            'country'     => 'Tunisia',
            'callingCode' => '+216',
        ),
        'TR'  => array(
            'country'     => 'Turkey',
            'callingCode' => '+90',
        ),
        'TM'  => array(
            'country'     => 'Turkmenistan',
            'callingCode' => '+993',
        ),
        'TC'  => array(
            'country'     => 'Turks and Caicos',
            'callingCode' => '+1649',
        ),
        'TV'  => array(
            'country'     => 'Tuvalu',
            'callingCode' => '+688',
        ),
        'UG'  => array(
            'country'     => 'Uganda',
            'callingCode' => '+256',
        ),
        'UA'  => array(
            'country'     => 'Ukraine',
            'callingCode' => '+380',
        ),
        'AE'  => array(
            'country'     => 'United Arab Emirates',
            'callingCode' => '+971',
        ),
        'GB'  => array(
            'country'     => 'United Kingdom',
            'callingCode' => '+44',
        ),
        'US'  => array(
            'country'     => 'United States',
            'callingCode' => '+1',
        ),
        'UY'  => array(
            'country'     => 'Uruguay',
            'callingCode' => '+598',
        ),
        'UZ'  => array(
            'country'     => 'Uzbekistan',
            'callingCode' => '+998',
        ),
        'VU'  => array(
            'country'     => 'Vanuatu',
            'callingCode' => '+678',
        ),
        'VA'  => array(
            'country'     => 'Vatican City',
            'callingCode' => '+379',
        ),
        'VE'  => array(
            'country'     => 'Venezuela',
            'callingCode' => '+58',
        ),
        'VN'  => array(
            'country'     => 'Vietnam',
            'callingCode' => '+84',
        ),
        'VG'  => array(
            'country'     => 'Virgin Islands (British)',
            'callingCode' => '+1284',
        ),
        'VI'  => array(
            'country'     => 'Virgin Islands (US)',
            'callingCode' => '+1340',
        ),
        'WF'  => array(
            'country'     => 'Wallis and Futuna',
            'callingCode' => '+681',
        ),
        'YE'  => array(
            'country'     => 'Yemen',
            'callingCode' => '+967',
        ),
        'ZM'  => array(
            'country'     => 'Zambia',
            'callingCode' => '+260',
        ),
        'ZW'  => array(
            'country'     => 'Zimbabwe',
            'callingCode' => '+263',
        ),
    );

    /**
     * Pre save
     *
     * @return void
     */
    public function preSave()
    {
        return preg_replace('/[^0-9]/', '', $this->value);
    }

    /**
     * Get code
     *
     * @return null
     */
    protected function getCode()
    {
        $value = json_decode($this->country);

        if (isset($this->countryCodes[$value->country])) {
            return $this->countryCodes[$value->country]['callingCode'];
        }

        return null;
    }
}
