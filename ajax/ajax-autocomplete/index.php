<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">
        <h1>Autocomplete Textbox with PHP & Ajax</h1>
      </td>
    </tr>
    <tr>
      <td id="table-form">
        <form id="search-form">
     
          <div id="autocomplete">
            <input type="text" id="city-box" placeholder="Enter City" autocomplete="off">
            <div id="cityList"></div>
          </div>
          <input type="submit" id="search-btn">
        </form>
         
      </td>
    </tr>
    <tr>
      <td id="table-data"></td>
    </tr>
  </table>
    
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $("#city-box").on("keyup",function(){
      console.log($(this).val());
      var city=$(this).val();
      if(city!=""){
      $.ajax({
        url: "load-city.php",
        data: {city,city},
        type: "POST",
        success: function(data){
          $("#cityList").fadeIn().html(data);
        }
      });
    }else{
      $("#cityList").fadeOut();
    }
    });
    
    $(document).on("click","li",function(){
      let val21=$(this).html();
      console.log(val21);
      $("#city-box").val(val21);
      $("#cityList").fadeOut();
    })

    $(document).on("click","#search-btn",function(event){
      event.preventDefault();
      var city=$("#city-box").val();
      $.ajax({
        url: "load-table.php",
        data: {city1: city},
        method: "POST",
        success: function(data){
          $("#table-data").html(data);
        }
      });
    });
    })
</script>
</body>

</html>
