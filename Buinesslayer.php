<!DOCTYPE html>
<html>
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
</head>
</html>
<?php

include 'includes/DBconnection.php';

$DBConnect = new DBConnection();
$DBConnect->connect($SERVER,$Connectioninfo,$link);
if( isset($_POST['Selection'])){
$var = $_POST['Selection'];
}
else{
  $var=3;
}
class Retrive {

  function getEmployeeName($Connectioninfo,$link){
    $tsql= "SELECT FirstName FROM dbo.Employees ";
    $getEmplName=sqlsrv_query($link,$tsql);
    if($getEmplName){
      echo ' <div class="col-sm"><h3>EmployeeNames</h3>';
    while( $row = sqlsrv_fetch_array( $getEmplName, SQLSRV_FETCH_NUMERIC))
    {

        echo $row[0]. '</br>';

    }echo '</div>';
  }
}

function getCustom($Connectioninfo,$link){
  $sqlst1 = "SELECT CustomerID FROM dbo.Customers ";
  $getCustomer=sqlsrv_query($link,$sqlst1);
  if($getCustomer){
    echo ' <div class="col-sm"><h2>Customers</h2>';
    while( $row = sqlsrv_fetch_array( $getCustomer, SQLSRV_FETCH_NUMERIC))
  {
      echo $row[0]. '</br>';
  }
echo '</div>';
}

}
function Orders($Connectioninfo,$link){
$sqlst2 = "SELECT OrderID FROM dbo.Orders";
$getOrder = sqlsrv_query($link,$sqlst2);
if($getOrder){
  echo '<div class="col-sm"><h2>Orders </h2>';

while( $row = sqlsrv_fetch_array( $getOrder, SQLSRV_FETCH_NUMERIC))
{
    echo $row[0]. '</br>';
}echo '</div>';
}

}

  function getCustomers($var,$Connectioninfo,$link){
    $tsql= "SELECT ContactName FROM dbo.Customers";
    $getCustmrs=sqlsrv_query($link,$tsql);
    if($getCustmrs){
      echo "<h1> The Lastnames of the Customer</h1>";
    echo '<table class="table table-dark"><tbody><thead>';
    while( $row = sqlsrv_fetch_array( $getCustmrs, SQLSRV_FETCH_NUMERIC))
    {

        $name = trim($row[0]);
        $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
        echo "<tr><td>" .$last_name. "\n";
         echo "<br/></td> </tr>";
    }
  }
echo '  </tr>
   </thead>
   <tbody>
     </tbody>
</table>';
}

function getCstmrsnum($var,$Connectioninfo,$link){
  $tsql= "SELECT COUNT(CustomerID) FROM dbo.Customers";
  $getCustmrs=sqlsrv_query($link,$tsql);
    echo '<h1> The number of Customers is ';

  while( $row = sqlsrv_fetch_array( $getCustmrs, SQLSRV_FETCH_NUMERIC))
  {
       echo $row[0];

       echo "<br/>";

  }
  echo '</h1>';
}


}


$class =new Retrive();

if($var == 1){

$class-> getCustomers($var,$Connectioninfo,$link);

}






if($var == 2){

$class->getCstmrsnum($var,$Connectioninfo,$link);

}



?>
