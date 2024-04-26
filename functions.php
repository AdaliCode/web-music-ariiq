<?php $web_name = 'ASIC';

// format indo date
function indo_date_format($time)
{
    $month = array(
        1 =>   'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );
    $time_array = explode('/', $time);
    return $time_array[0] . ' ' . $month[$time_array[1]] . ', ' . $time_array[2];
}
$music_data = array(
    array(
        'title' => 'DALALA', 'singer' => 'YUJU', 'release' => indo_date_format('20/9/2023')
    ),
    array(
        'title' => 'NOBODY (NOBODY)', 'singer' => 'SOYEON ((G)I-DLE), WINTER, LIZ (IVE)', 'release' => indo_date_format('16/11/2023')
    ),
    array(
        'title' => 'Dumhdurum', 'singer' => 'Apink (에이핑크)', 'release' => indo_date_format('13/4/2020')
    ),
    array(
        'title' => 'Feel Special', 'singer' => 'TWICE', 'release' => indo_date_format('23/9/2019')
    )
);
