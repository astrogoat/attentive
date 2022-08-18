<?php

namespace Astrogoat\Attentive\Actions;

use Helix\Lego\Apps\Actions\Action;

class AttentiveAction extends Action
{
    public static function actionName(): string
    {
        return 'Attentive action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
