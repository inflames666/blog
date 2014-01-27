<?php /* Smarty version Smarty-3.1.15, created on 2014-01-17 11:20:43
         compiled from "view/_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172288470652d8edc67c2156-06626889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '254d7cbf562c0e0758f0cc11d0ed8a9bc0e145ea' => 
    array (
      0 => 'view/_article.tpl',
      1 => 1389954042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172288470652d8edc67c2156-06626889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52d8edc67dc7e4_53926857',
  'variables' => 
  array (
    'data_i' => 0,
    'connexion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d8edc67dc7e4_53926857')) {function content_52d8edc67dc7e4_53926857($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/media/www-dev/public/blog/tpl/plugins/modifier.date_format.php';
?><h2><?php echo $_smarty_tpl->tpl_vars['data_i']->value['Titre'];?>
<span style="font-size: 10px; padding-left:5%;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data_i']->value['Date'],'%d/%m/%Y');?>
</span></h2>
<div><?php echo $_smarty_tpl->tpl_vars['data_i']->value['Texte'];?>
</div><br>
<h3 style='font-size: 10px;'>Tag : <span style=""><?php echo $_smarty_tpl->tpl_vars['data_i']->value['Nom'];?>
</span></h3>
<?php if ($_smarty_tpl->tpl_vars['connexion']->value==true) {?>
<a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['data_i']->value['Id'];?>
" class="btn btn-success"> Modifier </a>
<a href="supprimer_article.php?id=<?php echo $_smarty_tpl->tpl_vars['data_i']->value['Id'];?>
&bt=Supprimer" class="btn btn-danger"> Supprimer </a>
<?php }?><?php }} ?>
