<?php

namespace luya\estore\admin\apis;

/**
 * Set Controller.
 *
 * File has been created with `crud/create` command on LUYA version 1.0.0-dev.
 */
class SetController extends \luya\admin\ngrest\base\Api
{
    /**
     * @var string The path to the model which is the provider for the rules and fields.
     */
    public $modelClass = 'luya\estore\models\Set';
}
