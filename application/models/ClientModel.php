<?php
/**
 * Created by PhpStorm.
 * User: Clement
 * Date: 03/05/2019
 * Time: 11:07
 */
require_once 'WSSoapClient.php';

class ClientModel extends CI_Model
{

	public function login($id, $name)
	{
		$result = $this->callUser($id);
		if ($result->userDetail->nomSiteClient == $name) {
			$_SESSION['id'] = $id;
			if (isset($result->userDetail->listeProduit)) {
				$_SESSION['product'] = $result->userDetail->listeProduit;
			} else {
				$_SESSION['product'] = null;
			}
			$_SESSION['name_full'] = $result->userDetail->nomSiteClient;
			$_SESSION['name'] = $result->userDetail->nom;
			$_SESSION['address1'] = $result->userDetail->adresse1;
			$_SESSION['address2'] = $result->userDetail->adresse2;
			$_SESSION['postCode'] = $result->userDetail->codePostal;
			$_SESSION['family'] = $result->userDetail->famille;
			$_SESSION['ville'] = $result->userDetail->ville_1;
			if(isset($result->userDetail->telContact))
			{
				$_SESSION['phone'] = $result->userDetail->telContact;
			} else {
				$_SESSION['phone'] = null;
			}
			return true;
		} else {
			return false;
		}
	}
	public function getResponsableClient()
	{
		$result = $this->callResponsable();
		$result = trim($result, '"');
		$getInfo =$this->callUser($result);
		$_SESSION['responsable']['nom'] = $getInfo->userDetail->nom;
		$_SESSION['responsable']['prenom'] = $getInfo->userDetail->prenom;
		$_SESSION['responsable']['mail'] = $getInfo->userDetail->mailContact;
		$_SESSION['responsable']['civilite'] = $getInfo->userDetail->civilite;
		return $_SESSION['responsable'];

	}

	private function callUser($id)
	{
		$options = array(
			'userName' => $id
		);

		$client = new SoapClient("https://my.sequoiasoft.com/akuiteo/WS/UtilisateurWS?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE, 'trace'=> 1 ));
		$client->__setSoapHeaders(Array(new WsseAuthHeader("portailSQS", "Clément2019")));
		return $result = $client->loadUserDetail($options);

	}

	private function callResponsable()
	{
		$options = array(
			'arg0' => $_SESSION['id']
		);
		$client = new SoapClient("https://my.sequoiasoft.com/akuiteo/WS/ClientWS?wsdl", array('cache_wsdl' => WSDL_CACHE_NONE, 'trace'=> 1 ));
		$client->__setSoapHeaders(Array(new WsseAuthHeader("portailSQS", "Clément2019")));
		$result = $client->getResponsableClient($options);
		return $result->return;
	}
}
