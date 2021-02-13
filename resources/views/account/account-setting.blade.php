<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/dist/css/account-view2.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container light-style flex-grow-1 container-p-y">

        <h4 class="font-weight-bold py-3 mb-4">
          アカウント設定
        </h4>

        <div class="card overflow-hidden">
          <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-3 pt-0">
              <div class="list-group list-group-flush account-settings-links">
                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">アカウント</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">パスワード変更</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">住所</a>
                <!-- <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Social links</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">Connections</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Notifications</a> -->
              </div>
            </div>
            <div class="col-md-9">
              <div class="tab-content">
                <div class="tab-pane fade active show" id="account-general">

                  <div class="card-body media align-items-center">
                    <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="d-block ui-w-80">
                    <div class="media-body ml-4">
                      <label class="btn btn-outline-primary">
                        Upload new photo
                        <input type="file" class="account-settings-fileinput">
                      </label> &nbsp;
                      <button type="button" class="btn btn-default md-btn-flat">Reset</button>

                      <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                    </div>
                  </div>
                  <hr class="border-light m-0">

                  <div class="card-body">
                    <div class="form-group">
                      <label class="form-label">アカウント名</label>
                      <input type="text" class="form-control mb-1" value="">
                    </div>
                    <div class="form-group">
                      <label class="form-label">メールアドレス</label>
                      <input type="text" class="form-control mb-1" value="">
                      <div class="alert alert-warning mt-3">
                        Your email is not confirmed. Please check your inbox.<br>
                        <a href="javascript:void(0)">Resend confirmation</a>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="tab-pane fade" id="account-change-password">
                  <div class="card-body pb-2">

                    <div class="form-group">
                      <label class="form-label">現在のパスワード</label>
                      <input type="password" class="form-control">
                    </div>

                    <div class="form-group">
                      <label class="form-label">新しいパスワード</label>
                      <input type="password" class="form-control">
                    </div>

                    <div class="form-group">
                      <label class="form-label">新しいパスワード確認</label>
                      <input type="password" class="form-control">
                    </div>

                  </div>
                </div>
                <div class="tab-pane fade" id="account-info">
                  <div class="card-body pb-2">

                    <div class="form-group">
                      <div class="row py-2">
                          <div class="col-md-6"> <label for="firstname">姓</label> <input type="text" class="bg-light form-control" placeholder=""> </div>
                          <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">名</label> <input type="text" class="bg-light form-control" placeholder=""> </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row py-2">
                        <div class="col-md-6"> <label for="postalcode">郵便番号</label> <input type="tel" class="bg-light form-control" placeholder=""> </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label">都道府県</label>
                    <select class="custom-select bg-light form-control">
                      <option value="">選択してください</option>
                        <option value="北海道">北海道</option>
                        <option value="青森県">青森県</option>
                        <option value="岩手県">岩手県</option>
                        <option value="宮城県">宮城県</option>
                        <option value="秋田県">秋田県</option>
                        <option value="山形県">山形県</option>
                        <option value="福島県">福島県</option>
                        <option value="茨城県">茨城県</option>
                        <option value="栃木県">栃木県</option>
                        <option value="群馬県">群馬県</option>
                        <option value="埼玉県">埼玉県</option>
                        <option value="千葉県">千葉県</option>
                        <option value="東京都" selected>東京都</option>
                        <option value="神奈川県">神奈川県</option>
                        <option value="新潟県">新潟県</option>
                        <option value="富山県">富山県</option>
                        <option value="石川県">石川県</option>
                        <option value="福井県">福井県</option>
                        <option value="山梨県">山梨県</option>
                        <option value="長野県">長野県</option>
                        <option value="岐阜県">岐阜県</option>
                        <option value="静岡県">静岡県</option>
                        <option value="愛知県">愛知県</option>
                        <option value="三重県">三重県</option>
                        <option value="滋賀県">滋賀県</option>
                        <option value="京都府">京都府</option>
                        <option value="大阪府">大阪府</option>
                        <option value="兵庫県">兵庫県</option>
                        <option value="奈良県">奈良県</option>
                        <option value="和歌山県">和歌山県</option>
                        <option value="鳥取県">鳥取県</option>
                        <option value="島根県">島根県</option>
                        <option value="岡山県">岡山県</option>
                        <option value="広島県">広島県</option>
                        <option value="山口県">山口県</option>
                        <option value="徳島県">徳島県</option>
                        <option value="香川県">香川県</option>
                        <option value="愛媛県">愛媛県</option>
                        <option value="高知県">高知県</option>
                        <option value="福岡県">福岡県</option>
                        <option value="佐賀県">佐賀県</option>
                        <option value="長崎県">長崎県</option>
                        <option value="熊本県">熊本県</option>
                        <option value="大分県">大分県</option>
                        <option value="宮崎県">宮崎県</option>
                        <option value="鹿児島県">鹿児島県</option>
                        <option value="沖縄県">沖縄県</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="row py-2">
                      <div class="col-md-6"> <label for="municipalities">市町村</label> <input type="tel" class="bg-light form-control" placeholder=""> </div>
                  </div>
                </div>
                    <div class="form-group">
                      <div class="row py-2">
                        <div class="col-md-6"> <label for="address1">番地</label> <input type="tel" class="bg-light form-control" placeholder=""> </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row py-2">
                      <div class="col-md-6"> <label for="address2">建物名・部屋番号</label> <input type="tel" class="bg-light form-control" placeholder=""> </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row py-2">
                    <div class="col-md-6"> <label for="phone">電話番号</label> <input type="tel" class="bg-light form-control" placeholder=""> </div>
                </div>
              </div>


                  </div>

                </div>
                <div class="tab-pane fade" id="account-social-links">
                  <div class="card-body pb-2">

                    <div class="form-group">
                      <label class="form-label">Twitter</label>
                      <input type="text" class="form-control" value="https://twitter.com/user">
                    </div>
                    <div class="form-group">
                      <label class="form-label">Facebook</label>
                      <input type="text" class="form-control" value="https://www.facebook.com/user">
                    </div>
                    <div class="form-group">
                      <label class="form-label">Google+</label>
                      <input type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                      <label class="form-label">LinkedIn</label>
                      <input type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                      <label class="form-label">Instagram</label>
                      <input type="text" class="form-control" value="https://www.instagram.com/user">
                    </div>

                  </div>
                </div>
                <div class="tab-pane fade" id="account-connections">
                  <div class="card-body">
                    <button type="button" class="btn btn-twitter">Connect to <strong>Twitter</strong></button>
                  </div>
                  <hr class="border-light m-0">
                  <div class="card-body">
                    <h5 class="mb-2">
                      <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i class="ion ion-md-close"></i> Remove</a>
                      <i class="ion ion-logo-google text-google"></i>
                      You are connected to Google:
                    </h5>
                    nmaxwell@mail.com
                  </div>
                  <hr class="border-light m-0">
                  <div class="card-body">
                    <button type="button" class="btn btn-facebook">Connect to <strong>Facebook</strong></button>
                  </div>
                  <hr class="border-light m-0">
                  <div class="card-body">
                    <button type="button" class="btn btn-instagram">Connect to <strong>Instagram</strong></button>
                  </div>
                </div>
                <div class="tab-pane fade" id="account-notifications">
                  <div class="card-body pb-2">

                    <h6 class="mb-4">Activity</h6>

                    <div class="form-group">
                      <label class="switcher">
                        <input type="checkbox" class="switcher-input" checked="">
                        <span class="switcher-indicator">
                          <span class="switcher-yes"></span>
                          <span class="switcher-no"></span>
                        </span>
                        <span class="switcher-label">Email me when someone comments on my article</span>
                      </label>
                    </div>
                    <div class="form-group">
                      <label class="switcher">
                        <input type="checkbox" class="switcher-input" checked="">
                        <span class="switcher-indicator">
                          <span class="switcher-yes"></span>
                          <span class="switcher-no"></span>
                        </span>
                        <span class="switcher-label">Email me when someone answers on my forum thread</span>
                      </label>
                    </div>
                    <div class="form-group">
                      <label class="switcher">
                        <input type="checkbox" class="switcher-input">
                        <span class="switcher-indicator">
                          <span class="switcher-yes"></span>
                          <span class="switcher-no"></span>
                        </span>
                        <span class="switcher-label">Email me when someone follows me</span>
                      </label>
                    </div>
                  </div>
                  <hr class="border-light m-0">
                  <div class="card-body pb-2">

                    <h6 class="mb-4">Application</h6>

                    <div class="form-group">
                      <label class="switcher">
                        <input type="checkbox" class="switcher-input" checked="">
                        <span class="switcher-indicator">
                          <span class="switcher-yes"></span>
                          <span class="switcher-no"></span>
                        </span>
                        <span class="switcher-label">News and announcements</span>
                      </label>
                    </div>
                    <div class="form-group">
                      <label class="switcher">
                        <input type="checkbox" class="switcher-input">
                        <span class="switcher-indicator">
                          <span class="switcher-yes"></span>
                          <span class="switcher-no"></span>
                        </span>
                        <span class="switcher-label">Weekly product updates</span>
                      </label>
                    </div>
                    <div class="form-group">
                      <label class="switcher">
                        <input type="checkbox" class="switcher-input" checked="">
                        <span class="switcher-indicator">
                          <span class="switcher-yes"></span>
                          <span class="switcher-no"></span>
                        </span>
                        <span class="switcher-label">Weekly blog digest</span>
                      </label>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="text-right mt-3">
          <button type="button" class="btn btn-primary">変更を保存</button>&nbsp;
          <button type="button" class="btn btn-default">キャンセル</button>
        </div>

      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
