<?php

it('gets a successful response from home', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});
