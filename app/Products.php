<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model

{
    protected $table = "products";

    protected $primaryKey = 'prodID';


  protected $fillable = array(
    'prodID', 'product', 'category', 'price'

);

}
