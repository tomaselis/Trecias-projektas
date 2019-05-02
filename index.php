<?php
$days = 365;
$cizos_mon_thu = rand(3,4);
$cizos_fri = rand(10,20);
$cizos_sat_sun = rand(1,3);
$pakelio_kaina = 3.50;
$viso_kaina = '';
$viso_vnt = '';
$mon_thu_kaina = '';


?>









<html>
<head>
    <title>Kintamieji</title>
    <style>
        .kvadratas {
            background-color: blue;
            height: 50px;
            width: 50px;
        }


        .rutulys {
            background-color: blue;
            height: 50px;
            width: 50px;
            border-radius: 50px;
        }

        .debesuotalietus {

        background-color: blue;
        height: 50px;
        width: 50px;
        }

    </style>

<body>
<p>
    Per metus surukysiu [$viso_vnt] cigareciu uz [$viso_kaina] eurais.
</p>
<p>
   Nerukydamas pirmadieni ketvirtadienis sutaupyciau [$$mon_thu_kaina] eur.
</p>
</body>
</html>