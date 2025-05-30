<?php
require_once '../../application/third_party/PHPExcel.php';

$inputFileName = 'form-data-rekap-hasil-tes.xlsx';
$outputFileName = 'form-data-rekap-hasil-tes-updated.xlsx';

$excel = PHPExcel_IOFactory::load($inputFileName);
$worksheet = $excel->getSheet(0);

// Assuming headers are in row 8, starting from column 4 (D)
$startCol = 4; // Column D (0-based index)
$row = 8;

// Insert new headers for each test: "Nilai Pilihan Ganda" and "Nilai Esai"
// We need to shift existing headers to the right to make space for new columns

// Get highest column
$highestColumn = $worksheet->getHighestColumn();
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn) - 1;

// Number of tests (existing headers from col 4 to highestColumn)
$numTests = $highestColumnIndex - $startCol + 1;

// Shift existing headers to the right by number of tests (to make space for double columns)
for ($col = $highestColumnIndex; $col >= $startCol; $col--) {
    $cellValue = $worksheet->getCellByColumnAndRow($col, $row)->getValue();
    $worksheet->setCellValueByColumnAndRow($col + $numTests, $row, $cellValue);
    $worksheet->setCellValueByColumnAndRow($col, $row, null);
}

// Now set new headers for each test
for ($i = 0; $i < $numTests; $i++) {
    $worksheet->setCellValueByColumnAndRow($startCol + ($i * 2), $row, 'Nilai Pilihan Ganda');
    $worksheet->setCellValueByColumnAndRow($startCol + ($i * 2) + 1, $row, 'Nilai Esai');
}

$objWriter = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
$objWriter->save($outputFileName);

echo "Template updated and saved as $outputFileName\n";
?>
