<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.ico">

    <title>Ry Stevenson</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <?php 
    include 'navbar.php'; 
    ?>

    <div class="container">
        
        <!-- Main component for a primary marketing message or call to action -->
        <h1>Ryan Stevenson</h1>
        <h4>Video Game and Software Engineer</h4>

        <h3 class="text-center">Contact Me!</h3>

        <?php
            // check for a successful form post
            if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";
            // check for a form error
            elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";
        ?>

        <form class="form-horizontal" method="POST" action="contact-form.php">
          <fieldset>
            <hr>
              <p>If you wish to contact me please fill out your details below and I'll reply as soon as I can. Thanks!</p>
            <div class="form-group">
              <label for="inputName" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="contact_name" id="inputName" placeholder="Your name">
                </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Email</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" name="contact_email" id="inputEmail" placeholder="Your email">
              </div>
            </div>
            <div class="form-group">
              <label for="textArea" class="col-lg-2 control-label">Message</label>
              <div class="col-lg-10">
                <textarea class="form-control" rows="3" name="contact_message" id="textArea" placeholder="This is the message you want to send me."></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <input type="hidden" name="save" value="contact">
                <button type="submit" class="btn btn-default">Send</button> 
              </div>
            </div>
          </fieldset>
        </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
