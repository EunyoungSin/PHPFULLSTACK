<?php
$array_post = $_POST;

$array = array("id"=>"아이디", "pw"=>"비밀번호", "name"=>"이름", "birth_date"=>"생일", "h_page"=>"히든값");

foreach($array_post as $key=>$value)
{
echo $array[$key]." : ".$value."</br>";
}

?>