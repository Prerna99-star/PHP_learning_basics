<html>
<head>
<meta charset = "UTF-8">
<title></title>
</head>

<body>
  <form>
  <input type ="text" name = "num1" placeholder = "Number 1">
  <input type ="text" name = "num2" placeholder = "Number 2">
  <select name = "operator">
     <option>None</option>
     <option>Add</option>
     <option>Subtract</option>
     <option>Multiply</option>
     <option>Devide</option>
     <option>Modulus</option>
  </select>
  <br>
  <button type="submit" name="submit" value="submit">Calculate</button>
  </form>
  <p> The Answer is: </p>
  <?php
      if(isset($_GET['submit'])){
          $result1 = $_GET['num1'];
          $result2 = $_GET['num2'];
          $operator = $_GET['operator'];
          switch($operator){
              case "None":
                echo "you need to select!";
              break;
              case "Add":
                echo $result1 + $result2;
              break;
              case "Subtract":
                echo  $result1 - $result2;
              break;
              case "Multiply":
                echo  $result1 * $result2;
              break;
              case "Devide":
                echo  $result1 / $result2;
              break;
              case "Modulus":
                echo  $result1 % $result2;
              break;
              default:
              echo "ERROR"; 
          }
      }
  ?>
</body>

</html>