<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Repositories\user\UserRepositoryInterface;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $user = $this->user->getAll();

        return view('admin.user.index', compact('user'));
    }

    public function create()
    {
        return view('admin.user.add');
    }

    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['avatar'] = $this->user->uploadImage($data['avatar']);
        $created = $this->user->store($data);
        if (!$created) {
            return redirect()->back()->withErrors($created);
        }

        return redirect(route('user.index'))->with('message', trans('setting.add_success'));

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        try {
            $user = $this->user->find($id);

            return view('admin.user.edit', compact('user'));
        } catch (ModelNotFoundException $e) {
            echo $e->getMessage();
        }
    }

    public function update(UserRequest $request, $id)
    {
        try {
            $data = $request->all();
            if ($request->avatar != null) {
                $data['avatar'] = $this->user->uploadImage($data['avatar']);
                $updated = $this->user->update($id, $data);
            } else {
                $updated = $this->user->update($id, $data);
                if (!$updated) {
                    return redirect()->back()->withErrors($updated);
                }
            }

            return redirect(route('user.index'))->with('message', trans('setting.edit_success'));

        } catch (ModelNotFoundException $e) {
            echo $e->getMessage();
        }
    }

    public function destroy($id)
    {
        try
        {
            $user = $this->user->delete($id);
            return redirect(route('user.index'))->with('message', trans('setting.delete_success'));
        }
        catch (ModelNotFoundException $e)
        {
            echo $e->getMessage();
        }
    }
}
