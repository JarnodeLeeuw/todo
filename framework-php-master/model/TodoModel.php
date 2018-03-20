<?php

function getList($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM lists WHERE list_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllLists() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM lists";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}


function editLists() 
{
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	$list = isset($_POST['list']) ? $_POST['list'] : null;
	


	if (strlen($list) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE lists SET list_name = :list WHERE list_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id,
		':list' => $list));

	$db = null;
	
	return true;
}

function deleteList($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM lists WHERE list_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createList() 
{
	$patient = isset($_POST['patient']) ? $_POST['patient'] : null;
	
	if (strlen($list) == 0){
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO lists(list_name) VALUES (:list)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':list' => $list));

	$db = null;
	
	return true;
}
