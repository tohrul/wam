<?php
/**
 * Created by PhpStorm.
 * User: togrul.mamedov
 * Date: 22.08.2018
 * Time: 15:51
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/side-button.css">
    <link rel="stylesheet" href="css/loader.css">
</head>
<body>
	<!-- loader -->
	<div class="container">
		<div class="row">
			<div class="container">
				<div class="row">
					<a href="#" class="intro-banner-vdo-play-btn pinkBg" target="_blank">
						<i class="glyphicon glyphicon-play whiteText" aria-hidden="true"></i>
						<span class="ripple pinkBg"></span>
						<span class="ripple pinkBg"></span>
						<span class="ripple pinkBg"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /loader -->


    <div class="container-fluid">
        <div class="row">
            <!-- меню -->
            <nav class="col-md-2 d-none d-md-block mw-sidebar">
                <div class="mw-sidebar--sticky">

                    <ul class="mw-menu">
                        <li class="mw-menu--item"><a class="mw-menu--link" href="#">Мы</a></li>
                        <li class="mw-menu--item"><a class="mw-menu--link" href="#">Главная</a></li>
                        <li class="mw-menu--item"><a class="mw-menu--link" href="#">Деятельность "ВАМ"</a></li>
                        <li class="mw-menu--item no-border">
                            <a class="mw-menu--link" id="mw-media" href="#">
    Медиа
                                <i class="fa fa-angle-down mw-angle"></i>
                            </a>
                            <hr class="mw-line"/>
                            <ul class="sub-menu sub-menu--media">
                                <li class="sub-menu--item"><a class="sub-menu--link" href="#">Фотографии</a></li>
                                <li class="sub-menu--item"><a class="sub-menu--link" href="#">Видео</a></li>
                            </ul>
                        </li>
                        <li class="mw-menu--item no-border">
                            <a class="mw-menu--link" id="mw-interesting" href="#">
    Интересное
                                <i class="fa fa-angle-down mw-angle"></i>
                            </a>
                            <hr class="mw-line"/>
                            <ul class="sub-menu sub-menu--interesting">
                                <li class="sub-menu--item"><a class="sub-menu--link" href="#">Здоровье и красота</a></li>
                                <li class="sub-menu--item"><a class="sub-menu--link" href="#">Религия</a></li>
                                <li class="sub-menu--item"><a class="sub-menu--link" href="#">Семья</a></li>
                                <li class="sub-menu--item"><a class="sub-menu--link" href="#">Искусство</a></li>
                                <li class="sub-menu--item"><a class="sub-menu--link" href="#">Жизнь</a></li>
                                <li class="sub-menu--item"><a class="sub-menu--link" href="#">Кулинария</a></li>
                            </ul>
                        </li>
                        <li class="mw-menu--item"><a class="mw-menu--link" href="#">Проекты</a></li>
                        <li class="mw-menu--item"><a class="mw-menu--link" href="#">Контакты</a></li>
                    </ul>

                </div>
            </nav>
            <!-- конец меню -->

            <div class="col-md-9 ml-sm-auto col-lg-10 pl-0 pr-0">
                <!-- шапка -->
                <div class="header">
                    <div class="container-fluid d-flex flex-row flex-wrap align-items-center justify-content-center">
                    	<a href="#">
                        	<img class="logo" src="images/Logo_VAM_2_square.png" width="169px" height="169px" alt="Logo">
                    	</a>
                        <img class="title" src="images/7_1.png" width="489px" alt="Title">
                        <div class="ls-container ml-sm-auto mt-3 mt-sm-0 d-flex flex-column justify-content-between">
                            <div class="mw-lang form-group">
                            	<select class="form-control">
                            		<option>RU</option>
                            		<option>EN</option>
                            		<option>UA</option>
                            	</select>
                            </div>
                            <div class="mw-social d-flex flex-row justify-content-center align-items-center">
	                            <a class="mw-social--link" href="#">
	                                <i class="fab fa-facebook-f fa-2x"></i>
	                            </a>
	                            <a class="mw-social--link" href="#">
	                                <i class="fab fa-instagram fa-2x"></i>
	                            </a>
	                            <a class="mw-social--link" href="#">
	                                <i class="fab fa-youtube fa-2x"></i>
	                            </a>
                            </div>
                    	</div>
                	</div>
            	</div>
                <!-- конец шапки -->

                <!-- меню для мобильных устройств -->
            	<nav class="navbar navbar-light sticky-top bg-white d-block d-sm-none">
            		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mwNavbarNavDropdown" aria-controls="mwNavbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            			<span class="navbar-toggler-icon"></span>
            		</button>
            		<div class="collapse navbar-collapse" id="mwNavbarNavDropdown">
            			<ul class="navbar-nav">
            				<li class="nav-item">
            					<a class="nav-link" href="#">Мы</a>
            				</li>
            				<li class="nav-item">
            					<a class="nav-link" href="#">Главная</a>
            				</li>
            				<li class="nav-item">
            					<a class="nav-link" href="#">Деятельность ВАМ</a>
            				</li>
            				<li class="nav-item dropdown">
            					<a class="nav-link dropdown-toggle" href="#" id="mwMediaDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Медиа
            					</a>
            					<div class="dropdown-menu" aria-labelledby="mwMediaDropdownMenuLink">
            						<a class="dropdown-item" href="#">Фотографии</a>
            						<a class="dropdown-item" href="#">Видео</a>
            					</div>
            				</li>
            				<li class="nav-item dropdown">
            					<a class="nav-link dropdown-toggle" href="#" id="mwInterestingDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Интересное
            					</a>
            					<div class="dropdown-menu" aria-labelledby="mwInterestingDropdownMenuLink">
            						<a class="dropdown-item" href="#">Блоги</a>
            						<a class="dropdown-item" href="#">Здоровье и красота</a>
            						<a class="dropdown-item" href="#">Религия</a>
            						<a class="dropdown-item" href="#">Семья</a>
            						<a class="dropdown-item" href="#">Искусство</a>
            						<a class="dropdown-item" href="#">Жизнь</a>
            						<a class="dropdown-item" href="#">Кулинария</a>
            					</div>
            				</li>
            				<li class="nav-item">
            					<a class="nav-link" href="#">Проекты</a>
            				</li>
            				<li class="nav-item">
            					<a class="nav-link" href="#">Контакты</a>
            				</li>
            			</ul>
            		</div>
            	</nav>
                <!-- конец меню для мобильных устройств -->

                <!-- строка поиска -->
                <!-- конец строки поиска -->

                <!-- область для рекламы -->
                <!-- конец области для рекламы -->

                <!-- основной контент -->
                <main role="main" class="mt-20 mw-main">

                    <div class="container-fluid">
                        <!-- основной контент -->
                        <!-- HOMEPAGE MAIN CONTENT -->
                        <div class="d-flex flex-row flex-wrap justify-content-center justify-content-lg-between">
                            <div class="card-container">
                                <div class="card no-border">
                                    <img class="card-img-top" src="images/test.jpg" width="260px" height="180px" alt="Card Image">
                                    <div class="card-body">
                                        <h5 class="card-title title--dark"><a href="#" class="card-link">Card title</a></h5>
                                        <p class="card-text">This is a card with supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text d-flex flex-row justify-content-between">
                                            <small class="text-muted">01.08.2017</small>
                                            <span class="badge badge-mw">Статьи</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-container">
                                <div class="card no-border">
                                    <img class="card-img-top" src="images/test.jpg" width="260px" height="180px" alt="Card Image">
                                    <div class="card-body">
                                        <h5 class="card-title title--dark"><a href="#" class="card-link">Card title</a></h5>
                                        <p class="card-text">This is a card with supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text d-flex flex-row justify-content-between">
                                            <small class="text-muted">01.08.2017</small>
                                            <span class="badge badge-mw">Статьи</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-container">
                                <div class="card no-border">
                                    <img class="card-img-top" src="images/test.jpg" width="260px" height="180px" alt="Card Image">
                                    <div class="card-body">
                                        <h5 class="card-title title--dark"><a href="#" class="card-link">Card title</a></h5>
                                        <p class="card-text">This is a card with supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text d-flex flex-row justify-content-between">
                                            <small class="text-muted">01.08.2017</small>
                                            <span class="badge badge-mw">Статьи</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-container">
                                <div class="card no-border">
                                    <img class="card-img-top" src="images/test.jpg" width="260px" height="180px" alt="Card Image">
                                    <div class="card-body">
                                        <h5 class="card-title title--dark"><a href="#" class="card-link">Card title</a></h5>
                                        <p class="card-text">This is a card with supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text d-flex flex-row justify-content-between">
                                            <small class="text-muted">01.08.2017</small>
                                            <span class="badge badge-mw">Статьи</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-container">
                                <div class="card no-border">
                                    <img class="card-img-top" src="images/test.jpg" width="260px" height="180px" alt="Card Image">
                                    <div class="card-body">
                                        <h5 class="card-title title--dark"><a href="#" class="card-link">Card title</a></h5>
                                        <p class="card-text">This is a card with supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text d-flex flex-row justify-content-between">
                                            <small class="text-muted">01.08.2017</small>
                                            <span class="badge badge-mw">Статьи</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-container">
                                <div class="card no-border">
                                    <img class="card-img-top" src="images/test.jpg" width="260px" height="180px" alt="Card Image">
                                    <div class="card-body">
                                        <h5 class="card-title title--dark"><a href="#" class="card-link">Card title</a></h5>
                                        <p class="card-text">This is a card with supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text d-flex flex-row justify-content-between">
                                            <small class="text-muted">01.08.2017</small>
                                            <span class="badge badge-mw">Статьи</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /HOMEPAGE MAIN CONTENT -->
                        <!-- конец основного контента -->
                    </div>
                </main>
                <!-- конец основного контента -->

                <!-- подвал -->
                <footer class="footer">
                    <div class="container">
                        <span>Всегда с ВАМи!</span>
                        <div class="social-footer d-flex flex-row justify-content-center align-items-center">
                            <a class="mw-social--link" href="#">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </a>
                            <a class="mw-social--link" href="#">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a class="mw-social--link" href="#">
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </footer>
                <!-- конец подвала -->
            </div>
        </div>
    </div>

    <!-- объявление -->
	<div id="feedback">
		<a href="#popup1">Объявление!</a>
	</div>

	<div id="popup1" class="overlay">
		<div class="popup">
		    <div class="div1">
				<a class="close" href="#">
					<i class="fas fa-times fa-2x"></i>
				</a>
				<img class="popup-image" src="images/author.jpg" alt="Adverts">
		    </div>
		</div>
	</div>
	<!-- конец объявления -->

    <script type="application/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="application/javascript" src="js/bootstrap.js"></script>
    <script type="application/javascript" src="js/menu.js"></script>
    <script type="application/javascript" src="js/loader.js"></script>
</body>
</html>