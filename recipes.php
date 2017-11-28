<?php
session_start();
$kcal = $_SESSION['kcal'];
$kcal2 = $_SESSION['kcal2'];
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Calorie calculator</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bs/css/bootstrap.css"> 
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
            color: darkblue;
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
        select{
            color: darkblue;
            background-color: lightgrey;
            box-shadow: inset 0px 0px 10px 1px #FEFEFE;
            
        }
        

        </style>
        <h1><img src="slike/recipes.jpg" height="120" width="360" style="border-radius: 8px;"></h1>
    <br>
    </head>
    <body>
    
    <div id="google_translate_element">

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<script type="text/javascript"  src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
<?php
    

    echo '<div class="container">';
    echo '<hr>';
    echo '<a href="index.php"></a>';
           
               echo '<div align="left">
                   <a href="index.php"><button class="btn btn-success btn-lg">Go back</button></a>
                   
                </div>';
           
    echo '<br>';        

    echo '<h5>Calories you spend without activity: <b> '.intval($kcal).' kcal </b></h5>';
    echo '<h5>Given enough physical activity you can eat this much kcals: <b>'.intval($kcal2).' kcal </b></h5>';
    echo '<br>';

    echo'
    <form method="post" action="">
        <select name="kalorije">
         <option value="1">1100 - 1300 kcal</option>
         <option value="2">1300 - 1500 kcal</option>
         <option value="3">1500 - 1700 kcal</option>
         <option value="4">1700 - 1900 kcal</option>
         <option value="5">1900 - 2100 kcal</option>
         <option value="6">2100 - 2700 kcal</option>
         <option value="7">2700 and more</option>
        </select>
        <input type="submit" name="submit" class="btn btn-success btn-lg" value="Open recipes">              
        </form>
        </div>';

if ($_POST){

    $kalorije=$_POST['kalorije'];

    echo '<div class="container">';
    echo '<br>';
    switch($kalorije){
        case '1':
        echo '   
        <h1><b> 3 MEALS 1100 - 1300 kcal </b></h1> 
        <br>
        <h3> BREAKFAST</h3>
        <p> Egg and cheese breakfast sandwich - 1 serving </p>
        <p> Nonfat yougurt - 1 bowl </p>
        <br>
        <h3> LUNCH </h3>
        <p> Almond butter berry protein smoothie - 1 serving  <img src="slike/berry.png" height="300" width="350" style="border-radius: 8px; float:right;"></p>
        <br> <br>
        <h3>DINNER</h3>
        <p> Tuna melt patties - 1 patty </p>
        <p> Carrots with hummus - 1 serving</p>
         </div>';
            break;
        case '2':
        echo '   
        <h1><b> 3 MEALS 1300 - 1500 kcal </b></h1> 
        <br>
        <h3> BREAKFAST</h3>
        <p class="dotted"> Breakfast mini pizzas - 1 serving <img src="slike/pizza.jpg" height="350" width="500" style="border-radius: 8px; float:right;"></p>
        <p> Buttered toast - 1 slice </p>
        <br> 
        <h3> LUNCH </h3>
        <p> Tuna & white bean salad - 1 serving </p>
        <p>  1 banana</p>
        <br>
        <h3>DINNER</h3>
        <p> Mesquite garlic trout - 1 serving</p>
        <p> Fried corn and onions - 1 serving</p>
        </div>';
            break;
        case '3':
        echo '   
        <h1><b> 3 MEALS 1500 - 1700 kcal </b></h1> 
        <br>
        <h3> BREAKFAST</h3>
        <p> Avocado sandwich - 1 sandwich</p>
        <p> Strawberries - 1 cup <img src="slike/jagoda.jpg" height="320" width="500" style="border-radius: 8px; float:right;"></p> 
        <br> <br>
        <h3> LUNCH </h3>
        <p> Peanut butter protein yogurt - 1 serving </p>
        <p> Red bell pepper and hummus - 1 serving </p>
        <br>
        <h3>DINNER</h3>
        <p> Hummus cheese wrap - 1 serving </p>
        <p> Sea salt edamame - 1 serving </p>
        </div>';
            break;
        case '4':
        echo '   
        <h1><b> 3 MEALS 1700 - 1900 kcal </b></h1> 
        <br>
        <h3> BREAKFAST</h3>
        <p> Oatmeal banana protein shake - 1 shake</p>
        <p> 1 apple <img src="slike/jabuka.jpg" height="350" width="400" style="border-radius: 8px; float:right;"></p>
        <br>
        <h3> LUNCH </h3>
        <p> Simple caprese sandwich - 1 sandwich </p>
        <p> Peanut butter & celery - 1 serving </p>
        <br>
        <h3>DINNER</h3>
        <p> Chicken and cabbage stir fry - 1 serving </p>
        <p> Chocolate mousse - 1 serving </p>
        </div>';
            
            break;
        case '5':
        echo '   
        <h1><b> 3 MEALS 1900 - 2100 kcal </b></h1> 
        <br>
        <h3> BREAKFAST</h3>
        <p> Pan-toasted mustard, ham and cheese sandwich - 1 sandwich </p>
        <br>
        <h3> LUNCH </h3>
        <p> Tuna salad - 1 serving <img src="slike/tuna.jpeg" height="350" width="500" style="border-radius: 8px; float:right;"></p>
        <p> Yogurt & mango - 1 serving </p>
        <p> Almonds - 1 ounce (28g) </p>
        <br>
        <h3>DINNER</h3>
        <p> Steak with tomato bean salad - 1 serving </p>
        <p> Pan fried corn - 1 serving </p>
        </div>';
            break;
        case '6':
        echo '   
        <h1><b> 3 MEALS 2100 - 2700 kcal </b></h1> 
        <br>
        <h3> BREAKFAST</h3>
        <p> Vegetable 3 egg scramble - 1 serving </p>
        <p> Nonfat greek yogurt - 2 cups </p>
        <br>
        <h3> LUNCH </h3>
        <p> Red bell pepper and hummus - 1 serving <img src="slike/paprika.jpg" height="300" width="300" style="border-radius: 8px; float:right;"></p>
        <p> Almond butter berry protein smoothie - 1 smoothie </p>
        <p> Cheese slices - 2 servings </p>
        <br>
        <h3>DINNER</h3>
        <p> Penne with roasted asparagus and balsamic - 1 serving </p>
        <p> Easy fried spinach - 2 servings </p>
        </div>';
            break;
        case '7':
        echo '   
        <h1><b> 3 MEALS 2700 and more </b></h1>  
        <br>
        <h3> BREAKFAST</h3>
        <p> Sausage, egg and cheese scramble - 2 servings </p>
        <p> Buttered toast - 2 slices </p>
        <p> Strawberries - 1 cup </p>
        <br>
        <h3> LUNCH </h3>
        <p> Yogurt & mango - 2 servings <img src="slike/mango.jpg" height="350" width="450" style="border-radius: 8px; float:right;"></p>
        <p> Spinach salad - 2 servings </p>
        <p> Cheese slices - 2 servings </p>
        <br>
        <h3>DINNER</h3>
        <p> Light buffalo ranch chicken tortilla pizza - 4 servings </p>
        </div>';
            break;
    }
    
    echo '<div class="container">';
    echo ' <input type="button" class="btn btn-success btn-lg" name="Print" id="printbutton" value="Print" onclick="window.print()">';
    echo '<hr>';
    echo '</div>';
    echo '<br>';
}

    
 ?>
             </body>
 </html>