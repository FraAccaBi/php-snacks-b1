<!-- ## Snack 3

Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
 -->

 <?php

$data = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1',
            'img' => "<img src='https://picsum.photos/400/200' alt='' />"
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2',
            'img' => "<img src='https://picsum.photos/400/200' alt='' />"
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3',
            'img' => "<img src='https://picsum.photos/400/200' alt='' />"
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4',
            'img' => "<img src='https://picsum.photos/400/200' alt='' />"
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5',
            'img' => "<img src='https://picsum.photos/400/200' alt='' />"
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6',
            'img' => "<img src='https://picsum.photos/400/200' alt='' />"
        ]
    ],
];

//var_dump($posts)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <?php 

    foreach($data as $date => $posts) : ?>
        <li>
            <h2> <?php echo $date ?> </h2> 
            
            <?php foreach($posts as $post) : ?>
                <?= $post['img'] ?>
                <?= $post['title'] ?>                
                <?= $post['author'] ?>
                <?= $post['text'] ?>
                


            <?php endforeach ?>

        </li>
        
        <?php endforeach ?>

</ul>   








</body>
</html>