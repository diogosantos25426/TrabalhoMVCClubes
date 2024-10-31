<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <title><?= $clubes['nome']; ?></title>
</head>
<body>
    <h1><?= $clubes['nome']; ?></h1>
    <p>Localização: <?= $clubes['localizacao']; ?></p>
    <p>Fundação: <?= $clubes['data_fundacao']; ?></p>
    <a href="/clube">Voltar</a>
</body>
</html>
