<?php
require(__DIR__ . "/../language.php");
require(__DIR__ . "/../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $config['website-name']; ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $config["website-description"]; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="//cdn.jsdelivr.net/gh/ParveenBhadooOfficial/BhadooJS@1.0.14/icons/favicon-16x16.png"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
<div class="container text-center" style="margin-top:3%;">
    <div class="row">
        <div class="col-md-12">
            <?php if (isset($error_msg)) { ?>
                <div class="alert alert-danger" role="alert">
                    <p><?php echo $error_msg; ?></p>
                </div>
            <?php } ?>
            <div class="jumbotron">
                <h1 class="display-6"><?php echo $config['website-name']; ?></h1>
                <p class="lead"><?php echo $lang["slogan"]; ?></p>
                <div class="btn-group" role="group">
                    <a id="none" class="btn btn-success" href="/">Home</a>
                    <a id="twitter" class="btn btn-info" href="#">Twitter</a>
                    <a id="youtube" class="btn btn-danger" href="#">YouTube</a>
                    <a id="facebook" class="btn btn-primary" href="#">Facebook</a>
                </div>
                <br>
                <br>
                <div class="btn-group" role="group">
                    <a id="vikipedi" class="btn btn-secondary" href="#"><?php echo $lang["wikipedia"]; ?></a>
                    <a id="google" class="btn btn-success" href="#">Google</a>
                    <a id="piratebay" class="btn btn-danger" href="#">ThePirateBay</a>
                    <a id="zooqle" class="btn btn-info" href="#">Zooqle</a>
                </div>
                <p class="lead">
                <form class="form-group" action="index.php" method="post">
                    <input id="url" name="url" type="url" class="form-control" autocomplete="on" placeholder="https://" value="http://"
                           autofocus required/>
                    <br>
                    <input class="btn btn-primary btn-lg" type="submit" value="<?php echo $lang["go"]; ?>"/>
                </form>
            </div>
            <div class="text-center">
                <p style="font-size:11px">
                    <small><?php echo $lang["agree"]; ?> <a
                                href="<?php echo $config['website-url']; ?>/?tos"><?php echo $lang["tos_2"]; ?></a>
                    </small>
                </p>
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script>
        $('#twitter').click(function () {
            $('#url').val('https://twitter.com');
        });
        $('#youtube').click(function () {
            $('#url').val('https://www.youtube.com');
        });
        $('#facebook').click(function () {
            $('#url').val('https://www.facebook.com');
        });
        $('#google').click(function () {
            $('#url').val('https://www.google.com');
        });
        $('#vikipedi').click(function () {
            $('#url').val('https://www.wikipedia.org');
        });
        $('#piratebay').click(function () {
            $('#url').val('https://thepiratebay.org');
        });
        $('#zooqle').click(function () {
            $('#url').val('https://zooqle.com');
        });
    </script>
</div>
</body>
</html>
