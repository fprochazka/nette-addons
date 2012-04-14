<?php

namespace NetteAddons;



/**
 * Form for addon version creation.
 */
class AddVersionForm extends BaseForm
{
	public function buildForm()
	{
		$this->addText('version', 'Version', 10, 20)
			->addRule(self::FILLED);
		$this->addUpload('archive', 'Archive')
			->addRule(self::FILLED)
			->addRule(self::MIME_TYPE, 'Only ZIP files are accepted.', array('application/zip'));

		$this->addSubmit('create', 'Create');
	}
}