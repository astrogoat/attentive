@if(Astrogoat\Attentive\Settings\AttentiveSettings::isEnabled())
    <script src="{{ settings(Astrogoat\Attentive\Settings\AttentiveSettings::class, 'url') }}"></script>
@endif