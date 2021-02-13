@extends('master')
@section("content")
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="../assets/dist/css/register-form.css">
<link href="{{asset('/assets/css/register-form.css')}}" rel="stylesheet" type="text/css">

<div class="container">


    <br><br>


    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">ログイン</h4>
            <p class="text-center">ログインして始めよう</p>

            <form>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="" class="form-control" placeholder="メールアドレス" type="email">
                </div> <!-- form-group// -->


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="パスワード" type="password">
                </div> <!-- form-group// -->
                <!-- form-group// -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> ログイン </button>
                </div> <!-- form-group// -->
            </form>
            </p>
            <p class="divider-text">
                <span class="bg-light">OR</span>
            </p>
            <p>
                <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i> Twitterでログイン</a>
                <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> facebookでログイン</a>

    </div>
    <!-- form-group//

</article>
</div> <!-- card.// -->

</div>
<!--container end.//-->

<br><br>
@endsection