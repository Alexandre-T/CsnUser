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

namespace CsnUser\Options;

use Zend\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions
{
    /**
     * Turn off strict options mode
     */
    protected $__strictMode__ = false;

    /**
     * @var string
     */
    protected $loginRedirectRoute = 'user';

    /**
     * @var string
     */
    protected $logoutRedirectRoute = 'user';

    /**
     * @var string
     */
    protected $senderEmailAdress = 'no-reply@example.com';

    /**
     * @var bool
     */
    protected $navMenu = true;
    
    /**
     * @var int
     */
    protected $captchaCharNum = 3;
    
    /**
     * @var int
     */
    protected $sessionLifeTime = 15;

    /**
     * @var bool
     */
    protected $displayExceptions = true;
    
    /**
     * set login redirect route
     *
     * @param  string        $loginRedirectRoute
     * @return ModuleOptions
     */
    public function setLoginRedirectRoute($loginRedirectRoute)
    {
        $this->loginRedirectRoute = $loginRedirectRoute;

        return $this;
    }

    /**
     * get login redirect route
     *
     * @return string
     */
    public function getLoginRedirectRoute()
    {
        return $this->loginRedirectRoute;
    }

    /**
     * set logout redirect route
     *
     * @param  string        $logoutRedirectRoute
     * @return ModuleOptions
     */
    public function setLogoutRedirectRoute($logoutRedirectRoute)
    {
        $this->logoutRedirectRoute = $logoutRedirectRoute;

        return $this;
    }

    /**
     * get logout redirect route
     *
     * @return string
     */
    public function getLogoutRedirectRoute()
    {
        return $this->logoutRedirectRoute;
    }

    /**
     * set sender email address
     *
     * @param  string        $senderEmailAdress
     * @return ModuleOptions
     */
    public function setSenderEmailAdress($senderEmailAdress)
    {
        $this->senderEmailAdress = $senderEmailAdress;

        return $this;
    }

    /**
     * get sender email address
     *
     * @return string
     */
    public function getSenderEmailAdress()
    {
        return $this->senderEmailAdress;
    }

    /**
     * set visibility of navigation menu
     *
     * @param  bool          $navMenu
     * @return ModuleOptions
     */
    public function setNavMenu($navMenu)
    {
        $this->navMenu = $navMenu;

        return $this;
    }

    /**
     * get visibility of navigation menu
     *
     * @return string
     */
    public function getNavMenu()
    {
        return $this->navMenu;
    }

    /**
     * set captcha number of characters
     *
     * @return int
     */
    public function setCaptchaCharNum($captchaCharNum)
    {
        $this->captchaCharNum = $captchaCharNum;
    
        return $this->captchaCharNum;
    }
    
    /**
     * get captcha number of characters
     *
     * @return int
     */
    public function getCaptchaCharNum()
    {
        return $this->captchaCharNum;
    }
    
    /**
     * set session life time
     *
     * @param  bool $sessionLifeTime
     * @return ModuleOptions
     */
    public function setSessionLifeTime($sessionLifeTime)
    {
        $this->displayExceptions = $sessionLifeTime;
    
        return $this;
    }
    
    /**
     * get session life time
     *
     * @return int
     */
    public function getSessionLifeTime()
    {
        return $this->sessionLifeTime;
    }
    
    /**
     * set display exceptions
     *
     * @param  bool        $displayExceptions
     * @return ModuleOptions
     */
    public function setDisplayExceptions($displayExceptions)
    {
        $this->displayExceptions = $displayExceptions;
      
        return $this;
    }
    
    /**
     * get visibility of exception error messages
     *
     * @return bool
     */
    public function getDisplayExceptions()
    {
        return $this->displayExceptions;
    }
}
