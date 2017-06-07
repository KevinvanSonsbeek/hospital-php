<?php

//Create
function createPatient()
{
	$patient_name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
	$patient_status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null;
	$patient_gender = isset($_POST['patient_gender']) ? $_POST['patient_gender'] : null;
	$species_id = isset($_POST['species_id']) ? $_POST['species_id'] : null;
	$client_id = isset($_POST['client_id']) ? $_POST['client_id'] : null;
	
	if (strlen($patient_name) == 0 || strlen($patient_status) == 0 || strlen($patient_gender) == 0 || strlen($species_id) == 0 || strlen($client_id) == 0 ) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, patient_status, patient_gender, species_id, client_id) VALUES (:patient_name, :patient_status, :patient_gender, :species_id, :client_id)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_name' => $patient_name,
		':patient_status' => $patient_status,
		':patient_gender' => $patient_gender,
		':species_id' => $species_id,
		':client_id' => $client_id));

	$db = null;
	
	return true;
}

//Read
function getAllPatients()
{
	$db = openDatabaseConnection();

	$sql = "
	SELECT patients.patient_id, patients.patient_name, patients.patient_status, patients.patient_gender, species.species_description, clients.client_firstname, clients.client_lastname
	FROM patients
	INNER JOIN species ON patients.species_id = species.species_id
	INNER JOIN clients ON patients.client_id = clients.client_id
	";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getPatient($id)
{
	$db = openDatabaseConnection();

	$sql = "
	SELECT patients.patient_id, patients.patient_name, patients.patient_status, patients.patient_gender, species.species_description, clients.client_firstname, clients.client_lastname
	FROM patients
	INNER JOIN species ON patients.species_id = species.species_id
	INNER JOIN clients ON patients.client_id = clients.client_id
	WHERE patients.patient_id = :id
	";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetchAll();
}

//Update
function editPatient()
{
	$patient_id = isset($_POST['patient_id']) ? $_POST['patient_id'] : null;
	$patient_name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
	$patient_status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null;
	$patient_gender = isset($_POST['patient_gender']) ? $_POST['patient_gender'] : null;
	$species_id = isset($_POST['species_id']) ? $_POST['species_id'] : null;
	$client_id = isset($_POST['client_id']) ? $_POST['client_id'] : null;
	
	if (strlen($patient_id) == 0 || strlen($patient_name) == 0 || strlen($patient_status) == 0 || strlen($patient_gender) == 0 || strlen($species_id) == 0 || strlen($client_id) == 0 ) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = :patient_name, patient_status = :patient_status, patient_gender = :patient_gender, species_id = :species_id, client_id = :client_id WHERE patient_id = :patient_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_name' => $patient_name,
		':patient_status' => $patient_status,
		':patient_gender' => $patient_gender,
		':species_id' => $species_id,
		':client_id' => $client_id,
		':patient_id' => $patient_id));

	$db = null;
	
	return true;
}

//Delete
function deletePatient($id = null)
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}