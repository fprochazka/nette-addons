<?php

namespace NetteAddons;



class AddAddonForm extends BaseForm
{
	public function buildForm()
	{
		$this->addText('name', 'Name', 40, 100)
			->addRule(self::FILLED);
		$this->addTextArea('description', 'Description', 60, 10)
			->addRule(self::FILLED);

		$this->addHidden('repository');

		$this->addSubmit('create', 'Create');
	}

}
