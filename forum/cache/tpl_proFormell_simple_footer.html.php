<?php if (!defined('IN_PHPBB')) exit; ?></div>

	<div class="copyright"><?php echo (isset($this->_rootref['CREDIT_LINE'])) ? $this->_rootref['CREDIT_LINE'] : ''; ?><br />Style by <a href="http://www.m-a-styles.de">Marc Alexander</a> &copy;
		<?php if ($this->_rootref['TRANSLATION_INFO']) {  ?><br /><?php echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; } ?>

	</div>
</div>

</body>
</html>