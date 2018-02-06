<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
  <link rel="stylesheet" href="../css/hover.css">
  <style media="screen">
  .icon{
    width: 150px;
    height: 150px;
    border-radius: 75px;
    background-color: black;
  }
  #title{
    font-family: 'Arima Madurai', cursive;
    font-size: 360%;
  }
  .invalid-feedback{
    font-size: 120%;
  }

</style>
</head>
<body>

  <div class="container-fluid">
    <div class="jumbotron text-center justify-content-center">
      <h1 id="title">MESS LOGIN</h1>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 justify-content-center text-center hvr-grow " id="op_div">
        <img src="../images/operator.png" alt="" class="icon">
        <h3>Operator</h3>
        <p>click the following button</p>
        <button type="button" name="button" class="btn btn-danger" id="operator_login_btn">Operator</button>
      </div>
      <div class="col-12 col-md-6 justify-content-center text-center hvr-grow " id="op_div">
        <img src="../images/student.png" alt="" class="icon">
        <h3>Student</h3>
        <p>click the following button</p>
        <button type="button" name="button" class="btn btn-success" id="student_login_btn">Student</button>
      </div>
    </div>


    <div class="ui modal login_modal">
      <i class="close icon"></i>
      <div class="header">User</div>
      <div class="image content">
        <div class="ui small image">
          <img src="" id="modal_image">
        </div>
        <div class="description">
          <form method="post" action="verification.php" onsubmit="return validate_form()">
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <label for="form_op_username"> <strong>Username</strong></label>
                <input type="text" class="form-control" id="form_op_username" placeholder="Username" name="username">
                <div class="invalid-feedback">
                  Please enter username.
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="form_op_password"> <strong>Password</strong> </label>
                <input type="password" class="form-control" id="form_op_password" placeholder="Password" name="password">
                <div class="invalid-feedback">
                  Please enter password.
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2">
                <label class="form-check-label" for="invalidCheck2">
                  Remember Me
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="actions">
          <button type="button" name="button" class="deny btn btn-danger btn-lg" style="margin-right:10px">Cancel</button>
          <input type="submit" name="button" class="btn btn-success btn-lg" id="login_check"/>
          <input type="hidden" name="hidden_parameter" value="" id="hidden_value">
        </form>
      </div>
    </div>

  </div>





  <script type="text/javascript">



   $("#operator_login_btn").click(function(){
    clearClass();
    $("#modal_image").attr("src","../images/operator.png");
    $(".login_modal").modal('show');
     $("#form_op_username").attr("name","username_operator");
    $("#hidden_value").val('username_operator');
  });

   $("#student_login_btn").click(function(){
    clearClass();
    $("#modal_image").attr("src","../images/student.png");
    $(".login_modal").modal('show');
    $("#form_op_username").attr("name","username_student");
    $("#hidden_value").val('username_student');
  });

   function validate_form(){
    var username = $("#form_op_username");
    var password = $("#form_op_password");

    if (username.val() && password.val()) {
      return true;
    }
    else {
      if(!username.val())
        showError(username);
      else removeError(username);

      if(!password.val())
        showError(password);
      else removeError(password);
      return false;
    }
  }

  function showError(id) {
    id.removeClass("is-valid");
    id.addClass("is-invalid");
  }

  function removeError(id) {
    id.removeClass("is-invalid");
    id.addClass("is-valid");
  }

  function clearClass() {
    var username = $("#form_op_username");
    var password = $("#form_op_password");

    username.removeClass("is-valid");
    username.removeClass("is-invalid");

    password.removeClass("is-valid");
    password.removeClass("is-invalid");
  }

</script>

</body>
</html>
