<?php


$SERVER="";

$Connectioninfo=array('Database'=>'Northwind',"UID"=>"cesar","PWD"=>"");
$link = sqlsrv_connect($SERVER,$Connectioninfo);

class DBConnection{

function changeConnection($server,$ConnectionDetails){
  $SERVER=$server;
  $Connectioninfo=$ConnectionDetails;
  $link = sqlsrv_connect($SERVER,$Connectioninfo);
  if( $link ) {

       return True;
     }

     else{
          echo "Connection not successful or Username not found or password is invalid<br />";


     }}





function connect($SERVER,$Connectioninfo,$link){

if( $link ) {
     echo "";
   }
   else{
        echo "Connection could not be established.<br />";
        die( print_r( sqlsrv_errors(), true));

   }}
}
?>
