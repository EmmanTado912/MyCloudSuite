<?php /* Smarty version 2.6.31, created on 2021-01-05 05:08:49
         compiled from themes%5CSuiteP%5Cinclude/DetailView/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'themes\\SuiteP\\include/DetailView/DetailView.tpl', 42, false),array('function', 'counter', 'themes\\SuiteP\\include/DetailView/DetailView.tpl', 47, false),array('modifier', 'upper', 'themes\\SuiteP\\include/DetailView/DetailView.tpl', 52, false),)), $this); ?>
{*
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */
*}

<?php echo smarty_function_sugar_include(array('type' => 'smarty','file' => $this->_tpl_vars['headerTpl']), $this);?>

{sugar_include include=$includes}
<div class="detail-view">
    <div class="mobile-pagination">{$PAGINATION}</div>
    {*display tabs*}
    <?php echo smarty_function_counter(array('name' => 'tabCount','start' => -1,'print' => false,'assign' => 'tabCount'), $this);?>

    <ul class="nav nav-tabs">
        <?php if ($this->_tpl_vars['useTabs']): ?>
        <?php echo smarty_function_counter(array('name' => 'isection','start' => 0,'print' => false,'assign' => 'isection'), $this);?>

        <?php $_from = $this->_tpl_vars['sectionPanels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['section'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['section']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['panel']):
        $this->_foreach['section']['iteration']++;
?>
        <?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php $this->_smarty_vars['capture']['label_upper'] = ob_get_contents();  $this->assign('label_upper', ob_get_contents());ob_end_clean(); ?>
        {* if tab *}
        <?php if (( isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] ) && $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] == true )): ?>
        {*if tab display*}
        <?php echo smarty_function_counter(array('name' => 'tabCount','print' => false), $this);?>

        <?php if ($this->_tpl_vars['tabCount'] == '0'): ?>
        <li role="presentation" class="active">
            <a id="tab<?php echo $this->_tpl_vars['tabCount']; ?>
" data-toggle="tab" class="hidden-xs">
                {sugar_translate label='<?php echo $this->_tpl_vars['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
            </a>

            {* Count Tabs *}
            <?php echo smarty_function_counter(array('name' => 'tabCountOnlyXS','start' => -1,'print' => false,'assign' => 'tabCountOnlyXS'), $this);?>

            <?php $_from = $this->_tpl_vars['sectionPanels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sectionOnlyXS'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sectionOnlyXS']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['labelOnly'] => $this->_tpl_vars['panelOnlyXS']):
        $this->_foreach['sectionOnlyXS']['iteration']++;
?>
            <?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['labelOnly'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php $this->_smarty_vars['capture']['label_upper_count_only'] = ob_get_contents();  $this->assign('label_upper_count_only', ob_get_contents());ob_end_clean(); ?>
            <?php if (( isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper_count_only']]['newTab'] ) && $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper_count_only']]['newTab'] == true )): ?>
            <?php echo smarty_function_counter(array('name' => 'tabCountOnlyXS','print' => false), $this);?>

            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>

            {*
                For the mobile view, only show the first tab has a drop down when:
                * There is more than one tab set
                * When Acton Menu's are enabled
            *}
            <a id="xstab<?php echo $this->_tpl_vars['tabCount']; ?>
" href="#" class="visible-xs first-tab<?php if ($this->_tpl_vars['tabCountOnlyXS'] > 0): ?>-xs<?php endif; ?> dropdown-toggle" data-toggle="dropdown">
                {sugar_translate label='<?php echo $this->_tpl_vars['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
            </a>
            <?php if ($this->_tpl_vars['tabCountOnlyXS'] > 0): ?>
            <ul id="first-tab-menu-xs" class="dropdown-menu">
                <?php echo smarty_function_counter(array('name' => 'tabCountXS','start' => 1,'print' => false,'assign' => 'tabCountXS'), $this);?>

                <?php $_from = $this->_tpl_vars['sectionPanels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sectionXS'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sectionXS']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['panelXS']):
        $this->_foreach['sectionXS']['iteration']++;
?>
                <?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php $this->_smarty_vars['capture']['label_upper_xs'] = ob_get_contents();  $this->assign('label_upper_xs', ob_get_contents());ob_end_clean(); ?>
                <?php if (( isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper_xs']]['newTab'] ) && $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper_xs']]['newTab'] == true )): ?>
                <li role="presentation">
                    <a id="tab<?php echo $this->_tpl_vars['tabCountXS']; ?>
" data-toggle="tab" onclick="changeFirstTab(this, 'tab-content-<?php echo $this->_tpl_vars['tabCountXS']; ?>
');">
                        {sugar_translate label='<?php echo $this->_tpl_vars['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
                    </a>
                </li>
                <?php endif; ?>
                <?php echo smarty_function_counter(array('name' => 'tabCountXS','print' => false), $this);?>

                <?php endforeach; endif; unset($_from); ?>
            </ul>
            <?php endif; ?>

        </li>
        <?php else: ?>
        <li role="presentation" class="hidden-xs">
            <a id="tab<?php echo $this->_tpl_vars['tabCount']; ?>
" data-toggle="tab">
                {sugar_translate label='<?php echo $this->_tpl_vars['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
            </a>
        </li>
        <?php endif; ?>
        <?php else: ?>
        {* if panel skip*}
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        <?php else: ?>
        {*
            Since: SuieCRM 7.8
            When action menus are enabled and When there are only panels and there are not any tabs,
            make the first panel a tab so that the action menu looks correct. This is regardless of what the
            meta/studio defines the first panel should always be tab.
        *}
        {if $config.enable_action_menu and $config.enable_action_menu != false}
            <?php $_from = $this->_tpl_vars['sectionPanels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['section'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['section']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['panel']):
        $this->_foreach['section']['iteration']++;
?>
            <?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php $this->_smarty_vars['capture']['label_upper'] = ob_get_contents();  $this->assign('label_upper', ob_get_contents());ob_end_clean(); ?>
            <?php echo smarty_function_counter(array('name' => 'tabCount','print' => false), $this);?>

            <?php if ($this->_tpl_vars['tabCount'] == '0'): ?>
            <li role="presentation" class="active">
                <a id="tab<?php echo $this->_tpl_vars['tabCount']; ?>
" data-toggle="tab" class="hidden-xs">
                    {sugar_translate label='<?php echo $this->_tpl_vars['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
                </a>
                <a id="xstab<?php echo $this->_tpl_vars['tabCount']; ?>
" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
                    {sugar_translate label='<?php echo $this->_tpl_vars['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
                </a>
            </li>
            <?php else: ?>
            {* if panel skip *}
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        {/if}
        <?php endif; ?>
        {if $config.enable_action_menu and $config.enable_action_menu != false}
        <li id="tab-actions" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $this->_tpl_vars['APP']['LBL_LINK_ACTIONS']; ?>
<span class="suitepicon suitepicon-action-caret"></span></a>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/SuiteP/include/DetailView/actions_menu.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </li>
        <li class="tab-inline-pagination">
            <?php if ($this->_tpl_vars['panelCount'] == 0): ?>
                        <?php if ($this->_tpl_vars['SHOW_VCR_CONTROL']): ?>
            {$PAGINATION}
            <?php endif; ?>
            <?php echo smarty_function_counter(array('name' => 'panelCount','print' => false), $this);?>

            <?php endif; ?>
        </li>
        {/if}
    </ul>
    <?php echo smarty_function_counter(array('name' => 'tabCount','start' => 0,'print' => false,'assign' => 'tabCount'), $this);?>

    <div class="clearfix"></div>
    <?php if ($this->_tpl_vars['useTabs']): ?>
    {*<!-- TAB CONTENT USE TABS -->*}
    <div class="tab-content">
        <?php else: ?>
        {*
           Since: SuieCRM 7.8
           When action menus are enabled and When there are only panels and there are not any tabs,
           make the first panel a tab so that the action menu looks correct. This is regardless of what the
           meta/studio defines the first panel should always be tab.
       *}
        {if $config.enable_action_menu and $config.enable_action_menu != false}
        <?php if ($this->_tpl_vars['tabCount'] == 0): ?>
        {*<!-- TAB CONTENT USE TABS -->*}
        <div class="tab-content">
            <?php else: ?>
            {*<!-- TAB CONTENT DOESN'T USE TABS -->*}
            <div class="tab-content" style="padding: 0; border: 0;">
                <?php endif; ?>
                {else}
                {*<!-- TAB CONTENT DOESN'T USE TABS -->*}
                <div class="tab-content" style="padding: 0; border: 0;">
                    {/if}
                    <?php endif; ?>
                    {* Loop through all top level panels first *}
                    <?php if ($this->_tpl_vars['useTabs']): ?>
                    <?php $_from = $this->_tpl_vars['sectionPanels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['section'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['section']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['panel']):
        $this->_foreach['section']['iteration']++;
?>
                    <?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php $this->_smarty_vars['capture']['label_upper'] = ob_get_contents();  $this->assign('label_upper', ob_get_contents());ob_end_clean(); ?>
                    <?php if (isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] ) && $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] == true): ?>
                    <?php if ($this->_tpl_vars['tabCount'] == '0'): ?>
                    <div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-<?php echo $this->_tpl_vars['tabCount']; ?>
'>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/SuiteP/include/DetailView/tab_panel_content.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                    <?php else: ?>
                    <div class="tab-pane-NOBOOTSTRAPTOGGLER fade" id='tab-content-<?php echo $this->_tpl_vars['tabCount']; ?>
'>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/SuiteP/include/DetailView/tab_panel_content.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php echo smarty_function_counter(array('name' => 'tabCount','print' => false), $this);?>

                    <?php endforeach; endif; unset($_from); ?>
                    <?php else: ?>
                    {*
                       Since: SuieCRM 7.8
                       When action menus are enabled and When there are only panels and there are not any tabs,
                       make the first panel a tab so that the action menu looks correct. This is regardless of what the
                       meta/studio defines the first panel should always be tab.
                   *}
                    {if $config.enable_action_menu and $config.enable_action_menu != false}
                        <?php $_from = $this->_tpl_vars['sectionPanels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['section'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['section']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['panel']):
        $this->_foreach['section']['iteration']++;
?>
                        <?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php $this->_smarty_vars['capture']['label_upper'] = ob_get_contents();  $this->assign('label_upper', ob_get_contents());ob_end_clean(); ?>
                        <?php if ($this->_tpl_vars['tabCount'] == '0'): ?>
                        <div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-<?php echo $this->_tpl_vars['tabCount']; ?>
'>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/SuiteP/include/DetailView/tab_panel_content.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                        <?php else: ?>

                        <?php endif; ?>
                    <?php echo smarty_function_counter(array('name' => 'tabCount','print' => false), $this);?>

                    <?php endforeach; endif; unset($_from); ?>
                    {else}
                    {*<!-- TAB CONTENT DOESN'T USE TABS -->*}
                    <div class="tab-pane-NOBOOTSTRAPTOGGLER panel-collapse"></div>
                    {/if}
                    <?php endif; ?>
                </div>
                {*display panels*}
                <div class="panel-content">
                    <div>&nbsp;</div>
                    <?php echo smarty_function_counter(array('name' => 'tabCount','start' => -1,'print' => false,'assign' => 'tabCount'), $this);?>

                    <?php echo smarty_function_counter(array('name' => 'panelCount','start' => -1,'print' => false,'assign' => 'panelCount'), $this);?>

                    <?php $_from = $this->_tpl_vars['sectionPanels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['section'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['section']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['panel']):
        $this->_foreach['section']['iteration']++;
?>

                    <?php ob_start(); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
<?php $this->_smarty_vars['capture']['label_upper'] = ob_get_contents();  $this->assign('label_upper', ob_get_contents());ob_end_clean(); ?>
                    {* if tab *}
                    <?php if (( isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] ) && $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['newTab'] == true && $this->_tpl_vars['useTabs'] )): ?>
                    <?php echo smarty_function_counter(array('name' => 'tabCount','print' => false), $this);?>

                    {*if tab skip*}
                    <?php else: ?>
                    {* if panel display*}
                    {*if panel collasped*}
                    <?php if (( isset ( $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['panelDefault'] ) && $this->_tpl_vars['tabDefs'][$this->_tpl_vars['label_upper']]['panelDefault'] == 'collapsed' )): ?>
                    {*collapse panel*}
                    <?php $this->assign('collapse', "panel-collapse collapse"); ?>
                    <?php $this->assign('collapsed', 'collapsed'); ?>
                    <?php $this->assign('collapseIcon', "glyphicon glyphicon-plus"); ?>
                    <?php $this->assign('panelHeadingCollapse', "panel-heading-collapse"); ?>
                    <?php else: ?>
                    {*expand panel*}
                    <?php $this->assign('collapse', "panel-collapse collapse in"); ?>
                    <?php $this->assign('collapseIcon', "glyphicon glyphicon-minus"); ?>
                    <?php $this->assign('panelHeadingCollapse', ""); ?>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['label'] != 'LBL_AOP_CASE_UPDATES'): ?>
                    <?php $this->assign('panelId', "top-panel-".($this->_tpl_vars['panelCount'])); ?>
                    <?php else: ?>
                    <?php $this->assign('panelId', 'LBL_AOP_CASE_UPDATES'); ?>
                    <?php endif; ?>

                    {*
                       Since: SuieCRM 7.8
                       When action menus are enabled and When there are only panels and there are not any tabs,
                       make the first panel a tab so that the action menu looks correct. This is regardless of what the
                       meta/studio defines the first panel should always be tab.
                    *}
                    {if $config.enable_action_menu and $config.enable_action_menu != false}
                        <?php if ($this->_tpl_vars['panelCount'] == -1): ?>
                        {* skip panel as it has been converted to a tab*}
                        <?php else: ?>
                        {* display panels as they have always been displayed *}
                        <?php if ($this->_tpl_vars['useTabs']): ?>
                            <?php if ($this->_tpl_vars['tabCount'] == 0): ?>
                                <div class="panel panel-default tab-panel-<?php echo $this->_tpl_vars['tabCount']; ?>
" style="display: block;">
                            <?php else: ?>
                                <div class="panel panel-default tab-panel-<?php echo $this->_tpl_vars['tabCount']; ?>
" style="display: none;">
                            <?php endif; ?>
                        <?php else: ?>
                            <div class="panel panel-default">
                        <?php endif; ?>
                            <div class="panel-heading <?php echo $this->_tpl_vars['panelHeadingCollapse']; ?>
">
                                <a class="<?php echo $this->_tpl_vars['collapsed']; ?>
" role="button" data-toggle="collapse" href="#<?php echo $this->_tpl_vars['panelId']; ?>
" aria-expanded="false">
                                    <div class="col-xs-10 col-sm-11 col-md-11">
                                        {sugar_translate label='<?php echo $this->_tpl_vars['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body <?php echo $this->_tpl_vars['collapse']; ?>
 panelContainer" id="<?php echo $this->_tpl_vars['panelId']; ?>
"  data-id="<?php echo $this->_tpl_vars['label_upper']; ?>
">
                                <div class="tab-content">
                                    <!-- TAB CONTENT -->
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/SuiteP/include/DetailView/tab_panel_content.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    {else}
                    {* display panels as they have always been displayed *}
                    <?php if ($this->_tpl_vars['useTabs']): ?>
                            <?php if ($this->_tpl_vars['tabCount'] == 0): ?>
                                <div class="panel panel-default tab-panel-<?php echo $this->_tpl_vars['tabCount']; ?>
" style="display: block;">
                            <?php else: ?>
                                <div class="panel panel-default tab-panel-<?php echo $this->_tpl_vars['tabCount']; ?>
" style="display: none;">
                            <?php endif; ?>
                        <?php else: ?>
                            <div class="panel panel-default">
                        <?php endif; ?>
                        <div class="panel-heading <?php echo $this->_tpl_vars['panelHeadingCollapse']; ?>
">
                            <a class="<?php echo $this->_tpl_vars['collapsed']; ?>
" role="button" data-toggle="collapse" href="#<?php echo $this->_tpl_vars['panelId']; ?>
" aria-expanded="false">
                                <div class="col-xs-10 col-sm-11 col-md-11">
                                    {sugar_translate label='<?php echo $this->_tpl_vars['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
                                </div>
                            </a>

                        </div>
                        <div class="panel-body <?php echo $this->_tpl_vars['collapse']; ?>
 panelContainer" id="<?php echo $this->_tpl_vars['panelId']; ?>
" data-id="<?php echo $this->_tpl_vars['label_upper']; ?>
">
                            <div class="tab-content">
                                <!-- TAB CONTENT -->
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'themes/SuiteP/include/DetailView/tab_panel_content.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            </div>
                        </div>
                    </div>
                    {/if}


                    <?php endif; ?>
                    <?php echo smarty_function_counter(array('name' => 'panelCount','print' => false), $this);?>

                    <?php endforeach; endif; unset($_from); ?>
                </div>
            </div>

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['footerTpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
            <script type="text/javascript" src="modules/Favorites/favorites.js"></script>

            {literal}

                <script type="text/javascript">

                    let selectTabDetailView = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                        $('#content div.detail-view div.panel-content div.panel.panel').hide();
                        $('#content div.panel-content div.panel.tab-panel-' + tab).show();
                    };

                    let selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(.)*$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                </script>

            {/literal}
