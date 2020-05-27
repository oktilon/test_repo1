<?php
$r = isset($_REQUEST['r']) ? intval($_REQUEST['r']) : 0;

echo $r * 2;