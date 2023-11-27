<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Range Slider</title>
  <!-- jquery ui css -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <!-- style.css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script>
  $(document).ready(function(){
    var v1=12;
    var v2=25;
    $("#slider-range").slider({
      range: true,
      min: 12,
      max: 30,
      values: [ v1, v2 ],
      slide: function( event, ui ) {
        $( "#age" ).html(ui.values[ 0 ] + " - " + ui.values[ 1 ]);
        v1=ui.values[0];
        v2=ui.values[1];
        load_table(v1,v2);
      }
    });
    $( "#age" ).html( $( "#slider-range" ).slider( "values", 0 ) +
      " - " + $( "#slider-range" ).slider( "values", 1 ) );

      load_table(v1,v2);
  function load_table(v1,v2){
    $.ajax({
      url: "get-data.php",
      type: "POST",
      data: {range1: v1,range2: v2},
      success: function(data){
        $("#data-table").html(data);
      }
    });
  }



});
  </script>
</head>
<body>
  <div id="main">
    <div id="header">
        <h1>Search with Range Slider <br>using PHP & Ajax</h1>
    </div>
    <div id="slider-wrap">
      <div>
        <label>Age Between:</label>
        <span id="age"></span>
      </div>
      <div id="slider-range"></div>
    </div>
    <div id="content">
      <table id="table-data" border="0" width="80%" cellpadding="10px">
        <thead>
          <th width="50px">Id</th>
          <th>Name</th>
          <th width="50px">Age</th>
          <th width="120px">City</th>
        </thead>
        <tbody id="data-table"></tbody>
      </table>
    </div>
  </div>

</body>
</html> 


