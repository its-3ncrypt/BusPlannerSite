<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KIW Bussen</title>
   
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Inconsolata|Rubik:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="dist/timepicker.min.css">
   
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
     </nav>
     </div>
     
        
          
  

  <!-- END: header -->
  
  <!-- START: section -->
  <section class="probootstrap-intro probootstrap-intro-inner" style="background-image: url(img/hero_bg_1_b.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-7 probootstrap-intro-text">
          <h1 class="probootstrap-animate" data-animate-effect="fadeIn">Welkom</h1>
         
            <!-- script urls for calender date picker -->

         
        </div>
      </div>
    </div>
  </section>
  <!-- END: section -->

  <!-- hieronder script jquery and bootstrap https://www.solodev.com/blog/web-design/adding-a-datetime-picker-to-your-forms.stml -->

 <div class="container">


  <!-- END: section -->

  <!-- hieronder script jquery and bootstrap https://weareoutman.github.io/clockpicker/ -->


 <!-- hieronder script jquery and bootstrap http://jsfiddle.net/trixta/cc7Rt/embedded/result,html,js,css/ -->

<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="wickedpicker.js"></script>
</body>


<form action="#" class="ws-validate">
     <p>Start Date</p>

    <div class="form-row show-inputbtns">
        <input type="date" data-date-inline-picker="false" data-date-open-on-focus="true" />
        
        <div class="input-group clockpicker">
        <input type="text" name="timepicker" data-toggle="timepicker">
        <script src="dist/timepicker.min.js"></script>
        <script>
	        document.addEventListener("DOMContentLoaded", function(event)
			{
			    timepicker.load({
			        interval: 15,
			        defaultHour: 8
			    });
			});
		</script>
   

    </div>
    

     <p>End Date</p>


        <input type="date" data-date-inline-picker="false" data-date-open-on-focus="true" />
        
        <div class="input-group clockpicker">
        <input type="text" name="timepicker" data-toggle="timepicker">
        <script src="dist/timepicker.min.js"></script>
        <script>
	        document.addEventListener("DOMContentLoaded", function(event)
			{
			    timepicker.load({
			        interval: 15,
			        defaultHour: 8
			    });
			});
		</script>
   

    </div>
</form></div>

<script>
$('.timepicker').wickedpicker
</script>
<script>
var options = { now: "12:35", //hh:mm 24 hour format only, defaults to current time
twentyFour: false, //Display 24 hour format, defaults to false
upArrow: 'wickedpicker__controls__control-up', //The up arrow class selector to use, for custom CSS
downArrow: 'wickedpicker__controls__control-down', //The down arrow class selector to use, for custom CSS
close: 'wickedpicker__close', //The close class selector to use, for custom CSS
hoverState: 'hover-state', //The hover state class to use, for custom CSS
title: 'Timepicker', //The Wickedpicker's title,
showSeconds: false, //Whether or not to show seconds,
secondsInterval: 1, //Change interval for seconds, defaults to 1
, minutesInterval: 1, //Change interval for minutes, defaults to 1
beforeShow: null, //A function to be called before the Wickedpicker is shown
show: null, //A function to be called when the Wickedpicker is shown
clearable: false, //Make the picker's input clearable (has clickable "x")
};</script>
<script>
 var timepickers = $('.timepicker').wickedpicker();
console.log(timepickers.wickedpicker('time', 1));
//JS console: time of timepicker-two

</script>
//JS Console: 2 : 24 PM



<script>
webshim.setOptions('forms-ext', {
    replaceUI: 'auto',
    types: 'date',
    date: {
        startView: 2,
        inlinePicker: true,
        classes: 'hide-inputbtns'
    }
});
webshim.setOptions('forms', {
    lazyCustomMessages: true
});
//start polyfilling
webshim.polyfill('forms forms-ext');

//only last example using format display
$(function () {
    $('.format-date').each(function () {
        var $display = $('.date-display', this);
        $(this).on('change', function (e) {
            //webshim.format will automatically format date to according to webshim.activeLang or the browsers locale
            var localizedDate = webshim.format.date($.prop(e.target, 'value'));
            $display.html(localizedDate);
        });
    });
});
</script>
<style>

.hide-replaced.ws-inputreplace {
    display: none !important;
}
.input-picker .picker-list td > button.othermonth {
    color: #888888;
    background: #fff;
}
.ws-inline-picker.ws-size-2, .ws-inline-picker.ws-size-4 {
    width: 49.6154em;
}
.ws-size-4 .ws-index-0, .ws-size-4 .ws-index-1 {
    border-bottom: 0.07692em solid #eee;
    padding-bottom: 1em;
    margin-bottom: 0.5em;
}
.picker-list.ws-index-2, .picker-list.ws-index-3 {
    margin-top: 3.5em;
}
div.ws-invalid input {
    border-color: #c88;
}
.ws-invalid label {
    color: #933;
}
div.ws-success input {
    border-color: #8c8;
}
form {
    margin: 10px auto;
    width: 700px;
    min-width: 49.6154em;
    border: 1px solid #000;
    padding: 10px;
}
.form-row {
    padding: 5px 10px;
    margin: 5px 0;
}
label {
    display: block;
    margin: 3px 0;
}
.form-row input {
    width: 220px;
    padding: 3px 1px;
    border: 1px solid #ccc;
    box-shadow: none;
}
.form-row input[type="checkbox"] {
    width: 15px;
}
.date-display {
    display: inline-block;
    min-width: 200px;
    padding: 5px;
    border: 1px solid #ccc;
    min-height: 1em;
}
.show-inputbtns .input-buttons {
    display: inline-block;
}
p {

  color: black;
}
</style>
<!-- hieronder script jquery and bootstrap http://jsfiddle.net/trixta/cc7Rt/embedded/result,html,js,css/ -->
</div>
</div>                      
                                 

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