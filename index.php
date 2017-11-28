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
        table{
            border-style: double;
            border-width: 15px;
        }
        tr td{
            border-style: dotted;
            border-width: thick;
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
        

        </style>


        <h1><img src="slike/naslov.jpg" height="130" width="600" style="border-radius: 8px;"></h1>
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

<?php
    


    echo'<div class="container">
    <div align="right">
    <form method="post" action="about.php">
    <input type="submit" class="btn btn-success btn-lg" name="submit" value="About"> 
    </form>
    </div>
    <hr>


    <form method="post" action="">
        <p>Sex: 
           <input type="radio"  name="spol" value="Z"> female
           <input type="radio"  name="spol" value="M"> male
           </p>
           <div class="form-group row" display:inline-block;" >
           <label class="col-2 col-form-label"><p style="width:450px;">Enter your weight in kg:</p></label>
           <div class="col-10" ><input type="text" name="kg"  class="form-control" style="background-color : #f2f2f2;width:auto; margin-left: 220px; margin-top: 8px;" >  </div>
           <!--<label for="usr"></label>-->
         
          
           </div>

           <div class="form-group row" display:inline-block;" >
           <label class="col-2 col-form-label"><p style="width:450px;">Enter your height in cm:</p></label>
           <div class="col-10" ><input type="text" name="cm"  class="form-control" style="background-color : #f2f2f2;width:auto; margin-left: 220px; margin-top: 8px;" >  </div>
           <!--<label for="usr"></label>-->
          
           </div>

           <div class="form-group row" display:inline-block;" >
           <label class="col-2 col-form-label"><p style="width:450px;">Enter your age:</p></label>
           <div class="col-10" ><input type="text" name="god"  class="form-control" style="background-color : #f2f2f2; width:auto; margin-left: 220px; margin-top: 8px;" >  </div>
           <!--<label for="usr"></label>-->
         
          
           </div>

        
           
              <br> 
            <input type="submit" class="btn btn-success btn-lg" name="submit" value="Calculate"> 

           
         </form>
        </div>';

if ($_POST){
    
    $kg = $_POST['kg'];
    $cm = $_POST['cm'];
    $god = $_POST['god'];
    
    $greska=false;
    
    if($kg == '' || $cm == '' || $god == '' || (!isset($_POST['spol'])) || (!is_numeric($kg)) || (!is_numeric($cm)) || (!is_numeric($god)) || ($kg < 30) || ($kg > 500)
    || ($cm < 50) || ($cm >230) || ($god < 10) || ($god > 100)){
    $greska = true;
    
    echo '<div class="container">';
    echo '<br>';
    echo'<p style="color:red;">Oops! Error! Existing data is incorrect or not entered.</p>';
    echo'<meta http-equiv="refresh" content="3;url=/index.php" />';

    }
    else{
        $kcal = 0;
        $kcal2 = 0;
        $tez = 0;

        session_start();

        if($_POST['spol'] == 'Z')
        {
            $kcal = (447.593 + (9.247 * $kg) + (3.098 * $cm) - (4.330 * $god));
            $kcal2 = ((447.593 + (9.247 * $kg) + (3.098 * $cm) - (4.330 * $god))*1.2);
            $tez = ($cm - 100 - (( $cm - 150) /2.5));
            
        }
        else
        {
            
            $kcal = ((88.362 + (13.397 * $kg) + (4.799 * $cm) - (5.677 * $god)));
            $kcal2 = (((88.362 + (13.397 * $kg) + (4.799 * $cm) - (5.677 * $god)))*1.2);
            $tez = ($cm - 100 - (( $cm - 150) /4));
        }

        $_SESSION['kcal'] = $kcal;
        $_SESSION['kcal2'] = $kcal2;

       
        echo '<br>';
        echo '<br>';
        
        echo '<div class="table-responsive">';
        echo ' <div class="container">';

       echo '<form method="post" action="recipes.php">
        <p>Click for more: <input type="submit" class="btn btn-success btn-lg" name="submit" value="Recipes"> <p/>
         </form>';
        echo '<table class="table" border="1" cellspasing="0" cellpadding="5">';
        echo '<tr class="success" background-color: powderblue>';
    
        echo '<td><p> Given enough physical activity you can eat this much kcals   </p></td>';
        echo '<td >'.intval($kcal2).'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Calories you spend without activity </td>';
        echo '<td>'.intval($kcal).'</td>';
        echo '</tr>';
        echo '<tr>';
        echo '<td>Ideal weight</td>';
       
        if((intval($kg) == intval($cm - 100 - (( $cm - 150) /2.5)) && ($_POST['spol'] == 'Z')) || (intval($kg) == intval($cm - 100 - (( $cm - 150) /4)) && ($_POST['spol'] == 'M'))){
         echo '<td><img src="slike/kvacica.png" height="35" width="35" style="border-radius: 8px;"></td>';
        }
        else{
        echo '<td>'.intval($tez).' kg</td>';
        }
        echo '</tr>';
        echo '</table>';

        echo '</div>';
        echo '<p align="center"> Note: calorie data refers to the daily dose.</p>';
        echo '<br>';
        echo '<br>';
        echo '<div class="container">';
        echo ' <input type="button" class="btn btn-success btn-lg" name="Print" id="printbutton" value="Print" onclick="window.print()">';
        echo '<hr>';
        echo '</div>';
       
    }
    
    
}
?>
            </body>
</html>