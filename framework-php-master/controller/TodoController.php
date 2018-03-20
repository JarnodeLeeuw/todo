<?php

require(ROOT . "model/TodoModel.php");

function index()
{
	render("todo/index", array(
		'lists' => getAllLists()
	));


}

function create()
{
	render("todo/create", array(
		'lists' => getAlllists()
		));
}

function createSave()
{
	if (!createlist()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "todo/index");
}

function edit($id)
{
	render("todo/edit", array(
		'lists' => getList($id)
	));
}

function editSave()
{
	if (!editLists()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "todo/index");
} 

function delete($id)
{
	if (!deleteList($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "todo/index");
}
