<?php

namespace Neg\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Kris\LaravelFormBuilder\FormBuilder;

class PasswordComposer
{
    protected $formBuilder;

    public function __construct(FormBuilder $formBuilder)
    {
        $this->formBuilder = $formBuilder;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {

        $form = $this->formBuilder->create('\Neg\Http\Forms\PasswordForm', [
            'method' => 'POST',
            'url' => route('manage.user.changepw')
        ]);

        $view->with('form', $form);
    }
}