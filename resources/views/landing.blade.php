<section class="tab-content" style="background-image: url(images/bg1.png);">
        <h1 class="h11">
            Здравствуйте!<br>
            Куда бы Вы хотели отправиться?
        </h1>
        <div class="tab">
            <div style="padding-top: 10px; display: flex; flex-direction: row; justify-content: center; font-size: 15px;">
                <input type="radio" name="choice" class="d1" style="padding-right: 10px;">в обе стороны</input>
                <input type="radio" name="choice" class="d1" style="padding-right: 10px;">в один конец</input>
                <input type="radio" name="choice" class="d1" style="padding-right: 10px;">сложный маршрут</input>

            </div>
            <div style="justify-content: center;">
                <form class="tab1" method="post" action="scripts/search.php">
                    <div class="bb1">
                        <i class="fas fa-exchange-alt"></i>
                        <input type="text" name="from" class="b1" value="Откуда" style="text-align:center; background-color: white; color: #004777; font-size: 32px; align-items: center; justify-content: center;">
                        <input type="text" name="where" class="b1" value="Куда" style="text-align:center;background-color: white; color: #004777; font-size: 32px; align-items: center; justify-content: center;">
                    </div>
                    <div class="bb2">
                        <div class="b1" style="background-color: #004777; font-size: 32px; align-items: center; justify-content: center;">Даты &zwnj; <i class="far fa-calendar-alt" style="color: white;"></i></div>
                        <input type="submit" value="Готово" class="b1" style="color: white; border: none; background-color: #004777; font-size: 32px; align-items: center; justify-content: center;">
                    </div>
                </form>
            </div>
            <div style="padding: 10px; padding-bottom: 10px; margin: 0 auto; font-size: 15px;">
                Предыдущие запросы
            </div>
        </div>
    </section>