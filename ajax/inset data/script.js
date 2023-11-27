$(document).ready(function(){

  function showerror(data){
    $(".sticky-error").html(data).slideDown();
  }
  function hideerror(){
    $(".sticky-error").slideUp();
  }

  function showsuccess(data){
    $(".sticky-success").html(data).slideDown();
  }
  function hidesuccess(){
    $(".sticky-success").slideUp();
  }

  function loaddata(){
    $.ajax({
      url: "ajax-show.php",
      type: "POST",
      success: function(data){
        $("#tabledata").html(data);
      }
    });
  }
loaddata();

$("#save-button").click(function(event){
  event.preventDefault()
  var fname=$("#fname").val();
  var lname=$("#lname").val();
  if(fname=="" || lname==""){
    console.log("All fields are required");
    showerror("All fields are required!!");
    setTimeout(hideerror,3000);
  }
  else{
  $.ajax({
    url: "ajax-insert.php",
    type: "POST",
    data: {first_name:fname,last_name:lname},
    success: function(data){
      if(data==1){
        loaddata();
        showsuccess("Data saved successfully!");
        setTimeout(hidesuccess,3000);
      }
      else {
        showerror("Server error: Error while saving!!");
        setTimeout(hideerror,3000);
      }
      $("#add-form").trigger('reset');
    }
  });}
});


$(document).on("click",".delete-button",function(){
  if(confirm("Do you really want to remove this record")){
  var st_id=$(this).data("id");
  var element=this;
  $.ajax({
    url:"del-data.php",
    type:"POST",
    data: {id:st_id},
    success: function(data){
      if(data==1){
        $(element).closest("tr").fadeOut();
        showsuccess("Data Removed successfully!");
        setTimeout(hidesuccess,3000);
      }
      else {
        showerror("Server error: Error while Deleting!!");
        setTimeout(hideerror,3000);
        console.log(data);
      }
    }
  });}
  else{

  }
});


$(document).on("click",".edit-button",function(){
  $("#modal").fadeIn();
  var st_id=$(this).data("id");
  $.ajax({
    url: "load-update-form.php",
    type: "POST",
    data: {id: st_id},
    success: function(data){
      if(data){
        $("#al-for").html(data);
      } else {
        // console.log(data);
      }
    }
  });
});

$("#close").click(function(){
  $("#modal").fadeOut();
});






$(document).on("click","#sub-1",function(event){
  var st_id=$(".edit_id").val();
  var fname=$(".wq1").val();
  var lname=$(".wq2").val();
  if(fname=="" || lname==""){
    console.log("All fields are required");
    showerror("All fields are required!!");
    setTimeout(hideerror,3000);
  }
  else{
  $.ajax({
    url: "ajax-update.php",
    type: "POST",
    data: {id:st_id,first_name:fname,last_name:lname},
    success: function(data){
      if(data==1){
        loaddata();
        showsuccess("Data saved successfully!");
        setTimeout(hidesuccess,3000);
        $("#modal").fadeOut();
      }
      else {
        console.log(data);
        showerror("Server error: Error while saving!!");
        setTimeout(hideerror,3000);
      }
      $("#al-for").trigger('reset');
    }
  });}
});



$(document).on("keyup","#search",function(){
  var search=$("#search").val();
  $.ajax({
    url: "search.php",
    type: "POST",
    data: {search:search},
    success: function(data){
      if(data){
        $("#tabledata").html(data);
      }
    }
  });
})





});
