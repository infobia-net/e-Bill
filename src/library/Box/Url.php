<?php

/**
 * FOSSBilling
 *
 * @copyright FOSSBilling (https://www.fossbilling.org)
 * @license   Apache-2.0
 *
 * This file may contain code previously used in the BoxBilling project.
 * Copyright BoxBilling, Inc 2011-2021
 *
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 */


class Box_Url implements \FOSSBilling\InjectionAwareInterface
{
    protected ?\Pimple\Container $di;
    protected $baseUri;

    public function setDi(\Pimple\Container $di): void
    {
        $this->di = $di;
    }

    public function getDi(): ?\Pimple\Container
    {
        return $this->di;
    }

    public function setBaseUri($baseUri)
    {
        $this->baseUri = $baseUri;
    }

    /**
     * Generates a URL
     */
    public function get($uri)
    {
        return $this->baseUri . $uri;
    }

    /**
     * @param string $uri
     */
    public function link($uri = null, $params = array())
    {
        $uri = trim($uri, '/');
        $link = $this->baseUri . $uri;
        if (!empty($params)) {
            $link .= '?' . http_build_query($params);
        }


        return $link;
    }

    public function adminLink($uri, $params = array())
    {
        $uri = trim($uri, '/');
        $prefix = $this->di['config']['admin_area_prefix'];
        $uri = $prefix . '/' . $uri;
        return $this->link($uri, $params);
    }
}
