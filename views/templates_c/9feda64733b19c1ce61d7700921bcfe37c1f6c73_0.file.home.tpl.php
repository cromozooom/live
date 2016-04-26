<?php
/* Smarty version 3.1.29, created on 2016-04-26 10:48:34
  from "C:\xampp\htdocs\slim\live\views\templates\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571f2b62eadd98_20618793',
  'file_dependency' => 
  array (
    '9feda64733b19c1ce61d7700921bcfe37c1f6c73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\slim\\live\\views\\templates\\home.tpl',
      1 => 1461660456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/base.tpl' => 1,
    'file:layout/partial/nav/nav.tpl' => 1,
  ),
),false)) {
function content_571f2b62eadd98_20618793 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'head', array (
  0 => 'block_31506571f2b62d65b91_86225645',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_4835571f2b62e01f91_32959569',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'}  file:home.tpl */
function block_31506571f2b62d65b91_86225645($_smarty_tpl, $_blockParentStack) {
?>

  <link rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0][0]->baseUrl(array(),$_smarty_tpl);?>
/css/styles.css" media="screen" title="no title" charset="utf-8">
<?php
}
/* {/block 'head'} */
/* {block 'body'}  file:home.tpl */
function block_4835571f2b62e01f91_32959569($_smarty_tpl, $_blockParentStack) {
?>

<nav class="navbar">
  <div class="container">
      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/partial/nav/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  </div>
</nav>

<?php
}
/* {/block 'body'} */
}
