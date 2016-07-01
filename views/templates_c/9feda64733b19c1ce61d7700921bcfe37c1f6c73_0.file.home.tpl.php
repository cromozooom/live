<?php
/* Smarty version 3.1.29, created on 2016-07-01 15:40:41
  from "C:\xampp\htdocs\slim\live\views\templates\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577672d9aae5e9_95854614',
  'file_dependency' => 
  array (
    '9feda64733b19c1ce61d7700921bcfe37c1f6c73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\slim\\live\\views\\templates\\home.tpl',
      1 => 1467380439,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/base.tpl' => 1,
    'file:admin/select-match.tpl' => 1,
    'file:admin/select-league.tpl' => 1,
  ),
),false)) {
function content_577672d9aae5e9_95854614 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'head', array (
  0 => 'block_10581577672d8e8e8e3_72294992',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_12138577672d90176e6_83875300',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'}  file:home.tpl */
function block_10581577672d8e8e8e3_72294992($_smarty_tpl, $_blockParentStack) {
?>

  <link rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0][0]->baseUrl(array(),$_smarty_tpl);?>
/css/styles.css" media="screen" title="no title" charset="utf-8">
  <!-- DataTables CSS -->
  <link href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0][0]->baseUrl(array(),$_smarty_tpl);?>
/css/dataTables.bootstrap.css" rel="stylesheet">
  <!-- DataTables Responsive CSS -->

  <!-- Custom Fonts -->
  <link href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0][0]->baseUrl(array(),$_smarty_tpl);?>
/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<?php
}
/* {/block 'head'} */
/* {block 'body'}  file:home.tpl */
function block_12138577672d90176e6_83875300($_smarty_tpl, $_blockParentStack) {
?>


<section class="form">
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">
        GENERATE LIVE ODDS LANDING PAGE
      </div>
      <div class="panel-body">
        <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0][0]->pathFor(array('name'=>'home'),$_smarty_tpl);?>
" method="post" id="form-select">
           <div class="selected">
             <div class="brand-select-row">
               <div  class="row">

                 <div class="col-sm-4">
                   <div class="input-group">
                     <div class="input-group-btn">
                           <button type="button" class="btn btn-primary">Brand</button>
                     </div>
                     <select class="form-control" id="brandName" name="brand"  >
                         <?php
$_from = $_smarty_tpl->tpl_vars['brand']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_brandName_0_saved_item = isset($_smarty_tpl->tpl_vars['brandName']) ? $_smarty_tpl->tpl_vars['brandName'] : false;
$_smarty_tpl->tpl_vars['brandName'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['brandName']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['brandName']->value) {
$_smarty_tpl->tpl_vars['brandName']->_loop = true;
$__foreach_brandName_0_saved_local_item = $_smarty_tpl->tpl_vars['brandName'];
?>
                             <option value="<?php echo $_smarty_tpl->tpl_vars['brandName']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['old']->value['brand']) && $_smarty_tpl->tpl_vars['brandName']->value == $_smarty_tpl->tpl_vars['old']->value['brand']) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['brandName']->value;?>
</option>
                         <?php
$_smarty_tpl->tpl_vars['brandName'] = $__foreach_brandName_0_saved_local_item;
}
if ($__foreach_brandName_0_saved_item) {
$_smarty_tpl->tpl_vars['brandName'] = $__foreach_brandName_0_saved_item;
}
?>
                         <span class="caret"></span>
                     </select>
                   </div>
                 </div>
                 <div class="col-sm-4">
                   <div class="input-group">
                     <div class="input-group-btn">
                       <button type="button" class="btn btn-primary">Product</button>
                     </div>
                     <select class="form-control" id="productName" name="product">

                       <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_productName_1_saved_item = isset($_smarty_tpl->tpl_vars['productName']) ? $_smarty_tpl->tpl_vars['productName'] : false;
$_smarty_tpl->tpl_vars['productName'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['productName']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['productName']->value) {
$_smarty_tpl->tpl_vars['productName']->_loop = true;
$__foreach_productName_1_saved_local_item = $_smarty_tpl->tpl_vars['productName'];
?>
                           <option value="<?php echo $_smarty_tpl->tpl_vars['productName']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['old']->value['product']) && $_smarty_tpl->tpl_vars['productName']->value == $_smarty_tpl->tpl_vars['old']->value['product']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['productName']->value;?>
</option>
                       <?php
$_smarty_tpl->tpl_vars['productName'] = $__foreach_productName_1_saved_local_item;
}
if ($__foreach_productName_1_saved_item) {
$_smarty_tpl->tpl_vars['productName'] = $__foreach_productName_1_saved_item;
}
?>
                     </select>
                   </div>
                 </div>

                 <div class="col-sm-4">
                   <div class="input-group">
                     <div class="input-group-btn">
                       <button type="button" class="btn btn-primary">Language</button>
                     </div>
                     <select class="form-control" name="language" >
                       <?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_lang_2_saved_item = isset($_smarty_tpl->tpl_vars['lang']) ? $_smarty_tpl->tpl_vars['lang'] : false;
$_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['lang']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
$__foreach_lang_2_saved_local_item = $_smarty_tpl->tpl_vars['lang'];
?>
                          <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['old']->value['language']) && $_smarty_tpl->tpl_vars['lang']->value == $_smarty_tpl->tpl_vars['old']->value['language']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
</option>
                       <?php
$_smarty_tpl->tpl_vars['lang'] = $__foreach_lang_2_saved_local_item;
}
if ($__foreach_lang_2_saved_item) {
$_smarty_tpl->tpl_vars['lang'] = $__foreach_lang_2_saved_item;
}
?>
                     </select>
                   </div>
                 </div>
                 

                 </div>
                 
                 <div class="row">
                    <div class="col-sm-4">
                      <div class="input-group">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-primary">Sport Type</button>
                        </div>
                        <select class="form-control" id="sportType" name="sportType">
                          <?php
$_from = $_smarty_tpl->tpl_vars['sportType']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_type_3_saved_item = isset($_smarty_tpl->tpl_vars['type']) ? $_smarty_tpl->tpl_vars['type'] : false;
$_smarty_tpl->tpl_vars['type'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['type']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
$__foreach_type_3_saved_local_item = $_smarty_tpl->tpl_vars['type'];
?>
                              <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['old']->value['sportType']) && $_smarty_tpl->tpl_vars['type']->value == $_smarty_tpl->tpl_vars['old']->value['sportType']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option>
                          <?php
$_smarty_tpl->tpl_vars['type'] = $__foreach_type_3_saved_local_item;
}
if ($__foreach_type_3_saved_item) {
$_smarty_tpl->tpl_vars['type'] = $__foreach_type_3_saved_item;
}
?>
                        </select>

                      </div>

                    </div>
                    

                    <div class="col-sm-4">
                      <div class="input-group">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-primary">Display by</button>
                        </div>
                        <select class="form-control" name="display" >
                             <option value="League" <?php if (isset($_smarty_tpl->tpl_vars['old']->value['display']) && 'League' == $_smarty_tpl->tpl_vars['old']->value['display']) {?>selected<?php }?>>League</option>
                             <option value="Match" <?php if (isset($_smarty_tpl->tpl_vars['old']->value['display']) && 'Match' == $_smarty_tpl->tpl_vars['old']->value['display']) {?>selected<?php }?>>Match</option>
                        </select>
                      </div>
                    </div>
                 </div>
                 <div class="row">
                   <div class="col-sm-4">
                     <button type="submit" class="btn btn-success">Get Feeds</button>
                   </div>
                 </div>
             </div>
           </div>
         </form>
      </div>
    </div>
    
  <?php if (isset($_smarty_tpl->tpl_vars['old']->value['display']) && 'Match' == $_smarty_tpl->tpl_vars['old']->value['display']) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/select-match.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php } elseif (isset($_smarty_tpl->tpl_vars['old']->value['display']) && 'League' == $_smarty_tpl->tpl_vars['old']->value['display']) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/select-league.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php }?>
    
  </div>
  
</section>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0][0]->baseUrl(array(),$_smarty_tpl);?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- DataTables JavaScript -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0][0]->baseUrl(array(),$_smarty_tpl);?>
/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0][0]->baseUrl(array(),$_smarty_tpl);?>
/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready( function () {
      $('#matchs-table').DataTable();
    } );
<?php echo '</script'; ?>
>
<?php
}
/* {/block 'body'} */
}
