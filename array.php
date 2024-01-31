<?php

// !!!!!!!!!!!!!!   ДЛЯ УДОБСТВА ПРОВЕРКИ НЕОБХОДИМО РАСКОМЕНТИРОВАТЬ КАЖДЫЙ ИЗ БЛОКОВ КОДА

$array = [
    'name' => 'Fred',
    'remove' => True,
    'additional_params' => [
        'is_marries' => false,
        'country' => 'France',
        'born' => '10.09.1982',
    ],
];

#1
// unset($array['remove']);
// var_dump($array);

#2
// function get_age_person($dateBirthday)
// {
//     $diff = date('Ymd') - date('Ymd', strtotime($dateBirthday));
//     return substr($diff, 0, -4);
// };
// var_dump(get_age_person($array['additional_params']['born']));

#3
// ksort($array);
// var_dump($array);

#4
// $descr_country = [
//     'country' => 'France',
//     'capital' => 'Paris',
//     'timezone' => 'UTC +2 / Central European',
// ];

// unset($array['additional_params']['country']);
// $array['additional_params'][0] = $descr_country;
// var_dump($array);

#5
// $result = array_merge($array, ['child' => null]);
// var_dump($result);

#6
// $dateElem = $array['additional_params']['born'];
// $dateStrArray = explode('.', $dateElem);
// $arrayDateTitle = [
//     'день' => $dateStrArray[0],
//     'месяц' => $dateStrArray[1],
//     'год' => $dateStrArray[2],
// ];

// unset($array['additional_params']['born']);
// $array['additional_params'][2] = $arrayDateTitle;
// var_dump($array);


