<x-email-layout>
    <x-slot:subject>
        Bitte bestätigen Sie Ihre E-Mail Adresse, {$this->supporter->name}!
    </x-slot:subject>

    <p style="font-weight: bold; font-size: 2rem; margin-bottom: 0.25em; color: #8000FF">Liebe:r {{$supporter->name}}</p>
    <p>Sie haben vor kurzem unseren Appell an den Regierungsrat des Kanton Zürich unterschrieben. <b>Danke vielmals für Ihre Unterstützung!</b></p>
    <p>Damit wir Ihren Namen auf unserer Webseite anzeigen können, wären wir Ihnen dankbar, wenn Sie <a href="{{url("/verify/{$supporter->hash}")}}">Ihre E-Mail Adresse bestätigen</a>.</p>
    <x-email-button>
        <x-slot:link>
            {{url("/verify/{$supporter->hash}")}}
        </x-slot:link>
        E-Mail Adresse bestätigen
    </x-email-button>
    <p>Vielen Dank für Ihre Unterstützung!</p>
    <p>
        <b>Das Netzwerk «kindgerechte Betreuung jugendlicher Geflüchteter»</b><br>
        <a href="https://www.keine-kinder-zweiter-klasse.ch">www.keine-kinder-zweiter-klasse.ch</a>
    </p>
</x-email-layout>

</body>
</html>
