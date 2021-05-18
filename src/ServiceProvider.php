<?php

namespace RO\StatamicSeparator;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $fieldtypes = [
        StatamicSeparator::class,
    ];
}
