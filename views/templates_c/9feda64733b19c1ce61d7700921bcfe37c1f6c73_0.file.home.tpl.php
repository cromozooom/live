<?php
/* Smarty version 3.1.29, created on 2016-06-22 17:02:11
  from "C:\xampp\htdocs\slim\live\views\templates\home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576aa8734858f1_63877121',
  'file_dependency' => 
  array (
    '9feda64733b19c1ce61d7700921bcfe37c1f6c73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\slim\\live\\views\\templates\\home.tpl',
      1 => 1466602312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/base.tpl' => 1,
  ),
),false)) {
function content_576aa8734858f1_63877121 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'head', array (
  0 => 'block_24058576aa86f6fa771_30411580',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_24491576aa86fc076f4_47072485',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layout/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'}  file:home.tpl */
function block_24058576aa86f6fa771_30411580($_smarty_tpl, $_blockParentStack) {
?>

  <link rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['base_url'][0][0]->baseUrl(array(),$_smarty_tpl);?>
/css/styles.css" media="screen" title="no title" charset="utf-8">
<?php
}
/* {/block 'head'} */
/* {block 'body'}  file:home.tpl */
function block_24491576aa86fc076f4_47072485($_smarty_tpl, $_blockParentStack) {
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
                          <button type="button" class="btn btn-primary">Display</button>
                        </div>
                        <select class="form-control" name="display" >

                             <option value="League"selected>League</option>
                             <option value="Matchs">Matchs</option>

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
    
  <?php if (isset($_smarty_tpl->tpl_vars['old']->value['sportType'])) {?>
    <form action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['path_for'][0][0]->pathFor(array('name'=>'liveodds','data'=>array("brand"=>"netbet","sportType"=>((string)$_smarty_tpl->tpl_vars['old']->value['sportType']))),$_smarty_tpl);?>
" method="get" id="match-select">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6">
              <h4>Select <?php if (isset($_smarty_tpl->tpl_vars['old']->value['sportType'])) {
echo $_smarty_tpl->tpl_vars['old']->value['sportType'];
}?> Matches</h4>
            </div>
            <div class="col-xs-6">
              <button type="submit" class="btn btn-success pull-right">GENERATE LANDING PAGE</button>
            </div>
          </div>
        </div>
        <div class="panel-body">

            <div >
              <table class="table table-condensed">
                  <thead>
                    <tr>
                      <th>League</th>
                      <th>Match</th>
                      <th>Time</th>
                      <th>Select</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (isset($_smarty_tpl->tpl_vars['xmlFeeds']->value)) {?>
                      <?php
$_from = $_smarty_tpl->tpl_vars['xmlFeeds']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_match_4_saved_item = isset($_smarty_tpl->tpl_vars['match']) ? $_smarty_tpl->tpl_vars['match'] : false;
$_smarty_tpl->tpl_vars['match'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['match']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['match']->value) {
$_smarty_tpl->tpl_vars['match']->_loop = true;
$__foreach_match_4_saved_local_item = $_smarty_tpl->tpl_vars['match'];
?>
                        <tr>
                          <td><?php echo $_smarty_tpl->tpl_vars['match']->value['League'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['match']->value->Participants->Participant1['Name'];?>
 VS <?php echo $_smarty_tpl->tpl_vars['match']->value->Participants->Participant2['Name'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['match']->value['DateTimeGMT'];?>
</td>
                          <td><input type="checkbox" name="MEID[]" value="<?php echo $_smarty_tpl->tpl_vars['match']->value['MEID'];?>
"></td>
                        </tr>
                      <?php
$_smarty_tpl->tpl_vars['match'] = $__foreach_match_4_saved_local_item;
}
if ($__foreach_match_4_saved_item) {
$_smarty_tpl->tpl_vars['match'] = $__foreach_match_4_saved_item;
}
?>
                    <?php }?>
                  </tbody>
                </table>
            </div>


        </div>
        
        <div class="panel-footer">
            <ul class="pagination pagination-sm" style="margin: 0;">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
            </ul>

        </div>
      </div>
    </form>
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

<?php
}
/* {/block 'body'} */
}
