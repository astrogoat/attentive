<?php

namespace Astrogoat\Attentive\Settings;

use Astrogoat\Attentive\Actions\AttentiveAction;
use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class AttentiveSettings extends AppSettings
{
    public string $url;

    public function rules(): array
    {
        return [
            'url' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function description(): string
    {
        return 'Interact with Attentive.';
    }

    public static function group(): string
    {
        return 'attentive';
    }
}
