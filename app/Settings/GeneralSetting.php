<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSetting extends Settings
{
    public string $store_name;

    public string $contact_email;

    public string $contact_phone;

    public bool $cookie_consent_enabled;

    public string $cookie_consent_message;

    public string $cookie_consent_agree;

    public string $cookie_consent_reject;

    public bool $setup_finished;

    public static function group(): string
    {
        return 'general';
    }

    // Since there are no encrypted fields left, you can remove the encrypted() method entirely
    // If you do need to encrypt other fields, update the method accordingly
    /*
    public static function encrypted(): array
    {
        return [
            // Add any fields that need to be encrypted
        ];
    }
    */
}
