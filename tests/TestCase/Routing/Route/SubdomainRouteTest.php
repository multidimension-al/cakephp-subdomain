<?php
/**
 *      __  ___      ____  _     ___                           _                    __
 *     /  |/  /_  __/ / /_(_)___/ (_)___ ___  ___  ____  _____(_)___  ____   ____ _/ /
 *    / /|_/ / / / / / __/ / __  / / __ `__ \/ _ \/ __ \/ ___/ / __ \/ __ \ / __ `/ /
 *   / /  / / /_/ / / /_/ / /_/ / / / / / / /  __/ / / (__  ) / /_/ / / / // /_/ / /
 *  /_/  /_/\__,_/_/\__/_/\__,_/_/_/ /_/ /_/\___/_/ /_/____/_/\____/_/ /_(_)__,_/_/
 *
 * CakePHP Plugin : CakePHP Subdomain Routing
 * Copyright (c) Multidimension.al (http://multidimension.al)
 * Github : https://github.com/multidimension-al/cakephp-subdomains
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE file
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright  Copyright © 2016-2017 Multidimension.al (http://multidimension.al)
 * @link       https://github.com/multidimension-al/cakephp-subdomains Github
 * @license    http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace Multidimensional\Subdomains\Tests\TestCase\Routing\Route;

use Cake\Core\Configure;
use Cake\TestSuite\TestCase;
use Multidimensional\Subdomains\Routing\Route\SubdomainRoute;

class SubdomainRouteTest extends TestCase
{

    private $subdomainRoute;

    /**
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        Configure::write('Multidimensional/Subdomains.Subdomains', ['admin']);
        $this->subdomainRoute = new SubdomainRoute();
    }

    /**
     * @return void
     */
    public function tearDown()
    {
        unset($this->subdomainRoute);
    }

    /**
     * @return void
     */
    public function testParse()
    {
        $this->markTestIncomplete('Not implemented yet.');
        /*$url = ['prefix' => 'admin', 'Controller' => 'pages', 'action' => 'index'];
        $response = $this->subdomainRoute->parse($url, '');
        //assertSame
        $url = ['prefix' => 'users', 'Controller' => 'pages', 'action' => 'index'];
        $response = $this->subdomainRoute->parse($url, '');
        //assertwrong*/
    }

    /**
     * @return void
     */
    public function testMatch()
    {
        $this->markTestIncomplete('Not implemented yet.');
        /*$url = ['prefix' => 'admin', 'Controller' => 'pages', 'action' => 'index'];
        $response = $this->subdomainRoute->match($url, '');
        //assertSame
        $url = ['prefix' => 'users', 'Controller' => 'pages', 'action' => 'index'];
        $response = $this->subdomainRoute->match($url, '');
        //assertwrong*/
    }
}
