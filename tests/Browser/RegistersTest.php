<?php

namespace Tests\Browser;

use Faker\Factory;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistersTest extends DuskTestCase
{
    public function testAddRegisterSuccess()
    {
        $faker = Factory::create('pt_BR');

        $this->browse(function (Browser $browser) use ($faker) {
            $name = $faker->name;
            $email = $faker->email;

            $browser->visit('/registers/create')
                ->type('name', $name)
                ->type('email', $email)
                ->press('Salvar')
                ->assertPathIs('/registers')
                ->assertSee($name)
                ->assertSee($email);
        });
    }

    public function testAddRegisterValidation()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/registers/create')
                ->press('Salvar')
                ->assertPathIs('/registers/create')
                ->assertSee('The name field is required.')
                ->assertSee('The email field is required.');
        });
    }
}
