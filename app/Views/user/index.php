<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC - User</title>
</head>
<body>
    <h1>TESTE supremo kkk</h1>
    <div>
        <ul>
            <?php foreach($data['users'] as $key => $value): ?>
                <li>
                    <p>        
                        <?= $value['name']; ?>
                    </p>
                    <p>        
                        <?= $value['email']; ?>
                    </p>
                    <form action="/edit/<?= $value['id'] ?>" method="GET">
                        <input type="submit" value="ACS">
                    </form>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>
