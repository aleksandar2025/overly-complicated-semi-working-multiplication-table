<?php include"includes/header.php";
      include"class/calculator.class.php";
?>




<?php
$cols = 11;
$rows = 11;
echo "<table border=\"1\">";
    // operator for later reusability
    $operatorMultiply = '*';
    $operatorAdd = "+";
    $operatorSubtract = "-";
    $operatorDivide = "/";
    // loop that echoes the entire table
    
        for ($r = 0; $r < $rows; $r++){
            
            echo'<tr>';

            for ($c = 0; $c < $cols; $c++){
                echo "<form method='POST' action='includes/calculator.php'>";
                
                echo "<td><button type='submit' value='$c, $operatorMultiply, $r' name='submit'>$c x $r</button></td>";
                
                echo "</form>";
            }
           
           echo '</tr>'; 

        }

echo "</table>";

?>

<!--script for checking values-->

<!--script to check value-->
   <script type="text/javascript">
// $("button[name='submit']").click(function(){
// alert(this.value);
// });
 </script>

<?php
//   code for checking values
   
    // $myString = $_POST['submit'];
    // $myArray = explode(',', $myString);
    // print_r($myArray);
    
    // $factor1 = $myArray[0];
    // $factor2 = $myArray[2];
    // $operator = $myArray[1]; 
    // $result = new Calculate($factor1, $factor2);
    
    // $store = $result-> multiply();
    // echo $store;
    date_default_timezone_set("Europe/Sarajevo");
   $timestamp = time();
    echo strftime("the date today is %Y/%m/%d %H/%M/%S");
?>


<?php include"includes/footer.php" ?>