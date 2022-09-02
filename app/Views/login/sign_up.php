<title>Authetification</title>
<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/sign.css">

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in"><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">


<form action="<?php echo base_url(); ?>/sign_controller/add_compte" method="post">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">nom</label>
					<input  type="text" class="input" name="nom_up" required>
				</div>
				<div class="group">
					<label for="user" class="label">address</label>
					<input  type="text" class="input" name="adrs_up" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input  type="password" class="input" data-type="password" name="mdp_up" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input type="password" class="input" data-type="password" name="mdp2_up" required>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<p style="color: red;text-align: center;"> <?= session()->getFlashdata("message_up") ?> </p>
				</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>

			<form action="<?php echo base_url(); ?>/sign_controller/check_login" method="post">
        <div class="sign-in-htm">
          <div class="group">
            <label for="Adrs" class="label">address</label>
            <input  name="adrs" type="text" class="input" value="<?= set_value('adrs') ?>">
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            <input  type="password" name="mdp" class="input" data-type="password">
          </div>
          <div class="group">
            <input id="check" type="checkbox" class="check" checked>
            <label for="check"><span class="icon"></span> Keep me Signed in</label>
          </div>
          <div class="group">
            <input type="submit" class="button" value="Sign In">
          </div>
          <div class="hr"></div>
          <div class="foot-lnk">
        <p style="color: red;"> <?= session()->getFlashdata("message") ?> </p>
          </div>
        </div>
      </form>
		</div>
	</div>
</div>
