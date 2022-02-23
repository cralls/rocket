<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require 'barcodes/src/BarcodeGenerator.php';
require 'barcodes/src/BarcodeGeneratorPNG.php';

$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
//echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode('081231723897', $generator::TYPE_CODE_128)) . '">';
echo base64_encode($generator->getBarcode($_GET['oid'], $generator::TYPE_CODE_128));
