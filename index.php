<?php  
require __DIR__ . '/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadSheetObject = new Spreadsheet();

$range = range(1, 34);
foreach ($range as $row) {
	$spreadSheetObject->getActiveSheet()->setCellValue("A" . $row, "- Line1 \r\n - Line2");
}

$fileName = time().'.xlsx';

$writer = IOFactory::createWriter($spreadSheetObject, 'Xlsx');
$writer->save($fileName);
?>