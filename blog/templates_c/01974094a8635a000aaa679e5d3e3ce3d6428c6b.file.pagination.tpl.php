<?php /* Smarty version Smarty-3.1.15, created on 2014-01-17 09:19:11
         compiled from "template/partial/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9383028752d8e77fa90939-36221351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01974094a8635a000aaa679e5d3e3ce3d6428c6b' => 
    array (
      0 => 'template/partial/pagination.tpl',
      1 => 1389946393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9383028752d8e77fa90939-36221351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagee' => 0,
    'pagemoin' => 0,
    'nb_pagee' => 0,
    'ii' => 0,
    'pageplus' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52d8e77fab46e4_02729762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d8e77fab46e4_02729762')) {function content_52d8e77fab46e4_02729762($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['pagee']->value!=1) {?>
    <a href='<?php echo $_smarty_tpl->tpl_vars['pagemoin']->value;?>
'> précedent</a> -
<?php }?>
<?php $_smarty_tpl->tpl_vars['ii'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['ii']->step = 1;$_smarty_tpl->tpl_vars['ii']->total = (int) ceil(($_smarty_tpl->tpl_vars['ii']->step > 0 ? $_smarty_tpl->tpl_vars['nb_pagee']->value+1+1 - (1) : 1-($_smarty_tpl->tpl_vars['nb_pagee']->value+1)+1)/abs($_smarty_tpl->tpl_vars['ii']->step));
if ($_smarty_tpl->tpl_vars['ii']->total > 0) {
for ($_smarty_tpl->tpl_vars['ii']->value = 1, $_smarty_tpl->tpl_vars['ii']->iteration = 1;$_smarty_tpl->tpl_vars['ii']->iteration <= $_smarty_tpl->tpl_vars['ii']->total;$_smarty_tpl->tpl_vars['ii']->value += $_smarty_tpl->tpl_vars['ii']->step, $_smarty_tpl->tpl_vars['ii']->iteration++) {
$_smarty_tpl->tpl_vars['ii']->first = $_smarty_tpl->tpl_vars['ii']->iteration == 1;$_smarty_tpl->tpl_vars['ii']->last = $_smarty_tpl->tpl_vars['ii']->iteration == $_smarty_tpl->tpl_vars['ii']->total;?>
        <a href=index.php?p=<?php echo $_smarty_tpl->tpl_vars['ii']->value;?>
><?php echo $_smarty_tpl->tpl_vars['ii']->value;?>
</a>
    <?php }} ?>
<?php if ($_smarty_tpl->tpl_vars['pagee']->value<=$_smarty_tpl->tpl_vars['nb_pagee']->value) {?>
- <a href='<?php echo $_smarty_tpl->tpl_vars['pageplus']->value;?>
'> suivant</a>
<?php }?><?php }} ?>
