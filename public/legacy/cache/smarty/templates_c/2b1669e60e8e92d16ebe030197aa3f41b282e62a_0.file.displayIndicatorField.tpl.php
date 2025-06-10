<?php
/* Smarty version 4.5.3, created on 2025-06-10 04:13:41
  from '/home/u593997835/domains/crm.lamfbroker.com/public_html/public/legacy/modules/Emails/templates/displayIndicatorField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6847b0f50a6503_00726619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b1669e60e8e92d16ebe030197aa3f41b282e62a' => 
    array (
      0 => '/home/u593997835/domains/crm.lamfbroker.com/public_html/public/legacy/modules/Emails/templates/displayIndicatorField.tpl',
      1 => 1749528220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6847b0f50a6503_00726619 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="email-indicator">
    <?php if (!empty($_smarty_tpl->tpl_vars['bean']->value)) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['bean']->value['status']) && $_smarty_tpl->tpl_vars['bean']->value['status'] == 'unread') {?>
            <div class="email-new"></div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['bean']->value['is_imported']) && !empty($_smarty_tpl->tpl_vars['bean']->value['inbound_email_record']) && $_smarty_tpl->tpl_vars['bean']->value['is_imported'] == true && $_smarty_tpl->tpl_vars['bean']->value['inbound_email_record'] == $_REQUEST['inbound_email_record']) {?>
            <div class="email-imported"><span class="glyphicon glyphicon-ok"></span></div>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['bean']->value['flagged']) && $_smarty_tpl->tpl_vars['bean']->value['flagged'] == 1) {?>
            <span class="email-flagged">!</span>
        <?php }?>
    <?php }?>
</div>
<?php }
}
