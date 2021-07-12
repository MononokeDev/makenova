@extends('layout')

@section('title', 'Makenova')

@section('content')
    <section class="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mb-2">
                    <div class="main__card">
                        <div class="main__card__img">
                            <img src="https://leaderreaderjournal.com/wp-content/uploads/2021/01/dog.jpg"
                                 alt="Card image cap">
                        </div>

                        <div class="main__card__body">
                            <strong>Компаниям</strong> <br>
                            <span>компетентного сотрудника</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="main__card">
                        <div class="main__card__img">
                            <img
                                src="data:image/jpeg;base64,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"
                                alt="Card image cap">
                        </div>
                        <div class="main__card__body">
                            <strong>Компаниям</strong> <br>
                            <span>компетентного сотрудника</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="help">
        <div class="container">
            <div class="row justify-content-center">
                <h3 class="help__title">
                    Поможем <br>
                    найти работу <br>
                    вашей мечты
                </h3>
                <span class="help__title__small">Легко и просто в 1 клик</span>

                <form action="" class="help__form">
                    <input type="text" name="phone" id="phone" placeholder="+996 550 00 00 00">
                    <button id="help__form__submit" type="submit">Заказать консультацию</button>
                </form>
            </div>
        </div>
    </section>

    <section class="about_us">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h3 class="about_us__title">
                        Кто мы
                    </h3>
                </div>

                <div class="col-md-6 about_us__text">
                    <p>
                        <b>Мы Make Nova</b> - агенство <br>
                        предоставляющее услуги рекрутинга <br>
                        и аутстаффинга.
                    </p>
                    <p>
                        95% клиентов обращаются к нам повторно. <br>
                        Говорят - мы показываем результат <br>
                        и экономим время, предоставляя только <br>
                        кандидатов, максимально соответствующих <br>
                        требованиям - каждый пятый обычно <br>
                        получает предложение о работе.
                    </p>
                    <p>
                        Мы эффективны, так как используем <br>
                        передовые инструменты автоматизации <br>
                        и технологии поиска.
                    </p>
                </div>

                <div class="col-md-6 about_us__more">
                    <span class="about_us__more__text">
                        Узнать больше
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="achievements">
        <div class="container">
            <div class="row h-100 align-items-center">
                <div class="col-md-4">
                    <div class="achievements__card">
                        <h3 class="achievements__card__title">
                            92%
                        </h3>
                        <small class="achievements__card__small">
                            успешных кейсов
                        </small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="achievements__card">
                        <h3 class="achievements__card__title">
                            9
                        </h3>
                        <small class="achievements__card__small">
                            стран покрытия
                        </small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="achievements__card">
                        <h3 class="achievements__card__title">
                            3
                        </h3>
                        <small class="achievements__card__small">
                            года на рынке рекрутинга
                        </small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="achievements__card">
                        <h3 class="achievements__card__title">
                            5000+
                        </h3>
                        <small class="achievements__card__small">
                            интервью
                        </small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="achievements__card">
                        <h3 class="achievements__card__title">
                            10 000
                        </h3>
                        <small class="achievements__card__small">
                            человек в нашей <br>
                            базе сотрудников
                        </small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="achievements__card">
                        <h3 class="achievements__card__title">
                            800+
                        </h3>
                        <small class="achievements__card__small">
                            человек трудоустроены
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about_info">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="about_info__title">
                        Мы - мост между <br>
                        компаниями <br>
                        и специалистами,
                        любящими свою <br>
                        работу
                    </h3>
                </div>

                <div class="col-md-6 about_info__text">
                    <p>
                        Make Nova - рекрутинговое агенство <br>
                        полного цикла. Стремимся создать <br>
                        культуру взаимного процветания <br>
                        и увлеченности работой.
                    </p>
                    <p>
                        Мы слушаем, чувствуем, понимаем <br>
                        и соединяем людей и компании.
                    </p>
                    <p>
                        Проще говоря, если бы любите острую еду, <br>
                        то лучше не брать шаурму из оазиса на <br>
                        вынос, потому-что запеченная чили шаурма <br>
                        заходит ка ягненок, а выходит как шакал. <br>
                        А еще берите колу разливную. Она вкуснее.
                    </p>
                </div>

                <div class="col-md-6 about_info__more">
                    <span class="about_info__more__text">
                        Узнать больше
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="about_cards">
        <div class="container">
            <div class="row">
                <div class="col-md-4 about_cards__card">
                    <div class="about_cards__card__icon">
                        <img src="{{ asset('images/icons/discord.svg') }}" alt="">
                    </div>
                    <h3 class="about_cards__card__title">
                        800+
                    </h3>
                    <small class="about_cards__card__small">
                        человек трудоустроены
                    </small>
                </div>
                <div class="col-md-4 about_cards__card">
                    <div class="about_cards__card__icon">
                        <img src="{{ asset('images/icons/messenger.svg') }}" alt="">
                    </div>
                    <h3 class="about_cards__card__title">
                        800+
                    </h3>
                    <small class="about_cards__card__small">
                        человек трудоустроены
                    </small>
                </div>
                <div class="col-md-4 about_cards__card">
                    <div class="about_cards__card__icon">
                        <img src="{{ asset('images/icons/tinder.svg') }}" alt="">
                    </div>
                    <h3 class="about_cards__card__title">
                        800+
                    </h3>
                    <small class="about_cards__card__small">
                        человек трудоустроены
                    </small>
                </div>
            </div>
        </div>
    </section>

    <section class="partners">
        <h3 class="partners__title">Наши партнеры</h3>

        <div class="splide partners__swiper">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{ asset('images/icons/discord.svg') }}" alt="">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('images/icons/messenger.svg') }}" alt="">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('images/icons/tinder.svg') }}" alt="">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('images/icons/discord.svg') }}" alt="">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('images/icons/messenger.svg') }}" alt="">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('images/icons/tinder.svg') }}" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="team">
        <div class="container">
            <div class="row">
                <h3 class="team__title">Компанда Make Nova</h3>

                <div class="splide team__swiper">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="card" >
                                    <img class="card-img-top" src="https://pictures-of-cats.org/wp-content/uploads/2018/08/cat-staring-at-something.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Алина Макенова</h5>
                                        <p class="card-text">СЕО, Кофаундер</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card" >
                                    <img class="card-img-top" src="https://pictures-of-cats.org/wp-content/uploads/2018/08/cat-staring-at-something.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Алина Макенова</h5>
                                        <p class="card-text">СЕО, Кофаундер</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card" >
                                    <img class="card-img-top" src="https://pictures-of-cats.org/wp-content/uploads/2018/08/cat-staring-at-something.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Алина Макенова</h5>
                                        <p class="card-text">СЕО, Кофаундер</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card" >
                                    <img class="card-img-top" src="https://pictures-of-cats.org/wp-content/uploads/2018/08/cat-staring-at-something.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Алина Макенова</h5>
                                        <p class="card-text">СЕО, Кофаундер</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card" >
                                    <img class="card-img-top" src="https://pictures-of-cats.org/wp-content/uploads/2018/08/cat-staring-at-something.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Алина Макенова</h5>
                                        <p class="card-text">СЕО, Кофаундер</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card" >
                                    <img class="card-img-top" src="https://pictures-of-cats.org/wp-content/uploads/2018/08/cat-staring-at-something.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Алина Макенова</h5>
                                        <p class="card-text">СЕО, Кофаундер</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
