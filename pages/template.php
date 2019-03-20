<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="public/screen.css">
    <title>todo'Zyigh</title>
</head>
<body>

<h1>TO DO LIST</h1>
<div class="header">
    <nav>
        <a href="index.php">All</a>
        <a href="index.php?id_type=2">Psr</a>
        <a href="index.php?id_type=3">Design Patterns</a>
        <a href="index.php?id_type=4">Math</a>
        <a href="index.php?id_type=5">Algo</a>
    </nav>

    <div class="new_button">
        <button class="new" type="button">new todo</button>
    </div>
</div>
<form action="">
    <label for="tri">Trier le contenu:</label>
    <input list="tri" id="trier" name="tri" />

    <datalist id="tri">
        <option value="Priority asc">
        <option value="Priority desc">
        <option value="Alphabetical asc">
        <option value="Alphabetical desc">
    </datalist>
</form>






</body>
</html>