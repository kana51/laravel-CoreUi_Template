@extends('layouts.app')

@section('breadcrumb')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <!-- <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">
    <a href="#">Admin</a>
    </li> -->
    <li class="breadcrumb-item"><a href="./home">Dashboard</a></li>
    <li class="breadcrumb-item active">Users</li>　 <!-- Dashboardの下にusersが来る感じ  -->
    <!-- Breadcrumb Menu-->
    <!-- <li class="breadcrumb-menu d-md-down-none">
    <div class="btn-group" role="group" aria-label="Button group">
        <a class="btn" href="#">
        <i class="icon-speech"></i>
        </a>
        <a class="btn" href="./">
        <i class="icon-graph"></i>  Dashboard</a>
        <a class="btn" href="#">
        <i class="icon-settings"></i>  Settings</a>
    </div>
    </li> -->
</ol>
@endsection

@section('search')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                        Search
                        <!-- <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                            その他検索条件
                        </a> -->
                    </h5>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="text-input">Text Input</label>
                        <div class="col-md-10">
                            <input class="form-control  @if($errors->has('text')) is-invalid @endif" id="text-input" type="text" name="text-input" placeholder="text">
                            <div class="invalid-feedback">error message</div>
                        </div>
                    </div>
                   <!-- その他フォームは適宜追加してみてください。  -->
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit">検索</button>
                    <button class="btn btn-sm btn-danger" type="reset">リセット</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                    <div class="card-header-actions">
                        <a href="#">
                        <button class="btn btn-dark btn-sm" id="csv-btn" type="submit"><i class="fa fa-spinner fa-spin" id="loading"></i>CSVダウンロード</button>
                        </a>
                    </div>    
                </div>

                <div class="card-body">
                    <table id="users_table" class="table table-border table-responsive-sm">
                        <thead>
                            <tr>
                                <th>
                                    ID <i class="icon-arrow-up"></i>
                                </th>
                                <th>名前</th>
                                <th>メールアドレス</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" type="button">View</button>
                                    <button class="btn btn-sm btn-success" type="button">Edit</button>
                                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr><td colspan="2">ユーザーがいません。</td></tr>
                        @endforelse
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- usersフォルダのsidebar.blade.phpを読み込むようにした-->
@section('sidebar')
    @include('users.sidebar')
@endsection