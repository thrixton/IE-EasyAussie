<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="js/jquery-1.9.1.js">
  </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Other Expenses</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <style type="text/css">
    <style type="text/css">
    * {
        font-family: "Arial";
        font-size: 15px;
    }
    ul li{
        margin-left: 10px;
    }
    .collapse ul li a {
        font-family: 'Humanist521BT-Roman';
        font-weight: bolder; 
        font-size: 17px;
    }

        body{
        background-color: rgb(249,251,255);
       }
           #regForm label{
      color: black;
    }
    *{
      font-size:15px;
    }
    </style>

<style>
body {font-family: Arial; max-width:auto; margin: auto; text-decoration: none;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 0px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  color: #212529;
  text-decoration: none;
}

/* Create an active/current tablink class */
.tab button.active {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 0px solid #ccc;
  border-top: none;
}
.btn-primary {
  background-color: #4285f4 !important;
  color: #fff; }
  .btn-primary:hover {
    background-color: #5a95f5;
    color: #fff; }
  .btn-primary:focus, .btn-primary.focus {
    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
  .btn-primary:focus, .btn-primary:active, .btn-primary.active {
    background-color: #0b51c5; }
  .btn-primary.dropdown-toggle {
    background-color: #4285f4 !important; }
    .btn-primary.dropdown-toggle:hover, .btn-primary.dropdown-toggle:focus {
      background-color: #5a95f5 !important; }
  .btn-primary:not([disabled]):not(.disabled):active, .btn-primary:not([disabled]):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
    background-color: #0b51c5 !important; }
  .btn-primary:not([disabled]):not(.disabled):active:focus, .btn-primary:not([disabled]):not(.disabled).active:focus,
  .show > .btn-primary.dropdown-toggle:focus {
    -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

</style>
<script>
function showFre()
{
$("#frequency").removeClass("none");
$("#frequency").addClass("showDIV");
}

function hideFre()
{
$("#frequency").removeClass("showdiv");
$("#frequency").addClass("none");
}
</script>
<script>
function showFre1()
{
$("#frequency1").removeClass("none");
$("#frequency1").addClass("showDIV");
}

function hideFre1()
{
$("#frequency1").removeClass("showdiv");
$("#frequency1").addClass("none");
}
</script>
<script>
function showFre2()
{
$("#frequency2").removeClass("none");
$("#frequency2").addClass("showDIV");
}

function hideFre2()
{
$("#frequency2").removeClass("showdiv");
$("#frequency2").addClass("none");
}
</script>
<script>
function showFre3()
{
$("#contractval").removeClass("none");
$("#contractval").addClass("showDIV");
}

function hideFre3()
{
$("#contractval").removeClass("showdiv");
$("#contractval").addClass("none");
}
</script>

</head>
<body>
    <!--nav-->
    <div class="navbar-wrapper" style="position: fixed; top: 12px;left: 10px;right: 10px; z-index: 999;">
        <div class="container-fluid">
            <nav class="navbar navbar-inverse navbar-static-top" style="background-color: white; color: white; border: 1px solid rgb(224,227,230);margin-top: -20px;box-shadow: 4px 4px 20px lightblue;">
                <div class="container-fluid">
                    <div class="navbar-header" style="height: 62px;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" value="click here to start" style=" width: 40px;height: 40px; text-align: center;">
                        </button>
                        <a class="navbar-brand active" href="http://www.firststepsinmel.ml/"><img src="img/webLogo3.png" style="display: inline; height: 43px; margin-top: -10px;">
                            <span class="hidden-sm-down hidden-xs" style="font-family: 'Arial Black';font-size: 24px;color:black; height: 20px; line-height: 20px;margin-left: 10px;">First Steps in Melbourne</span></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse col-md-5" style="margin-top: 3px;">
                        <ul class="nav navbar-nav">
                            <li><a href="http://www.firststepsinmel.ml/" style="color: black;">Home</a></li>
                            <li class="dropdown" id="costDrag" onclick="calculatorDrag()">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="costFont"><span class="caret"></span>&nbsp;&nbsp;Living Cost Calculator</a>
                                <ul class="dropdown-menu">
                                    <li><a href="introduction.php">Calculator</a></li>
                                    <li><a href="Bills.php">Other expenses</a></li>
                                </ul>
                            </li>
                            <li class="dropdown" id="subSupDrag" onclick="calculatorDrag()">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="stuSup"><span class="caret"></span>&nbsp;&nbsp;Student Support</a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/find_a_suburb/">Find a Suburb</a></li>
                                    <li><a href="TipsList.html">Guidance</a></li>
                                </ul>
                            </li>
                            <li><a href="comparison.html" style="color: black;">Compare with Shanghai</a></li>
                            <li><a href="Prediction.php" style="color: black;">Prediction</a></li>
                            <!-- <li class="dropdown" id="preDrag" onclick="calculatorDrag()">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="preSup"><span class="caret"></span>&nbsp;&nbsp;Prediction</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your future costs</a></li>
                                    <li><a href="#">article 1</a></li>
                                    <li><a href="#">article 2</a></li>
                                </ul>
                            </li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="display: none;"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="introduction.php">Living Cost Calculator</a></li>
                                    <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/find_a_suburb/">Student Support</a></li>
                                    <li><a href="comparison.html">Compare with Shanghai</a></li>
                                    <li><a href="Prediction.php">Prediction</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <br>
    <br>
    <br>
<div class="container" style="height: 580px;width: 70%; background-color: white; border-radius: 20px; box-shadow: 4px 4px 20px lightblue; overflow: auto; text-align: center;">
<div style="text-align: center; font-size: 20px; font-family: Arial Black; font-weight: bold;">Calculate the approximate cost of monthly bills</div>
                  <div class="tab" style="height:50px; width: 65% border-radius: 10px;box-shadow: 4px 4px 20px lightblue;">
                    <button style="height:50px; width: 25%;font-weight: bolder; font-family: Arial Black;" class="tablinks" onclick="openEvent(event, 'Phone')">Phone</button>
                    <button style="height:50px; width: 25%; font-weight: bolder; font-family: Arial Black;" class="tablinks" onclick="openEvent(event, 'Internet')">Internet</button>
                    <button style="height:50px; width: 25%; font-weight: bolder; font-family: Arial Black;" class="tablinks" onclick="openEvent(event, 'Energy')">Electricity & Gas</button>
                    <button style="height:50px; width: 25%; font-weight: bolder; font-family: Arial Black;" class="tablinks" onclick="openEvent(event, 'Water')">Water</button>
                  </div>
                  <div id="Phone" class="tabcontent">
                      <div class="header" style="height: 140px; width: 100%;">
                       <div class="putimage" style="text-align: center;">
                        <img style=" height: 140px; width: 25%; float:left; opacity: 0.7;" src="img/phone.jpg";>
                        <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/phone3.jpg";>
                        <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/phone2.jpg";>
                        <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/phone4.jpg";>
                      </div>
                      <div class="container" style="float: right; height: 170px; width: 50%;">
                        
                        <br>
                      <div style="font-weight: bold; font-size: 27px;">Data:</div>
                      <div id="RadioButtons1" style="color: black;">
                        <input type="radio" name="RadioButtons1" id="Radio1" value="2">
                        <label for="Radio1">2GB</label>
                        <input type="radio" name="RadioButtons1" id="Radio2" value="10">
                        <label for="Radio2">10GB</label>
                        <input type="radio" name="RadioButtons1" id="Radio3" value="30">
                        <label for="Radio3">30GB</label>
                      </div>
                      <div style="font-weight: bold;font-size: 27px;">International calling:</div>
                      <div id="RadioButtons2" style="color: black;">
                      <input type="radio" name="RadioButtons2" id="Radio4" value="1">
                      <label for="Radio4">Yes</label>
                      <input type="radio" name="RadioButtons2" id="Radio5" value="0">
                      <label for="Radio5">No</label>
                    </div>
                  </div>
                   <div class="container" style="float: left; height: 170px; width: 50%; content: center;">
                    <br>
                  
                    <div style="font-weight: bold;font-size: 27px;">Plan:</div>
                      <div id="RadioButtons17" style="color: black;">
                      <input type="radio" name="RadioButtons17" id="Radio53" value="1" onclick="hideFre3()">
                      <label for="Radio53">Prepaid</label>
                      <input type="radio" name="RadioButtons17" id="Radio54" value="0" onclick="showFre3()">
                      <label for="Radio54">Postpaid</label>
					  </div>
                <div id="contractval" style="font-weight: bold;font-size: 27px;">Contract:
                      <div id="RadioButtons18" style="color: black;">
                      <input type="radio" name="RadioButtons18" id="Radio55" value="1">
                      <label for="Radio55">Yes</label>
                      <input type="radio" name="RadioButtons18" id="Radio56" value="0">
                      <label for="Radio56">No</label>
					  </div>
          </div>
          </div>
                   <div>
                     <button class="btn btn-primary btn" id="Button1" onClick="phonecost()">Calculate</button>
                     <button class="btn btn-primary btn" id="Button1" onClick="viewdata()">Best deals</button>
                   </div>
                   <div style="color: black; font-weight: bolder; font-style: Arial Black;"> Average cost per month is: $<span id="billval"></span></div>
                   <div style="color: black;font-size: 20px; font-style: italic;font-variant: small-caps; text-align: center;"> <span id="bestplansval"></span></div>
                      <!--<div>
                        <button 
                            id="Button3" onclick="document.getElementById('popup')">Recommendation
                        </button>
                      </div> -->
                  </div>
              </div>

            <div id="Internet" class="tabcontent">
                <div class="header" style="height: 140px; width: 100%">
                    <div class="putimage" style="text-align: center;">
                        <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/internet3.jpg">
                        <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/internet2.jpg">
                        <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/internet.jpg">
                      <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/internet4.jpg">
                      <br>
                      <br>
                      <br>
              <div style="font-weight: bold; font-size: 30px;">Data requirement per month: </div>
              <div id="RadioButtons3" style="color: black;">
                <input type="radio" name="RadioButtons3" id="Radio6" value="100">
                <label for="Radio6">100GB</label>
                <input type="radio" name="RadioButtons3" id="Radio7" value="500">
                <label for="Radio7">500GB</label>
                <input type="radio" name="RadioButtons3" id="Radio8" value="Unlimited">
                <label for="Radio8">Unlimited</label>
              </div>
              <br>
               <div style="text-align: center;">
                  <button class="btn btn-primary btn" id="Button2" onClick="intbill()">Calculate</button>
                  <button class="btn btn-primary btn" id="Button1" onClick="viewdata1()">Cheap deals</button>
                   </div>
                   <div style="color: black; font-weight: bolder; font-style: Arial Black;"> Average cost per month is: $<span id="intbillval"></span></div>
              </div>
              </div>
          </div>
            <div id="Energy" class="tabcontent" style="height: 300px;width: 100%;text-align:auto;">
                      <div class="header" style="height: 140px; width: 100%;">
                       <div class="putimage" style="text-align: center;">
                        <img style=" height: 140px; width: 25%; float:left; opacity: 0.7;" src="img/elec2.jpg";>
                        <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/elec3.jpg";>
                        <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/elec4.jpg";>
                        <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/electricity.jpg";>
        No. of residents:
        <div id="RadioButtons7">
          <input type="radio" name="RadioButtons7" id="Radio18" value="1">
          <label for="Radio18">One</label>
          <input type="radio" name="RadioButtons7" id="Radio19" value="2">
          <label for="Radio19">Two</label>
          <input type="radio" name="RadioButtons7" id="Radio53" value="3">
          <label for="Radio53">Three</label>
          <input type="radio" name="RadioButtons7" id="Radio54" value="4">
          <label for="Radio54">Four</label>
        </div>
        Air conditioner:
        <div id="RadioButtons8">
          <input type="radio" name="RadioButtons8" id="Radio20" value="1">
          <label for="Radio20">Yes</label>
          <input type="radio" name="RadioButtons8" id="Radio21" value="0">
          <label for="Radio21">No</label>
        </div>
      Underfloor heating:
        <div id="RadioButtons9">
          <input type="radio" name="RadioButtons9" id="Radio22" value="1">
          <label for="Radio22">Yes</label>
          <input type="radio" name="RadioButtons9" id="Radio23" value="0">
          <label for="Radio23">No</label>
        </div>
      Electric water heater:
        <div id="RadioButtons10">
          <input type="radio" name="RadioButtons10" id="Radio24" value="1">
          <label for="Radio24">Yes</label>
          <input type="radio" name="RadioButtons10" id="Radio25" value="0">
          <label for="Radio25">No</label>
        </div>
        <button class="btn btn-primary btn" id="Button3" onClick="eleccal()">Calculate</button>
        <button class="btn btn-primary btn" id="Button1" onClick="viewdata2()">Cheapest deals</button>
              <div> Your usage<span id="elecost"></span></div>
            </div>
            </div>
          </div>

  <div id="Water" class="tabcontent">
    <div class="header" style="height: 140px; width: 100%">
                    <div class="putimage">
                        <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/water.jpg">
                        <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/water2.jpg">
                        <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/water3.jpg">
                        <img style=" height: 140px; width: 25%; float: left; opacity: 0.7;" src="img/water4.jpg">
                        
<div class="container" style="height: 250px; width: 50%; float: left;">
  <div style="font-weight: bold; font-size: 30px;" >No. of residents <img title="Each person uses an average of 224 liters per day and the cost includes cost for recycling, sweage and unchlorinated water!" src="img/infoicon.png">
    <br>
      <input type="radio" name="RadioButtons6" id="Radio15" value="1">
      <label for="Radio15">One</label>
      <input type="radio" name="RadioButtons6" id="Radio16" value="2">
      <label for="Radio16">Two</label>
      <input type="radio" name="RadioButtons6" id="Radio17" value="3">
      <label for="Radio17">Three</label>
      <input type="radio" name="RadioButtons6" id="Radio32" value="4">
      <label for="Radio32">Four</label>
    </div>
    <br>
    <div style="font-weight: bold; font-size: 30px;"> Dishwasher <img title="Each use consumes 50 liters of water" src="img/infoicon.png">
      <br>
      <input type="radio" name="RadioButtons11" id="Radio26" value="1" onclick="showFre()">
      <label for="Radio26">Yes</label>
      <input type="radio" name="RadioButtons11" id="Radio27" value="0" onclick="hideFre()">
      <label for="Radio27">No</label>
    </div>
      <div id="frequency" class="none">
    <i>Use per week:
      <br>
      <input type="radio" name="RadioButtons14" id="Radio32" value="1">
      <label for="Radio32">One</label>
      <input type="radio" name="RadioButtons14" id="Radio33" value="2">
      <label for="Radio33">Two</label>
      <input type="radio" name="RadioButtons14" id="Radio34" value="3">
      <label for="Radio34">Three</label>
      <input type="radio" name="RadioButtons14" id="Radio35" value="4">
      <label for="Radio35">Four</label>
      <input type="radio" name="RadioButtons14" id="Radio36" value="5">
      <label for="Radio36">Five</label>
      <input type="radio" name="RadioButtons14" id="Radio37" value="6">
      <label for="Radio37">Six</label>
      <input type="radio" name="RadioButtons14" id="Radio38" value="7">
      <label for="Radio38">Seven</label>
     </i>
   </div>
 </div>
 <div class="container" style="height: 250px; width: 50%; float: right;">
  <br>
     <div style="font-weight: bold; font-size: 30px;"> Washing Machine <img title="Each use consumes 150 liters of water" src="img/infoicon.png"></div>
      <input type="radio" name="RadioButtons12" id="Radio28" value="1" onclick="showFre1()">
      <label for="Radio28">Yes</label>
      <input type="radio" name="RadioButtons12" id="Radio29" value="0" onclick="hideFre1()">
      <label for="Radio29">No</label>
      <br>
    <div id="frequency1" class="none">
     <i>Use per week:
      <br>
      <input type="radio" name="RadioButtons15" id="Radio39" value="1">
      <label for="Radio39">One</label>
      <input type="radio" name="RadioButtons15" id="Radio40" value="2">
      <label for="Radio40">Two</label>
      <input type="radio" name="RadioButtons15" id="Radio41" value="3">
      <label for="Radio41">Three</label>
      <input type="radio" name="RadioButtons15" id="Radio42" value="4">
      <label for="Radio42">Four</label>
    <input type="radio" name="RadioButtons15" id="Radio43" value="5">
      <label for="Radio43">Five</label>
    <input type="radio" name="RadioButtons15" id="Radio44" value="6">
      <label for="Radio44">Six</label>
    <input type="radio" name="RadioButtons15" id="Radio45" value="7">
      <label for="Radio45">Seven</label>
    </i>
  </div>
      <div style="font-weight: bold; font-size: 30px;">Evaporative Cooler <img title="Each hour 90 liters of water is used" src="img/infoicon.png"></div>
      <input type="radio" name="RadioButtons13" id="Radio30" value="1" onclick="showFre2()">
      <label for="Radio30">Yes</label>
      <input type="radio" name="RadioButtons13" id="Radio31" value="0" onclick="hideFre2()">
      <label for="Radio31">No</label>
    <div id="frequency2" class="none">
      <i>Hours a day:
        <br>
      <input type="radio" name="RadioButtons16" id="Radio46" value="1">
      <label for="Radio46">One</label>
      <input type="radio" name="RadioButtons16" id="Radio47" value="2">
      <label for="Radio47">Two</label>
      <input type="radio" name="RadioButtons16" id="Radio48" value="3">
      <label for="Radio48">Three</label>
      <input type="radio" name="RadioButtons16" id="Radio49" value="4">
      <label for="Radio49">Four</label>
    <input type="radio" name="RadioButtons16" id="Radio50" value="5">
      <label for="Radio50">Five</label>
    <input type="radio" name="RadioButtons16" id="Radio51" value="6">
      <label for="Radio51">Six</label>
    <input type="radio" name="RadioButtons16" id="Radio52" value="7">
      <label for="Radio52">Seven</label>
    </i>
  </div>
  </div>
  <br>
                  <button class="btn btn-primary btn" id="Button4" onClick="waterbill()">Calculate</button>
                   <div style="color: black; font-weight: bolder; font-style: Arial Black;"> Average cost per month is: $<span id="waterbillval"></span></div>
              </div>
  </div>
</div>
<script>
function openEvent(evt, Name) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(Name).style.display = "block";
  evt.currentTarget.className += " active";
}
$(function() {
  $( "#RadioButtons1" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons2" ).buttonset(); 
});
$(function() {
  $( "#Button1" ).button(); 
});
$(function() {
  $( "#Button2" ).button(); 
});
$(function() {
  $( "#Button3" ).button(); 
});
$(function() {
  $( "#Button4" ).button(); 
});
$(function() {
  $( "#RadioButtons3" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons4" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons5" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons6" ).buttonset(); 
});
  
  function eleccal(){
    
    var eh = document.querySelector('input[name=RadioButtons7]:checked').value;
    var ac = document.querySelector('input[name=RadioButtons8]:checked').value;
    var uh = document.querySelector('input[name=RadioButtons9]:checked').value;
    var ewh = document.querySelector('input[name=RadioButtons10]:checked').value;
    var finalelec = parseInt(eh) + parseInt(ac) + parseInt(uh) + parseInt(ewh);
          if (finalelec == 4) {
            var highcost = 335;
              document.getElementById("elecost").innerHTML = ' is high and the average monthly bill would be $'+highcost;
          }
          else if (finalelec == 2 || finalelec == 3) {
            var mediumcost = 205;
          document.getElementById("elecost").innerHTML = ' is medium and the average monthly bill would be $'+mediumcost;
          }
             else {
            var lowcost = 80;
          document.getElementById("elecost").innerHTML = ' is low and the average monthly bill would be $'+lowcost;
          }
  }
  
  function phonecost(){   
  var data = document.querySelector('input[name=RadioButtons1]:checked').value;
  var intercal = document.querySelector('input[name=RadioButtons2]:checked').value;
	var plan = document.querySelector('input[name=RadioButtons17]:checked').value;
	
    //var phonetotalbill = parseInt(datacost) + parseInt(intercal);
    //document.getElementById("billval").innerHTML = phonetotalbill+'$';
    if (plan == 1 ) {
    var contract=0;
  }
  else {
    var contract = document.querySelector('input[name=RadioButtons18]:checked').value;
  }
      if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } 
      xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("billval").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","phonedb.php?data=" +data + "&intercal=" +intercal + "&plan=" +plan + "&contract=" +contract, true);
        xmlhttp.send();
  }
  
  function viewdata() {

  var data = document.querySelector('input[name=RadioButtons1]:checked').value;
  var intercal = document.querySelector('input[name=RadioButtons2]:checked').value;
  var plan = document.querySelector('input[name=RadioButtons17]:checked').value;
    //var phonetotalbill = parseInt(datacost) + parseInt(intercal);
    //document.getElementById("billval").innerHTML = phonetotalbill+'$';
      if (plan == 1 ) {
    var contract=0;
  }
  else {
    var contract = document.querySelector('input[name=RadioButtons18]:checked').value;
  }
      if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } 
      xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("bestplansval").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","phoneplans.php?data=" +data + "&intercal=" +intercal + "&plan=" +plan + "&contract=" +contract, true);
        xmlhttp.send();
  }

function intbill() {
var internet = document.querySelector('input[name=RadioButtons3]:checked').value;
      if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } 
      xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("intbillval").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","internetdb.php?q=" +internet, true);

        xmlhttp.send();
  
  }
function waterbill(){
  var residentnum = document.querySelector('input[name=RadioButtons6]:checked').value;
  var dw = document.querySelector('input[name=RadioButtons11]:checked').value;
  var wm = document.querySelector('input[name=RadioButtons12]:checked').value;
  var ec = document.querySelector('input[name=RadioButtons13]:checked').value;
  
  if (dw == 0 ) {
    var dwf=0;
  }

  else {
  var dwf = document.querySelector('input[name=RadioButtons14]:checked').value;
}
  if (wm == 0 ) {
    var wmf=0;
  }
  
  else {
  var wmf = document.querySelector('input[name=RadioButtons15]:checked').value;
}
  if (ec == 0 ) {
    var ech=0;
  }
  else {
  var ech = document.querySelector('input[name=RadioButtons16]:checked').value;
}
      if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } 
      xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("waterbillval").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","waterdb.php?residentnum=" +residentnum + "&dw=" +dw + "&wm=" +wm + "&ec=" +ec + "&dwf=" +dwf + "&wmf=" +wmf + "&ech=" +ech, true);
        xmlhttp.send();
}

$(function() {
  $( "#RadioButtons7" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons8" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons9" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons10" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons11" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons12" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons13" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons14" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons15" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons16" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons17" ).buttonset(); 
});
$(function() {
  $( "#RadioButtons18" ).buttonset(); 
});
  function calculatorDrag() {
      $("#costFont").css('background-color', "white");
      $("#stuSup").css('background-color', "white");
      $("#preSup").css('background-color', "white");
  }
</script>
<style> 
.none { display:none; }, 
.showDIV { display:block; } 
</style>  
<style>
.tooltip {
  position: relative;
  display: inline-block;
}
</style>
</body>
</html> 