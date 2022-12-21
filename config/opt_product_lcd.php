<!-- https://skynet-service.com/price/opt-lcd.csv -->

<?php

$optlcdProduct = "https://skynet-service.com/price/opt-lcd.csv";

$num2 = 0;
if (($handle = fopen($optlcdProduct, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
    $num2++;
    $discountopt = false;
    $discountoptM = false;
    $name = $data[0];
    $link = $data[1];
    // $price = $data[2];
    $quantity  = $data[3];
    $image  = $data[4];
    // local
    $opt1  = (int) $data[5];
    $opt2  = (int) $data[6];

    // for opt
    if($opt1 > 0 and $opt1 <= 50){
        $discountopt = 23;
    }elseif($opt1 > 50 and $opt1 <= 250){
        $discountopt = 19;
    }elseif($opt1 > 250 and $opt1 <= 400){
        $discountopt = 16;
    }elseif($opt1 > 400 and $opt1 <= 800){
      $discountopt = 13;
    }elseif($opt1 > 800 and $opt1 <= 1500){
      $discountopt = 11;
    }elseif($opt1 > 1500 and $opt1 <= 2500){
      $discountopt = 9;
    }elseif($opt1 > 2500 and $opt1 <= 4500){
      $discountopt = 6;
    }elseif($opt1 > 4500 and $opt1 <= 10000){
      $discountopt = 4;
    }elseif($opt1 > 10000 and $opt1 <= 30000){
      $discountopt = 3;
    }elseif($opt1 > 30000 and $opt1 <= 60000){
      $discountopt = 6;
    }elseif($opt1 > 60000 and $opt1 <= 80000){
      $discountopt = 4;
    }elseif($opt1 > 80000 and $opt1 <= 160000){
      $discountopt = 3;
    }
    else{
        $discountopt = 2;
    }
    // for opt-m
    if($opt2 > 0 and $opt2 <= 50){
      $discountoptM = 23;
  }elseif($opt2 > 50 and $opt2 <= 250){
      $discountoptM = 19;
  }elseif($opt2 > 250 and $opt2 <= 400){
      $discountoptM = 16;
  }elseif($opt2 > 400 and $opt2 <= 800){
    $discountoptM = 13;
  }elseif($opt2 > 800 and $opt2 <= 1500){
    $discountoptM = 11;
  }elseif($opt2 > 1500 and $opt2 <= 2500){
    $discountoptM = 9;
  }elseif($opt2 > 2500 and $opt2 <= 4500){
    $discountoptM = 6;
  }elseif($opt2 > 4500 and $opt2 <= 10000){
    $discountoptM = 4;
  }elseif($opt2 > 10000 and $opt2 <= 30000){
    $discountoptM = 3;
  }elseif($opt2 > 30000 and $opt2 <= 60000){
    $discountoptM = 6;
  }elseif($opt2 > 60000 and $opt2 <= 80000){
    $discountoptM = 4;
  }elseif($opt2 > 80000 and $opt2 <= 160000){
    $discountoptM = 3;
  }
  else{
      $discountoptM = 2;
  }


        if($num2 > 1 and $num2 < 18){
         ?>
<li class="product__item product__item-opt--lcd product__item--hidden-lcd--opt">
    <div class="product__char-list">
        <span class="product__char-item">На складе <?= $quantity?> шт</span>
    </div>
    <div class="product__avatar-container">
        <img class="product__img-avatar product__avatar" src="<?= $image?>" />
    </div>
    <!-- <p>
                    <span class="product__special-offer border-green с-green-light">В кредит от &#8381;/ мес.</span>
                </p> -->
    <!-- <p>
                    <span class="product__special-offer border-orange с-orange">Купите в Trade-In со скидкой</span>
                </p> -->
    <h3 class="our-prices__opt-product__title"><?= $name?></h3>
    <div class="product__price-btn-wrapper">
        <div class="product__price-container">
            <div class="our-prices__mb">
                <span class="our-prices__actual-price product__actual-price master-price">Опт-мастер:
                    <?= $opt2 . " &#8381;"?></span>
                <span class="our-prices__actual-price product__actual-price master-price master-price--old">
                    <?= (int)($opt2+$opt2/100*$discountoptM) . " &#8381;"?></span>
                <span
                    class="our-prices__product-percent-discount product__char-item"><?=" - " . $discountoptM . ' %' ?></span>
            </div>
            <div class="our-prices__mb">
                <span class="our-prices__actual-price">Опт: <?= $opt1 . " &#8381;"?></span>
                <span class="our-prices__actual-price master-price--old">
                    <?= (int)($opt1+$opt1/100*$discountopt) . " &#8381;"?></span>
                <span
                    class="our-prices__product-percent-discount product__char-item"><?=" - " . $discountopt . ' %' ?></span>
            </div>
        </div>
    </div>
    <div class="our-prices__price-btn-wrapper">
        <div>
            <a href="<?= $link?>" class="opt-btn btn btn--blue" target="_blank">В магазин</a>
        </div>
    </div>
</li>

<?php

        }
    }
    fclose($handle);
}

?>
