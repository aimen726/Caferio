<?php
namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\FoodMenuModel;
use Illuminate\Http\Request;

class FoodMenuController extends Controller
{
    public function index()
    {
        $menuItems = FoodMenuModel::all();

        // Return the view with the menu items
        return view('frontend.foodmenu', compact('menuItems'));
    }

}
