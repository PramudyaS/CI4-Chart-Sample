<!doctype html>
<html>
<head>
    <title>CodeIgniter Tutorial</title>
</head>
<body>

    <h1 style="text-align: center"><?= $title ?></h1>
    <p>Nama : PRAMUDYA SAPUTRA</p>
    <p>NIM  : 41519110177</p>
    <canvas id="oilChart" width="300" height="100"></canvas>

<?php
    $label = "";
    $stok = "";

    foreach($data as $item)
    {
        $label .= '"'. $item['merk'] .'",';
        $stok  .= '"'. $item['stok'] .'",';
    }
?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js" integrity="sha512-QEiC894KVkN9Tsoi6+mKf8HaCLJvyA6QIRzY5KrfINXYuP9NxdIkRQhGq3BZi0J4I7V5SidGM3XUQ5wFiMDuWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var oilCanvas = document.getElementById("oilChart");

    Chart.defaults.global.defaultFontFamily = "Lato";
    Chart.defaults.global.defaultFontSize = 18;

    var oilData = {
        labels: [
           <?= $label   ?>
        ],
        datasets: [
            {
                data: [<?= $stok ?>],
                backgroundColor: [
                    "#FF6384",
                    "#63FF84",
                    "#84FF63",
                    "#8463FF",
                    "#6384FF"
                ]
            }]
    };

    var pieChart = new Chart(oilCanvas, {
        type: 'pie',
        data: oilData
    });
</script>
</html>