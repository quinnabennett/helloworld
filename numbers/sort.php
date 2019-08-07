<?php/** * Created by PhpStorm. * User: syed.moizullah * Date: 8/7/19 * Time: 10:45 AM */include_once __DIR__ . "/all_numbers.php"; sort($list_of_numbers); for($i = 0; $i < count($list_of_numbers); $i++) {

    echo $list_of_numbers[$i];
    echo "\n";
}
