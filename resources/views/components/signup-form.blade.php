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

<div class="mna-signup-form-outer">
    <button class="mna-open-signup-form text-xl w-full text-center p-2 bg-primary text-secondary font-bold mb-2 border-2 border-secondary">Unterschreiben <i class="icofont-pencil"></i></button>
    <div class="mna-signup-form-wrapper w-full bg-secondary text-primary p-8 border-white border-4 border-solid shadow-2xl">
        <div class="mna-form-step">
            <h2 class="font-black text-2xl md:text-4xl leading-none">Unterschreiben Sie unseren Appell!</h2>
            <p class="mt-3">Unterstützen Sie diesen Appell mit Ihrer Unterschrift - damit geflüchtete Minderjährige im Kanton Zürich nicht länger wie Kinder zweiter Klasse behandelt werden.</p>
            <p>Bereits {{\App\Models\Supporter::where('enabled', true)->count()}} Personen haben unseren Brief unterschrieben!</p>
            <form action="/supporters" method="POST" class="mna-supporter-form">
                @csrf
                <div class="mt-4">
                    <label for="name" class="block text-xs font-bold">Vor- und Nachname</label>
                    <div class="mt-1 shadow-lg border border-primary border-opacity-50">
                        <input id="name" name="name" type="text" class="form-input block w-full" required/>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="email" class="block text-xs font-bold">E-Mail</label>
                    <div class="mt-1 shadow-lg border border-primary border-opacity-50">
                        <input id="email" name="email" type="email" class="form-input block w-full" required/>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="city" class="block text-xs font-bold">Ort</label>
                    <div class="mt-1 shadow-lg border border-primary border-opacity-50">
                        <input id="city" name="city" type="text" class="form-input block w-full" required/>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="zip" class="block text-xs font-bold">PLZ</label>
                    <div class="mt-1 shadow-lg border border-primary border-opacity-50">
                        <input id="zip" name="zip" type="text" class="form-input block w-full" required/>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="details" class="block text-xs font-bold">Beruf, Amt, Organisation</label>
                    <div class="mt-1 shadow-lg border border-primary border-opacity-50">
                        <input id="details" name="details" type="text" class="form-input block w-full" placeholder="optional"/>
                    </div>
                </div>
                <div class="mt-4 flex">
                    <input id="public" name="public" type="checkbox" class="form-input mr-2" checked value="1" />
                    <label for="public" class="block text-xs w-full">Mein Name soll auf der Webseite angezeigt werden.</label>
                </div>
                <div class="mt-4 flex">
                    <input id="optin" name="optin" type="checkbox" class="form-input mr-2" checked value="1" />
                    <label for="optin" class="block text-xs w-full">Ich bin einverstanden, dass mich das Komitee auf den Laufenden hält.</label>
                </div>
                <input type="hidden" name="source" value="{{ session("source") }}">
                <button type="submit" class="mt-4 bg-primary w-full p-2 font-bold text-secondary" onclick="">Absenden</button>
            </form>
        </div>
        <div class="mna-form-step mna-form-thanks hidden">
            <h2 class="font-black text-2xl md:text-4xl leading-none">Vielen Dank für Ihre Unterschrift!</h2>
            <p class="mt-3">Vielen Dank, dass Sie sich für eine kindgerechte Betreuung von jugendlichen Geflüchteten einsetzen. <b>Je mehr Menschen den öffentlichen Appell unterzeichnen, desto eher werden unsere Forderungen gehört.</b> Können Sie darum den Appell mit Ihrem Umfeld teilen?</p>
            <div class="mna-share-buttons flex flex-wrap gap-4 mt-4" data-share-url="{{ urlencode($url) }}"
                data-share-text="{{
                    urlencode($message);
                }}"
                data-share-tweet="{{
                    urlencode($post);
                }}"
            >
                <a class="!text-sm mna-button mna-share cursor-pointer" data-share-type="whatsapp">Auf WhatsApp teilen</a>
                <a class="!text-sm mna-button mna-share cursor-pointer" data-share-type="telegram">Auf Telegram teilen</a>
                <a class="!text-sm mna-button mna-share cursor-pointer" data-share-type="facebook">Auf Facebook teilen</a>
                <a class="!text-sm mna-button mna-share cursor-pointer" data-share-type="twitter">Auf Twitter teilen</a>
            </div>
        </div>
    </div>
</div>
