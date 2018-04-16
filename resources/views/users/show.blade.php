@extends('layouts.app')

@section('title', $user->name . '的个人中心')

@section('content')
<div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <img class="mr-3 img-thumbnail" src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" width="300px" height="300px">
                    <div class="media-body">
                        <hr>
                        <h5>个人简介</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <hr>
                        <h4><strong>注册于</strong></h4>
                        <p>January 01 1901</p>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        
                    </li>
                    <li class="list-group-item">
                        
                    </li>
                    <li class="list-group-item">
                        
                    </li>
                    <li class="list-group-item">
                        
                    </li>
                    <li class="list-group-item">
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <h1 class="pull-left mb-0" style="font-size:30px;">{{ $user->name }} <small class="text-muted">{{ $user->email }}</small></h1>
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