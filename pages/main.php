<header class="header header-main">
    <div class="container">
        <a class="logo" href="#">
            <img src="./images/header/logo.png" alt="смотрим финал лиги чемпионов вместе с лейс и пепси">
        </a>
        <div class="register-wrapper">
            <a href="#" class="header-home-link">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="19" viewBox="0 0 24 19">
                    <image width="24" height="19" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAATCAYAAACKsM07AAACH0lEQVQ4jZWVO2hUURCGv01CImhEMFEsREV8gF0U0ymCWChCEGKXQi1sBBFtxdpCsbEKphZUUERQOwsRESxN46OLCBojmneynxx31pzce2PWgcPumXvn/2f+mXtOTaVFawc6gQ3AV2A+wjqAnUAb8B34AiyBJoIWVod6Rv2g/lKvqmsjbkgdVyfVl+q6HK8V8E71mvrTJZtT76rb1EuxNxJYn8d3rKLOZuA2cDLkmYvyu4BBYDvwDqg3BSkhVGScVurNHvWNuhjZfVZPq4fUt2o9/PNZZe+LFbSVGBvNOgo8AQ7EfhQ4BXQD/cB54BGwEE1elvO/Kkh6n1MnIqMF9am6V70ZDU56P8t8k1kFqQc9KzV5jXorC5hVb6i71XtZIw15Xqn96pUsoXqQ78gJkt5b1AcZyGRMx+FCHyyQjKmD6onQv+kfVferbYlgk/o6a1oKOqYeVz+WYMs2Fcn0RTI5zr5E0KWOqDNBdFC9nJXdiiU5h9Vd6v3YJ6zupv696kV1qzqg/vgP8KalgbgeY3ohsJY1uT36kY6E6VJ4A2A21nzpacNGYljaq77kRaBWOcuN/WPgecx+H3A2vu7i/NcC64+tdlTkwS+AO0HwCRgqEFRa1Ze8ktUjs3p29qxqVQS1TKrcl/8W/68UVylRukimCy+nzL9lOo8DU3EJNS09myllW3GjbQSOAD2ZbwJ4mAEk4AGgt0CQBmHsrwf4DYTOi28nHxLHAAAAAElFTkSuQmCC"/>
                </svg>
            </a>
            <a  href="<?= $site_url ?>registration" class="registration-btn">Регистрация</a>
            <a class="header-contacts-link" href="<?= $site_url ?>contacts">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42" height="42" viewBox="0 0 42 42">
                    <image id="settings_1_" data-name="settings (1)" width="42" height="42" xlink:href="data:img/png;base64,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"/>
                </svg>
            </a>
        </div>
    </div>
</header>
<main id="main-page">
    <section class="main-row">
        <div class="main-column main-square">
            <div class="bg-main-top">
                <img src="./images/main/bg-top.jpg" alt="мероприятие в честь финала лиги чемпионов">
            </div>
            <div class="bg-prise">
                <img src="./images/main/prise.png" alt="мероприятие в честь финала лиги чемпионов 2">
            </div>
            <div class="bg-main-bottom">
                <img src="./images/main/bg-bottom.png" alt="мероприятие в честь финала лиги чемпионов 3">
            </div>
            <div class="container">
                <div class="main-square-title">23 августа!</div>
                <div class="main-square-subtitle">Смотрим Финал Лиги чемпионов <br>
                    вместе с LAY`S и Pepsi в Лужниках!</div>
                <div class="main-square-text">Специальные гости: Егор Крид и Клава Кока</div>
                <a href="<?= $site_url ?>registration" class="main-square-registration">Регистрация</a>
            </div>
        </div>
        <!-- /.main-column -->
        <div class="main-column main-right">
            <div class="elem-row">
                <div class="elem-column">
                    <div class="elem-img">
                        <img src="./images/main/item1.png" alt="призы">
                    </div>
                    <div class="elem-wrapper">
                        <div class="elem-title">забери</div>
                        <div class="elem-subtitle">
                            свой набор <br>
                            болельщика
                        </div>
                    </div>
                    <a href="<?= $site_url ?>gift" class="elem-link">Подробнее</a>
                </div>
                <div class="elem-column">
                    <div class="elem-img">
                        <img src="./images/main/item2.png" alt="специальные гости">
                    </div>
                    <div class="elem-wrapper">
                        <div class="elem-title">Специальные <br>гости мероприятия</div>
                        <div class="elem-subtitle">
                            ЕГОР КрИД и КЛАВА КОКА
                        </div>
                    </div>
                    <a href="<?= $site_url ?>scene" class="elem-link">Подробнее</a>
                </div>
                <div class="elem-column">
                    <div class="elem-img">
                        <img src="./images/main/item3.png" alt="специальные промокоды">
                    </div>
                    <div class="elem-wrapper">
                        <div class="elem-title">ВЫИГРАЙ </div>
                        <div class="elem-subtitle">промокод СИТИМОБИЛ <br>
                            и LAY’S & PEPSI BOX!
                        </div>
                    </div>
                    <a href="" class="elem-link">Подробнее</a>
                </div>
                <div class="elem-column">
                    <div class="elem-wrapper">
                        <div class="elem-title">Узнай </div>
                        <div class="elem-subtitle">подробности <br>
                            о мероприятии</div>
                    </div>
                    <a href="<?= $site_url ?>fanpark" class="elem-link">Подробнее</a>
                </div>
            </div>
        </div>
        <!-- /.main-column -->
    </section>
    <!-- /.main-row -->
</main>


