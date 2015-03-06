<?php
require_once "Z_BAPI_REQUISITION_RELEASE_GEN_SRV_Entities.php";
//connect
$OData = new Z_BAPI_REQUISITION_RELEASE_GEN_SRV_Entities('http://192.168.1.138:8008/sap/opu/odata/sap/Z_BAPI_REQUISITION_RELEASE_GEN_SRV/')
;
$OData->Credential = new WindowsCredential($_POST["name"],$_POST["pwd"]);

try{
$OData->addHeader('X-Request-With', 'XMLHttpRequest');
//$proxy->addHeader('X-Request-With', 'XMLHttpRequest');
//$query = new DataServiceQuery('numberSet', $proxy)
//->Filter("Number eq '0010008026'")
//->Expand();
$response = $OData->numberSet()->Filter('Number eq  $_POST["number"]' )->Execute();
$result = $response->Result;

//output
//echo $result;




foreach ($result as $resultx ){








 // settype($result[$resultx],"string");
foreach ($resultx as $v){
echo ("requestion:" .  $v. "<br/>");
 
}}
}
catch(DataServiceRequestException $exception)
{
echo $exception->Response->getError();
}
?>