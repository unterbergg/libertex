<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package libertex
 */

get_header();

?>

	<main id="primary" class="site-main">

	<form id="my-form" class="form" method="post" action="/" autocomplete="off" style="position: relative;">
<div class="row">
<div class="label-wrapper">
<label class="label" for="firstName">firstName</label>
</div>
<div class="input-wrapper">
<input class="input input-text" type="text" id="firstName" name="firstName">
<div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
</div>
<div class="row">
<div class="label-wrapper">
<label class="label" for="lastName">lastName</label>
</div>
<div class="input-wrapper">
<input class="input input-text" type="text" id="lastName" name="lastName">
</div>
</div>
<div class="row">
<div class="label-wrapper">
<label class="label" for="login">login</label>
</div>
<div class="input-wrapper" data-fxc-pending-for="login">
<input class="input input-text" type="email" id="login" name="login">
<div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
</div>
<div class="row">
<div class="label-wrapper">
<label class="label" for="password">password</label>
</div>
<div class="input-wrapper">
<input class="input input-text" type="password" id="password" name="password">
<div data-lastpass-icon-root="true" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div></div>
</div>
<div class="row">
<div class="label-wrapper">
<label class="label" for="iso3">country</label>
</div>
<div class="input-wrapper">
<select class="input input-select" id="iso3" name="iso3"><option value="UKR" data-phone="380">Украина</option><option value="BLR" data-phone="375">Беларусь</option><option value="KAZ" data-phone="7">Казахстан</option><option value="ARM" data-phone="374">Армения</option><option value="" disabled="">-------------</option><option value="AUS" data-phone="61">Австралия</option><option value="AUT" data-phone="43">Австрия</option><option value="AZE" data-phone="994">Азербайджан</option><option value="ALA" data-phone="358-18">Аланды</option><option value="ALB" data-phone="355">Албания</option><option value="DZA" data-phone="213">Алжир</option><option value="ASM" data-phone="1-684">Американское Самоа</option><option value="AIA" data-phone="1-264">Ангилья</option><option value="AGO" data-phone="244">Ангола</option><option value="AND" data-phone="376">Андорра</option><option value="ATA" data-phone="672">Антарктида</option><option value="ATG" data-phone="1-268">Антигуа и Барбуда</option><option value="ARG" data-phone="54">Аргентина</option><option value="ABW" data-phone="297">Аруба</option><option value="AFG" data-phone="93">Афганистан</option><option value="BHS" data-phone="1-242">Багамы</option><option value="BGD" data-phone="880">Бангладеш</option><option value="BRB" data-phone="1-246">Барбадос</option><option value="BHR" data-phone="973">Бахрейн</option><option value="BLZ" data-phone="501">Белиз</option><option value="BEL" data-phone="32">Бельгия</option><option value="BEN" data-phone="229">Бенин</option><option value="BMU" data-phone="1-441">Бермудские о-ва</option><option value="BGR" data-phone="359">Болгария</option><option value="BOL" data-phone="591">Боливия</option><option value="BES" data-phone="599">Бонайре, Синт-Эстатиус и Саба</option><option value="BIH" data-phone="387">Босния</option><option value="BWA" data-phone="267">Ботсвана</option><option value="BRA" data-phone="55">Бразилия</option><option value="IOT" data-phone="246">Британская территория в Индийском океане</option><option value="VGB" data-phone="1-284">Британские Виргинские о-ва</option><option value="BRN" data-phone="673">Бруней Даруссалам</option><option value="BFA" data-phone="226">Буркина Фасо</option><option value="BDI" data-phone="257">Бурунди</option><option value="BTN" data-phone="975">Бутан</option><option value="VUT" data-phone="678">Вануату</option><option value="VAT" data-phone="379">Ватикан</option><option value="GBR" data-phone="44">Великобритания</option><option value="HUN" data-phone="36">Венгрия</option><option value="VEN" data-phone="58">Венесуэла</option><option value="VIR" data-phone="1-340">Виргинские о-ва (США)</option><option value="UMI" data-phone="1">Внешние малые острова (США)</option><option value="TLS" data-phone="670">Восточный Тимор</option><option value="VNM" data-phone="84">Вьетнам</option><option value="GAB" data-phone="241">Габон</option><option value="HTI" data-phone="509">Гаити</option><option value="GUY" data-phone="592">Гайана</option><option value="GMB" data-phone="220">Гамбия</option><option value="GHA" data-phone="233">Гана</option><option value="GLP" data-phone="590">Гваделупа</option><option value="GTM" data-phone="502">Гватемала</option><option value="GIN" data-phone="224">Гвинея</option><option value="GNB" data-phone="245">Гвинея-Биссау</option><option value="DEU" data-phone="49">Германия</option><option value="GGY" data-phone="44-1481">Гернси</option><option value="GIB" data-phone="350">Гибралтар</option><option value="HND" data-phone="504">Гондурас</option><option value="HKG" data-phone="852">Гонконг</option><option value="GRD" data-phone="1-473">Гренада</option><option value="GRL" data-phone="299">Гренландия</option><option value="GRC" data-phone="30">Греция</option><option value="GEO" data-phone="995">Грузия</option><option value="GUM" data-phone="1-671">Гуам</option><option value="DNK" data-phone="45">Дания</option><option value="JEY" data-phone="44-1534">Джерси</option><option value="DJI" data-phone="253">Джибути</option><option value="DOM" data-phone="1-809">Доминиканская Республика</option><option value="EGY" data-phone="20">Египет</option><option value="COD" data-phone="243">Заир</option><option value="ZMB" data-phone="260">Замбия</option><option value="ESH" data-phone="212">Западная Сахара</option><option value="ZWE" data-phone="263">Зимбабве</option><option value="ISR" data-phone="972">Израиль</option><option value="IND" data-phone="91">Индия</option><option value="IDN" data-phone="62">Индонезия</option><option value="JOR" data-phone="962">Иордания</option><option value="IRQ" data-phone="964">Ирак</option><option value="IRN" data-phone="98">Иран</option><option value="IRL" data-phone="353">Ирландия</option><option value="ISL" data-phone="354">Исландия</option><option value="ESP" data-phone="34">Испания</option><option value="ITA" data-phone="39">Италия</option><option value="YEM" data-phone="967">Йемен</option><option value="CYM" data-phone="1-345">Каймановы Острова</option><option value="KHM" data-phone="855">Камбоджа</option><option value="CMR" data-phone="237">Камерун</option><option value="CAN" data-phone="1">Канада</option><option value="QAT" data-phone="974">Катар</option><option value="KEN" data-phone="254">Кения</option><option value="CYP" data-phone="357">Кипр</option><option value="KIR" data-phone="686">Кирибати</option><option value="CHN" data-phone="86">Китай</option><option value="CCK" data-phone="61">Кокосовые о-ва</option><option value="COL" data-phone="57">Колумбия</option><option value="COM" data-phone="269">Коморские о-ва</option><option value="COG" data-phone="242">Конго</option><option value="XKX" data-phone="383">Косово</option><option value="CRI" data-phone="506">Коста-Рика</option><option value="CIV" data-phone="225">Кот-д'Ивуар</option><option value="CUB" data-phone="53">Куба</option><option value="KWT" data-phone="965">Кувейт</option><option value="KGZ" data-phone="996">Кыргызстан</option><option value="CUW" data-phone="599">Кюрасао</option><option value="LAO" data-phone="856">Лаос</option><option value="LVA" data-phone="371">Латвия</option><option value="LSO" data-phone="266">Лесото</option><option value="LBR" data-phone="231">Либерия</option><option value="LBN" data-phone="961">Ливан</option><option value="LBY" data-phone="218">Ливия</option><option value="LTU" data-phone="370">Литва</option><option value="LIE" data-phone="423">Лихтенштейн</option><option value="LUX" data-phone="352">Люксембург</option><option value="MUS" data-phone="230">Маврикий</option><option value="MRT" data-phone="222">Мавритания</option><option value="MDG" data-phone="261">Мадагаскар</option><option value="MYT" data-phone="262">Майотта</option><option value="MAC" data-phone="853">Макао</option><option value="MKD" data-phone="389">Македония</option><option value="MWI" data-phone="265">Малави</option><option value="MYS" data-phone="60">Малайзия</option><option value="MLI" data-phone="223">Мали</option><option value="MDV" data-phone="960">Мальдивские о-ва</option><option value="MLT" data-phone="356">Мальта</option><option value="MAR" data-phone="212">Марокко</option><option value="MTQ" data-phone="596">Мартиника</option><option value="MHL" data-phone="692">Маршалловы о-ва</option><option value="MEX" data-phone="52">Мексика</option><option value="FSM" data-phone="691">Микронезия</option><option value="MOZ" data-phone="258">Мозамбик</option><option value="MDA" data-phone="373">Молдова</option><option value="MCO" data-phone="377">Монако</option><option value="MNG" data-phone="976">Монголия</option><option value="MSR" data-phone="1-664">Монсеррат</option><option value="MMR" data-phone="95">Мьянма</option><option value="IMN" data-phone="44-1624">Мэн, о-в</option><option value="NAM" data-phone="264">Намибия</option><option value="NRU" data-phone="674">Науру</option><option value="NPL" data-phone="977">Непал</option><option value="NER" data-phone="227">Нигер1</option><option value="NGA" data-phone="234">Нигерия</option><option value="ANT" data-phone="599">Нидерландские Антильские острова</option><option value="NLD" data-phone="31">Нидерланды</option><option value="NIC" data-phone="505">Никарагуа</option><option value="NIU" data-phone="683">Ниуе</option><option value="NZL" data-phone="64">Новая Зеландия</option><option value="NCL" data-phone="687">Новая Каледония</option><option value="NOR" data-phone="47">Норвегия</option><option value="ARE" data-phone="971">ОАЭ</option><option value="OMN" data-phone="968">Оман</option><option value="CPV" data-phone="238">Острова Зеленого Мыса</option><option value="COK" data-phone="682">Острова Кука</option><option value="TCA" data-phone="1-649">Острова Тёркс и Кайкос</option><option value="HMD" data-phone="61">Острова Херд и Макдональд</option><option value="BVT" data-phone="47">Остров Буве</option><option value="DMA" data-phone="1-767">Остров Доминика</option><option value="NFK" data-phone="672">Остров Норфолк</option><option value="CXR" data-phone="61">Остров Рождества</option><option value="BLM" data-phone="590">Остров Святого Бартоломея</option><option value="MAF" data-phone="590">Остров Святого Мартина</option><option value="SHN" data-phone="290">Остров Святой Елены</option><option value="PAK" data-phone="92">Пакистан</option><option value="PLW" data-phone="680">Палау</option><option value="PSE" data-phone="970">Палестинские территории</option><option value="PAN" data-phone="507">Панама</option><option value="PNG" data-phone="675">Папуа – Новая Гвинея</option><option value="PRY" data-phone="595">Парагвай</option><option value="PER" data-phone="51">Перу</option><option value="PCN" data-phone="870">Питкэрн</option><option value="POL" data-phone="48">Польша</option><option value="PRT" data-phone="351">Португалия</option><option value="PRI" data-phone="1-787">Пуэрто-Рико</option><option value="REU" data-phone="262">Реюньон</option><option value="RUS" data-phone="7">Россия</option><option value="RWA" data-phone="250">Руанда</option><option value="ROU" data-phone="40">Румыния</option><option value="SLV" data-phone="503">Сальвадор</option><option value="WSM" data-phone="685">Самоа</option><option value="SMR" data-phone="378">Сан-Марино</option><option value="STP" data-phone="239">Сан-Томе и Принсипе</option><option value="SAU" data-phone="966">Саудовская Аравия</option><option value="SWZ" data-phone="268">Свазиленд</option><option value="SJM" data-phone="47">Свальбард и Ян-Майен</option><option value="PRK" data-phone="850">Северная Корея</option><option value="MNP" data-phone="1-670">Северные Марианские о-ва</option><option value="SYC" data-phone="248">Сейшельские о-ва</option><option value="SEN" data-phone="221">Сенегал</option><option value="SPM" data-phone="508">Сен-Пьер и Микелон</option><option value="VCT" data-phone="1-784">Сент-Винсент и Гренадины</option><option value="KNA" data-phone="1-869">Сент-Киттс и Невис</option><option value="LCA" data-phone="1-758">Сент-Люсия</option><option value="SRB" data-phone="381">Сербия</option><option value="SGP" data-phone="65">Сингапур</option><option value="SXM" data-phone="599">Синт-Мартен</option><option value="SYR" data-phone="963">Сирийская Арабская Республика</option><option value="SVK" data-phone="421">Словакия</option><option value="SVN" data-phone="386">Словения</option><option value="SLB" data-phone="677">Соломонские острова</option><option value="SOM" data-phone="252">Сомали</option><option value="SDN" data-phone="249">Судан</option><option value="SUR" data-phone="597">Суринам</option><option value="USA" data-phone="1">США</option><option value="SLE" data-phone="232">Сьерра-Леоне</option><option value="TJK" data-phone="992">Таджикистан</option><option value="TWN" data-phone="886">Тайвань</option><option value="THA" data-phone="66">Тайланд</option><option value="TZA" data-phone="255">Танзания</option><option value="TGO" data-phone="228">Того</option><option value="TKL" data-phone="690">Токелау</option><option value="TON" data-phone="676">Тонга</option><option value="TTO" data-phone="1-868">Тринидад и Тобаго</option><option value="TUV" data-phone="688">Тувалу</option><option value="TUN" data-phone="216">Тунис</option><option value="TKM" data-phone="993">Туркменистан</option><option value="TUR" data-phone="90">Турция</option><option value="UGA" data-phone="256">Уганда</option><option value="UZB" data-phone="998">Узбекистан</option><option value="WLF" data-phone="681">Уоллис и Футуна</option><option value="URY" data-phone="598">Уругвай</option><option value="FRO" data-phone="298">Фарерские о-ва</option><option value="FJI" data-phone="679">Фиджи</option><option value="PHL" data-phone="63">Филиппины</option><option value="FIN" data-phone="358">Финляндия</option><option value="FLK" data-phone="500">Фолклендские о-ва</option><option value="FRA" data-phone="33">Франция</option><option value="GUF" data-phone="594">Французская Гвиана</option><option value="PYF" data-phone="689">Французская Полинезия</option><option value="ATF" data-phone="262">Французские Южные Территории</option><option value="HRV" data-phone="385">Хорватия</option><option value="CAF" data-phone="236">ЦАР</option><option value="TCD" data-phone="235">Чад</option><option value="MNE" data-phone="382">Черногория</option><option value="CZE" data-phone="420">Чешская Республика</option><option value="CHL" data-phone="56">Чили</option><option value="CHE" data-phone="41">Швейцария</option><option value="SWE" data-phone="46">Швеция</option><option value="LKA" data-phone="94">Шри-Ланка</option><option value="ECU" data-phone="593">Эквадор</option><option value="GNQ" data-phone="240">Экваториальная Гвинея</option><option value="ERI" data-phone="291">Эритрея</option><option value="EST" data-phone="372">Эстония</option><option value="ETH" data-phone="251">Эфиопия</option><option value="ZAF" data-phone="27">ЮАР</option><option value="SGS" data-phone="44">Южная Джорджия и Южные Сандвичевы Острова</option><option value="KOR" data-phone="82">Южная Корея</option><option value="SSD" data-phone="211">Южный Судан</option><option value="JAM" data-phone="1-876">Ямайка</option><option value="JPN" data-phone="81">Япония</option></select>
</div>
</div>
<div class="row">
<div class="label-wrapper">
<label class="label" for="city">city</label>
</div>
<div class="input-wrapper">
<input class="input input-text" type="text" id="city" name="city" autocomplete="off">
<ul class="fxc-autocomplete fxc-hidden" data-fxc-autocomplete-for="city"><li class="fxc-autocomplete-item" data-city="Барановичи" data-region="BY-BR"><span class="fxc-autocomplete-city">Барановичи</span><span class="fxc-autocomplete-region">Брестская область</span></li><li class="fxc-autocomplete-item" data-city="Берёза" data-region="BY-BR"><span class="fxc-autocomplete-city">Берёза</span><span class="fxc-autocomplete-region">Брестская область</span></li><li class="fxc-autocomplete-item" data-city="Бобруйск" data-region="BY-MA"><span class="fxc-autocomplete-city">Бобруйск</span><span class="fxc-autocomplete-region">Могилевская область</span></li><li class="fxc-autocomplete-item" data-city="Брест" data-region="BY-BR"><span class="fxc-autocomplete-city">Брест</span><span class="fxc-autocomplete-region">Брестская область</span></li><li class="fxc-autocomplete-item" data-city="Быхов" data-region="BY-MA"><span class="fxc-autocomplete-city">Быхов</span><span class="fxc-autocomplete-region">Могилевская область</span></li><li class="fxc-autocomplete-item" data-city="Вилейка" data-region="BY-MI"><span class="fxc-autocomplete-city">Вилейка</span><span class="fxc-autocomplete-region">Минская Область</span></li><li class="fxc-autocomplete-item" data-city="Витебск" data-region="BY-VI"><span class="fxc-autocomplete-city">Витебск</span><span class="fxc-autocomplete-region">Витебская Oбласть</span></li><li class="fxc-autocomplete-item" data-city="Волковыск" data-region="BY-HR"><span class="fxc-autocomplete-city">Волковыск</span><span class="fxc-autocomplete-region">Гродненская Область</span></li><li class="fxc-autocomplete-item" data-city="Глубокое" data-region="BY-VI"><span class="fxc-autocomplete-city">Глубокое</span><span class="fxc-autocomplete-region">Витебская Oбласть</span></li><li class="fxc-autocomplete-item" data-city="Гомель" data-region="BY-HO"><span class="fxc-autocomplete-city">Гомель</span><span class="fxc-autocomplete-region">Гомельская область</span></li><li class="fxc-autocomplete-item" data-city="Горки" data-region="BY-MA"><span class="fxc-autocomplete-city">Горки</span><span class="fxc-autocomplete-region">Могилевская область</span></li><li class="fxc-autocomplete-item" data-city="Город Борисов" data-region="BY-MI"><span class="fxc-autocomplete-city">Город Борисов</span><span class="fxc-autocomplete-region">Минская Область</span></li><li class="fxc-autocomplete-item" data-city="Гродно" data-region="BY-HR"><span class="fxc-autocomplete-city">Гродно</span><span class="fxc-autocomplete-region">Гродненская Область</span></li><li class="fxc-autocomplete-item" data-city="Дзержинск" data-region="BY-MI"><span class="fxc-autocomplete-city">Дзержинск</span><span class="fxc-autocomplete-region">Минская Область</span></li><li class="fxc-autocomplete-item" data-city="Добруш" data-region="BY-HO"><span class="fxc-autocomplete-city">Добруш</span><span class="fxc-autocomplete-region">Гомельская область</span></li><li class="fxc-autocomplete-item" data-city="Жлобин" data-region="BY-HO"><span class="fxc-autocomplete-city">Жлобин</span><span class="fxc-autocomplete-region">Гомельская область</span></li><li class="fxc-autocomplete-item" data-city="Жодино" data-region="BY-MI"><span class="fxc-autocomplete-city">Жодино</span><span class="fxc-autocomplete-region">Минская Область</span></li><li class="fxc-autocomplete-item" data-city="Ивацевичи" data-region="BY-BR"><span class="fxc-autocomplete-city">Ивацевичи</span><span class="fxc-autocomplete-region">Брестская область</span></li><li class="fxc-autocomplete-item" data-city="Калинковичи" data-region="BY-HO"><span class="fxc-autocomplete-city">Калинковичи</span><span class="fxc-autocomplete-region">Гомельская область</span></li><li class="fxc-autocomplete-item" data-city="Кобрин" data-region="BY-BR"><span class="fxc-autocomplete-city">Кобрин</span><span class="fxc-autocomplete-region">Брестская область</span></li><li class="fxc-autocomplete-item" data-city="Колодищи" data-region="BY-MI"><span class="fxc-autocomplete-city">Колодищи</span><span class="fxc-autocomplete-region">Минская Область</span></li><li class="fxc-autocomplete-item" data-city="Кричев" data-region="BY-MA"><span class="fxc-autocomplete-city">Кричев</span><span class="fxc-autocomplete-region">Могилевская область</span></li><li class="fxc-autocomplete-item" data-city="Лепель" data-region="BY-VI"><span class="fxc-autocomplete-city">Лепель</span><span class="fxc-autocomplete-region">Витебская Oбласть</span></li><li class="fxc-autocomplete-item" data-city="Лида" data-region="BY-HR"><span class="fxc-autocomplete-city">Лида</span><span class="fxc-autocomplete-region">Гродненская Область</span></li><li class="fxc-autocomplete-item" data-city="Лунинец" data-region="BY-BR"><span class="fxc-autocomplete-city">Лунинец</span><span class="fxc-autocomplete-region">Брестская область</span></li><li class="fxc-autocomplete-item" data-city="Малиновка" data-region="BY-X1~"><span class="fxc-autocomplete-city">Малиновка</span><span class="fxc-autocomplete-region">Минск</span></li><li class="fxc-autocomplete-item" data-city="Марьина Горка" data-region="BY-MI"><span class="fxc-autocomplete-city">Марьина Горка</span><span class="fxc-autocomplete-region">Минская Область</span></li><li class="fxc-autocomplete-item" data-city="Медвежино" data-region="BY-X1~"><span class="fxc-autocomplete-city">Медвежино</span><span class="fxc-autocomplete-region">Минск</span></li><li class="fxc-autocomplete-item" data-city="Минск" data-region="BY-X1~"><span class="fxc-autocomplete-city">Минск</span><span class="fxc-autocomplete-region">Минск</span></li><li class="fxc-autocomplete-item" data-city="Могилев" data-region="BY-MA"><span class="fxc-autocomplete-city">Могилев</span><span class="fxc-autocomplete-region">Могилевская область</span></li><li class="fxc-autocomplete-item" data-city="Мозырь" data-region="BY-HO"><span class="fxc-autocomplete-city">Мозырь</span><span class="fxc-autocomplete-region">Гомельская область</span></li><li class="fxc-autocomplete-item" data-city="Молодечно" data-region="BY-MI"><span class="fxc-autocomplete-city">Молодечно</span><span class="fxc-autocomplete-region">Минская Область</span></li><li class="fxc-autocomplete-item" data-city="Мосты" data-region="BY-HR"><span class="fxc-autocomplete-city">Мосты</span><span class="fxc-autocomplete-region">Гродненская Область</span></li><li class="fxc-autocomplete-item" data-city="Новогрудок" data-region="BY-HR"><span class="fxc-autocomplete-city">Новогрудок</span><span class="fxc-autocomplete-region">Гродненская Область</span></li><li class="fxc-autocomplete-item" data-city="Новополоцк" data-region="BY-VI"><span class="fxc-autocomplete-city">Новополоцк</span><span class="fxc-autocomplete-region">Витебская Oбласть</span></li><li class="fxc-autocomplete-item" data-city="Орша" data-region="BY-VI"><span class="fxc-autocomplete-city">Орша</span><span class="fxc-autocomplete-region">Витебская Oбласть</span></li><li class="fxc-autocomplete-item" data-city="Осиповичи" data-region="BY-MA"><span class="fxc-autocomplete-city">Осиповичи</span><span class="fxc-autocomplete-region">Могилевская область</span></li><li class="fxc-autocomplete-item" data-city="Пинск" data-region="BY-BR"><span class="fxc-autocomplete-city">Пинск</span><span class="fxc-autocomplete-region">Брестская область</span></li><li class="fxc-autocomplete-item" data-city="Полоцк" data-region="BY-VI"><span class="fxc-autocomplete-city">Полоцк</span><span class="fxc-autocomplete-region">Витебская Oбласть</span></li><li class="fxc-autocomplete-item" data-city="Поставы" data-region="BY-VI"><span class="fxc-autocomplete-city">Поставы</span><span class="fxc-autocomplete-region">Витебская Oбласть</span></li><li class="fxc-autocomplete-item" data-city="Пружаны" data-region="BY-BR"><span class="fxc-autocomplete-city">Пружаны</span><span class="fxc-autocomplete-region">Брестская область</span></li><li class="fxc-autocomplete-item" data-city="Речица" data-region="BY-HO"><span class="fxc-autocomplete-city">Речица</span><span class="fxc-autocomplete-region">Гомельская область</span></li><li class="fxc-autocomplete-item" data-city="Рогачев" data-region="BY-HO"><span class="fxc-autocomplete-city">Рогачев</span><span class="fxc-autocomplete-region">Гомельская область</span></li><li class="fxc-autocomplete-item" data-city="Светлогорск" data-region="BY-HO"><span class="fxc-autocomplete-city">Светлогорск</span><span class="fxc-autocomplete-region">Гомельская область</span></li><li class="fxc-autocomplete-item" data-city="Слоним" data-region="BY-HR"><span class="fxc-autocomplete-city">Слоним</span><span class="fxc-autocomplete-region">Гродненская Область</span></li><li class="fxc-autocomplete-item" data-city="Слуцк" data-region="BY-MI"><span class="fxc-autocomplete-city">Слуцк</span><span class="fxc-autocomplete-region">Минская Область</span></li><li class="fxc-autocomplete-item" data-city="Сморгонь" data-region="BY-HR"><span class="fxc-autocomplete-city">Сморгонь</span><span class="fxc-autocomplete-region">Гродненская Область</span></li><li class="fxc-autocomplete-item" data-city="Солигорск" data-region="BY-MI"><span class="fxc-autocomplete-city">Солигорск</span><span class="fxc-autocomplete-region">Минская Область</span></li><li class="fxc-autocomplete-item" data-city="Столбцы" data-region="BY-MI"><span class="fxc-autocomplete-city">Столбцы</span><span class="fxc-autocomplete-region">Минская Область</span></li><li class="fxc-autocomplete-item" data-city="Щучин" data-region="BY-HR"><span class="fxc-autocomplete-city">Щучин</span><span class="fxc-autocomplete-region">Гродненская Область</span></li></ul>
</div>
</div>
<div class="row">
<div class="label-wrapper">
<label class="label" for="phone">phone</label>
</div>
<div class="input-wrapper">
<input class="input input-text" type="tel" id="phone" name="phone">
</div>
</div>
<div class="row">
<div class="label-wrapper">
<label class="label">ageRange</label>
</div>
<div class="input-wrapper">
<ul class="radio-list">
<li class="radio-item">
<input class="input input-radio" type="radio" id="ageRange1" name="ageRange" value="0-25">
<label class="label label-radio" for="ageRange1">25-</label>
</li>
<li class="radio-item">
<input class="input input-radio" type="radio" id="ageRange2" name="ageRange" value="25-50">
<label class="label label-radio" for="ageRange2">25 - 50</label>
</li>
<li class="radio-item">
<input class="input input-radio" type="radio" id="ageRange3" name="ageRange" value="50+">
<label class="label label-radio" for="ageRange3">50+</label>
</li>
</ul>
<div class="fxc-error-msg-container fxc-hidden" data-fxc-for="ageRange"></div>
</div>
</div>
<div class="row">
<div class="label-wrapper">
<label class="label" for="birthday">birthday</label>
</div>
<div class="input-wrapper">
<input class="input input-text" type="date" id="birthday" name="birthday" placeholder="yyyy-mm-dd">
</div>
</div>
<div class="row">
<div class="label-wrapper">
<label class="label" for="documentNumber">documentNumber</label>
</div>
<div class="input-wrapper">
<input class="input input-text" type="text" id="documentNumber" name="documentNumber">
</div>
</div>
<script class="fxc-captcha-template" type="text/template">
            <div class="row fxc-captcha-container">
                <div class="label-wrapper">
                    <label class="label" for="captcha">captcha</label>
                </div>
                <div class="input-wrapper">
                    <div class="captcha-demo-wrapper">
                        <img class="fxc-captcha-image" width="150" height="40" alt="captcha">
                        <div data-fxc-pending-for="captcha">
                            <button type="button" class="fxc-captcha-refresh">Refresh</button>
                        </div>
                    </div>
                    <input class="input input-text" type="text" id="captcha" name="captcha">
                </div>
            </div>
        </script>
<div class="row">
<div class="input-wrapper">
<br>
<input class="input input-button" type="submit" id="submitBtn" name="submitBtn" value="Submit">
</div>
</div>
<input type="hidden" name="affiliateLinkId"><input type="hidden" name="affiliateNetwork"><input type="hidden" name="affiliateOfferId"><input type="hidden" name="affiliatePartner"><input type="hidden" name="iso3166-2" value="BY-HM"><input type="hidden" name="partnersLink" value="https://lib.fxclub.org/"><input type="hidden" name="promoCampaign"><input type="hidden" name="promoCampaignUrl" value="https://lib.fxclub.org/"><input type="hidden" name="referrer"><input type="hidden" name="timezoneOffset" value="180"><input type="hidden" name="sourceId"><input type="hidden" name="sourceSession"><input type="hidden" name="gclid"><input type="hidden" name="facebookId"></form>

	</main><!-- #main -->
	<script src="https://lib.fxclub.org/js/jquery.js"></script>
	<script src="https://lib.fxclub.org/js/landing-api.js"></script>
	<script>
		
		var myLanding = fxcLanding.create({
            form: "#my-form",
            apiKey: "5efdfdae3efff07bdb11f2d9c689482091684e1c",
						accHost: 'https://api-account.fxclub.org/v1',
						geoHost: 'http://api-geo.fxclub.org/v1',
						iframe: '_self',
						registrationCallback: function (data, next) {
								console.log('Success!', data);
								next()
						}
        });
    
		console.log(fxcLanding);
	</script>
<?php
get_footer();
