<?php namespace Neg\Http\Forms;

use Distilleries\FormBuilder\FormValidator;

class BasicForm extends FormValidator
{
    public static $rules = [];
    public static $rules_update = null;

    public function buildForm()
    {
        // Add fields here...

        $this->addDefaultActions();
    }
}