<?php

require_once "utils/functions.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog | Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background: #f8f8f8;
            padding-top: 72px;
            font-family: "HelveticaNeue-Light", "Helvetica Neue Light", 
                "Helvetica Neue", Helvetica, Arial, "Lucida Grande", 
                sans-serif;
        }
        hr {
            margin: 0;
        }
        .navbar {
            height: 48px;
            background: #fff;
            box-shadow: 0px 6px 24px -6px rgba(0,0,0,0.3);
            margin-bottom: 6px;
        }
        .navbar .container {
            padding: 6px;
            height: 48px;
        }
        .navbar .container > .navbar-header {
            margin: 0;
        }
        .navbar > .container .navbar-brand {
            margin: 0;
        }
        .navbar-brand {
            padding: 0;
            margin-left: 6px;
            height: 48px;
        }
        .navbar-brand > img {
            height: 36px;
            width: auto;
        }
        .navbar-title {
            height: 36px;
            line-height: 36px;
            font-family: "Courier New", Courier, "Lucida Sans Typewriter", "Lucida Typewriter", monospace;
            font-size: 24px;
            vertical-align: middle;
            padding-left: 6px;
        }
        .navbar-right {
            /*margin: 6px -6px 6px 6px;*/
            margin: 0;
            height: 36px;
            line-height: 36px;
        }
        .container .jumbotron {
            box-shadow: 0px 6px 24px -6px rgba(0,0,0,0.3);
            border-radius: 0;
            margin-bottom: 24px;
            background: #fff;
        }
        .well {
            background: #fff;
            box-shadow: 0px 6px 24px -6px rgba(0,0,0,0.3);
            border: none;
            border-radius: 0;
            margin-bottom: 24px;
            /*padding: 12px 0;*/
            padding: 0;
        }
        .well:after {
            content: "";
            display: table;
            clear: both;
        }
        .selector {
            width: 36px;
            height: 44px;
            background: #e5e5e5;
            display: inline-block;
            vertical-align: top;
            cursor: pointer;
        }
        .selector.active {
            width: 100%;
            height: 44px;
            background: #e5e5e5;
            display: inline-block;
            vertical-align: top;
            cursor: pointer;
        }
        .selector span {
            min-height: 44px;
            line-height: 44px;
            vertical-align: middle;
            text-align: center;
            display: block;
            top: 0;
            color: #727272;
        }
        .content {
            padding: 12px;
            display: inline-block;
            vertical-align: top;
        }
        .content em {
            display: none;
        }
        .content em.active {
            display: block;
            margin: 6px 0;
        }
        .content p {
            display: none;
        }
        .content p.active {
            display: block;
        }
        .content footer {
            width: 100%;
            cursor: pointer;
            text-align: center;
            display: none;
        }
        .content footer.active {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="images/logo.png">
                    </a>
                    <span class="navbar-title">austin ewens</span>
                </div>
            </div>
        </nav>
        <div class="jumbotron">
            <h1>Hi, I'm Austin</h1>
            <p>
                I'm a programmer that dabbles in tech support, graphics design, and thinking about various 
                philosophical topics. This blog will serve as a medium for me to publish about said interests.
            </p>
        </div>
        <?php 
            foreach (array_reverse(get_posts()) as $post) {
        ?>
            <div class="well">
                <div class="selector">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </div>
                <div class="content">
                    <strong>
                        <?php 
                            echo $post["id"] . ". " . $post["title"];
                        ?>
                    </strong>
                    <em>Posted: <?php echo $post["posted"]; ?></em>
                    <p>
                        <?php echo str_replace("\n", "<br>", $post["body"]); ?>
                    </p>
                    <footer>Close</footer>
                </div>
            </div>
        <?php 
            }
        ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script>
        $(".selector").on("click", function() {
            var isActive = $(this).hasClass("active");
            
            $(".active span")
                .removeClass("glyphicon-chevron-down")
                .addClass("glyphicon-chevron-right");
            $(".active").removeClass("active");
            
            if (!isActive) {
                $(this).addClass("active");
                $(this).children("span")
                    .removeClass("glyphicon-chevron-right")
                    .addClass("glyphicon-chevron-down");
                $(this).next()
                    .children("em").addClass("active")
                    .next().addClass("active")
                    .next().addClass("active");
            }
        });
        
        $(".content footer").on("click", function() {
            $(".active span")
                .removeClass("glyphicon-chevron-down")
                .addClass("glyphicon-chevron-right");
            $(".active").removeClass("active");
        });
    </script>
</body>
</html>
