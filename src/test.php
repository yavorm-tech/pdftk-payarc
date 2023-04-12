<?php
require '../vendor/autoload.php';
use mikehaertl\pdftk\Pdf;

// Get data
$result = $pdf = new Pdf('../statement-new.pdf');
//$data = $pdf->getDataFields();
$pdf->fillForm(['Check Box12' => 'Yes', 'merchant_filed_bancrypsy' => 'On'])
    ->flatten()
    ->saveAs('filled.pdf');
//var_dump(($data));
if ($result === false) {
    $error = $pdf->getError();
}


