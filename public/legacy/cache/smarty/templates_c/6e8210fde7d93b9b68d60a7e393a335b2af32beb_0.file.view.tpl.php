<?php
/* Smarty version 4.5.3, created on 2025-06-10 05:01:58
  from '/home/u593997835/domains/crm.lamfbroker.com/public_html/public/legacy/modules/Administration/PDF/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6847bc46ad35a5_27211778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e8210fde7d93b9b68d60a7e393a335b2af32beb' => 
    array (
      0 => '/home/u593997835/domains/crm.lamfbroker.com/public_html/public/legacy/modules/Administration/PDF/view.tpl',
      1 => 1749528397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6847bc46ad35a5_27211778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u593997835/domains/crm.lamfbroker.com/public_html/public/legacy/include/Smarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'/home/u593997835/domains/crm.lamfbroker.com/public_html/public/legacy/include/Smarty/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<h1><?php echo smarty_function_sugar_translate(array('label'=>"LBL_PDF_HEADER"),$_smarty_tpl);?>
</h1>

<form id="SearchSettings"
      name="ConfigureSettings"
      class="detail-view"
      enctype='multipart/form-data'
      method="POST"
      action="index.php?module=Administration&action=PDFSettings&do=Save">

    <input type="hidden" name="module" value="Administration">

    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_INTERFACE'];?>
</div>
            <div class="panel-body tab-content text-center">
                <div class="col-md-6">
                    <div class="form-check">
                        <div class="td-container">
                            <div>
                                <label for="pdf-engine"><?php echo smarty_function_sugar_translate(array('label'=>"LBL_PDF_OPTIONS"),$_smarty_tpl);?>
</label>
                            </div>
                            <div>
                                <small class="form-text text-muted"><?php echo smarty_function_sugar_translate(array('label'=>"LBL_PDF_OPTIONS_HELP"),$_smarty_tpl);?>
</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['engines']->value,'selected'=>$_smarty_tpl->tpl_vars['selectedEngine']->value,'id'=>"pdf-engine",'name'=>"pdf-engine",'class'=>"form-control"),$_smarty_tpl);?>

                </div>
            </div>
        </div>
    </div>

    <?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>


    <div class="settings-buttons">
        <?php echo $_smarty_tpl->tpl_vars['BUTTONS']->value;?>

    </div>
</form>

<?php }
}
