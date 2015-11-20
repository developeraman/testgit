<?php 
$test = array('sub0'=>0,'sub1'=>1);
$testvar = implode(',',$test);
echo $query="SELECT * FROM subject WHERE subcategory_id=".$subcategory_id." AND  subject_status=1 NOT IN".$testvar;

?>

<form action="" method="GET">
<input type="hidden" id="uri" name="uri" 
value="http://api.championstravelonline.com/category/" style="width: 
500px;">
<input type="hidden" id="cust" name="cust" value="KQA+9L+hlyFQvGXccNhx7ftnug0SlumbaeCfgcrXPNB9+8WZs6aeDRdJ+/7ZroWsEJYHyW/CS3Q=">
<p><label>Format:</label><input type="text" id="format" name="format" value="json"></p>
<p><label>Category:</label><input type="text" 
id="category" name="category" value=""></p>
<p><input type="submit" value="Submit"></p>
</form>

<?php
if($_GET) {
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
   // exit;
    $uri=$_GET['uri'];
$format=$_GET['format'];
$cust=urlencode($_GET['cust']);
$cat=$_GET['category'];

$url = "$uri?format=$format&cust=$cust";

if($cat!="") {
$url .= "&category=$cat";
}

$content = file_get_contents($url);
echo "<pre>";
print_r($content);
echo "</pre>";
echo $content;
exit;

if($format=="json") {
    $json = json_decode($content,TRUE);
    
    if(!$json['posts'])	
  {
echo	
  "<p>There	is	a	problem<p>";
echo	
  $content;
  }
  else	
  {

echo	
  "|category|<br";
foreach($json['posts']	as $item)	
  {
echo	
  $item['category'].	"<br/>";
  }
}	
 } elseif($format=="xml")	
  {
echo	
  $content;
  }

else	
  {
echo	
  $content;
}	
  	
  	

} 






















// Get cURL resource
/*$curl = curl_init();
//$params=['format'=>'json', 'cust'=>'KQA%2B9L%2BhlyFQvGXccNhx7ftnug0SlumbaeCfgcrXPNB9%2B8WZs6aeDRdJ%2B%2F7ZroWsEJYHyW%2FCS3Q%3D', 'category'=>'soccer'];
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://api.championstravelonline.com/events/?format=json&cust=KQA%2B9L%2BhlyFQvGXccNhx7ftnug0SlumbaeCfgcrXPNB9%2B8WZs6aeDRdJ%2B%2F7ZroWsEJYHyW%2FCS3Q%3D&category=soccer',

    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
$json = json_decode($resp,TRUE);
echo "<pre>";
print_r($json['posts']);
echo "</pre>";
exit;
foreach($json['posts'] as $item) {
echo "|" . $item['category'] . " | " . $item['name'] . " | " . $item['eventid'] . " | " . $item['eventdate'] . " | " . $item['hometeam'] . " | " . $item['awayteam'] . " | " . $item['venue'] . " | " . "<br />";
}  
//exit;
curl_close($curl); */
?>