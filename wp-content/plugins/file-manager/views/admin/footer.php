<?php
/**
 *
 * @file footer.php Footer file of the plugin
 *
 * */
// Security check
if( !defined('ABSPATH') ) die();

?>
<div class='fm-footer'>
	
	<ul>
		<li><a href='http://giribaz.com/faq/'>FAQ</a></li>
		<li><a href='https://wordpress.org/plugins/file-manager/changelog/'>Changelog</a></li>
		<li><a href='http://giribaz.com/contacts/'>Contacts</a></li>
		<li><a href='http://giribaz.com/documentations/'>Docs</a></li>
		<li><a href='<?= $this->feedback_page; ?>'>Review</a></li>
		<li><a href='<?= $this->support_page; ?>'>Help & Support</a></li>
		<li><a href='<?= $this->site; ?>'>Giribaz</a></li>
	</ul>

</div>
