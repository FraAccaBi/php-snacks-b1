<!-- ## Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
 -->
<?php
$paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolor, atque, quos numquam debitis doloremque rem, cumque quisquam aliquid accusamus vero itaque pariatur dolorem aspernatur reiciendis. Nisi velit, reprehenderit quidem nesciunt fugiat tempore accusamus, sapiente natus eveniet vel cumque quos voluptate voluptatem harum pariatur. Vitae aliquam expedita quod velit, dolorem iure reiciendis, a culpa repudiandae est accusantium quae ut praesentium itaque sit ex magni amet ullam temporibus cumque voluptate voluptates. Ut repellat maxime earum officiis quam, recusandae fugiat nostrum voluptatum beatae nihil molestias aperiam delectus eum accusamus rerum atque consectetur natus? Debitis incidunt quo quia quam, expedita culpa, laudantium voluptatem perferendis corporis, est blanditiis! Tenetur consequuntur molestias recusandae expedita omnis et at, dignissimos ipsa deleniti ducimus perspiciatis impedit reprehenderit provident similique accusamus, veritatis nostrum nam minus earum aliquam, nisi reiciendis eveniet quae. Qui exercitationem provident aut unde at temporibus expedita, repellendus, ipsam voluptas molestias rem commodi, quisquam fugiat delectus similique veniam. Quia iusto sequi quod voluptatibus non eos minus temporibus eaque veniam eveniet, deserunt laboriosam facilis dignissimos distinctio nobis ratione enim cumque aut iure consequatur repudiandae quisquam porro recusandae! Quia, eum aspernatur sed facilis maiores necessitatibus nostrum eius minima omnis consequuntur, eaque quaerat mollitia neque, libero laudantium? Odio, perferendis maxime.';

$paragraphs = explode('.', $paragraph);
//var_dump($paragraphs[2]);


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
    <?php foreach ($paragraphs as $paragraph) : ?>
    <p>
    <?php echo $paragraph ?>.
    </p>
    <?php endforeach ?>
    
</body>
</html>