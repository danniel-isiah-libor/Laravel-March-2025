<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('sample test case', function () {
    $this->assertTrue(true);
});
