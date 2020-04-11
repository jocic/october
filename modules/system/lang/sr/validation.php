<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Atribut :attribute mora biti prihvaćen.',
    'active_url'           => 'Atribut :attribute nije validan URL.',
    'after'                => 'Atribut :attribute mora biti datum koji je posle :date.',
    'after_or_equal'       => 'Atribut :attribute mora biti datum koji je posle ili jednak :date.',
    'alpha'                => 'Atribut :attribute može sadržati samo slova.',
    'alpha_dash'           => 'Atribut :attribute može sadržati samo slova, brojeve, i povlake',
    'alpha_num'            => 'Atribut :attribute može sadržati samo slova ili brojeve.',
    'array'                => 'Atribut :attribute mora biti niz.',
    'before'               => 'Atribut :attribute mora biti datum koji je pre :date.',
    'before_or_equal'      => 'Atribut :attribute mora biti datum koji je pre ili jednak :date.',
    'between'              => [
        'numeric' => 'Atribut :attribute mora biti između :min i :max.',
        'file'    => 'Atribut :attribute mora biti između :min i :max kilobajta.',
        'string'  => 'Atribut :attribute mora imati između :min i :max karaktera.',
        'array'   => 'Atribut :attribute imati između :min i :max elemenata.',
    ],
    'boolean'              => 'Atribut :attribute mora imati vrednost tačno ili netačno.',
    'confirmed'            => 'Potvrda :attribute nije odgovarajuća.',
    'date'                 => 'Atribut :attribute nije validan datum.',
    'date_format'          => 'Atribut :attribute nije u odgovarajućem formatu - :format.',
    'different'            => 'Atributi :attribute i :other moraju biti različiti.',
    'digits'               => 'Atribut :attribute mora imati :digits cifre.',
    'digits_between'       => 'Atribut :attribute mora imati između :min i :max cifre.',
    'dimensions'           => 'Atribut :attribute nema validne dimenzije.',
    'distinct'             => 'Atribut :attribute je duplikat',
    'email'                => 'Atribut :attribute mora biti validna email adresa.',
    'exists'               => 'Odabrani atribut :attribute nije validan.',
    'file'                 => 'Atribut :attribute mora biti fajl.',
    'filled'               => 'Atribut :attribute mora imati vrednost.',
    'image'                => 'Atribut :attribute mora biti slika.',
    'in'                   => 'Odabrani atribut :attribute nije validan.',
    'in_array'             => 'Atribut :attribute ne postoji u atributu :other.',
    'integer'              => 'Atribut :attribute mora biti ceo broj',
    'ip'                   => 'Atribut :attribute mora biti validna IP adresa.',
    'ipv4'                 => 'Atribut :attribute mora biti validna IPv4 adresa.',
    'ipv6'                 => 'Atribut :attribute mora biti validna IPv6 adresa.',
    'json'                 => 'Atribut :attribute mora biti validan JSON objekat.',
    'max'                  => [
        'numeric' => 'Atribut :attribute ne sme biti veći od :max.',
        'file'    => 'Atribut :attribute ne sme biti veći od :max kilobajta.',
        'string'  => 'Atribut :attribute ne sme imati više od :max karaktera.',
        'array'   => 'Atribut :attribute ne sme imati više od :max elemenata.',
    ],
    'mimes'                => 'Atribut :attribute mora biti tipa: :values.',
    'mimetypes'            => 'Atribut :attribute mora biti tipa: :values.',
    'min'                  => [
        'numeric' => 'Atribut :attribute mora biti barem :min.',
        'file'    => 'Atribut :attribute mora imati barem :min kilobajta.',
        'string'  => 'Atribut :attribute mora imati barem :min karaktera.',
        'array'   => 'Atribut :attribute mora imati barem :min elemenata.',
    ],
    'not_in'               => 'Odabrani atribut :attribute nije validan.',
    'numeric'              => 'Atribut :attribute mora biti broj.',
    'present'              => 'Atribut :attribute mora biti prisutan.',
    'regex'                => 'Format atributa :attribute nije validan.',
    'required'             => 'Atribut :attribute je obavezan.',
    'required_if'          => 'Atribut :attribute je obavezan kada :other ima vrednost :value.',
    'required_unless'      => 'Atribut :attribute je obavezan kada :other nije u :values.',
    'required_with'        => 'Atribut :attribute je obavezan kada su vrednosti :values prisutne.',
    'required_with_all'    => 'Atribut :attribute je obavezan kada su vrednosti :values prisutne.',
    'required_without'     => 'Atribut :attribute je obavezan kada vrednosti :values nisu prisutne.',
    'required_without_all' => 'Atribut :attribute je obavezan kada nijedna od vrednosti :values nije prisutna.',
    'same'                 => 'Atributi :attribute i :other moraju biti isti.',
    'size'                 => [
        'numeric' => 'Atribut :attribute mora biti :size.',
        'file'    => 'Atribut :attribute mora imati :size kilobajta.',
        'string'  => 'Atribut :attribute mora imati :size karaktera.',
        'array'   => 'Atribut :attribute mora sadržati :size elemenata.',
    ],
    'string'               => 'Atribut :attribute mora biti niska.',
    'timezone'             => 'Atribut :attribute mora biti validna vremenska zona.',
    'unique'               => 'Atribut :attribute je zauzet.',
    'uploaded'             => 'Otpremanje :attribute je neuspešno.',
    'url'                  => 'Format atributa :attribute nije validan.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'uobičajena-poruka',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
