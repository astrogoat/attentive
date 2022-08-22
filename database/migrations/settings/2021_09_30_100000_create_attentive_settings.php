<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateAttentiveSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('attentive.enabled', false);
        $this->migrator->add('attentive.url', '');
    }

    public function down()
    {
        $this->migrator->delete('attentive.enabled');
        $this->migrator->delete('attentive.url');
    }
}
