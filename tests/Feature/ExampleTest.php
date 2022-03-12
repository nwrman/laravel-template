<?php

declare(strict_types=1);

it('gets a successful response from home', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});
