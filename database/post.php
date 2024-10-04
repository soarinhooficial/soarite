<?php

function findPostDb($conn, $id)
{
	$id = mysqli_real_escape_string($conn, $id);
	$post;

	$sql = "SELECT * FROM posts  WHERE id = ?";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql))
		exit('SQL error');

	mysqli_stmt_bind_param($stmt, 'i', $id);
	mysqli_stmt_execute($stmt);

	$post = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

	mysqli_close($conn);
	return $post;
}

function createPostDb($conn, $image, $title, $text)
{
	$image = mysqli_real_escape_string($conn, $image);
	$title = mysqli_real_escape_string($conn,  $title);
	$text = mysqli_real_escape_string($conn,  $text);

	if ($image && $title && $text) {
		$sql = "INSERT INTO posts (image, title, text) VALUES (?, ?, ?)";
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'sss', $image, $title, $text);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function readPostDb($conn)
{
	$posts = [];

	$sql = "SELECT * FROM posts";
	$result = mysqli_query($conn, $sql);

	$result_check = mysqli_num_rows($result);

	if ($result_check > 0)
		$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_close($conn);
	return $posts;
}

function updatePostDb($conn, $id, $image, $title, $text)
{
	if ($id && $image && $title && $text) {
		$sql = "UPDATE posts SET image = ?, title = ?, text = ? WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'sssi', $image, $title, $text, $id);
		mysqli_stmt_execute($stmt);
		mysqli_close($conn);
		return true;
	}
}

function deletePostDb($conn, $id)
{
	$id = mysqli_real_escape_string($conn, $id);

	if ($id) {
		$sql = "DELETE FROM posts WHERE id = ?";
		$stmt = mysqli_stmt_init($conn);

		if (!mysqli_stmt_prepare($stmt, $sql))
			exit('SQL error');

		mysqli_stmt_bind_param($stmt, 'i', $id);
		mysqli_stmt_execute($stmt);
		return true;
	}
}
