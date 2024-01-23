<?php

if (!defined('ABSPATH')) exit;

if (function_exists('get_field')) {
  $title = get_field('title');
  $notify = get_field('notify');
}
?>

<section class="registration">
    <div class="wrapper">
      <div class="registration__wrapper">
        <?php if ($title) :?>
          <h2 class="registration__title">
            <?php echo $title; ?>
          </h2>
          <?php endif; ?>
        <form id="my-form" class="form" method="post" action="/" autocomplete="off">

          <div class="row">

            <div class="input-wrapper">
                <label class="label" for="login">
                  <?php echo _e('Email (электронная почта)', 'lbrtx'); ?>
                </label>
                <input class="input input-text" type="email" id="login" name="login">
            </div>
            <div class="input-wrapper">
              <label class="label" for="password">
                <?php echo _e('Пароль', 'lbrtx'); ?>
              </label>
              <input class="input input-text" type="password" id="password" name="password"
                placeholder="<?php echo _e('Минимум 8 символов', 'lbrtx'); ?>">
            </div>
            
            <div class="input-wrapper">
              <label class="label" for="firstName">
                <?php echo _e('Имя', 'lbrtx'); ?>
              </label>
              <input class="input input-text" type="text" id="firstName" name="firstName">
            </div>

            <div class="input-wrapper">
              <label class="label" for="lastName">
                <?php echo _e('Фамилия', 'lbrtx'); ?>
              </label>
              <input class="input input-text" type="text" id="lastName" name="lastName">
            </div>
            
            <div class="input-wrapper">
              <label class="label" for="iso3">
                <?php echo _e('Страна', 'lbrtx'); ?>
              </label>
              <select class="input input-select" id="iso3" name="iso3"></select>
            </div>
            <div class="input-wrapper">
              <label class="label" for="city">
                <?php echo _e('Город', 'lbrtx'); ?>
              </label>
              <input class="input input-text" type="text" id="city" name="city" autocomplete="off">
            </div>

            <div class="input-wrapper">
              <label class="label" for="phone">
                <?php echo _e('Телефон', 'lbrtx'); ?>
              </label>
              <input class="input input-text" type="tel" id="phone" name="phone">
            </div>
            <div class="input-wrapper">
              <label class="label" for="birthday">
                <?php echo _e('Дата рождения', 'lbrtx'); ?>
              </label>
              <input class="input input-text" type="date" id="birthday" name="birthday" placeholder="yyyy-mm-dd">
            </div>

            <div class="row fxc-captcha-container">
                <div class="input-wrapper">
                    <div class="captcha-demo-wrapper">
                        <img class="fxc-captcha-image" width="150" height="40" alt="captcha">
                        <div data-fxc-pending-for="captcha">
                            <button type="button" class="fxc-captcha-refresh">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M13.6523 2.35179C12.4394 1.13403 10.8668 0.33985 9.16757 0.0869821C7.46835 -0.165886 5.73295 0.136012 4.2186 0.947928C2.70426 1.75984 1.49157 3.03856 0.760293 4.59454C0.0290129 6.15053 -0.181936 7.90095 0.158714 9.58637C0.499364 11.2718 1.37348 12.8025 2.6515 13.9516C3.92952 15.1006 5.54341 15.807 7.25396 15.9658C8.96452 16.1247 10.6807 15.7276 12.1481 14.8334C13.6155 13.9393 14.756 12.5957 15.4006 11.0018H13.1827C12.5652 12.0935 11.6214 12.964 10.484 13.4909C9.34657 14.0178 8.07275 14.1745 6.8417 13.9391C5.61064 13.7037 4.48427 13.088 3.62099 12.1785C2.75771 11.269 2.20094 10.1115 2.029 8.86887C1.85705 7.6262 2.07857 6.36084 2.6624 5.25074C3.24623 4.14063 4.163 3.24163 5.28379 2.68016C6.40459 2.11869 7.67301 1.923 8.91068 2.1206C10.1484 2.31821 11.293 2.89917 12.1837 3.78179L9.00677 7.00179H16V0.00179178L13.6523 2.35179Z" fill="#161616"/>
                              </svg>
                            </button>
                        </div>
                    </div>
                    <label class="label" for="birthday">
                      <?php _e('Проверочный код', 'lbrtx'); ?>
                    </label>
                    <input class="input input-text" type="text" id="captcha" name="captcha">
                </div>
            </div>

          </div>

          <div class="checkboxes-wrapper">
            <label class="form-control">
              <input type="checkbox" name="checkbox" checked required/>
              <span>
              <?php _e('Ознакомлен(а) с Политикой конфиденциальности в отношении обработки персональных данных, мне понятны мои права, связанные с обработкой персональных данных, механизм реализации таких прав, а также последствия дачи согласия на обработку персональных данных или отказа в даче такого согласия.', 'lbrtx'); ?>
              </span>
            </label>

            <label class="form-control">
              <input type="checkbox" name="checkbox-checked" checked required/>
              <span>
                <?php _e('Даю <a href="https://www.fxclub.by/sites/fxby/files/images/soglasie_na_obrabotku_personalnyh_dannyh.pdf" target="_blank">cогласие</a> на обработку персональных данных', 'lbrtx'); ?>
              </span>
            </label>
          </div>

          
          <div class="input-wrapper">
            <input class="input input-button" type="submit" id="submitBtn" name="submitBtn" value="<?php _e('Открыть аккаунт', 'lbrtx');?>" class="button">
          </div>

          <input type="hidden" name="affiliateLinkId">
          <input type="hidden" name="affiliateNetwork">
          <input type="hidden" name="affiliateOfferId">
          <input type="hidden" name="affiliatePartner">
          <input type="hidden" name="iso3166-2" value="BY-HM">
          <input type="hidden" name="partnersLink" value="https://lib.fxclub.org/">
          <input type="hidden" name="promoCampaign">
          <input type="hidden" name="promoCampaignUrl" value="https://lib.fxclub.org/">
          <input type="hidden" name="referrer">
          <input type="hidden" name="timezoneOffset" value="180">
          <input type="hidden" name="sourceId">
          <input type="hidden" name="sourceSession">
          <input type="hidden" name="gclid">
          <input type="hidden" name="facebookId">
        </form>
      </div>
      <?php echo $notify; ?>
    </div>
  </section>