<?php
/* Smarty version 3.1.29, created on 2016-04-25 18:20:36
  from "C:\xampp\htdocs\slim\liveodds\views\templates\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571e43d4160518_56726148',
  'file_dependency' => 
  array (
    'cf53f1031d3f61c5b2533b5ddaeca35b30498392' => 
    array (
      0 => 'C:\\xampp\\htdocs\\slim\\liveodds\\views\\templates\\home.tpl',
      1 => 1461600483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/base.tpl' => 1,
  ),
),false)) {
function content_571e43d4160518_56726148 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_27535571e43d40d3ae0_70219089',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'}  file:home.tpl */
function block_27535571e43d40d3ae0_70219089($_smarty_tpl, $_blockParentStack) {
?>

<h1>Home test</h1>

<?php
}
/* {/block 'body'} */
}
