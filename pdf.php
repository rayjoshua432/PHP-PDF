<?php

require __DIR__ . "/vendor/autoload.php";

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

$fname = $_POST['f_name'];
$lname = $_POST['l_name'];

// Set the directory for image files to read
$options = new Options;
$options -> setChroot(__DIR__);
// Enable access to stylesheets 
$options -> setIsRemoteEnabled(true);

// contents of the Dompdf
$html = file_get_contents('content.php');
$html = str_replace(['{{ f_name }}', '{{ l_name }}'], [$fname, $lname], $html);

// instantiate and use the dompdf class
$dompdf = new Dompdf($options);

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("sample.pdf", ["Attachment" => 0]);

// Savbe the pdf file into the web server
$result  = $dompdf -> output();
file_put_contents("sample.pdf", $result);