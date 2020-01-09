<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Repositories\category\CategoryRepositoryInterface;


class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryRepositoryInterface $category)
    {
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = $this->category->getAll();

        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.category.add');
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        $category = $this->category->create($data);

        return redirect(route('category.index'))->with('message', trans('setting.add_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try
        {
            $category = $this->category->find($id);

            return view('admin.category.edit', compact('category'));
        }
        catch (ModelNotFoundException $e)
        {
            echo $e->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        try {
            $data = $request->all();
            $category = $this->category->update($id, $data);

            return redirect(route('category.index'))->with('message', trans('setting.edit_success'));
        }
        catch (ModelNotFoundException $e)
        {
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $category = $this->category->delete($id);
            return redirect(route('category.index'))->with('message', trans('setting.delete_success'));
        }
        catch (ModelNotFoundException $e)
        {
            echo $e->getMessage();
        }
    }
}
