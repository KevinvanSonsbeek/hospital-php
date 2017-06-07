<?php

require (ROOT . "model/PatientsModel.php");
require (ROOT . "model/SpeciesModel.php");
require (ROOT . "model/ClientsModel.php");

//Create
function create()
{
	render("patients/create",
		array("required" =>
			array(
				'species' => getAllSpecies(),
				'clients' => getAllClients()
				)
			)
		);
}

function createSave()
{
	if (!createPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "patients/index");
}

//Read
function index()
{
	render("patients/index", array(
		'patients' => getAllPatients()
		));
}

//Update
function edit($id)
{
	render("patients/edit", 
		array("required" =>
			array(
				'species' => getAllSpecies(),
				'clients' => getAllClients(),
				'patient' => getPatient($id)
				)
			)
		);
}

function editSave()
{
	if (!editPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "patients/index");
}

//Delete
function delete($id)
{
	render("patients/delete", 
		array(
		'patient' => getPatient($id)	
		)
	);
}

function deleteSave($id)
{
	if (!deletePatient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "patients/index");
}