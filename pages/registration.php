<header class="header header-registration">
    <div class="container">
        <a class="logo" href="#">
            <img src="./images/header/logo.png" alt="логотип">
        </a>
        <div class="register-wrapper">
            <a href="#" class="header-home-link">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="19" viewBox="0 0 24 19">
                    <image width="24" height="19" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAATCAYAAACKsM07AAACH0lEQVQ4jZWVO2hUURCGv01CImhEMFEsREV8gF0U0ymCWChCEGKXQi1sBBFtxdpCsbEKphZUUERQOwsRESxN46OLCBojmneynxx31pzce2PWgcPumXvn/2f+mXtOTaVFawc6gQ3AV2A+wjqAnUAb8B34AiyBJoIWVod6Rv2g/lKvqmsjbkgdVyfVl+q6HK8V8E71mvrTJZtT76rb1EuxNxJYn8d3rKLOZuA2cDLkmYvyu4BBYDvwDqg3BSkhVGScVurNHvWNuhjZfVZPq4fUt2o9/PNZZe+LFbSVGBvNOgo8AQ7EfhQ4BXQD/cB54BGwEE1elvO/Kkh6n1MnIqMF9am6V70ZDU56P8t8k1kFqQc9KzV5jXorC5hVb6i71XtZIw15Xqn96pUsoXqQ78gJkt5b1AcZyGRMx+FCHyyQjKmD6onQv+kfVferbYlgk/o6a1oKOqYeVz+WYMs2Fcn0RTI5zr5E0KWOqDNBdFC9nJXdiiU5h9Vd6v3YJ6zupv696kV1qzqg/vgP8KalgbgeY3ohsJY1uT36kY6E6VJ4A2A21nzpacNGYljaq77kRaBWOcuN/WPgecx+H3A2vu7i/NcC64+tdlTkwS+AO0HwCRgqEFRa1Ze8ktUjs3p29qxqVQS1TKrcl/8W/68UVylRukimCy+nzL9lOo8DU3EJNS09myllW3GjbQSOAD2ZbwJ4mAEk4AGgt0CQBmHsrwf4DYTOi28nHxLHAAAAAElFTkSuQmCC" />
                </svg>
            </a>
            <a href="<?= $site_url ?>registration" class="registration-btn">Регистрация</a>
            <a class="header-contacts-link" href="https://laysfootball.ru/feedback/">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42" height="42" viewBox="0 0 42 42">
                    <image id="settings_1_" data-name="settings (1)" width="42" height="42" xlink:href="data:img/png;base64,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" />
                </svg>
            </a>
        </div>
    </div>
</header>
<main id="registration-page">
	<section class="registration-section">
		<div class="container">
			<div class="subtitle-reg">
				регистрация
			</div>
			<h1 class="title-reg">
				LAY’S<span>&</span>PEPSI DRIVE PARK
			</h1>
			<div class="form-reg-wrap">
				<!-- action="./api/register.php" -->
				<form id="register_form"  method="post">
					<div class="form-reg-top-wrap">
						<input id="registration-name" type="text" name="surname" placeholder="Имя *" required>
						<input id="" type="text" name="name" placeholder="Фамилия *" required>
					</div>
					<input type="text" name="middle_name" placeholder="Отчество *" required>
					<input id="registration-phone" type="tel" name="phone" placeholder="+7 (000) 000 - 00 - 00" required>
					<input type="text" name="email" placeholder="Ваш @mail *" required>

					<div class="form-reg-bot-wrap">
						<input type="text" id="registration-birthday" name="birthday" placeholder="Дата рождения *" required>
						<!--					<div class="reg-birthday-wrap">-->
						<!--                    <input id="reg-birthday" type="date" min="1920-01-01" max="2020-08-01" name="birthday"  required></div>-->
						<div class="select-city-wrap">
							<select id="registration-city" name="city" required class="select-city">
								<option value="" hidden>Город участия </option>
								<option value="Москва">Москва</option>
							</select>
						</div>
					</div>
					<div class="select-wrap"></div>
					<div class="way_of_visiting-wrap">
						<select id="registration-way_of_visiting" name="way_of_visiting" required class="select-way">
							<option value="" hidden>Способ посещения мероприятия</option>
							<option value="Пешком">Пешком</option>
							<option value="На автомобиле">На автомобиле</option>
						</select>
					</div>
					<label class="reg-checked">
						<input id="terms" type="checkbox" value="terms" checked required> <span>Согласен с правилами проведения и обработкой персональных данных</span>
					</label>
					<?php if(defined('reCAPTCHA_sitekey')){?>
						<script>
							var verifyGrecaptcha = undefined;
							var verifyCallback = function(response) {
								verifyGrecaptcha = response;
							};
						</script>
						<div style="width: 50%; margin: 0 auto; text-align: center;" class="g-recaptcha" data-sitekey="<?= reCAPTCHA_sitekey ?>" data-callback="verifyCallback" data-expired-callback="verifyCallback"></div>
						<script src="https://www.google.com/recaptcha/api.js" async defer></script>
					<?php }else{?>
						<script>
							var verifyGrecaptcha = 1;
						</script>
					<?php }?>
					<!--                 <button>Зарегистроваться</button>-->
					<button id="btn_send_register" class="registration-submit" onclick="
                 sendAjaxForm('./api/register.php'); return false;

                ">Зарегистрироваться</button>

				</form>
			</div>
		</div>
		<!-- /.container -->
	</section>
</main>
<!-- /#registration-page -->
<?php require 'pages/section/bottom.php'; ?>
