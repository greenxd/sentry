<?php namespace Cartalyst\Sentry\Users;
/**
 * Part of the Sentry Package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sentry
 * @version    2.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

use Cartalyst\Sentry\Groups\GroupInterface;

interface ProviderInterface {

	/**
	 * Finds a user by the given user ID.
	 *
	 * @param  mixed  $id
	 * @return Cartalyst\Sentry\UserInterface
	 */
	public function findById($id);

	/**
	 * Finds a user by the login value.
	 *
	 * @param  string  $login
	 * @return Cartalyst\Sentry\UserInterface
	 */
	public function findByLogin($login);

	/**
	 * Finds a user by the given credentials.
	 *
	 * @param  array  $credentials
	 * @return Cartalyst\Sentry\UserInterface
	 * @throws Cartalyst\Sentry\UserNotFoundException
	 */
	public function findByCredentials(array $credentials);

	/**
	 * Creates a user.
	 *
	 * @param  array  $credentials
	 * @return Cartalyst\Sentry\Users\UserInterface
	 */
	public function create(array $credentials);

}