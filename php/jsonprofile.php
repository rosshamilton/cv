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
  
  $cvid = $_GET['cvid'];
  $result = mysql_query("SELECT * FROM profile where cvid=$cvid");          //query

  $resultSet = array();
while($row = mysql_fetch_assoc($result))
{
    $resultSet[] = $row;
}
echo json_encode($resultSet);
?>