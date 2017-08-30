<?php

if ( file_exists("mail/emails.txt") ) {
  echo "<h1>Emails:</h1>";
  $c = file_get_contents("mail/emails.txt");
  echo str_replace("\n", "<br/>", $c);
}


?>