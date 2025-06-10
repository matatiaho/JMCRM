<?php
/* Smarty version 4.5.3, created on 2025-06-10 05:01:58
  from '/home/u593997835/domains/crm.lamfbroker.com/public_html/public/legacy/modules/Administration/PDF/buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6847bc46aca202_08786726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83baf926b3463671693209e76451b905c9ed4d40' => 
    array (
      0 => '/home/u593997835/domains/crm.lamfbroker.com/public_html/public/legacy/modules/Administration/PDF/buttons.tpl',
      1 => 1749528398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6847bc46aca202_08786726 (Smarty_Internal_Template $_smarty_tpl) {
?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
"
       accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
"
       class="button primary"
       type="submit"
       name="save"
       onclick="return check_form('ConfigureSettings');"
       value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
">&nbsp;
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
"
       onclick="document.location.href='index.php?module=Administration&action=index'"
       class="button"
       type="button"
       name="cancel"
       value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
">
<?php }
}
