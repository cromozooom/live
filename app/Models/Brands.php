<?php

namespace App\Models;

/**
 *
 */
class Brands
{
  protected $Brands;
  protected $Products;
  protected $Languages;

  public function __construct()
  {

  }

  public function getAllBrands(){
    $Brands = array(
                'Netbet IT' => array(
                        'Sport',
                        'Casino',
                ),
                'Netbet FR' => array(
                        'Sport'
                ),
              );
    return $Brands;
  }

  public function getAllLanguages(){
    $languages = array(
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
              );
    return $languages;
  }
  public function getNetbet(){
    $Brands = getAllBrands();

  }


}
