<?php $web_name = 'ASIC';

// format indo date
function indo_date_format($time)
{
    $month = array(
        1 =>   'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );
    $time_array = explode('-', $time);
    return $time_array[2] . ' ' . $month[(int)$time_array[1]] . ' ' . $time_array[0];
}

$db = mysqli_connect("localhost", "root", "", "asic");

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
