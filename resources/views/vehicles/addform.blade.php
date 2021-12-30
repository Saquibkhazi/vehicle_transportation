<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Vehicle Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="flat/css/bootstrap.css" rel="stylesheet" />
  <link href="flat/css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="flat/css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="flat/css/jcarousel.css" rel="stylesheet" />
  <link href="flat/css/flexslider.css" rel="stylesheet" />
  <link href="flat/css/slitslider.css" rel="stylesheet" />
  <link href="flat/css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link id="t-colors" href="flat/skins/default.css" rel="stylesheet" />
  <!-- boxed bg -->
  <link id="bodybg" href="flat/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="flat/ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="flat/ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="flat/ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="flat/ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="flat/ico/favicon.png" />

    </head>
    <body>
        
        <section id="inner-headline">
     <div class="container">
       <div class="row">
         <div class="span4">
           <div class="inner-heading">
             <h2 style="font-family:Times New Roman;">Add Vehicle Info</h2>
           </div>
         </div>
         <div class="span8">
           <ul class="breadcrumb">
             <li><a href="/home"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
             <li><a href="/vehiclehome">Vehicle</a><i class="icon-angle-right"></i></li>
             <li class="active">Add Vehicle Info</li>
           </ul>
         </div>
       </div>
     </div>
   </section>
      <br>
      <form  action="vehicleadd"  method="POST">
          @csrf
            <table>
            
                <tr>
                    <td>RTO_Number</td>
                    <td><input type="text"  name="rtonumber" placeholder="RTO_Number" value="" required/></td>
                </tr>
                <tr>
                    <td for="type">Type</td>
                  <td>
                    <select id="type" name="type">
                      <option value="JohnDeere: 400D">JohnDeere: 400D</option>
                      <option value="Isuzu: FVZ1400">Isuzu: FVZ1400</option>
                      <option value="Volvo: A40E">Volvo: A40E</option>
                      <option value="Hitachi: AH400D">Hitachi: AH400D</option>
                      <option value="Belaz 75710">Belaz 75710</option>
                      <option value="Caterpillar 797F">Caterpillar 797F</option>
                      <option value="Komatsu 980E-4">Komatsu 980E-4</option>
                      <option value="Terex MT 6300AC">Terex MT 6300AC</option>
                    </select> 
                  </td>
                </tr>
                <tr>
                    <td>Model</td>
                    <td><input type="number" min="2000" name="model"  placeholder="Model" value="" required/></td>
                </tr>
                <tr>
                    <td for="fueltype">Fueltype</td>
                  <td>
                    <select id="fueltype" name="fueltype">
                      <option value="Petrol">Petrol</option>
                      <option value="Diesel">Diesel</option>
                    </select> 
                  </td>
                </tr>
               
                  
                <tr>
                    <td colspan="2">
                        <input class="btn btn-theme btn-large e_swing" type="submit" value="ADD" name="btn">
                    </td>
                </tr>
            </table>
        </form>
        <footer>
      <div class="container">
        
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Flattern - All right reserved.</span>
                </p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="flat/js/jquery.js"></script>
  <script src="flat/js/jquery.easing.1.3.js"></script>
  <script src="flat/js/bootstrap.js"></script>
  <script src="flat/js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="flat/js/jquery.fancybox.pack.js"></script>
  <script src="flat/js/jquery.fancybox-media.js"></script>
  <script src="flat/js/google-code-prettify/prettify.js"></script>
  <script src="flat/js/portfolio/jquery.quicksand.js"></script>
  <script src="flat/js/portfolio/setting.js"></script>
  <script src="flat/js/jquery.flexslider.js"></script>
  <script src="flat/js/jquery.nivo.slider.js"></script>
  <script src="flat/js/modernizr.custom.js"></script>
  <script src="flat/js/jquery.ba-cond.min.js"></script>
  <script src="flat/js/jquery.slitslider.js"></script>
  <script src="flat/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="flat/js/custom.js"></script>

    </body>
</html>
        