@extends('admin.layouts.master');
@section('content');
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $err)
                                {{ $err }}<br>
                            @endforeach
                        </div>
                    @endif
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="header">
                        <h4 class="title">{{ trans('setting.title_user') }}</h4>
                        <button type="submit" class="btn btn-danger"><a href="{{ route('user.create') }}">{{ trans('setting.add_user') }}</a></button>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Phone</th>
                            <th>Adrress</th>
                            <th>Email</th>
                            <th>Created_at</th>
                            <th>Actions</th>
                            </thead>
                            <tbody>
                            @foreach ($user as $us )
                                <tr>
                                    <td>{{ $us->id }}</td>
                                    <td id="user-{{ $us['id'] }}-name">{{ $us->name }}</td>
                                    <td><img src="{{ asset('upload/user/' . $us->avatar) }}" alt="" height="100px" width="100px"></td>
                                    <td>{{ $us->phone_number }}</td>
                                    <td>{{ $us->address }}</td>
                                    <td>{{ $us->email }}</td>
                                    <td>{{ date_format($us->created_at, 'd/m/Y') }}</td>
                                    <td class="option">
                                        <a href="{{ route('user.edit', $us->id) }}">
                                            <button class="font-icon-detail" type="button">
                                                <i class="pe-7s-pen"></i>
                                                {{ trans('setting.edit') }}
                                            </button>
                                        </a>
                                        <button class="font-icon-detail" data-id="{{ $us->id }}" type="button" onclick="deleteUser(this);">
                                            <i class="pe-7s-trash"></i>
                                            {{ trans('setting.delete') }}
                                        </button>
                                        <form class="form-{{ $us->id }}" action="{{ route('user.destroy', $us->id) }}" method="POST" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        function deleteUser(element) {
            let id = $(element).data('id');
            let choose = confirm('Bạn có muốn xóa users có tên là ' + $('#user-' + id + '-name').text() + ' không?');
            if (choose) {
                $('.form-' + id).submit();
            } else {
                return false;
            }
        }
    </script>
@endsection
