<?php

    require_once 'AdminModel.php';

    if (isset($_REQUEST['query'])) {

        $array = KickGrassAdmin::fetchList(($_REQUEST['query']));
        echo json_encode($array);

    }