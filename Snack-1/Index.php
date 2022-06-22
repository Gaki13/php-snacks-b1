<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
 Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $partite= [
        [
            'SquadraDiCasa' => 'Olimpia Milano',
            'SquadraOspite' => 'Virtus Bologna',
            'puntiCasa' => 78,
            'puntiOspite' => 84,
        ],
        [
            'SquadraDiCasa' => 'Derthona',
            'SquadraOspite' => 'Venezia',
            'puntiCasa' => 63,
            'puntiOspite' => 73,
        ],
        [
            'SquadraDiCasa' => 'Dinamo Sassari',
            'SquadraOspite' => 'Brescia',
            'puntiCasa' => 98,
            'puntiOspite' => 68,
        ],
        [
            'SquadraDiCasa' => 'Trieste',
            'SquadraOspite' => 'Brindisi',
            'puntiCasa' => 66,
            'puntiOspite' => 77,
        ],
        [
            'SquadraDiCasa' => 'Reggiana',
            'SquadraOspite' => 'VL Pesaro',
            'puntiCasa' => 59,
            'puntiOspite' => 55,
        ],
    ];

    for($i = 0; $i < count($partite); $i++) {
        echo $partite[$i]['SquadraDiCasa'] . " - ". $partite[$i]['SquadraOspite']. " | ". $partite[$i]['puntiCasa']. "-". $partite[$i]['puntiOspite'] ;
    }




?>