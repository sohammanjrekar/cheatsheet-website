<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="../assets/img/mainlogo.jpg" type="image/x-icon">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/prismjs/prism.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <style>
        .scroll-to-top {
            background-color: #f77b50 !important;
            text-decoration: none !important;
        }

        .scroll-to-top:hover {
            background: #f77b50 !important;
            text-decoration: none !important;
        }

        footer .scroll-to-top {
            text-decoration: none !important;
        }
    </style>
</head>

<body id="page-top">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: rgb(1,4,45);">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="../assets/img/mainlogo.jpg" alt="" style="height: 7vh;"> Cheatbook
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <!--frontend -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                           Frontend
                        </a>
                        <ul class="dropdown-menu multi-column columns-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                                        
                                        <li><a class="dropdown-item" href="html.php">HTML</a></li>
                                        <li><a class="dropdown-item" href="css.php">CSS</a></li>
                                        <li><a class="dropdown-item"
                                                href="javascript.php">JavaScript</a></li>
                                                <li><a class="dropdown-item"
                                                    href="typescript.php">TypeScript</a></li>
                                                    <li>
                                                        <hr class="dropdown-divider" />
                                                    </li>
                                                <li class="dropdown-header">JavaScript Frameworks</li>
                                        <li><a class="dropdown-item" href="reactjs.php">Reacjs</a></li>
                                        <li><a class="dropdown-item" href="nextjs.php">Nextjs</a></li>
                                        <li><a class="dropdown-item"
                                                href="angularjs.php">Angularjs</a></li>
                                                <li><a class="dropdown-item" href="remix.php">Remixjs</a></li>
                                                <li><a class="dropdown-item" href="vuejs.php">vuejs</a></li>
                                    
                                        
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                                        
                                        <li><a class="dropdown-item" href="astrojs.php">Astrojs</a></li>
                                        <li><a class="dropdown-item" href="electronjs.php">electronjs</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li class="dropdown-header">CSS Framework</li>
                                        <li><a class="dropdown-item" href="bootstrap.php">Bootstrap</a></li>
                                        <li><a class="dropdown-item" href="tailwindcss.php">Tailwind css</a></li>
                                        <li><a class="dropdown-item" href="materialui.php">Material UI</a></li>
                                        <li> <hr class="dropdown-divider" /> </li>
                                        <li class="dropdown-header">State Management</li>
                                        <li><a class="dropdown-item" href="redux.php">Redux</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>



                     <!-- backend -->
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                          Backend
                        </a>
                        <ul class="dropdown-menu multi-column columns-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                                        <li><a class="dropdown-item" href="django.php">Django</a></li>
                                        <li><a class="dropdown-item" href="flask.php">Flask</a></li>
                                        <li><a class="dropdown-item" href="fastapi.php">Fastapi</a></li>
                                        <li><a class="dropdown-item" href="expressjs.php">Expressjs</a></li>
                                        <li><a class="dropdown-item" href="nodejs.php">Nodejs</a></li>
                                        <li><a class="dropdown-item" href="php.php">PHP</a></li>
                                        <li><a class="dropdown-item" href="golang.php">GO</a></li>
                                        <li><a class="dropdown-item" href="spring.php">Spring</a></li>
                                        <li><a class="dropdown-item"href="springboot.php">Springboot</a></li>
                                        <li> <hr class="dropdown-divider" /></li>
                                        <li class="dropdown-header">Databases</li>
                                        <li><a class="dropdown-item" href="Sql.php">SQL</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                                        <li><a class="dropdown-item" href="mysql.php">MySQL</a></li>
                                        <li><a class="dropdown-item" href="mongodb.php">MongoDB</a></li>
                                        <li><a class="dropdown-item" href="firebase.php">Firebase</a></li>
                                        <li><a class="dropdown-item" href="cassandra.php">Cassandra</a></li>
                                        <li><a class="dropdown-item" href="redis.php">Redis</a></li>
                                        <li><a class="dropdown-item" href="postgresql.php">PostgreSQL</a></li>
                                        <li><a class="dropdown-item" href="influxdb.php">infixDB</a></li>
                                        <li> <hr class="dropdown-divider" /> </li>
                                        <li class="dropdown-header">Java technologies</li>
                                        <li><a class="dropdown-item" href="hibernet.php">Hibernet</a></li>
                                        <li><a class="dropdown-item" href="jdbc.php">jdbc</a></li>
                                        <li><a class="dropdown-item" href="servlets.php">servlets</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <!-- programming -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                         Programming
                        </a>
                        <ul class="dropdown-menu multi-column columns-2">
                            <div class="row">
                                <div class="col-sm-6">
                            <ul class="multi-column-dropdown">
                            <li><a class="dropdown-item" href="cplus.php">C++</a></li>
                            <li><a class="dropdown-item" href="c.php">C</a></li>
                            <li><a class="dropdown-item" href="java.php">Java</a></li>
                            <li><a class="dropdown-item" href="python.php">Python</a></li>
                           
                           
                           
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="multi-column-dropdown">
               
                        <li class="dropdown-header">Data structure</li>
                            <li><a class="dropdown-item" href="dsa.php">DSA</a></li>
                        </ul>
                    </div>
                </div>
            </ul>
        </li>

                    
                    <!-- databases -->
                    <li class="nav-item dropdown mx-1">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                           Design
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="figma.php">Figma</a></li>
                            <li><a class="dropdown-item" href="adobexd.php">AdobeXD</a></li>
                           
                        </ul>
                    </li>


                      <!-- API & Authentication -->
                      <li class="nav-item dropdown mx-1">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            API & Auth
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="restfulapi.php">RESTful API</a></li>
                            <li><a class="dropdown-item" href="graphql.php">GraphQL</a></li>
                            <li><a class="dropdown-item" href="jwtauth.php">JWT Auth</a></li>
                            <li><a class="dropdown-item" href="apollo.php">Apollo</a></li>
                        </ul>
                    </li>

                      <!-- testing -->
                      <li class="nav-item dropdown mx-1">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                           Testing
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="jest.php">Jest</a></li>
                           
                        </ul>
                    </li>
                      <!-- cloud services -->
                      <li class="nav-item dropdown mx-1">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Cloud 
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="aws.php">AWS</a></li>
                            <li><a class="dropdown-item" href="azure.php">Azure</a></li>
                            <li><a class="dropdown-item" href="googlecloud.php">Google Cloud</a></li>
                            <li><a class="dropdown-item" href="cloudflare.php">Cloudflare</a></li>
                           
                        </ul>
                    </li>
                    <!-- Mobile Development-->
                    <li class="nav-item dropdown mx-1">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Mobile Dev
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="android.php">Android</a></li>
                            <li><a class="dropdown-item" href="kotlin.php">Kotlin</a></li>
                            <li><a class="dropdown-item" href="reactnative.php">React Native</a></li>
                               <li><a class="dropdown-item" href="flutter.php">Flutter</a></li>
                        </ul>
                    </li>
                    <!-- Devops -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                       Devops
                        </a>
                        <ul class="dropdown-menu multi-column columns-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                            <li class="dropdown-header">CI/CD</li>
                            <li><a class="dropdown-item" href="docker.php">Docker</a></li>
                            <li><a class="dropdown-item" href="jenkins.php">jenkins</a></li>
                            <li><a class="dropdown-item" href="kubernetes.php">kubernetes</a></li>
                            <li><a class="dropdown-item" href="maven.php">Maven</a></li>
                            <li><a class="dropdown-item" href="git.php">Git</a> </li>
                            <li><a class="dropdown-item" href="github_action.php">Github Actions</a></li>
                            <li><a class="dropdown-item" href="Terraform.php">Terraform</a></li>
                            <li><a class="dropdown-item" href="ansible.php">Ansible</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li class="dropdown-header">Web Servers</li>
                            <li><a class="dropdown-item" href="languages/devops/nginx.php">Nginx</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="multi-column-dropdown">
                            
                           
                                <hr class="dropdown-divider" />
                            </li>
                            <li class="dropdown-header">Operating System</li>
                            <li><a class="dropdown-item" href="windows.php">Windows</a>
                            </li>
                            <li><a class="dropdown-item" href="linux.php">Linux</a>
                            </li>
                            <li><a class="dropdown-item" href="macos.php">Macos</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li class="dropdown-header">Scripting</li>
                            <li><a class="dropdown-item" href="bashscript.php">Bash Scripting</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li class="dropdown-header">Monitoring</li>
                            <li><a class="dropdown-item" href="monit.php">Monit</a>
                            </ul>
                        </div>
                    </div>
                    </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tools
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tools/shadowpicker/index.html">Shadow Picker</a></li>
                            <li><a class="dropdown-item" href="tools/readmemaker/index.html">Github Project Readme</a>
                            </li>
                            <li><a class="dropdown-item" href="tools/profilereadme/index.html">Github Profile Readme</a>
                            </li>
                            <li><a class="dropdown-item" href="tools/gradientcolorpicker.html">Gradient Colour
                                    Picker</a></li>
                            <li><a class="dropdown-item" href="tools/colourbook/colorpiceker.html">Colour Picker</a>
                            </li>
                            <li><a class="dropdown-item" href="tools/codereview/index.html">Simple Code Editor</a> </li>
                            <li><a class="dropdown-item" href="tools/banner/index.html">Banner Maker</a> </li>
                            <li><a class="dropdown-item" href="tools/logomaker/index.html">Logo & Favicon Maker</a>
                            </li>
                            <li><a class="dropdown-item" href="tools/paraiso-colors-main/index.html">colour plates</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <a href="myDesigns/index.html">
                    <div class="button btn1 mx-1" style="font-size: 1em;">My Designs</div>
                </a>
            </div>
        </div>
    </nav>