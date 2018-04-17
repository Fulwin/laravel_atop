@extends('layouts.app')

@section('title', '用户管理')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('root') }}">首页</a></li>
            <li class="breadcrumb-item active" aria-current="page">用户管理</li>
        </ol>
    </nav>
@stop

@section('content')

<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">姓名</th>
                    <th scope="col">邮箱</th>
                    <th scope="col">性别</th>
                    <th scope="col">状态</th>
                    <th scope="col">操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->status }}</td>
                    <td>
                        <a href="{{ route('users.show', Auth::id()) }}" class="btn btn-sm btn-outline-success">查看</a>
                        <a href="{{ route('users.edit', Auth::id()) }}" class="btn btn-sm btn-outline-info">编辑</a>
                        <a href="javascript:;" class="btn btn-sm btn-outline-danger"
                                onclick="event.preventDefault(); document.getElementById('destroy-form-{{ $user->id }}').submit();">删除</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" id="destroy-form-{{ $user->id }}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $users->links() !!}
    </div>
</div>

@stop