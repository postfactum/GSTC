<?php /* Smarty version 2.6.27, created on 2017-06-21 15:53:20
         compiled from CRM/Member/Form/Selector.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Member/Form/Selector.tpl', 1, false),array('block', 'ts', 'CRM/Member/Form/Selector.tpl', 58, false),array('function', 'counter', 'CRM/Member/Form/Selector.tpl', 48, false),array('function', 'cycle', 'CRM/Member/Form/Selector.tpl', 50, false),array('function', 'crmURL', 'CRM/Member/Form/Selector.tpl', 58, false),array('modifier', 'truncate', 'CRM/Member/Form/Selector.tpl', 65, false),array('modifier', 'crmDate', 'CRM/Member/Form/Selector.tpl', 65, false),array('modifier', 'replace', 'CRM/Member/Form/Selector.tpl', 72, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['context'] == 'Search'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php echo '<table class="selector row-highlight"><thead class="sticky">'; ?><?php if (! $this->_tpl_vars['single'] && $this->_tpl_vars['context'] == 'Search'): ?><?php echo '<th scope="col" title="Select Rows">'; ?><?php echo $this->_tpl_vars['form']['toggleSelect']['html']; ?><?php echo '</th>'; ?><?php endif; ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['columnHeaders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['header']):
?><?php echo '<th scope="col">'; ?><?php if ($this->_tpl_vars['header']['sort']): ?><?php echo ''; ?><?php $this->assign('key', $this->_tpl_vars['header']['sort']); ?><?php echo ''; ?><?php echo $this->_tpl_vars['sort']->_response[$this->_tpl_vars['key']]['link']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['header']['name']; ?><?php echo ''; ?><?php endif; ?><?php echo '</th>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</thead>'; ?><?php echo smarty_function_counter(array('start' => 0,'skip' => 1,'print' => false), $this);?><?php echo ''; ?><?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?><?php echo '<tr id=\'rowid'; ?><?php echo $this->_tpl_vars['row']['membership_id']; ?><?php echo '\' class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo ' '; ?><?php echo ' crm-membership_'; ?><?php echo $this->_tpl_vars['row']['membership_id']; ?><?php echo '">'; ?><?php if (! $this->_tpl_vars['single']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['context'] == 'Search'): ?><?php echo ''; ?><?php $this->assign('cbName', $this->_tpl_vars['row']['checkbox']); ?><?php echo '<td>'; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['cbName']]['html']; ?><?php echo '</td>'; ?><?php endif; ?><?php echo '<td>'; ?><?php echo $this->_tpl_vars['row']['contact_type']; ?><?php echo '</td><td><a href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['row']['contact_id'])), $this);?><?php echo '" title="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'View contact record'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '">'; ?><?php echo $this->_tpl_vars['row']['sort_name']; ?><?php echo '</a></td>'; ?><?php endif; ?><?php echo '<td class="crm-membership-type crm-membership-type_'; ?><?php echo $this->_tpl_vars['row']['membership_type']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['row']['membership_type']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['row']['owner_membership_id']): ?><?php echo '<br />('; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'by relationship'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ')'; ?><?php endif; ?><?php echo '</td><td class="crm-membership-join_date">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['join_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="crm-membership-start_date">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['membership_start_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="crm-membership-end_date">'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['membership_end_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="crm-membership-source">'; ?><?php echo $this->_tpl_vars['row']['membership_source']; ?><?php echo '</td><td class="crm-membership-status crm-membership-status_'; ?><?php echo $this->_tpl_vars['row']['membership_status']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['row']['membership_status']; ?><?php echo '</td><td class="crm-membership-auto_renew">'; ?><?php if ($this->_tpl_vars['row']['auto_renew']): ?><?php echo '<img src="'; ?><?php echo $this->_tpl_vars['config']->resourceBase; ?><?php echo 'i/check.gif" alt="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Auto-renew'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" /> '; ?><?php endif; ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['action'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'xx', $this->_tpl_vars['row']['membership_id']) : smarty_modifier_replace($_tmp, 'xx', $this->_tpl_vars['row']['membership_id'])); ?><?php echo ''; ?><?php if ($this->_tpl_vars['row']['owner_membership_id']): ?><?php echo '<a href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/membership/view','q' => "reset=1&id=".($this->_tpl_vars['row']['owner_membership_id'])."&action=view&context=search"), $this);?><?php echo '" title="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'View Primary member record'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" class="action-item">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'View Primary'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a>'; ?><?php endif; ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php echo ''; ?><?php if (( $this->_tpl_vars['context'] == 'membership' ) && $this->_tpl_vars['pager']->_totalItems > $this->_tpl_vars['limit']): ?><?php echo '<tr class="even-row"><td colspan="7"><a href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&force=1&selectedChild=member&cid=".($this->_tpl_vars['contactId'])), $this);?><?php echo '">&raquo; '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'View all memberships for this contact'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '...</a></td></tr></tr>'; ?><?php endif; ?><?php echo ''; ?><?php if (( $this->_tpl_vars['context'] == 'dashboard' ) && $this->_tpl_vars['pager']->_totalItems > $this->_tpl_vars['limit']): ?><?php echo '<tr class="even-row"><td colspan="9"><a href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/member/search','q' => 'reset=1'), $this);?><?php echo '">&raquo; '; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Find more members'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '...</a></td></tr></tr>'; ?><?php endif; ?><?php echo '</table>'; ?>




<?php if ($this->_tpl_vars['context'] == 'Search'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>