<?php
/**
 * CsnUser - Coolcsn Zend Framework 2 User Module
 * 
 * @link https://github.com/coolcsn/CsnUser for the canonical source repository
 * @copyright Copyright (c) 2005-2013 LightSoft 2005 Ltd. Bulgaria
 * @license https://github.com/coolcsn/CsnUser/blob/master/LICENSE BSDLicense
 * @author Stoyan Cheresharov <stoyan@coolcsn.com>
 * @author Svetoslav Chonkov <svetoslav.chonkov@gmail.com>
 * @author Nikola Vasilev <niko7vasilev@gmail.com>
 * @author Stoyan Revov <st.revov@gmail.com>
 * @author Martin Briglia <martin@mgscreativa.com>
 */

namespace CsnUser;

use Zend\Session\Container;
use Zend\Session\SessionManager;
use Zend\Session\Config\SessionConfig;
use Zend\EventManager\EventInterface;

class Module
{
    /*public function onBootstrap(EventInterface $event)
    {
        $serviceManager = $event->getApplication()->getServiceManager();
        $sessionLifeTime = $serviceManager->get('csnuser_module_options')->getSessionLifeTime();
        $host = $serviceManager->get('Request')->getUri()->getHost();
        
        $sessionConfig = new SessionConfig();
        $sessionConfig->setOptions(array(
            'cookie_httponly' => true,
            'cookie_domain' => $host,
            'gc_maxlifetime' => 60*$sessionLifeTime,
            'remember_me_seconds' => 60*$sessionLifeTime,
        ));
        
        $sessionManager = new SessionManager($sessionConfig);
        $sessionManager->start();
        Container::setDefaultManager($sessionManager);
    }*/

    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/../../src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
