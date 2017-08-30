
<html>

  <head>
  <title>Two Hour Delay</title>
  <style>

  div.center {
    font-size: 1.2em; 
    font-family: sans-serif; 
    margin: 0px auto;
    width: 800px;

    text-align: center;

    color: #FFF;
  }

  html { 
/*     
	background: url('title.png') no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
 */
	background-image: url("title.png");
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
/*	background-repeat: no-repeat;
	background-attachment: scroll;*/
 }

  h1 {
    font-size: 2.5em;
  }

  div.box {
    background: #EFEFEF;
    width: 800px;
    min-height: 10px;
    color: #000;

    padding: 4px;
    margin: 0px auto;
    overflow: hidden;
  }


  </style>
  </head>
  
  <body>

    <div class="center">

    <?
    $emailadded = false;
    if ( isset($_GET['addr']) ) {

      $_GET['addr'] = strtolower($_GET['addr']);
      $current = file_get_contents("mail/emails.txt");

      // make sure there are no duplicates
      $list = explode("\n", strtolower($current) );
      if ( !in_array($_GET['addr'], $list) ) { 


        // append to file
        $current .= $_GET['addr']. "\n";
        if (file_put_contents("mail/emails.txt", $current) !== false) {
          $emailadded = true;
          // echo "GOOD";
        } else {
          die("File write failed");
        }


      }
    }
    ?>

<!-- <div class="box" style="width: 800px;"> -->
      <h1>Two Hour Delay</h1>
 <h3>LIVE - ORIGINAL - MUSIC ! </h3>    
<!-- </div> -->

<!-- <div class="box" style="width: 800px;"> -->
  <p><em>"...the foursome swims inside of a dynamic<br/> 
  that subtly defies many of the clich&#233;s <br/>
  into which many working bands have a tendency to fall."</em>

  <p style="display: inline; position: relative; left: 150px;">
  - Matt Mamau, Syracuse New Times
  </p>
<!-- </div> -->
<br/>

<!-- <div class="box" style="width: 800px;"> -->
<p><em>"Deftly blending influences from blues, folk, country,<br/> 
bluegrass and good ol' rock'n'roll, Two Hour Delay has produced<br/>
a dynamic disc of amazing Americana."</em>

  <p style="display: inline; position: relative; left: 150px;">
  - Russ Tarby, Downtown After Dark, The Eagle
  </p>
<!-- </div> -->
<br/>
<br/>
<br/>

<!-- <div class="box" style="width: 800px;"> -->
  <form method="get">
    2HD maintains a mailing list for the occasional gig reminder.<br/>
    And that's all you'll get from us...<br/>
    <input type="text" style="font-size: 1.2em;" placeholder="Enter Email Address" name="addr"/>
    <input type="submit" style="font-size: 1.2em;" value=">"/>
  </form>
<!-- </div> -->

<? 
if ($emailadded) {
  echo '<span style="color: green;">Email Added. Thanks!</span>';
}
?>

<br/>



</p>
</p>

  <a href="http://www.myspace.com/2hrdelay" ><img src="myspace.png" style="border-width: 0;"/></a>
  <a href="//www.facebook.com/pages/Two-Hour-Delay/125433364176234?sk=app_2405167945" target="_blank" ><img src="facebook.png" style="border-width: 0;"/></a>
  <a href="http://www.reverbnation.com/twohourdelay" ><img src="reverbnation.png" style="border-width: 0;"/></a>

<br/>
<br/>



<p>Our debut CD is finally available for purchase online!!!<br/>
Just click on the Paypal button below.</p>


<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input name="hosted_button_id" type="hidden" value="ACBCGQQXTJ5X8">
<input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" type="image">
<img src="https://www.paypal.com/en_US/i/scr/pixel.gif" border="0" alt="" width="1" height="1">
</form>

</p>







<p>Check the gig calendar - click on a gig for details:</p>
 

<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=500&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=boo47jtvpvmpe3jchrcaerfcqk%40group.calendar.google.com&amp;color=%2329527A&amp;ctz=America%2FNew_York" style=" border-width:0 " width="400" height="500" frameborder="0" scrolling="no"></iframe>


      <br/>
      <br/>
    
<div class="box" style="width: 400px;"> 
<p>Contact - <a href="mailto:two.hour.delay@gmail.com" >two.hour.delay@gmail.com</a></p>
</div>
   
 
    <!-- <a style="font-size: 75%; position: fixed; Bottom: 0px;" href="//rgaus.net"> Designed by Ryan Gaus</a> -->
  </body>  
  
</html>
<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
