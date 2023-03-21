<x-app-layout>

    <div class="mna-main-container">
        <div class="mna-main-content mt-8 md:mt-12">
            <x-app-logo />
            <x-lead />
            <p class="mt-6">In Zentrum Lilienberg, einer Grossunterkunft für unbegleitete minderjährige Geflüchtete (MNA), wurden im vergangenen Jahr gravierende Missstände festgestellt: Platzmangel wegen Überbelegung, der überladene Arbeitsalltag und zu wenig geschultes Personal verunmöglichen eine kindgerechte Betreuung der knapp 100 Jugendlichen.
            <p>Eine vom Regierungsrat in Auftrag gegebene externe Untersuchung hielt unmissverständlich fest: Das Kindeswohl der Jugendlichen ist akut gefährdet. Die Untersuchung zeigte, dass die groben Missstände keine Einzelfälle, sondern Folgen des Unterbringungs- und Betreuungssystem sind. Der laufende MNA-Unterbringungsvertrag läuft Ende Februar 2024 aus. Es ist Zeit für einen Neuanfang: Heute wird die Betreuung und Unterbringung von Kindern ohne Fluchterfahrung vom kantonalen Amt für Jugend- und Berufsberatung (AJB) organisiert, jene von MNAs vom kantonalen Sozialamt. Dieses Parallelsystem ist nicht tragbar. Die Unterbringung von MNAs soll in die Angebotsplanung der Kinder- und Jugendhilfe des AJB aufgenommen werden.</p>
            <p>Kinder sind in erster Linie Kinder: Für die Betreuung und die Unterbringung von MNAs sollen gleichwertige Standards gelten wie für Kinder und Jugendliche ohne Fluchterfahrung. Zudem müssen die spezifischen Unterstützungsbedürfnisse minderjähriger Geflüchteter berücksichtigt werden.</p>
            <p>Wir sind ein unabhängiges Netzwerk von Politiker:innen und Expert:innen - welche eng mit geflüchteten Jugendlichen zusammenarbeiten - und setzen uns für eine kindgerechte Betreuung von MNAs ein - Betreuung, die echte Integration ermöglicht.</p>
            <p>In einem umfassenden öffentlichen Papier stellen wir erprobte Modelle für die Betreuung geflüchteter Jugendlicher und deren Begleitung in die Selbständigkeit vor.</p>
            <p>Damit diese erfolgreichen Modelle auch im Kanton Zürich zum Zug kommen, muss das kantonale Betreuungs-, Begleitungs- und Unterbringungssystem geflüchteter Jugendlicher neu organisiert und finanziert werden.</p>
            <x-demands />
            <h2 class="text-2xl md:text-4xl font-black text-primary mb-6">Unsere Unterstützer:innen</h2>
            <x-testimonials />
            <x-organizations />
            <div class="mna-supporters-outer relative">
                <div class="mna-supporters text-xs<?= ($supportersTotal > 100) ? " mna-supporters--long" : "" ?>">
                    @foreach ($supporters as $supporter)
                        <?php
                        $content = "<b>{$supporter->name},</b> {$supporter->city} ({$supporter->zip})";
                        if ($supporter->details) {
                            $content .= ", {$supporter->details}";
                        }
                        if (!$loop->last) {
                            $content .= '; ';
                        }
                        ?>
                        {!! $content !!}
                    @endforeach
                </div>
                @if ($supportersTotal > 100)
                    <span class="mna-supporters__more absolute bottom-0 underline text-primary cursor-pointer">{{$supportersTotal - 100}} weitere Unterstützer:innen anzeigen</span>
                @endif
            </div>
        </div>
    </div>
    <aside class="mna-form-container">
        <x-signup-form />
    </aside>
    <div class="mt-20 w-full"></div>
</x-app-layout>
