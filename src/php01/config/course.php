<?php
$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
echo "会社の名前は".$company."ですね";