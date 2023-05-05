<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Carbon\Carbon;

class Mytest extends TestCase
{
    use RefreshDatabase;//rafraichir la base de données a chaque fois qu'on refait un test
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_tored_to_db()
    {
        //test pour voir si un eement est stocké dans la base
        $response = $this->post('orders', ['label' => 'une nouvelle commande', 'sends_at' => carbon::tomorrow()]);

        $response->assertOk();
        $this->assertCount(1, Order::all());
    }
}
