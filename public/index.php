<?php



// $headTitle = "Interact"; 
// $metaDescription = "";
// $metaAuthor = "";
// $navbarTitle = "Interact"; 

// $navbarTexto1 = "Features";
// $navbarTexto2 = "About";
// $navbarTexto3 = "Services";
// $navbarTexto4 = "Gallery";
// $navbarTexto5 = "Testimonials";
// $navbarTexto6 = "Team";
// $navbarTexto7 = "Contact";

// $introTitle = "We Are Interact";
// $introDescription = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo nibh ante facilisis bibendum.";

// $textoButtonIntro = "Learn More";

// $caracteristicasTitle = "Features";

// $itemCaracteristicasIcon = "fa fa-comments-o";
// $itemCaracteristicasTitle = "Lorem ipsum";
// $itemCaracteristicasDescription = "Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.";


// $pathImageAbout = "img/about.jpg";
// $titleAbout = "About Us";
// $descriptionAbout = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
// $titleListAbout = "Why Choose Us?";
// $itemListAbout = "Lorem ipsum dolor";

// $titleInfoBlue = "Our Services";
// $descriptionInfoBlue = "Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.";
// $iconItemInfoBlue = "fa fa-wordpress";
// $titleItemInfoBlue = "Lorem ipsum dolor";
// $descriptionItemInfoBlue = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.";

// $titleGallery = "Gallery";
// $descriptionGallery = "Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.";
// $hrefImageItemGallery = "img/portfolio/01-large.jpg";
// $textoFlotanteDestinoImageItemGallery = "Project Title";
// $titleItemGallery = "Lorem Ipsum";
// $pathImageItemGallery = "img/portfolio/01-small.jpg";
// $textoFlotanteImageItemGallery = "Project Title";

// $titleTestimonial = "What our clients say";
// $pathImageItemTestimonial = "img/testimonials/01.jpg";
// $parrafoItemTestimonial = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.";
// $firmaItemTestimonial = " - John Doe";

// $titleTeam = "Meet the Team";
// $descriptionTeam = "Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.";
// $pathImageItemTeam = "img/team/01.jpg";
// $titleItemTeam = "John Doe";
// $descriptionItemTeam = "Director";

// $titleContact = "Get In Touch";
// $descriptionContact = "Please fill out the form below to send us an email and we will get back to you as soon as possible.";

// $titleContact = "Get In Touch";
// $descriptionContact = "Please fill out the form below to send us an email and we will get back to you as soon as possible.";

// $titleContactInfo = "Contact Info";
// $iconItemContactInfo = "fa fa-map-marker";
// $nameItemContactInfo = "Address";
// $valueItemContactInfo = "4321 California St,<br>San Francisco, CA 12345";

// $hrefItemSocial = "#";
// $iconItemSocial = "fa fa-facebook";
// $textFooter = "2018 WebSerie";



require_once '../conf/confwebReader.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $headTitle; ?></title>
<meta name="description" content="<?php echo $metaDescription; ?>">
<meta name="author" content="<?php echo $metaAuthor; ?>">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->

	<?php 
	
		require_once '../conf/NavbarObject.php';
		
		$navbarObject = new NavbarObject();
		$navbarObject->set($navbarTitle, $navbarTexto1, $navbarTexto2, $navbarTexto3, $navbarTexto4, $navbarTexto5, $navbarTexto6, $navbarTexto7, $caracteristicas, $about, $infoblue, $gallery, $testimonial, $team);
		echo $navbarObject->printObject();	
	
	?>




<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1><?php echo $introTitle; ?><span></span></h1>
            <p><?php echo $introDescription; ?></p>
            <a href="#one" class="btn btn-custom btn-lg page-scroll"><?php echo $textoButtonIntro; ?></a> </div>
        </div>
      </div>
    </div>
  </div>
</header>

<div id="one" ></div>



<!-- Features Section -->
<?php 
if ($caracteristicas) {
	require_once '../conf/SectionCaracteristicasManager.php';	
	
	$sectionCaracteristicasManager = new SectionCaracteristicasManager();
	$sectionCaracteristicasManager->setXlsReader($objPHPExcel);
	$sectionCaracteristicasManager->init();
	echo $sectionCaracteristicasManager->printSection();
}
?>

<!-- About Section -->
<?php 
if ($about) {
	require_once '../conf/SectionAboutManager.php';
	
	$sectionAboutManager = new SectionAboutManager();	
	$sectionAboutManager->setXlsReader($objPHPExcel);
	$sectionAboutManager->init();
	echo $sectionAboutManager->printSection();	
}
?>

<!-- Services Section -->
<?php 
if ($infoblue) {
	require_once '../conf/SectionInfoblueManager.php';
	
	$sectionInfoblueManager = new SectionInfoblueManager();	
	$sectionInfoblueManager->setXlsReader($objPHPExcel);
	$sectionInfoblueManager->init();
	echo $sectionInfoblueManager->printSection();
}
?>

<!-- Gallery Section -->

<?php 
if ($gallery) {
	require_once '../conf/SectionGalleryManager.php';
	
	$sectionGalleryManager = new SectionGalleryManager();
	$sectionGalleryManager->setXlsReader($objPHPExcel);
	$sectionGalleryManager->init();
	echo $sectionGalleryManager->printSection();	
}
?>

<!-- Testimonials Section -->

<?php 

if ($testimonial) {
	require_once '../conf/SectionTestimonialsManager.php';
	
	$sectionTestimonialsManager = new SectionTestimonialsManager();
	$sectionTestimonialsManager->setXlsReader($objPHPExcel);
	$sectionTestimonialsManager->init();
	echo $sectionTestimonialsManager->printSection();
}

?>

<!-- Team Section -->

<?php 

if ($team) {
	require_once '../conf/SectionTeamManager.php';
	
	$sectionTeamManager = new SectionTeamManager();
	$sectionTeamManager->setXlsReader($objPHPExcel);
	$sectionTeamManager->init();
	echo $sectionTeamManager->printSection();		
}

?>

<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2><?php echo $titleContact; ?></h2>
          <p><?php echo $descriptionContact; ?></p>
        </div>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h3><?php echo $titleContactInfo; ?></h3>
        <p><span><i class="<?php echo $iconItemContactInfo1; ?>"></i><?php echo $nameItemContactInfo1; ?></span><?php echo $valueItemContactInfo1; ?></p>
      </div>   
      
                  	<?php 	        					
        					 
						for ($i = 0; $i < $numItemsContactInfo; $i++) {
						   echo $arrayItemsContactInfo[$i]->printItem();					    
						}	
						
					?>	
      
      
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
                   <?php 	        					
        					 
						for ($i = 0; $i < $numItemsSocial; $i++) {
						   echo $arrayItemsSocial[$i]->printItem();					    
						}	
						
					?>	
         
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy;<?php echo $textFooter; ?>. Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
