<?php
/**
 * Created by PhpStorm.
 * User: willr
 * Date: 13/11/2016
 * Time: 18:22
 */

function tirarAcentos($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
}
function getSelectTag($array, $name, $id = '') {
    $select = '<select class="form-control" id="'.$name.'" name="'.$name.'" class="bs-select form-control">';
    $select .= '<option value=""></option>';

    foreach ($array as $key => $value) {
        $selected = ($id == $value->id) ? 'selected' : '';
        $select .= '<option '.$selected.' value="'. $value->id .'">'.$value->name.'</option>';
    }

    $select .= '</select>';
    return $select;
}
function getSelectRange($name, $min, $max, $val = '') {
    $select = '<select class="form-control" id="'.$name.'" name="'.$name.'" class="bs-select form-control">';
    $select .= '<option value=""></option>';
    if (!is_int($min)) {
        throw new Exception('second param should be integer');
    }
    if (!is_int($max)) {
        throw new Exception('third $max should be integer');
    }
    for ($min; $min <= $max; $min++) {
        $selected = ($val == $min) ? 'selected' : '';
        $select .= '<option '.$selected.' value="'. $min .'">'.$min.'</option>';
    }
    $select .= '</select>';
    return $select;
}
function getCheckboxTag($name, $checked = '', $mini = '') {
    $checkbox = '<input class="make-switch form-control" '.$checked.' data-on-text="Sim" data-off-text="Não" '.$mini.' data-on-color="success" data-off-color="default" id="'.$name.'" name="'.$name.'" type="checkbox">';
    return $checkbox;
}
function getCheckboxSimple($id_op, $val, $name, $checked = '') {

    $id = str_replace(' ', '_', trim(strtolower(tirarAcentos($val))));

    $checkbox = '<div class="md-checkbox md-checkbox-inline has-info">';
    $checkbox .= '<input type="checkbox" '.$checked.' name="'.$name.'" value="'.$id_op.'" id="'.$id.'" class="md-check">';
    $checkbox .= '<label for="'.$id.'">
                        <span class="inc"></span>
                        <span class="check"></span>
                        <span class="box"></span> '. $val .' 
                    </label></div>';
    return $checkbox;
}
function getSelectSimple($array, $name, $id = '') {
    $select = '<select class="form-control" id="'.$name.'" name="'.$name.'" class="bs-select form-control">';
    $select .= '<option value=""></option>';

    foreach ($array as $i => $indice) {
        $selected = ($id == $indice['value']) ? 'selected' : '';
        $select .= '<option '.$selected.' value="'. $indice['value'] .'">'.$indice['name'].'</option>';
    }

    $select .= '</select>';
    return $select;
}
function my_debug($var, $type = 'print') {
    echo '<pre>';

    if ($type != 'print') {
        var_dump($var);
    } else {
        print_r($var);
    }

    echo '</pre>';
}