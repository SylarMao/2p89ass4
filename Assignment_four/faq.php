#!/usr/bin/php-cgi
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="http://cosc.brocku.ca/~ym14tm/A4/css/product.css">
        <link rel="stylesheet" type="text/css" href="http://cosc.brocku.ca/~ym14tm/A4/top.css">
        <script type="text/javascript" language="javascript">
            function update()
            {
                if (localStorage.login == 1)
                {
                    document.getElementById("log").innerHTML = "Yiwei Mao";
                }
            }
        </script>
    </head>
    <body onload="update()">
        <h1 class="title">
            Citation
        </h1>
        <?php
            session_start();
            include 'top.html';
        ?>
        <div id="ref" style="font-size:40px; color: white;">
            https://previews.123rf.com/images/shotsstudio/shotsstudio1506/shotsstudio150600035/41981265-cookie-letter-alphabet-on-white-background.jpg
            https://www.google.ca/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwi7zKqUlZjmAhXSg-AKHZUDDQkQjhx6BAgBEAI&url=https%3A%2F%2Fwww.cars.com%2Fresearch%2Fbmw-i8-2019%2F&psig=AOvVaw1hvH1ySuJDeVoLHmNnjSeF&ust=1575417276855413
            
        </div>
    </body>
</html>