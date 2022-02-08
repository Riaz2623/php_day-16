<?php


namespace App\classes;


class Product
{
    protected $product =[];
    public function getAllProduct()
    {
        return [
            0=>[
                'id'=>1,
                'name'=>'T-Shirt',
                'category'=> 'Maan Fashin',
                'brand'=>'Yellow',
                'price'=>'550',
                'description'=>'Casio',
                'image'=>'s1.jpg'
            ],
            1=>[
                'id'=>2,
                'name'=>'Shirt',
                'category'=> 'Fashin',
                'brand'=>'Yellow',
                'price'=>'550',
                'description'=>'Casio',
                'image'=>'s2.jpg'
            ],
            2=>[
                'id'=>3,
                'name'=>'Panjabi',
                'category'=> 'Maan Fashin',
                'brand'=>'Yellow',
                'price'=>'550',
                'description'=>'Casio',
                'image'=>'s3.jpg'
            ],
            3=>[
                'id'=>4,
                'name'=>'Watch',
                'category'=> 'Maan Fashin',
                'brand'=>'Yellow',
                'price'=>'550',
                'description'=>'Casio',
                'image'=>'s4.jpg'
            ],

        ];
    }
    public function getProductById($id)
    {
        $this->product = $this->getAllProduct();
        foreach ($this->product as $product)
        {
            if($product['id']==$id)
            {
                return $product;
            }
        }
    }

}