<?php
include 'classes/dbc.class.php';
include 'classes/user.class.php';
$one = new user();
 echo('status='.$_POST['status']);
switch ($_POST['status']) {
    case '1':
    		if(!isset($_POST['status'])){$_POST['status']=' ';}
        	if(!isset($_POST['name'])){$_POST['name']=' ';}
        	if(!isset($_POST['surname'])){$_POST['surname']=' ';}
        	if(!isset($_POST['threename'])){$_POST['threename']=' ';}
        	if(!isset($_POST['faculty'])){$_POST['faculty']=' ';}
        	if(!isset($_POST['speciality'])){$_POST['speciality']=' ';}
        	if(!isset($_POST['group'])){$_POST['group']=' ';}
        	if(!isset($_POST['gender'])){$_POST['gender']=' ';}
        	if(!isset($_POST['burn'])){$_POST['burn']='1111-11-11';}
        $one->AddUser(
        	$_POST['status'],
        	$_POST['name'],
        	$_POST['surname'],
        	$_POST['threename'],
        	$_POST['faculty'],
        	$_POST['speciality'],
        	$_POST['group'],
        	$_POST['gender'],
        	$_POST['burn']);
echo "Student is added";
        break;
    case '2':
    		if(!isset($_POST['status'])){$_POST['status']=' ';}
        	if(!isset($_POST['name'])){$_POST['name']=' ';}
        	if(!isset($_POST['surname'])){$_POST['surname']=' ';}
        	if(!isset($_POST['threename'])){$_POST['threename']=' ';}
        $one->AddTeacher(
        	$_POST['status'],
        	$_POST['name'],
        	$_POST['surname'],
        	$_POST['threename']);
echo "Teacher is added";
        break;
}
?>