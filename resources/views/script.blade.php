@if(Astrogoat\Attentive\Settings\AttentiveSettings::isEnabled())
    <!-- Attentive -->
    <script src="{{ settings(Astrogoat\Attentive\Settings\AttentiveSettings::class, 'url') }}"></script>
@endif
