<?php 

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
//rosshami_php2
  
#Include the connect.php file

include('connect.php');
  
  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  
  
  
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);
  
  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  
  $skilltype = $_GET['skilltype'];
  $result = mysql_query("SELECT statement FROM keyskill where cvid=1 and skilltype=$skilltype");          //query

  $resultSet = array();
while($row = mysql_fetch_assoc($result))
{
    $resultSet[] = $row;
}
echo json_encode($resultSet);
?>