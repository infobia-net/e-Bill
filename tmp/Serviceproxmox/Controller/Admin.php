<?php
/**
 * BoxBilling
 *
 * @copyright BoxBilling, Inc (http://www.boxbilling.com)
 * @license   Apache-2.0
 *
 * Copyright BoxBilling, Inc
 * This source file is subject to the Apache-2.0 License that is bundled
 * with this source code in the file LICENSE
 */


namespace Box\Mod\Serviceproxmox\Controller;

use FOSSBilling\InjectionAwareInterface;

class Admin implements InjectionAwareInterface
{
    protected ?\Pimple\Container $di = null;

    public function setDi(\Pimple\Container $di): void
    {
        $this->di = $di;
    }

    /**
     * @return mixed
     */
    public function getDi(): ?\Pimple\Container
    {
        return $this->di;
    }


    public function fetchNavigation()
    {
        return array(
            'subpages'  =>  array(
                array(
                    'location'  => 'system',
                    'index'     => 140,
                    'label' => 'Proxmox servers',
                    'uri'   => $this->di['url']->adminLink('serviceproxmox'),
                    'class' => '',
                ),
            ),
        );
    }
    
    public function register(\Box_App &$app)
    {
        $app->get('/serviceproxmox',          'get_index', null, get_class($this));
        $app->get('/serviceproxmox/server/:id',     'get_server', array('id'=>'[0-9]+'), get_class($this));
    }

    public function get_index(\Box_App $app)
    {
        $this->di['is_admin_logged'];
        return $app->render('mod_serviceproxmox_index');
    }

    public function get_server(\Box_App $app, $id)
    {
        $api = $this->di['api_admin'];
        $server = $api->Serviceproxmox_server_get(array('server_id'=>$id));
        return $app->render('mod_serviceproxmox_server', array('server'=>$server));
    }
}
