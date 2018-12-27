<?php 
require_once 'vendor/autoload.php'; 

require_once 'bootstrap.php';

$docName = slugify($name).'_'.slugify($date).'_'.slugify('daily report');



// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();


/* Note: any element you append to a document must reside inside of a Section. */
// Define styles
$phpWord->addTitleStyle(1, array('size' => 18, 'name' => 'Calibri'), array('alignment' =>\PhpOffice\PhpWord\SimpleType\Jc::CENTER));

$phpWord->addTitleStyle(2, array('size' => 16, 'name' => 'Calibri'));

$phpWord->addParagraphStyle('Heading2', array('alignment' => 'center' ));

$section = $phpWord->addSection();

$section->addTitle("DAILY ACTIVITY UPDATE", 1);

$fancyTableStyleName = 'Simple Table';
$fancyTableStyle =  array('borderSize' => 2, 'borderColor' => '000000', 'cellMargin' => \PhpOffice\PhpWord\Shared\Converter::pointToTwip(2));
$fancyTableFirstRowStyle = array('borderBottomSize' => 2, 'borderBottomColor' => '000000', 'bgColor' => '66BBFF');
$fancyTableCellStyle = array('valign' => 'center');
$fancyTableFontStyle = array('bold' => true);
$phpWord->addTableStyle($fancyTableStyleName, $fancyTableStyle);

//basic info table
 $section->addTextBreak(1);
$basicInfoTable = $section->addTable($fancyTableStyleName);
$tableFontStlye = array('name' => 'Calibri', 'size' => 12);
$tableParaStyle = array('spaceAfter' => 0);

$basicInfoTable->addRow();
 $basicInfoTable->addCell(4700)->addText("Name", $tableFontStlye, $tableParaStyle );
 $basicInfoTable->addCell(4700)->addText($name, $tableFontStlye, $tableParaStyle );
$basicInfoTable->addRow();
 $basicInfoTable->addCell(4700)->addText("Date", $tableFontStlye, $tableParaStyle );
 $basicInfoTable->addCell(4700)->addText($date, $tableFontStlye, $tableParaStyle );
$basicInfoTable->addRow();
 $basicInfoTable->addCell(4700)->addText("Shift", $tableFontStlye, $tableParaStyle );
 $basicInfoTable->addCell(4700)->addText($shift_start.' to '.$shift_end, $tableFontStlye, $tableParaStyle );
$basicInfoTable->addRow();
 $basicInfoTable->addCell(4700)->addText("Work Arena", $tableFontStlye, $tableParaStyle );
 $basicInfoTable->addCell(4700)->addText($work_arena, $tableFontStlye, $tableParaStyle );
$basicInfoTable->addRow();
 $basicInfoTable->addCell(4700)->addText("Reporting to", $tableFontStlye, $tableParaStyle );
 $basicInfoTable->addCell(4700)->addText($reporting_to, $tableFontStlye, $tableParaStyle );

$section->addTextBreak(2);

//check in out table 
$checkInOutTable = $section->addTable($fancyTableStyleName);

$checkInOutTable->addRow();
 $checkInOutTable->addCell(1000, array('gridSpan' => 2, 'valign' => 'center'))->addText("Check in/Check out", $tableFontStlye, array('spaceAfter' => 0, 'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER ) );
$checkInOutTable->addRow();
 $checkInOutTable->addCell(4700)->addText("Log in", $tableFontStlye, $tableParaStyle );
 $checkInOutTable->addCell(4700)->addText($log_in_time, $tableFontStlye, $tableParaStyle );
$checkInOutTable->addRow();
 $checkInOutTable->addCell(4700)->addText("Log out", $tableFontStlye, $tableParaStyle );
 $checkInOutTable->addCell(4700)->addText($log_out_time, $tableFontStlye, $tableParaStyle );
$checkInOutTable->addRow();
 $checkInOutTable->addCell(4700)->addText("Late", $tableFontStlye, $tableParaStyle );
 $checkInOutTable->addCell(4700)->addText(getLateTime($shift_start, $log_in_time), $tableFontStlye, $tableParaStyle );
$checkInOutTable->addRow();
 $checkInOutTable->addCell(4700)->addText("Early Leave", $tableFontStlye, $tableParaStyle );
 $checkInOutTable->addCell(4700)->addText(getEarlyTime($shift_end, $log_out_time), $tableFontStlye, $tableParaStyle );

//daily activity log
$section->addTextBreak(2);
$section->addText("Daily Activity Log", array('name' => 'Calibri', 'size' => 12), array('spaceAfter' => 0, 'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER) );

$activityLogTable = $section->addTable($fancyTableStyleName);
$tableFontStlye = array('name' => 'Calibri', 'size' => 12);
$tableParaStyle = array('spaceAfter' => 0);

$activityTableFirstRowStyle = array('valign' => 'center', 'bgColor' => '4472C4');
$activityTableFirstCellFontStyle =  array('name' => 'Calibri', 'size' => 12,  'color' => 'FFFFFF');
$activityTableFirstCellParaStyle =array('spaceAfter' => 0, 'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER);
$activityLogTable->addRow();
 $activityLogTable->addCell(1050, $activityTableFirstRowStyle)->addText("SL",$activityTableFirstCellFontStyle, $activityTableFirstCellParaStyle);
 $activityLogTable->addCell(2950, $activityTableFirstRowStyle)->addText("Activity Log",$activityTableFirstCellFontStyle, $activityTableFirstCellParaStyle);
 $activityLogTable->addCell(3150, $activityTableFirstRowStyle)->addText("Description",$activityTableFirstCellFontStyle, $activityTableFirstCellParaStyle);
 $activityLogTable->addCell(2250, $activityTableFirstRowStyle)->addText("Status",$activityTableFirstCellFontStyle, $activityTableFirstCellParaStyle);


if(!empty($tasks) && is_array($tasks)){
    //has task
    $serial = 1;
    foreach ($tasks as $task) {
    $activityLogTable->addRow();
    $activityLogTable->addCell(1050)->addText($serial++, $tableFontStlye, $activityTableFirstCellParaStyle );
    $activityLogTable->addCell(2950)->addText($task['name'], $tableFontStlye, $activityTableFirstCellParaStyle );
    $activityLogTable->addCell(3150)->addText($task['description'], $tableFontStlye, $tableParaStyle );
    $activityLogTable->addCell(2250)->addText($task['status'], $tableFontStlye, $activityTableFirstCellParaStyle );
    }
}else{
 //emply task
 $activityLogTable->addRow();
 $activityLogTable->addCell(1000, array('gridSpan' => 4, 'valign' => 'center'))->addText("No task", $tableFontStlye, array('spaceAfter' => 0, 'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER ) );
}

//comment table
if(!empty($comment)){
    $section->addTextBreak(1);
    $section->addText("Comment", array('name' => 'Calibri', 'size' => 16), array('spaceAfter' => 0) );
    $commentTable = $section->addTable($fancyTableStyleName);
    $commentTable->addRow();
    $commentTable->addCell(9400)->addText($comment, $tableFontStlye, array('spaceAfter' => 0) );
}

// Saving the document as docx file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('output/'.$docName.'.docx');

if (array_key_exists('generate', $_POST)){
    //force download docx file
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $fileName = 'output/'.$docName.'.docx';
    header("Location: http://$host$uri/$fileName");
}