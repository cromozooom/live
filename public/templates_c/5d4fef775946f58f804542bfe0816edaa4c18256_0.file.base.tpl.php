<?php
/* Smarty version 3.1.29, created on 2016-04-25 18:20:36
  from "C:\xampp\htdocs\slim\liveodds\views\templates\layout\base.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571e43d4c07279_69939117',
  'file_dependency' => 
  array (
    '5d4fef775946f58f804542bfe0816edaa4c18256' => 
    array (
      0 => 'C:\\xampp\\htdocs\\slim\\liveodds\\views\\templates\\layout\\base.tpl',
      1 => 1461600140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/include/analytics.tpl' => 1,
  ),
),false)) {
function content_571e43d4c07279_69939117 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<html>
  <head>
    <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

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
  0 => 'block_14885571e43d48ea333_14869686',
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
  0 => 'block_14330571e43d49eff12_27860312',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


    <?php if ($_smarty_tpl->tpl_vars['url_cookies']->value) {?>
      <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_cookies']->value;?>
"><?php echo '</script'; ?>
>
    <?php }?>
  </body>
</html>
<?php }
/* {block 'head'}  file:layout/base.tpl */
function block_14885571e43d48ea333_14869686($_smarty_tpl, $_blockParentStack) {
?>

    
    <?php
}
/* {/block 'head'} */
/* {block 'body'}  file:layout/base.tpl */
function block_14330571e43d49eff12_27860312($_smarty_tpl, $_blockParentStack) {
?>

    
    <?php
}
/* {/block 'body'} */
}
