<?php 
if(isset($_POST['submit']))
{
  $from = $_POST['from'];
  $to = $_POST['to'];
  $name = $_POST['name'];
  $subject = $_POST['sub'];
  $message = $_POST['msg'];
  $headers = "From:$name<$from>";
  if(empty($from)){
    ?> <div class="container" style="margin-top:5%;">
            <div class="row">
                <div class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Alert!</strong> 'From' tag should not be blank.
                </div>
            </div>
        </div>
    <?php
  }else if(empty($to)){
    ?> <div class="container" style="margin-top:5%;">
            <div class="row">
                <div class="alert alert-danger alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Alert!</strong> 'To' tag should not be blank.
                </div>
            </div>
      </div>
    <?php
  }else{
      if( @mail($to, $subject, $message, $headers))
      {
        ?> <div class="container" style="margin-top:5%;">
               <div class="row">
                    <div class="alert alert-success alert-dismissable">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                      <strong>Success!</strong> Email has been send.
                    </div>
                </div>
            </div>
        <?php 
      }else
      {
        ?> <div class="container" style="margin-top:5%;">
                <div class="row">
                    <div class="alert alert-danger alert-dismissable fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Alert!</strong> Technical error 'Email could not be send'.
                    </div>
                </div>
            </div>
        <?php
      }
    }
}
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Send E-mail</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>
        <body>
            <div class="container" style="margin-top:2%;">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-xs-12">
                        <h2>Compose Mail</h2>
                        <form method="post">
                            <div class="form-group">
                                <label for="email">From:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="from">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Name(Optional):</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Enter Name" name="name">
                            </div> 
                            <div class="form-group">
                                <label for="pwd">To:</label>
                                <input type="email" class="form-control" id="pwd" placeholder="Enter Email" name="to">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Subject:</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Enter Subject" name="sub">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Massage:</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Enter Massage" name="msg">
                            </div>
                                <input type="submit" name="submit" id="login" class="btn btn-primary btn-block" value="Send Mail">
                        </form>
                    </div>
                </div>
            </div>

      </body>
  </html>
