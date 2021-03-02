<?php
    use App\Libraries\Core;
    require_once '../app/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styling -->
    <title><?= env("APPNAME", "MyApp") ?></title><!-- AppName env -->
</head>
<body>
    <header>
    
    </header>
    <main>
        <?php $init = new Core; ?>
    </main>
    <footer>
    
    </footer>
</body>
<!-- Scripting -->
</html>