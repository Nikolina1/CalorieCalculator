<!DOCTYPE html>

<html>
    <head>
        <title>Calorie calculator</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bs/css/bootstrap.css"> 
        <link rel="icon" href="slike/icon.jpg">
        <style> 
        body{
            font-family: "Lucinda Grande";
            font-size: 150%;
            background: linear-gradient(to right , grey , white);
        }
        hr{
            color: black;
            border-style: inset;
            border-width: 5px;
        }
        h1{
            text-align: center;
        }
        h3{
            text-align: center;
            color: darkblue;
        }
        table{
            border-style: double;
            border-width: 15px;
        }
        img{
            float:center;
        }
        .btn-success {
            color: #fff;
            background-color: #595959;
            border-color: #404040;
        }
        .btn-success:hover {
            color: #fff;
            background-color: #404040;
            border-color: #404040;
            cursor:pointer;
        }
        p{
            font-size: 90%;
        }
        

        </style>


    <h1><img src="slike/about.png" height="110" width="400" style="border-radius: 8px;"></h1>
    <br>
    </head>
    <body>
    <div id="google_translate_element">

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript"  src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
<br>

<?php
    
        echo '<div align="center">
        <img src="slike/icant.jpg" height="170" width="280" style="border-radius: 8px;">
            
         </div>';

    echo'<div class="container">
    <a href="index.php"></a>';
    
        echo '<div align="left">
            <a href="index.php"><button class="btn btn-success btn-lg">Go back</button></a>
            
         </div>
    <hr>
    <div class="table-responsive">
     <div class="container">
     <table class="table" border="1" cellspasing="0" cellpadding="5">
     <tr>
     <td>

     <h3> CREATION OF THE PROJECT AND MOTIVATION </h3> <br>
     <p> This project is created within the Celtra November Challenge. It is made by two students from University
     of Rijeka - Nikolina Ljubičić and Mateja Klobučar. We joined this challenge because we wanted firstly to
     challenge ourselves and secondly to see if we can do this with our current skillset. Despite the short time limit and
     other faculty duties we still enjoyed participating in this challenge. Our project can be upgraded, but we didn\'t have
     much time. For building this application we used PHP, HTML, CSS, Bootstrap and AWS. We were motivated to do this type of application 
     because we want find quick and easy way to check how much calories we spend daily and thus how much we should eat.  </p> <br> <br>
     <h3> ABOUT THIS PROJECT </h3> <br>
     <p> This is right the place if you want to quickly and easily find out how many calories you spend 
     daily with or without physical activity. You can also find out your ideal weight and selecting 
     the button "Recipes" you choose your own recipe based on previous results. Recipes are separated on 3 meals;
     for breakfast, for lunch and of course for dinner. It\'s really quick, simple and effective. Enjoy! </p>

     </td>
     </tr>
     </table>
     </div>
    
    <hr>
    </div>';




    ?>
    </body>
</html>