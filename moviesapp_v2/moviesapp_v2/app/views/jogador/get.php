<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <title><?= $jogadores['nome']; ?></title>
</head>
<body>
    <h1><?= $jogadores['nome']; ?></h1>
    <p>Posição: <?= $jogadores['posicao']; ?></p>
    <p>Nacionalidade: <?= $jogadores['nacionalidade']; ?></p>
    <a href="/jogador">Voltar</a>
</body>
</html>
