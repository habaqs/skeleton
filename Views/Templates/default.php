<!--
    VARIABLES
    - $description: description de la page
    - $title      : title de la page
    - $content    : contenue de la page
-->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?= $descritption ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>

<body>
    <?= $content ?>
</body>

</html>