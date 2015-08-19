<?php namespace Neg\Http\Forms;

use Distilleries\FormBuilder\FormValidator;

class PasswordForm extends FormValidator
{
    public static $rules = [];
    public static $rules_update = null;

    public function buildForm()
    {
        $this->add('password', 'text');
    }
}