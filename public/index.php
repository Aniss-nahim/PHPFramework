<?php
    require_once '../app/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=assets("css/main.css")?>">
    <script type="application/javascript" src="<?=assets("js/app.js")?>"></script>
    <!-- Styling -->
    <title><?= env("APP_NAME", "MyApp") ?></title><!-- AppName env -->
</head>
<body>
    <header>
    
    </header>
    <main>
        <?php $init = new Core;?>
    </main>
    <footer>
    
    </footer>
</body>
<!-- Scripting -->
</html>