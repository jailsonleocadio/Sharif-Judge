<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Dashboard_test extends TestCase
{
	public function test_index()
	{
        $this->login();
        $output = $this->request('GET','dashboard');
		$this->assertContains('<title>Dashboard - Sharif Judge</title>', $output);
	}

    public function login() {
        $output = $this->request('POST','login', ['username' => 'aluno', 'password' => '123456']);
    }

}
