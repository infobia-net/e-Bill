<?php

namespace Revolut\Payment\Block\System\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Module\ModuleListInterface;
use Magento\Framework\Exception\LocalizedException;
use Revolut\Payment\Model\Helper\Logger;
use Revolut\Payment\Gateway\Config\Config;
use Revolut\Payment\Model\RevolutOrder;
use Magento\Framework\UrlInterface;
use Revolut\Payment\Model\Helper\ConstantValue;
use Revolut\Payment\Model\Helper\Api\RevolutWebhookApi;
use Magento\Framework\Session\SessionManagerInterface;

/**
 * Class WebhookSetup
 */
class ApplePayDomainSetup extends Field
{
    /**
     * @var string
     */
    protected $_template = 'Revolut_Payment::system/config/applepay_domain_setup.phtml';

    /**
     * @var ModuleListInterface
     */
    protected $moduleList;

    /**
     * @var Logger
     */
    protected $logger;
    
    /**
     * @var RevolutWebhookApi
     */
    protected $webhookApi;
    
    /**
     * @var Config
     */
    protected $config;
    
    /**
     * @var RevolutOrder
     */
    protected $revolutOrder;
    
    /**
     * @var UrlInterface
     */
    protected $urlHelper;
    
    /**
     * @var SessionManagerInterface
     */
    protected $session;

    /**
     * Webhook constructor.
     *
     * @param Context $context
     * @param Config $config
     * @param UrlInterface $urlHelper
     * @param SessionManagerInterface $session
     * @param Logger $logger
     * @param RevolutWebhookApi $webhookApi
     * @param RevolutOrder $revolutOrder
     * @param ModuleListInterface $moduleList
     * @param array $data
     */
    public function __construct(
        Context $context,
        Config $config,
        UrlInterface $urlHelper,
        SessionManagerInterface $session,
        Logger $logger,
        RevolutWebhookApi $webhookApi,
        RevolutOrder $revolutOrder,
        ModuleListInterface $moduleList,
        array $data = []
    ) {
        $this->logger = $logger;
        $this->config = $config;
        $this->urlHelper = $urlHelper;
        $this->session = $session;
        $this->webhookApi = $webhookApi;
        $this->revolutOrder = $revolutOrder;
        
        $this->moduleList = $moduleList;
        parent::__construct($context, $data);
    }

    public function getCacheLifetime()
    {
        return null;
    }
    
    /**
     * @return string
     */
    public function getApplePayDomainSetupAjaxUrl()
    {
        return $this->getUrl('revolut/applepay/setup', ['store' => $this->getRequest()->getParam('store', 0)]);
    }

    /**
     * @param  AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }

    /**
     * @param  AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        return $this->_toHtml();
    }
}
