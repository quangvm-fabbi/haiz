@extends('admin.layouts.master');
@section('content');
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">{{ trans('setting.add_user') }}</h4>
                    </div>z
                    <div class="content">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                    {{ $err }}<br>
                                @endforeach
                            </div>
                        @endif
                        <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>{{ trans('setting.name') }}</label>
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>{{ trans('setting.address') }}</label>
                                        <input type="text" class="form-control" name="address" value="{{ $user->address }}" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{ trans('setting.email') }}</label>
                                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{ trans('setting.phone') }}</label>
                                        <input type="number" class="form-control" name="phone_number" value="{{ $user->phone_number }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{ trans('setting.pass') }}</label>
                                        <input type="password" class="form-control" name="password" value="{{ $user->password }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ trans('setting.avatar') }}</label>
                                        <input type="file" class="form-control" name="avatar" value="{{ $user->avatar }}" >
                                        <img class="image" src="{{ asset('upload/user/' . $user->avatar) }}">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
