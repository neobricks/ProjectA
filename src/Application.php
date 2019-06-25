<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.3.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App;

use Cake\Core\Configure;
use Cake\Core\Exception\MissingPluginException;
use Cake\Error\Middleware\ErrorHandlerMiddleware;
use Cake\Http\BaseApplication;
use Cake\Routing\Middleware\AssetMiddleware;
use Cake\Routing\Middleware\RoutingMiddleware;

/**
 * Application setup class.
 *
 * This defines the bootstrapping logic and middleware layers you
 * want to use in your application.
 */
class Application extends BaseApplication
{
    /**
     * {@inheritDoc}
     */
    public function bootstrap()
    {
        $this->addPlugin('ADmad/SocialAuth', ['bootstrap' => true, 'routes' => true]);

        $this->addPlugin('Migrations');

        // Call parent to load bootstrap from files.
        parent::bootstrap();

        if (PHP_SAPI === 'cli') {
            try {
                $this->addPlugin('Bake');
            } catch (MissingPluginException $e) {
                // Do not halt if the plugin is missing
            }

            $this->addPlugin('Migrations');
        }

        /*
         * Only try to load DebugKit in development mode
         * Debug Kit should not be installed on a production system
         */
        if (Configure::read('debug')) {
            $this->addPlugin(\DebugKit\Plugin::class);
        }
    }

    /**
     * Setup the middleware queue your application will use.
     *
     * @param \Cake\Http\MiddlewareQueue $middlewareQueue The middleware queue to setup.
     * @return \Cake\Http\MiddlewareQueue The updated middleware queue.
     */
    public function middleware($middlewareQueue)
    {
        $middlewareQueue
            // Catch any exceptions in the lower layers,
            // and make an error page/response
            ->add(new ErrorHandlerMiddleware(null, Configure::read('Error')))

            // Handle plugin/theme assets like CakePHP normally does.
            ->add(new AssetMiddleware([
                'cacheTime' => Configure::read('Asset.cacheTime')
            ]))

            // Add routing middleware.
            // Routes collection cache enabled by default, to disable route caching
            // pass null as cacheConfig, example: `new RoutingMiddleware($this)`
            // you might want to disable this cache in case your routing is extremely simple
            ->add(new RoutingMiddleware($this, '_cake_routes_'));

        // Be sure to add SocialAuthMiddleware after RoutingMiddleware
        $middlewareQueue->add(new \ADmad\SocialAuth\Middleware\SocialAuthMiddleware([
            'requestMethod' => 'POST',
            'loginUrl' => '/',
            'loginRedirect' => '/',
            'userEntity' => false,
            'userModel' => 'Users',
            'socialProfileModel' => 'ADmad/SocialAuth.SocialProfiles',
            'finder' => 'all',
            'fields' => [
                'password' => 'password',
            ],
            'sessionKey' => 'User',
            'getUserCallback' => 'getUser',
            'serviceConfig' => [
                'provider' => [
                    'facebook' => [
                        'applicationId' => '2290766341189267',
                        'applicationSecret' => '6f8f6ed49fd900d207d80a11fcdb952b',
                        'scope' => [
                            'email',
                        ],
                        'fields' => [
                            'email',
                        ],
                    ],
                    'twitter' => [
                        'applicationId' => 'xcluHve9th43iBbaEuPpWhaZo',
                        'applicationSecret' => '1AFFahCv3aoiU4tKsfrpwJT5sh3h9RJr96sacGlaVq7w3Wizz5',
                        'scope' => [
                            'email',
                        ],
                        'fields' => [
                            'email',
                        ],
                    ],
                    'twitch' => [
                        'applicationId' => 'l3qc765ybr5qjfg2xifp1s4mkufhao',
                        'applicationSecret' => '7wxcahofa4p05idfp8k7yon8uxwgln',
                        'scope' => [
                            'user_read',
                        ],
                        'fields' => [
                            'email',
                        ],
                    ],
                    'google' => [
                        'applicationId' => '95121669685-hcv820sr467k08jei1egh84vs50kdqr7.apps.googleusercontent.com',
                        'applicationSecret' => '8dvY32AlKhRQYTBK9TtdnEba',
                        'scope' => [
                            'https://www.googleapis.com/auth/userinfo.email',
                            'https://www.googleapis.com/auth/userinfo.profile',
                        ],
                    ],
                ],
            ],
            'httpClient' => '\ADmad\SocialAuth\Http\Client',
            'logErrors' => true,
        ]));

        return $middlewareQueue;
    }
}
