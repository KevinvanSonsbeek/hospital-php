<?php
//Read
function getAllClients()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getClient($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients WHERE client_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}
//Create
function createClient() 
{
	$client_firstname = isset($_POST['client_firstname']) ? $_POST['client_firstname'] : null;
	$client_lastname = isset($_POST['client_lastname']) ? $_POST['client_lastname'] : null;
	$client_email = isset($_POST['client_email']) ? $_POST['client_email'] : null;
	$client_phonenumber = isset($_POST['client_phonenumber']) ? $_POST['client_phonenumber'] : null;
	
	if (strlen($client_firstname) == 0 || strlen($client_lastname) == 0 || strlen($client_email) == 0 || strlen($client_phonenumber) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients(client_firstname, client_lastname, client_email, client_phonenumber) VALUES (:client_firstname, :client_lastname, :client_email, :client_phonenumber)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':client_firstname' => $client_firstname,
		':client_lastname' => $client_lastname,
		':client_email' => $client_email,
		':client_phonenumber' => $client_phonenumber));

	$db = null;
	
	return true;
}
//Edit
function editClient()
{
	$species_id = isset($_POST['species_id']) ? $_POST['species_id'] : null;
	
	
	if (strlen($species_id) == 0 || strlen($species_description) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE clients SET client_firstname = :client_firstname, client_lastname = :client_lastname, client_email = :client_email, client_phonenumber = :client_phonenumber WHERE client_id = :client_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':client_id' => $client_id,
		':client_firstname' => $client_firstname,
		':client_lastname' => $client_lastname,
		':client_email' => $client_email,
		':client_phonenumber' => $client_phonenumber));

	$db = null;
	
	return true;
}
//Delete
function deleteClient($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}