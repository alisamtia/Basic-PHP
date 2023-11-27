<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php With Ajax</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery.js"></script>
  <script src="script.js"></script>
  </head>
  <body>

    <div id="modal">
      <div id="modal-form">
        <div id="close">
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16"> <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/> </svg>
        </div>
        <h2>Edit Form</h2>
        <div id="al-for">

        </div>
      </div>
    </div>




    <div class="sticky-error" id="error-message">This is an error message.</div>
    <div class="sticky-success" id="error-success">This is an Success message.</div>
    <table id="main" border="0" cellspacing="0">
      <tr id="tr1">
          <td>

            <div style="display: flex;">
              <div style="flex: 1">
                <h1 align="left">PHP with Ajax</h1>
              </div>
              <div style="flex: 1;margin-top:auto;margin-bottom: auto;margin-right: 20px;">
                <div style="display:flex;">
                  <div style="flex: 1;">Search</div>
                   <input type="text" placeholder="Search Here now..." name="search" id="search" size="30">
                   <div id="nameList"></div>
                </div>
              </div>
            </div>



          </td>
      </tr>
      <tr>
        <td id="tr2" colspan="2">
          <form id="add-form">
            First Name: <input type="text" name="fname" id="fname" size="10"></input>
            Last Name: <input type="text" name="lname" id="lname" size="10"></input>
            <input type="submit" id="save-button"></input>
        </form>
        </td>
      </tr>
      <tr>
        <td id="tabledata">
</td>
</tr>
</table>
<div id="pagination-container">
  <ul id="pagination">
    <li><a class="active" href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
  </ul>
</div>

  </body>
</html>
