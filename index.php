<?php
/*
Plugin Name: Загрузка с биржи Etxt
Description: Загрузка с биржи Etxt
Version: 1.0
Author: Drol
*/
?>
<?ph
function true_options() {

	add_options_page( 'Параметры', 'Параметры', 'manage_options', $true_page, 'true_option_page');  
}
add_action('admin_menu', 'true_options');
 
/**
 * Возвратная функция (Callback)
 */ 
function true_option_page(){
echo 'Hello';
}
