<?php

class user extends dbc {

	 function AddUser ($status,$name,$surname,$threename,$faculty,$speciality,$group,$gender,$burn){
		
		$query ="INSERT INTO `students`(
										`id_status`, 
										`name`, 
										`surname`, 
										`father_name`, 
										`id_faculty`, 
										`id_speciality`, 
										`id_group`, 
										`id_sex`, 
										`burn_date`) VALUES ('$status','$name','$surname','$threename','$faculty','$speciality','$group','$gender','$burn')";
		$this->connect()->query($query);
		echo ' accept';
	}


	function AddTeacher($status,$name,$surname,$threename){
		$query ="INSERT INTO `students`(`id_status`, `name`, `surname`, `father_name` ) VALUES ('$status','$name','$surname','$threename')";
		$this->connect()->query($query);
		echo ' accept';
	}
	 function loginUser ($name, $password){
		$sql ="SELECT * FROM `students` WHERE login = '$name' AND password = '$password'";
		$result = $this->connect()->query($sql);
		$row = $result->fetch_assoc();
		$numRows = $result->num_rows;
		 if ($numRows){echo 'you in are';}else{ echo 'non correct login or password';}
	}


	function SelectUser( $name, $surname, $threename, $faculty, $speciality, $group, $gender, $burn){
		$query ="SELECT * FROM `students`,`rating` WHERE students.id = rating.id_student AND id_group = '$group' ";

		if ($name){$query.=" AND name LIKE '%".$name."%'";}
		if ($surname){$query.=" AND surname LIKE '%".$surname."%'";}
		if ($threename){$query.=" AND father_name LIKE '%".$threename."%'";}
		if ($faculty){$query.=" AND id_faculty = '".$faculty."'";}
		if ($speciality){$query.=" AND id_speciality = '".$speciality."'";}
		if ($gender){$query.=" AND id_sex = '".$gender."'";}
		if ($burn){$query.=" AND burn_date = '".$burn."'";}
		$query.=" ORDER BY name";
        echo $query;
		$result=$this->connect()->query($query);
		while($row = $result->fetch_assoc()){
			$shower[]=$row;
		}
        print_r ($shower);
		return $shower;
	}

}

?>