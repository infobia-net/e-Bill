<?php
namespace Revolut\Payment\Model\ResourceModel;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Custom Config Resource Model
 */
class CustomConfigModel extends AbstractDb
{
    /**
     * Define main table
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('core_config_data', 'config_id');
    }

    /**
     * Get config value
     *
     * @param  string $path
     * @param  string $scope
     * @param  int    $scopeId
     * @return int
     */
    public function getConfig($path, $scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT, $scopeId = 0)
    {
        $connection = $this->getConnection();
        $select = $connection->select()->from( // @phpstan-ignore-line
            $this->getMainTable()
        )->where(
            'path = ?',
            $path
        )->where(
            'scope = ?',
            $scope
        )->where(
            'scope_id = ?',
            $scopeId
        );
        $row = $connection->fetchRow($select); // @phpstan-ignore-line
        return isset($row['value']) ? $row['value'] : 0; // @phpstan-ignore-line
    }
}
