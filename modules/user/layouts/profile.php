<?php

/**
 * @version	$Id$
 * @author	Viames Marino
 */

?><div class="card">
	<div class="card-header">
		<h5><?php $this->_('PERSONAL_PROFILE') ?></h5>
	</div>
	<div class="card-body">
		<form action="user/profileChange" method="post" class="form-horizontal">
			<fieldset><div class="form-group row">
					<label class="col-sm-2 control-label"><?php $this->_('NAME') ?></label>
					<div class="col-sm-10"><?php print $this->form->renderControl('name') ?></div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 control-label"><?php $this->_('SURNAME') ?></label>
					<div class="col-sm-10"><?php print $this->form->renderControl('surname') ?></div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 control-label"><?php $this->_('USERNAME') ?></label>
					<div class="col-sm-10"><?php print $this->form->renderControl('username') ?></div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 control-label"><?php $this->_('EMAIL') ?></label>
					<div class="col-sm-10"><?php print $this->form->renderControl('email') ?></div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 control-label"><?php $this->_('LANGUAGE') ?></label>
					<div class="col-sm-10"><?php print $this->form->renderControl('languageId') ?></div>
				</div>
				<div class="row">
					<div class="col-sm-10 col-sm-offset-2">
						<a href="user/profileEdit" class="btn btn-secondary"><i class="fa fa-pencil-alt"></i> Modifica</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>