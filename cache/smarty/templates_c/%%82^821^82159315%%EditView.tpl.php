<?php /* Smarty version 2.6.31, created on 2021-01-06 03:51:23
         compiled from cache/themes/SuiteP/modules/Leads/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'cache/themes/SuiteP/modules/Leads/EditView.tpl', 51, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/Leads/EditView.tpl', 106, false),array('function', 'sugar_include', 'cache/themes/SuiteP/modules/Leads/EditView.tpl', 67, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/Leads/EditView.tpl', 88, false),array('function', 'counter', 'cache/themes/SuiteP/modules/Leads/EditView.tpl', 112, false),array('function', 'html_options', 'cache/themes/SuiteP/modules/Leads/EditView.tpl', 113, false),array('function', 'sugar_getjspath', 'cache/themes/SuiteP/modules/Leads/EditView.tpl', 363, false),array('block', 'minify', 'cache/themes/SuiteP/modules/Leads/EditView.tpl', 104, false),)), $this); ?>


<script>
    <?php echo '
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($(\'.edit-view-pagination\').children().length == 0) $(\'.saveAndContinue\').remove();
    });
    '; ?>

</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php else: ?>
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php endif; ?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if (( ! empty ( $_REQUEST['return_module'] ) || ! empty ( $_REQUEST['relate_to'] ) ) && ! ( isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true' )): ?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']): ?><?php echo $_REQUEST['return_relationship']; ?>
<?php elseif ($_REQUEST['relate_to'] && empty ( $_REQUEST['from_dcmenu'] )): ?><?php echo $_REQUEST['relate_to']; ?>
<?php elseif (empty ( $this->_tpl_vars['isDCForm'] ) && empty ( $_REQUEST['from_dcmenu'] )): ?><?php echo $_REQUEST['return_module']; ?>
<?php endif; ?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<?php $this->assign('place', '_HEADER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<input type="hidden" name="prospect_id" value="<?php if (isset ( $_REQUEST['prospect_id'] )): ?><?php echo $_REQUEST['prospect_id']; ?>
<?php else: ?><?php echo $this->_tpl_vars['bean']->prospect_id; ?>
<?php endif; ?>">   
<input type="hidden" name="account_id" value="<?php if (isset ( $_REQUEST['account_id'] )): ?><?php echo $_REQUEST['account_id']; ?>
<?php else: ?><?php echo $this->_tpl_vars['bean']->account_id; ?>
<?php endif; ?>">   
<input type="hidden" name="contact_id" value="<?php if (isset ( $_REQUEST['contact_id'] )): ?><?php echo $_REQUEST['contact_id']; ?>
<?php else: ?><?php echo $this->_tpl_vars['bean']->contact_id; ?>
<?php endif; ?>">   
<input type="hidden" name="opportunity_id" value="<?php if (isset ( $_REQUEST['opportunity_id'] )): ?><?php echo $_REQUEST['opportunity_id']; ?>
<?php else: ?><?php echo $this->_tpl_vars['bean']->opportunity_id; ?>
<?php endif; ?>">   
<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($this->_tpl_vars['isDuplicate']): ?>_form.return_id.value=''; <?php endif; ?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE"><?php endif; ?> 
<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" type="button" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && empty ( $this->_tpl_vars['fields']['id']['value'] ) ) && empty ( $_REQUEST['return_id'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ! empty ( $_REQUEST['return_module'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action']; ?>
&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (empty ( $_REQUEST['return_action'] ) || empty ( $_REQUEST['return_id'] ) && ! empty ( $this->_tpl_vars['fields']['id']['value'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Leads'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php endif; ?>
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Leads", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</div>
</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_INFORMATION','module' => 'Leads'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_CONTACT_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_FIRST_NAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="first_name" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<?php echo smarty_function_html_options(array('name' => 'salutation','id' => 'salutation','options' => $this->_tpl_vars['fields']['salutation']['options'],'selected' => $this->_tpl_vars['fields']['salutation']['value']), $this);?>
&nbsp;<input tabindex="0"  name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="<?php echo $this->_tpl_vars['fields']['first_name']['value']; ?>
">
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LAST_NAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="last_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['last_name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['last_name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['last_name']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['last_name']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_OFFICE_PHONE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_work"  class="phone">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_work']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_work']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_work']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_work']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TITLE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="title"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['title']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['title']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['title']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['title']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MOBILE_PHONE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_mobile"  class="phone">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_mobile']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_mobile']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_mobile']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DEPARTMENT">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="department"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['department']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['department']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['department']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['department']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FAX_PHONE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_fax"  class="phone">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_fax']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_fax']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['phone_fax']['name']; ?>
' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ACCOUNT_NAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="account_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<input tabindex="0"  name="account_name" id="EditView_account_name" <?php if (( $this->_tpl_vars['fields']['converted']['value'] == 1 )): ?>disabled="true"<?php endif; ?> size="30" maxlength="255" type="text" value="<?php echo $this->_tpl_vars['fields']['account_name']['value']; ?>
">
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_WEBSITE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_WEBSITE','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="url" field="website"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['website']['value'] )): ?>
<input type='text' name='<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
' size='30' 
maxlength='255' value='<?php echo $this->_tpl_vars['fields']['website']['value']; ?>
' title='' tabindex='0'  >
<?php else: ?>
<input type='text' name='<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['website']['name']; ?>
' size='30' 
maxlength='255'	   	   <?php if ($this->_tpl_vars['displayView'] == 'advanced_search' || $this->_tpl_vars['displayView'] == 'basic_search'): ?>value=''<?php else: ?>value='http://'<?php endif; ?> 
title='' tabindex='0'  >
<?php endif; ?>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">



<div class="col-xs-12 col-sm-12 edit-view-field " type="varchar" field="primary_address_street" colspan='2' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<script src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Address/SugarFieldAddress.js"), $this);?>
'></script>
<fieldset id='PRIMARY_address_fieldset'>
<legend><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS','module' => ''), $this);?>
</legend>
<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
<tr>
<td valign="top" id="primary_address_street_label" width='25%' scope='row'>
<label for="primary_address_street"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_STREET','module' => ''), $this);?>
:</label>
<?php if ($this->_tpl_vars['fields']['primary_address_street']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td width="*">
<textarea id="primary_address_street" name="primary_address_street" title='' maxlength="150"
                          rows="2" cols="30"
                          tabindex="0"><?php echo $this->_tpl_vars['fields']['primary_address_street']['value']; ?>
</textarea>
</td>
</tr>
<tr>
<td id="primary_address_city_label" width='%'
scope='row'>
<label for="primary_address_city"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CITY','module' => ''), $this);?>
:
<?php if ($this->_tpl_vars['fields']['primary_address_city']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="primary_address_city" id="primary_address_city" title='<?php echo $this->_tpl_vars['fields']['primary_address_city']['help']; ?>
' size="30"
maxlength='150' value='<?php echo $this->_tpl_vars['fields']['primary_address_city']['value']; ?>
'
tabindex="0">
</td>
</tr>
<tr>
<td id="primary_address_state_label" width='%'
scope='row'>
<label for="primary_address_state"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATE','module' => ''), $this);?>
:</label>
<?php if ($this->_tpl_vars['fields']['primary_address_state']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="primary_address_state" id="primary_address_state" title='<?php echo $this->_tpl_vars['fields']['primary_address_state']['help']; ?>
' size="30"
maxlength='150' value='<?php echo $this->_tpl_vars['fields']['primary_address_state']['value']; ?>
'
tabindex="0">
</td>
</tr>
<tr>
<td id="primary_address_postalcode_label"
width='%' scope='row'>
<label for="primary_address_postalcode"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_POSTAL_CODE','module' => ''), $this);?>
:</label>
<?php if ($this->_tpl_vars['fields']['primary_address_postalcode']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="primary_address_postalcode" id="primary_address_postalcode" title='<?php echo $this->_tpl_vars['fields']['primary_address_postalcode']['help']; ?>
' size="30"
maxlength='150'                       value='<?php echo $this->_tpl_vars['fields']['primary_address_postalcode']['value']; ?>
' tabindex="0">
</td>
</tr>
<tr>
<td id="primary_address_country_label" width='%'
scope='row'>
<label for="primary_address_country"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COUNTRY','module' => ''), $this);?>
:</label>
<?php if ($this->_tpl_vars['fields']['primary_address_country']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="primary_address_country" id="primary_address_country" title='<?php echo $this->_tpl_vars['fields']['primary_address_country']['help']; ?>
' size="30"
maxlength='150' value='<?php echo $this->_tpl_vars['fields']['primary_address_country']['value']; ?>
'
tabindex="0">
</td>
</tr>
<tr>
<td colspan='2' NOWRAP>&nbsp;</td>
</tr>
</table>
</fieldset>
<script type="text/javascript">
  SUGAR.util.doWhen("typeof(SUGAR.AddressField) != 'undefined'", function () {
      primary_address = new SUGAR.AddressField("primary_checkbox", '', 'primary');
      });
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">



<div class="col-xs-12 col-sm-12 edit-view-field " type="varchar" field="alt_address_street" colspan='2' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<script src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Address/SugarFieldAddress.js"), $this);?>
'></script>
<fieldset id='ALT_address_fieldset'>
<legend><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS','module' => ''), $this);?>
</legend>
<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
<tr>
<td valign="top" id="alt_address_street_label" width='25%' scope='row'>
<label for="alt_address_street"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_STREET','module' => ''), $this);?>
:</label>
<?php if ($this->_tpl_vars['fields']['alt_address_street']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td width="*">
<textarea id="alt_address_street" name="alt_address_street" title='' maxlength="150"
                          rows="2" cols="30"
                          tabindex="0"><?php echo $this->_tpl_vars['fields']['alt_address_street']['value']; ?>
</textarea>
</td>
</tr>
<tr>
<td id="alt_address_city_label" width='%'
scope='row'>
<label for="alt_address_city"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CITY','module' => ''), $this);?>
:
<?php if ($this->_tpl_vars['fields']['alt_address_city']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="alt_address_city" id="alt_address_city" title='<?php echo $this->_tpl_vars['fields']['alt_address_city']['help']; ?>
' size="30"
maxlength='150' value='<?php echo $this->_tpl_vars['fields']['alt_address_city']['value']; ?>
'
tabindex="0">
</td>
</tr>
<tr>
<td id="alt_address_state_label" width='%'
scope='row'>
<label for="alt_address_state"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATE','module' => ''), $this);?>
:</label>
<?php if ($this->_tpl_vars['fields']['alt_address_state']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="alt_address_state" id="alt_address_state" title='<?php echo $this->_tpl_vars['fields']['alt_address_state']['help']; ?>
' size="30"
maxlength='150' value='<?php echo $this->_tpl_vars['fields']['alt_address_state']['value']; ?>
'
tabindex="0">
</td>
</tr>
<tr>
<td id="alt_address_postalcode_label"
width='%' scope='row'>
<label for="alt_address_postalcode"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_POSTAL_CODE','module' => ''), $this);?>
:</label>
<?php if ($this->_tpl_vars['fields']['alt_address_postalcode']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="alt_address_postalcode" id="alt_address_postalcode" title='<?php echo $this->_tpl_vars['fields']['alt_address_postalcode']['help']; ?>
' size="30"
maxlength='150'                       value='<?php echo $this->_tpl_vars['fields']['alt_address_postalcode']['value']; ?>
' tabindex="0">
</td>
</tr>
<tr>
<td id="alt_address_country_label" width='%'
scope='row'>
<label for="alt_address_country"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COUNTRY','module' => ''), $this);?>
:</label>
<?php if ($this->_tpl_vars['fields']['alt_address_country']['required'] || false): ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span>
<?php endif; ?>
</td>
<td>
<input type="text" name="alt_address_country" id="alt_address_country" title='<?php echo $this->_tpl_vars['fields']['alt_address_country']['help']; ?>
' size="30"
maxlength='150' value='<?php echo $this->_tpl_vars['fields']['alt_address_country']['value']; ?>
'
tabindex="0">
</td>
</tr>
<tr>
<td scope='row' NOWRAP>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COPY_ADDRESS_FROM_LEFT','module' => ''), $this);?>
:
</td>
<td>
<input id="alt_checkbox" name="alt_checkbox" type="checkbox"
onclick="alt_address.syncFields();">
</td>
</tr>
</table>
</fieldset>
<script type="text/javascript">
  SUGAR.util.doWhen("typeof(SUGAR.AddressField) != 'undefined'", function () {
      alt_address = new SUGAR.AddressField("alt_checkbox", 'primary', 'alt');
      });
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_EMAIL_ADDRESS">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="email1" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<span id='email1_span'>
<?php echo $this->_tpl_vars['fields']['email1']['value']; ?>
</span>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
'
rows="6"
cols="80"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL_ADVANCED','module' => 'Leads'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_PANEL_ADVANCED">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATUS">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="status"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
"
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LEAD_SOURCE">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="lead_source"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<select name="<?php echo $this->_tpl_vars['fields']['lead_source']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['lead_source']['name']; ?>
"
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['lead_source']['value'] ) && $this->_tpl_vars['fields']['lead_source']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['default']), $this);?>

<?php endif; ?>
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATUS_DESCRIPTION">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS_DESCRIPTION','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="status_description"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['status_description']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['status_description']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['status_description']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['status_description']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['status_description']['name']; ?>
'
rows="4"
cols="60"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LEAD_SOURCE_DESCRIPTION">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE_DESCRIPTION','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="lead_source_description"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['lead_source_description']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['lead_source_description']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['lead_source_description']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['lead_source_description']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['lead_source_description']['name']; ?>
'
rows="4"
cols="60"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_OPPORTUNITY_AMOUNT">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_AMOUNT','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="opportunity_amount"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['opportunity_amount']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['opportunity_amount']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['opportunity_amount']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['opportunity_amount']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['opportunity_amount']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_REFERED_BY">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_REFERED_BY','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="refered_by"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['refered_by']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['refered_by']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['refered_by']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['refered_by']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['refered_by']['name']; ?>
' size='30' 
maxlength='100' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_CAMPAIGN">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="campaign_name" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['campaign_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['campaign_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['campaign_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['campaign_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['campaign_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['campaign_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['campaign_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['campaign_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['campaign_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"campaign_id","name":"campaign_name"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['campaign_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['campaign_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['campaign_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['campaign_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['campaign_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL_ASSIGNMENT','module' => 'Leads'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_1" data-id="LBL_PANEL_ASSIGNMENT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_ASSIGNED_TO_NAME">

<?php $this->_tag_stack[] = array('minify', array()); $_block_repeat=true;smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Leads'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_minify($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['assigned_user_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>
</div>
</div>

<script language="javascript">
    var _form_id = '<?php echo $this->_tpl_vars['form_id']; ?>
';
    <?php echo '
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == \'\') ? \'EditView\' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    '; ?>

</script>
<?php $this->assign('place', '_FOOTER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($this->_tpl_vars['isDuplicate']): ?>_form.return_id.value=''; <?php endif; ?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE"><?php endif; ?> 
<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" type="button" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && empty ( $this->_tpl_vars['fields']['id']['value'] ) ) && empty ( $_REQUEST['return_id'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ! empty ( $_REQUEST['return_module'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action']; ?>
&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (empty ( $_REQUEST['return_action'] ) || empty ( $_REQUEST['return_id'] ) && ! empty ( $this->_tpl_vars['fields']['id']['value'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Leads'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php endif; ?>
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Leads", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<!-- Begin Meta-Data Javascript -->
<script type="text/javascript" language="Javascript">function copyAddressRight(form)  { form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; } function copyAddressLeft(form)  { form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; } </script>
<!-- End Meta-Data Javascript -->
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
</script>
<?php echo '
<script type="text/javascript">

    var selectTab = function(tab) {
        $(\'#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').hide();
        $(\'#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').eq(tab).show().addClass(\'active\').addClass(\'in\');
        $(\'#EditView_tabs div.panel-content div.panel\').hide();
        $(\'#EditView_tabs div.panel-content div.panel.tab-panel-\' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $(\'#EditView_tabs ul.nav.nav-tabs li\').removeClass(\'active\');
        $(\'#EditView_tabs ul.nav.nav-tabs li a\').css(\'color\', \'\');

        $(\'#EditView_tabs ul.nav.nav-tabs li\').eq(tab).find(\'a\').first().css(\'color\', \'red\');
        $(\'#EditView_tabs ul.nav.nav-tabs li\').eq(tab).addClass(\'active\');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest(\'.tab-pane-NOBOOTSTRAPTOGGLER\').attr(\'id\').match(/^detailpanel_(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $(\'#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]\').click(function(e){
            if(typeof $(this).parent().find(\'a\').first().attr(\'id\') != \'undefined\') {
                var tab = parseInt($(this).parent().find(\'a\').first().attr(\'id\').match(/^tab(.)*$/)[1]);
                selectTab(tab);
            }
        });

        $(\'a[data-toggle="collapse-edit"]\').click(function(e){
            if($(this).hasClass(\'collapsed\')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass(\'collapsed\');
                // Expand .panel-body
                $(this).parents(\'.panel\').find(\'.panel-body\').removeClass(\'in\').addClass(\'in\');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass(\'collapsed\');
                // Collapse .panel-body
                $(this).parents(\'.panel\').find(\'.panel-body\').removeClass(\'in\').removeClass(\'in\');
            }
        });
    });

    </script>
'; ?>
<?php echo '
<script type="text/javascript">
addForm(\'EditView\');addToValidate(\'EditView\', \'name\', \'name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'salutation\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SALUTATION','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'first_name\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'last_name\', \'varchar\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LAST_NAME','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'full_name\', \'fullname\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'title\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TITLE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'photo\', \'image\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PHOTO','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'department\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DEPARTMENT','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'do_not_call\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DO_NOT_CALL','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'phone_home\', \'phone\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_HOME_PHONE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'email\', \'email\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ANY_EMAIL','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'phone_mobile\', \'phone\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MOBILE_PHONE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'phone_work\', \'phone\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'phone_other\', \'phone\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'phone_fax\', \'phone\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FAX_PHONE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'email1\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'email2\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_EMAIL_ADDRESS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'invalid_email\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_INVALID_EMAIL','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'email_opt_out\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_OPT_OUT','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'lawful_basis\', \'multienum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LAWFUL_BASIS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'date_reviewed\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_REVIEWED','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'lawful_basis_source\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LAWFUL_BASIS_SOURCE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'primary_address_street\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'primary_address_street_2\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET_2','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'primary_address_street_3\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STREET_3','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'primary_address_city\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_CITY','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'primary_address_state\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_STATE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'primary_address_postalcode\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'primary_address_country\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS_COUNTRY','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'alt_address_street\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'alt_address_street_2\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET_2','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'alt_address_street_3\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STREET_3','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'alt_address_city\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_CITY','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'alt_address_state\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_STATE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'alt_address_postalcode\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_POSTALCODE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'alt_address_country\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ALT_ADDRESS_COUNTRY','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assistant\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSISTANT','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assistant_phone\', \'phone\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSISTANT_PHONE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'email_addresses_non_primary\', \'email\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_NON_PRIMARY','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'converted\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONVERTED','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'refered_by\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REFERED_BY','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'lead_source\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'lead_source_description\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE_DESCRIPTION','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'status\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'status_description\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS_DESCRIPTION','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'reports_to_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO_ID','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'report_to_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_REPORTS_TO','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'account_name\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'account_description\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_DESCRIPTION','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'contact_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONTACT_ID','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'account_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_ID','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'opportunity_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_ID','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'opportunity_name\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_NAME','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'opportunity_amount\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_AMOUNT','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'campaign_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_ID','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'campaign_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'c_accept_status_fields\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'m_accept_status_fields\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'accept_status_id\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'accept_status_name\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'webtolead_email1\', \'email\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'webtolead_email2\', \'email\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_EMAIL_ADDRESS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'webtolead_email_opt_out\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_OPT_OUT','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'webtolead_invalid_email\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_INVALID_EMAIL','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'birthdate\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BIRTHDATE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'portal_name\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PORTAL_NAME','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'portal_app\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PORTAL_APP','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'website\', \'url\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_WEBSITE','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'e_invite_status_fields\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONT_INVITE_STATUS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'event_status_name\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_INVITE_STATUS_EVENT','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'event_invite_id\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_INVITE_STATUS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'e_accept_status_fields\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CONT_ACCEPT_STATUS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'event_accept_status\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS_EVENT','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'event_status_id\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_ACCEPT_STATUS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'jjwg_maps_address_c\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_ADDRESS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'jjwg_maps_geocode_status_c\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_GEOCODE_STATUS','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'jjwg_maps_lat_c\', \'float\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_LAT','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'jjwg_maps_lng_c\', \'float\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_JJWG_MAPS_LNG','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Leads','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'campaign_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Leads','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN','module' => 'Leads','for_js' => true), $this);?>
<?php echo '\', \'campaign_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_campaign_name\']={"form":"EditView","method":"query","modules":["Campaigns"],"group":"or","field_list":["name","id"],"populate_list":["campaign_id","campaign_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["campaign_id"],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects[\'EditView_assigned_user_name\']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>'; ?>
