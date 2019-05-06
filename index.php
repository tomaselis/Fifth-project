

<?php

$siukslines_turis = 40; //dm3
$siuksliu_turis_avg_per_day = 15;
$max_kaupo_turis = rand(10, 20);


$dienu = ($siukslines_turis + $max_kaupo_turis) / $siuksliu_turis_avg_per_day;
$tikslus_sk_dienu = round($dienu);

/*for ($siukslines_turys; $siuksliu_turis >= 60; $siukslines_turis - $max_kaupo_turis)*/
$date = date('Y-m-d', strtotime('+' . $tikslus_sk_dienu . 'days'));

?>




<html>
<head>
    <meta charset="UTF-8">
    <title>Fifth project</title>
    <style>
    </style>
</head>
<body>
<p><?php print 'Po ' . $date   . ' pirk geliu ir sampano jeigu nori kad tavo zmona pati geles issinestu'?></p>
</body>
</html