<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\ProductCategoryModel;


class ProductController extends BaseController
{
    private $productmodel;
    private $categoryModel;
    public function __construct()
    {
        $this->productmodel = new \App\Models\ProductModel();
        $this->categoryModel = new \App\Models\ProductCategoryModel();
      
    }
    public function delete($ProductID)
    {
        $this->productmodel->delete($ProductID);
        return redirect()->to('/product');
    }

    public function edit($ProductID) 
    {
        // Load the ProductCategoryModel to fetch categories
        $categoryModel = new \App\Models\ProductCategoryModel();
        $data = [
            'product' => $this->productmodel->findAll(),
            'pro' => $this->productmodel->where('ProductID', $ProductID)->first(),
            'categories' => $categoryModel->findAll(), 
        ];
        return view('products', $data);
    }

    public function save()
    {
        $ProductID = $_POST['ProductID'];
        $data = [
      'ProductName' => $this->request->getVar('ProductName'),
      'ProductDescription' => $this->request->getVar('ProductDescription'),
      'ProductCategory' => $this->request->getVar('ProductCategory'),
      'ProductQuantity' => $this->request->getVar('ProductQuantity'),
      'ProductPrice' => $this->request->getVar('ProductPrice'),
        ];

        if ($ProductID!= null) {
            $this->productmodel->set($data)->where('ProductID', $ProductID)->update();
        }
        else {
        $this->productmodel->save($data);
        }
        return redirect()->to('/product');
    }
   


   public function saveCategory()
{
    $newCategory = $this->request->getVar('NewProductCategory');

    // Insert the new category into the ProductCategoryModel
    if (!empty($newCategory)) {
        $data = [
            'ProductCategory' => $newCategory,
        ];
        $this->categoryModel->insert($data);
    }

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