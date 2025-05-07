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
        <form action="/create" method="POST">
            <input type="text" name="name" placeholder="name">
            <input type="text" name="email" placeholder="email">
            <input type="submit" value="ENV">
        </form>
    </div>
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
                    <a href="/delete/<?= $value['id'] ?>">DELETE</a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>
