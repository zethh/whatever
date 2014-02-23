<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>

<div class="panel">
   <div class="inner"><span class="corners-top"><span></span></span>

   <div class="content">
      
        <h2><?php echo ((isset($this->_rootref['L_APPLICATION_PAGETITLE'])) ? $this->_rootref['L_APPLICATION_PAGETITLE'] : ((isset($user->lang['APPLICATION_PAGETITLE'])) ? $user->lang['APPLICATION_PAGETITLE'] : '{ APPLICATION_PAGETITLE }')); ?></h2>
        
        <span style="font-size: 1.3em;"><?php echo ((isset($this->_rootref['L_APPLICATION_WELCOME_MESSAGE'])) ? $this->_rootref['L_APPLICATION_WELCOME_MESSAGE'] : ((isset($user->lang['APPLICATION_WELCOME_MESSAGE'])) ? $user->lang['APPLICATION_WELCOME_MESSAGE'] : '{ APPLICATION_WELCOME_MESSAGE }')); ?><br /><br /><br />
       
        <form method="post" action="<?php echo (isset($this->_rootref['PROCESS_APPFORM'])) ? $this->_rootref['PROCESS_APPFORM'] : ''; ?>" id="appform"> 
        <?php echo ((isset($this->_rootref['L_APPLICATION_REALNAME'])) ? $this->_rootref['L_APPLICATION_REALNAME'] : ((isset($user->lang['APPLICATION_REALNAME'])) ? $user->lang['APPLICATION_REALNAME'] : '{ APPLICATION_REALNAME }')); ?> <input type="text" name="name" /><br />
        <?php echo ((isset($this->_rootref['L_APPLICATION_POSITION'])) ? $this->_rootref['L_APPLICATION_POSITION'] : ((isset($user->lang['APPLICATION_POSITION'])) ? $user->lang['APPLICATION_POSITION'] : '{ APPLICATION_POSITION }')); ?>
        <select name="postion">
        <option value="<?php echo ((isset($this->_rootref['L_APPLICATION_TEAM1'])) ? $this->_rootref['L_APPLICATION_TEAM1'] : ((isset($user->lang['APPLICATION_TEAM1'])) ? $user->lang['APPLICATION_TEAM1'] : '{ APPLICATION_TEAM1 }')); ?>"><?php echo ((isset($this->_rootref['L_APPLICATION_TEAM1'])) ? $this->_rootref['L_APPLICATION_TEAM1'] : ((isset($user->lang['APPLICATION_TEAM1'])) ? $user->lang['APPLICATION_TEAM1'] : '{ APPLICATION_TEAM1 }')); ?></option>
        <option value="<?php echo ((isset($this->_rootref['L_APPLICATION_TEAM2'])) ? $this->_rootref['L_APPLICATION_TEAM2'] : ((isset($user->lang['APPLICATION_TEAM2'])) ? $user->lang['APPLICATION_TEAM2'] : '{ APPLICATION_TEAM2 }')); ?>"><?php echo ((isset($this->_rootref['L_APPLICATION_TEAM2'])) ? $this->_rootref['L_APPLICATION_TEAM2'] : ((isset($user->lang['APPLICATION_TEAM2'])) ? $user->lang['APPLICATION_TEAM2'] : '{ APPLICATION_TEAM2 }')); ?></option>
        <option value="<?php echo ((isset($this->_rootref['L_APPLICATION_TEAM3'])) ? $this->_rootref['L_APPLICATION_TEAM3'] : ((isset($user->lang['APPLICATION_TEAM3'])) ? $user->lang['APPLICATION_TEAM3'] : '{ APPLICATION_TEAM3 }')); ?>"><?php echo ((isset($this->_rootref['L_APPLICATION_TEAM3'])) ? $this->_rootref['L_APPLICATION_TEAM3'] : ((isset($user->lang['APPLICATION_TEAM3'])) ? $user->lang['APPLICATION_TEAM3'] : '{ APPLICATION_TEAM3 }')); ?></option>
        </select>
        <br /><br />
       
        <?php echo ((isset($this->_rootref['L_APPLICATION_WHY'])) ? $this->_rootref['L_APPLICATION_WHY'] : ((isset($user->lang['APPLICATION_WHY'])) ? $user->lang['APPLICATION_WHY'] : '{ APPLICATION_WHY }')); ?><br />
        <textarea rows="5" cols="50" name="why"></textarea>
        
        <br/><br/>
        
        <input type="submit" name="submit" id ="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="button1" />
       
        </span>
      
   </div>

   <span class="corners-bottom"><span></span></span></div>
</div>


<?php $this->_tpl_include('overall_footer.html'); ?>