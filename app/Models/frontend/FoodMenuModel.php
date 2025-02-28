<?php
namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodMenuModel extends Model
{
    use HasFactory;

    // Specify the table if it's different from the default naming convention
    protected $table = 'menu_items';

    // Define the fillable fields
    protected $fillable = [
        'name', 'category', 'image', 'price', 'regular_price', 'discount', 'rating'
    ];
}
