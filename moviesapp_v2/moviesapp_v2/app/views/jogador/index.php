<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <title>Jogadores</title>
</head>
<body>
    <h1>Lista de Jogadores</h1>
    <ul>
        <?php foreach ($jogadores as $jogador): ?>
            <li><a href="/jogador/get/<?= $jogador['id']; ?>"><?= $jogador['nome']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
