<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');

?>
<div class="contact-form">
	<form id="contact-form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate form-horizontal well">
		<?php foreach ($this->form->getFieldsets() as $fieldset): ?>
			<?php if ($fieldset->name === 'captcha' && !$this->captchaEnabled) : ?>
				<?php continue; ?>
			<?php endif; ?>
			<?php $fields = $this->form->getFieldset($fieldset->name); ?>
			<?php $ii=0; if (count($fields)) : ?>
				<!--<fieldset>-->
                <?php if (isset($fieldset->label) && strlen($legend = trim(JText::_($fieldset->label)))) : ?>
						<legend><?php echo $legend; ?></legend>
					<?php endif; ?>
                <div class="row nopadding">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
               
					
					<?php foreach ($fields as $field) : ?>
						<?php if ($field->name === 'contact_email_copy' && !$this->params->get('show_email_copy')) : ?>
							<?php continue; ?>
						<?php endif; ?>
						<?php
						$ii++ ;
						if($ii==6){
							echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">';
						}
						
						echo '<div class="row nopadding">'.$field->renderField().'</div>';
						
						if($ii==5 || $ii==6){
							echo '</div>';
							
						}
						
						 ?>
                        
					<?php endforeach; ?>
				<!--</fieldset>-->
                </div>
			<?php endif; ?>
		<?php endforeach; ?>
		<!--<div class="control-group">
			<div class="controls">-->
            <p align="center">
				<button class="btn btn-primary validate" type="submit"><?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?></button>
				<input type="hidden" name="option" value="com_contact" />
				<input type="hidden" name="task" value="contact.submit" />
				<input type="hidden" name="return" value="<?php echo $this->return_page; ?>" />
				<input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
				<?php echo JHtml::_('form.token'); ?>
                </p>
			<!--</div>
		</div>-->
	</form>
</div>
