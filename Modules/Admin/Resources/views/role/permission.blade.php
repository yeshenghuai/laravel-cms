@extends('admin::layouts.master')
@section('content')
    @component('components.tabs',['title'=>$role['title'].'-权限设置'])
        @slot('nav')
            <li class="nav-item"><a class="nav-link" href="/admin/role" role="tab">角色列表</a></li>
            <li class="nav-item"><a class="nav-link active" href="#" role="tab">权限设置</a></li>

        @endslot
        @slot('body')
            <form action="/admin/role/permission/{{$role['id']}}" method="post">
                @csrf
                    <div class="card-body">
                        @foreach($modules as $module)
                            <div class="card card-flat">
                                @foreach($module['rules'] as $rule)
                                    <div class="card-header">{{$rule['group']}}</div>
                                    <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                                        @foreach($rule['permissions'] as $key =>$permission)
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input class="custom-control-input" type="checkbox"
                                                       {{$role->hasPermissionTo($permission['name'])?'checked=""':''}}
                                                       value="{{$permission['name']}}"
                                                       id="check{{$permission['title']}}" name="name[]">
                                                <label class="custom-control-label" for="check{{$permission['title']}}"
                                                >{{$permission['title']}}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                <button class="btn btn-primary">保存</button>
            </form>
        @endslot
    @endcomponent
@endsection