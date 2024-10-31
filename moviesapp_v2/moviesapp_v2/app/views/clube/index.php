<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <title>Clubes</title>
</head>
<body>
    <h1>Lista de Clubes</h1>
    <ul>
        <?php foreach ($clubes as $clube): ?>
            <li><a href="/clube/get/<?= $clube['id']; ?>"><?= $clube['nome']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
