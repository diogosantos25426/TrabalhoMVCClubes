<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <title>Técnicos</title>
</head>
<body>
    <h1>Lista de Técnicos</h1>
    <ul>
        <?php foreach ($tecnicos as $tecnico): ?>
            <li><a href="/tecnico/get/<?= $tecnico['id']; ?>"><?= $tecnico['nome']; ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
