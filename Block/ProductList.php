<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Genaker\Laragento\Block;

class ProductList extends \Magento\Framework\View\Element\Template
{

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getProducts()
    {
       
        $timeS = microtime(true);
        $db = new \Genaker\Laragento\DB();
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        /* Create a new product object */
        //$product = $objectManager->create(\Magento\Catalog\Model\Product::class);
        /* Get a request object singleton */
        $MagentoPDO = $objectManager->get(\Magento\Framework\App\ResourceConnection::class);

        $PDO = $MagentoPDO->getConnection();
        //var_dump($PDO);
	    $connection = $db->connect()->getConnection();
        $connection->enableQueryLog();
        //Your block code 
        echo "<pre>";

        $selectAttributes = ['name','description','price'];
        $EAVRows = ['row_id','attribute_id','value', 'store_id'];

        $attributesIds = \Laragento\Models\EavAttribute::select('attribute_id')->whereIn('attribute_code',[$selectAttributes])->get()->toArray();
       
        $products = \Laragento\Models\CatalogProductEntity::query()->limit(10)
                        ->with([
                            'catalog_product_entity_varchars' => function ($q) use ($attributesIds,$EAVRows){$q->select($EAVRows)->whereIn(
                                                            'attribute_id', $attributesIds
                                                            )->whereIn('store_id', [0, 1]);},
                            'url_rewrites' => function ($q) {$q->select(['entity_id', 'request_path', 'store_id'])->whereIn(
                                'store_id', [0, 1]
                                )->whereIn('entity_type',['product'])->whereNull('metadata');}
                        ])->get()->toArray();

        var_dump($products);
        $timeE = microtime(true);
        var_dump($connection->getQueryLog());
        echo $timeE - $timeS;
        echo "</pre>";
        return __('Hello Developer! This how to get the storename: %1 and this is the way to build a url: %2', $this->_storeManager->getStore()->getName(), $this->getUrl('contacts'));
    }
}

