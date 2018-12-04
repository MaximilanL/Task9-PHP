<?php
$year=$_POST['year'];
function getYear($year)
{
  $start = 1924;
  if ($year < $start){
    echo "<span style='color: red;'>Wrong year! Please enter the correct year starting in 1924</span>";
    return false;
  } else{ 
    echo "Year of ";
    return array(
        "Rat",
        "Bull",
        "Tiger",
        "Rabbit",
        "Dragon",
        "Snake",
        "Horse",
        "Goat / Sheep",
        "Monkey",
        "Cock",
        "Dog",
        "Pig"
    )[($year - $start) % 12];
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Task7-PHP</title>
  </head>
  <body style="padding: 2%;">
  	<p>Please, enter a year:</p>
    <form method="post" action="">
    <input type="number" name="year"> 
    <button type='submit'  class="btn btn-primary">Done</button>   
    </form>
    <?php echo getYear($year); ?>    	   
  </body>
</html>

