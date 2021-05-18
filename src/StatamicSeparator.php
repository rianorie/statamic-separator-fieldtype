<?php

namespace RO\StatamicSeparator;

use Statamic\Fields\Fieldtype;

class StatamicSeparator extends Fieldtype
{
    protected $icon = 'generic';

    protected $categories = ['text'];

    /**
     * @return string
     */
    public static function title()
    {
        return 'Separator';
    }
}
