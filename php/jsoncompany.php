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
  $companyid= $_GET['companyid'];
  $result = mysql_query("select * from company c join company_role_summary crs on (c.companyid = crs.companyid) join company_role cr on (cr.crsid = crs.crsid) where crs.cvid =$cvid and c.companyid=$companyid");         
  $resultSet = array();
while($row = mysql_fetch_assoc($result))
{
    $resultSet[] = $row;
}
echo json_encode($resultSet);
?>