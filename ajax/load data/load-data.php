<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php With Ajax</title>
    <style media="screen">
      #main{
        width: 45%;
        align: center;
        background-color: white;
        margin-left: auto;
        margin-right: auto;
        padding-bottom: 300px;
      }
      body{
        background-color: #B2BDC5;
        font-family: arial;
        text-align: center;
      }
      #tr1{
        background-color: yellow;
      }
      #tr2{
        background-color: red;
        padding-top: 15px;
        padding-bottom: 15px;
        background: blue;
      }
      #tabledata{
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
        padding-right: 10px;
        background: white;

      }
      #id{

      }
    </style>
  </head>
  <body>
    <table id="main" border="0" cellspacing="0">
      <tr id="tr1">
          <td colspan="2"><h1>PHP with Ajax</h1></td>
      </tr>
      <tr>
        <td id="tr2" colspan="2"><input type="button" id="load-button" value="Load Data"></td>
      </tr>
      <tr>
        <td id="tabledata">

    </td>
        </tr>

    </table>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
$(document).ready(function(){
  $('#load-button').click(function(){
    $.ajax({
      url: "ajax-load.php",
      type: "POST",
      success: function(data){
        $("#tabledata").html(data);
      }
    });
  });
});
    </script>
  </body>
</html>
