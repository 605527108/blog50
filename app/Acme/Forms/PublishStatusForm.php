<?php namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class PublishStatusForm extends FormValidator {
    protected $rules = [
        'body' => 'required'
    ];
}
