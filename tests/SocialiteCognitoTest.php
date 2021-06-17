<?php

namespace KirschbaumDevelopment\SocialiteCognito\Tests;

use Orchestra\Testbench\TestCase;
use Laravel\Socialite\Contracts\Factory;
use Laravel\Socialite\SocialiteServiceProvider;
use KirschbaumDevelopment\SocialiteCognito\SocialiteCognitoProvider;
use KirschbaumDevelopment\SocialiteCognito\SocialiteCognitoServiceProvider;

class SocialiteCognitoTest extends TestCase
{
    /** @test */
    public function test_it_can_instantiate_the_cognito_driver(): void
    {
        $factory = $this->app->make(Factory::class);

        $provider = $factory->driver('cognito');

        $this->assertInstanceOf(SocialiteCognitoProvider::class, $provider);
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('services.cognito', [
            'client_id' => 'cognito-client-id',
            'client_secret' => 'cognito-secret',
            'redirect' => 'https://your-callback-url',
        ]);
    }

    protected function getPackageProviders($app)
    {
        return [
            SocialiteServiceProvider::class,
            SocialiteCognitoServiceProvider::class,
        ];
    }
}
