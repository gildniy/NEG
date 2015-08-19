<?php

return [

    /*
    |-------------------------------------------------------------------------
    | Charsets
    |-------------------------------------------------------------------------
    |
    | The array below defines all available character sets that can be used
    | by Randomizr. Feel free to add the ones you need for your application.
    |
    | @info https://github.com/luminol-io/randomizr#charsets
    |
    */

    'charsets' => [
        'num' => '0123456789',
        'vowel' => 'aeijoy',
        'consonant' => 'bcdfghklmnpqrstvwxyz',
        'special' => 'áäâàæãåāaeéëêèęėēuúüûùūiíïïìiîįīoóöôòõœøōç',
        'space' => ' ',
        'dash' => '-',
        'underscore' => '_',
        'punctuation' => ':,.?!()',
    ],

    /*
    |-------------------------------------------------------------------------
    | Aliases
    |-------------------------------------------------------------------------
    |
    | You can merge various charsets by camel- or snake casing their names,
    | but you may as well register an alias for it.
    |
    | @info https://github.com/luminol-io/randomizr#aliases
    |
    */

    'aliases' => [
        'lowercase' => "vowel|consonant",
        'uppercase' => "strtoupper:lowercase",
        'alpha' => "lowercase|uppercase",
        'alphanum' => "alpha|num",
        'alphadash' => "alpha|dash",
        'string' => "alpha|num|dash|space|underscore|punctuation|'&$@'",
        'hash' => "alpha|num|dash|underscore|'&$@'",
    ],

    /*
    |-------------------------------------------------------------------------
    | Verifiers
    |-------------------------------------------------------------------------
    |
    | Here you can specify all available verifier classes that will be used
    | whenever calling the Randomizr unique() accessor method. This way, you
    | can easily extend the unique functionality.
    |
    | @info https://github.com/luminol-io/randomizr#extending-the-unique-accessor
    |
    */

    'verifiers' => [
        'Luminol\Randomizr\Verifiers\DatabaseVerifier',
        'Luminol\Randomizr\Verifiers\FilesystemVerifier',
    ],

];