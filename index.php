<?php
  declare(strict_types = 1);
  include "includes\class-autoload.inc.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
   <body>
    
       <form action="includes\calc.inc.php" method="post">
           <p>My Own Calculator</p>
           <input type="number" name="first" placeholder="First Number">
           <select name="oper" id="">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="div">Division</option>
                <option value="mul">Multiplication</option>
           </select>
           <input type="number" name="num2" placeholder="Second number">
           <button type="submit" name="submit">Calculate</button>
       </form>

   </body>
</html>