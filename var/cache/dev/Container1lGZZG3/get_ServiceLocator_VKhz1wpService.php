<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.vKhz1wp' shared service.

return $this->privates['.service_locator.vKhz1wp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'authenticationUtils' => array('services', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService.php', true),
    'categoryRepository' => array('privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService.php', true),
    'customerRepository' => array('privates', 'App\\Repository\\CustomerRepository', 'getCustomerRepositoryService.php', true),
));
