<?php
/* Smarty version 4.5.3, created on 2025-06-10 05:04:46
  from '/home/u593997835/domains/crm.lamfbroker.com/public_html/public/legacy/modules/Administration/GoogleCalendarSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6847bceecc4dd8_73489559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56be19febcdd545454b2c2c1c30917655ad9b02c' => 
    array (
      0 => '/home/u593997835/domains/crm.lamfbroker.com/public_html/public/legacy/modules/Administration/GoogleCalendarSettings.tpl',
      1 => 1749527692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6847bceecc4dd8_73489559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u593997835/domains/crm.lamfbroker.com/public_html/public/legacy/include/Smarty/plugins/function.sugar_help.php','function'=>'smarty_function_sugar_help',),));
?>

<?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>


<form name="gcAuthentication"
      enctype='multipart/form-data'
      method="post"
      action="index.php?module=Administration&action=GoogleCalendarSettings&do=save"
      onSubmit="return (add_checks(document.gcAuthentication) && check_form('gcAuthentication'));"
>

    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
      <tr>
          <td>
              <input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
"
                     accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
"
                     class="button primary"
                     type="submit"
                     name="save"
                     onclick="return check_form('ConfigureSettings');"
                     value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
  " />
                     &nbsp;
              <input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL_BUTTON_TITLE'];?>
"
                     onclick="document.location.href='index.php?module=Administration&action=index'"
                     class="button"
                     type="button"
                     name="cancel"
                     value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
  " />
          </td>
      </tr>
    </table>


    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
    	<tr>
    		<th style="padding: 15px" align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_GOOGLE_CALENDAR_SETTINGS_TITLE'];?>
</h4></th>
    	</tr>
    	<tr>
    		<td style="padding-left: 15px" width="25%" scope="row" valign='middle'>
    			<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_GOOGLE_CALENDAR_SETTINGS_JSON'];?>
&nbsp<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_GOOGLE_CALENDAR_SETTINGS_JSON_HELP']),$_smarty_tpl);?>

    		</td>
    		<td style="padding-bottom: 15px" id="google_json" width="75%" align="left"  valign='middle' colspan='3'>
    			<?php echo '<script'; ?>
 type='text/javascript'>
    				
        				var openGoogleJson = function(event) {
        					var input = event.target;
        					var reader = new FileReader();
        					var parent_td = document.getElementById('google_json');
        					reader.onload = function(){
        						console.log(reader.result.substring(0, 1024));
        						var json_input = document.getElementById("google_auth_json");
        						if (json_input == null) {
        							var json_input_text = document.createElement('span');
        							json_input_text.innerHTML = '<input type="hidden" id="google_auth_json" name="google_auth_json" />';
        							parent_td.appendChild(json_input_text);
        						}
        						document.getElementById('google_auth_json').value = btoa(reader.result.substring(0, 1024));
        					};
        					reader.readAsText(input.files[0]);
        				};
    				
    			<?php echo '</script'; ?>
>
    			JSON file is: <span style="color:<?php echo $_smarty_tpl->tpl_vars['GOOGLE_JSON_CONF']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['GOOGLE_JSON_CONF']->value['status'];?>
</span><input type="file" accept="text/plain" onchange="openGoogleJson(event)">
    		</td>
    	</tr>
        <tr>
            <td></td>
            <td><a href="https://developers.google.com/calendar/quickstart/php" target="_blank"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_GOOGLE_CALENDAR_GET_API_KEY'];?>
</a></td>
        </tr>

    </table>

    <div style="padding-top: 2px;">
        <input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
"
               accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
"
               class="button primary"
               type="submit"
               name="save"
               onclick="return check_form('ConfigureSettings');"
               value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
  " />
               &nbsp;
        <input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL_BUTTON_TITLE'];?>
"
               onclick="document.location.href='index.php?module=Administration&action=index'"
               class="button"
               type="button"
               name="cancel"
               value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
  " />
    </div>

    <?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>


</form>
<?php }
}
