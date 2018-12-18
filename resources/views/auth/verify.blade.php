@extends('layouts.auth')

@section('auth')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">認証メッセージを送信しました。</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            新しい認証メッセージが送信されました。
                        </div>
                    @endif

                    メールアドレスの認証をお願いします。<br>
                    もしメールが届かない場合は、<a href="{{ route('verification.resend') }}">ここをクリックしてください</a>。
                </div>
            </div>
        </div>
    </div>
</div>
@endsection