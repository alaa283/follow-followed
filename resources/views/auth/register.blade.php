
<link rel="stylesheet" href="{{ asset('/css/login_register.css') }}">
<section class="forms-section">
  <div class="forms">

    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-signup">
        Sign Up
        <span class="underline"></span>
      </button>
      <form method="POST" action="{{ route('register') }}" class="form form-signup">
        @csrf
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          
          <div class="input-block">
            <label for="signup-name">Name</label>
            <input id="signup-name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
          </div>

          <div class="input-block">
            <label for="signup-email">E-mail</label>
            <input id="signup-email" type="email" name="email" :value="old('email')" required>
          </div>

          <div class="input-block">
            <label for="signup-password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
          </div>
          <div class="input-block">
            <label for="signup-password-confirm">Confirm password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
          </div>
        </fieldset>
        <button type="submit" class="btn-signup">Continue</button>
      </form>
    </div>
  </div>
</section>
<script src="{{ asset('/js/login_register.js') }}"></script>