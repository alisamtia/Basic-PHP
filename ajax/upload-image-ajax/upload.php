<?php

if($_FILES['file']['name']!==''){
	$filename=$_FILES['file']['name'];
	$extention=pathinfo($filename,PATHINFO_EXTENSION);
	$valid_ext=array("jpg","jpeg","gif","png");
	if(in_array($extention,$valid_ext)){
		$new_name=rand().".".$extention;
        $path="images/".$new_name;
		
		if(move_uploaded_file($_FILES['file']['tmp_name'],$path)){
			echo "<img src='".$path."'> 
			<br><br><button id='delete_btn' data-path='".$path."'>Delete</button>";
		}
	}
	else{
		echo "<script>alert('Please Upload valid Format!!');</script>";
	}
}else{
	echo "<script>alert('Please Upload a File!!');</script>";
}

?>
