<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax</title>
  <!-- jquery ui css -->
  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <!-- style.css -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="main">
    <div id="header">
        <h1>Search in Date Range <br>using PHP & Ajax</h1>
    </div>
    <div id="date-wrap">
      <label for="from">From</label>
      <input type="text" id="from" autocomplete="off">
      <label for="to">to</label>
      <input type="text" id="to" autocomplete="off">
    </div>
    <div id="content">
      <table id="table-data" border="0" width="100%" cellpadding="10px">
        <thead>
          <th width="50px">Id</th>
          <th>Name</th>
          <th width="90px">City</th>
          <th width="130px">DOB</th>
        </thead>
        <tbody id="load-data"></tbody>
      </table>
    </div>
  </div>
  <script>
$(document).ready(function(){
  var minDate;
  var maxDate;
  var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeYear: true,
          changeMonth: true,
          numberOfMonths: 1,
          yearRange: "1900:2023"
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
          minDate=$(this).val();
          if(minDate!=="" && maxDate!==""){
        load_data(minDate,maxDate);}
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeYear: true,
        changeMonth: true,
        numberOfMonths: 1,
        yearRange: "1900:2023"
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
        maxDate=$(this).val();
        if(minDate!=="" && maxDate!==""){
        load_data(minDate,maxDate);
      }
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
      
    }

function load_data(min,max){
  console.log(min,max);
  $.ajax({
    url: "get-data.php",
    type: "POST",
    data: {minDate: min,maxDate: max},
    success: function(data){
      $("#load-data").html(data);
    }
  });
}
load_data(minDate,maxDate);
});

  </script>

</body>
</html> 


