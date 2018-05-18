<?php

/**
 * @version	$Id$
 * @author	Viames Marino
 */

?><div class="row">
	<div class="col-md-12">
		<div class="panel panel-inverse">
			<div class="panel-heading">
				<h4 class="panel-title"><?php $this->_('DEVELOPER') ?></h4>
			</div>
			<div class="panel-body">
				<div class="container">
					<form action="developer/moduleCreation" method="post" class="form-horizontal">
						<fieldset>
							<div class="form-group">
								<label class="col-md-3 control-label"><?php $this->_('OBJECT_NAME')?></label>
								<div class="col-md-3"><?php print $this->form->renderControl('objectName') ?></div>
								<div class="col-md-6 small"><?php $this->_('OBJECT_NAME_DESCRIPTION')?></div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label"><?php $this->_('MODULE_NAME')?></label>
								<div class="col-md-3"><?php print $this->form->renderControl('moduleName') ?></div>
								<div class="col-md-6 small"><?php $this->_('MODULE_NAME_DESCRIPTION')?></div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label"><?php $this->_('SVN_COMMENTS')?></label>
								<div class="col-md-3"><?php print $this->form->renderControl('svnComments') ?></div>
								<div class="col-md-6 small"><?php $this->_('SVN_COMMENTS_DESCRIPTION')?></div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label"><?php $this->_('COMMON_CLASS')?></label>
								<div class="col-md-3"><?php print $this->form->renderControl('commonClass') ?></div>
								<div class="col-md-6 small"><?php $this->_('COMMON_CLASS_DESCRIPTION')?></div>
							</div>
							<?php print $this->form->renderControl('tableName') ?>
							<div class="form-group">
								<div class="col-md-push-3 col-md-9">
									<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> <?php $this->_('CREATE_MODULE') ?></button>
									<a href="developer" class="btn btn-default"><i class="fa fa-times"></i> <?php $this->_('CANCEL')?></a>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>