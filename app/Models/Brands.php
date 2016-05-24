<?php

namespace App\Models;

/**
 *
 */
class Brands
{
  protected $Brands = [
            'NetbetIT' => ['Sport','Casino'],
            'NetbetFR' => ['Sport'],
            ];
  protected $Products;
  protected $Languages = [
              'German',
              'Greek',
              'English (Canada)',
              'English (United Kingdom)',
              'Spanish',
              'French',
              'French (Canada)',
              'Iralian',
              'Japanese',
              'Dutch',
              'Portuguese',
              'Romanian',
              'Russian',
              'Turkish',
              'Chinese',
            ];

  public function __construct()
  {

  }

  public function getAllBrands(){

    return $this->Brands;
  }
  public function getProduct(){

  }
  public function getAllLanguages(){

    return $this->Languages;
  }
  public function getNetbet(){
    $Brands = getAllBrands();

  }


}
