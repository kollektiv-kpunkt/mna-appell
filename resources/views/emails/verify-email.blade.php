<x-email-layout>
    <x-slot:subject>
        Bitte bestätigen Sie Ihre E-Mail Adresse
    </x-slot:subject>

    <p style="font-weight: bold; font-size: 2rem; margin-bottom: 0.25em; color: #8000FF">Liebe:r {{$supporter->name}}</p>
    <p>Vielen Dank für Ihre Unterstützung für eine kindgerechte Betreuung jugendlicher Geflüchteter.</p>
    <p>Bitte bestätigen Sie Ihre Unterschrift <b>indem Sie auf den violetten Knopf unten klicken.</b> Nur so können wir Ihren Namen der Liste der Unterzeichner:innen hinzufügen.</p>
    <x-email-button>
        <x-slot:link>
            {{url("/verify/{$supporter->hash}")}}
        </x-slot:link>
        E-Mail Adresse bestätigen
    </x-email-button>
    <p>Vielen Dank!</p>
    <p>
        <b>Das Netzwerk «kindgerechte Betreuung jugendlicher Geflüchteter»</b><br>
        <a href="https://www.keine-kinder-zweiter-klasse.ch">www.keine-kinder-zweiter-klasse.ch</a>
    </p>
</x-email-layout>

</body>
</html>
