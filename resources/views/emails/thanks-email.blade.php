<?php
$message = <<<EOD
Hallo 👋
Ich habe gerade einen Appell unterzeichnet, in dem ich den Regierungsrat auffordere, endlich menschenwürdige und kindgerechte Betreuungsstrukturen für jugendliche Geflüchtete zu schaffen. Es darf im Kanton Zürich keine Kinder zweiter Klasse geben!
Unterzeichnest du auch?
✍️ keine-kinder-zweiter-klasse.ch
EOD;
$post = <<<EOD
Keine Kinder zweiter Klasse! Der Regierungsrat hat die Pflicht, unbegleiteten minderjährigen Geflüchteten eine menschenwürdige und angemessene Betreuungsstruktur zur Verfügung zu stellen.
Unterzeichne jetzt auch den Appell!
✍️ keine-kinder-zweiter-klasse.ch
EOD;
$url = url("/");
?>
<x-email-layout>
    <x-slot:subject>
        Danke für Ihre Unterstützung, {$this->supporter->name}!
    </x-slot:subject>

    <p style="font-weight: bold; font-size: 2rem; margin-bottom: 0.25em; color: #8000FF">Liebe:r {{$supporter->name}}</p>
    <p>Vielen Dank, dass Sie sich für eine kindgerechte Betreuung von jugendlichen Geflüchteten einsetzen. Je mehr Menschen den öffentlichen Appell unterzeichnen, desto eher werden unsere Forderungen gehört. Können Sie darum den Appell mit Ihrem Umfeld teilen?</p>
    <p><a href="https://api.whatsapp.com/send?text={{ urlencode($message) }}">Jetzt via WhatsApp teilen.</a></p>
    <p><a href="https://t.me/share/url?url={{urlencode($url)}}&text={{ urlencode($message) }}">Jetzt via Telegram teilen.</a></p>
    <p><a href="https://www.facebook.com/sharer/sharer.php?u={{urlencode($url)}}">Jetzt via Facebook teilen.</a></p>
    <p><a href="https://twitter.com/intent/tweet?text={{ urlencode($post) }}&url={{urlencode($url)}}">Jetzt via Twitter teilen.</a></p>
    <br>
    <p><b>Danke für Ihre Unterstützung.</b> Wir sind sehr froh, wenn Sie den Link zum Aufruf in den Sozialen Medien teilen.</p>
    <p>
        <b>Das Netzwerk «kindgerechte Betreuung jugendlicher Geflüchteter»</b><br>
        <a href="https://www.keine-kinder-zweiter-klasse.ch">www.keine-kinder-zweiter-klasse.ch</a>
    </p>
</x-email-layout>

</body>
</html>
