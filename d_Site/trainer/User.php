<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KIW Bussen</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="dist/css/datepicker.min.css" rel="stylesheet" type="text/css"> <!--css code date picker!!!! -->
    <script src="dist/js/datepicker.min.js"></script> <!--js code date picker!!!! -->

   
    <script src="dist/js/i18n/datepicker.en.js"></script>
  
  </head>
  <body>

  <!-- START: header -->

  <header role="banner" class="probootstrap-header">
    <div class="container-fluid">
        <a href="index.html" class="probootstrap-logo">KIW BUSSEN<span>.</span></a>
        
        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="#"></a></li>
     
        
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->
  
  <!-- START: section -->
  <section class="probootstrap-intro probootstrap-intro-inner" style="background-image: url(img/hero_bg_1_b.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate" data-animate-effect="fadeIn">Welkom</h1>
          <div class="probootstrap-subtitle probootstrap-animate" data-animate-effect="fadeIn">
            <!-- script urls for calender date picker -->



          </div>
        </div>
      </div>
    </div>
  
  </section>
  <!-- END: section -->

  <!-- hieronder script jquery and bootstrap https://www.solodev.com/blog/web-design/adding-a-datetime-picker-to-your-forms.stml -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
                    
                                      <section id="next-section" class="probootstrap-section">
                                        <div class="container">
                                        <div class="container">
  <form>
  <div class="panel panel-primary">
    <div class="panel-heading">Schedule an Appointment</div>
      <div class="panel-body">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label class="control-label">Naam</label>
                  <input type="text" class="form-control" name="fname" id="fname">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label class="control-label">Voornaam</label>
                  <input type="text" class="form-control" name="lname" id="lname">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label class="control-label">Email</label>
                  <input type="text" class="form-control" name="email" id="email">
               </div>
            </div>
            <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label class="control-label">Bericht</label>
                  <input type="Textbox" class="form-control" name="Bericht" id="Bericht">
               </div>
            </div>
            <div class='col-md-6'>
               <div class="form-group">
                  <label class="control-label">Startdatum</label>
                  <div class='input-group date' id='datetimepicker1'>
                     <input type='text' class="form-control" />
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
               </div>
            </div>
    
        <input type="submit" class="btn btn-primary" value="Submit">
      </div>
   </div>
</div>
</form>
<script>
  $(function () {
    $('#datetimepicker1').datetimepicker();
 });
</script>
                                          

                        </div>
                      </section>
                      
 
  <footer class="probootstrap-footer">
    
      <div class="container">
      <div class="row mb50">
        <div class="col-md-3">
          <div class="probootstrap-footer-widget">
            <h4>Probleem?</h4>
            <p>Voor meer vragen of info over het reserveren van een bus kan u terecht bij de verantwoordelijke. </p>
          </div>
        </div>

          <div class="probootstrap-footer-widget">
            <h4>Contact Info</h4>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-location2"></i> <span>Koninklijk Instituut Woluwe
                Georges Henrilaan 278
                1200 Sint-Lambrechts-Woluwe</span></li>
              <li><i class="icon-mail"></i><span>info@kiwoluwe.org</span></li>
              <li><i class="icon-phone2"></i><span>Tel : 02 735 40 85</span></li>
            </ul>
          </div>
        </div>
        
 

  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>

  </body>
</html>