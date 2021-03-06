<?php namespace Monarkee\Models;

use Monarkee\Bumble\Fields\SlugField;
use Monarkee\Bumble\Fields\TextareaField;
use Monarkee\Bumble\Fields\TextField;
use Monarkee\Bumble\Fieldset\Fieldset;
use Monarkee\Bumble\Models\BumbleModel;

class Product extends BumbleModel
{
    public $timestamps = false;

    public $description = 'A beautiful place to put your entries';

    public $rules = [
        'title' => 'required',
    ];

    public function setFields()
    {
        return new Fieldset([
            new TextField('title'),
            new SlugField('slug'),
            new TextareaField('description'),
        ]);
    }
}
