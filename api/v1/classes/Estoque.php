<?php

	class Estoque
	{
		public function mostrar()
		/* {
			$con = new PDO('mysql: host=locahost; dbname=filial;','root','');

			$sql = "SELECT * FROM estoque ORDER BY id ASC";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultados = array();

			while($row = $sql->fetch(PDO::FETCH_ASSOC)) {
				$resultados[] = $row;
			}

			if (!$resultados) {
				throw new Exception("Nenhum pruduto no estoque!");
			}
			
			return $resultados;
		}
 */{
$ldapconfig['host']= '00.000.000.000'; //AD-001
$ldapconfig['port']= '000'; //Porta Padrão
$ldapconfig['dn'] = "";
$domain= 'localhost';
$username = 'user';
$password = 'password';

//Faz conexão com AD usando LDAP
$sn= ldap_connect($ldapconfig['host'], $ldapconfig['port']);
ldap_set_option($sn, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($sn, LDAP_OPT_REFERRALS, 0);

@$bind=ldap_bind($sn, $username .'@'.$domain, $password);

$filter = "(sAMAccountName=*)";
$attributes = array('name', 'sAMAccountName', 'memberOf', 'dn','lastLogon','whenCreated');
$search = ldap_search($sn,'DC=Coplan, DC=local', $filter,$attributes); 



	/* 	if ($key == 'count') {
		continue;
	}
	$resultados[] = $value; */
/* 
foreach ($data AS $key => $value){

echo @$value["name"][0]."<br>";

echo @$value["memberof"][0]."<br>";
echo @$value["dn"][0]."<br>";
echo @$value["lastlogon"][0]."<br>";
json_encode($value);
 */
  /* $arquivo = 'data.json';
  $json = json_encode($data);
  $file = fopen(__DIR__.'/'.$arquivo, 'w+');
  fwrite($file, $json);
  fclose($file); */

	
}
	}