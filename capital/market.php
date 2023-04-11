<?php 

    include 'components/header.php';
    include 'controller/config.php';

    $user = $db -> select('users', "`id` = {$_SESSION['user']}")[0];

    $shares = $db -> select('shares',"`owner_id` = {$_SESSION['user']}");

    $notifications = $db -> select('notifications', "`user_id` = {$user['id']}");
    $user = $db -> select('users',"`id`={$_SESSION['user']}")[0];
?>


    <main>
        <div class="navbar">
            <div class="searchBlock">
                <input placeholder="Поиск...">
                <div class="searchLogo">
                    <a href="#">
                        <img src="sources/images/search.png" alt="">
                    </a>
                </div>
            </div>
            <div class="mainSortFilterBlock">
                <div class="sortBlock">
                    <h3>Сортировать по цене:</h3>
                    <div class="priceInput">
                    <p>От <input></p>
                    <p>До <input></p>
                    </div>
                    <div class="costRange">
                        <div class="usingRange"></div>
                        <div class="uselessRange1"></div>
                        <div class="pointRange1"></div>
                        <div class="pointRange2"></div>
                        <div class="uselessRange2"></div>
                    </div>
                </div>

                <div class="filterBlock">
                    <h3>Фильтровать:</h3>
                    <div class="filterTypes">
                        <div class="filter1 filter ">
                            <div class="filterLA"></div>
                            <div class="filterRA"></div>
                            <p>Род деятельности</p>
                        </div>
                        <div class="filter filter2">
                            <div class="filterLA"></div>
                            <div class="filterRA"></div>
                            <p>По цене</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="shares">
            <div class="types">
                <div class="type typeName">
                    <p>Название</p>
                </div>
                <div class="type typeForMonth">
                <p>Изменение за месяц</p>
                </div>
                <div class="type typeForDay">
                <p>Изменение за день</p>
                </div>
                <div class="type typeCost">
                <p>Цена</p>
                </div>
            </div><br>
            <?php 
                $market = $db -> select('market',"1");
                 for($i = 0; $i < count($market); $i++){
                    $share = $db -> select('shares', "`company_id`='{$market[$i]['product_id']}'")[0];
                    $company = $db -> select('companies', "`id`='{$share['company_id']}'")[0];
            ?>

            <div class="share">
                <div class="shareIcon">
                    <img src="files/teslaLogo.png" alt="">
                </div>
                <div class="shareInfo">
                    <p class="shareName"><?= $company['name']?></p>
                    <br>
                    <p>Имеется: <?= $share['quantity']?></p>
                </div>
                <div class="forMonth">
                    <p class="positive number">+20,72(7,2%)</p>
                </div>
                <div class="forDay">
                    <p class="positive number">+7,94(+2,35%)</p>
                </div>
                <div class="cost">
                    <p class="number"><?= $market[0]['cost'] ?> ₮</p>
                </div>
            </div>

            <?php } ?>

        </div>
    </main>

    <footer>
        <h1>Тут будет подвал</h1>
    </footer>

    <script src="sources/js/script.js"></script>
</body>
</html>