@extends('layouts.app')

@section('title', '编辑用户')

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('root') }}">首页</a></li>
            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">用户管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">编辑用户</li>
        </ol>
    </nav>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-md-8 offset-md-2">

                    @include('common._error')

                    <form action="{{ route('users.update', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="form-group row mb-4">
                            <label for="staticName" class="col-md-2 col-form-label">姓名</label>
                            <div class="col-md-10">
                                <input type="text" name="name" class="form-control" required id="staticName" value="{{ old('name') ? old('name') : $user->name }}">
                                <small class="form-text text-muted">[必填] 输入名字作为系统唯一身份识别标识</small>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="inputPassword" class="col-md-2 col-form-label">密码</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control" id="inputPassword" placeholder="密码">
                                <small class="form-text text-muted">[可选] 输入密码且长度不低于6位，不填写则保持原密码</small>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="staticEmail" class="col-md-2 col-form-label">邮箱</label>
                            <div class="col-md-10">
                                <input type="text" name="email" class="form-control" required id="staticEmail" value="{{ old('email') ? old('email') : $user->email }}" placeholder="邮箱">
                                <small class="form-text text-muted">[必填] 输入邮箱且该邮箱作为您的唯一邮箱推送账号</small>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="staticPhone" class="col-md-2 col-form-label">手机</label>
                            <div class="col-md-10">
                                <input type="text" name="phone" class="form-control" id="staticPhone" value="{{ old('phone') ? old('phone') : $user->phone }}" placeholder="手机">
                                <small class="form-text text-muted">[可选] 输入用户手机号码</small>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-md-2 col-form-label">性别</label>
                            <div class="col-md-10">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="staticBoy" name="gender" value="1" checked required>
                                    <label class="custom-control-label" for="staticBoy">男</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="staticGirl" name="gender" value="0" required>
                                    <label class="custom-control-label" for="staticGirl">女</label>
                                </div>
                                <small class="form-text text-muted">[必选] 选择用户性别</small>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="staticIntroduction" class="col-md-2 col-form-label">个人简介</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="staticIntroduction" rows="3" placeholder="个人简介">{{ old('introduction') ? old('introduction') : $user->introduction }}</textarea>
                                <small class="form-text text-muted">[可选] 输入用户个人简介 / 签名 / 座右铭</small>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-2">
                                <button type="submit" class="btn btn-primary">保存</button>
                                <button type="reset" class="btn btn-secondary">重置</button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
@stop