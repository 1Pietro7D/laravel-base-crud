<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Le seguenti righe di lingua contengono i messaggi di errore predefiniti utilizzati
    | dalla classe validator. Alcune di queste regole hanno più versioni come le regole
    | di dimensione. Sentiti libero di modificare ciascuno di questi messaggi qui.
    |
    */

    'accepted'=> 'Il campo :attribute deve essere accettato.',
    'active_url'=> 'Il campo :attribute non è un URL valido.',
    'after'=> 'Il campo :attribute essere una data successiva a :date.',
    'after_or_equal'=> 'Il campo :attribute deve essere una data successiva o uguale a :date.',
    'alpha'=> 'Il campo :attribute può contenere solo lettere.',
    'alpha_dash'=> 'Il campo :attribute può contenere solo lettere, numeri, trattini e trattini bassi.',
    'alpha_num'=> 'Il campo :attribute può contenere solo lettere e numeri.',
    'array'=> 'Il campo :attribute deve essere un array.',
    'before'=> 'Il campo :attribute deve essere una data prima di :date.',
    'before_or_equal'=> 'Il campo :attribute deve essere una data precedente o uguale a :date.',
    'between'=> [
        'numeric'=> 'Il campo :attribute deve essere compreso tra :min e :max.',
        'file'=> 'Il campo :attribute deve avere una grandezza tra :min e :max kilobyte.',
        'string'=> 'Il campo :attribute deve contenere tra :min e :max caratteri.',
        'array'=> 'Il campo :attribute deve avere un numero di elementi compresi tra :min e :max.',
    ],
    'boolean'=> 'Il campo :attribute deve essere vero o falso.',
    'confirmed'=> 'Il valore inserito nel campo :attribute non corrisponde e non ha conferma.',
    'date'=> 'Il valore inserito nel campo :attribute non è una data valida.',
    'date_equals'=> 'Il campo :attribute deve contenere una data uguale a :date.',
    'date_format'=> 'Il valore in :attribute non corrisponde al formato :format.',
    'different'=> 'I campi :attribute e :other devono essere diversi.',
    'digits'=> 'Il campo :attribute deve essere :digits in cifre.', //Il campo da convalidare deve essere numerico e deve avere una lunghezza esatta di valore .
    'digits_between'=> 'Il campo :attribute deve essere compreso tra :min e :max in cifre.',
    'dimension'=> 'Il campo :attribute ha dimensioni dell\'immagine non valide.',
    'distinct'=> 'Il campo :attribute ha un valore duplicato.',
    'email'=> 'Il campo :attribute deve contenere un indirizzo email valido.',
    'end_with'=> 'Il campo :attribute deve terminare con uno dei seguenti: :values.',
    'exists'=> 'Il campo selezionato :attribute non è valido.',
    'file'=> 'Il campo :attribute deve essere un file.',
    'filled'=> 'Il campo :attribute deve avere un valore.',
    'gt'=> [    //Il campo in fase di convalida deve essere maggiore del campo specificato . I due campi devono essere dello stesso tipo. Stringhe, valori numerici, matrici e file vengono valutati utilizzando le stesse convenzioni della sizeregola.
        'numeric'=> 'Il campo :attribute deve essere maggiore di :value.',
        'file'=> 'Il campo :attribute deve essere maggiore di :value kilobyte.',
        'string'=> 'Il campo :attribute deve essere maggiore di :value caratteri.',
        'array'=> 'Il campo :attribute deve avere più di :value elementi .',
    ],
    'gte'=> [
        'numeric'=> 'Il campo :attribute deve essere maggiore o uguale a :value.',
        'file'=> 'Il campo :attribute deve essere maggiore o uguale a :value kilobyte.',
        'string'=> 'Il campo :attribute deve essere maggiore o uguale a :value caratteri.',
        'array'=> 'Il campo :attribute deve avere :value o più elementi .',
    ],
    'image'=> 'Il campo :attribute deve essere un\'immagine.',
    'in'=> ':attribute :selezionato non è valido.',
    'in_array'=> 'Il campo :attribute non esiste in :altro.',
    'integer'=> ':attribute deve essere un numero intero.',
    'ip'=> ':attribute deve essere un indirizzo IP valido.',
    'ipv4'=> ':attribute deve essere un indirizzo IPv4 valido.',
    'ipv6'=> ':attribute deve essere un indirizzo IPv6 valido.',
    'json'=> ':attribute deve essere una stringa JSON valida.',
    'lt'=> [
        'numeric'=> ':attribute deve essere minore di :value.',
        'file'=> ':attribute deve essere inferiore a :value kilobyte.',
        'string'=> ':attribute deve essere inferiore a :caratteri valore.',
        'array'=> ':attribute deve avere meno di :elementi di valore.',
    ],
    'lte'=> [
        'numeric'=> ':attribute deve essere minore o uguale a :value.',
        'file'=> ':attribute deve essere minore o uguale a :value kilobyte.',
        'string'=> ':attribute deve essere minore o uguale a :caratteri di valore.',
        'array'=> ':attribute :non deve avere più di :elementi di valore.',
    ],
    'max'=> [
        'numeric'=> ':attribute :non può essere maggiore di :max.',
        'file'=> ':attribute :non può essere maggiore di :max kilobyte.',
        'string'=> ':attribute :non può essere maggiore di :max caratteri.',
        'array'=> ':attribute :non può contenere più di :max elementi.',
    ],
    'mines'=> ':attribute deve essere un file di tipo: :value.',
    'minetypes'=> ':attribute deve essere un file di tipo: :value.',
    'min'=> [
        'numeric'=> ':attribute deve essere almeno :min.',
        'file'=> ':attribute deve essere almeno :min kilobyte.',
        'string'=> ':attribute deve contenere almeno :min caratteri.',
        'array'=> ':attribute deve avere almeno :min elementi.',
    ],
    'not_in'=> ':attribute selezionato non è valido.',
    'not_regex'=> 'Il formato :attribute non è valido.',
    'numeric'=> ':attribute essere un numero.',
    'password'=> 'La password non è corretta.',
    'present'=> 'Il campo :attribute deve essere presente.',
    'regex'=> 'Il formato :attribute non è valido.',
    'required'=> 'Il campo :attribute è obbligatorio.',
    'require_if'=> 'Il campo :attribute è obbligatorio quando :other è :value.',
    'required_unless' => 'Il campo :attribute è obbligatorio a meno che :other non sia in :values.',
    'required_with' => 'Il campo :attribute è obbligatorio quando :values ​​è presente.',
    'required_with_all' => 'Il campo :attributo è obbligatorio quando sono presenti :value.',
    'required_without' => 'Il campo :attribute è obbligatorio quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è obbligatorio quando nessuno dei :value è presente.',
    'same' => ' :attributo e :other devono corrispondere.',
    'size' => [
        'numeric' => ':attribute deve essere :size.',
        'file' => ':attribute deve essere :size kilobyte.',
        'string' => ':attribute deve essere :caratteri di dimensione.',
        'array' => ':attribute deve contenere :elementi di dimensioni.',
    ],
    'starts_with' => ':attribute deve iniziare con uno dei seguenti: :values.',
    'string' => ':attribute deve essere una stringa.',
    'timezone' => ':attribute deve essere una zona valida.',
    'unique' => ':attribute è già stato preso.',
    'uploaded' => 'Impossibile caricare :attributo.',
    'url' => 'Il formato :attributo non è valido.',
    'uuid' => ':attribute deve essere un UUID valido.',




     /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Qui puoi specificare messaggi di convalida personalizzati per gli attributi usando
    | la convenzione "attribute.rule" per nominare le righe.
    | Ciò semplifica la specifica di una riga di lingua personalizzata
    | specifica per una determinata regola di attributo.
    |
    */

    'custom'=> [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | Le seguenti righe di lingua vengono utilizzate per scambiare il segnaposto
    | dell :attribute con qualcosa di più facile da leggere come
    | "Indirizzo e-mail" anziché "e-mail".
    | Questo ci aiuta semplicemente a rendere il nostro messaggio più espressivo.
    |
    */

    'attributes' => [],

];
