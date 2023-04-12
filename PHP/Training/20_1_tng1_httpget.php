<?php
$array_get = $_GET;

$array = array("id"=>"아이디", "pw"=>"비밀번호", "name"=>"이름", "birth_date"=>"생일");

foreach($array_get as $key=>$value)
{
echo $array[$key]." : ".$value."</br>";
}

?>