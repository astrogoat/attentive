@if(Astrogoat\Attentive\Settings\AttentiveSettings::isEnabled())
    <!-- [Attentive] Start -->
    <script src="{{ settings(Astrogoat\Attentive\Settings\AttentiveSettings::class, 'url') }}"></script>
    <!-- [Attentive] End -->
@endif
