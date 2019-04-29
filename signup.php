<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

<div id="login-page" class="row">
  <div class="col s12 z-depth-4 card-panel">
    <form class="login-form" action="./signup_proc.php" method="post">
      <div class="row">
        <div class="input-field col s12 center">
          <h4>회원가입</h4>
        </div>
      </div>

      <div class="row margin">
        <div class="input-field col s12">
          <!-- <i class="mdi-social-person-outline prefix"></i> -->
          <i class="material-icons prefix">account_circle</i>
          <input id="username" name="username" type="text"/>
          <label for="username">이름을 입력하세요</label>
        </div>
      </div>

      <div class="row margin">
        <div class="input-field col s12">
          <!-- <i class="mdi-social-person-outline prefix"></i> -->
          <i class="material-icons prefix">email</i>
          <input id="email" name="email" type="text" style="cursor: auto;" />
          <label for="email">이메일을 입력하세요</label>
        </div>
      </div>

      <div class="row margin">
        <div class="input-field col s12">
          <!-- <i class="mdi-action-lock-outline prefix"></i> -->
          <i class="material-icons prefix">vpn_key</i>
          <input id="password" name="password" type="password" />
          <label for="password">패스워드를 입력하세요</label>
        </div>
      </div>

      <div class="row margin">
        <div class="input-field col s12">
          <!-- <i class="mdi-action-lock-outline prefix"></i> -->
          <i class="material-icons prefix">vpn_key</i>
          <input id="password_a" name="cpassword" type="password" />
          <label for="password_a">패스워드를 다시 입력하세요</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input type="submit" class="btn waves-effect waves-light col s12" value="회원가입"></button>

        </div>
        <div class="input-field col s12">
          <p class="margin center medium-small sign-up">이미 회원이세요?  <a href="/">로그인</a></p>
        </div>
      </div>


    </form>
  </div>
</div>
