<?php
/* Smarty version 4.5.3, created on 2025-06-10 04:24:21
  from '/home/u593997835/domains/crm.lamfbroker.com/public_html/public/legacy/themes/suite8/include/ListView/ListViewSelectObjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6847b375f35f61_86033549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b7fb1bb7b873ba2b936be94e6a02dc2b910987c' => 
    array (
      0 => '/home/u593997835/domains/crm.lamfbroker.com/public_html/public/legacy/themes/suite8/include/ListView/ListViewSelectObjects.tpl',
      1 => 1749529431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6847b375f35f61_86033549 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="selectedRecords label hidden"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LISTVIEW_SELECTED_OBJECTS'];?>
</div><div class="selectedRecords value hidden"><?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $_smarty_tpl->tpl_vars['TOTAL_ITEMS_SELECTED']->value;?>
' />

<?php echo '<script'; ?>
>

    $(document).ready(function () {
        setInterval(function () {
            sListView.toggleSelected();
        }, 100);
    });

<?php echo '</script'; ?>
><?php }
}
