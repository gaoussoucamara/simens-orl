<?php

/**
 * File for Login Form Class
 *
 * @category  User
 * @package   User_Form
 * @author    Marco Neumann <webcoder_at_binware_dot_org>
 * @copyright Copyright (c) 2011, Marco Neumann
 * @license   http://binware.org/license/index/type:new-bsd New BSD License
 */

/**
 * @namespace
 */

namespace Admin\Form;

/**
 * @uses Zend\Form\Form
 */

use Zend\Form\Form;

/**
 * Login Form Class
 *
 * Login Form
 *
 * @category  User
 * @package   User_Form
 * @copyright Copyright (c) 2011, Marco Neumann
 * @license   http://binware.org/license/index/type:new-bsd New BSD License
 */
class LoginForm extends Form
{
	/**
	 * Initialize Form
	 */

	public function __construct($name = null)
	{
		// we want to ignore the name passed
		parent::__construct();

		$this->add(array(
			'name' => 'id',
			'type' => 'Hidden',
		));
		$this->add(array(
			'name' => 'username',
			'type' => 'Text',
			'attributes' => array(
				'id' => 'username',
				'required' => true,
				'class' => 'form-control',

			),
		));
		$this->add(array(
			'name' => 'password',
			'type' => 'Password',
			'attributes' => array(
				'id' => 'password',
				'class' => 'form-control',
				'required' => true,
			),
		));
		$this->add(array(
			'name' => 'submit',
			'type' => 'Submit',
			'attributes' => array(
				'value' => 'Connexion',
				'id' => 'submit',
				//'class'=> 'btn btn-success'
			),
		));
	}
}
