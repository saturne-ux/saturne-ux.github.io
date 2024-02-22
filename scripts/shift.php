<?php
$hote= 'mysql4.yulpa.io';
$login= '135167_patedefr';
$mdp = 'jcivVjkgfChn';
$bd = '135167_patedefr';

if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){ 
					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];}
				elseif(isset($_SERVER['HTTP_CLIENT_IP'])){
					$ip = $_SERVER['HTTP_CLIENT_IP'];}
				else{ $ip = $_SERVER['REMOTE_USER'];}
				
$iphash = substr(md5($ip), 7, 22);
$mail = 's.ternoir@gmail.com';
$nrow = "<br />\r\n";
$utilisateur = $_SERVER['PHP_AUTH_USER'];
$agent = $_SERVER['HTTP_USER_AGENT'];
			
$blacklist = array('66f74184ddc95ea973810d', 'd6dff7e2e47b3e8a8b85eb', 'c52b4756a07e6f1fedbaba', '21834e15213050d8844283', '4e658f98e521d09125f878', '639226ce15594ef02c62b9', '7eb94d5087ee49beeec12d', '8d99e82c16f7aeb7526eae', '9cc6bbc6de647cd37bcc9c', 'c9c2d02d219b4a72366922', 'beec1ce5bb597c3e98c138', '2eac2a918ee64b95cf69ad', '92fe129b14a7dcd886e521', '3c30d51e266afc41996f37', 'a227a37187be835d2cfb8c', 'ce4761120830efb1496511', 'edba59687ff6d21fa0b1ee', '12a01fae28fd5cbee21cdb', '0c7c3e5995d86995d0bdd6', 'f90df730298a877100f87d', '85fe571c7e42db052c2429', '58e2f05cff68da539b5f6f', '3e7b74145462e64f850ad6', 'f8ab153bc6feecb618e2b5', '8186c2215a045e4b81efa7', 'a3c392c34a497ab63c3b6e', '965555dddbd7ba6d47fdf0', '1c84b31b8a59eea9842633', '13809435144c8003c63643', '72ff556903386362246fa6', '929338d506411883b23514', 'c10f6ac06b1d7fd09320fa', '6171bc5221baae9982de48', '8b782cf19dbcfc855101dc', '8177abfcaf8b72b4b63a72', 'aee43a8cb6d85f294b2f9e', '6734721aa18680581cc206', '29f0cbc23385b97008ffcf', '9857bc253ada43cce5bf2d', 'd42dba803cd80579807f74', '212d3de7d6a8f791c98691', 'd8787efb15c871497b1fd2', '2ed35b28e7e846cf0af4e9', 'a01a4cbd85222886827e76', '94532020b3775e77220e8c', '7b0ca0aa7708d1efadbd2b', '1def6d1cba5fda5dc21e2b', '4879761431f24b680d9ba5', 'e044430c95ea4736d75220', '92166cf53b1507bc5990d4', 'd719a2fa435dc9529ae39b', '5c42fa74b40d8e7fad68d5', 'c4b061cf80fc0de10c4cde', '23f2931d596f89e55efd61', '245f80c0b31f4d476dbf40', 'f3ed664f26e420fafd8ea7', 'db0684371e84e64568d350', '49087d13f83142d75a8006', 'e6b62e538eb0ca11e6a2bd', '4762623988933ce46c94b9', '63544912cf496495eb12a7', '06ac0d9484dde0e8737ea0', 'a05cbd828649cb9a1cb31d', '2ed35b28e7e846cf0af4e9', '6e00f955b8d05b7a908116', '5be3d5bab599ea472712e9', '18e91a1c8df4890016ac34', '02f91368e6fe99114c85ee', '109afca1d30a39bd80db68', 'de20319f69a020f46ebd69', 'b29138a8836f8bae002756', 'cdcff5a97c0c17c6737dba', '9b06022be5fbfb6ce18e9c');

?>