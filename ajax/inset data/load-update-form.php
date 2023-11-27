<?php

$id=$_POST['id'];
$conn=mysqli_connect("localhost","root","","alitest");
$query="SELECT * FROM student where id={$id}";

$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
echo'          <span>ID: <b id="id_str">'.$row["id"].'</b><span><br>
          <label for="up_f">First Name</label><br>
          <input class="edit_id" hidden id="inp" value="'.$row["id"].'" type="text" name="up_f" value="">
          <input class="wq1" id="inp" value="'.$row["first_name"].'" type="text" name="up_f"><br>
          <label for="up_l">Last Name</label><br>
          <input class="wq2" id="inp" value="'.$row["last_name"].'" type="text" name="up_l"><br>
          <button type="submit" class="asw21" value="save" id="sub-1">Update Now</button>
';
};
};

?>
