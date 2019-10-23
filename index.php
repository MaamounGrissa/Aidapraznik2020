<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aidapraznik</title>
    <!-- FontAwesome script -->
    <script src="https://kit.fontawesome.com/a661f852b0.js"></script>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Kurale&display=swap" rel="stylesheet">
    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--  Header (Top Bar) -->

    <div class="top-bar">
        <div class="container flex">

            <!--  Company Name & Logo -->

            <div class="company">
                <img src="imgs/Logo.png" alt="logo">
                <h1>АЙ ДА ПРАЗДНИК</h1>
            </div>

            <!--  Company Phone -->

            <div class="phone">
                <img src="imgs/whatsapp.png" alt="whatsapp">
                <span>+7 905 766 92 70</span>
            </div>

            <!--  Nav (Menu) -->

            <nav>
                <ul>
                    <li>Цены</li>
                    <li>Фото</li>
                    <li>Отзывы</li>
                    <li>Контакты</li>
                </ul>
            </nav>

            <!--  Nav (Mobile Version Button) -->

            <i id="open-menu" class="fas fa-bars"></i>
        </div>
    </div>
    <header>
        <div class="image">
            <div class="quiz">

                <!--  FORM QUIZ -->

                <form method="POST" name="quizForm">

                    <!--  Quest 1 -->

                    <div id="quest1">
                        <h5>Вопрос 1 из 5</h5>
                        <h5>Вам нужен Дед Мороз со Снегурочкой или без?</h5>
                        <div class="answer">
                            <div class="element">
                                <input type="radio" name="radio1" value="да" id="opt1-1" class="input-hidden" checked />
                                <label for="opt1-1">
                                    <img src="imgs/quiz/1-1.png" alt="1-1">
                                    да
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio1" value="нет" id="opt1-2" class="input-hidden" />
                                <label for="opt1-2">
                                    <img src="imgs/quiz/1-2.png" alt="1-2">
                                    нет
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio1" value="не знаю" id="opt1-3" class="input-hidden" />
                                <label for="opt1-3">
                                    <img src="imgs/quiz/1-3.jpg" alt="1-3">
                                    не знаю
                                </label>
                            </div>
                        </div>
                    </div>

                    <!--  Quest 2 -->

                    <div id="quest2" style="display: none">
                        <h5>Вопрос <span>2</span> из 5</h5>
                        <h5>Артисты нужны ?</h5>
                        <div class="answer">
                            <div class="element">
                                <input type="radio" name="radio2" value="На дом" id="opt2-1" class="input-hidden"
                                    checked />
                                <label for="opt2-1">
                                    <img src="imgs/quiz/2-1.jpg" alt="2-1">
                                    На дом
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio2" value="На утренник" id="opt2-2"
                                    class="input-hidden" />
                                <label for="opt2-2">
                                    <img src="imgs/quiz/2-2.png" alt="2-2">
                                    На утренник
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio2" value="В школу" id="opt2-3" class="input-hidden" />
                                <label for="opt2-3">
                                    <img src="imgs/quiz/2-3.png" alt="2-3">
                                    В школу
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio2" value="В офис" id="opt2-4" class="input-hidden" />
                                <label for="opt2-4">
                                    <img src="imgs/quiz/2-4.jpg" alt="2-4">
                                    В офис
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio2" value="На корпоратив" id="opt2-5"
                                    class="input-hidden" />
                                <label for="opt2-5">
                                    <img src="imgs/quiz/2-5.png" alt="2-5">
                                    На корпоратив
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio2" value="Во двор дома" id="opt2-6"
                                    class="input-hidden" />
                                <label for="opt2-6">
                                    <img src="imgs/quiz/2-6.jpg" alt="2-6">
                                    Во двор дома
                                </label>
                            </div>
                        </div>
                    </div>

                    <!--  Quest 3 -->

                    <div id="quest3" style="display: none">
                        <h5>Вопрос <span>3</span> из 5</h5>
                        <h5>Классическое поздравление или сказка ?</h5>
                        <div class="answer">
                            <div class="element">
                                <input type="radio" name="radio3" value="Классическое поздравление" id="opt3-1"
                                    class="input-hidden" checked />
                                <label for="opt3-1">
                                    <img src="imgs/quiz/3-1.jpg" alt="3-1">
                                    Классическое поздравление
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio3" value="Сказка" id="opt3-2" class="input-hidden" />
                                <label for="opt3-2">
                                    <img src="imgs/quiz/3-2.jpg" alt="3-2">
                                    Сказка
                                </label>
                            </div>
                        </div>
                    </div>

                    <!--  Quest 4 -->

                    <div id="quest4" style="display: none">
                        <h5>Вопрос <span>4</span> из 5</h5>
                        <h5>Вам нужны дополнительные шоу ?</h5>
                        <div class="answer">
                            <div class="element">
                                <input type="radio" name="radio4" value="Да" id="opt4-1" class="input-hidden" checked />
                                <label for="opt4-1">
                                    <img src="imgs/quiz/4-1.png" alt="4-1">
                                    Да
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio4" value="Нет" id="opt4-2" class="input-hidden" />
                                <label for="opt4-2">
                                    <img src="imgs/quiz/4-2.jpg" alt="4-2">
                                    Нет
                                </label>
                            </div>
                        </div>
                    </div>

                    <!--  Quest 5 -->

                    <div id="quest5" style="display: none">
                        <h5>Вопрос <span>5</span> из 5</h5>
                        <h5>Дата праздника?</h5>
                        <div class="answer">
                            <div class="element">
                                <input type="radio" name="radio5" value="16-19" id="opt5-1" class="input-hidden"
                                    checked />
                                <label for="opt5-1">
                                    <img src="imgs/quiz/calendar.jpg" alt="calendar">
                                    16-19
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio5" value="20-22" id="opt5-2" class="input-hidden" />
                                <label for="opt5-2">
                                    <img src="imgs/quiz/calendar.jpg" alt="calendar">
                                    20-22
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio5" value="23-26" id="opt5-3" class="input-hidden" />
                                <label for="opt5-3">
                                    <img src="imgs/quiz/calendar.jpg" alt="calendar">
                                    23-26
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio5" value="27-30" id="opt5-4" class="input-hidden" />
                                <label for="opt5-4">
                                    <img src="imgs/quiz/calendar.jpg" alt="calendar">
                                    27-30
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio5" value="31" id="opt5-5" class="input-hidden" />
                                <label for="opt5-5">
                                    <img src="imgs/quiz/calendar.jpg" alt="calendar">
                                    31
                                </label>
                            </div>
                            <div class="element">
                                <input type="radio" name="radio5" value="1-7" id="opt5-6" class="input-hidden" />
                                <label for="opt5-6">
                                    <img src="imgs/quiz/calendar.jpg" alt="calendar">
                                    1-7
                                </label>
                            </div>
                        </div>
                    </div>

                    <!--  Quiz Form (Name & Phone) -->

                    <div class="form" style="display: none;">
                        <h5>Мы с вами свяжемся и предложим лучшие варианты</h5>
                        <div class="name-phone">
                            <div>
                                <input type="text" id="name" name="quizUsername" placeholder="Имя">
                                <input type="text" id="phone" name="quizUserPhone" placeholder="Телефон">
                            </div>
                        </div>
                        <!--  Errors Output -->
                        <div class="quizErrorMsg un">
                            <i class="fas fa-times-circle"></i><span id="errMessageun">Поле не может быть пустым</span>
                        </div>
                        <div class="quizErrorMsg ph">
                            <i class="fas fa-times-circle"></i><span id="errMessageph">Поле не может быть пустым</span>
                        </div>
                    </div>

                    <!--  Result Sending Mail -->

                    <!--  Success -->
                    <div class="ok" style="display: none">
                        <i class="fas fa-check-circle"></i>
                        <p>Спасибо,мы свяжемся с вами в течении 5 минут в рабочее время</p>
                    </div>

                    <!--  Error -->
                    <div class="notOk" style="display: none">
                        <i class="fas fa-times-circle"></i>
                        <p>Error</p>
                    </div>

                    <!--  Buttons (Previous, Next, SubmitForm) -->
                    <div class="btn">
                        <button type="button" id="previous" disabled>ВЕРНУТЬСЯ</button>
                        <button type="button" id="submit">ДАЛЕЕ</button>
                        <input id="sendMail" type="submit" value="ДАЛЕЕ">
                    </div>
                </form>
            </div>

            <!--  IMG Christ -->
            <img class="christ" src="imgs/christ.png" alt="christ">
        </div>
    </header>

    <article class="container">

        <!--  Section Price -->
        <section id="price">
            <h2>Цены</h2>
            <h3>Дед Мороз и Снегурочка</h3>

            <!--  Nav Table -->
            <div class="g-block">

                <!--  Aside.block-place => For Mobile Version -->
                <aside class="block-place">

                    <!--  Item 1 => На дом -->
                    <div class="place">
                        <input type="radio" name="radio-table" value="1" id="opt0-1" class="input-hidden" checked>
                        <label for="opt0-1">
                            <img src="imgs/ch1.png" alt="ch1">
                            На дом
                        </label>
                    </div>

                    <!--  Item 2 => На утренник, в детский, сад, клуб, центр -->
                    <div class="place">
                        <input type="radio" name="radio-table" value="2" id="opt0-2" class="input-hidden" />
                        <label for="opt0-2">
                            <img src="imgs/ch2.png" alt="ch2">
                            На утренник<br>в детский<br>сад/клуб/центр
                        </label>
                    </div>

                    <!--  Item 3 => В школу -->
                    <div class="place">
                        <input type="radio" name="radio-table" value="3" id="opt0-3" class="input-hidden" />
                        <label for="opt0-3">
                            <img src="imgs/ch3.png" alt="ch3">
                            В школу
                        </label>
                    </div>
                </aside>

                <aside class="block-place">

                    <!--  Item 4 => Во двор дома -->
                    <div class="place">
                        <input type="radio" name="radio-table" value="4" id="opt0-4" class="input-hidden" />
                        <label for="opt0-4">
                            <img src="imgs/ch4.png" alt="ch4">
                            Во двор дома
                        </label>
                    </div>

                    <!--  Item 5 => В офис -->
                    <div class="place">
                        <input type="radio" name="radio-table" value="5" id="opt0-5" class="input-hidden" />
                        <label for="opt0-5">
                            <img src="imgs/ch5.png" alt="ch5">
                            В офис
                        </label>
                    </div>

                    <!--  Item 6 => На корпоратив -->
                    <div class="place">
                        <input type="radio" name="radio-table" value="6" id="opt0-6" class="input-hidden" />
                        <label for="opt0-6">
                            <img src="imgs/ch2.png" alt="ch2">
                            На корпоратив
                        </label>
                    </div>
                </aside>
            </div>

            <!--  Table -->

            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th rowspan="2">Дата праздника</th>
                            <th colspan="3">Вызов Деда Мороза (без Снегурочки)</th>
                            <th colspan="3">Вызов Деда Мороза со Снегурочкой</th>
                        </tr>
                        <tr>
                            <th>15 минут</th>
                            <th>30 минут</th>
                            <th>1 час</th>
                            <th>15 минут</th>
                            <th>30 минут</th>
                            <th>1 час</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>До 13 декабря</td>
                            <td></td>
                            <td></td>
                            <td>2500</td>
                            <td></td>
                            <td></td>
                            <td>5000</td>
                        </tr>
                        <tr>
                            <td>14-15 декабря</td>
                            <td>2000</td>
                            <td>2500</td>
                            <td>3000</td>
                            <td>4000</td>
                            <td>5000</td>
                            <td>6000</td>
                        </tr>
                        <tr>
                            <td>16-19 декабря</td>
                            <td>2000</td>
                            <td>2500</td>
                            <td>3500</td>
                            <td>4000</td>
                            <td>5000</td>
                            <td>6000</td>
                        </tr>
                        <tr>
                            <td>20 декабря</td>
                            <td>2500</td>
                            <td>3500</td>
                            <td>4000</td>
                            <td>4000</td>
                            <td>6000</td>
                            <td>7000</td>
                        </tr>
                        <tr>
                            <td>21-22 декабря</td>
                            <td>2500</td>
                            <td>3500</td>
                            <td>4000</td>
                            <td>4500</td>
                            <td>6000</td>
                            <td>7000</td>
                        </tr>
                        <tr>
                            <td>23-26 декабря</td>
                            <td>2000</td>
                            <td>3000</td>
                            <td>3500</td>
                            <td>4000</td>
                            <td>5000</td>
                            <td>7000</td>
                        </tr>
                        <tr>
                            <td>27 декабря</td>
                            <td>2500</td>
                            <td>3500</td>
                            <td>4000</td>
                            <td>4500</td>
                            <td>5500</td>
                            <td>7000</td>
                        </tr>
                        <tr>
                            <td>28-29 декабря</td>
                            <td>2500</td>
                            <td>3500</td>
                            <td>4500</td>
                            <td>4500</td>
                            <td>6000</td>
                            <td>7500</td>
                        </tr>
                        <tr>
                            <td>30 декабря</td>
                            <td>2000</td>
                            <td>3000</td>
                            <td>4000</td>
                            <td>4000</td>
                            <td>5500</td>
                            <td>7000</td>
                        </tr>
                        <tr>
                            <td>31 декабря с 9:00 до 12:00</td>
                            <td>3000</td>
                            <td>3500</td>
                            <td>5000</td>
                            <td>6000</td>
                            <td>7000</td>
                            <td>8000</td>
                        </tr>
                        <tr>
                            <td>31 декабря с 12:00 до 16:00</td>
                            <td>3500</td>
                            <td>4000</td>
                            <td>5500</td>
                            <td>6500</td>
                            <td>7500</td>
                            <td>9000</td>
                        </tr>
                        <tr>
                            <td>31 декабря с 16:00 до 19:00</td>
                            <td>4000</td>
                            <td>5000</td>
                            <td>7000</td>
                            <td>8000</td>
                            <td>9000</td>
                            <td>12000</td>
                        </tr>
                        <tr>
                            <td>31 декабря с 19:00 до 21:00</td>
                            <td>5000</td>
                            <td>6000</td>
                            <td>8000</td>
                            <td>10000</td>
                            <td>12000</td>
                            <td>15000</td>
                        </tr>
                        <tr>
                            <td>31 декабря с 21:00 до 22:00</td>
                            <td>7000</td>
                            <td>8000</td>
                            <td>9000</td>
                            <td>12000</td>
                            <td>15000</td>
                            <td>20000</td>
                        </tr>
                        <tr>
                            <td>Новогодняя ночь с 22:00 до 1:30</td>
                            <td>10000</td>
                            <td>11000</td>
                            <td>16000</td>
                            <td>20000</td>
                            <td>22000</td>
                            <td>30000</td>
                        </tr>
                        <tr>
                            <td>Новогодняя ночь, после 1:30</td>
                            <td>5000</td>
                            <td>6000</td>
                            <td>8000</td>
                            <td>9000</td>
                            <td>13000</td>
                            <td>15000</td>
                        </tr>
                        <tr>
                            <td>01 января с 10:00</td>
                            <td>2500</td>
                            <td>3500</td>
                            <td>4500</td>
                            <td>5000</td>
                            <td>6000</td>
                            <td>7000</td>
                        </tr>
                        <tr>
                            <td>02-09 января</td>
                            <td>2500</td>
                            <td>3000</td>
                            <td>4000</td>
                            <td>4000</td>
                            <td>5000</td>
                            <td>7000</td>
                        </tr>
                        <tr>
                            <td>с 10 января</td>
                            <td>1500</td>
                            <td>2500</td>
                            <td>3000</td>
                            <td>3500</td>
                            <td>4000</td>
                            <td>5500</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>

        <!--  Section Photos Slider -->
        <!--  Created with Owl Carousel Plugin -->

        <section id="photos">
            <h2>Фото</h2>
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage ">
                        <div class="owl-item"><img src="imgs/caroussel/Photo2.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo3.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo4.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo5.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo6.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo1.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo7.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo8.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo9.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo10.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo11.jpeg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo12.jpeg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo13.jpeg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo14.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo15.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo16.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo17.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo18.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo19.jpg" alt="Photo"></div>
                        <div class="owl-item"><img src="imgs/caroussel/Photo20.jpg" alt="Photo"></div>
                    </div>
                </div>
                <div class="owl-nav">
                    <div class="owl-prev"><img src="imgs/previous.png" alt="Prev"></div>
                    <div class="owl-next"><img src="imgs/next.png" alt="Next"></div>
                </div>
                <div class="owl-dots">
                    <div class="owl-dot active"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                    <div class="owl-dot"><span></span></div>
                </div>
            </div>
        </section>

        <!--  Section Reviews -->

        <section id="reviews">
            <h2>Отзывы</h2>
            <div class="review">
                <img src="imgs/reviews/review1.jpeg" alt="review1">
                <img src="imgs/reviews/review2.jpeg" alt="review2">
                <img src="imgs/reviews/review3.jpeg" alt="review3">
                <img src="imgs/reviews/review4.jpeg" alt="review4">
            </div>
        </section>

        <!--  Section Contact -->

        <section id="contact-us">
            <h2>Контакты</h2>
            <div class="contact">

                <!--  Contact Informations -->

                <div class="coord">
                    <div>
                        <i class="fas fa-phone-square"></i>
                        <span>8 905 766 92 70</span>
                        <span>(есть Whatsapp)</span>
                    </div>
                    <div>
                        <i class="fas fa-envelope-open-text"></i>
                        <span>Helgaburaya@yandex.ru</span>
                    </div>
                    <div>
                        <p>Вы можете оставить заявку на обратную связь.А так же связаться с нами в Whats
                            app,vkontakte,facebook,instagram,e-mail.Мы отвечаем в любой сети в течении 5 минут рабочего
                            времени.</p>
                        <div>
                            <i class="fab fa-vk"></i>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-instagram"></i>
                        </div>

                    </div>
                </div>

                <!--  Span for HR (Line) -->

                <span></span>

                <!--  Contact Form -->

                <div class="contact-form">
                    <form id="sendEmail2" method="POST">

                        <!--  Name Input -->

                        <div>
                            <i class="fas fa-address-book"></i>
                            <input type="text" name="userName" placeholder="Имя" required>
                        </div>
                        <!--  Name Errors -->
                        <div class="errorMsg errorName">
                            Поле не может быть пустым
                        </div>

                        <!--  Phone Input -->

                        <div>
                            <i class="fas fa-phone-square-alt"></i>
                            <input type="text" name="userPhone" placeholder="Телефон" required>
                        </div>
                        <!--  Phone Errors -->
                        <div class="errorMsg errorPhone1">
                            Поле не может быть пустым
                        </div>
                        <div class="errorMsg errorPhone2">
                            Неверно указан номер
                        </div>

                        <!--  Message Input -->

                        <div>
                            <i class="fas fa-align-justify"></i>
                            <textarea name="userMsg" placeholder="Сообщение"></textarea>
                        </div>

                        <!-- Display Success Message -->

                        <div class="okContact">
                            <i class="fas fa-check-circle"></i>
                            <p>Спасибо,мы свяжемся с вами в течении 5 минут в рабочее время</p>
                        </div>

                        <!-- Display Error Message -->

                        <div class="notOkContact">
                            <i class="fas fa-times-circle"></i>
                            <p>Error</p>
                        </div>

                        <!--  Contact Form Submit -->

                        <input type="submit" value="Отправить" class="submitForm">

                    </form>
                </div>
            </div>
        </section>
    </article>

    <!--  Site Footer -->

    <footer>
        <div class="container flex">
            <p>©2019 АЙ ДА ПРАЗДНИК</p>
            <div class="sociaux">
                <img src="imgs/vk.png" alt="vk" title="VK">
                <img src="imgs/facebook.png" alt="facebook" title="Facebook">
                <img src="imgs/instagram.png" alt="instagram" title="Instagram">
            </div>
            <p>Created by Maàmoun Grissa</p>
        </div>
    </footer>
	
	<!-- JS FILES-->
	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>