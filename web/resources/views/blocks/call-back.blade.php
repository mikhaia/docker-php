<div class="popup-overlay"></div>
<div class="bellLight">
    <div class="bellLight__w">
        <div class="bellLight__close">×</div>
        <h2 class="bellLight__h">Заказать обратный звонок</h2>
        <div class="bellLight__bid">
            <form class="bellLight__form" action="">
                <input class="bellLight__input bellLight__input_name" name="bellLight__name" type="text" placeholder="Имя" />
                <input class="bellLight__input bellLight__input_phone" name="bellLight__phone" type="tel" placeholder="Телефон" />
                <textarea class="bellLight__mess" name="bellLight__mess" placeholder="Комментарий"></textarea>
                <input class="bellLight__submit" type="submit" value="Заказать звонок" /> </form>
            <div class="bellLight__antispam">55,52,51,49,56,55,49,102,102,102,98,98,54,97,57,54,56,99,54,57,102,52,50,52,102,98,99,53,97,48,101,51</div>
            <div class="bellLight__politika">
                <input class="bellLight__policyCheckbox" name="policy_checkbox" type="checkbox" /> Нажимая на кнопку, вы даете согласие на обработку своих
                <br /> персональных данных и соглашаетесь с <a href="/politika-konfeditsialneosti/" target="_blank">политикой конфиденциальности</a> </div>
        </div>
        <div class="bellLight__thank">
            <div> Спасибо за оставленную заявку!
                <br /> Наш оператор свяжется с вами в ближайшее время </div>
            <button class="bellLight__button">закрыть</button>
        </div>
    </div>
</div>
<div class="bellLightW"></div>
<script>
$(function() {
    $.bellLight.init({
        'selector': '.btn-callback',
        'policyCheckbox': true,
        'mask': '+7 (999) 999-99-99',
        'url': '/',
    });
});
</script>