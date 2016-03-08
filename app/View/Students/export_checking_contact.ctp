<?php

$this->PhpExcel->createWorksheet();
$this->PhpExcel->setDefaultFont('Calibri', 12);
$this->PhpExcel->setWorksheetName('contacts-' . date('Y-m-d' , strtotime($dateFilter)));

// define table cellsư
$arrayContract = array(
    0 => 'No',
    1 => 'Yes'
);
$table = array(
    0 => array('label' => 'STT', 'width' => 'auto'),
    1 => array('label' => 'Họ Tên', 'width' => 'auto'),
    2 => array('label' => 'Số điện thoại', 'width' => 'auto'),
    3 => array('label' => 'Email', 'width' => 'auto'),
    4 => array('label' => 'Khu vực bạn đang ở', 'width' => 'auto', 'wrap' => true),
    5 => array('label' => 'Mã học viên', 'width' => 'auto', 'wrap' => true),
    6 => array('label' => 'Học ca 1', 'width' => 'auto'),
    7 => array('label' => 'Học ca 2', 'width' => 'auto'),
    8 => array('label' => 'Học ca 3', 'width' => 'auto'),
    9 => array('label' => 'Học ca 4', 'width' => 'auto'),
    10 => array('label' => 'Thứ 2,4,6', 'width' => 'auto'),
    11 => array('label' => 'Thứ 3,5,7', 'width' => 'auto'),
    12 => array('label' => 'Sáng thứ 7', 'width' => 'auto'),
    13 => array('label' => 'Chiều thứ 7', 'width' => 'auto'),
    14 => array('label' => 'Sinh viên', 'width' => 'auto'),
    15 => array('label' => 'Người đi làm', 'width' => 'auto'),
    16 => array('label' => 'Mã điểm', 'width' => 'auto'),
    17 => array('label' => 'Qua facebook', 'width' => 'auto'),
    18 => array('label' => 'Qua Google', 'width' => 'auto'),
    19 => array('label' => 'Qua giới thiệu', 'width' => 'auto'),
    20 => array('label' => 'Link facebook', 'width' => 'auto'),
    21 => array('label' => 'Ngày', 'width' => 'auto'),
);
$this->PhpExcel->addTableHeader($table, array('bold' => true));

foreach ($students as $student) {
    $row = array(
        $student['Student']['STT'],
        $student['Student']['hoten'],
        $student['Student']['dienthoai'],
        $student['Student']['email'],
        $student['Student']['vitri'],
        $student['Student']['sid'],
        $student['Student']['ca1'],
        $student['Student']['ca2'],
        $student['Student']['ca3'],
        $student['Student']['ca4'],
        $student['Student']['evenday'],
        $student['Student']['oddday'],
        $student['Student']['st7'],
        $student['Student']['ct7'],
        $student['Student']['sinhvien'],
        $student['Student']['dilam'],
        $student['Student']['madiem'],
        $student['Student']['viafb'],
        $student['Student']['viag'],
        $student['Student']['viaintro'],
        $student['Student']['why'],
        $student['Student']['date'],
    );
    $this->PhpExcel->addTableRow($row);
}
//die;
$this->PhpExcel->addTableFooter();
$this->PhpExcel->output('contacts-' . date('Ymd' , strtotime($dateFilter)) . '.xlsx');
?>