<?php /* Smarty version 2.6.27, created on 2017-06-19 20:14:30
         compiled from CRM/Member/Page/Tab.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Member/Page/Tab.tpl', 1, false),array('block', 'ts', 'CRM/Member/Page/Tab.tpl', 41, false),array('function', 'crmURL', 'CRM/Member/Page/Tab.tpl', 35, false),array('function', 'cycle', 'CRM/Member/Page/Tab.tpl', 87, false),array('modifier', 'crmDate', 'CRM/Member/Page/Tab.tpl', 92, false),array('modifier', 'replace', 'CRM/Member/Page/Tab.tpl', 100, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="view-content">
<?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 8): ?>     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Member/Form/Membership.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['action'] == 4): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Member/Form/MembershipView.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['action'] == 32768): ?>      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Member/Form/MembershipRenewal.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['action'] == 16): ?>     <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
      <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/view/membership",'q' => "reset=1&action=add&cid=".($this->_tpl_vars['contactId'])."&context=membership"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('newURL', ob_get_contents());ob_end_clean(); ?><?php endif; ?>

    <?php if ($this->_tpl_vars['action'] != 1 && $this->_tpl_vars['action'] != 2 && $this->_tpl_vars['permission'] == 'edit'): ?>
        <div class="help">
            <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
              <?php ob_start(); ?>class="action-item" href="<?php echo $this->_tpl_vars['newURL']; ?>
"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('link', ob_get_contents());ob_end_clean(); ?>
              <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['link'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <a %1>Add Membership</a> to record a new membership.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              <?php if ($this->_tpl_vars['newCredit']): ?>
                <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/view/membership",'q' => "reset=1&action=add&cid=".($this->_tpl_vars['contactId'])."&context=membership&mode=live"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('newCreditURL', ob_get_contents());ob_end_clean(); ?>
                <?php ob_start(); ?>class="action-item" href="<?php echo $this->_tpl_vars['newCreditURL']; ?>
"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('link', ob_get_contents());ob_end_clean(); ?>
                <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['link'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <a %1>Submit Credit Card Membership</a> to process a Membership on behalf of the member using their credit card.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <?php endif; ?>
            <?php else: ?>
                <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['displayName'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Current and inactive memberships for %1 are listed below.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
        </div>

        <div class="action-link">
            <a accesskey="N" href="<?php echo $this->_tpl_vars['newURL']; ?>
" class="button"><span><i class="crm-i fa-plus-circle"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Membership<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
            <?php if ($this->_tpl_vars['accessContribution'] && $this->_tpl_vars['newCredit']): ?>
                <a accesskey="N" href="<?php echo $this->_tpl_vars['newCreditURL']; ?>
" class="button"><span><i class="crm-i fa-credit-card"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Submit Credit Card Membership<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a><br /><br />
            <?php else: ?>
                <br/ ><br/ >
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php if (! ( $this->_tpl_vars['activeMembers'] || $this->_tpl_vars['inActiveMembers'] ) && $this->_tpl_vars['action'] != 2 && $this->_tpl_vars['action'] != 1 && $this->_tpl_vars['action'] != 8 && $this->_tpl_vars['action'] != 4 && $this->_tpl_vars['action'] != 32768): ?>
         <div class="messages status no-popup">
          <div class="icon inform-icon"></div>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No memberships have been recorded for this contact.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </div>
    <?php endif; ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jsortable.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php if ($this->_tpl_vars['activeMembers']): ?>
    <div id="memberships">
        <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Active Memberships<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <?php echo '<table id="active_membership" class="display"><thead><tr><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Membership'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Member Since'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Start Date'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'End Date'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Status'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Source'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Auto-renew'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Related'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th></th></tr></thead>'; ?><?php $_from = $this->_tpl_vars['activeMembers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['activeMember']):
?><?php echo '<tr id="crm-membership_'; ?><?php echo $this->_tpl_vars['activeMember']['id']; ?><?php echo '" class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo ' '; ?><?php echo $this->_tpl_vars['activeMember']['class']; ?><?php echo ' crm-membership"><td class="crm-membership-membership_type">'; ?><?php echo $this->_tpl_vars['activeMember']['membership_type']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['activeMember']['owner_membership_id']): ?><?php echo '<br />('; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'by relationship'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ')'; ?><?php endif; ?><?php echo '</td><td class="crm-membership-join_date" data-order="'; ?><?php echo $this->_tpl_vars['activeMember']['join_date']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['activeMember']['join_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="crm-membership-start_date" data-order="'; ?><?php echo $this->_tpl_vars['activeMember']['start_date']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['activeMember']['start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="crm-membership-end_date" data-order="'; ?><?php echo $this->_tpl_vars['activeMember']['end_date']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['activeMember']['end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="crm-membership-status">'; ?><?php echo $this->_tpl_vars['activeMember']['status']; ?><?php echo '</td><td class="crm-membership-source">'; ?><?php echo $this->_tpl_vars['activeMember']['source']; ?><?php echo '</td><td class="crm-membership-auto_renew">'; ?><?php if ($this->_tpl_vars['activeMember']['auto_renew']): ?><?php echo '<img src="'; ?><?php echo $this->_tpl_vars['config']->resourceBase; ?><?php echo 'i/check.gif" alt="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Auto-renew'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" /> '; ?><?php endif; ?><?php echo '</td><td class="crm-membership-related_count">'; ?><?php echo $this->_tpl_vars['activeMember']['related_count']; ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['activeMember']['action'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'xx', $this->_tpl_vars['activeMember']['id']) : smarty_modifier_replace($_tmp, 'xx', $this->_tpl_vars['activeMember']['id'])); ?><?php echo ''; ?><?php if ($this->_tpl_vars['activeMember']['owner_membership_id']): ?><?php echo '<a href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/membership/view','q' => "reset=1&id=".($this->_tpl_vars['activeMember']['owner_membership_id'])."&action=view&context=membership&selectedChild=member"), $this);?><?php echo '" title="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'View Primary member record'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" class="crm-hover-button action-item">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'View Primary'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a>'; ?><?php endif; ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

    </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['inActiveMembers']): ?>
        <div id="inactive-memberships">
        <p></p>
        <h3 class="font-red"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Pending and Inactive Memberships<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <?php echo '<table id="pending_membership" class="display"><thead><tr><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Membership'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Start Date'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'End Date'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Status'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Source'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Auto-renew'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th></th></tr></thead>'; ?><?php $_from = $this->_tpl_vars['inActiveMembers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['inActiveMember']):
?><?php echo '<tr id="crm-membership_'; ?><?php echo $this->_tpl_vars['inActiveMember']['id']; ?><?php echo '" class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo ' '; ?><?php echo $this->_tpl_vars['inActiveMember']['class']; ?><?php echo ' crm-membership"><td class="crm-membership-membership_type">'; ?><?php echo $this->_tpl_vars['inActiveMember']['membership_type']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['inActiveMember']['owner_membership_id']): ?><?php echo '<br />('; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'by relationship'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ')'; ?><?php endif; ?><?php echo '</td><td class="crm-membership-start_date" data-order="'; ?><?php echo $this->_tpl_vars['inActiveMember']['start_date']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['inActiveMember']['start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="crm-membership-end_date" data-order="'; ?><?php echo $this->_tpl_vars['inActiveMember']['end_date']; ?><?php echo '">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['inActiveMember']['end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td class="crm-membership-status">'; ?><?php echo $this->_tpl_vars['inActiveMember']['status']; ?><?php echo '</td><td class="crm-membership-source">'; ?><?php echo $this->_tpl_vars['inActiveMember']['source']; ?><?php echo '</td><td class="crm-membership-auto_renew">'; ?><?php if ($this->_tpl_vars['inActiveMember']['auto_renew']): ?><?php echo '<img src="'; ?><?php echo $this->_tpl_vars['config']->resourceBase; ?><?php echo 'i/check.gif" alt="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Auto-renew'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" /> '; ?><?php endif; ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['inActiveMember']['action'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'xx', $this->_tpl_vars['inActiveMember']['id']) : smarty_modifier_replace($_tmp, 'xx', $this->_tpl_vars['inActiveMember']['id'])); ?><?php echo ''; ?><?php if ($this->_tpl_vars['inActiveMember']['owner_membership_id']): ?><?php echo '<a href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/membership/view','q' => "reset=1&id=".($this->_tpl_vars['inActiveMember']['owner_membership_id'])."&action=view&context=membership&selectedChild=member"), $this);?><?php echo '" title="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'View Primary member record'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" class="crm-hover-button action-item">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'View Primary'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a>'; ?><?php endif; ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

        </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['membershipTypes']): ?>
    <div class="solid-border-bottom">&nbsp;</div>
    <div id="membership-types">
        <div><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Types<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></div>
        <div class="help">
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The following Membership Types are associated with this organization. Click <strong>Members</strong> for a listing of all contacts who have memberships of that type. Click <strong>Edit</strong> to modify the settings for that type.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <div class="form-item">
            <?php echo '<table id="membership_type" class="display"><thead><tr><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Name'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Period'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Fixed Start'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Minimum Fee'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Duration'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Visibility'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th></th></tr></thead>'; ?><?php $_from = $this->_tpl_vars['membershipTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['membershipType']):
?><?php echo '<tr class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo ' '; ?><?php echo $this->_tpl_vars['membershipType']['class']; ?><?php echo ' crm-membership"><td class="crm-membership-name">'; ?><?php echo $this->_tpl_vars['membershipType']['name']; ?><?php echo '</td><td class="crm-membership-period_type">'; ?><?php echo $this->_tpl_vars['membershipType']['period_type']; ?><?php echo '</td><td class="crm-membership-fixed_period_start_day">'; ?><?php echo $this->_tpl_vars['membershipType']['fixed_period_start_day']; ?><?php echo '</td><td class="crm-membership-minimum_fee">'; ?><?php echo $this->_tpl_vars['membershipType']['minimum_fee']; ?><?php echo '</td><td class="crm-membership-duration_unit">'; ?><?php echo $this->_tpl_vars['membershipType']['duration_unit']; ?><?php echo '</td><td class="crm-membership-visibility">'; ?><?php echo $this->_tpl_vars['membershipType']['visibility']; ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['membershipType']['action'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'xx', $this->_tpl_vars['membershipType']['id']) : smarty_modifier_replace($_tmp, 'xx', $this->_tpl_vars['membershipType']['id'])); ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>


        </div>
    </div>
    <?php endif; ?>
<?php endif; ?> </div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>