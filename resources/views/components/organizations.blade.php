<?php

$orgas = glob(public_path('images/organizations/*{jpg,png,gif,svg}'), GLOB_BRACE);
asort($orgas);
$orgas = array_map(function($orga) {
    $orga = basename($orga);
    return [
        'name' => $orga,
        'url' => asset('images/organizations/' . $orga),
    ];
}, $orgas);
?>

<div class="mna-organizations-wrapper my-12">
    <div class="mna-organizations">
        @foreach ($orgas as $orga)
            <img src="{{ $orga['url'] }}" alt="Logo {{ $orga['name'] }}" loading="lazy"/>
        @endforeach
    </div>
</div>
