<?php
/*-------FILTER_Var_Array------- */
$arr = Array(
    "stname" => "Ram Kumar",
    "stmarks" => "95",
    "stemail" => "ramkumar@example.com",
);
$filters = array(
      "stname" => FILTER_SANITIZE_STRING,
      "stmarks" => array(
         "filter"=>FILTER_VALIDATE_INT,
         "options"=>array(
            "min_range"=>1,
            "max_range"=>100
        )
      ),
      "stemail"=> FILTER_SANITIZE_EMAIL,

   );
   echo "<pre>";
   print_r(filter_var_array($arr, $filters));
   echo "</pre>";


/*-------FLAGS => FILTER_FLAG_STRIP_HIGH------- */
$arr = Array(
    "stname" => "<h1>Ram Kumar</h1>",
    "stmarks" => "95",
    "stemail" => "ramkumar@example.com",
);
$filters = array(
        "stname" => array(
        'filter' => FILTER_SANITIZE_STRING,
        'flags'  => FILTER_FLAG_STRIP_HIGH
        ),
        "stmarks" => array(
         "filter"=>FILTER_VALIDATE_INT,
         "options"=>array(
            "min_range"=>1,
            "max_range"=>100
        )
      ),
      "stemail"=> FILTER_SANITIZE_EMAIL,

   );
   echo "<pre>";
   print_r(filter_var_array($arr, $filters));
   echo "</pre>";

?>
