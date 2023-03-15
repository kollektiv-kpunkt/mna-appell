<div class="mna-signup-form-outer">
    <button class="mna-open-signup-form text-xl w-full text-center p-2 bg-primary text-secondary font-bold mb-2 border-2 border-secondary">Unterschreiben <i class="icofont-pencil"></i></button>
    <div class="mna-signup-form-wrapper w-full bg-secondary text-primary p-8 border-white border-4 border-solid shadow-2xl">
        <div class="mna-form-step">
            <h2 class="font-black text-2xl md:text-4xl leading-none">Unterschreiben Sie unseren Brief!</h2>
            <p class="mt-3">Unterstützen Sie diesen Appell mit Ihrer Unterschrift - damit geflüchtete Minderjährige im Kanton Zürich nicht länger wie Kinder zweiter Klasse behandelt werden.</p>
            <form action="/supporters" method="POST" class="mna-supporter-form">
                @csrf
                <div class="mt-4">
                    <label for="name" class="block text-xs font-bold">Name</label>
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
                <button type="submit" class="mt-4 bg-primary w-full p-2 font-bold text-secondary" onclick="">Absenden</button>
            </form>
        </div>
        <div class="mna-form-step mna-form-thanks hidden">
            <h2 class="font-black text-2xl md:text-4xl leading-none">Vielen Dank für Ihre Unterschrift!</h2>
            <p class="mt-3">Vielen Dank für Ihre Unterstützung. Wir haben Ihnen soeben eine E-Mail geschickt. <b>Bitte bestätigen Sie ihre Adresse, indem Sie auf den Link im E-Mail klicken.</b></p>
            <p>Teilen Sie diesen Appell mit Ihrem Umfeld, damit wir den Druck auf den Regierungsrat erhöhen können!</p>
            <div class="mna-share-buttons flex flex-wrap gap-4 mt-4" data-share-url="{{url()->current()}}"
                data-share-text="{{
                    urlencode("Hallo 👋
Ich habe gerade einen Brief unterzeichnet, in dem ich Silvia Steiner dazu auffordere, ihr Stipendiendebakel aufzuräumen. Sie und ihre Bildungsdirektion sind schuld daran, dass unzählige junge Erwachsene in den finanziellen Ruin getrieben werden. Das darf nicht länger sein!
Unterzeichnest du auch?");
                }}"
                data-share-tweet="{{
                    urlencode("Ich fordere @silviasteiner dazu auf, ihr Stipendiendebakel endlich aufzuräumen, denn sie ist schuld daran, dass viele junge Erwachsene in den finanziellen Ruin getrieben werden. Das darf nicht sein!
Unterzeichnest du auch?
#Stipendiendebakel");
                }}"
            >
                <a class="!text-sm mna-button mna-share" data-share-type="whatsapp">Auf WhatsApp teilen</a>
                <a class="!text-sm mna-button mna-share" data-share-type="telegram">Auf Telegram teilen</a>
                <a class="!text-sm mna-button mna-share" data-share-type="facebook">Auf Facebook teilen</a>
                <a class="!text-sm mna-button mna-share" data-share-type="twitter">Auf Twitter teilen</a>
            </div>
        </div>
    </div>
</div>
