<?php

namespace Tests\Feature;
use Illuminate\Support\Str;
// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\loginTest;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function test_login_page(){
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_singup_page(){
        $response = $this->get('/singup');
        $response->assertStatus(200);
    }

//    public  function test_succes_page(){
//        $user = factory(loginTest::class)->create();
//
//        $response = $this->actingAs($user)->get('/succes');
//
//        $response->assertStatus(200);
//
//        $this->assertNotNull(session()->get('user'));
//    }


    public function testBasicTest()
    {
        $data = 'Je suis petit';
        $this->assertTrue(Str::startsWith($data, 'Je'));
        $this->assertFalse(Str::startsWith($data, 'Tu'));
        $this->assertSame(Str::startsWith($data, 'Tu'), false);
        $this->assertStringStartsWith('Je', $data);
        $this->assertStringEndsWith('petit', $data);
    }
}
