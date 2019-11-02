(function ($) {
    $(function () {

        // Adjust header height
        if ($(window).height() >= 600) {

            $(".image").height($(window).height())

        } else {

            // Mobile Version
            $(".image").height(500)

        }
       

        // Adjust header height on resize window

        $(window).resize(function () {

            if ($(window).height() >= 600) {
                $(".image").height($(window).height())
            } else {
                $(".image").height(500)
            }

        })

        // Opening menu (mobile version)

        $("#open-menu").click(function () {
            $("nav").slideToggle(800)
        })

        //  $(".christ").animate({ top: '90px' }, 1000)

        // Menu Animation

        $("nav ul li").each(function (index) {
            $(this).click(function () {

                switch (index) {
                    case 0:
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#price").offset().top
                        }, 1500)
                        break
                    case 1:
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#performance").offset().top
                        }, 1500)
                        break
                    case 2:
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#photos").offset().top
                        }, 1500)
                        break
                    case 3:
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#reviews").offset().top
                        }, 1500)
                        break
                    case 4:
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $("#contact-us").offset().top
                        }, 1500)
                        break
                }

            })
        })

        // QUIZ

        var rps1, rps2, rps3, rps4, rps5, name, phone, etape = 1

        $("#submit").click(function (event) {
            switch (etape) {
                case 1:
                    rps1 = $("#quest1 input[name=radio1]:checked").val()
                    $("#quest1").hide(0)
                    $("#quest2").show(0)
                    etape = 2
                    $("#previous").attr("disabled", false)
                    break
                case 2:
                    rps2 = $("#quest2 input[name=radio2]:checked").val()
                    $("#quest2").hide(0)
                    $("#quest3").show(0)
                    etape = 3
                    break
                case 3:
                    rps3 = $("#quest3 input[name=radio3]:checked").val()
                    $("#quest3").hide(0)
                    $("#quest4").show(0)
                    etape = 4
                    break
                case 4:
                    rps4 = $("#quest4 input[name=radio4]:checked").val()
                    $("#quest4").hide(0)
                    $("#quest5").show(0)
                    etape = 5
                    break
                case 5:
                    rps5 = $("#quest5 input[name=radio5]:checked").val()
                    $("#quest5").hide(0)
                    $(".form").show(0)
                    // Hide Next Button and Show Submit Button
                    $(this).hide(0)
                    $("#sendMail").show(0)
                    $(".btn div, input[type='submit']").css("margin", "2%")
                    // Hide Errors and Set Focus to Input Name
                    $(".ph").hide(0)
                    $(".un").hide(0)
                    $("input[name='quizUsername']").focus()
                    etape = 6
                    break
            }
        })

        $("#previous").click(function () {
            switch (etape) {
                case 2:
                    $("#quest2").hide(0)
                    $("#quest1").show(0)
                    $(this).attr("disabled", true)
                    etape = 1
                    break
                case 3:
                    $("#quest3").hide(0)
                    $("#quest2").show(0)
                    etape = 2
                    break
                case 4:
                    $("#quest4").hide(0)
                    $("#quest3").show(0)
                    etape = 3
                    break
                case 5:
                    $("#quest5").hide(0)
                    $("#quest4").show(0)
                    etape = 4
                    break
                case 6:
                    $(".form").hide(0)
                    $("#quest5").show(0)
                    $("#sendMail").hide(0)
                    $("#submit").show(0)
                    etape = 5
                    break
            }
        })

        // Cheking Error Form Quiz and Submit

        var quizUsernameErr = true,
            quizUserphoneErr = true

        // Name Errors
        $("input[name='quizUsername']").on("blur", function () {

            if ($(this).val() == "") {
                $(this).css("border", "1px solid #F00")
                $(".un").fadeIn(200)
                quizUsernameErr = true
            } else {
                $(this).css("border", "1px solid #080")
                $(".un").fadeOut(200)
                quizUsernameErr = false
            }
        })

        $("input[name='quizUsername']").keydown(function () {
            $(".un").fadeOut(500)
        })

        // Phone Errors

        $("input[name='quizUserPhone']").on("blur", function () {

            var valeur = $(this).val()
            if (valeur == '') {
                $(this).css("border", "1px solid #F00")
                $("#errMessageph").text("Поле не может быть пустым")
                $(".ph").fadeIn(200)
                quizUserphoneErr = true
            } else if (!$.isNumeric(valeur)) {
                $(this).css("border", "1px solid #F00")
                $("#errMessageph").text("Неверно указан номер")
                $(".ph").fadeIn(200)
                quizUserphoneErr = true
            } else if (valeur.length < 11) {
                $(this).css("border", "1px solid #F00")
                $("#errMessageph").text("Неверно указан номер")
                $(".ph").fadeIn(200)
                quizUserphoneErr = true
            } else {
                $(this).css("border", "1px solid #080")
                $(".ph").fadeOut(200)
                quizUserphoneErr = false
            }
        })

        $("input[name='quizUserPhone']").keydown(function () {
            $(".ph").fadeOut(500)
        })

        // Submit Form

        $("form[name='quizForm']").submit(function (event) {
            event.preventDefault()

            if (quizUsernameErr === true || quizUserphoneErr === true) {
                // ERROR (display errors msg)
                $("input[name='quizUserPhone'], input[name='quizUsername']").blur()

            } else {

                name = $("#name").val()
                phone = $("#phone").val()
                $(".form").hide(0)
                $("#sendMail").hide(400)
                $("#previous").hide(400)

                // SEND EMAIL HERE 

                // All Data in Object myQuiz 

                var data = {

                    "name": name,
                    "subject": "Email from Quiz App",
                    "message": '<h3>Email From : ' + name + '</h3><br><h3>Telephone : ' + phone + '</h3>' +
                        '<p><strong>Quest 1: </strong> Вам нужен Дед Мороз со Снегурочкой или без? <br>' + rps1 + '</p>' +
                        '<p><strong>Quest 2: </strong> Артисты нужны ? <br>' + rps2 + '</p>' +
                        '<p><strong>Quest 3: </strong> Классическое поздравление или сказка ? <br>' + rps3 + '</p>' +
                        '<p><strong>Quest 4: </strong> Вам нужны дополнительные шоу ? <br>' + rps4 + '</p>' +
                        '<p><strong>Quest 5: </strong> Дата праздника? <br>' + rps5 + '</p>'

                }

                // console.log(myQuiz)

                // Send Data to php File quiz.php

                $.ajax({
                    type: "POST",
                    url: window.location + "mail.php",
                    data: { myData: data },
                    dataType: 'json',
                    encode: true,
                    success: function (data) { $(".ok").show(0) },
                    error: function (data) { $(".notOk").show(0) }
                })

            }
        })

        // Table Switch

        $("input[name='radio-table']").each(function (i) {
            $(this).on("click", function () {

                switch (i) {
                    case 0:
                        $("tbody").html(
                            '<tr><td>До 13 декабря</td><td></td><td></td><td>2500</td><td></td><td></td><td>5000</td></tr><tr><td>14-15 декабря</td><td>2000</td><td>2500</td><td>3000</td><td>4000</td><td>5000</td><td>6000</td></tr><tr><td>16-19 декабря</td><td>2000</td><td>2500</td><td>3500</td><td>4000</td><td>5000</td><td>6000</td></tr><tr><td>20 декабря</td><td>2500</td><td>3500</td><td>4000</td><td>4000</td><td>6000</td><td>7000</td></tr><tr><td>21-22 декабря</td><td>2500</td><td>3500</td><td>4000</td><td>4500</td><td>6000</td><td>7000</td></tr><tr><td>23-26 декабря</td><td>2000</td><td>3000</td><td>3500</td><td>4000</td><td>5000</td><td>7000</td></tr><tr><td>27 декабря</td><td>2500</td><td>3500</td><td>4000</td><td>4500</td><td>5500</td><td>7000</td></tr><tr><td>28-29 декабря</td><td>2500</td><td>3500</td><td>4500</td><td>4500</td><td>6000</td><td>7500</td></tr><tr><td>30 декабря</td><td>2000</td><td>3000</td><td>4000</td><td>4000</td><td>5500</td><td>7000</td></tr><tr><td>31 декабря с 9:00 до 12:00</td><td>3000</td><td>3500</td><td>5000</td><td>6000</td><td>7000</td><td>8000</td></tr><tr><td>31 декабря с 12:00 до 16:00</td><td>3500</td><td>4000</td><td>5500</td><td>6500</td><td>7500</td><td>9000</td></tr><tr><td>31 декабря с 16:00 до 19:00</td><td>4000</td><td>5000</td><td>7000</td><td>8000</td><td>9000</td><td>12000</td></tr><tr><td>31 декабря с 19:00 до 21:00</td><td>5000</td><td>6000</td><td>8000</td><td>10000</td><td>12000</td><td>15000</td></tr><tr><td>31 декабря с 21:00 до 22:00</td><td>7000</td><td>8000</td><td>9000</td><td>12000</td><td>15000</td><td>20000</td></tr><tr><td>Новогодняя ночь с 22:00 до 1:30</td><td>10000</td><td>11000</td><td>16000</td><td>20000</td><td>22000</td><td>30000</td></tr><tr><td>Новогодняя ночь, после 1:30</td><td>5000</td><td>6000</td><td>8000</td><td>9000</td><td>13000</td><td>15000</td></tr><tr><td>01 января с 10:00</td><td>2500</td><td>3500</td><td>4500</td><td>5000</td><td>6000</td><td>7000</td></tr><tr><td>02-09 января</td><td>2500</td><td>3000</td><td>4000</td><td>4000</td><td>5000</td><td>7000</td></tr><tr><td>с 10 января</td><td>1500</td><td>2500</td><td>3000</td><td>3500</td><td>4000</td><td>5500</td></tr>'
                        )
                        break
                    case 1:
                        $("tbody").html(
                            '<tr><td>До 13 декабря</td><td></td><td></td><td>2500</td><td></td><td></td><td>5000</td></tr><tr><td>14-15 декабря</td><td></td><td></td><td>3000</td><td></td><td></td><td>6000</td></tr><tr><td>16-19 декабря</td><td></td><td></td><td>3000</td><td></td><td></td><td>5000</td></tr><tr><td>20 декабря</td><td></td><td></td><td>3000</td><td></td><td></td><td>6000</td></tr><tr><td>21-22 декабря</td><td></td><td></td><td>3500</td><td></td><td></td><td>6500</td></tr><tr><td>23-26 декабря</td><td></td><td></td><td>3500</td><td></td><td></td><td>7000</td></tr><tr><td>27 декабря</td><td></td><td></td><td>3500</td><td></td><td></td><td>7000</td></tr><tr><td>28-29 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>30 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 9:00 до 12:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 12:00 до 16:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 16:00 до 19:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 19:00 до 21:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 21:00 до 22:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Новогодняя ночь с 22:00 до 1:30</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Новогодняя ночь, после 1:30</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>01 января с 10:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>02-09 января</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>с 10 января</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                        )
                        break
                    case 2:
                        $("tbody").html(
                            '<tr><td>До 13 декабря</td><td></td><td></td><td>2500</td><td></td><td></td><td>5000</td></tr><tr><td>14-15 декабря</td><td></td><td></td><td>3000</td><td></td><td></td><td>6000</td></tr><tr><td>16-19 декабря</td><td></td><td></td><td>3000</td><td></td><td></td><td>5000</td></tr><tr><td>20 декабря</td><td></td><td></td><td>3000</td><td></td><td></td><td>6000</td></tr><tr><td>21-22 декабря</td><td></td><td></td><td>3500</td><td></td><td></td><td>6500</td></tr><tr><td>23-26 декабря</td><td></td><td></td><td>3500</td><td></td><td></td><td>7000</td></tr><tr><td>27 декабря</td><td></td><td></td><td>3500</td><td></td><td></td><td>7000</td></tr><tr><td>28-29 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>30 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 9:00 до 12:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 12:00 до 16:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 16:00 до 19:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 19:00 до 21:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 21:00 до 22:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Новогодняя ночь с 22:00 до 1:30</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Новогодняя ночь, после 1:30</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>01 января с 10:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>02-09 января</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>с 10 января</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                        )
                        break
                    case 3:
                        $("tbody").html(
                            '<tr><td>До 13 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>14-15 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>16-19 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>20 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>21-22 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>23-26 декабря</td><td>3000</td><td>3500</td><td>4500</td><td>5000</td><td>6000</td><td>8000</td></tr><tr><td>27 декабря</td><td>3000</td><td>3500</td><td>4500</td><td>5000</td><td>6000</td><td>8000</td></tr><tr><td>28-29 декабря</td><td>3500</td><td>4500</td><td>5000</td><td>6000</td><td>7000</td><td>9000</td></tr><tr><td>30 декабря</td><td>3000</td><td>3500</td><td>4500</td><td>5000</td><td>6000</td><td>8000</td></tr><tr><td>31 декабря с 9:00 до 12:00</td><td>3500</td><td>4500</td><td>5000</td><td>6000</td><td>7000</td><td>9000</td></tr><tr><td>31 декабря с 12:00 до 16:00</td><td>4000</td><td>5000</td><td>6000</td><td>7000</td><td>8000</td><td>10000</td></tr><tr><td>31 декабря с 16:00 до 19:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 19:00 до 21:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 21:00 до 22:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Новогодняя ночь с 22:00 до 1:30</td><td></td><td></td><td>от 10000</td><td></td><td></td><td>от 20000</td></tr><tr><td>Новогодняя ночь, после 1:30</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>01 января с 10:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>02-09 января</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>с 10 января</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                        )
                        break
                    case 4:
                        $("tbody").html(
                            '<tr><td>До 13 декабря</td><td></td><td>2000</td><td>2500</td><td></td><td>4000</td><td>5000</td></tr><tr><td>14-15 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>16-19 декабря</td><td>2500</td><td>3000</td><td>3500</td><td>4000</td><td>5000</td><td>6000</td></tr><tr><td>20 декабря</td><td>2500</td><td>3500</td><td>4500</td><td>4000</td><td>6000</td><td>8000</td></tr><tr><td>21-22 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>23-26 декабря</td><td>2500</td><td>3500</td><td>4000</td><td>4000</td><td>6000</td><td>7000</td></tr><tr><td>27 декабря</td><td>3500</td><td>4000</td><td>5000</td><td>5000</td><td>7000</td><td>9000</td></tr><tr><td>28-29 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>30 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 9:00 до 12:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 12:00 до 16:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 16:00 до 19:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 19:00 до 21:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 21:00 до 22:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Новогодняя ночь с 22:00 до 1:30</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Новогодняя ночь, после 1:30</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>01 января с 10:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>02-09 января</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>с 10 января</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                        )
                        break
                    case 5:
                        $("tbody").html(
                            '<tr><td>До 13 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>14-15 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>16-19 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>20 декабря</td><td></td><td></td><td>от 6000</td><td></td><td></td><td>от 8000</td></tr><tr><td>21-22 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>23-26 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>27 декабря</td><td></td><td></td><td>от 6000</td><td></td><td></td><td>от 8000</td></tr><tr><td>28-29 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>30 декабря</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 9:00 до 12:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 12:00 до 16:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 16:00 до 19:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 19:00 до 21:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>31 декабря с 21:00 до 22:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Новогодняя ночь с 22:00 до 1:30</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>Новогодняя ночь, после 1:30</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>01 января с 10:00</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>02-09 января</td><td></td><td></td><td></td><td></td><td></td><td></td></tr><tr><td>с 10 января</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>'
                        )
                        break
                }
            })
        })

        // Filtering Plugin

         // Galery Filtering Menu

        $("#performance button").each(function () {

            $(this).click(function () {
                $(this).addClass("active").siblings().removeClass("active")
                /*
                if ($(this).attr("data-filter") == ".ot5000" ) {
                    $("div.ot5000").css({
                        width: "100%",
                        height: "250px"
                    })
                } else {
                    $("div.ot5000").css({
                        width: "32%",
                        height: "90px"
                    })
                }

                if ($(this).attr("data-filter") == ".ot7000" ) {
                    $("div.ot7000").css({
                        width: "49%",
                        height: "180px"
                    })
                } else {
                    $("div.ot7000").css({
                        width: "32%",
                        height: "90px"
                    })
                }
                */

            })

        })

        // Filtering By Plugin Mix It Up

        var mixer = mixitup('#container');

        // Display Images on Full Screen

         $('#performance img').click(function(){
            var src = $(this).attr('src');
            $('<div>').css({
                background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
                backgroundSize: 'contain',
                width:'100%', height:'100%',
                position:'fixed',
                zIndex:'10000',
                top:'0', left:'0',
                cursor: 'zoom-out'
            }).click(function(){
                $(this).remove();
            }).appendTo('body');
        });

        // SLIDER

        $(".owl-carousel").owlCarousel({
            items: 1,
            autoplay: true,
            autoplayTimeout: 2000,
            loop: true,
            nav: true,
        });

        var owl = $('.owl-carousel');
        owl.owlCarousel();
        // Go to the next item
        $('.owl-next').click(function () {
            owl.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.owl-prev').click(function () {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl.trigger('prev.owl.carousel', [300]);
        })

        // Form Contact

        var nameError = true,
            phoneError = true

        $("input[name='userName']").on("blur", function () {
            if ($(this).val() == '') {
                $(this).css("border", "1px solid #F00")
                $(".errorName").fadeIn(200)
                nameError = true
            } else {
                $(this).css("border", "1px solid #080")
                $(".errorName").fadeOut(200)
                nameError = false
            }
        })

        $("input[name='userPhone']").on("blur", function () {
            var valeur = $(this).val()
            if (valeur == '') {
                $(this).css("border", "1px solid #F00")
                $(".errorPhone1").fadeIn(200)
                $(".errorPhone2").fadeOut(200)
                phoneError = true
                /*} else if (!$.isNumeric(valeur)) {
                    $(this).css("border", "1px solid #F00")
                    $(".errorPhone2").fadeIn(200)
                    phoneError = true*/
            } else if (valeur.length < 10 || !$.isNumeric(valeur)) {
                $(this).css("border", "1px solid #F00")
                $(".errorPhone2").fadeIn(200)
                $(".errorPhone1").fadeOut(200)
                phoneError = true
            } else {
                $(this).css("border", "1px solid #080")
                $(".errorPhone1").fadeOut(200)
                $(".errorPhone2").fadeOut(200)
                phoneError = false
            }
        })

        $("input[name='userName']").keydown(function () {
            $(".errorName").fadeOut(500)
        })

        $("input[name='userPhone']").keydown(function () {
            $(".errorPhone1").fadeOut(500)
            $(".errorPhone2").fadeOut(500)
        })

        $("#sendEmail2").submit(function (event) {
            event.preventDefault()
            if (nameError === true || phoneError === true) {

                $("input[name='userName'], input[name='userPhone']").blur()

            } else {

                // Send Mail

                contactName = $("input[name='userName']").val()
                contactPhone = $("input[name='userPhone']").val()
                contactMsg = $("textarea[name='userMsg']").val()

                // All Data in Object myQuiz 

                var data = {

                    "name": contactName,
                    "subject": "Email from Contact Form",
                    "message": '<h3>Email From : ' + contactName + '</h3><br><h3>Telephone : ' + contactPhone + '</h3><br>' +
                        '<p><strong>Message : </strong>' + contactMsg + '</p>'

                }


                // Send Data to php File contact.php

                $.ajax({
                    type: "POST",
                    url: window.location + "mail.php",
                    data: { myData: data },
                    dataType: 'json',
                    encode: true,
                    success: function (data) {
                        $(".okContact").show().delay(2000).hide(1000)
                        $("input[name='userName']").val('')
                        $("input[name='userPhone']").val('')
                        $("textarea[name='userMsg']").val('')
                    },
                    error: function (data) { $(".notOkContact").show().delay(3000).hide(1000) }
                })

            }
        })


        // Nice Scroll Plugin

        $("html").niceScroll({
            cursorcolor:"#E20338",
            cursorwidth:"10px",
            cursorborder: "1px solid #EEE",
            cursoropacitymax: ".8",

        })

    })


})(jQuery);