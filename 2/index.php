
<html>

  <head>
  <title>Two Hour Delay</title>
  <style>

  div.center {
    font-size: 1.2em; 
    font-family: sans-serif; 
    margin: 0px auto;
    width: 865px;

    text-align: center;

    color: #232323;
  }

  body {
    background: #CFC6BE
  }

  h1 {
	height: 40px;
    font-size: 2.5em;
  }

  h3 {
    height: 20px;
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
        } else {
          die("File write failed");
        }


      }
    }
    ?>
<p style="position: relative; right: 180px; height: 20px;"> <span style="word-spacing: 10px;"> Band Music Gigs Contact</span>
  <a style="position: relative; left: 360px; bottom: 0px;" href="http://www.facebook.com/pages/Two-Hour-Delay/125433364176234?sk=app_2405167945" target="_blank" ><img src="New Images/facebookbutton.png" title="2HD on facebook" style="border-width: 0;"/></a>
   <a style="display: inline; position: relative; left: 360px; bottom: 0px;" href="http://www.reverbnation.com/twohourdelay" ><img src="New Images/reverbnation button.png" title="2HD on ReverbNation" style="border-width: 0;"/></a>
   <a style="display: inline; position: relative; left: 360px; bottom: 0px;" href="http://www.youtube.com/user/2hrdelay" ><img src="New Images/youtube.png" title="2HD on YouTube" style="border-width: 0;"/></a>
  <a style="display: inline; position: relative; left: 360px; bottom: 0px;" href="http://www.myspace.com/2hrdelay" ><img src="New Images/myspace button.png" title="2HD on Myspace" style="border-width: 0;"/></a><br/>
</p>

      <h1>Two Hour Delay</h1>
 <h3>LIVE - ORIGINAL - MUSIC !</h3> 
<div id="SocialButtons" style="position: relative; top: 20px;">
  <a style="position: relative;" href="http://www.facebook.com/pages/Two-Hour-Delay/125433364176234?sk=app_2405167945" target="_blank" ><img src="New Images/facebookbutton.png" title="2HD on facebook" style="border-width: 0;"/></a>
   <a style="display: inline; position: relative;" href="http://www.reverbnation.com/twohourdelay" ><img src="New Images/reverbnation button.png" title="2HD on ReverbNation" style="border-width: 0;"/></a>
   <a style="display: inline; position: relative;" href="http://www.youtube.com/user/2hrdelay" ><img src="New Images/youtube.png" title="2HD on YouTube" style="border-width: 0;"/></a>
  <a style="display: inline; position: relative;" href="http://www.myspace.com/2hrdelay" ><img src="New Images/myspace button.png" title="2HD on Myspace" style="border-width: 0;"/></a><br/>
</div>

       <img src="title crop transparent.png"/>   

<p><em>"...the foursome swims inside of a dynamic that subtly defies many<br/>
of the clich&#233;s into which many working bands have a tendency to fall."</em>

<p style="display: inline; position: relative; left: 150px;">
- Matt Mamau, Syracuse New Times
</p>
<br/>
<br/>

<p><em>"Deftly blending influences from blues, folk, country,<br/> 
bluegrass and good ol' rock'n'roll, Two Hour Delay has produced<br/>
a dynamic disc of amazing Americana."</em>

<p style="display: inline; position: relative; left: 150px;">
- Russ Tarby, Downtown After Dark, The Eagle
</p>
<br/>
<br/>
<br/>

<form method="get">
  2HD is based in central New York and maintains a mailing list for the occasional gig reminder.<br/> 
  And that's all you'll get from us...<br/>
  <input type="text" style="font-size: 1.2em;" placeholder="Enter Email Address" name="addr"/>
  <input type="submit" style="font-size: 1.2em;" value=">"/>
</form>


<? 
if ($emailadded) {
  echo '<span style="color: green;">Email Added. Thanks!</span>';
}
?>

<br/>



<!-- <p>Find more info and listen to the debut CD at any of the following sites.</p>


<p>Check the gig calendar - click on a gig for details:</p> -->
 

<iframe style="float: right;" src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=500&amp;wkst=1&amp;bgcolor=%23CFC6BE&amp;src=boo47jtvpvmpe3jchrcaerfcqk%40group.calendar.google.com&amp;color=%2329527A&amp;ctz=America%2FNew_York" style=" border-width:0 " width="400" height="500" frameborder="0" scrolling="no"></iframe>



<div id="SocialButtons" style="position: relative; top: 20px;">
  <a style="position: relative;" href="http://www.facebook.com/pages/Two-Hour-Delay/125433364176234?sk=app_2405167945" target="_blank" ><img src="New Images/facebookbutton.png" title="2HD on facebook" style="border-width: 0;"/></a>
   <a style="display: inline; position: relative;" href="http://www.reverbnation.com/twohourdelay" ><img src="New Images/reverbnation button.png" title="2HD on ReverbNation" style="border-width: 0;"/></a>
   <a style="display: inline; position: relative;" href="http://www.youtube.com/user/2hrdelay" ><img src="New Images/youtube.png" title="2HD on YouTube" style="border-width: 0;"/></a>
  <a style="display: inline; position: relative;" href="http://www.myspace.com/2hrdelay" ><img src="New Images/myspace button.png" title="2HD on Myspace" style="border-width: 0;"/></a><br/>
</div>


<br/>
<br/>



<p>Purchase our debut CD online!!!<br/>
Just click on the Paypal button below.</p>


<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input name="hosted_button_id" type="hidden" value="ACBCGQQXTJ5X8">
<input alt="PayPal - The safer, easier way to pay online!" name="submit" src="https://www.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" type="image">
<img src="https://www.paypal.com/en_US/i/scr/pixel.gif" border="0" alt="" width="1" height="1">
</form>

</p>

      <br/>
    
<p>Contact - <a style="color: black;" href="mailto:two.hour.delay@gmail.com" >two.hour.delay@gmail.com</a></p>
</div>
   
 
    <a style="font-size: 75%; position: fixed; Bottom: 0px;" href="//rgaus.net"> Designed by Ryan Gaus</a>
  </body>  
  
</html>
<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
