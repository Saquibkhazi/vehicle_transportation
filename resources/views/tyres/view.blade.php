<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tyre Page</title>
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
              <h2 style="font-family:Times New Roman;">List Of Tyres </h2>
             
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="/home"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="/tyrehome">Tyre</a><i class="icon-angle-right"></i></li>
              <li class="active">List of Tyres</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
       
        <br>
       
        
         <div style="margin-left: 40px;margin-top: 55px;margin-right: 700px;">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>TyreId</th>
                    <th>SRN</th>
                    <th>TyreNo</th>
                    <th>Model</th>
                    <th>Status</th>
                    <th>Condition</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Vehicle_id</th>
                    <th>Action</th>
             </tr>
          
           @foreach($tviews as $tyre)
               <tr>
                    <th>{{$tyre['id']}}</th>
                    <th>{{$tyre['srn']}}</th>
                    <th>{{$tyre['tyreno']}}</th>
                    <th>{{$tyre['model']}}</th>
                    <th>{{$tyre['status']}}</th>
                    <th>{{$tyre['condition']}}</th>
                    <th>{{$tyre['type']}}</th>
                    <th>{{$tyre['amount']}}</th>
                    <th>{{$tyre['vehicle_id']}}</th>
                    <th><a href={{"tyredelete/" .$tyre[ 'id' ]}}>Delete</a></th>
                    <th><a href={{"tyreupdate/" .$tyre[ 'id' ]}}>Update</a></th>
               </tr>
            @endforeach
            </thead>
</table>
</div>
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
                  