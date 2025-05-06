<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/">VOLTAR</a>

    <div>
        <?php foreach($data['users'] as $value): ?>   
        <form action="/update/<?=$value['id']?>" method="POST">
            <input type="text" name="name" placeholder="<?=$value['name']?>">
            <input type="text" name="email" placeholder="<?=$value['email']?>">
            <input type="submit" value="ENV">
        </form>
        <?php endforeach ?>
    </div>
</body>
</html>