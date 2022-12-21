<?php
$awproducts = "https://skynet-service.com/price/aw_landing_products.csv";
$num2 = 0;
if (($handle = fopen($awproducts, "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
    $num2++;
    $count_mount = 12;
    $name = $data[0];
    $link = $data[1];
    $price = (int)$data[2];
    $quantity = $data[3];
    $imglink = $data[4];
    $oldprice = $price + 3600;
    $credit = $price / $count_mount;
    $credit = (int)$credit;

    if ($num2 > 1) {
?>
      <li class="product__item product__item--hidden-aw swiper-slide product-slide">
        <div class="product__char-list">
          <span class="product__char-item">Оригинал</span>
          <span class="product__char-item">Выгодная цена</span>
          <span class="product__char-item"><?= $quantity ?> шт</span>
        </div>
        <div class="product__avatar-container">
          <img class="product__img-avatar product__avatar" src="<?= $imglink ?>" />
        </div>
        <p>
          <span class="product__special-offer border-green с-green-light">В кредит от <?= $credit ?> &#8381;/ мес.</span>
        </p>
        <p>
          <span class="product__special-offer border-orange с-orange">Купите в Trade-In со скидкой до 40%</span>
        </p>
        <h3 class="product__title"><?= $name ?></h3>
        <div class="product__price-btn-wrapper">
          <div class="product__price-container">
            <span class="product__old-price"><?= $oldprice ?> &#8381;</span>
            <span class="product__actual-price"><?= $price ?> &#8381;</span>
          </div>
          <div class="product__price-btn-wrapper">
            <div>
              <a href="<?= $link ?>" class="btn btn--blue">Купить</a>
            </div>
          </div>
        </div>
      </li>

<?php

    }
  }
  fclose($handle);
}

?>
