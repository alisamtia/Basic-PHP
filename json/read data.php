<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div id="eq2">
</div>
  </body>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $.ajax({
    url: "https://jsonplaceholder.typicode.com/posts/1",
    success: function(data){
      console.log(data);
      $("#eq2").html("<b>"+data.id+". </b>" + data.title + "<br>");
    }
  });
</script>

</html>
