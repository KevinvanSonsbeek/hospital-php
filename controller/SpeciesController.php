<?php

require (ROOT . "model/SpeciesModel.php");

function index()
{
	render("species/index", array(
		'species' => getAllSpecies()
	));
}

//Create part
function create()
{
	render("species/create");
}

function createSave()
{
	if (!createSpecies()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "species/index");
}
//Update/Edit part
function edit($id)
{
	render("species/edit", array(
		'species' => getSpecimen($id)
	));
}

function editSave()
{
	if (!editSpecies()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "species/index");
}
//Delete part
function delete($id)
{
	render("species/delete", array(
		'species' => getSpecimen($id)
	));
}

function deleteSave($id)
{
	if (!deleteSpecies($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "species/index");
}
