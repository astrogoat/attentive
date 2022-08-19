<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateAttentiveSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('attentive.enabled', false);
        $this->migrator->add('attentive.url', '');
        // $this->migrator->addEncrypted('attentive.access_token', '');
    }

    public function down()
    {
        $this->migrator->delete('attentive.enabled');
        $this->migrator->delete('attentive.url');
        // $this->migrator->delete('attentive.access_token');
    }
}
