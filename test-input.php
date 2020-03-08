<?php
/*
Template Name: Тестовая страница
*/
?>

<?php
get_header();
?>
<?php

    function output($code) {
        echo '<pre>';
            var_dump($code);
            var_dump(is_array($code));
        echo '<pre>';
    }

/**
 * @param $arr - input array;
 * @param $num - число, указывающее на каком шаге переходить к следующей вложенности;
 * @return array() - многомерный массив;
 */

    function arrayToMultiArr($arr, $num) {
        $newArr = [];
        for($i = 0; $i < count($arr); $i++) {
            if($i <= $num) {
                $newArr[] = Array($arr[$i]);
            }
        }
    }

    $group = get_field('Group');
    output($group);
?>
<?php
get_footer();
?>