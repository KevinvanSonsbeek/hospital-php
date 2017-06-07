<?php

require (ROOT . "model/ClientsModel.php");

//Create part
function create()
{
	render("clients/create");
}

function createSave()
{
	if (!createClient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "clients/index");
}

//Read
function index()
{
	render("clients/index", array(
		'clients' => getAllClients()
	));
}

//Update
function edit($id)
{
	render("clients/edit", array(
		'client' => getClient($id)
	));
}

function editSave()
{
	if (!editClient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "clients/index");
}

//Delete
function delete($id)
{
	render("clients/delete", array(
		'client' => getClient($id)
	));
}

function deleteSave($id)
{
	if (!deleteClient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "clients/index");
}