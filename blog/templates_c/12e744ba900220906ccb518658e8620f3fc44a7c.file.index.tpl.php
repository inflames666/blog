<?php /* Smarty version Smarty-3.1.15, created on 2014-01-17 09:19:11
         compiled from "template/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72642387552d8e77fa5b429-77824121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e744ba900220906ccb518658e8620f3fc44a7c' => 
    array (
      0 => 'template/index.tpl',
      1 => 1389946393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72642387552d8e77fa5b429-77824121',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'data_i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52d8e77fa8e484_16632647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d8e77fa8e484_16632647')) {function content_52d8e77fa8e484_16632647($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['data_i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_i']->key => $_smarty_tpl->tpl_vars['data_i']->value) {
$_smarty_tpl->tpl_vars['data_i']->_loop = true;
?>
<?php echo $_smarty_tpl->getSubTemplate ('template/partial/article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('article'=>$_smarty_tpl->tpl_vars['data_i']->value), 0);?>

<?php } ?>

<?php echo $_smarty_tpl->getSubTemplate ('template/partial/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
