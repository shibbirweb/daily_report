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



$simpleTableStyle = array('borderSize' => 1, 'borderColor' => '000000', 'cellMargin' => 0, 'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER, 'cellSpacing' => 0);
$spanTableStyleName = 'Colspan Rowspan';
$phpWord->addTableStyle($spanTableStyleName, $simpleTableStyle);
$table = $section->addTable($spanTableStyleName);
$table->addRow();
$table->addCell()->addText("Name");
$table->addCell()->addText("Shibbir Ahmed");
$table->addRow();
$table->addCell()->addText("Date");
$table->addCell()->addText("2018-12-24");
$table->addRow();
$table->addCell()->addText("Shift");
$table->addCell()->addText("2:00 PM to 6:00 PM");
$table->addRow();
$table->addCell()->addText("Work Arena");
$table->addCell()->addText("Web Development");
$table->addRow();
$table->addCell()->addText("Reporting to");
$table->addCell()->addText("Engr. Rony Debnath");
$table->addRow();
$table->addCell()->addText("Text Run");
$table->addCell()->addText("Engr. Rony Debnath");



$section->addTextBreak(1);





//info table section
/*$infoTableSection = '<table style="border: 1px #000000 solid; width: 100%; font-family: Calibri; font-size: 16px; " align="center">
    <tr>
        <td style="background-color: #BFBFBF; margin-bottom: 0pt; ">Name</td>
        <td style=" margin-bottom: 0pt; " id="doc_name">'.$name.'</td>
    </tr>
    <tr>
        <td style="background-color: #BFBFBF; margin-bottom: 0pt; ">Date</td>
        <td style=" margin-bottom: 0pt; " id="doc_date">'.$date.'</td>
    </tr>
    <tr>
        <td style="background-color: #BFBFBF; margin-bottom: 0pt;">Shift</td>
        <td style=" margin-bottom: 0pt; " id="doc_shift_time">'.$shift_start.' to '.$shift_end.'</td>
    </tr>
    <tr>
        <td style="background-color: #BFBFBF; margin-bottom: 0pt; ">Work Arena</td>
        <td style=" margin-bottom: 0pt; " id="doc_work_arena">'.$work_arena.'</td>
    </tr>
    <tr>
        <td style="background-color: #BFBFBF; margin-bottom: 0pt; ">Reporting to</td>
        <td style=" margin-bottom: 0pt; " id="doc_reporting_to">'.$reporting_to.'</td>
    </tr>
</table>';

\PhpOffice\PhpWord\Shared\Html::addHtml($section, $infoTableSection, false, false);

$section->addTextBreak(1);*/

//checkInOut Section
/*$checkInOutSection = '<table style="border: 1px #000000 solid; width: 100%; font-family: Calibri; font-size: 16px; " align="center">
    <tr>
        <td style="background-color: #BFBFBF; margin-bottom: 0pt; text-align:center; " colspan="2">Check in/Check out</td>
    </tr>
    <tr>
        <td style="margin-bottom: 0pt; ">Log in</td>
        <td style=" margin-bottom: 0pt; ">'.$log_in_time.'</td>
    </tr>
    <tr>
        <td style="margin-bottom: 0pt;">Log out</td>
        <td style=" margin-bottom: 0pt; ">'.$log_out_time.'</td>
    </tr>
    <tr>
        <td style="margin-bottom: 0pt; ">Late</td>
        <td style=" margin-bottom: 0pt; ">'.getLateTime($shift_start, $log_in_time).'</td>
    </tr>
    <tr>
        <td style="margin-bottom: 0pt; ">Early leave</td>
        <td style=" margin-bottom: 0pt; ">'.getEarlyTime($shift_end, $log_out_time).'</td>
    </tr>
</table>';

\PhpOffice\PhpWord\Shared\Html::addHtml($section, $checkInOutSection, false, false);

$section->addTextBreak(1);*/

//activity section
/*$activitySection = ' <h2 style="align: center;  font-family: Calibri; font-size: 16px; ">Daily Activity Log</h2> 
<table style="border: 1px #000000 solid; width: 100%; font-family: Calibri; font-size: 16px; " align="center">
    <tr>
        <td style="margin-bottom: 0pt; text-align:center; background-color: #4472C4; color: #FFFFFF; ">SL</td>
        <td style="margin-bottom: 0pt; text-align:center; background-color: #4472C4; color: #FFFFFF; ">Activity Log</td>
        <td style="margin-bottom: 0pt; text-align:center; background-color: #4472C4; color: #FFFFFF; ">Description</td>
        <td style="margin-bottom: 0pt; text-align:center; background-color: #4472C4; color: #FFFFFF; ">Status</td>
    </tr>';

if(!empty($tasks) && is_array($tasks)){
    $serial = 1;
    foreach ($tasks as $task) {
        $activitySection .= '
        <tr>
            <td style="margin-bottom: 0pt; text-align:center; ">'.$serial++.'</td>
            <td style="margin-bottom: 0pt; ">'.$task['name'].'</td>
            <td style="margin-bottom: 0pt; ">'.$task['description'].'</td>
            <td style="margin-bottom: 0pt; text-align:center; ">'.$task['status'].'</td>
        </tr>';
    }
}else{
    $activitySection .= '
    <tr>
        <td style="margin-bottom: 0pt; text-align:center; " colspan="4" >No tasks</td>
    </tr>';
}

$activitySection .= '</table>';

\PhpOffice\PhpWord\Shared\Html::addHtml($section, $activitySection, false, false);*/


//comment section
/*if(!empty($comment)){

    $section->addTextBreak(1);

    $section->addText("Comments", array('size' => 16, 'name' => 'Calibri'));

    $commentSection = '<p style="border: 1px #000000 solid; width: 100%; font-family: Calibri; font-size: 16px; ">'.$comment.'</p>';

    \PhpOffice\PhpWord\Shared\Html::addHtml($section, $commentSection, false, false);
}*/

// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('output/'.$docName.'.docx');