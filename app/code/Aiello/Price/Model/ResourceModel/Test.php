<?php

namespace Aiello\Price\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Test extends AbstractDb
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'test_resource_model';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('test', 'entity_id');
        $this->_useIsObjectNew = true;
    }
}
