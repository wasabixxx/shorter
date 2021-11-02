<?php include 'main.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $sitename; ?> | URL SHORTNER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="theme-color" content="#333333">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <link href="https://fonts.googleapis.com/css?family=Seaweed+Script" rel="stylesheet" />
    </head>

    <body class="fade-in-ii">
        <form class="form-wrapper cf" method="post" action="" >
            <!-- <font size="8" style="font-family: 'Seaweed Script', cursive;" alt="Rut gọn "><?php echo $sitename; ?></font> <p/> -->
            <input type="text" class="textarea" name="textarea" autocomplete="off" placeholder="link" required>
            <button type="submit" class="sbtn" name="shrt">Go</button>
        </form>
    </body>
</html>
