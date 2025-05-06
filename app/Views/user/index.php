<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC - User</title>
</head>
<body>
    <h1>TESTE supremo kkk</h1>
    
    <ul>
    <?php foreach($data['users'] as $key => $value): ?>
        <li>
            <p>        
                <?= $value['nome']; ?>
            </p>
            <p>        
                <?= $value['cidade']; ?>
            </p>
        </li>
    <?php endforeach ?>
    </ul>

</body>
</html>
