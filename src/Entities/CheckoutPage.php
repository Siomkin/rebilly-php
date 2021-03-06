<?php
/**
 * This source file is proprietary and part of Rebilly.
 *
 * (c) Rebilly SRL
 *     Rebilly Ltd.
 *     Rebilly Inc.
 *
 * @see https://www.rebilly.com
 */

namespace Rebilly\Entities;

use Rebilly\Rest\Entity;

/**
 * Class CheckoutPage.
 */
final class CheckoutPage extends Entity
{
    /**
     * @return string
     */
    public function getName()
    {
        return $this->getAttribute('name');
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setName($value)
    {
        return $this->setAttribute('name', $value);
    }

    /**
     * @return string
     */
    public function getUriPath()
    {
        return $this->getAttribute('uriPath');
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setUriPath($value)
    {
        return $this->setAttribute('uriPath', $value);
    }

    /**
     * @return string
     */
    public function getPlanId()
    {
        return $this->getAttribute('planId');
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setPlanId($value)
    {
        return $this->setAttribute('planId', $value);
    }

    /**
     * @return string
     */
    public function getWebsiteId()
    {
        return $this->getAttribute('websiteId');
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setWebsiteId($value)
    {
        return $this->setAttribute('websiteId', $value);
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->getAttribute('redirectUrl');
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setRedirectUrl($value)
    {
        return $this->setAttribute('redirectUrl', $value);
    }

    /**
     * @return int
     */
    public function getRedirectTimeout()
    {
        return $this->getAttribute('redirectTimeout');
    }

    /**
     * @param int $value
     *
     * @return $this
     */
    public function setRedirectTimeout($value)
    {
        return $this->setAttribute('redirectTimeout', $value);
    }

    /**
     * @return bool
     */
    public function getIsActive()
    {
        return $this->getAttribute('isActive');
    }

    /**
     * @param bool $value
     *
     * @return $this
     */
    public function setIsActive($value)
    {
        return $this->setAttribute('isActive', $value);
    }

    /**
     * @return bool
     */
    public function getAllowCustomCustomerId()
    {
        return $this->getAttribute('allowCustomCustomerId');
    }

    /**
     * @param bool $value
     *
     * @return $this
     */
    public function setAllowCustomCustomerId($value)
    {
        return $this->setAttribute('allowCustomCustomerId', $value);
    }

    /**
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->getAttribute('createdTime');
    }
}
