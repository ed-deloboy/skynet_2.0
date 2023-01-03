<?php
// $m = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM `service_centres`"));
?>

<!-- acc-map -->
<section class="acc-map" id="acc-map">
    <div class="container">
        <h2 class="title-h2">Сервисные центры на карте</h2>
        <span class="lineOne"></span>

        <div class="acc-map__wrapper">
            <div class="acc-map__acc-container">
                <ul id="accFrance" class="acc__wrapper">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM `service_centres`");
                    while ($item = mysqli_fetch_assoc($sql)) {
                    ?>
                        <li class="acc-item">
                            <button class="acc-item__button">
                                <span class="acc-item__title"><?= $item['title'] ?></span>
                            </button>
                            <p class="acc-item__text">
                                <?= $item['address'] ?>
                                <span class="mt20 acc-item__text-desc"> Режим работы: </span>
                                <span class="acc-item__text-desc"><?= $item['weekdays'] ?></span>
                                <span class="acc-item__text-desc"><?= $item['weekend'] ?></span>
                                <span class="mt20 acc-item__text-desc"> Номер телефона: </span>
                                <span class="acc-item__text-desc">
                                    <a class="blue-link" href="tel:88007776897"><?= $item['phone'] ?></a>
                                    <?= $item['additional_number'] ?>
                                </span>
                            </p>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="acc-map__map-container">
                <div class="map-width" id="map"></div>
            </div>
        </div>
    </div>
</section>
