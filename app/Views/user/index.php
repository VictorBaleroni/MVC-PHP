<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/userList.css">
    <title>MVC - User</title>
</head>
<body>
    <div class="head-app">
        <h1>MVC</h1>
        <a href="/">Voltar</a>
    </div>
    
    <div class="cad-user">
        <h2>Cadastrar Usuario</h2>
        <form action="/create" method="POST">
            <input type="text" name="name" placeholder="nome">
            <input type="text" name="email" placeholder="email">
            <input class="button-cad" type="submit" value="Enviar">
        </form>
    </div>
    
    <div class="list-users">
        <?php foreach($data['users'] as $key => $value): ?>
            <div class="div-master-user">
                <div class="div-user">
                    <p><?=$value['name']?></p>
                    <p><?=$value['email']?></p>
                    <a class="edit-button" href="/user/<?= $value['id'] ?>/edit">Editar</a>
                    <a class="delete-button" href="/delete/<?= $value['id'] ?>">Deletar</a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</body>
</html>
