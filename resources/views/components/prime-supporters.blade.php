<?php
// Read CSV file storage_path("app/prime-supporters.csv")
$primeSupporters = array_map('str_getcsv', file(storage_path("app/prime_supporters.csv")));
?>
<div class="mna-prime-supporters my-8">
    @foreach ($primeSupporters as $primeSupporter)
        <b>{{$primeSupporter[0]}},</b> {{$primeSupporter[1]}}@if (!$loop->last);@endif
    @endforeach
</div>
