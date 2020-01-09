<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cake;
use App\Models\Image;
use App\Http\Controllers\admin\CakeController;
use App\Repositories\cake\CakeRepositoryInterface;
use App\Repositories\category\CategoryRepositoryInterface;

class PagesController extends Controller
{
    protected $cake;
    protected $category;

    public function __construct(CakeRepositoryInterface $cake, CategoryRepositoryInterface $category)
    {
        $this->category = $category;
        $this->cake = $cake;
    }

    public function getHome()
    {
        $cakes = $this->cake->getAllCake();
        $category = $this->category->getAll();

        return view('pages.home', compact('cakes', 'category'));
    }

    public function getCakeDetail(Request $request, $id)
    {
        try {
            $cake = Cake::findOrFail($id);
            $image = Image::where('cake_id', $request->id)->get();

            return view('pages.CakeDetail', compact('cake', 'image'));
        } catch (ModelNotFoundException $e) {
            echo $e->getMessage();
        }
    }

    public function getCakeByCategory(Request $request, $id)
    {
        $cake_category = Cake::where('category_id', $request->id)->get();

        return view('pages.CakeByCategory', compact('cake_category'));
    }
}
