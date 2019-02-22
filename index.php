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
    
        for ($r = 1; $r < $rows; $r++){
            
            echo'<tr>';

            for ($c = 1; $c < $cols; $c++){
                echo "<form method='POST' action='includes/calculator.php'>";
                
                echo "<td><button type='submit' value='$c,$operatorMultiply,$r' name='submit'>$c x $r</button></td>";
                
                echo "</form>";
            }
           
           echo '</tr>'; 

        }

echo "</table>";

?>



<!--SCRIPT TO CHECK VALUE-->
   <script type="text/javascript">
// $("button[name='submit']").click(function(){
// alert(this.value);
// });
 </script>

<?php
//  ===== CODE FOR CHECKING VALUES =====
   
    // $myString = $_POST['submit'];
    // $myArray = explode(',', $myString);
    // print_r($myArray);
    
    
    
    // $factor1 = $myArray[0];
    // $factor2 = $myArray[2];
    // $operator = $myArray[1]; 
    // $result = new Calculate($factor1, $factor2);
    
   
    //  if(isset($operator) == "*"){
    //      $store = $result-> multiply();
    // } elseif(isset($operator) == "-") {
    //      $store = $result-> subtract();
    // } elseif(isset($operator) == "+"){
    //      $store = $result-> add();
    // } elseif(isset($operator) == "/"){
    //      $store = $result-> divide();
    // }
    // if(empty($store)){
    //     echo "empty";
    // };
    // echo $store;

    
    // checking date values
//     date_default_timezone_set("Europe/Sarajevo");
//     $timestamp = time();
//     echo strftime("the date today is %Y/%m/%d %H/%M/%S");

    // date_default_timezone_set("Europe/Sarajevo");
    // $timestamp = time();
    // echo strftime("the date today is %Y/%m/%d %H/%M/%S");

?>


<?php include"includes/footer.php" ?>
