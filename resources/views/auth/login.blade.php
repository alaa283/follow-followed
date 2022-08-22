
<link rel="stylesheet" href="{{ asset('/css/login_register.css') }}">

<!-- <x-guest-layout> -->
<section class="forms-section">
  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Login
        <span class="underline"></span>
      </button>
      <form method="POST" action="{{ route('login') }}" class="form form-login">
        @csrf
        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
            <label for="login-email">E-mail</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus>
          </div>
          <div class="input-block">
            <label for="login-password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
          </div>
        </fieldset>
        <button type="submit" class="btn-login">Login</button>
      </form>
    </div>
  </div>
</section>
<!-- </x-guest-layout> -->

<script src="{{ asset('/js/login_register.js') }}"></script>