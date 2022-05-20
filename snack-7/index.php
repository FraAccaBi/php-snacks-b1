<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$classe = [
    [
        'nome' => 'Fra',
        'cognome' => 'Huda',
        'voti' => [
            5, 6, 7, 8, 9
        ]

    ],
    [
        'nome' => 'Tommy',
        'cognome' => 'Gatto',
        'voti' => [
            4, 5 , 6, 7, 8
        ]

    ]
];

//var_dump($classe[0]['voti'][2]);
for ($i=0; $i < count($classe); $i++) { 
    $qt = count($classe[$i]['voti']);
    $res = 0;
    for ($index = 0; $index < $qt; $index++) {
      $res += intval($classe[$i]['voti'][$index]);
    }
    $media = strval($res/$qt);
    echo ' | Nome Studente: ' . $classe[$i]['nome'] . ' | Cognome Studente: ' . $classe[$i]['cognome'] . ' | Media dei voti: ' . $media;
}



    

/* 
for ($i=0; $i < 2; $i++) { 
    
} */