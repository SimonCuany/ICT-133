<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <script src="/node_modules/jquery/dist/jquery.js"></script>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css">
    <script src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<a href="?action=Accueil">
    <header class="text-center">
        <img src="/images/CPNVinfo.png" width="100px">
    </header>
</a>
<div class="container">

    <?=
    $content
    ?>
</div>
<footer class="text-center">
    <a href="https://fr-fr.facebook.com/"><img src="/images/fb.png" width="20px" height="20px"></a>
    <a href="https://twitter.com/?lang=fr"> <img src="/images/twitter.png" width="20px" height="20px"></a>
    <a href="https://www.instagram.com/?hl=fr"> <img src="/images/insta.png" width="20px" height="20px"></a>
    <a href="https://www.snapchat.com/l/fr-fr/"> <img src="/images/snap.png" width="20px" height="20px"></a>
</footer>
</body>
</html>
