#!/usr/bin/php-cgi
<html>
    <style>
        .filterDiv 
        {
            float:left;
            width:50%;
            text-align: center;
            top: 50%;
            left: 30%;
            transform: translate(0%, 10%);
            color: white;
            background-color: rgba(80,80,80,0.8);
            border-radius: 25px;
            display: none;
        }
        .icon
        {
            float:left;
            width:25%;
            height: 250px;
            position: relative;
        }
        .info
        {
            padding-top:30px;
            padding-left:45%;
        }
        .icon img
        {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 70%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        .detail
        {
            border-radius: 50%;
            background-color: rgba(0,0,0,0.9);
        }
        .show 
        {
            display: block;
        }

        .container 
        {
            margin-top: 20px;
            overflow: hidden;
        }

/* Style the buttons */
        .btn 
        {
            border: none;
            outline: none;
            padding: 12px 16px;
            background-color: #f1f1f1;
            cursor: pointer;
        }

        .btn:hover 
        {
            background-color: #ddd;
        }

        .btn.active 
        {
            background-color: #666;
            color: white;
        }
    </style>
    <body>
        <?php
            include 'top.html';
        ?>
        <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')"> Show all</button>
            <button class="btn" onclick="filterSelection('vechical')"> Cars</button>
            <button class="btn" onclick="filterSelection('animals')"> Animals</button>
            <button class="btn" onclick="filterSelection('cards')"> cards</button>
            <button class="btn" onclick="filterSelection('biscuits')"> Cookies</button>
        </div>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="vechical/cards/biscuits/animals...">
        <div class="container">

            <?php
            foreach (glob("/home/student/ym14tm/public_html/A4/product/*.html") as $filename)
            {
                include $filename;
            }
        ?>
        </div>
        
        <script>
            function myFunction() 
            {
  // Declare variables
                var input, filter, ul, li, a, i, txtValue;
                input = document.getElementById('myInput');
                filterSelection(input.value);

  // Loop through all list items, and hide those who don't match the search query
                
            }
            filterSelection("all")
            function filterSelection(c) 
            {
                var x, i;
                x = document.getElementsByClassName("filterDiv");
                if (c == "all") c = "";
                for (i = 0; i < x.length; i++) 
                {
                    w3RemoveClass(x[i], "show");
                    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                }
            }

            function w3AddClass(element, name) 
            {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) 
                {
                    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
                }
            }

            function w3RemoveClass(element, name) 
            {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) 
                {
                    while (arr1.indexOf(arr2[i]) > -1) 
                    {
                        arr1.splice(arr1.indexOf(arr2[i]), 1);     
                    }
                }
                element.className = arr1.join(" ");
            }

            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) 
            {
                btns[i].addEventListener("click", function()
                {
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        </script>
    </body>
</html>