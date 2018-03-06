
<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>


</style>
</head>


<?php
 session_start();
include '../Buinesslayer.php';
$msg = '';
$var=3;
$connection= '';
            echo "<body>";
           if (!empty($_POST['username'])
              && !empty($_POST['password'])) {

                  $username = $_POST['username'];
                  $password =  $_POST['password'];
                  $sessionVd=  True;
        try{
                  $authUserLogin=array('Database'=>'Northwind',"UID"=>$username,"PWD"=>  $password);
                  $authencationCheck=$DBConnect->changeConnection($SERVER,$authUserLogin);
                  $retriveData = new Retrive();
                  if( $username=='User_CEO' && $authencationCheck==true ){
                     echo '<div class="container"><div class="row">';
                     echo '<p> Welcome ' .$username. '</br></p>';
                  $retriveData->getEmployeeName($Connectioninfo,$link);
                  $retriveData->getCustom($Connectioninfo,$link);
                  $retriveData->Orders($Connectioninfo,$link);

                  }
                elseif($username=='User_HR' &&  $authencationCheck==true){
                   echo '<p> Welcome ' .$username. '</br></p>';
                  $retriveData->getEmployeeName($Connectioninfo,$link);
                 } elseif($username=='User_Sales' &&  $authencationCheck==true){
                   echo '<p> Welcome ' .$username. '</br></p>';
                  $retriveData->getCustom($Connectioninfo,$link);
                  $retriveData->Orders($Connectioninfo,$link);
                  echo '</div></div>';
                }else{

                }
}              catch(Expection $e){
              echo 'Login Failed ';
}
finally{
  //sqlsrv($link);
}


              }else {

                 $msg = 'Empty field was detected please try again';
                  echo $msg;
              }

        echo "</body>";  ?>
