<?php include"includes/header.php";
      include"class/calculator.class.php";
?>




<?php
$cols = 11;
$rows = 11;
echo "<table class='multiply' border=\"1\">";
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

// DIVISION TABLE

$colsdivide = 101;
$rowsdivide = 10;

echo "<table class='divide' border=\"1\"";


for ($y = 1; $y < $rowsdivide; $y++){
             
            echo'<tr>';

            for ($t = 1; $t < $colsdivide; $t++){
                  if($t % $y == 0) {
                    if($y != 1){ 
                        
                echo "<form method='POST' action='includes/calculator.php'>";
                
                echo "<td><button type='submit' value='$t,$operatorDivide,$y' name='submit'>$t / $y</button></td>";
                
                echo "</form>";
                    }
                }
            }
           echo '</tr>'; 
            
        }

echo "</table>";

?>


<!--error handling messages-->

<?php

    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if(strpos($fullUrl, "multiply=success") == true){
        echo "Operation successfully stored. </br>";
    // php script that echoes the values stored (not directly from the database)
        if(isset($_GET['factor1'], $_GET['factor2'], $_GET['operator'], $_GET['store'], $_GET['mysql_datetime'])){
            $factor1 = $_GET['factor1'];
            $factor2 = $_GET['factor2'];
            $operator = $_GET['operator'];
            $store = $_GET['store'];
            $mysql_datetime = $_GET['mysql_datetime'];
            
            echo "On this date $mysql_datetime an operatio was performed and this data was stored $factor1 $operator $factor2 = $store";
            exit();
}

    } elseif(strpos($fullUrl, "multiply=error") == true){
        echo "There was an error when submitting the form, try again.";
        exit();
        } elseif(strpos($fullUrl, "sql=error") == true){
            echo "The operation wasn't stored, something went wrong.";
            exit();
        }

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
    
   
    //  if($operator == "+"){
    //      $store = $result-> add();
    // } elseif($operator == "-") {
    //      $store = $result-> subtract();
    // } elseif($operator == "*"){
    //      $store = $result-> multiply();
    // } elseif($operator == "/"){
    //      $store = $result-> divide();
    // }
    // if(empty($store)){
    //     echo "empty";
    // };
    // echo $store;
    
    // var_dump($operator);

    
    // checking date values
//     date_default_timezone_set("Europe/Sarajevo");
//     $timestamp = time();
//     echo strftime("the date today is %Y/%m/%d %H/%M/%S");

    // date_default_timezone_set("Europe/Sarajevo");
    // $timestamp = time();
    // echo strftime("the date today is %Y/%m/%d %H/%M/%S");

?>


<?php include"includes/footer.php" ?>
