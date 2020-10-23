<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Product extends Model implements TranslatableContract
{
  use Translatable;
  protected $guarded = [];
  public $translatedAttributes = ['name', 'description'];
  protected $appends = ['image_path', 'profit_percent'];
  // protected $guarded = [];
  // protected $fillable = ['category_id','image','purchase_price','sale_price','stock','edit'];

  public function getImagePathAttribute()
  {
      return url('admin/images/product_images/' . $this->image);

  }//end of image path attribute

  public function getProfitPercentAttribute()
  {
      $profit = $this->sale_price - $this->purchase_price;
      $profit_percent = $profit * 100 / $this->purchase_price;
      return number_format($profit_percent, 2);

  }//end of get profit attribute

  public function category()
  {
      return $this->belongsTo(Category::class);

  }//end fo category

  /**Get the Product's users .**/
   public function users()
   {
       return $this->morphToMany(\App\User::class, 'userable');
   }
    public function orders()
    {
//        return $this->belongsToMany(Orders::class,'product_order');
        return $this->belongsToMany('App\Orders', 'product_order', 'product_id', 'order_id');

    }
    public function productor(){
        return $this->hasOne(ProductOrder::class,'product_id');
    }


}
