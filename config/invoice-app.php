<?php

return [

    'clients' => [

        'prefix' => 'CLT-',
    ],

    'invoices' => [
        'prefix' => 'FACTURE-',
        'start_from' => 1,
        'due_date_after' => 60,
    ],

    'estimates' => [
        'prefix' => 'DEVIS-',
        'start_from' => 1,
        'due_date_after' => 15,
        'default_condition' => 'Délai 2 semaines après la réception de bon de commande',
    ],
];
