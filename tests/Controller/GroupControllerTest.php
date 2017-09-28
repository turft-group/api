<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class GroupControllerTest extends TestCase
{

    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $this->post('/group', ['name' => 'Test'])->assertJson(
            ['created' => true]
        );
    }

    public function testShow()
    {
        $this->get('/group/1')->assertJson(
            ['id' => 1, 'name' => 'Test']
        );
    }
}
