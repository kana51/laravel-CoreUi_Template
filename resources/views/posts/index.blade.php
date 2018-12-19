@extends('layouts.app')

@section('title','投稿記事一覧')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">記事一覧　<a href="posts/create"><button class="btn btn-success">新規作成</button></a></div>

                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>記事タイトル</th>
                            <th>ユーザーID</th>
                            <th>投稿日時</th>
                            <th colspan="3">操作</th>
                        </thead>
                        <tbody>
                        @forelse($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->user_id}}</td>
                                <td>{{$post->created_at}}</td>
                                <td>
                                    <a href="posts/{{$post->id}}"><button class="btn btn-info btn-sm" style="float:left">詳細</button></a>
                                </td>
                                <td>
                                    <a href="posts/{{$post->id}}/edit"><button class="btn btn-primary btn-sm" style="float:left">編集</button></a>
                                </td>
                                <td>
                                    <form method="post" action="/posts/{{$post->id}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" id="delete" class="btn btn-danger btn-sm" >削除</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td col="2">Np Posts yet</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(function(){
        $("#delete").click(function(){
            if(!confirm("削除しますか？")){
                return false;
            }
        });
    });
</script>
@endsection