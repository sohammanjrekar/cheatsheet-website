<?php require_once 'Navbar.php'?>
    <div class="container">
        <div class="container my-5" style="padding-top: 5vh;">
            <div id="carouselExampleCaptions" class="carousel carousel-fade slide mt-5" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1" style="box-shadow:none"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2" style="box-shadow:none"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3" style="box-shadow:none"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/1.jpg" class="d-block w-100" alt="..." style="height: 70vh" />
                        <div class="carousel-caption d-none d-md-block">
                            <h1>CheatBook</h1>
                            <h3>Quick reference & Use snippets for rapid development</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/2.jpg" class="d-block w-100" alt="..." style="height: 70vh" />
                        <div class="carousel-caption d-none d-md-block">
                            <h1>CheatBook</h1>
                            <h3>Quickly recall when forget some syntax</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/3.jpg" class="d-block w-100" alt="..." style="height: 70vh" />
                        <div class="carousel-caption d-none d-md-block">
                            <h1>CheatBook</h1>
                            <h3>
                                Be productive after learning a new thing (i.e. programming language)
                            </h3>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev" style="box-shadow:none">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next" style="box-shadow:none">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <h1 class="text-center my-3">All languages cheatsheet</h1>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card">
                    <img src="assets/img/c.png" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">C language</h5>
                        <a href="languages/programming/c.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/python-icon.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Python language</h5>
                        <a href="languages/programming/python.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/c++.png" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">C++ language</h5>
                        <a href="languages/programming/cplus.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/java-icon.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">java language</h5>
                        <a href="languages/programming/java.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/html.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">HTML</h5>
                        <a href="languages/webdev/html.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/css.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">CSS</h5>
                        <a href="languages/webdev/css.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/javascript-icon.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">JavaScript</h5>
                        <a href="languages/webdev/javascript.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/nodejs-icon.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Nodejs</h5>
                        <a href="languages/webdev/nodejs.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/reactjs-icon.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Reactjs</h5>
                        <a href="languages/webdev/react.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/nextjs-icon.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Nextjs</h5>
                        <a href="languages/webdev/nextjs.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/angular-icon.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Angularjs</h5>
                        <a href="languages/webdev/angularjs.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/flask.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Flask</h5>
                        <a href="languages/webdev/flask.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/django.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Django</h5>
                        <a href="languages/webdev/django.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/fastapi.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">FastAPI</h5>
                        <a href="languages/webdev/fastapi.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/php-icon.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">PHP</h5>
                        <a href="languages/webdev/php.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/bootstrap.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Bootstrap</h5>
                        <a href="languages/webdev/bootstrap.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/tailwindcss.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">tailwind CSS</h5>
                        <a href="languages/webdev/tailwindcss.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/mysql-icon.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">MySQL</h5>
                        <a href="languages/database/mysql.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/mongodb-icon.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">MongoDB</h5>
                        <a href="languages/database/mongodb.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/postgresql.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">PostgrelSQL</h5>
                        <a href="languages/database/postsql.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/numpy-icon.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Numpy</h5>
                        <a href="languages/ML/numpy.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/pandas.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Pandas</h5>
                        <a href="languages/ML/pandas.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/matplotlib.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Matplotlib</h5>
                        <a href="languages/ML/matplotlib.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/powerbi.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">PowerBI</h5>
                        <a href="languages/ML/powerbi.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/tensorflow.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Tensorflow</h5>
                        <a href="languages/ML/tensorflow.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/seaborn.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Seaborn</h5>
                        <a href="languages/ML/seaborn.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/tableau.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Tableau</h5>
                        <a href="languages/ML/tableau.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/r.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">R language</h5>
                        <a href="languages/ML/r.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/kotlin.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Kotlin</h5>
                        <a href="languages/appdev/kotlin.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="assets/img/streamlit.svg" class="card-img-top mt-3" alt="..." />
                    <div class="card-body text-center">
                        <h5 class="card-title text-center">Stremlit</h5>
                        <a href="languages/ML/streamlit.html" class="btn btn1 mt-3">Cheatsheet</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'Footer.php'?>