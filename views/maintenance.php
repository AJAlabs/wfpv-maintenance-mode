<?php
/**
 * Maintenance mode and coming soon template for Westchester FPV Racing.
 *
 * @package   wfpv-maintenance-mode
 * @copyright Copyright (c) 2017, AJ Acevedo
 * @license   GPL2+
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Westchester FPV Racing">
    <meta name="author" content="AJ Acevedo">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="shortcut icon" href="<?php echo plugins_url( 'assets/img/favicon.png', dirname( __FILE__ ) ); ?>">

    <title>WestchesterFPVRacing.com | Westchester FPV Racing</title>

    <!-- Bootstrap core CSS -->    
    <link href="<?php echo plugins_url( 'assets/css/bootstrap.min.css', dirname( __FILE__ ) ); ?>"rel="stylesheet">
    <link href="<?php echo plugins_url( 'assets/css/font-awesome.min.css', dirname( __FILE__ ) ); ?>"rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo plugins_url( 'assets/css/maintenance.css', dirname( __FILE__ ) ); ?>"rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2 w">
          <div class="logo">
            <img src="<?php echo plugins_url( 'assets/img/logo.png', dirname( __FILE__ ) ); ?>" width="100" alt="WestchesterFPVRacing.com">
          </div>
        </div>
      </div>

      <div class="row w centered">
        <div class="col-sm-6.visible-sm col-md-6.visible-md col-lg-6.visible-lg col-sm-offset-3.visible-sm col-md-offset-3.visible-md col-lg-offset-3.visible-lg">
          <h2><em><b>Westchester FPV Racing</b></em></h2>
          <br>
          <p><em>New Site Coming Soon. Stay Tuned!</em></p>
        </div>
      </div>

      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2 w tooltip-demo">
          <a data-toggle="tooltip" title="facebook" href="https://www.facebook.com/groups/663200123864906/"><i class="fa fa-facebook-square"></i></a>
                    <a data-toggle="tooltip" title="Instagram" href="https://www.instagram.com/westchesterfpvracing/"><i class="fa fa-instagram"></i></a>
          <a data-toggle="tooltip" title="YouTube" href="https://www.youtube.com/watch?v=KiJ7x9Mtneg"><i class="fa fa-youtube-square"></i></a>
          <a data-toggle="tooltip" title="Contact" href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#119;&#101;&#115;&#116;&#099;&#104;&#101;&#114;&#115;&#116;&#101;&#114;&#102;&#112;&#118;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;"><i class="fa fa-envelope"></i></a>
          <a data-toggle="tooltip" title="MultiGP" href="http://www.multigp.com/chapters/view/?chapter=Westchester-FPV-Racing"><i class="fa fa-flag-checkered"></i></a>
        </div>
      </div>

    </div><!-- /.container -->

    <!-- Bootstrap and JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo plugins_url( 'assets/js/bootstrap.min.js', dirname( __FILE__ ) ); ?>"></script>
    <script src="<?php echo plugins_url( 'assets/js/jquery.backstretch.min.js', dirname( __FILE__ ) ); ?>"></script>

    <script>
      $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
      })
    </script>

    <script>
      // Attach Backstrech as the body's background
      $.backstretch("<?php echo plugins_url( 'assets/img/bg.jpg', dirname( __FILE__ ) ); ?>");
    </script>

  </body>
</html>