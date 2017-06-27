<?php /* Smarty version 2.6.27, created on 2017-06-19 19:31:33
         compiled from CRM/UF/Form/Block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/UF/Form/Block.tpl', 1, false),array('modifier', 'substr', 'CRM/UF/Form/Block.tpl', 114, false),array('modifier', 'cat', 'CRM/UF/Form/Block.tpl', 115, false),array('modifier', 'date_format', 'CRM/UF/Form/Block.tpl', 128, false),array('modifier', 'crmDate', 'CRM/UF/Form/Block.tpl', 128, false),array('modifier', 'replace', 'CRM/UF/Form/Block.tpl', 130, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (! empty ( $this->_tpl_vars['fields'] )): ?>
  <?php echo ''; ?><?php if ($this->_tpl_vars['help_pre'] && $this->_tpl_vars['action'] != 4): ?><?php echo '<div class="messages help">'; ?><?php echo $this->_tpl_vars['help_pre']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('zeroField', 'Initial Non Existent Fieldset'); ?><?php echo ''; ?><?php $this->assign('fieldset', $this->_tpl_vars['zeroField']); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName'] => $this->_tpl_vars['field']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['skipDisplay']): ?><?php echo ''; ?><?php continue; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['groupTitle'] != $this->_tpl_vars['fieldset']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['fieldset'] != $this->_tpl_vars['zeroField']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['groupHelpPost'] && $this->_tpl_vars['action'] != 4): ?><?php echo '<div class="messages help">'; ?><?php echo $this->_tpl_vars['groupHelpPost']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['mode'] != 8): ?><?php echo '</fieldset>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['mode'] != 8 && $this->_tpl_vars['action'] != 1028 && $this->_tpl_vars['action'] != 4 && ! $this->_tpl_vars['hideFieldset']): ?><?php echo '<fieldset class="crm-profile crm-profile-id-'; ?><?php echo $this->_tpl_vars['field']['group_id']; ?><?php echo ' crm-profile-name-'; ?><?php echo $this->_tpl_vars['field']['groupName']; ?><?php echo '"><legend>'; ?><?php echo $this->_tpl_vars['field']['groupTitle']; ?><?php echo '</legend>'; ?><?php endif; ?><?php echo ''; ?><?php if (( $this->_tpl_vars['form']['formName'] == 'Confirm' || $this->_tpl_vars['form']['formName'] == 'ThankYou' ) && $this->_tpl_vars['prefix'] != 'honor'): ?><?php echo '<div class="header-dark">'; ?><?php echo $this->_tpl_vars['field']['groupTitle']; ?><?php echo ' </div>'; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('fieldset', ($this->_tpl_vars['field']['groupTitle'])); ?><?php echo ''; ?><?php $this->assign('groupHelpPost', ($this->_tpl_vars['field']['groupHelpPost'])); ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['groupHelpPre'] && $this->_tpl_vars['action'] != 4 && $this->_tpl_vars['action'] != 1028): ?><?php echo '<div class="messages help">'; ?><?php echo $this->_tpl_vars['field']['groupHelpPre']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('n', $this->_tpl_vars['field']['name']); ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['field_type'] == 'Formatting'): ?><?php echo ''; ?><?php if ($this->_tpl_vars['action'] != 4 && $this->_tpl_vars['action'] != 1028): ?><?php echo ''; ?><?php echo $this->_tpl_vars['field']['help_pre']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['n']): ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['help_pre'] && $this->_tpl_vars['action'] != 4 && $this->_tpl_vars['action'] != 1028): ?><?php echo '<div class="crm-section helprow-'; ?><?php echo $this->_tpl_vars['n']; ?><?php echo '-section helprow-pre" id="helprow-'; ?><?php echo $this->_tpl_vars['n']; ?><?php echo '"><div class="content description">'; ?><?php echo $this->_tpl_vars['field']['help_pre']; ?><?php echo '</div></div>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['options_per_line'] != 0): ?><?php echo '<div class="crm-section editrow_'; ?><?php echo $this->_tpl_vars['n']; ?><?php echo '-section form-item" id="editrow-'; ?><?php echo $this->_tpl_vars['n']; ?><?php echo '"><div class="label option-label">'; ?><?php if ($this->_tpl_vars['prefix']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['prefix']][$this->_tpl_vars['n']]['label']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?><?php echo ''; ?><?php endif; ?><?php echo '</div><div class="content 3">'; ?><?php $this->assign('count', '1'); ?><?php echo ''; ?><?php echo '<table class="form-layout-compressed"><tr>'; ?><?php echo ''; ?><?php $this->assign('index', '1'); ?><?php echo ''; ?><?php if ($this->_tpl_vars['prefix']): ?><?php echo ''; ?><?php $this->assign('formElement', $this->_tpl_vars['form'][$this->_tpl_vars['prefix']][$this->_tpl_vars['n']]); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('formElement', $this->_tpl_vars['form'][$this->_tpl_vars['n']]); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['formElement']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['outer']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['index'] < 10): ?><?php echo ''; ?><?php $this->assign('index', ($this->_tpl_vars['index']+1)); ?><?php echo ''; ?><?php else: ?><?php echo '<td class="labels font-light">'; ?><?php echo $this->_tpl_vars['formElement'][$this->_tpl_vars['key']]['html']; ?><?php echo '</td>'; ?><?php if ($this->_tpl_vars['count'] == $this->_tpl_vars['field']['options_per_line']): ?><?php echo '</tr><tr>'; ?><?php $this->assign('count', '1'); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('count', ($this->_tpl_vars['count']+1)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</tr></table>'; ?><?php echo '</div><div class="clear"></div></div>'; ?><?php else: ?><?php echo '<div class="crm-section editrow_'; ?><?php echo $this->_tpl_vars['n']; ?><?php echo '-section form-item" id="editrow-'; ?><?php echo $this->_tpl_vars['n']; ?><?php echo '"><div class="label">'; ?><?php if ($this->_tpl_vars['prefix']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['prefix']][$this->_tpl_vars['n']]['label']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?><?php echo ''; ?><?php endif; ?><?php echo '</div><div class="content">'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 3) : substr($_tmp, 0, 3)) == 'im-'): ?><?php echo ''; ?><?php $this->assign('provider', ((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('cat', true, $_tmp, "-provider_id") : smarty_modifier_cat($_tmp, "-provider_id"))); ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['provider']]['html']; ?><?php echo '&nbsp;'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['n'] == 'email_greeting' || $this->_tpl_vars['n'] == 'postal_greeting' || $this->_tpl_vars['n'] == 'addressee'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Profile/Form/GreetingType.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php elseif (( $this->_tpl_vars['n'] == 'group' && $this->_tpl_vars['form']['group'] ) || ( $this->_tpl_vars['n'] == 'tag' && $this->_tpl_vars['form']['tag'] )): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/TagsAndGroups.tpl", 'smarty_include_vars' => array('type' => $this->_tpl_vars['n'],'title' => null,'context' => 'profile')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php elseif (( ((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('substr', true, $_tmp, -5, 5) : substr($_tmp, -5, 5)) == '_date' ) && ( $this->_tpl_vars['form']['formName'] != 'Confirm' ) && ( $this->_tpl_vars['form']['formName'] != 'ThankYou' )): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => $this->_tpl_vars['n'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php elseif (( ((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('substr', true, $_tmp, -5, 5) : substr($_tmp, -5, 5)) == '_date' )): ?><?php echo ''; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['form'][$this->_tpl_vars['n']]['value'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")))) ? $this->_run_mod_handler('crmDate', true, $_tmp, $this->_tpl_vars['config']->dateformatshortdate) : smarty_modifier_crmDate($_tmp, $this->_tpl_vars['config']->dateformatshortdate)); ?><?php echo ''; ?><?php elseif (((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 5) : substr($_tmp, 0, 5)) == 'phone'): ?><?php echo ''; ?><?php $this->assign('phone_ext_field', ((is_array($_tmp=$this->_tpl_vars['n'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'phone', 'phone_ext') : smarty_modifier_replace($_tmp, 'phone', 'phone_ext'))); ?><?php echo ''; ?><?php if ($this->_tpl_vars['prefix']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['prefix']][$this->_tpl_vars['n']]['html']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['form'][$this->_tpl_vars['phone_ext_field']]['html']): ?><?php echo '&nbsp;'; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['phone_ext_field']]['html']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['prefix']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['n'] == 'organization_name' && ! empty ( $this->_tpl_vars['form']['onbehalfof_id'] )): ?><?php echo ''; ?><?php echo $this->_tpl_vars['form']['onbehalfof_id']['html']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['html_type'] == 'File' && $this->_tpl_vars['viewOnlyPrefixFileValues']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['viewOnlyPrefixFileValues'][$this->_tpl_vars['prefix']][$this->_tpl_vars['n']]; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['prefix']][$this->_tpl_vars['n']]['html']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['field']['html_type'] == 'File' && $this->_tpl_vars['viewOnlyFileValues']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['viewOnlyFileValues'][$this->_tpl_vars['n']]; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['html_type'] == 'Autocomplete-Select'): ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['data_type'] == 'ContactReference'): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/ContactReference.tpl", 'smarty_include_vars' => array('element_name' => $this->_tpl_vars['n'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</div><div class="clear"></div></div>'; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['help_post'] && $this->_tpl_vars['action'] != 4 && $this->_tpl_vars['action'] != 1028): ?><?php echo '<div class="crm-section helprow-'; ?><?php echo $this->_tpl_vars['n']; ?><?php echo '-section helprow-post" id="helprow-'; ?><?php echo $this->_tpl_vars['n']; ?><?php echo '"><div class="content description">'; ?><?php echo $this->_tpl_vars['field']['help_post']; ?><?php echo '</div></div>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php if ($this->_tpl_vars['field']['groupHelpPost'] && $this->_tpl_vars['action'] != 4 && $this->_tpl_vars['action'] != 1028): ?><?php echo '<div class="messages help">'; ?><?php echo $this->_tpl_vars['field']['groupHelpPost']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['mode'] == 4): ?><?php echo '<div class="crm-submit-buttons">'; ?><?php echo $this->_tpl_vars['form']['buttons']['html']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['mode'] != 8 && $this->_tpl_vars['action'] != 1028 && ! $this->_tpl_vars['hideFieldset']): ?><?php echo '</fieldset>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['help_post'] && $this->_tpl_vars['action'] != 4): ?><?php echo '<br /><div class="messages help">'; ?><?php echo $this->_tpl_vars['help_post']; ?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?>


<?php endif; ?> 
<?php echo '
<script type="text/javascript">
  CRM.$(function($) {
    $(\'#selector tr:even\').addClass(\'odd-row\');
    $(\'#selector tr:odd \').addClass(\'even-row\');
  });
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>