<!DOCTYPE html>
<html>
  
<body>
    <center>
        <h1>Jadual Sifir </h1>
  
  
        <form method="POST">
        <label for="number">Select a number:</label>
        <input type="number" name="number" id="number">

  <button type="submit" name="submit">Submit</button>
        </form>
    </center>
</body>
  
</html>
  
<?php
if($_POST) {
    $num = $_POST["number"];
  
    echo nl2br("<p style='text-align: center;'>
        Multiplication Table of $num: </p>
    ");
          
    for ($i = 1; $i <= 10; $i++) {
        echo ("<p style='text-align: center;'>$num"
            . " X " . "$i" . " = " 
            . $num * $i . "</p>
        ");
    }
}
?>