<?php

namespace Revolut\Payment\Controller\Adminhtml\Config;

use Magento\Backend\App\Action;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\App\Response\Http\FileFactory;
use Magento\Framework\Filesystem\Driver\File;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\FileSystemException;

class DownloadDebug extends Action
{
    /**
     * @var DirectoryList
     */
    protected $directoryList;

    /**
     * @var File
     */
    protected $fileDriver;

    /**
     * @var FileFactory
     */
    protected $fileFactory;

    /**
     * DownloadDebug constructor.
     *
     * @param FileFactory $fileFactory
     * @param File $fileDriver
     * @param DirectoryList $directoryList
     * @param Action\Context $context
     */
    public function __construct(
        FileFactory $fileFactory,
        File $fileDriver,
        DirectoryList $directoryList,
        Action\Context $context
    ) {
        $this->fileFactory = $fileFactory;
        $this->fileDriver = $fileDriver;
        $this->directoryList = $directoryList;
        parent::__construct($context);
    }

    /**
     * @return ResponseInterface|Redirect|ResultInterface
     * @throws FileSystemException
     */
    public function execute()
    {
        $version = $this->getRequest()->getParam('version');
        $filename = "revolut_log_file_" . $version . "_" . date("Ymd") . ".log";
        $file = $this->directoryList->getPath("var") . "/log/revolut/debug.log";
        if ($this->fileDriver->isExists($file)) {
            return $this->fileFactory->create($filename, file_get_contents($file), "tmp"); // @phpstan-ignore-line
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        return $resultRedirect->setPath('*/*/');
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Revolut_Payment::settings');
    }
}
