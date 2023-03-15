<?php

if ($success) {
    $content = [
        "title" => "Ihre E-Mail Adresse wurde bestätigt!",
        "content" => "Danke, dass Sie ihre E-Mail Adresse bestätigt haben. Sie werden, falls Sie dazu zugestimmt haben, nun auf unserer Webseite angezeigt."
    ];
} else {
    $content = [
        "title" => "Leider ist etwas schiefgelaufen",
        "content" => "Leider konnten wir Ihre E-Mail Adresse nicht bestätigen. Sollte das Problem weiterhin bestehen, bitte melden Sie sich bei uns an <a href='mailto:info@keinekinderzweiterklasse.ch' class='underline'>info@keinekinderzweiterklasse.ch</a>."
    ];
}

?>

<x-app-layout>
    <div class="mna-verify-container h-screen w-full bg-primary text-secondary flex justify-center items-center">
        <div class="max-w-xl text-center py-4">
            <h1 class="font-black text-2xl md:text-4xl mb-4">{!! $content["title"] !!}</h1>
            <p>{!! $content["content"] !!}</p>
            <a href="{{url("/")}}" class="mna-button mna-button-neg inline-block mt-4">Zurück zur Startseite</a>
        </div>
    </div>
</x-app-layout>
