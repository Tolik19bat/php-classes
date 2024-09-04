<?php

require 'App.php';

use App\folderAuto\Auto;
use App\folderMonitorTv\MonitorTv;
use App\folderStudent\Student;

$auto = new Auto('MERCEDES', 120);
$monitorTv = new MonitorTv('Samsung', 1920);
$student = new Student('имя','фамилия','город');

$brandTvs = MonitorTv::$brandTvs[0];
$studentMap = Student::MAP[0];

unset($auto); // Очищаем данные из памяти
unset($monitorTv); // Очищаем данные из памяти
unset($student); // Очищаем данные из памяти
unset($brandTvs); // Очищаем данные из памяти
unset($studentMap); // Очищаем данные из памяти