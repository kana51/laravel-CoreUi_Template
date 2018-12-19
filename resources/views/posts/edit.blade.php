@extends('layouts.app')

@section('title','投稿記事一覧')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">記事一覧</div>

                <div class="card-body">
                <div class="box-body">
                    <form method="post" action="/posts/{{$post->id}}">

                        @csrf
                        @method('PATCH')

                        <input type="hidden" name="user_id" value=" {{ Auth::user()->id }}">

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">タイトル</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title',$post->title) }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">記事内容</label>
                            <div class="col-md-6">
                                <textarea id="body" type="text" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" >{{ old('body',$post->body) }}</textarea>

                                @if ($errors->has('body'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <button class="btn btn-primary" type="submit">更新</button>
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection