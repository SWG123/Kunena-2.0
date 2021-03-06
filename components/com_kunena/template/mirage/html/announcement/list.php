<?php
/**
 * Kunena Component
 * @package Kunena.Template.Mirage
 * @subpackage Announcement
 *
 * @copyright (C) 2008 - 2012 Kunena Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link http://www.kunena.org
 **/
defined ( '_JEXEC' ) or die ();

// FIXME: add pagination
?>
<div class="kmodule announcement-list">
	<div class="kbox-wrapper kbox-full">
		<div class="announcement-list-kbox kbox kbox-full kbox-color kbox-border kbox-border_radius kbox-border_radius-vchild kbox-shadow">
			<div class="headerbox-wrapper kbox-full">
				<div class="header fl">
					<h2 class="header">
						<a class="section link-header2" title="<?php echo JText::_('COM_KUNENA_ANN_ANNOUNCEMENTS') ?>" rel="kannouncements-detailsbox"><?php echo JText::_('COM_KUNENA_ANN_ANNOUNCEMENTS') ?></a>
					</h2>
				</div>
				<div class="header fr">
					<?php if (!empty($this->actions['add'])) echo JHtml::_('kunenaforum.link', $this->actions['add'], JText::_('COM_KUNENA_ANN_ADD'), JText::_('COM_KUNENA_ANN_ADD'), 'link') ?>
				</div>
			</div>
			<div class="detailsbox-wrapper innerspacer">
				<div class="announcements-list-detailsbox detailsbox kbox-full kbox-hover kbox-border kbox-border_radius kbox-shadow">
					<form action="<?php echo KunenaRoute::_('index.php?option=com_kunena&view=announcement') ?>" method="post" id="adminForm" name="adminForm">
						<input type="hidden" name="boxchecked" value="0" />
						<input type="hidden" name="task" value="" />
						<?php echo JHTML::_( 'form.token' ) ?>
						<ul class="list-unstyled announcement-list">
							<li class="header kbox-hover_header-row">
								<dl>
									<?php if ($this->actions): ?>
									<dd class="announcement-checkbox">#</dd>
									<?php endif ?>
									<dd class="announcement-id">
										<span><?php echo JText::_('COM_KUNENA_ANN_ID') ?></span>
									</dd>
									<dd class="announcement-date">
										<span><?php echo JText::_('COM_KUNENA_ANN_DATE') ?></span>
									</dd>
									<dd class="announcement-author">
										<span><?php echo JText::_('COM_KUNENA_ANN_AUTHOR') ?></span>
									</dd>
									<dd class="announcement-title">
										<span><?php echo JText::_('COM_KUNENA_ANN_TITLE') ?></span>
									</dd>
									<?php if ($this->actions): ?>
									<dd class="announcement-publish">
										<span><?php echo JText::_('COM_KUNENA_ANN_PUBLISH') ?></span>
									</dd>
									<dd class="announcement-edit">
										<span><?php echo JText::_('COM_KUNENA_ANN_EDIT') ?></span>
									</dd>
									<dd class="announcement-delete">
										<span><?php echo JText::_('COM_KUNENA_ANN_DELETE') ?></span>
									</dd>
									<?php endif ?>
								</dl>
							</li>
						</ul>
						<ul class="list-unstyled announcement-list">
							<?php $this->displayItems() ?>
						</ul>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="spacer"></div>