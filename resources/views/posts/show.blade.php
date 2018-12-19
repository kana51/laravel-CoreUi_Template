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
                        <tbody>
                            <tr>
                                <th width="30%">記事タイトル</th><td>{{$post->title}}</td>
                            </tr>
                            <tr>
                                <th>ユーザーID</th><td>{{$post->user_id}}</td>
                            </tr>
                            <tr>
                                <th>投稿日時</th><td>{{$post->body}}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="card-footer">
                    <a href="/posts/{{$post->id}}/edit"><button class="btn btn-primary " style="float:left;">編集</button></a>　
                    　

                    <form method="post" action="/posts/{{$post->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" id="delete" class="btn btn-danger" style="margin-left:10px">削除</button>
                    </form>

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