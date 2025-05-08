<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/userEdit.css">
    <title>Document</title>
</head>
<body>
<div class="head-app">
    <h1>MVC</h1>
    <a href="/user">Voltar</a>
</div>

<div class="edit-user">
    <?php foreach($data['users'] as $value): ?>
        <div class="div-edit">
            <form class="form-edit" action="/update/<?=$value['id']?>" method="POST">
                <h2>Editar usuário</h2>
                <input type="text" name="name" placeholder="<?=$value['name']?>">
                <input type="text" name="email" placeholder="<?=$value['email']?>">
                <input class="button-edit" type="submit" value="Editar">
            </form>
        </div>
    <?php endforeach ?>
</div>
</body>
</html>
