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

    'accepted' => ':attribute moet geaccepteerd worden.',
    'accepted_if' => ':attribute moet geaccepteerd worden wanneer :other :value is.',
    'active_url' => ':attribute is geen geldige URL.',
    'after' => ':attribute moet een datum na :date zijn.',
    'after_or_equal' => ':attribute moet een datum na of gelijk aan :date zijn.',
    'alpha' => ':attribute mag alleen letters bevatten.',
    'alpha_dash' => ':attribute mag alleen letters, nummers, underscores (_) en streepjes (-) bevatten.',
    'alpha_num' => ':attribute mag alleen letters en nummers bevatten.',
    'any_of' => ':attribute is ongeldig.',
    'array' => ':attribute moet geselecteerde elementen bevatten.',
    'ascii' => ':attribute mag alleen alfanumerieke tekens en symbolen bevatten.',
    'before' => ':attribute moet een datum voor :date zijn.',
    'before_or_equal' => ':attribute moet een datum voor of gelijk aan :date zijn.',
    'between' => [
        'array' => ':attribute moet tussen :min en :max items bevatten.',
        'file' => ':attribute moet tussen :min en :max kilobytes zijn.',
        'numeric' => ':attribute moet tussen :min en :max zijn.',
        'string' => ':attribute moet tussen :min en :max tekens zijn.',
    ],
    'boolean' => ':attribute moet ja of nee zijn.',
    'can' => ':attribute bevat een niet toegestane waarde.',
    'confirmed' => ':attribute bevestiging komt niet overeen.',
    'contains' => ':attribute mist een vereiste waarde.',
    'current_password' => 'Het wachtwoord is onjuist.',
    'date' => ':attribute moet een datum bevatten.',
    'date_equals' => ':attribute moet een datum gelijk aan :date zijn.',
    'date_format' => ':attribute moet een geldig datum volgens formaat :format zijn.',
    'decimal' => ':attribute moet :decimal decimalen bevatten.',
    'declined' => ':attribute moet afgewezen worden.',
    'declined_if' => ':attribute moet afgewezen worden wanneer :other :value is.',
    'different' => ':attribute en :other moeten verschillend zijn.',
    'digits' => ':attribute moet bestaan uit :digits cijfers.',
    'digits_between' => ':attribute moet bestaan uit minimaal :min en maximaal :max cijfers.',
    'dimensions' => ':attribute heeft geen geldige afmetingen voor afbeeldingen.',
    'distinct' => ':attribute heeft een dubbele waarde.',
    'doesnt_end_with' => ':attribute mag niet eindigen met een van de volgende: :values.',
    'doesnt_start_with' => ':attribute mag niet beginnen met een van de volgende: :values.',
    'email' => ':attribute is geen geldig e-mailadres.',
    'ends_with' => ':attribute moet met één van de volgende waarden eindigen: :values.',
    'enum' => 'Het geselecteerde :attribute is ongeldig.',
    'exists' => ':attribute bestaat niet.',
    'extensions' => ':attribute moet een van de volgende extensies hebben: :values.',
    'file' => ':attribute moet een bestand zijn.',
    'filled' => ':attribute is verplicht.',
    'gt' => [
        'array' => 'De groep :attribute moet meer dan :value items bevatten.',
        'file' => ':attribute moet groter zijn dan :value kilobytes.',
        'numeric' => ':attribute moet groter zijn dan :value.',
        'string' => ':attribute moet meer dan :value tekens bevatten.',
    ],
    'gte' => [
        'array' => 'De groep :attribute moet :value items of meer bevatten.',
        'file' => ':attribute moet groter of gelijk zijn aan :value kilobytes.',
        'numeric' => ':attribute moet groter of gelijk zijn aan :value.',
        'string' => ':attribute moet minimaal :value tekens bevatten.',
    ],
    'hex_color' => ':attribute moet een geldige hexadecimale kleur zijn.',
    'image' => ':attribute moet een afbeelding zijn.',
    'in' => ':attribute is ongeldig.',
    'in_array' => ':attribute bestaat niet in :other.',
    'integer' => ':attribute moet een getal zijn.',
    'ip' => ':attribute moet een geldig IP-adres zijn.',
    'ipv4' => ':attribute moet een geldig IPv4-adres zijn.',
    'ipv6' => ':attribute moet een geldig IPv6-adres zijn.',
    'json' => ':attribute moet een geldige JSON-string zijn.',
    'list' => ':attribute moet een lijst zijn.',
    'lowercase' => ':attribute moet in kleine letters zijn.',
    'lt' => [
        'array' => 'De groep :attribute moet minder dan :value items bevatten.',
        'file' => ':attribute moet kleiner zijn dan :value kilobytes.',
        'numeric' => ':attribute moet kleiner zijn dan :value.',
        'string' => ':attribute moet minder dan :value tekens bevatten.',
    ],
    'lte' => [
        'array' => 'De groep :attribute moet :value items of minder bevatten.',
        'file' => ':attribute moet kleiner of gelijk zijn aan :value kilobytes.',
        'numeric' => ':attribute moet kleiner of gelijk zijn aan :value.',
        'string' => ':attribute moet maximaal :value tekens bevatten.',
    ],
    'mac_address' => ':attribute moet een geldig MAC-adres zijn.',
    'max' => [
        'array' => 'De groep :attribute mag niet meer dan :max items bevatten.',
        'file' => ':attribute mag niet meer dan :max kilobytes zijn.',
        'numeric' => ':attribute mag niet hoger dan :max zijn.',
        'string' => ':attribute mag niet uit meer dan :max tekens bestaan.',
    ],
    'max_digits' => ':attribute mag niet meer dan :max cijfers bevatten.',
    'mimes' => ':attribute moet een bestand zijn van het bestandstype :values.',
    'mimetypes' => ':attribute moet een bestand zijn van het bestandstype :values.',
    'min' => [
        'array' => 'De groep :attribute moet minimaal :min items bevatten.',
        'file' => ':attribute moet minimaal :min kilobytes zijn.',
        'numeric' => ':attribute moet minimaal :min zijn.',
        'string' => ':attribute moet minimaal :min tekens zijn.',
    ],
    'min_digits' => ':attribute moet minimaal :min cijfers bevatten.',
    'missing' => ':attribute moet ontbreken.',
    'missing_if' => ':attribute moet ontbreken wanneer :other :value is.',
    'missing_unless' => ':attribute moet ontbreken tenzij :other :value is.',
    'missing_with' => ':attribute moet ontbreken wanneer :values aanwezig is.',
    'missing_with_all' => ':attribute moet ontbreken wanneer :values aanwezig zijn.',
    'multiple_of' => ':attribute moet een veelvoud van :value zijn.',
    'not_in' => ':attribute is ongeldig.',
    'not_regex' => 'Het formaat van :attribute is ongeldig.',
    'numeric' => ':attribute moet een nummer zijn.',
    'password' => [
        'letters' => ':attribute moet ten minste één letter bevatten.',
        'mixed' => ':attribute moet ten minste één hoofdletter en één kleine letter bevatten.',
        'numbers' => ':attribute moet ten minste één nummer bevatten.',
        'symbols' => ':attribute moet ten minste één symbool bevatten.',
        'uncompromised' => 'Het opgegeven :attribute is gelekt bij een datalek. Kies een ander :attribute.',
    ],
    'present' => ':attribute moet aanwezig zijn.',
    'present_if' => ':attribute moet aanwezig zijn wanneer :other :value is.',
    'present_unless' => ':attribute moet aanwezig zijn tenzij :other :value is.',
    'present_with' => ':attribute moet aanwezig zijn wanneer :values aanwezig is.',
    'present_with_all' => ':attribute moet aanwezig zijn wanneer :values aanwezig zijn.',
    'prohibited' => ':attribute is niet toegestaan.',
    'prohibited_if' => ':attribute is niet toegestaan indien :other :value is.',
    'prohibited_unless' => ':attribute is niet toegestaan tenzij :other :value is.',
    'prohibits' => ':attribute verbiedt het aanwezig zijn van :other.',
    'regex' => 'Het formaat van :attribute is ongeldig.',
    'required' => ':attribute is verplicht.',
    'required_array_keys' => ':attribute moet items bevatten voor: :values.',
    'required_if' => ':attribute is verplicht indien :other :value is.',
    'required_if_accepted' => ':attribute is verplicht wanneer :other geaccepteerd is.',
    'required_if_declined' => ':attribute is verplicht wanneer :other afgewezen is.',
    'required_unless' => ':attribute is verplicht tenzij :other :values is.',
    'required_with' => ':attribute is verplicht in combinatie met :values.',
    'required_with_all' => ':attribute is verplicht in combinatie met :values.',
    'required_without' => ':attribute is verplicht als :values niet aanwezig is.',
    'required_without_all' => ':attribute is verplicht als :values niet aanwezig zijn.',
    'same' => ':attribute en :other moeten overeenkomen.',
    'size' => [
        'array' => 'De groep :attribute moet :size items bevatten.',
        'file' => ':attribute moet :size kilobytes zijn.',
        'numeric' => ':attribute moet :size zijn.',
        'string' => ':attribute moet :size tekens zijn.',
    ],
    'starts_with' => ':attribute moet beginnen met een van de volgende: :values.',
    'string' => ':attribute moet tekst zijn.',
    'timezone' => ':attribute moet een geldige tijdzone zijn.',
    'ulid' => ':attribute moet een geldige ULID zijn.',
    'unique' => ':attribute is al in gebruik.',
    'uploaded' => 'Het uploaden van :attribute is mislukt.',
    'uppercase' => ':attribute moet in hoofdletters zijn.',
    'url' => ':attribute moet een geldige URL zijn.',
    'uuid' => ':attribute moet een geldige UUID zijn.',

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
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'name' => 'naam',
        'capacity' => 'capaciteit',
        'location' => 'locatie',
        'start_date' => 'startdatum',
        'email' => 'e-mailadres',
        'password' => 'wachtwoord',
    ],

];
