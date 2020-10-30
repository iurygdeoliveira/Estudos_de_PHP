<?php
require_once "Conversor.php";
$C1 = new Conversor("BODY", "10", "<><BODY garbage>body</BODY>");
$C2 = new Conversor("ABC", "923", "<dont replacethis>abcabc<adbcadbcde>");
$C3 = new Conversor("BODY", "10", "<><BODY garbage>body</BODY>");
