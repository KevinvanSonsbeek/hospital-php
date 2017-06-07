<?php

//Create
function createSpecies() 
{
	$species_description = isset($_POST['species_description']) ? $_POST['species_description'] : null;
	
	if (strlen($species_description) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO species(species_description) VALUES (:species_description)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':species_description' => $species_description));

	$db = null;
	
	return true;
}

//Read
function getAllSpecies()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getSpecimen($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

//Update
function editSpecies()
{
	$species_id = isset($_POST['species_id']) ? $_POST['species_id'] : null;
	$species_description = isset($_POST['species_description']) ? $_POST['species_description'] : null;
	
	if (strlen($species_id) == 0 || strlen($species_description) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE species SET species_description = :species_description WHERE species_id = :species_id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':species_id' => $species_id,
		':species_description' => $species_description));

	$db = null;
	
	return true;
}

//Delete
function deleteSpecies($id = null) 
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