<?php

return [

    /*
     * The API key of a MailChimp account. You can find yours at
     * https://us10.admin.mailchimp.com/account/api-key-popup/.
     */
    'apiKey' => env('MAILCHIMP_APIKEY'),

    /*
     * The listName to use when no listName has been specified in a method.
     */
    'defaultListName' => 'list_us',

    /*
     * Here you can define properties of the lists.
     */
    'lists' => [

        /*
         * This key is used to identify this list. It can be used
         * as the listName parameter provided in the various methods.
         *
         * You can set it to any string you want and you can add
         * as many lists as you want.
         */
        'subscribers' => [

            /*
             * A MailChimp list id. Check the MailChimp docs if you don't know
             * how to get this value:
             * http://kb.mailchimp.com/lists/managing-subscribers/find-your-list-id.
             */
            'id' => env('MAILCHIMP_LIST_ID'),
        ],
        'list_us' => [
            'id' => '7983ab7864'
        ],
        'list_uk' => [
            'id' => '413629e2d8'
        ],
        'list_fr' => [
            'id' => '33995807ea'
        ],
        'list_ca' => [
            'id' => '8b8a3e7567'
        ],
        'list_es' => [
            'id' => 'a05fa5cb89'
        ],
        'list_it' => [
            'id' => '548bde3e19'
        ],
        'list_lt' => [
            'id' => 'adb0d20833'
        ],
        'list_pl' => [
            'id' => '48f07470a0'
        ],
        'list_nl' => [
            'id' => 'ace5a22934'
        ],
        'list_de' => [
            'id' => 'b4661f1e2f'
        ],
        'coupon_uk' => [
            'id' => '80434252a0'
        ],
        'coupon_de' => [
            'id' => '059aa1def7'
        ],
    ],

    /*
     * If you're having trouble with https connections, set this to false.
     */
    'ssl' => false,

];
