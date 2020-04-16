<?php
if(isset($_POST['submit'])){
    $month = $_POST['month'];
    $year = $_POST['year'];
}
$isLeapYear = ($year % 4) || (($year % 100 === 0) && ($year % 400)) ? 0 : 1;
$daysInMonth = 31 - (($month == 2) ? (3 - $isLeapYear) : (($month - 1) % 7 % 2));
switch ($month) {
    case 1:
        $monthName = 'January';
        break;
    case 2:
        $monthName = 'February';
        break;
    case 3:
        $monthName = 'March';
        break;
    case 4:
        $monthName = 'April';
        break;
    case 5:
        $monthName = 'May';
        break;
     case 6:
         $monthName = 'June';
         break; 
    case 7:
        $monthName = 'July';
         break;
    case 8:
        $monthName = 'August';
        break;
    case 9:
         $monthName = 'September';
         break;
    case 10:
         $monthName = 'October';
         break; 
    case 11:
        $monthName =  'November';
        break;
    case 12:
        $monthName =  'December';
        break;                                               
}     
$info = $isLeapYear ? '<div><p> Year ' . $year. ' is leap</p><p>In ' .$monthName. ' ' .$daysInMonth. ' days</p></div>' 
: '<div><p>Year ' .$year. ' is not leap</p> <p>In ' .$monthName. ' ' .$daysInMonth. ' days</p></div>';
echo $info ;
?>