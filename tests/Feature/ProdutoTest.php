<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProdutoTeste extends TestCase
{
    
    public function testListagem()
    {
      
        $response = $this->json('GET', 'http:///127.0.0.1:8000/api/produtos');

        $response->assertStatus(200);

        
    }
}
