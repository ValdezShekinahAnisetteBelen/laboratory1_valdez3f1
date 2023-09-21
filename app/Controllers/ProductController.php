<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\ProductCategoryModel;


class ProductController extends BaseController
{
    private $productmodel;
    private $product1;
    public function __construct()
    {
        $this->productmodel = new \App\Models\ProductModel();
      
    }
    public function save()
    {
        $data = [
      'ProductName' => $this->request->getVar('ProductName'),
      'ProductDescription' => $this->request->getVar('ProductDescription'),
      'ProductCategory' => $this->request->getVar('ProductCategory'),
      'ProductQuantity' => $this->request->getVar('ProductQuantity'),
      'ProductPrice' => $this->request->getVar('ProductPrice'),
        ];

        $this->productmodel->save($data);
        return redirect()->to('/product');
    }
    public function product($product)
    {
        echo $product;
    }
    public function index()
    {
       
    }
    public function shekinah()
    {
        // Load the ProductCategoryModel to fetch categories
        $categoryModel = new \App\Models\ProductCategoryModel();
        
        $data['product'] = $this->productmodel->findAll();
        $data['categories'] = $categoryModel->findAll(); // Fetch all product categories
        
        return view('products', $data);
    }
    
}
