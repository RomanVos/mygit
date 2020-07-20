<?php
function get_all()
{
	global $connect;
	$query = "SELECT title, description, id FROM posts";
	$res = mysqli_query($connect, $query);

	$arr_res = array();
	while($row = mysqli_fetch_assoc($res)){
		$arr_res[] = $row;
	}
	return $arr_res;
}

function post_category()
{
	global $connect;
	$query = "SELECT title, id FROM category";
	$res = mysqli_query($connect, $query);

	$arr_res = array();
	while($row = mysqli_fetch_assoc($res)){
		$arr_res[] = $row;
	}
	return $arr_res;
}

function get_category()
{
	global $connect;
	$query = "SELECT title, description, category, id FROM posts";
	$res = mysqli_query($connect, $query);

	$arr_res = array();
	while($row = mysqli_fetch_assoc($res)){
		$arr_res[] = $row;
	}
	return $arr_res;
}

function post()
{
	global $connect;
	$query = "SELECT title, `text` FROM posts WHERE id=$_GET[id]";
	$res = mysqli_query($connect, $query);

	$arr_res = array();
	while($row = mysqli_fetch_assoc($res)){
		$arr_res[] = $row;
	}
	return $arr_res;
}

function get_cat()
{
	global $connect;
	$query = "SELECT title, description, id FROM posts WHERE category=$_GET[category]";
	$res = mysqli_query($connect, $query);
	$arr_cat = array();
	while($row = mysqli_fetch_assoc($res)){
		$arr_cat[] = $row;
	}
	return $arr_cat;
}