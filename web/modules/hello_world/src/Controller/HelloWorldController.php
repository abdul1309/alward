<?php
/**
 * Created by PhpStorm.
 * User: ashaddad
 * Date: 20.07.18
 * Time: 14:10
 */
namespace Drupal\hello_world\Controller;

class HelloWorldController {
    public function hello() {
        return array(
            '#title' =>'Hello World',
            '#markup' => 'this is some content'
        );
    }
}