<style>
    tr:hover {
        background-color: #46479622;
    }
</style>

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