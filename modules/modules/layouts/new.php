<?php

/**
 * @version	$Id$
 * @author	Viames Marino
 */

?><div class="card">
	<div class="card-header">
		<h5 class="float-left"><?php print $this->_('UPLOAD_NEW_MODULE') ?></h5>
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-sm-6 b-r">
				<h3 class="m-t-none m-b"><?php print $this->_('NEW_MODULE') ?></h3>
				<p><?php print $this->_('UPLOAD_NEW_MODULE_DESCRIPTION') ?></p>
			</div>
			<div class="col-sm-6">
				<form role="form" action="modules/add" method="post" enctype="multipart/form-data">
					<div class="form-group row">
						<label class="control-label"><?php print $this->_('SELECT') ?></label> 
						<?php print $this->form->renderControl('package') ?>
					</div>
					<div class="form-group row">
						<div class="col-12">
							<button type="submit" class="btn btn-primary"><i class="fa fa-asterisk"></i> <?php $this->_('INSERT') ?></button>
							<a href="modules/default" class="btn btn-secondary"><i class="fa fa-times"></i> <?php $this->_('CANCEL') ?></a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>