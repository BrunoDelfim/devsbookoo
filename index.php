<?php

require 'config.php';
require 'models/Auth.php';

/** @var object $pdo **/
/** @var object $base **/

$auth       = new Auth($pdo, $base);
$userInfo   = $auth->checkToken();
$activeMenu = 'home';

// 1. Lista dos usuários que EU sigo

// 2. Pegar os posts dessa galera ordenado pela data DESC

// 3. Transformar o resultado em objetos dos models

require 'partials/header.php';
require 'partials/menu.php';

?>

<section class="feed mt-10">
    <div class="row">
        <div class="column pr-5">
            <?php require 'partials/feed-editor.php'; ?>

        </div>
        <div class="column side pl-5">
            <div class="box banners">
                <div class="box-header">
                    <div class="box-header-text">Patrocínios</div>
                    <div class="box-header-buttons">

                    </div>
                </div>
                <div class="box-body">
                    <a href=""><img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
                            alt="" /></a>
                    <a href=""><img src="https://cdn.pixabay.com/photo/2016/12/27/21/03/lone-tree-1934897__480.jpg"
                            alt="" /></a>
                </div>
            </div>
            <div class="box">
                <div class="box-body m-10">
                    Criado com ❤️ por Bruno Delfim
                </div>
            </div>
        </div>
    </div>
</section>

<?php require 'partials/footer.php' ?>