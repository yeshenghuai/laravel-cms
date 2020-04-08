@extends('admin::layouts.master')
@section('content')
    @component('components.tabs',['title'=>'角色管理'])
        @slot('nav')
            <li class="nav-item"><a class="nav-link active" href="#home" role="tab">角色列表</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#addRole" href="#profile"
                                    role="tab">添加角色</a></li>
            @component('components.modal',['id'=>'addRole','title'=>'添加角色','url'=>'/admin/role'])
                <div class="form-group">
                    <label>角色名称</label>
                    <input class="form-control" type="text" placeholder="请输入中文角色名称" name="title"
                           value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label>角色标识</label>
                    <input class="form-control" type="text" placeholder="标识必须为英文字母" name="name"
                           value="{{old('name')}}">
                </div>
            @endcomponent
        @endslot
        @slot('body')
            <div class="table-responsive">
                <!-- .table -->
                <table class="table table-hover">
                    <!-- thead -->
                    <thead class="thead-">
                    <tr>
                        <th style="min-width:10%"> 编号</th>
                        <th style="min-width:30%"> 角色名称</th>
                        <th class=""> 角色标识</th>
                        <th class="number"> 创建时间</th>
                        <th class="number"></th>

                    </tr>
                    </thead><!-- /thead -->
                    <!-- tbody -->
                    <tbody>
                    <!-- tr -->
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$role['id']}}</td>
                            <td> {{$role['title']}}</td>
                            <td> {{$role['name']}}</td>
                            <td class="number"> {{$role['created_at']}}</td>
                            <td class="number">
                                <div class="btn-group btn-space">
                                    <button class="btn btn-primary" type="button" data-toggle="modal"
                                            data-target="#editRole{{$role['id']}}">编辑
                                    </button>
                                    <a href="/admin/role/permission/{{$role['id']}}" class="btn btn-secondary">权限</a>
                                    <button class="btn btn-danger" type="button">删除</button>
                                </div>
                                @component('components.modal',['id'=>"editRole{$role['id']}",'title'=>'编辑角色','url'=>"/admin/role/{$role['id']}",'method'=>'PUT'])
                                    <div class="form-group text-left">
                                        <label>角色名称</label>
                                        <input class="form-control" type="text" placeholder="请输入中文角色名称" name="title"
                                               value="{{$role['title']}}">
                                    </div>
                                    <div class="form-group text-left">
                                        <label>角色标识</label>
                                        <input class="form-control" type="text" placeholder="标识必须为英文字母" name="name"
                                               value="{{$role['name']}}">
                                    </div>
                                @endcomponent
                            </td>
                        </tr>
                    @endforeach
                    <!-- /tr -->
                    </tbody><!-- /tbody -->
                </table><!-- /.table -->
            </div><!-- /.table-responsive -->
        @endslot
    @endcomponent
@endsection