@extends('layouts.app')

@section('title', $user->name . '的个人中心')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('root') }}">首页</a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">用户管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">个人中心</li>
        </ol>
    </nav>
@stop

@section('content')
<div class="row">

    <div class="col-lg-3 col-md-2 hidden-sm hidden-xs user-info">
        <div class="card">
            <div class="card-body">
                <img class="mr-3 img-thumbnail" src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" width="400" height="400">
                <ul class="list-group list-group-flush mt-4 mb-0">
                    <li class="list-group-item">
                        <h4>个人简介</h4>
                        <div>{{ $user->introduction ? : '该用户很懒，啥都没写' }}</div>
                    </li>
                    <li class="list-group-item">
                        <h4>注册于</h4>
                        <div>{{ $user->created_at->diffForHumans() }}</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9">
        <div class="card">
            <div class="card-body">
                <h1 class="pull-left mb-0">{{ $user->name }} <small class="text-muted">{{ $user->email }}</small></h1>
            </div>
        </div>
        <hr>

        {{-- 用户发布的内容 --}}
        <div class="card">
            <div class="card-body">
                暂无数据 ~_~
            </div>
        </div>

    </div>
</div>
@stop