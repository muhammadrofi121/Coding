<?php
$tgl = date ('1');
echo date ('1, dIF Y', strtotime('2021-01-23'));
switch($tgl){
    case 'Monday';echo 'senin';break;
    case 'Tuesday';echo 'selasa';break;
    case 'Wednesday';echo 'rabu';break;
    case 'Thursday';echo 'kamis';break;
    case 'Friday';echo 'jumat';break;
    case 'Saturday';echo 'sabtu';break;
    case 'Sunday';echo 'minggu';break;
}