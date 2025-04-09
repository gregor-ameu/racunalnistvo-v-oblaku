<?php
$stevilo = $_GET["stevilo"] ?? null;
$kraj = $_GET["kraj"] ?? null;

$payload = [
    'stevilo' => $stevilo,
    'kraj' => $kraj,
];

try {
    $result = $lambda->invoke([
        'FunctionName' => 'posliPodatke',
        'InvocationType' => 'Event', // ali 'Event' za async klic
        'Payload' => json_encode($payload),
    ]);

    $response = $result->get('Payload')->getContents();
    echo "Odgovor Lambda funkcije: $response\n";
}
?>