<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload Using PHP & Ajax</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="main">
		<div id="header">
			<h1>Upload & Remove Files<br> Using PHP & jQuery Ajax</h1>
		</div>
		<div id="content">
			<form id="submit_form">
        <div class="form-group">
          <label>Select Image</label>
          <input type="file" name="file" id="upload_file" />
          <span class="help-block">Allowed File Type - jpg, jpeg, png, gif</span>
        </div>
       <input type="submit" name="upload_button" id="upload_btn" value="Upload" />
      </form>
      <br />
      <div id="preview">
        <h3>Image Preview</h3>
        <div id="image_preview"></div>
      </div>
		</div>
	</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#submit_form").on("submit",function(event){
    event.preventDefault();

    var formData = new FormData(this);
    $.ajax({
      url: "upload.php",
      type: "POST",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){
        $("#preview").fadeIn();
        $("#image_preview").html(data);
        $("#submit_form").trigger("reset");
      }
    });
  });


  $(document).on("click",function(){
    $del_path=$("#delete_btn").data("path");
    $.ajax({
      url: "delete.php",
      type: "POST",
      data: {"path": $del_path},
      success: function(data){
        if(data==1){
          $("#preview").fadeOut();
          console.log("data delted successfully!");
        }
        else{
          console.log(data);
        }
      }
    })
  });
});
</script>
</body>
</html>
