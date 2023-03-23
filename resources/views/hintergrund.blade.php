<x-app-layout>

    <div class="mna-main-container">
        <div class="mna-main-content mt-8 md:mt-12">
            <x-app-logo />
            <h1 class="mt-12 text-2xl md:text-4xl font-black text-primary mb-6">Mehr Informationen zu unserem Appell</h1>
            <p>Unser Netzwerk hat in mehrmonatiger Arbeit ein White Paper erarbeitet, welches erprobte Modelle für die Betreuung geflüchteter Jugendlicher und deren Begleitung in die Selbständigkeit aufzeigt und  Forderungen enthält, wie eine kindgerechte Betreuung von jugendlichen Geflüchteten im Kanton Zürich aussehen sollte.</p>
            <x-document-reader doc="/media/pdf/White-Paper finale Fassung 2023-2.pdf" class="my-8"/>
            <p>Weiter haben wir eine Checkliste von Bedingungen erarbeitet, welche im Rahmen einer submissionsrechtlichen Ausschreibung erfüllt sein müssen, um künftige Kindswohlgefährdungen auszuschliessen.</p>
            <p>Wir laden Sie herzlich ein, sich mit uns in Kontakt zu setzen, um weitere Informationen zu erhalten.</p>
            <x-document-reader doc="/media/pdf/20230314Konzeptevaluation Zusammenfassung.finaldocx.pdf" class="my-8"/>
            <a href="{{url("media/zip/Medienmappe.zip")}}" class="mt-8 bg-primary w-fit block p-2 font-bold text-secondary">Zur Medienmappe</a>
        </div>
    </div>
    <aside class="mna-form-container">
        <x-signup-form />
    </aside>
    <div class="mt-20 w-full"></div>
</x-app-layout>
