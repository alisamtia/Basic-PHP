<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Drag & Drop Using Dropzone With PHP</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
  <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
</head>
<body>
	<div id="main">
		<div id="header">
			<h1>Drag & Drop Upload Files<br> Using Dropzone With PHP</h1>
		</div>
		<div id="content">
      <form class="dropzone" id="file_upload"></form>
      <button id="upload_btn">Upload</button>
		</div>
	</div>
  <script>
    Dropzone.autoDiscover = false;
var mydropzone=new Dropzone("#file_upload", {
  url: "upload.php",
  parallelUploads: 5,
  uploadMultiple: true,
  maxFilesize: 5,
  maxFiles: 8,
  acceptedFiles: ".jpg,.png,.jpeg",
  autoProcessQueue: false,
  success: function(file,data){
    if(data==1){
      $("#content .message").hide();
      $("#content").append("<div class='message success'>Image Uploaded successfully.</div>");
    }else{
      $("#content .message").hide();
      console.log(data);
      $("#content").append("<div class='message error'>Can't Upload Image.</div>");
    }
  }
});

$("#upload_btn").click(function(){
  mydropzone.processQueue();
});
  </script>
</body>
</html>
