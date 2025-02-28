<?php
/**
 * FreeKassa driver for Omnipay PHP payment library
 *
 * @link      https://github.com/hiqdev/omnipay-freekassa
 * @package   omnipay-freekassa
 * @license   MIT
 * @copyright Copyright (c) 2017, HiQDev (http://hiqdev.com/)
 */

namespace Omnipay\FreeKassa\Message;

/**
 * FreeKassa Abstract Request.
 */
abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{
    protected $zeroAmountAllowed = false;

    /**
     * Get the purse.
     * @return string purse
     */
    public function getPurse()
    {
        return $this->getParameter('purse');
    }

    /**
     * Set the purse.
     * @param string $purse purse
     * @return self
     */
    public function setPurse($value)
    {
        return $this->setParameter('purse', $value);
    }

    /**
     * Get the language.
     * @return string secret key
     */
    public function getLanguage()
    {
        return $this->getParameter('language');
    }

    /**
     * Set the language.
     * @param string $key secret key
     * @return self
     */
    public function setLanguage($value)
    {
        return $this->setParameter('language', $value);
    }

    /**
     * Get the email.
     * @return string secret key
     */
    public function getEmail()
    {
        return $this->getParameter('email');
    }

    /**
     * Set the email.
     * @param string $key secret key
     * @return self
     */
    public function setEmail($value)
    {
        return $this->setParameter('email', $value);
    }

    /**
     * Get the secret key.
     * @return string secret key
     */
    public function getSecretKey()
    {
        return $this->getParameter('secretKey');
    }

    /**
     * Set the secret key.
     * @param string $key secret key
     * @return self
     */
    public function setSecretKey($value)
    {
        return $this->setParameter('secretKey', $value);
    }


    /**
     * Get the secret key for notification signing.
     *
     * @return string secret key
     */
    public function getSecretKey2()
    {
        return $this->getParameter('secretKey2');
    }

    /**
     * Set the secret key for notification signing.
     *
     * @param string $value secret key
     *
     * @return self
     */
    public function setSecretKey2($value)
    {
        return $this->setParameter('secretKey2', $value);
    }

    public function getPs()
    {
        return $this->getParameter('ps');
    }

    public function setPs($value)
    {
        return $this->setParameter('ps', $value);
    }
}
