<?php

require __DIR__ . '/vendor/autoload.php';

use Unosend\Unosend;
use Unosend\UnosendException;

$client = new Unosend('un_YUp9yHlMtrGvuJqmH6kU_7eXJaU3gPcW');

echo "Testing PHP SDK...\n\n";

// Send an email
echo "Sending email...\n";
try {
    $email = $client->emails->send([
        'from' => 'hello@unosend.co',
        'to' => 'bittucreator@gmail.com',
        'subject' => 'Test from PHP SDK',
        'html' => '<h1>Hello from PHP!</h1><p>This email was sent using the official Unosend PHP SDK.</p>'
    ]);
    echo "Success! Email ID: " . $email['id'] . "\n";
} catch (UnosendException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
