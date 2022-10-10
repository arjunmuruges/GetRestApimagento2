<?php
namespace Arjun\GetRestApi\Model;

use Arjun\GetRestApi\Api\ProductByInterface;

class ProductBy implements ProductByInterface
{

    /**
     * @var \Magento\Catalog\Api\ProductRepositoryInterface
     */
    protected $productRepository;

    public function __construct(
       \Magento\Catalog\Api\ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getProductById($id)
    {
        return $this->productRepository->getById($id);
    }
}