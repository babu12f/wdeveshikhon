<!DOCTYPE html>
<?php require('session_manager.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Person Data Insert Form</title>
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?php include('nav_bar.php'); ?>
    <div class="container" id="about_content">
        
    </div>
    
    <button onclick="getAboutPage1()">get about page</button>
    
    <script src="./js/jquery.js"></script>
    <script>
        // function getAboutPage(){
        //     var element = document.getElementById('about_content');

        //     // ajax = asynchronous javascript and xml

        //     var xhttp = new XMLHttpRequest();

        //     xhttp.onreadystatechange = function(){
        //         if(this.readyState == 4 && this.status == 200){
        //             element.innerHTML = this.responseText;
        //         }
        //     };
        //     xhttp.open("GET", "get_about.php", true);
        //     xhttp.send();
        // }

        function getAboutPage1(){
            $.ajax({
                url: 'get_about.php',
                type: 'GET',
                success: myfunc,
                error: function(response){
                    console.log("erroe");
                }
            });
        }

        function myfunc(response){
            $('#about_content').html(response);
        }
    </script>
</body>
</html>