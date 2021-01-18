<?php


namespace App\Controller;

use App\Model\ProductRepository;
use App\Service\Container;
use App\Service\View;


class ProductDetails implements Controller
{
    private View $view;
    private ProductRepository $productRepository;

    public const ROUTE = 'productDetails';

    public function __construct(Container $container, ProductRepository $productRepository)
    {
        $this->view = $container->get(View::class);
        $this->productRepository = $productRepository;
    }

    public function action(): void
    {
        $this->view->addTemplate('layout.tpl');
        $this->view->addTlpParam('headline', 'Product Details');
        $this->view->addTlpParam('info', 'All infos about your product:');
        $this->view->addTlpParam('getProduct', 'get product:');
//        $this->view->addTlpParam('singleProduct', $this->productRepository->getProduct(2));
    }
}