<?php
function GetCourses() {
	$database = Database::get();
	$course=array();
	$database->queryFunc(
	                    'SELECT title FROM course',
						function($row) use (&$courses) {$courses[]=$row;}
	                      );
	echo json_encode($courses);
}
function PostCourses() {
    echo 'POST';
}
function DeleteCourses() {
    echo 'DELETE';
}
?>