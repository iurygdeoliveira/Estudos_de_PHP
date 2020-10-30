<?php
require_once "Conversor.php";
$C1 = new Conversor("BODY", "10", "<><BODY garbage>body</BODY>");
$C2 = new Conversor("aBc", "923", "<dont replacethis>abcabc<abcabcde>");
$C3 = new Conversor("table", "1", "< ta>bLe< TaBlewidth=100></table></ta>");
