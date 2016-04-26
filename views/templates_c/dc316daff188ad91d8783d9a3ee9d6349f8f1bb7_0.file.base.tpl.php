<?php
/* Smarty version 3.1.29, created on 2016-04-26 10:45:42
  from "C:\xampp\htdocs\slim\live\views\templates\layout\base.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571f2ab6806b91_39775283',
  'file_dependency' => 
  array (
    'dc316daff188ad91d8783d9a3ee9d6349f8f1bb7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\slim\\live\\views\\templates\\layout\\base.tpl',
      1 => 1461660340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/include/analytics.tpl' => 1,
  ),
),false)) {
function content_571f2ab6806b91_39775283 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<html>
  <head>
    <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title></title>

   <!-- Bootstrap -->
   <link href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0][0]->baseUrl(array(),$_smarty_tpl);?>
/css/bootstrap.min.css" rel="stylesheet">
   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
   <![endif]-->
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'head', array (
  0 => 'block_27972571f2ab6701011_20305236',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/include/analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </head>
  </head>
  <body>
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_28205571f2ab67ace19_94151389',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


    
  </body>
</html>
<?php }
/* {block 'head'}  file:layout/base.tpl */
function block_27972571f2ab6701011_20305236($_smarty_tpl, $_blockParentStack) {
?>

    
    <?php
}
/* {/block 'head'} */
/* {block 'body'}  file:layout/base.tpl */
function block_28205571f2ab67ace19_94151389($_smarty_tpl, $_blockParentStack) {
?>

    
    <?php
}
/* {/block 'body'} */
}
