<?php /* Smarty version Smarty-3.1.15, created on 2014-01-17 11:14:14
         compiled from "view/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153996574152d8e8d2654285-85495970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6afda07839fa59f9f95ac75bf89fa4f20bfb3e1a' => 
    array (
      0 => 'view/index.tpl',
      1 => 1389953651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153996574152d8e8d2654285-85495970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52d8e8d26bc946_97286647',
  'variables' => 
  array (
    'data' => 0,
    'pagee' => 0,
    'pagemoin' => 0,
    'nb_pagee' => 0,
    'i' => 0,
    'ii' => 0,
    'pageplus' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d8e8d26bc946_97286647')) {function content_52d8e8d26bc946_97286647($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['data_i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_i']->key => $_smarty_tpl->tpl_vars['data_i']->value) {
$_smarty_tpl->tpl_vars['data_i']->_loop = true;
?> 
<?php echo $_smarty_tpl->getSubTemplate ('view/_article.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } ?>
<br><br>
<?php if ($_smarty_tpl->tpl_vars['pagee']->value!=1) {?>
    <a href='<?php echo $_smarty_tpl->tpl_vars['pagemoin']->value;?>
'> précedent</a> -
<?php }?>
<?php $_smarty_tpl->tpl_vars['ii'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['ii']->step = 1;$_smarty_tpl->tpl_vars['ii']->total = (int) ceil(($_smarty_tpl->tpl_vars['ii']->step > 0 ? $_smarty_tpl->tpl_vars['nb_pagee']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['nb_pagee']->value)+1)/abs($_smarty_tpl->tpl_vars['ii']->step));
if ($_smarty_tpl->tpl_vars['ii']->total > 0) {
for ($_smarty_tpl->tpl_vars['ii']->value = 1, $_smarty_tpl->tpl_vars['ii']->iteration = 1;$_smarty_tpl->tpl_vars['ii']->iteration <= $_smarty_tpl->tpl_vars['ii']->total;$_smarty_tpl->tpl_vars['ii']->value += $_smarty_tpl->tpl_vars['ii']->step, $_smarty_tpl->tpl_vars['ii']->iteration++) {
$_smarty_tpl->tpl_vars['ii']->first = $_smarty_tpl->tpl_vars['ii']->iteration == 1;$_smarty_tpl->tpl_vars['ii']->last = $_smarty_tpl->tpl_vars['ii']->iteration == $_smarty_tpl->tpl_vars['ii']->total;?>
    <?php if ($_smarty_tpl->tpl_vars['pagee']->value==$_smarty_tpl->tpl_vars['i']->value) {?>
        <a class="active" href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['ii']->value;?>
"><b><?php echo $_smarty_tpl->tpl_vars['ii']->value;?>
</b></a>
    <?php } else { ?>
        <a href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['ii']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ii']->value;?>
</a>
    <?php }?>
                        

    <?php }} ?>
    
<?php if ($_smarty_tpl->tpl_vars['pagee']->value!=$_smarty_tpl->tpl_vars['nb_pagee']->value) {?>
- <a href='<?php echo $_smarty_tpl->tpl_vars['pageplus']->value;?>
'> suivant</a>
<?php }?>



<?php }} ?>
