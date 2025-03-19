<?php

namespace Aiello\Price\Model\ResourceModel\Test;

use Aiello\Price\Model\ResourceModel\Test as ResourceModel;
use Aiello\Price\Model\Test as Model;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'test_collection';

    /**
     * Initialize collection model.
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
