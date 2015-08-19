<?php namespace Neg\Http\Forms;

use Kris\LaravelFormBuilder\Form;

class BlogForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text')
            ->add('body', 'textarea')
            ->add('publish', 'checkbox');
    }
}