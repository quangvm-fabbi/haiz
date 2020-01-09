<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Repositories\cake\CakeRepositoryInterface;
use App\Repositories\category\CategoryRepositoryInterface;
use App\Repositories\image\ImageRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CakeController extends Controller
{
    protected $cake;
    protected $category;
    protected $image;

    public function __construct(
        CakeRepositoryInterface $cake,
        CategoryRepositoryInterface $category,
        ImageRepositoryInterface $image
    )
    {
        $this->category = $category;
        $this->cake = $cake;
        $this->image = $image;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cake = $this->cake->getAll();

        return view('admin.cake.index', compact('cake'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = $this->category->getAll();

        return view('admin.cake.add', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //sử dụng db transaction đối với những cái từ 2 câu query trở lên
        return DB::transaction(function () use ($data) {
            $cake = $this->cake->create($data);
            foreach ($data['image'] as $image) {
                $this->image->addImage($image, $cake->id);
            }

            return redirect(route('cake.index'))->with('message', trans('setting.add_success'));
        });
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $cake = $this->cake->find($id);

            $category = $this->category->getAll();
            $image = $this->image->getAll();

            return view('admin.cake.edit', compact('category', 'cake', 'image'));
        } catch (ModelNotFoundException $e) {
            //dung log de
            Log::error($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $cake = $this->cake->delete($id);
            return redirect(route('cake.index'))->with('message', trans('setting.delete_success'));
        } catch (ModelNotFoundException $e) {
            echo $e->getMessage();
        }
    }
}
