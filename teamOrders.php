<?php
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename=teamOrders.csv');
header('Pragma: no-cache');
readfile("teamOrders.csv");