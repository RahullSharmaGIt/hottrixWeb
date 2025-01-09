

<?php
require_once("backend/conn1.php");
$header_section_query = $conn->query("SELECT * FROM header_section WHERE id = 1");
$header_section = $header_section_query->fetch_object();

?>

<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/plugins.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<style type="text/css">
#footer{display:block;width:100%;padding:120px 0 20px;overflow:hidden;background-color:transparent;z-index:5000;text-align:center;}
#footer div#fcssholder div{display:none;}
#footer div#fcssholder div:first-child{display:block;}
#footer div#fcssholder div:first-child a{float:none;margin:0 auto;}
</style></head>
<body>
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '../../../../../../../s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>
  <div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
      <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
        <div class="d-inline-flex align-items-center" style="height:45px;"><small class="me-3 text-light"><i class="<?=$header_section->header_address_icon?> me-2"></i><?=$header_section->header_address?></small> <small class="me-3 text-light"><i class="<?=$header_section->header_mobile_icon?> me-2"></i><?=$header_section->header_mobile?></small> <small class="text-light"><i class="<?=$header_section->header_email_icon?> me-2"></i><?=$header_section->header_email?></small></div>
      </div>
      <div class="col-lg-4 text-center text-lg-end">
        <div class="d-inline-flex align-items-center" style="height:45px;"><a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="<?=$header_section->twitter_icon?>"></i></a> <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="<?=$header_section->facebook_icon?>"></i></a> <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="<?=$header_section->linkedin_icon?>"></i></a> <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="<?=$header_section->instagram_icon?>"></i></a> <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="<?=$header_section->youtube_icon?>"></i></a></div>
      </div>
    </div>
  </div>

<?php
$navbar_query = $conn->query("SELECT * FROM navbar WHERE id = 1");
$navbar = $navbar_query->fetch_object();



?>
<div class="container-fluid position-relative p-0">
  <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0"><a href="" class="navbar-brand p-0">
    <a class="navbar-brand" href="#">
      <img src="<?="backend/".$navbar->photo?>" >

  </a>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="fa fa-bars"></span></button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-0"><a href="index.php" class="nav-item nav-link" style="color:<?=$navbar->home_bg?>"><?=$navbar->home?>
      </a> <a href="pages/about.php" class="nav-item nav-link" style="color:<?=$navbar->about_bg?>"><?=$navbar->about?></a> <a href="pages/service.php" class="nav-item nav-link" style="color:<?=$navbar->services_bg?>"><?=$navbar->services?></a> <a href="pages/blog.php" class="nav-item nav-link" style="color:<?=$navbar->blog_bg?>"><?=$navbar->blog?></a> <a href="pages/pages.php" class="nav-item nav-link" style="color:<?=$navbar->pages_bg?>"><?=$navbar->pages?></a> <a href="pages/contact.php" class="nav-item nav-link" style="color:<?=$navbar->contact_bg?>"><?=$navbar->contact?></a>
      </div>
      <button type="button" class="btn ms-3" style="color: <?=$navbar->search_icon_bg?>" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="<?=$navbar->search_icon?>"></i></button>
      <a href="" class="btn py-2 px-4 ms-3" style="color: <?=$navbar->btn_text_bg?>; background-color: <?=$navbar->btn_bg?>"><?=$navbar->btn_text?></a></div> 
  </nav>

  <?php
$home_slider_query = $conn->query("SELECT * FROM home_slider WHERE id = 1");
$home_slider = $home_slider_query->fetch_object();



?>
  <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active"><img class="w-100" src="images/frame2.jpg" alt="website template image">
        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
          <div class="p-3" style="max-width:900px;">
            <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?=$home_slider->sub_heading?></h5>
            <h1 class="display-1 text-white mb-md-4 animated zoomIn"><?=$home_slider->heading?></h1>
            <a href="" class="btn py-md-3 px-md-5 me-3 animated slideInLeft" style="color: #ffffff; background-color:<?=$home_slider->btn_bg_one?>"><?=$home_slider->btn_text_one?></a> 
            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight" style="color: #ffffff; background-color:<?=$home_slider->btn_bg_two?>"><?=$home_slider->btn_text_two?></a></div>
        </div>
      </div>
      
    </div>
    


<div class="modal fade" id="searchModal" tabindex="-1">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content" style="background:rgba(9,30,62,.7);">
      <div class="modal-header border-0">
        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex align-items-center justify-content-center">
        <div class="input-group" style="max-width:600px;">
          <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
          <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
$card_list_query = $conn->query("SELECT * FROM card_list WHERE id = 1");
$card_list = $card_list_query->fetch_object();



?>

<div class="container-fluid facts py-5 pt-lg-0">
  <div class="container py-5 pt-lg-0">
    <div class="row gx-0">
      <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
      <div class="shadow d-flex align-items-center justify-content-center p-4" style="height:150px; background-color: <?=$card_list->card_bg_color?>;">

          <div class=" d-flex align-items-center justify-content-center rounded mb-2" style="width:60px;height:60px;background-color:<?=$card_list->icon_bg?>"><i class="<?=$card_list->icon?>" style="color:<?=$card_list->icon_color?> !important"></i></div>
          <div class="ps-4">
            <h5 class="mb-0" style="color:<?=$card_list->text_bg?>"><?=$card_list->text?></h5>
            <h1 class="mb-0" style="color:<?=$card_list->number_bg?>" ; data-toggle="counter-up"><?=$card_list->number?></h1>
          </div>
        </div>
      </div>

      <?php
$card_list_query = $conn->query("SELECT * FROM card_list WHERE id = 2");
$card_list = $card_list_query->fetch_object();
?>
      <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
      <div class="shadow d-flex align-items-center justify-content-center p-4" style="height:150px; background-color: <?=$card_list->card_bg_color?>;">

          <div class=" d-flex align-items-center justify-content-center rounded mb-2" style="width:60px;height:60px;background-color:<?=$card_list->icon_bg?>"><i class="<?=$card_list->icon?>" style="color:<?=$card_list->icon_color?> !important"></i></div>
          <div class="ps-4">
            <h5 class="mb-0" style="color:<?=$card_list->text_bg?>"><?=$card_list->text?></h5>
            <h1 class="mb-0" style="color:<?=$card_list->number_bg?>" ; data-toggle="counter-up"><?=$card_list->number?></h1>
          </div>
        </div>
      </div>
      
<?php
$card_list_query = $conn->query("SELECT * FROM card_list WHERE id = 3");
$card_list = $card_list_query->fetch_object();
?>
      <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
      <div class="shadow d-flex align-items-center justify-content-center p-4" style="height:150px; background-color: <?=$card_list->card_bg_color?>;">

          <div class=" d-flex align-items-center justify-content-center rounded mb-2" style="width:60px;height:60px;background-color:<?=$card_list->icon_bg?>"><i class="<?=$card_list->icon?>" style="color:<?=$card_list->icon_color?> !important"></i></div>
          <div class="ps-4">
            <h5 class="mb-0" style="color:<?=$card_list->text_bg?>"><?=$card_list->text?></h5>
            <h1 class="mb-0" style="color:<?=$card_list->number_bg?>" ; data-toggle="counter-up"><?=$card_list->number?></h1>
          </div>
        </div>
      </div>

      <?php
$about_us_query = $conn->query("SELECT * FROM about_us WHERE id = 1");
$about_us = $about_us_query->fetch_object();
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-lg-7">
        <div class="section-title position-relative pb-3 mb-5">
          <h5 class="fw-bold text-uppercase" style="color: <?=$about_us->sub_heading_bg?>"><?=$about_us->sub_heading?></h5>
          <h1 class="mb-0" style="color: <?=$about_us->heading_bg?>"><?=$about_us->heading?></h1>
        </div>
        <p class="mb-4"><?=$about_us->paragraph?></p>
        <div class="row g-0 mb-3">

        <?php
$about_us_1_query = $conn->query("SELECT * FROM about_us_1 WHERE id = 1");
$about_us_1 = $about_us_1_query->fetch_object();
?>
          <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
            <h5 class="mb-3"><i class="<?=$about_us_1->icon?>" style="color:<?=$about_us_1->icon_bg?> !important"></i><?=$about_us_1->icon_heading?></h5>
            <?php
$about_us_1_query = $conn->query("SELECT * FROM about_us_1 WHERE id = 2");
$about_us_1 = $about_us_1_query->fetch_object();
?>
            <h5 class="mb-3"><i class="<?=$about_us_1->icon?>" style="color:<?=$about_us_1->icon_bg?> !important"></i><?=$about_us_1->icon_heading?></h5>
          </div>
          <?php
$about_us_1_query = $conn->query("SELECT * FROM about_us_1 WHERE id = 3");
$about_us_1 = $about_us_1_query->fetch_object();
?>
          <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
            <h5 class="mb-3"><i class="<?=$about_us_1->icon?>" style="color:<?=$about_us_1->icon_bg?> !important"></i><?=$about_us_1->icon_heading?></h5>

            <?php
$about_us_1_query = $conn->query("SELECT * FROM about_us_1 WHERE id = 4");
$about_us_1 = $about_us_1_query->fetch_object();
?>
            <h5 class="mb-3"><i class="<?=$about_us_1->icon?>" style="color:<?=$about_us_1->icon_bg?> !important"></i><?=$about_us_1->icon_heading?></h5>
          </div>
          
        </div>

        <?php
$about_us_query = $conn->query("SELECT * FROM about_us WHERE id = 1");
$about_us = $about_us_query->fetch_object();
?>
        <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
          <div class="d-flex align-items-center justify-content-center rounded" style="width:60px;height:60px; background-color:<?=$about_us->photo_icon_bg?>"><i class="<?=$about_us->photo_icon?>"></i></div>
          <div class="ps-4">
            <h5 class="mb-2"><?=$about_us->photo_heading?></h5>
            <h4 class="mb-0" style="color: <?=$about_us->photo_number_bg?>;"><?=$about_us->photo_number?></h4>
          </div>
        </div>
        <a href="" class="btn py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s" style=" color: <?=$about_us->btn_text_bg?>; background-color: <?=$about_us->btn_color?>"><?=$about_us->btn_text?></a></div>
      <div class="col-lg-5" style="min-height:500px;">
        <div class="position-relative h-100"><img src="backend/<?=$about_us->photo?>" alt="website template image" class="position-absolute w-100 h-100 rounded wow zoomIn" style="object-fit:cover;" data-wow-delay="0.9s"></div>
      </div>
    </div>
  </div>
</div>

<?php
$choose_us_query = $conn->query("SELECT * FROM choose_us WHERE id = 1");
$choose_us = $choose_us_query->fetch_object();
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width:600px;">
      <h5 class="fw-bold text-uppercase" style="color: <?=$choose_us->sub_heading_bg?>"><?=$choose_us->sub_heading?></h5>
      <h1 class="mb-0" style="color:<?=$choose_us->heading_bg?>; "><?=$choose_us->heading?></h1>
    </div>zzzzzzz

    <?php
$choose_us_1_query = $conn->query("SELECT * FROM choose_us_1 WHERE id = 1");
$choose_us_1 = $choose_us_1_query->fetch_object();
?>
    <div class="row g-5">
      <div class="col-lg-4">
        <div class="row g-5">
          <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
            <div class="rounded d-flex align-items-center justify-content-center mb-3" style="width:60px;height:60px; background-color: <?=$choose_us_1->card_bg?>;"><i class="<?=$choose_us_1->card_icon?>" style="color:white;"></i></div>
            <h4 style="color: <?=$choose_us_1->sub_heading_bg?>"><?=$choose_us_1->sub_heading?></h4>
            <p class="mb-0" style="color: <?=$choose_us_1->heading_bg?>;"><?=$choose_us_1->heading?></p>
          </div>

          <?php
$choose_us_1_query = $conn->query("SELECT * FROM choose_us_1 WHERE id = 2");
$choose_us_1 = $choose_us_1_query->fetch_object();
?>        
          <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
            <div class="rounded d-flex align-items-center justify-content-center mb-3" style="width:60px;height:60px; background-color: <?=$choose_us_1->card_bg?>;"><i class="<?=$choose_us_1->card_icon?>" style="color:white;"></i></div>
            <h4 style="color: <?=$choose_us_1->sub_heading_bg?>"><?=$choose_us_1->sub_heading?></h4>
            <p class="mb-0" style="color: <?=$choose_us_1->heading_bg?>;"><?=$choose_us_1->heading?></p>
          </div>
        </div>
      </div>


      <?php
$choose_us_1_query = $conn->query("SELECT * FROM choose_us_1 WHERE id = 3");
$choose_us_1 = $choose_us_1_query->fetch_object();
?>     
      <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height:350px;">
        <div class="position-relative h-100"><img src="images/Rectangle11.png" alt="website template image" class="position-absolute w-100 h-100 rounded wow zoomIn" style="object-fit:cover;" data-wow-delay="0.1s"></div>
      </div>
      <div class="col-lg-4">
        <div class="row g-5">
          <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
          <div class="rounded d-flex align-items-center justify-content-center mb-3" style="width:60px;height:60px; background-color: <?=$choose_us_1->card_bg?>;"><i class="<?=$choose_us_1->card_icon?>" style="color:white;"></i></div>
            <h4 style="color: <?=$choose_us_1->sub_heading_bg?>"><?=$choose_us_1->sub_heading?></h4>
            <p class="mb-0" style="color: <?=$choose_us_1->heading_bg?>;"><?=$choose_us_1->heading?></p>
          </div>

          <?php
$choose_us_1_query = $conn->query("SELECT * FROM choose_us_1 WHERE id = 4");
$choose_us_1 = $choose_us_1_query->fetch_object();
?>
          <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
          <div class="rounded d-flex align-items-center justify-content-center mb-3" style="width:60px;height:60px; background-color: <?=$choose_us_1->card_bg?>;"><i class="<?=$choose_us_1->card_icon?>" style="color:white;"></i></div>
            <h4 style="color: <?=$choose_us_1->sub_heading_bg?>"><?=$choose_us_1->sub_heading?></h4>
            <p class="mb-0" style="color: <?=$choose_us_1->heading_bg?>;"><?=$choose_us_1->heading?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$our_services_query = $conn->query("SELECT * FROM our_services WHERE id = 1");
$our_services = $our_services_query->fetch_object();
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width:600px;">
      <h5 class="fw-bold text-uppercase" style="color: <?=$our_services->sub_heading_bg?>"><?=$our_services->sub_heading?></h5>
      <h1 class="mb-0" style="color: <?=$our_services->heading_bg?>"><?=$our_services->heading?></h1>
    </div>

    <?php
$our_services_1_query = $conn->query("SELECT * FROM our_services_1 WHERE id = 1");
$our_services_1 = $our_services_1_query->fetch_object();
?>
    <div class="row g-5">
      <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
        <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center" style="background-color: <?=$our_services_1->card_bg?>">
          <div class="service-icon"><i class="<?=$our_services_1->card_icon?>" style="color: <?=$our_services_1->icon_bg?>";></i></div>
          <h4 class="mb-3" style="color: <?=$our_services_1->heading_bg?>"><?=$our_services_1->card_heading?></h4>
          <p class="m-0" style= "color: <?=$our_services_1->card_paragraph_bg?>"><?=$our_services_1->card_paragraph?></p>
          <a class="btn btn-lg btn-primary rounded" href=""><i class="bi bi-arrow-right"></i></a></div>
      </div>

      <?php
$our_services_1_query = $conn->query("SELECT * FROM our_services_1 WHERE id = 2");
$our_services_1 = $our_services_1_query->fetch_object();
?>
      <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
      <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center" style="background-color: <?=$our_services_1->card_bg?>">
          <div class="service-icon"><i class="<?=$our_services_1->card_icon?>" style="color: <?=$our_services_1->icon_bg?>";></i></div>
          <h4 class="mb-3" style="color: <?=$our_services_1->heading_bg?>"><?=$our_services_1->card_heading?></h4>
          <p class="m-0" style= "color: <?=$our_services_1->card_paragraph_bg?>"><?=$our_services_1->card_paragraph?></p>
          <a class="btn btn-lg btn-primary rounded" href=""><i class="bi bi-arrow-right"></i></a></div>
      </div>

      <?php
$our_services_1_query = $conn->query("SELECT * FROM our_services_1 WHERE id = 3");
$our_services_1 = $our_services_1_query->fetch_object();
?>
      <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
      <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center" style="background-color: <?=$our_services_1->card_bg?>">
          <div class="service-icon"><i class="<?=$our_services_1->card_icon?>" style="color: <?=$our_services_1->icon_bg?>";></i></div>
          <h4 class="mb-3" style="color: <?=$our_services_1->heading_bg?>"><?=$our_services_1->card_heading?></h4>
          <p class="m-0" style= "color: <?=$our_services_1->card_paragraph_bg?>"><?=$our_services_1->card_paragraph?></p>
          <a class="btn btn-lg btn-primary rounded" href=""><i class="bi bi-arrow-right"></i></a></div>
      </div>

      <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
        <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center" style="background-color: <?=$our_services_1->card_bg?>">,
      </div>

      <?php
$our_services_1_query = $conn->query("SELECT * FROM our_services_1 WHERE id = 4");
$our_services_1 = $our_services_1_query->fetch_object();
?>
      <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
      <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center" style="background-color: <?=$our_services_1->card_bg?>">
          <div class="service-icon"><i class="<?=$our_services_1->card_icon?>" style="color: <?=$our_services_1->icon_bg?>";></i></div>
          <h4 class="mb-3" style="color: <?=$our_services_1->heading_bg?>"><?=$our_services_1->card_heading?></h4>
          <p class="m-0" style= "color: <?=$our_services_1->card_paragraph_bg?>"><?=$our_services_1->card_paragraph?></p>
          <a class="btn btn-lg btn-primary rounded" href=""><i class="bi bi-arrow-right"></i></a></div>
      </div>

      <?php
$our_services_1_query = $conn->query("SELECT * FROM our_services_1 WHERE id = 5");
$our_services_1 = $our_services_1_query->fetch_object();
?>
      <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
        <div class="service-item rounded d-flex flex-column align-items-center justify-content-center text-center" style="background-color: <?=$our_services_1->card_bg?>">
          <div class="service-icon"><i class="<?=$our_services_1->card_icon?>" style="color: <?=$our_services_1->icon_bg?>";></i></div>
          <h4 class="mb-3" style="color: <?=$our_services_1->heading_bg?>"><?=$our_services_1->card_heading?></h4>
          <p class="m-0" style= "color: <?=$our_services_1->card_paragraph_bg?>"><?=$our_services_1->card_paragraph?></p>
          <a class="btn btn-lg btn-primary rounded" href=""><i class="bi bi-arrow-right"></i></a></div>
      </div>

      <?php
$our_services_query = $conn->query("SELECT * FROM our_services WHERE id = 1");
$our_services = $our_services_query->fetch_object();
?>
      <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
        <div class="position-relative rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5" style="background-color: <?=$our_services->card_bg?>";>;">
          <h3 class="text-white mb-3" style="color: <?=$our_services->card_heading_bg?>"><?=$our_services->card_heading?></h3>
          <p class="text-white mb-3"  style="font-size: 12px; color: <?=$our_services->card_paragraph_bg?>"><?=$our_services->card_paragraph?></p>
          <p class="text-white mb-0"><?=$our_services->card_number?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$pricing_plans_query = $conn->query("SELECT * FROM pricing_plans WHERE id = 1");
$pricing_plans = $pricing_plans_query->fetch_object();
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width:600px;">
      <h5 class="fw-bold text-uppercase" style="color: <?=$pricing_plans->sub_heading_bg?>;"><?=$pricing_plans->sub_heading?></h5>
      <h1 class="mb-0" style="color: <?=$pricing_plans->heading_bg?>;"><?=$pricing_plans->heading?></h1>
    </div>

    <?php
$pricing_plans_1_query = $conn->query("SELECT * FROM pricing_plans_1 WHERE id = 1");
$pricing_plans_1 = $pricing_plans_1_query->fetch_object();
?>
    <div class="row g-0">
      <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
        <div class="rounded" style="background-color:<?=$pricing_plans_1->card_bg?>;">
          <div class="border-bottom py-4 px-5 mb-4">
            <h4 class=" mb-1" style="color: <?=$pricing_plans_1->card_sub_heading_bg?>;"><?=$pricing_plans_1->card_sub_heading?></h4>
            <small class="text-uppercase" style="color: <?=$pricing_plans_1->card_heading_bg?>;"><?=$pricing_plans_1->card_heading?></small></div>
          <div class="p-5 pt-0">
            <h1 class="display-5 mb-3"><small class="align-top" style="font-size:22px;line-height:45px; color: <?=$pricing_plans_1->currency_symbol_bg?>"><?=$pricing_plans_1->currency_symbol?></small><span style="color: <?=$pricing_plans_1->price_bg?>;"><?=$pricing_plans_1->price?></span><small class="align-bottom" style="font-size:16px;line-height:40px; color: <?=$pricing_plans_1->month_bg?>"><?=$pricing_plans_1->month?></small></h1>
            <div class="d-flex justify-content-between mb-3"><span><?=$pricing_plans_1->course_one?></span><i class="<?=$pricing_plans_1->course_icon_one?>" style="color: <?=$pricing_plans_1->course_icon_one_bg?> !important"></i></div>
            <div class="d-flex justify-content-between mb-3"><span><?=$pricing_plans_1->course_two?></span><i class="<?=$pricing_plans_1->course_icon_two?>" style="color: <?=$pricing_plans_1->course_icon_two_bg?> !important"></i></div>
            <div class="d-flex justify-content-between mb-3"><span><?=$pricing_plans_1->course_three?></span><i class="<?=$pricing_plans_1->course_icon_three?>" style="color: <?=$pricing_plans_1->course_icon_three_bg?> !important"></i></div>
            <div class="d-flex justify-content-between mb-2"><span><?=$pricing_plans_1->course_four?></span><i class="<?=$pricing_plans_1->course_icon_four?>" style="color: <?=$pricing_plans_1->course_icon_four_bg?> !important"></i></div>
            <a href="" class="btn py-2 px-4 mt-4" style="background-color: <?=$pricing_plans_1->btn_bg?>"><span style="color: <?=$pricing_plans_1->btn_text_bg?>;"><?=$pricing_plans_1->btn_text?></span></a></div>
        </div>
      </div>

      <?php
$pricing_plans_1_query = $conn->query("SELECT * FROM pricing_plans_1 WHERE id = 2");
$pricing_plans_1 = $pricing_plans_1_query->fetch_object();
?>
      <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
        <div class="bg-white rounded shadow position-relative" style="z-index:1;">
          <div class="border-bottom py-4 px-5 mb-4">
            <h4 class="text-primary mb-1">Standard Plan</h4>
            <small class="text-uppercase">For Medium Size Business</small></div>
          <div class="p-5 pt-0">
          <h1 class="display-5 mb-3"><small class="align-top" style="font-size:22px;line-height:45px; color: <?=$pricing_plans_1->currency_symbol_bg?>"><?=$pricing_plans_1->currency_symbol?></small><span style="color: <?=$pricing_plans_1->price_bg?>;"><?=$pricing_plans_1->price?></span><small class="align-bottom" style="font-size:16px;line-height:40px; color: <?=$pricing_plans_1->month_bg?>"><?=$pricing_plans_1->month?></small></h1>
            <div class="d-flex justify-content-between mb-3"><span><?=$pricing_plans_1->course_one?></span><i class="<?=$pricing_plans_1->course_icon_one?>" style="color: <?=$pricing_plans_1->course_icon_one_bg?> !important"></i></div>
            <div class="d-flex justify-content-between mb-3"><span><?=$pricing_plans_1->course_two?></span><i class="<?=$pricing_plans_1->course_icon_two?>" style="color: <?=$pricing_plans_1->course_icon_two_bg?> !important"></i></div>
            <div class="d-flex justify-content-between mb-3"><span><?=$pricing_plans_1->course_three?></span><i class="<?=$pricing_plans_1->course_icon_three?>" style="color: <?=$pricing_plans_1->course_icon_three_bg?> !important"></i></div>
            <div class="d-flex justify-content-between mb-2"><span><?=$pricing_plans_1->course_four?></span><i class="<?=$pricing_plans_1->course_icon_four?>" style="color: <?=$pricing_plans_1->course_icon_four_bg?> !important"></i></div>
            <a href="" class="btn py-2 px-4 mt-4" style="background-color: <?=$pricing_plans_1->btn_bg?>"><span style="color: <?=$pricing_plans_1->btn_text_bg?>;"><?=$pricing_plans_1->btn_text?></span></a></div>
        </div>
      </div>


      <?php
$pricing_plans_1_query = $conn->query("SELECT * FROM pricing_plans_1 WHERE id = 3");
$pricing_plans_1 = $pricing_plans_1_query->fetch_object();
?>
      <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
        <div class="bg-light rounded">
          <div class="border-bottom py-4 px-5 mb-4">
            <h4 class="text-primary mb-1">Advanced Plan</h4>
            <small class="text-uppercase">For Large Size Business</small></div>
          <div class="p-5 pt-0">
          <h1 class="display-5 mb-3"><small class="align-top" style="font-size:22px;line-height:45px; color: <?=$pricing_plans_1->currency_symbol_bg?>"><?=$pricing_plans_1->currency_symbol?></small><span style="color: <?=$pricing_plans_1->price_bg?>;"><?=$pricing_plans_1->price?></span><small class="align-bottom" style="font-size:16px;line-height:40px; color: <?=$pricing_plans_1->month_bg?>"><?=$pricing_plans_1->month?></small></h1>
            <div class="d-flex justify-content-between mb-3"><span><?=$pricing_plans_1->course_one?></span><i class="<?=$pricing_plans_1->course_icon_one?>" style="color: <?=$pricing_plans_1->course_icon_one_bg?> !important"></i></div>
            <div class="d-flex justify-content-between mb-3"><span><?=$pricing_plans_1->course_two?></span><i class="<?=$pricing_plans_1->course_icon_two?>" style="color: <?=$pricing_plans_1->course_icon_two_bg?> !important"></i></div>
            <div class="d-flex justify-content-between mb-3"><span><?=$pricing_plans_1->course_three?></span><i class="<?=$pricing_plans_1->course_icon_three?>" style="color: <?=$pricing_plans_1->course_icon_three_bg?> !important"></i></div>
            <div class="d-flex justify-content-between mb-2"><span><?=$pricing_plans_1->course_four?></span><i class="<?=$pricing_plans_1->course_icon_four?>" style="color: <?=$pricing_plans_1->course_icon_four_bg?> !important"></i></div>
            <a href="" class="btn py-2 px-4 mt-4" style="background-color: <?=$pricing_plans_1->btn_bg?>"><span style="color: <?=$pricing_plans_1->btn_text_bg?>;"><?=$pricing_plans_1->btn_text?></span></a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$quote_query = $conn->query("SELECT * FROM quote WHERE id = 1");
$quote = $quote_query->fetch_object();
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-lg-7">
        <div class="section-title position-relative pb-3 mb-5">
          <h5 class="fw-bold text-uppercase" style="color: <?=$quote->sub_heading_bg?>;"><?=$quote->sub_heading?></h5>
          <h1 class="mb-0" style="color: <?=$quote->heading_bg?>;"><?=$quote->heading?></h1>
        </div>
        <div class="row gx-3">
          <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
            <h5 class="mb-4"><i class="<?=$quote->icon_one?>" style="color: <?=$quote->icon_one_bg?>";></i><span style="color: <?=$quote->icon_one_heading_bg?>"><?=$quote->icon_one_heading?></span></h5>
          </div>
          <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
            <h5 class="mb-4"><i class="<?=$quote->icon_two?>" style="color: <?=$quote->icon_two_bg?>";></i><span style="color: <?=$quote->icon_two_heading_bg?>"><?=$quote->icon_two_heading?></span></h5>
          </div>
        </div>
        <p class="mb-4" style="color: <?=$quote->paragraph_bg?>;"><?=$quote->paragraph?></p>
        <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
          <div class="d-flex align-items-center justify-content-center rounded" style="width:60px;height:60px; background-color: <?=$quote->box_bg?>"><i class="<?=$quote->box_icon?>" style="color: <?=$quote->box_icon_bg?>"></i></div>
          <div class="ps-4">
            <h5 class="mb-2" style="color:<?=$quote->box_heading_bg?>"><?=$quote->box_heading?></h5>
            <h4 class="text-primary mb-0" style="color: <?=$quote->box_number_bg?>;"><?=$quote->box_number?></h4>
          </div>
        </div>
      </div>

      <?php
$quote_table_query = $conn->query("SELECT * FROM quote_table WHERE id = 1");
$quote_table = $quote_table_query->fetch_object();
?>
      <div class="col-lg-5">
        <div class="rounded h-100 d-flex align-items-center p-5 wow zoomIn" style="background-color: <?=$quote_table->table_bg?>" data-wow-delay="0.9s">
          <form action="#" method="post">
            <div class="row g-3">
              <div class="col-xl-12">
                <input type="text" class="form-control  border-0" placeholder="<?=$quote_table->row_name?>" style="height:55px; background-color: <?=$quote_table->row_bg?>">
              </div>
              <div class="col-12">
                <input type="email" class="form-control bg-light border-0" placeholder="<?=$quote_table->row_email?>" style="height:55px; background-color: <?=$quote_table->row_bg?>">
              </div>
              <div class="col-12">
                <select class="form-select bg-light border-0" style="height:55px; background-color: <?=$quote_table->row_bg?>">
                  <option selected><?=$quote_table->slect_option?></option>
                  <option value="1"><?=$quote_table->slect_1?></option>
                  <option value="2"><?=$quote_table->slect_2?></option>
                  <option value="3"><?=$quote_table->slect_3?></option>
                </select>
              </div>
              <div class="col-12">
                <textarea class="form-control  border-0" style="height:55px; background-color: <?=$quote_table->row_bg?>" rows="3" placeholder="<?=$quote_table->row_message?>"></textarea>
              </div>
              <div class="col-12">
                <button class="btn w-100 py-3" style="color: <?=$quote_table->btn_text_bg?>; background-color:<?=$quote_table->btn_bg?>" type="submit"><?=$quote_table->btn_text?></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$testimonial_query = $conn->query("SELECT * FROM testimonial WHERE id = 1");
$testimonial = $testimonial_query->fetch_object();
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width:600px;">
      <h5 class="fw-bold text-uppercase" style="color: <?=$testimonial->sub_heading_bg?>;"><?=$testimonial->sub_heading?></h5>
      <h1 class="mb-0" style="color: <?=$testimonial->heading_bg?>;"><?=$testimonial->heading?></h1>
    </div>

  
    <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
    <?php
$testimonial_1_query = $conn->query("SELECT * FROM testimonial_1 WHERE id = 1");
$testimonial_1 = $testimonial_1_query->fetch_object();
?>
      <div class="testimonial-item my-4" style="background-color: <?=$testimonial_1->card_bg?>">
        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5"><img src="<?="backend/".$testimonial_1->photo?>" alt="website template image" class="img-fluid rounded" style="width:60px;height:60px;">
          <div class="ps-4"> 
            <h4 class="mb-1" style="color: <?=$testimonial_1->person_name_bg?>"><?=$testimonial_1->person_name?></h4>
            <small class="text-uppercase" style="color: <?=$testimonial_1->person_info_bg?>"><?=$testimonial_1->person_info?></small></div>
        </div>
        <div class="pt-4 pb-5 px-5" style="color: <?=$testimonial_1->paragraph_bg?>"><?=$testimonial_1->paragraph?></div>
      </div>


      <?php
$testimonial_1_query = $conn->query("SELECT * FROM testimonial_1 WHERE id = 2");
$testimonial_1 = $testimonial_1_query->fetch_object();
?>
      <div class="testimonial-item my-4" style="background-color: <?=$testimonial_1->card_bg?>">
        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5"><img src="<?="backend/".$testimonial_1->photo?>" alt="website template image" class="img-fluid rounded" style="width:60px;height:60px;">
          <div class="ps-4"> 
            <h4 class="mb-1" style="color: <?=$testimonial_1->person_name_bg?>"><?=$testimonial_1->person_name?></h4>
            <small class="text-uppercase" style="color: <?=$testimonial_1->person_info_bg?>"><?=$testimonial_1->person_info?></small></div>
        </div>
        <div class="pt-4 pb-5 px-5" style="color: <?=$testimonial_1->paragraph_bg?>"><?=$testimonial_1->paragraph?></div>
      </div>

      <?php
$testimonial_1_query = $conn->query("SELECT * FROM testimonial_1 WHERE id = 3");
$testimonial_1 = $testimonial_1_query->fetch_object();
?>
      <div class="testimonial-item my-4" style="background-color: <?=$testimonial_1->card_bg?>">
        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5"><img src="<?="backend/".$testimonial_1->photo?>" alt="website template image" class="img-fluid rounded" style="width:60px;height:60px;">
          <div class="ps-4"> 
            <h4 class="mb-1" style="color: <?=$testimonial_1->person_name_bg?>"><?=$testimonial_1->person_name?></h4>
            <small class="text-uppercase" style="color: <?=$testimonial_1->person_info_bg?>"><?=$testimonial_1->person_info?></small></div>
        </div>
        <div class="pt-4 pb-5 px-5" style="color: <?=$testimonial_1->paragraph_bg?>"><?=$testimonial_1->paragraph?></div>
      </div>

      <?php
$testimonial_1_query = $conn->query("SELECT * FROM testimonial_1 WHERE id = 4");
$testimonial_1 = $testimonial_1_query->fetch_object();
?>
      <div class="testimonial-item my-4" style="background-color: <?=$testimonial_1->card_bg?>">
        <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5"><img src="<?="backend/".$testimonial_1->photo?>" alt="website template image" class="img-fluid rounded" style="width:60px;height:60px;">
          <div class="ps-4"> 
            <h4 class="mb-1" style="color: <?=$testimonial_1->person_name_bg?>"><?=$testimonial_1->person_name?></h4>
            <small class="text-uppercase" style="color: <?=$testimonial_1->person_info_bg?>"><?=$testimonial_1->person_info?></small></div>
        </div>
        <div class="pt-4 pb-5 px-5" style="color: <?=$testimonial_1->paragraph_bg?>"><?=$testimonial_1->paragraph?></div>
      </div>
    </div>
  </div>
</div>

<?php
$team_members_query = $conn->query("SELECT * FROM team_members WHERE id = 1");
$team_members = $team_members_query->fetch_object();
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width:600px;">
      <h5 class="fw-bold text-uppercase" style="color: <?=$team_members->sub_heading_bg?>"><?=$team_members->sub_heading?></h5>
      <h1 class="mb-0" style="color: <?=$team_members->heading_bg?>"><?=$team_members->heading?>"</h1>
    </div>

   
    <div class="row g-5">
    <?php
$team_members_1_query = $conn->query("SELECT * FROM team_members_1 WHERE id = 1");
$team_members_1 = $team_members_1_query->fetch_object();
?>
      <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
        <div class="team-item rounded overflow-hidden" style="background-color:<?=$team_members_1->card_bg?>">
          <div class="team-img position-relative overflow-hidden"><img class="img-fluid w-100" src="<?="backend/".$team_members_1->photo?>" alt="website template image">
            <div class="team-social"><a class="btn btn-lg btn-lg-square rounded" href="" style="background-color: <?=$team_members_1->icon_1_bg?>"><i class="<?=$team_members_1->icon_1?>" style="color: #ffffff;"></i></a> <a class="btn btn-lg btn-lg-square rounded" href="" style="background-color: <?=$team_members_1->icon_2_bg?>"><i class="<?=$team_members_1->icon_2?>" style="color: #ffffff;"></i></a> <a class="btn btn-lg btn-lg-square rounded" href="" style="background-color: <?=$team_members_1->icon_3_bg?>"><i class="<?=$team_members_1->icon_3?>" style="color: #ffffff;"></i></a> <a class="btn btn-lg btn-lg-square rounded" href="" style="background-color: <?=$team_members_1->icon_1_bg?>"><i class="<?=$team_members_1->icon_4?>" style="color: #ffffff;"></i></a></div>
          </div>
          <div class="text-center py-4">
            <h4 style="color: <?=$team_members_1->photo_name_bg?>" !important> Alex Taylor</h4>
            <p class="text-uppercase m-0" style="color: <?=$team_members_1->photo_info_bg?>"><?=$team_members_1->photo_info?></p>
          </div>
        </div>
      </div>

      <?php
$team_members_1_query = $conn->query("SELECT * FROM team_members_1 WHERE id = 2");
$team_members_1 = $team_members_1_query->fetch_object();
?>
      <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
        <div class="team-item rounded overflow-hidden" style="background-color:<?=$team_members_1->card_bg?>">
          <div class="team-img position-relative overflow-hidden"><img class="img-fluid w-100" src="<?="backend/".$team_members_1->photo?>" alt="website template image">
            <div class="team-social"><a class="btn btn-lg btn-lg-square rounded" href="" style="background-color: <?=$team_members_1->icon_1_bg?>"><i class="<?=$team_members_1->icon_1?>" style="color: #ffffff;"></i></a> <a class="btn btn-lg btn-lg-square rounded" href="" style="background-color: <?=$team_members_1->icon_2_bg?>"><i class="<?=$team_members_1->icon_2?>" style="color: #ffffff;"></i></a> <a class="btn btn-lg btn-lg-square rounded" href="" style="background-color: <?=$team_members_1->icon_3_bg?>"><i class="<?=$team_members_1->icon_3?>" style="color: #ffffff;"></i></a> <a class="btn btn-lg btn-lg-square rounded" href="" style="background-color: <?=$team_members_1->icon_1_bg?>"><i class="<?=$team_members_1->icon_4?>" style="color: #ffffff;"></i></a></div>
          </div>
          <div class="text-center py-4">
            <h4 style="color: <?=$team_members_1->photo_name_bg?>" !important> Alex Taylor</h4>
            <p class="text-uppercase m-0" style="color: <?=$team_members_1->photo_info_bg?>"><?=$team_members_1->photo_info?></p>
          </div>
        </div>
      </div>

      <?php
$team_members_1_query = $conn->query("SELECT * FROM team_members_1 WHERE id = 3");
$team_members_1 = $team_members_1_query->fetch_object();
?>
      <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
        <div class="team-item rounded overflow-hidden" style="background-color:<?=$team_members_1->card_bg?>">
          <div class="team-img position-relative overflow-hidden"><img class="img-fluid w-100" src="<?="backend/".$team_members_1->photo?>" alt="website template image">
            <div class="team-social"><a class="btn btn-lg btn-lg-square rounded" href="" style="background-color: <?=$team_members_1->icon_1_bg?>"><i class="<?=$team_members_1->icon_1?>" style="color: #ffffff;"></i></a> <a class="btn btn-lg btn-lg-square rounded" href="" style="background-color: <?=$team_members_1->icon_2_bg?>"><i class="<?=$team_members_1->icon_2?>" style="color: #ffffff;"></i></a> <a class="btn btn-lg btn-lg-square rounded" href="" style="background-color: <?=$team_members_1->icon_3_bg?>"><i class="<?=$team_members_1->icon_3?>" style="color: #ffffff;"></i></a> <a class="btn btn-lg btn-lg-square rounded" href="" style="background-color: <?=$team_members_1->icon_1_bg?>"><i class="<?=$team_members_1->icon_4?>" style="color: #ffffff;"></i></a></div>
          </div>
          <div class="text-center py-4">
            <h4 style="color: <?=$team_members_1->photo_name_bg?>" !important> Alex Taylor</h4>
            <p class="text-uppercase m-0" style="color: <?=$team_members_1->photo_info_bg?>"><?=$team_members_1->photo_info?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$latest_blog_query = $conn->query("SELECT * FROM latest_blog WHERE id = 1");
$latest_blog = $latest_blog_query->fetch_object();
?>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width:600px;">
      <h5 class="fw-bold text-uppercase" style="color: <?=$latest_blog->sub_heading_bg?>"><?=$latest_blog->sub_heading?></h5>
      <h1 class="mb-0" style="color: <?=$latest_blog->heading_bg?>"><?=$latest_blog->heading?></h1>
    </div>
    <div class="row g-5">


    <?php
$latest_blog_1_query = $conn->query("SELECT * FROM latest_blog_1 WHERE id = 1");
$latest_blog_1 = $latest_blog_1_query->fetch_object();
?>
      <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
        <div class="blog-item rounded overflow-hidden" style="background-color:<?=$latest_blog_1->card_bg?>">
          <div class="blog-img position-relative overflow-hidden"><img class="img-fluid" src="<?="backend/".$latest_blog_1->photo?>" alt="website template image"> <a class="position-absolute top-0 start-0 rounded-end mt-5 py-2 px-4" href="" style=" color: <?=$latest_blog_1->card_box_text_bg?>; background-color:<?=$latest_blog_1->card_box_bg?>"><?=$latest_blog_1->card_box_text?></a></div>
          <div class="p-4">
            <div class="d-flex mb-3"><small class="me-3"><i class="<?=$latest_blog_1->card_icon?>" style="color:<?=$latest_blog_1->card_icon_bg?> !important"></i><?=$latest_blog_1->card_icon_name?></small> <small><i class="<?=$latest_blog_1->card_date_icon?>" style="color:<?=$latest_blog_1->card_date_icon_bg?> !important"></i><?=$latest_blog_1->card_date?></small></div>
            <h4 class="mb-3" style="color: <?=$latest_blog_1->card_heading_bg?>"><?=$latest_blog_1->card_heading?></h4>
            <p style="color: <?=$latest_blog_1->card_paragraph_bg?>"><?=$latest_blog_1->card_paragraph?></p>
            <a class="text-uppercase" href="">Read More <i class="<?=$latest_blog_1->read_more_icon?>" style="color: <?=$latest_blog_1->read_more_icon_bg?> !important"></i></a></div>
        </div>
      </div>
      <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
        <div class="blog-item bg-light rounded overflow-hidden">
          <div class="blog-img position-relative overflow-hidden"><img class="img-fluid" src="images/Rectangle26.png" alt="website template image"> <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a></div>
          <div class="p-4">
          <div class="d-flex mb-3"><small class="me-3"><i class="<?=$latest_blog_1->card_icon?>" style="color:<?=$latest_blog_1->card_icon_bg?> !important"></i><?=$latest_blog_1->card_icon_name?></small> <small><i class="<?=$latest_blog_1->card_date_icon?>" style="color:<?=$latest_blog_1->card_date_icon_bg?> !important"></i><?=$latest_blog_1->card_date?></small></div>
            <h4 class="mb-3" style="color: <?=$latest_blog_1->card_heading_bg?>"><?=$latest_blog_1->card_heading?></h4>
            <p style="color: <?=$latest_blog_1->card_paragraph_bg?>"><?=$latest_blog_1->card_paragraph?></p>
            <a class="text-uppercase" href="">Read More <i class="<?=$latest_blog_1->read_more_icon?>" style="color: <?=$latest_blog_1->read_more_icon_bg?> !important"></i></a></div>
        </div>
      </div>
      <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
        <div class="blog-item bg-light rounded overflow-hidden">
          <div class="blog-img position-relative overflow-hidden"><img class="img-fluid" src="images/Rectangle26.png" alt="website template image"> <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a></div>
          <div class="p-4">
          <div class="d-flex mb-3"><small class="me-3"><i class="<?=$latest_blog_1->card_icon?>" style="color:<?=$latest_blog_1->card_icon_bg?> !important"></i><?=$latest_blog_1->card_icon_name?></small> <small><i class="<?=$latest_blog_1->card_date_icon?>" style="color:<?=$latest_blog_1->card_date_icon_bg?> !important"></i><?=$latest_blog_1->card_date?></small></div>
            <h4 class="mb-3" style="color: <?=$latest_blog_1->card_heading_bg?>"><?=$latest_blog_1->card_heading?></h4>
            <p style="color: <?=$latest_blog_1->card_paragraph_bg?>"><?=$latest_blog_1->card_paragraph?></p>
            <a class="text-uppercase" href="">Read More <i class="<?=$latest_blog_1->read_more_icon?>" style="color: <?=$latest_blog_1->read_more_icon_bg?> !important"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-5 mb-5">
    <div class="bg-white">
      <?php
    $carousel_query = $conn->query("SELECT * FROM carousel WHERE id = 1");
$carousel = $carousel_query->fetch_object();
?>
      <div class="owl-carousel vendor-carousel"><img src="<?=$carousel->photo?>" alt="website template image">
      
      <?php
    $carousel_query = $conn->query("SELECT * FROM carousel WHERE id = 2");
$carousel = $carousel_query->fetch_object();
?>
      <img src="<?=$carousel->photo?>" alt="website template image">
      
      <?php
    $carousel_query = $conn->query("SELECT * FROM carousel WHERE id = 3");
$carousel = $carousel_query->fetch_object();
?>
      <img src="<?=$carousel->photo?>" alt="website template image">
      
      <?php
    $carousel_query = $conn->query("SELECT * FROM carousel WHERE id = 4");
$carousel = $carousel_query->fetch_object();
?>
      <img src="<?=$carousel->photo?>" alt="website template image">
      
      <?php
    $carousel_query = $conn->query("SELECT * FROM carousel WHERE id = 5");
$carousel = $carousel_query->fetch_object();
?>
      <img src="<?=$carousel->photo?>" alt="website template image">
      
      <?php
    $carousel_query = $conn->query("SELECT * FROM carousel WHERE id = 6");
$carousel = $carousel_query->fetch_object();
?>
      <img src="<?=$carousel->photo?>" alt="website template image">
      
      <?php
    $carousel_query = $conn->query("SELECT * FROM carousel WHERE id = 7");
$carousel = $carousel_query->fetch_object();
?>
      <img src="<?=$carousel->photo?>" alt="website template image"> 
    </div>
    </div>
  </div>
</div>
<?php
        $footer_query = $conn->query("SELECT * FROM footer WHERE id =1");
        $footer = $footer_query->fetch_object();
        ?>
      <div class="container-fluid mt-5 wow fadeInUp" style="background-color:<?=$footer->footer_bg?>" data-wow-delay="0.1s">
        <div class="container">
          <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
              <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 p-4" style="background-color:<?=$footer->photo_box_bg?>"><a href="" class="navbar-brand">
                  
                  <img src="<?="backend/".$footer->photo?>" alt="hottrix_logo">
                </a>
                <p class="mt-3 mb-4" style="color: <?=$footer->paragraph_bg?>;"><?=$footer->paragraph?></p>
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" class="form-control  p-3" style="border-color: <?=$footer->search_box_bg?>" placeholder="<?=$footer->placeholder_email?>">
                    <button class="btn" style="background-color:<?=$footer->signup_box_bg?>; color:<?=$footer->signup_box_text_bg?>"><?=$footer->signup_box_text?></button>
                  </div>
                </form>
              </div>
            </div>

            <?php
        $get_in_touch_query = $conn->query("SELECT * FROM get_in_touch WHERE id =1");
        $get_in_touch = $get_in_touch_query->fetch_object();
        ?>
            <div class="col-lg-8 col-md-6">
              <div class="row gx-5">
                <div class="col-lg-4 col-md-12 pt-5 mb-5">
                  <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h3 class="mb-0" style="color:<?=$get_in_touch->heading_bg?>"><?=$get_in_touch->heading?></h3>
                  </div>
                  <div class="d-flex mb-2"><i class="<?=$get_in_touch->location_icon?>" style="color: <?=$get_in_touch->location_icon_bg?> !important"></i>
                    <p class="mb-0" style="color:<?=$get_in_touch->location_text_bg?>"><?=$get_in_touch->location_text?></p>
                  </div>
                  <div class="d-flex mb-2"><i class="<?=$get_in_touch->email_icon?>" style="color: <?=$get_in_touch->email_icon_bg?> !important"></i>
                    <p class="mb-0" style="color: <?=$get_in_touch->email_text_bg?>"><?=$get_in_touch->email_text?></p>
                  </div>
                  <div class="d-flex mb-2"><i class="<?=$get_in_touch->phone_icon?>" style="color: <?=$get_in_touch->phone_icon_bg?> !important"></i>
                    <p class="mb-0" style="color:<?=$get_in_touch->phone_number_bg?>"><?=$get_in_touch->phone_number?></p>
                  </div>
                  <div class="d-flex mt-4">
                    <a class="btn btn-square me-2" style=" color:<?=$get_in_touch->twitter_icon_bg?>; background-color:<?=$get_in_touch->icon_box_bg?>" href=""><i class="<?=$get_in_touch->twitter_icon?>"></i></a> 
                    <a class="btn btn-square me-2" style=" color:<?=$get_in_touch->facebook_icon_bg?>; background-color:<?=$get_in_touch->icon_box_bg?>" href=""><i class="<?=$get_in_touch->facebook_icon?>"></i></a> 
                    <a class="btn btn-square me-2" style=" color:<?=$get_in_touch->linkedin_icon_bg?>; background-color:<?=$get_in_touch->icon_box_bg?>" href=""><i class="<?=$get_in_touch->linkedin_icon?>"></i></a> 
                    <a class="btn btn-square me-2" style=" color:<?=$get_in_touch->instagram_icon_bg?>; background-color:<?=$get_in_touch->icon_box_bg?>" href=""><i class="<?=$get_in_touch->instagram_icon?>"></i></a></div>
                </div>

                <?php
        $quick_links_query = $conn->query("SELECT * FROM quick_links WHERE id =1");
        $quick_links = $quick_links_query->fetch_object();
        ?>
                <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                  <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h3 class="mb-0" style="color:<?=$quick_links->heading_bg?>"><?=$quick_links->heading?></h3>
                  </div>
                  <div class="link-animated d-flex flex-column justify-content-start">
                    <a class="mb-2" style="color:<?=$quick_links->link_1_bg?>" href=""><i class="<?=$quick_links->right_arrow?>" style="color:<?=$quick_links->right_arrow_bg?> !important"></i><?=$quick_links->link_1?></a> 
                    <a class="mb-2" style="color:<?=$quick_links->link_2_bg?>" href=""><i class="<?=$quick_links->right_arrow?>" style="color:<?=$quick_links->right_arrow_bg?> !important"></i><?=$quick_links->link_2?></a> 
                    <a class="mb-2" style="color:<?=$quick_links->link_3_bg?>" href=""><i class="<?=$quick_links->right_arrow?>" style="color:<?=$quick_links->right_arrow_bg?> !important"></i><?=$quick_links->link_3?></a> 
                    <a class="mb-2" style="color:<?=$quick_links->link_4_bg?>" href=""><i class="<?=$quick_links->right_arrow?>" style="color:<?=$quick_links->right_arrow_bg?> !important"></i><?=$quick_links->link_4?></a> 
                    <a class="mb-2" style="color:<?=$quick_links->link_5_bg?>" href=""><i class="<?=$quick_links->right_arrow?>" style="color:<?=$quick_links->right_arrow_bg?> !important"></i><?=$quick_links->link_5?></a> 
                    <a class="mb-2" style="color:<?=$quick_links->link_6_bg?>" href=""><i class="<?=$quick_links->right_arrow?>" style="color:<?=$quick_links->right_arrow_bg?> !important"></i><?=$quick_links->link_6?></a>
                  </div>
                </div>

                <?php
        $popular_links_query = $conn->query("SELECT * FROM popular_links WHERE id =1");
        $popular_links = $popular_links_query->fetch_object();
        ?>
                <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                  <div class="section-title section-title-sm position-relative pb-3 mb-4">
                  <h3 class="mb-0" style="color:<?=$popular_links->heading_bg?>"><?=$popular_links->heading?></h3>
                  </div>
                  <div class="link-animated d-flex flex-column justify-content-start">
                    <a class="mb-2" style="color:<?=$popular_links->link_1_bg?>" href=""><i class="<?=$popular_links->right_arrow?>" style="color:<?=$popular_links->right_arrow_bg?> !important"></i><?=$popular_links->link_1?></a> 
                    <a class="mb-2" style="color:<?=$popular_links->link_2_bg?>" href=""><i class="<?=$popular_links->right_arrow?>" style="color:<?=$popular_links->right_arrow_bg?> !important"></i><?=$popular_links->link_2?></a> 
                    <a class="mb-2" style="color:<?=$popular_links->link_3_bg?>" href=""><i class="<?=$popular_links->right_arrow?>" style="color:<?=$popular_links->right_arrow_bg?> !important"></i><?=$popular_links->link_3?></a> 
                    <a class="mb-2" style="color:<?=$popular_links->link_4_bg?>" href=""><i class="<?=$popular_links->right_arrow?>" style="color:<?=$popular_links->right_arrow_bg?> !important"></i><?=$popular_links->link_4?></a> 
                    <a class="mb-2" style="color:<?=$popular_links->link_5_bg?>" href=""><i class="<?=$popular_links->right_arrow?>" style="color:<?=$popular_links->right_arrow_bg?> !important"></i><?=$popular_links->link_5?></a> 
                    <a class="mb-2" style="color:<?=$popular_links->link_6_bg?>" href=""><i class="<?=$popular_links->right_arrow?>" style="color:<?=$popular_links->right_arrow_bg?> !important"></i><?=$popular_links->link_6?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
        $footer_query = $conn->query("SELECT * FROM footer WHERE id =1");
        $footer = $footer_query->fetch_object();
        ?>
      <div class="container-fluid" style="background-color:<?=$footer->footer_end_bg?>">
        <div class="container text-center">
          <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
              <div class="d-flex align-items-center justify-content-center" style="height:75px;">
                <p class="mb-0"><a class="border-bottom" style="color: <?=$footer->footer_end_info_bg?>" href=""><?=$footer->footer_end_info?></a>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
<a href="javascript:void(0)" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/easing.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/counterup.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>

<script type="text/javascript">
var gaProperty = 'UA-120201777-1';var disableStr = 'ga-disable-' + gaProperty;if (document.cookie.indexOf(disableStr + '=true') > -1) {window[disableStr] = true;}
function gaOptout(){document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2045 23:59:59 UTC; path=/';window[disableStr] = true;alert('Google Tracking has been deactivated');}
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','../../../../../../../www.google-analytics.com/analytics.js','ga');ga('create', 'UA-120201777-1', 'auto');ga('set', 'anonymizeIp', true);ga('send', 'pageview');
</script>
</body>

</html>