<?php
require_once "Conversor.php";
$C1 = new Conversor("BODY", "10", "<><BODY garbage>body</BODY>");
$C2 = new Conversor("aBc", "923", "<dont replacethis>abcabc<abcabcde>");
$C3 = new Conversor("table", "1", "< ta>bLe< TaBlewidth=100></table></ta>");
$C3 = new Conversor("replace", "323", "nothing inside");
$C3 = new Conversor("HI", "667", "92< HI=/ >< z==//HIb >< cHIhi >");
$C3 = new Conversor("a", "23", "<a B c a>");
$C3 = new Conversor("b", "2", "<b b abc ab c> Mangojata");
