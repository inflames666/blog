<?php /* Smarty version Smarty-3.1.15, created on 2014-01-17 09:23:51
         compiled from "template/partial/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207739527252d8e89784a9b7-24441494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '972497d6d120f90933d2f148a82ecbc97e9a51dc' => 
    array (
      0 => 'template/partial/article.tpl',
      1 => 1389946393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207739527252d8e89784a9b7-24441494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'article' => 0,
    'data_i' => 0,
    'connected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52d8e8978a1187_05996774',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d8e8978a1187_05996774')) {function content_52d8e8978a1187_05996774($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/media/www-dev/public/blog/tpl/plugins/modifier.date_format.php';
?><h2><?php echo $_smarty_tpl->tpl_vars['article']->value['titre'];?>
<span style="font-size: 10px; padding-left:5%;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data_i']->value['date'],'%d/%m/%Y');?>
</span></h2>
<div><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</div>
<br />
<?php if ($_smarty_tpl->tpl_vars['connected']->value) {?>
<a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" class="btn-primary"> Modifier </a>
<a href="supprimer_article.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
&bt=Supprimer" class="btn-danger"> Supprimer </a>
<?php }?><?php }} ?>
