<?php

namespace Revolut\Payment\Block\System\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\AbstractElement;
use \Magento\Framework\Module\ModuleListInterface;
use \Magento\Framework\Exception\LocalizedException;
use Revolut\Payment\Model\Helper\Logger;

class DownloadLogFile extends Field
{
    /**
     * @var string
     */
    protected $_template = 'Revolut_Payment::system/config/download_log_file.phtml';

    /**
     * @var ModuleListInterface
     */
    protected $moduleList;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * Webhook constructor.
     *
     * @param Context $context
     * @param Logger $logger
     * @param ModuleListInterface $moduleList
     * @param array $data
     */
    public function __construct(
        Context $context,
        Logger $logger,
        ModuleListInterface $moduleList,
        array $data = []
    ) {
        $this->logger = $logger;
        $this->moduleList = $moduleList;
        parent::__construct($context, $data);
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

    /**
     * @return mixed
     * @throws LocalizedException
     */
    public function getButtonHtml()
    {
        $button = $this->getLayout()->createBlock(
            'Magento\Backend\Block\Widget\Button'
        )->setData(
            [
                'id' => 'download-log-file',
                'label' => __('Download log file'),
            ]
        );
        return $button->toHtml();
    }

     /**
      * @return mixed
      */
    public function getDownloadDebugUrl()
    {
        return $this->getUrl('revolut/config/downloadDebug', ['version' => $this->getVersion()]);
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->moduleList->getOne('Revolut_Payment')['setup_version']; // @phpstan-ignore-line
    }
}
