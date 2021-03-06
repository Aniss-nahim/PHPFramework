<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=assets("css/main.css")?>">
    <script defer type="application/javascript" src="<?=assets("js/app.js")?>"></script>
    <title><?= env("APP_NAME", "MyApp") ?></title>
</head>
<body>
    <?php yeild("includes/navbar") ?>
    
    <main>
        <?php yeild("@content") ?>
    </main>
    
    <?php yeild("includes/footer") ?>
</body>
</html>