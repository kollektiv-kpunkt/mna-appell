<x-email-layout>
    <x-slot:subject>
        Danke für Ihre Unterstützung, {{$supporter->name}}!
    </x-slot:subject>

    <p style="font-weight: bold; font-size: 2rem; margin-bottom: 0.25em; color: #8000FF">Liebe:r {{$supporter->name}}</p>
    <p>Danke für Ihre Unterstützung! BLA BLA BLA BLA BLA</p>
    <p>Damit wir Ihren Namen auf unserer Webseite anzeigen können, wären wir Ihnen dankbar, wenn Sie <a href="{{url("/verify/{$supporter->hash}")}}">Ihre E-Mail Adresse bestätigen</a>.</p>
    <x-email-button>
        <x-slot:link>
            {{url("/verify/{$supporter->hash}")}}
        </x-slot:link>
        E-Mail Adresse bestätigen
    </x-email-button>
    <p>Vielen Dank!</p>
    <p>
        <b>Das Komitee "Keine Kinder zweiter Klasse"</b><br>
        <a href="https://www.keine-kinder-zweiter-klasse.ch">www.keine-kinder-zweiter-klasse.ch</a>
    </p>
</x-email-layout>

</body>
</html>
