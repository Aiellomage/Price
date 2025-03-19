<?php

namespace Aiello\Price\Model;

use Aiello\Price\Model\ResourceModel\Test as ResourceModel;
use Magento\Framework\Model\AbstractModel;

class Test extends AbstractModel
{
    /**
     * @var string
     */
    protected $_eventPrefix = 'test_model';

    /**
     * Initialize magento model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
