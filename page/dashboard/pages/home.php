<style>
    tr:hover {
        background-color: #46479622;
    }
</style>


<h1 style="margin-left: 3rem; text-decoration: underline;">Charts Overview</h1>

<div class="flex row " style="justify-content: space-around;">
    <div class="chart" style="width: 100%;">
        <div class="canvas0" style="max-width: 90%; margin: 0 auto;">
            <h1>Administrative Logs</h1>
            <canvas width="1000" style="width: 100%;" id="ctx0"></canvas>
        </div>
    </div>
    
    <div class="chart" style="width: 100%;">
        <div class="canvas1" style="max-width: 90%; margin: 0 auto;">
            <h1>Client Logs</h1>
            <canvas width="1000" style="width: 100%;" id="ctx1"></canvas>
        </div>
    </div>
</div>

<hr style="width: 100%">
<h1 style="margin-left: 3rem; text-decoration: underline;">Logs Overview</h1>
<br>
<table>
    <thead style="background-color: #464796;font-size: 1.3rem;">
        <tr>
            <th>#</th>
            <th>Time (<?php echo date_default_timezone_get(); ?>)</th>
            <th>Mesasge</th>
        </tr>
    </thead>
    <?php

    require_once("../../../api/db.php");
    $db = new db(); $db->connect();
    $logs = $db->query("SELECT * FROM `phpdemo`.`logs` ORDER BY `id` DESC LIMIT 100;")->fetch_all();
    foreach ($logs as $log) { ?>
        <tr>
            <th><?php echo $log[0]; ?></th>
            <th><?php echo $log[1]; ?></th>
            <th><?php echo $log[2]; ?></th>
        </tr>
    <?php } ?>
</table>
<br><br><br>

<script>
var ctx0 = document.getElementById('ctx0').getContext('2d');
var chart0 = new Chart(ctx0, {
    // The type of chart we want to create
    type: 'line',
    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
            {
                label: 'Database Logs',
                backgroundColor: 'rgb(255, 99, 132, .5)',
                borderColor: 'rgb(255, 99, 132)',
                data: [242, 322, 411, 552, 410, 447, 612]
            },
            {
                label: 'Client Logins',
                backgroundColor: 'rgb(100, 99, 255, .5)',
                borderColor: 'rgb(80, 80, 255)',
                data: [142, 412, 521, 462, 390, 457, 482]
            },
            {
                label: 'Admin Logins',
                backgroundColor: 'rgb(100, 255, 111, .5)',
                borderColor: 'rgb(100, 255, 80)',
                data: [42, 12, 21, 62, 90, 57, 82]
            },
        ]
    },

    // Configuration options go here
    options: {

    }
});

var ctx1 = document.getElementById('ctx1').getContext('2d');
var chart1 = new Chart(ctx1, {
    // The type of chart we want to create
    type: 'line',
    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
            {
                label: 'Clients Lost',
                backgroundColor: 'rgb(255, 99, 132, .5)',
                borderColor: 'rgb(255, 99, 132)',
                data: [1, 2, 1, 0, 0, 3, 1]
            },
            {
                label: 'Clients Satisfied',
                backgroundColor: 'rgb(100, 99, 255, .5)',
                borderColor: 'rgb(80, 80, 255)',
                data: [52, 31, 45, 33, 56, 42, 21]
            },
            {
                label: 'Leads',
                backgroundColor: 'rgb(100, 255, 111, .5)',
                borderColor: 'rgb(100, 255, 80)',
                data: [42, 12, 21, 62, 90, 57, 82]
            },
        ]
    },

    // Configuration options go here
    options: {

    }
});
</script>