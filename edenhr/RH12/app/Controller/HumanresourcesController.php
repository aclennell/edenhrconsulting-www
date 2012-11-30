<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');


/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class HumanResourcesController extends AppController {

	public $name = 'HumanResources';
	public $uses = array();

   
        public function index() { 
			$path = func_get_args();

			$title_for_layout = 'Home';
		$this->set(compact('title_for_layout'));
		$this->render();
	}        
        public function home() { 
			$path = func_get_args();

			$title_for_layout = 'Home';
		$this->set(compact('title_for_layout'));
		$this->render();
	}                      
	public function aboutus() { 
			$path = func_get_args();

			$title_for_layout = 'About us';
		$this->set(compact('title_for_layout'));
		$this->render();
	}
	public function contact() { 
			$path = func_get_args();

			$title_for_layout = 'Contact us';
		$this->set(compact('title_for_layout'));
		$this->render();
	}
	public function legal() { 
			$path = func_get_args();

			$title_for_layout = 'Terms and Conditions';
		$this->set(compact('title_for_layout'));
		$this->render();
	}	
	public function library() { 
		$path = func_get_args();

			$title_for_layout = 'Library';
		$this->set(compact('title_for_layout'));
		$this->render();
	}	
        public function ourservices() { 
		$path = func_get_args();

			$title_for_layout = 'Our Services';
		$this->set(compact('title_for_layout'));
		$this->render();
	}	
        public function people() { 
		$path = func_get_args();

			$title_for_layout = 'Our People';
		$this->set(compact('title_for_layout'));
		$this->render();
	}        
	public function testimonials() { 
		$path = func_get_args();

			$title_for_layout = 'Testimonials';
		$this->set(compact('title_for_layout'));
		$this->render();
	}
        
        
	public function blog() { 
		$path = func_get_args();
		$title_for_layout = 'Blog';
		$this->set(compact('title_for_layout'));
		$this->render();
	}
	
	
}
