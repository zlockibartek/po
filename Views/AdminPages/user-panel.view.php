
<nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
    <div class="container-fluid">
        <a class="navbar-brand" href=""><?= $content['nick'] ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= get_site_url() ?>">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?action=history">Historia zamówień</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Zarządzaj kontem
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="?action=address">Zmień dane</a></li>
                        <li><a class="dropdown-item" href="?action=password">Zmień hasło</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<div class="entry-content clear" itemprop="text">
    <div class="bs_user_account_sidebar">
            <img alt="" src="https://secure.gravatar.com/avatar/2bf4db1523111b4b528931b819629455?s=150&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/2bf4db1523111b4b528931b819629455?s=300&amp;d=mm&amp;r=g 2x" class="avatar avatar-150 photo" height="150" width="150" loading="lazy"><br>
    </div>
    <br>
</div>
<p>Imię: <?= $content['name'] ?></p>
<p>Nazwisko: <?= $content['surname'] ?></p> 
<p>Adres rozliczeniowy: <?= $content['deliveryAddress']->getTown() . ', ' . $content['deliveryAddress']->getPostalCode() . ', ' . $content['deliveryAddress']->getStreet() . ' ' . $content['deliveryAddress']->getBuilding() . '/' . $content['deliveryAddress']->getApartament() ?></p>
<p>Adres wysyłki: <?= $content['paymentAddress']->getTown() . ', ' . $content['paymentAddress']->getPostalCode() . ', ' . $content['paymentAddress']->getStreet() . ' ' . $content['paymentAddress']->getBuilding() . '/' . $content['paymentAddress']->getApartament() ?></p>