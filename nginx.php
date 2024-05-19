<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;"
                src="../../assets/img/nginx.svg" alt="" /> Nginx cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">nginx</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4">
                            Nginx is an open source, fast, lightweight and high-performance web server that can be used
                            to serve static files. NGINX is considered as the popular web server behind Apache web
                            server and Microsoft's IIS.
                            <br> <br>
                            NGINX improves content and application delivery, improves security, and facilitates
                            scalability and availability for the busiest websites on the internet.


                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="../../assets/img/nginx.svg" alt="" style="height:100%;width:100%;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1"
                    aria-controls="o1">
                    Read More...
                </button>
                <a href="https://docs.oracle.com/en/java/javase/11/docs/api/index.html">
                    <div class="button btn1 mx-1 text-center" style="font-size: 1em;width:5em;">Docs</div>
                </a>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1"
                    aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            Java
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="points">
                            <li><strong>NGINX</strong> is pronounced as "engine-ex". </li>
                            <li>It is an open-source, fast, lightweight and high-performance web server that can be used
                                to serve static files. </li>
                            <li>NGINX has considered as the popular web server behind the Apache web server and
                                Microsoft's IIS.</li>
                            <li>In its initial release, NGINX functioned for HTTP web serving. Today, however, it also
                                serves as a reverse proxy server for HTTP, HTTPS, SMTP, IMAP, POP3 protocols, on the
                                other hand, it is also used for HTTP load balancer, HTTP cache, and email proxy for
                                IMAP, POP3, and SMTP.</li>
                            <li>NGINX improves content and application delivery, improves security, and facilitates
                                scalability and availability for the busiest websites on the internet.</li>
                            <li>In short, we can say that Nginx is just a kind of software that is used in web servers
                                to serve concurrent requests.</li>
                            <li>Previously we used to install Apache in web servers to handle these functions, but as
                                the world, in growing and demanding more things at one time, the term concurrency comes
                                into the world and nginx launched for the same thing.</li>
                            <li>Nginx was created by Igor Sysoev, with its 1<sup>st</sup> public release on October 2004
                                as an attempt to answer the <strong>C10k problem</strong>. Where C10k is the challenge
                                of managing 10,000 connections at the same time. Today there are even more connections
                                that web servers have to handle. Because of this reason, nginx offers event-driven and
                                asynchronous architecture. This feature makes nginx as the most reliable servers for
                                scalability and speed.</li>
                            <li>Some high profile companies using Nginx include IBM, Google, Atlassian, Autodesk,
                                GitLab, DuckDuckGo, T-Mobile, Microsoft, Adobe, Salesforce, VMware, LinkedIn, Cisco,
                                Twitter, Apple, Intel, Facebook, and many more.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                Why use NGINX?<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom2"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Why use NGINX?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>NGINX provides various services such as reverse proxy, load balancer, and rate limit network
                            services. Reverse proxying is useful if we have multiple web services listening on various
                            ports and we need a single public endpoint to reroute requests internally. This would allow
                            us to host multiple domain names on port 80 while using a combination of different NodeJs,
                            Go and java to power separate web services behind the scenes.</p>
                        <p>Nginx can handle the logging, blacklisting, load balancing and serving static files while the
                            web services focus on what they need to do.</p>
                        <p>The configuration of Nginx is easier than Apache httpd. Nginx was designed for high
                            concurrency and it is very fast.</p>
                    </div>
                </div>
            </li>
            <li>How Does NGINX Work?
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom3"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">How Does NGINX Work?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>Before knowing the process of NGINX, let's take a look at how a web server works. When we
                            request to open a webpage, the browser contacts the server. Then the server looks for the
                            requested files for the page and sends it to the browser. This is the only simplest kind of
                            work for a request.</p>
                        <p>The above example is also considered as a single thread. Traditionally, web servers like
                            Apache create a single thread for every request, but Nginx does not work that way. Nginx
                            performs with an asynchronous, event-driven architecture. It smartly follows events of a
                            process.</p>
                        <p>Nginx divided its job into the <strong>worker process</strong> and <strong>worker
                                connections</strong>. Here, worker connections are used to manage the request made and
                            the response obtained by users on the web server; at the same time, these requests are
                            passed to its parent process which is called the worker process.</p>
                        <p>Let's see an example for Nginx server handling concurrent MP3 and MP4 file requests:-</p>
                        <img class="mx-auto d-block" src="https://static.javatpoint.com/tutorial/nginx/images/nginx.png"
                            alt="" style="width: 45vw;">
                        <p>From the above diagram, we can see that a single worker connection can handle around 1024
                            connections at a time. It is the best ability of a worker connection. There may be 'n'
                            numbers of the worker process in Nginx based on the type of server we have and each worker
                            process handle different jobs so that it can handle more numbers of concurrent requests.</p>
                        <p>Finally, the worker process transfers the requests to the Nginx master process which directly
                            responds to the unique requests only.</p>
                        <p>Since worker connection can take care of up to 1024 similar requests. Because of that, Nginx
                            can handle thousands of requests without any difficulties. It is also the reason why Nginx
                            became an excellent server for busy websites like e-commerce, search engines, and cloud
                            storage.</p>
                    </div>
                </div>
            </li>
            <li>Features of NGINX
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom4"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Features of NGINX
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>Some features of Nginx are as follows:</p>
                        <ul class="points">
                            <li>Reverse proxy with caching</li>
                            <li>IPV6</li>
                            <li>Load Balancing
                            </li>
                            <li>Web Sockets</li>
                            <li>Handling of static files, index files, and auto-indexing</li>
                            <li>FastCGI support with caching</li>
                            <li>URL rewriting and redirection</li>
                        </ul>
                    </div>
                </div>

            </li>
            <li>What can NGINX and NGINX Plus Do for You?<button class="btn btn1" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom5" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom5"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">What can NGINX and NGINX Plus Do for You?
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>Nginx and Nginx plus are the best web servers and application delivery solutions used by high
                            traffic web sites such as Netflix, Dropbox, and Zynga. Busiest websites like Google,
                            Netflix, Twitter, Facebook, etc. rely on Nginx and Nginx Plus to deliver their content
                            securely, reliably and quickly.</p>
                        <ul class="points">
                            <li>Nginx makes hardware load balancers obsolete - Nginx is open source, less expensive and
                                more configurable than hardware load balancers, and is designed for modern cloud
                                architectures.<br>
                                Nginx plus provides support on the fly reconfiguration and integrates with modern DevOps
                                tools for easier monitoring.</li>
                            <li>NNginx is a multifunction tool - with the use of Nginx, we can use the same tool as our
                                load balancer, content cache, reverse proxy, and the webserver. It minimizes the amount
                                of tooling as the configuration of our organization needs to maintain.<br>
                                Nginx Plus includes the rapid response to customer support, so we can easily get help
                                diagnosing any part of our stack that uses Nginx Plus and Nginx.</li>
                            <li>NGINX keeps evolving. For the past decade, NGINX has been at the forefront of the
                                development of the modern Web and has helped to lead the way on everything from HTTP/2
                                to micro-services support.<br>
                                As the development and delivery of web applications continue to evolve, NGINX Plus
                                continuously adding features to enable flawless application delivery.</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                Difference between Apache and NGINX<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvas2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas2"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Difference between Apache and NGINX</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="alt table-bordered">
                            <tbody>
                                <tr>
                                    <th>Apache</th>
                                    <th>NGINX</th>
                                </tr>
                                <tr>
                                    <td>Apache runs on all Unix like systems such as Linux, BSD, etc. as well as
                                        completely supports Windows.</td>
                                    <td>Nginx runs on modern Unix like systems; however it has limited support for
                                        Windows.</td>
                                </tr>
                                <tr>
                                    <td>Apache uses a multi-threaded approach to process client requests.</td>
                                    <td>Nginx follows an event-driven approach to serve client requests.</td>
                                </tr>
                                <tr>
                                    <td>Apache cannot handle multiple requests concurrently with heavy web traffic.</td>
                                    <td>Nginx can handle multiple client requests concurrently and efficiently with
                                        limited hardware resources.</td>
                                </tr>
                                <tr>
                                    <td>Apache processes dynamic content within the web server itself.</td>
                                    <td>Nginx can't process dynamic content natively.</td>
                                </tr>
                                <tr>
                                    <td>Apache is designed to be a web server.</td>
                                    <td>Nginx is both a web server and a proxy server.</td>
                                </tr>
                                <tr>
                                    <td>Modules are dynamically loaded or unloaded, making it more flexible.</td>
                                    <td>Since modules cannot be loaded dynamically, they must be compiled within the
                                        core software itself.</td>
                                </tr>
                                <tr>
                                    <td>A single thread can only process one connection.</td>
                                    <td>A single thread can handle multiple connections.</td>
                                </tr>
                                <tr>
                                    <td>The performance of Apache for static content is lower than Nginx.</td>
                                    <td>Nginx can simultaneously run thousands of connections of static content two
                                        times faster than Apache and uses little less memory.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>

            <li>Installing NGINX on Debian/Ubuntu
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom9"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom9"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Installing NGINX on Debian/Ubuntu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>There are two ways to install NGINX:</p>
                        <ul class="points">
                            <li><strong>Using a pre-built binary: -</strong> This method is much easiest and faster
                                method.</li>
                            <li><strong>Building it up from source: -</strong> This method provides the ability to
                                include various third-party modules that make Nginx even more powerful.</li>
                        </ul>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne">
                                update our local package
                            </button>
                        </h2>
                        <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-bash">
                                <code>
                                    sudo apt-get update  
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                                Installing NGINX
                            </button>
                        </h2>
                        <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                <code>
                                    sudo apt-get install nginx  
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                                Process for the webserver in a running state
                            </button>
                        </h2>
                        <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                <code>
                                    ps ?ef | grep nginx    
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>


                </div>


            </li>

            <li>
                Adjusting the firewall to access Nginx<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom13" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom13"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Adjusting the firewall to access Nginx
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>For accessing the Nginx from the web server, we have to allow access to the services from
                            outside.
                        </p>
                        <p>To see the list of profiles available to allow from the firewall, use the following command:
                        </p>
                        <ol>
                            <li>Nginx Full: It allows both ports 80 and 443.

                            </li>
                            <li>Nginx HTTP: It allows only the port 80.

                            </li>
                            <li> Nginx HTTPS: It allows only port 443.</li>
                        </ol>
                    </div>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne">
                                Nginx Full:
                            </button>
                        </h2>
                        <div id="collapseOne3" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-bash">
                <code>
                    sudo ufw allow 'Nginx Full' 
            </code>
            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo">
                                Nginx HTTP
                            </button>
                        </h2>
                        <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                <code>
                    sudo ufw allow 'Nginx HTTP'  </code>
            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo389" aria-expanded="false" aria-controls="collapseTwo">
                                Nginx HTTPS
                            </button>
                        </h2>
                        <div id="collapseTwo389" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                <code>
                    sudo ufw allow 'Nginx HTTPS'  </code>
            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Checking the NGINX Service Status<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom14" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom14"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Checking the NGINX Service Status</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>By default, after the installation of Ubuntu, the Nginx starts automatically</p>
                        <p>1) nginx.service - A high-performance web server and a reverse proxy server</p>
                        <p>2) Loaded: loaded (/lib/systemd/system/nginx.service; enabled; vendor preset: enabled)</p>
                        <p>3) Active: active (running) since Mon 2016-04-18 16:14:00 EDT; 4min 2s ago</p>
                        <p>4) Main PID: 12857 (nginx)</p>
                        <p>5) CGroup: /system.slice/nginx.service <br>
                            ├─12857 nginx: master process /usr/sbin/nginx -g daemon on; master_process on<br>
                            └─12858 nginx: worker process </p>
                    </div>
                </div>
            </li>
            <li>
                Installing NGINX on Redhat/CentOS
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne">
                                Math.max(x,y)
                            </button>
                        </h2>
                        <div id="collapseOne4" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion-body">
                                    <pre class="language-nginx">
                                    <code>
                                        Math.max(5, 10);     
                                </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo">
                                    Math.min(x,y)
                                </button>
                            </h2>
                            <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <pre class="language-nginx">
                                <code>
                                    Math.min(5, 10);
                            </code>
                            </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree4" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Math.sqrt(x)
                                </button>
                            </h2>
                            <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-nginx">
                                    <code>
                                        Math.sqrt(64);    
                                </code>
                                </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
            <li>
                Check the Version of Nginx
                <pre class="language-bash">
                    <code>
                        nginx -v  
                    </code>
                    </pre>
            </li>
            <li>
                Check your web server
                <pre class="language-bash">
                    <code>
                        systemctl status nginx 
                    </code>
                    </pre>
            </li>

            <li>
                Start Nginx
                <pre class="language-bash">
                        <code>
                            sudo systemctl start nginx  
                        </code>
                        </pre>
                This command does not produce any output.
            </li>

            <li>
                Enable Nginx Service
                <pre class="language-bash">
                            <code>
                                sudo systemctl enable nginx  
                            </code>
                            </pre>
                Instead of manually starting the Nginx service, it is recommended to enable it auto-start at boot time
                of the system.
            </li>

            <li>
                Stop Nginx
                <pre class="language-bash">
                                <code>
                                    sudo systemctl stop nginx  
                                </code>
                                </pre>
                Stopping Nginx will directly shut down all Nginx worker processes even if there are open connections.
            </li>

            <li>
                Restart Nginx
                <pre class="language-bash">
                                    <code>
                                        sudo systemctl restart nginx  
                                    </code>
                                    </pre>
            </li>

            <li>
                Restart Nginx
                <pre class="language-bash">
                                    <code>
                                        sudo systemctl reload nginx  
                                    </code>
                                    </pre>
                The reload option will load the new configuration, start new worker processes with the new configuration
                and gracefully shut down old worker processes.
            </li>
            <li>
                Test Nginx Configuration
                <pre class="language-bash">
                                    <code>
                                        sudo nginx -t  
                                    </code>
                                    </pre>
                Whenever we make changes or edit something to the Nginx server's configuration file, it is a good idea
                to test the configuration before restarting or reloading the service.
            </li>
            <li>
                HTTP Load Balancing<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom23" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom23"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">HTTP Load Balancing</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>Before start using Nginx open-source or Nginx Plus to load balance HTTP traffic to a group of
                            servers, first, we need to define the group with the upstream directive. The directive is
                            placed in the http context.
                            <br>
                            Servers in the group are configured using the server directive.<br><br>
                            To pass the requests to a server group, the group name is specified in the proxy_pass
                            directive. In the below example, a virtual server running on Nginx passes all requests to
                            the upstream backend group.<br><br>The following example combines the two snippets above and
                            shows how to proxy HTTP request to the backend server group. The group consists of three
                            servers, two of the instances of the same application while the third is a backup server.
                            Because there is no load-balancing algorithm is specified in the upstream block, Nginx uses
                            the default algorithm, Round Robin.
                        </p>
                    </div>
                </div>
                <pre class="language-nginx">
                    <code>
                        http {  
                            upstream backend {  
                                server backend1.example.com;  
                                server backend2.example.com;  
                                server 192.0.0.1 backup;  
                            }  
                              
                            server {  
                                location / {  
                                    proxy_pass http://backend;  
                                }  
                            }  
                        }  
                    </code>
                    </pre>
                <h3>Choosing a Load-Balancing Method<br>
                    Nginx open-source supports four methods for load-balancing, and Nginx Plus adds two more methods:
                </h3>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2089" aria-expanded="false" aria-controls="collapseOne">
                                Round Robin
                            </button>
                        </h2>
                        <div id="collapseOne2089" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                                <code>
                                                    upstream backend {  
                                                        # no load balancing method is defined for Round Robin  
                                                        server backend1.example.com;  
                                                        server backend2.example.com;  
                                                     }  
                                                </code>
                                                </pre>
                                <p>In this method, requests are distributed equally across the servers, with server
                                    weights taken into consideration. There is no directive for enabling it; this method
                                    is used by default.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2089" aria-expanded="false" aria-controls="collapseTwo">
                                Least Connections
                            </button>
                        </h2>
                        <div id="collapseTwo2089" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                                <code>
                                                    upstream backend {  
                                                        least_conn;  
                                                        server backend1.example.com;  
                                                        server backend2.example.com;  
                                                    }  
                                                </code>
                                                </pre>
                                <p>A request is sent to the server with the least number of active connections, with
                                    server weights taken into considerations.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20891" aria-expanded="false"
                                aria-controls="collapseThree">
                                Generic Hash
                            </button>
                        </h2>
                        <div id="collapseThree20891" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                                <code>
                                                    upstream backend {  
                                                        hash $request_uri consistent;  
                                                        server backend1.example.com;  
                                                        server backend2.example.com;  
                                                    }   
                                                    </code>
                                                </pre>
                                <p>The server to which a request is sent is determined from a user-defined key which can
                                    be a string, text, variable or a combination.</p>
                            </div>
                        </div>
                    </div>
                    <h2>Nginx Plus supports two more methods:</h2>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree208922" aria-expanded="false"
                                aria-controls="collapseThree">
                                Least Time
                            </button>
                        </h2>
                        <div id="collapseThree208922" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                        <code>
                            upstream backend {  
                                least_time header;  
                                server backend1.example.com;  
                                server backend2.example.com;  
                            }   
                            </code>
                        </pre>
                                <p> For every request, Nginx selects the server with the lowest average latency and the
                                    lowest number of active connections, where the lowest average latency is calculated
                                    based on which of the following parameters to the least_time directive is included.
                                    <br>
                                <ul class="points">
                                    <li><strong>header:</strong> Time to receive the 1<sup>st</sup> byte from the
                                        server.</li>
                                    <li><strong>last_byte:</strong> Time to accept the full response from the server.
                                    </li>
                                    <li><strong>last_byte inflight:</strong> Time to receive the full response from the
                                        server, taking into account incomplete requests.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree208923" aria-expanded="false"
                                aria-controls="collapseThree">
                                Random
                            </button>
                        </h2>
                        <div id="collapseThree208923" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                        <code>
                            upstream backend {  
                                random two least_time=last_byte;  
                                server backend1.example.com;  
                                server backend2.example.com;  
                                server backend3.example.com;  
                                server backend4.example.com;  
                            }  
                            </code>
                        </pre>
                                <p>In this method, each request will be passed to a randomly selected server. If the 2
                                    parameters are specified, 1st nginx randomly selects two servers taking into account
                                    server weights, and then choose one of these servers using the specified method:<br>
                                <ul class="points">
                                    <li><strong>Least_conn -</strong> least number of active connections.</li>
                                    <li><strong>least_time=header -</strong> The least average time to receive the
                                        response header from the server.</li>
                                    <li><strong>Least_time=last_byte -</strong> The least average time to receive the
                                        full response from the server.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>



                </div>
            </li>
            <li>
                Servers needs to be temporarily removed from the load-balancing rotation<button class="btn btn1"
                    type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom24"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom24"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Servers needs to be temporarily removed
                            from the load-balancing rotation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>If one of the servers needs to be temporarily removed from the load-balancing rotation, it
                            can be added with the down parameter to preserve the current hashing of client IP addresses.
                        </p>
                    </div>
                </div>
                <pre class="language-nginx">
<code>
 
        server backend3.example.com   down;  
</code>
</pre>

            </li>
            <li>
                Server Weights<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom25" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom25"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Server Weights</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>By default, Nginx uses weights to distribute requests among the servers in the group through
                            the Round Robin method. The weight parameter to the server directive is used to set the
                            <strong>weight</strong> of a server. The by default weight is 1.
                        </p>
                        <p>In the above example, the weight of backend1.example.com is 5, and the weights of the other
                            two servers have the default weight 1, but the one with the IP address 192.0.0.1 is marked
                            as a backup server and does not receive requests unless both of the other servers are
                            unavailable. In this type of configuration of weights, out of every 6 requests, 5 are sent
                            to backend1.example.com and 1 to backend2.example.com.</p>
                    </div>
                </div>
                <pre class="language-nginx">
                    <code>
                        upstream backend {  
                            server backend1.example.com weight=5;  
                            server backend2.example.com;  
                        }  
                    </code>
                    </pre>

            </li>
            <li>
                Server Slow-Start<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom27" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom27"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Server Slow-Start</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>The server slow start is used to prevent a recently recovered server from being overwhelmed
                            by connections, which may time out and cause the server to be marked as failed again.
                            <br><br>
                            And in Nginx Plus, slow-start allows an upstream server to gradually recover its weight from
                            0 to its nominal value after it has been recovered or become available. To do this, use the
                            slow_start parameter to the server directive.
                        </p>
                    </div>
                </div>
                <pre class="language-nginx">
                    <code>
                        upstream backend {  
                            server backend1.example.com slow_start=30s; 
                        }  
                    </code>
                    </pre>
            </li>
            <li>Enabling Session Persistence<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom28" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom28"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Enabling Session Persistence</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>Nginx Plus identifies user sessions and routes all requests in a given session to the same
                            upstream server. This is called session persistence.</p>
                        <p>Nginx Plus uses three-session persistence methods. The methods are set with the
                            <strong>sticky</strong> directive.
                        </p>
                        <p>Nginx Plus includes a session cookie to the first response from the upstream group and
                            identifies the server that sent the response. Next request of the client contains the cookie
                            value and Nginx Plus route the request to the upstream server that responded to the first
                            request.
                            <br><br>
                            In the above example, the srv_id parameter is used to set the name of the cookie.
                            A sticky cookie is the simplest session persistence method.
                        </p>
                        <p><strong>expires</strong> parameter is optional which sets the time for the browser to keep
                            the cookie. </p>
                        <p><strong>a domain</strong> which is also an optional parameter defines the domain for which
                            the cookie is set.</p>
                        <p><strong>the path</strong> is also an optional parameter. It defines the path for which the
                            cookie is set. </p>
                    </div>
                </div>

                <pre class="language-nginx">
            <code>
                upstream backend {  
                    server backend1.example.com;  
                    server backend2.example.com;  
                    sticky cookie srv_id expires=1h domain=.example.com path=/;  
                }  
            </code>
        </pre>
            </li>


            <li>
                Sticky Route<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom30" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom30"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Sticky Route</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>When Nginx Plus receives the first request, it assigns a route to the client. All the
                            subsequent requests are compared to the route parameter of the server directive to identify
                            the server to which the request is proxied. The information of the route is taken from
                            either a cookie or the request URI.</p>
                    </div>
                </div>

                <pre class="language-bash">
                        <code>
                            upstream backend {  
                                server backend1.example.com route=a;  
                                server backend2.example.com route=b;  
                                sticky route $route_cookie $route_uri;  
                            }   
                        </code>
                        </pre>

            </li>
            <li>
                Cookie Learn<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom31" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom31"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Cookie Learn</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>First of all, Nginx Plus finds session identifiers by inspecting requests and responses. Then
                            Nginx Plus "learns" which upstream server corresponds to which session identifier.
                            Generally, these identifiers are passed in an HTTP cookie. If a request has a session
                            identifier already "learned", Nginx Plus forwards the request to the corresponding server.
                        </p>
                        <p>In the above, one of the upstream servers creates a session by setting the cookie
                            <strong>EXAMPLECOOKIE</strong> in the response.
                        </p>
                    </div>
                </div>

                <pre class="language-nginx">
                        <code>
                            upstream backend {  
                                server backend1.example.com;  
                                server backend2.example.com;  
                                sticky learn  
                                    create=$upstream_cookie_examplecookie  
                                    lookup=$cookie_examplecookie  
                                    zone=client_sessions:1m  
                                    timeout=1h;  
                             }   
                        </code>
                        </pre>

            </li>
            <li>
                NGINX Directives<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom32" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom32"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">NGINX Directives</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>Nginx consists of modules that are controlled by directives defined in the configuration
                            file. Directives are divided into two parts:</p>
                        <ul class="points">
                            <li><strong>Simple Directive:</strong> A simple directive consists of the name and
                                parameters separated by spaces and ends with a semicolon (;). </li>
                            <li><strong>Block Directive:</strong> The structure of block directive is similar to the
                                simple directive, but instead of semicolon, it ends with a set of additional
                                instructions surrounded by curly braces ({ and }). If a block directive can have other
                                directives inside the braces, then it is known as context. Eg. Events, http, location,
                                and server.</li>
                        </ul>
                        <p>Directives placed in the configuration file outside of any contexts are considered to be in
                            the <strong>main context</strong>. The <strong>events</strong> and <strong>http</strong>
                            directives reside in the <strong>main</strong> context, server resides in
                            <strong>http</strong> and <strong>location</strong> in the <strong>server</strong>.
                        </p>
                        <table class="alt table-bordered" border="1">
                            <tbody>
                                <tr>
                                    <th>Variable</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><strong>$ancient_browser</strong></td>
                                    <td>This variable is used to equal the value set by the ancient_browser_value
                                        directive, if a browser was identified as ancient.</td>
                                </tr>
                                <tr>
                                    <td><strong>$arg_name</strong></td>
                                    <td>Name of the argument in the request line.</td>
                                </tr>
                                <tr>
                                    <td><strong>$args</strong></td>
                                    <td>List of arguments on the request line.</td>
                                </tr>
                                <tr>
                                    <td><strong>$binary_remote_addr (ngx_http_core_module)</strong></td>
                                    <td>Client address in the form of binary. Length of value is always 4 bytes for IP4
                                        addresses or 16 bytes for IPv6 addresses.</td>
                                </tr>
                                <tr>
                                    <td><strong>$binary_remote_addr (ngx_stream_core_module)</strong></td>
                                    <td>Client address in the form of binary. Length of value is always 4 bytes for IP4
                                        addresses or 16 bytes for IPv6 addresses.</td>
                                </tr>
                                <tr>
                                    <td><strong>$body_bytes_sent</strong></td>
                                    <td>Number of bytes sent to the client, not counts the response header.</td>
                                </tr>
                                <tr>
                                    <td><strong>$bytes_received</strong></td>
                                    <td>Number of bytes received from a client.</td>
                                </tr>
                                <tr>
                                    <td><strong>$bytes_sent (ngx_http_core_module)</strong></td>
                                    <td>Number of bytes sent to a client.</td>
                                </tr>
                                <tr>
                                    <td><strong>$bytes_sent (ngx_http_log_module)</strong></td>
                                    <td>Number of bytes sent to a client.</td>
                                </tr>
                                <tr>
                                    <td><strong>$bytes_sent (ngx_stream_core_module)</strong></td>
                                    <td>Number of bytes sent to a client.</td>
                                </tr>
                                <tr>
                                    <td><strong>$connection (ngx_http_core_module)</strong></td>
                                    <td>connection serial number</td>
                                </tr>
                                <tr>
                                    <td><strong>$connection (ngx_http_log_module)</strong></td>
                                    <td>connection serial number</td>
                                </tr>
                                <tr>
                                    <td><strong>$connection (ngx_stream_core_module)</strong></td>
                                    <td>connection serial number</td>
                                </tr>
                                <tr>
                                    <td><strong>$connection_requests (ngx_http_core_module)</strong></td>
                                    <td>Current number of requests made via connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$connection_requests (ngx_http_log_module)</strong></td>
                                    <td>Current number of requests made via connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$connections_active</strong></td>
                                    <td>Same as <strong>Active connections</strong> value</td>
                                </tr>
                                <tr>
                                    <td><strong>$connections_reading</strong></td>
                                    <td>Same as <strong>Reading</strong> value</td>
                                </tr>
                                <tr>
                                    <td><strong>$connections_waiting</strong></td>
                                    <td>Same as the <strong>Waiting</strong> value</td>
                                </tr>
                                <tr>
                                    <td><strong>$connections_writing</strong></td>
                                    <td>Same as the writing value.</td>
                                </tr>
                                <tr>
                                    <td><strong>$content_length</strong></td>
                                    <td>"Content length" request header field.</td>
                                </tr>
                                <tr>
                                    <td><strong>$content_type</strong></td>
                                    <td>"Content type" request header field</td>
                                </tr>
                                <tr>
                                    <td><strong>$cookie_name</strong></td>
                                    <td>The name of cookie</td>
                                </tr>
                                <tr>
                                    <td><strong>$date_gmt</strong></td>
                                    <td>Current time in GMT (Greenwich Mean Time). To set the format, use the
                                        <em>config</em> command with <em>timefmt</em> parameter.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>$date_local</strong></td>
                                    <td>Current time in the local time zone. To set the format, use the <em>config</em>
                                        command with <em>timefmt</em> parameter.</td>
                                </tr>
                                <tr>
                                    <td><strong>$document_root</strong></td>
                                    <td>Value of root or alias directive for the current request.</td>
                                </tr>
                                <tr>
                                    <td><strong>$document_uri</strong></td>
                                    <td>It is same as $uri.</td>
                                </tr>
                                <tr>
                                    <td><strong>$fastcgi_path_info</strong></td>
                                    <td>When using the fastcgi_split_path_info directive, the $fastcgi_script_name
                                        variable equals the value of the first capture set by the directive. And the
                                        value of second capture set by the fastcgi_split_path_info directive. This
                                        variable is used to set the PATH_INFO parameter.</td>
                                </tr>
                                <tr>
                                    <td><strong>$fastcgi_script_name</strong></td>
                                    <td>Request URI (Uniform Resource Identifier) or, if a URI ends with a slash,
                                        request URI with an index file name configured by the fastcgi_index directive
                                        appended to it.</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_area_code (ngx_http_geoip_module)</strong></td>
                                    <td>Telephone area code (US only). This variable may contain some information which
                                        is outdated since the corresponding database field is deprecated.</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_area_code (ngx_stream_geoip_module)</strong></td>
                                    <td>Telephone area code (US only). This variable may contain outdated information
                                        since the corresponding database field is deprecated.</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_city (ngx_http_geoip_module)</strong></td>
                                    <td>City name, e.g. "Washinton", "Moscow".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_city (ngx_stream_geoip_module)</strong></td>
                                    <td>City name, e.g. "Washinton", "Moscow".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_city_continent_code (ngx_http_geoip_module)</strong></td>
                                    <td>Continent code in two letters. For example, "NA", "EU".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_city_continent_code (ngx_stream_geoip_module)</strong></td>
                                    <td>Continent code in two letters. For example, "NA", "EU".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_city_country_code (ngx_http_geoip_module)</strong></td>
                                    <td>Continent code in two letters. For example, "NA", "EU".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_city_country_code (ngx_http_geoip_module)</strong></td>
                                    <td>Country code in two letters. For example, "RU", "US".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_city_country_code (ngx_stream_geoip_module)</strong></td>
                                    <td>Country code in two letters. For example, "RU", "US".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_city_country_code3 (ngx_http_geoip_module)</strong></td>
                                    <td>Country code in three letters. For example, "RUS", "USA".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_city_country_code3 (ngx_stream_geoip_module)</strong></td>
                                    <td>Country code in three letters. For example, "RUS", "USA".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_city_country_name (ngx_http_geoip_module)</strong></td>
                                    <td>Name of the country. For example, "India", "United States".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_city_country_name (ngx_stream_geoip_module)</strong></td>
                                    <td>Name of the country. For example, "India", "United States".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_country_code (ngx_http_geoip_module)</strong></td>
                                    <td>Country code in two letters. For example, "RU", "US".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_country_code (ngx_stream_geoip_module)</strong></td>
                                    <td>Country code in two letters. For example, "RU", "US".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_country_code3 (ngx_http_geoip_module)</strong></td>
                                    <td>Country code in three letters. For example, "RUS", "USA".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_country_code3 (ngx_stream_geoip_module)</strong></td>
                                    <td>Country code in three letters. For example, "RUS", "USA".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_country_name (ngx_http_geoip_module)</strong></td>
                                    <td>Name of the country. For example, "India", "United States".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_country_name (ngx_stream_geoip_module)</strong></td>
                                    <td>Name of the country. For example, "India", "United States".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_dma_code (ngx_http_geoip_module)</strong></td>
                                    <td>It is the DMA (Designated Market Area) code or metro code in US, according to
                                        the geo-targeting in Google AdWords API.</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_dma_code (ngx_stream_geoip_module)</strong></td>
                                    <td>It is the DMA (Designated Market Area) code or metro code in US, according to
                                        the geo-targeting in Google AdWords API.</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_latitude (ngx_http_geoip_module)</strong></td>
                                    <td>Latitude.</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_latitude (ngx_stream_geoip_module)</strong></td>
                                    <td>Latitude.</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_longitude (ngx_http_geoip_module)</strong></td>
                                    <td>Longitude</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_longitude (ngx_stream_geoip_module)</strong></td>
                                    <td>Longitude</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_org (ngx_http_geoip_module)</strong></td>
                                    <td>Name of the organization. For example "University of California".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_org (ngx_stream_geoip_module)</strong></td>
                                    <td>Name of the organization. For example "University of California".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_postal_code (ngx_http_geoip_module)</strong></td>
                                    <td>Postal code.</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_postal_code (ngx_stream_geoip_module)</strong></td>
                                    <td>Postal code.</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_region (ngx_http_geoip_module)</strong></td>
                                    <td>The name of the region (Province, region, state, federal land, territory) for
                                        example, for Moscow City, DC.</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_region (ngx_stream_geoip_module)</strong></td>
                                    <td>The name of the region (Province, region, state, federal land, territory) for
                                        example, for Moscow City, DC.</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_region_name (ngx_http_geoip_module)</strong></td>
                                    <td>Country region name ((Province, region, state, federal land, territory), for
                                        example "Moscow City", "District of Columbia".</td>
                                </tr>
                                <tr>
                                    <td><strong>$geoip_region_name (ngx_stream_geoip_module)</strong></td>
                                    <td>Country region name ((Province, region, state, federal land, territory), for
                                        example "Moscow City", "District of Columbia".</td>
                                </tr>
                                <tr>
                                    <td><strong>$gzip_ratio</strong></td>
                                    <td>It is the achieved compression ratio, computed as the ratio between the original
                                        and compressed response sizes.</td>
                                </tr>
                                <tr>
                                    <td><strong>$host</strong></td>
                                    <td>Host name from the request line, host name form the Host request header field,
                                        or the server name matching a request.</td>
                                </tr>
                                <tr>
                                    <td><strong>$hostname (ngx_http_core_module)</strong></td>
                                    <td>Host name.</td>
                                </tr>
                                <tr>
                                    <td><strong>$hostname (ngx_stream_core_module)</strong></td>
                                    <td>Host name.</td>
                                </tr>
                                <tr>
                                    <td><strong>$http2</strong></td>
                                    <td>Negotiated protocol identifier: h2 for HTTP/2 over TLS, h2c for HTTP/2 over
                                        clear text TCP, or an empty string otherwise.</td>
                                </tr>
                                <tr>
                                    <td><strong>$http_name</strong></td>
                                    <td>It is the arbitrary request header field: the last part of a variable name is
                                        the field name which is converted to lower case with dashes replaced by
                                        underscores.</td>
                                </tr>
                                <tr>
                                    <td><strong>$https</strong></td>
                                    <td>If connection operates in SSL mode then it is "on", or an empty string
                                        otherwise.</td>
                                </tr>
                                <tr>
                                    <td><strong>$invalid_referer</strong></td>
                                    <td>If the "Referer" request header field value is considered valid, then the string
                                        is empty, otherwise 1.</td>
                                </tr>
                                <tr>
                                    <td><strong>$is_args</strong></td>
                                    <td>"?" if a request line has arguments, or an empty string otherwise.</td>
                                </tr>
                                <tr>
                                    <td><strong>$jwt_claim_name</strong></td>
                                    <td>It returns the value of a specified JWT (JSON Web Token) claim.</td>
                                </tr>
                                <tr>
                                    <td><strong>$jwt_header_name</strong></td>
                                    <td>Returns the value of a specified JOSE (JavaScript Object Signing and Encryption)
                                        header.</td>
                                </tr>
                                <tr>
                                    <td><strong>$limit_rate</strong></td>
                                    <td>Setting this variable enables response rate limiting.</td>
                                </tr>
                                <tr>
                                    <td><strong>$memcached_key</strong></td>
                                    <td>Defines a key for obtaining response from a memcached server.</td>
                                </tr>
                                <tr>
                                    <td><strong>$modern_browser</strong></td>
                                    <td>Equals the value set by the modern_browser_value directive, if a browser was
                                        identified as modern.</td>
                                </tr>
                                <tr>
                                    <td><strong>$msec (ngx_http_core_module)</strong></td>
                                    <td>Current time in seconds with the ms (milliseconds) resolution.</td>
                                </tr>
                                <tr>
                                    <td><strong>$msec (ngx_http_log_module)</strong></td>
                                    <td>Time in seconds with a milliseconds resolution at the time of the log write.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>$msec (ngx_stream_core_module)</strong></td>
                                    <td>Current time in seconds with the ms (milliseconds) resolution.</td>
                                </tr>
                                <tr>
                                    <td><strong>$msie</strong></td>
                                    <td>Equals 1 if a browser was identified as MSIE (Microsoft Internet Explorer) of
                                        any version.</td>
                                </tr>
                                <tr>
                                    <td><strong>$nginx_version (ngx_http_core_module)</strong></td>
                                    <td>Shows the nginx version</td>
                                </tr>
                                <tr>
                                    <td><strong>$nginx_version (ngx_stream_core_module)</strong></td>
                                    <td>Nginx version.</td>
                                </tr>
                                <tr>
                                    <td><strong>$pid (ngx_http_core_module)</strong></td>
                                    <td>PID (Process ID) of the worker process.</td>
                                </tr>
                                <tr>
                                    <td><strong>$pid (ngx_stream_core_module)</strong></td>
                                    <td>PID (Process ID) of the worker process.</td>
                                </tr>
                                <tr>
                                    <td><strong>$pipe (ngx_http_core_module)</strong></td>
                                    <td>"p" if request was pipelined, "." Otherwise.</td>
                                </tr>
                                <tr>
                                    <td><strong>$pipe (ngx_http_log_module)</strong></td>
                                    <td>"p" if request was pipelined, "." Otherwise.</td>
                                </tr>
                                <tr>
                                    <td><strong>$protocol</strong></td>
                                    <td>Protocol used to communicate with the client: UDP or TCP.</td>
                                </tr>
                                <tr>
                                    <td><strong>$proxy_add_x_forwarded_for</strong></td>
                                    <td>the "X-Forwarded-For" client request header field with the $remote_addr variable
                                        appended to it, separated by a comma. If the "X-Forwarded-For" field is not
                                        present in the client request header, the $proxy_add_x_forwarded_for variable is
                                        equal to the $remote_addr variable.</td>
                                </tr>
                                <tr>
                                    <td><strong>$proxy_host</strong></td>
                                    <td>Name and port of the proxied server as specified in the proxy_pass directive.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>$proxy_port</strong></td>
                                    <td>Port of the proxied server as specified in the proxy_pass directive, or the
                                        default port of the protocol.</td>
                                </tr>
                                <tr>
                                    <td><strong>$proxy_protocol_addr (ngx_http_core_module)</strong></td>
                                    <td>Client address from the PROXY protocol header, or an empty string otherwise. The
                                        PROXY protocol must be enabled before. This can be done by setting the proxy
                                        protocol parameter in the listen directive.</td>
                                </tr>
                                <tr>
                                    <td><strong>$proxy_protocol_addr (ngx_stream_core_module)</strong></td>
                                    <td>Client address from the PROXY protocol header, or an empty string otherwise. The
                                        PROXY protocol must be enabled before. This can be done by setting the proxy
                                        protocol parameter in the listen directive.</td>
                                </tr>
                                <tr>
                                    <td><strong>$proxy_protocol_port (ngx_http_core_module)</strong></td>
                                    <td>Client address from the PROXY protocol header, or an empty string otherwise. The
                                        PROXY protocol must be enabled before. This can be done by setting the proxy
                                        protocol parameter in the listen directive.</td>
                                </tr>
                                <tr>
                                    <td><strong>$proxy_protocol_port (ngx_stream_core_module)</strong></td>
                                    <td>Client address from the PROXY protocol header, or an empty string otherwise. The
                                        PROXY protocol must be enabled before. This can be done by setting the proxy
                                        protocol parameter in the listen directive.</td>
                                </tr>
                                <tr>
                                    <td><strong>$query_string</strong></td>
                                    <td>Same as $args</td>
                                </tr>
                                <tr>
                                    <td><strong>$realip_remote_addr (ngx_http_realip_module)</strong></td>
                                    <td>It is used to keep the original client address.</td>
                                </tr>
                                <tr>
                                    <td><strong>$realip_remote_addr (ngx_stream_realip_module)</strong></td>
                                    <td>It is used to keep the original client address.</td>
                                </tr>
                                <tr>
                                    <td><strong>$realip_remote_port (ngx_http_realip_module)</strong></td>
                                    <td>It is used to keep the original client address.</td>
                                </tr>
                                <tr>
                                    <td><strong>$realip_remote_port (ngx_stream_realip_module)</strong></td>
                                    <td>It is used to keep the original client address.</td>
                                </tr>
                                <tr>
                                    <td><strong>$realpath_root</strong></td>
                                    <td>An absolute path name corresponding to the alias or root directive's value for
                                        the current request, with all symbolic links resolved to real paths.</td>
                                </tr>
                                <tr>
                                    <td><strong>$remote_addr (ngx_http_core_module)</strong></td>
                                    <td>Client Address</td>
                                </tr>
                                <tr>
                                    <td><strong>$remote_addr (ngx_stream_core_module)</strong></td>
                                    <td>Client Address</td>
                                </tr>
                                <tr>
                                    <td><strong>$remote_port (ngx_http_core_module)</strong></td>
                                    <td>Client Port</td>
                                </tr>
                                <tr>
                                    <td><strong>$remote_port (ngx_stream_core_module)</strong></td>
                                    <td>Client port</td>
                                </tr>
                                <tr>
                                    <td><strong>$remote_user</strong></td>
                                    <td>User name supplied with the Basic authentication.</td>
                                </tr>
                                <tr>
                                    <td><strong>$request</strong></td>
                                    <td>Full original request line.</td>
                                </tr>
                                <tr>
                                    <td><strong>$request_body</strong></td>
                                    <td>The variable's value is made available in locations processed by the proxy_pass,
                                        and scgi_pass directive when the request body was read to a memory_buffer.</td>
                                </tr>
                                <tr>
                                    <td><strong>$request_body_file</strong></td>
                                    <td>Name of a temporary file with the request body.</td>
                                </tr>
                                <tr>
                                    <td><strong>$request_completion</strong></td>
                                    <td>Value is "OK" if a request has completed, or an empty string otherwise.</td>
                                </tr>
                                <tr>
                                    <td><strong>$request_filename</strong></td>
                                    <td>File path for the current request, based on the root or alias directives, and
                                        the request URI.</td>
                                </tr>
                                <tr>
                                    <td><strong>$request_id</strong></td>
                                    <td>Unique request identifier generated from 16 random bytes, in hexadecimal.</td>
                                </tr>
                                <tr>
                                    <td><strong>$request_length (ngx_http_core_module)</strong></td>
                                    <td>Request length (request line, request body, and header).</td>
                                </tr>
                                <tr>
                                    <td><strong>$request_length (ngx_http_log_module)</strong></td>
                                    <td>Request length (request line, request body, and header).</td>
                                </tr>
                                <tr>
                                    <td><strong>$request_method</strong></td>
                                    <td>Request method. Usually "GET" or "POST".</td>
                                </tr>
                                <tr>
                                    <td><strong>$request_time (ngx_http_core_module)</strong></td>
                                    <td>Request processing time in seconds with a milliseconds resolution; time elapsed
                                        since the first bytes were read from the client.</td>
                                </tr>
                                <tr>
                                    <td><strong>$request_time (ngx_http_log_module)</strong></td>
                                    <td>Request processing time in seconds with a milliseconds resolution; time elapsed
                                        between the first bytes were read from the client and the log write after the
                                        last bytes were sent to the client.</td>
                                </tr>
                                <tr>
                                    <td><strong>$request_uri</strong></td>
                                    <td>Full original request URI (Uniform Resource Identifier) with arguments.</td>
                                </tr>
                                <tr>
                                    <td><strong>$scheme</strong></td>
                                    <td>Request scheme which may be http or https</td>
                                </tr>
                                <tr>
                                    <td><strong>$secure_link</strong></td>
                                    <td>Shows the status a link check and the value depends on the selected operation
                                        mode.</td>
                                </tr>
                                <tr>
                                    <td><strong>$secure_link_expires</strong></td>
                                    <td>The lifetime of a link passed in a request;</td>
                                </tr>
                                <tr>
                                    <td><strong>$sent_http_name</strong></td>
                                    <td>It is the arbitrary response header field; the last part of a variable name is
                                        the name of the field converted to lower case with dashes replaced by
                                        underscores.</td>
                                </tr>
                                <tr>
                                    <td><strong>$sent_trailer_name</strong></td>
                                    <td>Arbitrary field sent at the end of the response; the last part of a variable
                                        name is the name of the field converted to lower case with dashes replaced by
                                        underscores.</td>
                                </tr>
                                <tr>
                                    <td><strong>$server_addr (ngx_http_core_module)</strong></td>
                                    <td>Server's address which accepted a request. To compute the value of this variable
                                        requires a system call.</td>
                                </tr>
                                <tr>
                                    <td><strong>$server_addr (ngx_stream_core_module)</strong></td>
                                    <td>Server's address which accepted a request. To compute the value of this variable
                                        requires a system call.</td>
                                </tr>
                                <tr>
                                    <td><strong>$server_name</strong></td>
                                    <td>Server's name which accepted a request.</td>
                                </tr>
                                <tr>
                                    <td><strong>$server_port (ngx_http_core_module)</strong></td>
                                    <td>Server's port which accepted a request.</td>
                                </tr>
                                <tr>
                                    <td><strong>$server_port (ngx_stream_core_module)</strong></td>
                                    <td>Server's port which accepted a connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$server_protocol</strong></td>
                                    <td>It is a request protocol, usually HTTP/1.0, HTTP/1.1 or HTTP/2.0. &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>$session_log_binary_id</strong></td>
                                    <td>Current session ID in the form of binary.</td>
                                </tr>
                                <tr>
                                    <td><strong>$session_log_id</strong></td>
                                    <td>Current session ID.</td>
                                </tr>
                                <tr>
                                    <td><strong>$session_time</strong></td>
                                    <td>Session duration in seconds with a milliseconds resolution.</td>
                                </tr>
                                <tr>
                                    <td><strong>$slice_range</strong></td>
                                    <td>The current slice range in HTTP byte range format. E.g. bytes=0-1048575</td>
                                </tr>
                                <tr>
                                    <td><strong>$spdy</strong></td>
                                    <td>SPDY protocol version for SPDY(pronounced as speedy) connections, or an empty
                                        string otherwise.</td>
                                </tr>
                                <tr>
                                    <td><strong>$spdy_request_priority</strong></td>
                                    <td>Request priority for SPDY (pronounced as speedy) connections or an empty string
                                        otherwise.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_cipher (ngx_http_ssl_module)</strong></td>
                                    <td>Returns the string of ciphers used for an established SSL (Secure Sockets Layer)
                                        connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_cipher (ngx_stream_ssl_module)</strong></td>
                                    <td>Returns the string of ciphers used for an established SSL (Secure Sockets Layer)
                                        connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_ciphers (ngx_http_ssl_module)</strong></td>
                                    <td>It will return the list of ciphers supported by the client. Here, known ciphers
                                        are listed by names and unknown are shown in hexadecimal, for example,
                                        AES128-SHA:AES256-SHA:0x00ff</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_ciphers (ngx_stream_ssl_module)</strong></td>
                                    <td>It will return the list of ciphers supported by the client. Here, known ciphers
                                        are listed by names and unknown are shown in hexadecimal, for example,
                                        AES128-SHA:AES256-SHA:0x00ff</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_cert (ngx_http_ssl_module)</strong></td>
                                    <td>It will return the client certificate in the PEM (Privacy Enhanced Mail) for an
                                        established SSL connection, with each line except the 1<sup>st</sup> prepended
                                        with the tab character.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_cert (ngx_stream_ssl_module)</strong></td>
                                    <td>It will return the client certificate in the PEM (Privacy Enhanced Mail) for an
                                        established SSL connection, with each line except the 1<sup>st</sup> prepended
                                        with the tab character.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_escaped_cert</strong></td>
                                    <td>It will return the client certificate in the PEM (Privacy Enhanced Mail) for an
                                        established SSL connection</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_fingerprint (ngx_http_ssl_module)</strong></td>
                                    <td>It will return the SHA1 (Secure Hash Algorithm) fingerprint of the client
                                        certificate for an established SSL connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_fingerprint (ngx_stream_ssl_module)</strong></td>
                                    <td>It will return the SHA1 (Secure Hash Algorithm) fingerprint of the client
                                        certificate for an established SSL connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_i_dn (ngx_http_ssl_module)</strong></td>
                                    <td>Returns the "issuer DN" (where DN is Distinguished name) string of the client
                                        certificate for an established SSL connection according to RFC 2253.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_i_dn (ngx_stream_ssl_module)</strong></td>
                                    <td>Returns the "issuer DN" (where DN is Distinguished name) string of the client
                                        certificate for an established SSL connection according to RFC 2253.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_i_dn_legacy</strong></td>
                                    <td>Returns the "issuer DN" (where DN is Distinguished name) string of the client
                                        certificate for an established SSL connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_raw_cert (ngx_http_ssl_module)</strong></td>
                                    <td>It will return the client certificate in the PEM (Privacy Enhanced Mail) format
                                        for an established SSL connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_raw_cert (ngx_stream_ssl_module)</strong></td>
                                    <td>It will return the client certificate in the PEM (Privacy Enhanced Mail) format
                                        for an established SSL connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_s_dn (ngx_http_ssl_module)</strong></td>
                                    <td>Returns the "subject DN" (where DN is Distinguished name) string of the client
                                        certificate for an established SSL connection according to RFC2253.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_s_dn (ngx_stream_ssl_module)</strong></td>
                                    <td>Returns the "subject DN" (where DN is Distinguished name) string of the client
                                        certificate for an established SSL connection according to RFC2253.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_s_dn_legacy</strong></td>
                                    <td>Returns the "subject DN" (where DN is Distinguished name) string of the client
                                        certificate for an established SSL connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_serial (ngx_http_ssl_module)</strong></td>
                                    <td>It will return the serial number of the client certificate for an established
                                        SSL connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_serial (ngx_stream_ssl_module)</strong></td>
                                    <td>It will return the serial number of the client certificate for an established
                                        SSL connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_v_end (ngx_http_ssl_module)</strong></td>
                                    <td>It will return the end date of the client certificate.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_v_end (ngx_stream_ssl_module)</strong></td>
                                    <td>It will return the end date of the client certificate.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_v_remain (ngx_http_ssl_module)</strong></td>
                                    <td>It will return the number of days until the client certificate expires.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_v_remain (ngx_stream_ssl_module)</strong></td>
                                    <td>It will return the number of days until the client certificate expires.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_v_start (ngx_http_ssl_module)</strong></td>
                                    <td>It will return the start date of the client certificate.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_v_start (ngx_stream_ssl_module)</strong></td>
                                    <td>It will return the start date of the client certificate.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_verify (ngx_http_ssl_module)</strong></td>
                                    <td>It will return the result of client certificate verification: "SUCCESS",
                                        "FAILD:reason", and "NONE" if a certificate was not present.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_client_verify (ngx_stream_ssl_module)</strong></td>
                                    <td>It will return the result of client certificate verification: "SUCCESS",
                                        "FAILD:reason", and "NONE" if a certificate was not present.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_curves (ngx_http_ssl_module)</strong></td>
                                    <td>Returns the list of curves supported by the client. All known curves are listed
                                        by names, and unknown are shown in hexadecimal, for example:
                                        0x001d:prime256v1:secp521r1:secp384r1</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_curves (ngx_stream_ssl_module)</strong></td>
                                    <td>Returns the list of curves supported by the client. All known curves are listed
                                        by names, and unknown are shown in hexadecimal, for example:
                                        0x001d:prime256v1:secp521r1:secp384r1</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_early_data</strong></td>
                                    <td>It will return 1 if TLS 1.3 early data is used and the handshake is not complete
                                        otherwise return empty.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_preread_alpn_protocols</strong></td>
                                    <td>It returns the list of protocols advertised by the client through ALPN and the
                                        values are separated by commas.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_preread_protocol</strong></td>
                                    <td>The highest SSL (Secure Sockets layer) protocol version supported by the client.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_preread_server_name</strong></td>
                                    <td>Returns the name of the server requested through SNI (Sever Name Indication).
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_protocol (ngx_http_ssl_module)</strong></td>
                                    <td>It will return the protocol of an established SSL connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_protocol (ngx_stream_ssl_module)</strong></td>
                                    <td>It will return the protocol of an established SSL connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_server_name (ngx_http_ssl_module)</strong></td>
                                    <td>Returns the name of the server requested through SNI (Server Name Indication).
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_server_name (ngx_stream_ssl_module)</strong></td>
                                    <td>Returns the name of the server requested through SNI (Server Name Indication).
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_session_id (ngx_http_ssl_module)</strong></td>
                                    <td>It will return the session identifier of an established SSL connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_session_id (ngx_stream_ssl_module)</strong></td>
                                    <td>It will return the session identifier of an established SSL connection.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_session_reused (ngx_http_ssl_module)</strong></td>
                                    <td>Returns "r" if an SSL session was reused or "." Otherwise.</td>
                                </tr>
                                <tr>
                                    <td><strong>$ssl_session_reused (ngx_stream_ssl_module)</strong></td>
                                    <td>Returns "r" if an SSL session was reused or "." Otherwise.</td>
                                </tr>
                                <tr>
                                    <td><strong>$status (ngx_http_core_module)</strong></td>
                                    <td>Response status.</td>
                                </tr>
                                <tr>
                                    <td><strong>$status (ngx_http_log_module)</strong></td>
                                    <td>Response status.</td>
                                </tr>
                                <tr>
                                    <td><strong>$status (ngx_stream_core_module)</strong></td>
                                    <td>Session status, which can be one of the following: 200: Session completed
                                        successfully. 400: Data of client could not be parsed. 403: access forbidden.
                                        500: internal server error. 502: bad gateway. 503: service unavailable.</td>
                                </tr>
                                <tr>
                                    <td><strong>$tcpinfo_rtt</strong></td>
                                    <td>Displays the information about the client TCP connection, available on systems
                                        that support the <em>TCP_INFO</em> socket option.</td>
                                </tr>
                                <tr>
                                    <td><strong>$tcpinfo_rttvar</strong></td>
                                    <td>Displays the information about the client TCP connection, available on systems
                                        that support the <em>TCP_INFO</em> socket option.</td>
                                </tr>
                                <tr>
                                    <td><strong>$tcpinfo_snd_cwnd</strong></td>
                                    <td>Displays the information about the client TCP connection, available on systems
                                        that support the <em>TCP_INFO</em> socket option.</td>
                                </tr>
                                <tr>
                                    <td><strong>$tcpinfo_rcv_space</strong></td>
                                    <td>Displays the information about the client TCP connection, available on systems
                                        that support the <em>TCP_INFO</em> socket option.</td>
                                </tr>
                                <tr>
                                    <td><strong>$time_iso8601 (ngx_http_core_module)</strong></td>
                                    <td>Shows the Local time in the standard format of ISO 8601.</td>
                                </tr>
                                <tr>
                                    <td><strong>$time_iso8601 (ngx_http_log_module)</strong></td>
                                    <td>Shows the Local time in the standard format of ISO 8601.</td>
                                </tr>
                                <tr>
                                    <td><strong>$time_iso8601 (ngx_stream_core_module)</strong></td>
                                    <td>Shows the Local time in the standard format of ISO 8601.</td>
                                </tr>
                                <tr>
                                    <td><strong>$time_local (ngx_http_core_module)</strong></td>
                                    <td>Shows the Local time in the format of common log</td>
                                </tr>
                                <tr>
                                    <td><strong>$time_local (ngx_http_log_module)</strong></td>
                                    <td>Shows the local time in the format of common log.</td>
                                </tr>
                                <tr>
                                    <td><strong>$time_local (ngx_stream_core_module)</strong></td>
                                    <td>Shows the local time in the format of common log.</td>
                                </tr>
                                <tr>
                                    <td><strong>$uid_got</strong></td>
                                    <td>The name of the cookie and received client identifier.</td>
                                </tr>
                                <tr>
                                    <td><strong>$uid_reset</strong></td>
                                    <td>If the variable is set to a ?non-empty' string means that is not ?0', then the
                                        client identifier are reset. The special value <strong>log</strong> additionally
                                        leads to the output of messages about the reset identifiers to the error_log.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>$uid_set</strong></td>
                                    <td>The name of the cookie and sent the client identifier.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_addr (ngx_http_upstream_module)</strong></td>
                                    <td>It will keep the IP address and port, or the path to the UNIX-domain socket of
                                        the upstream server. If several servers were contacted during request
                                        processing, then their addresses are separated by commas.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_addr (ngx_stream_upstream_module)</strong></td>
                                    <td>It will keep the IP address and port, or the path to the UNIX-domain socket of
                                        the upstream server. If several servers were contacted during request
                                        processing, then their addresses are separated by commas.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_bytes_received (ngx_http_upstream_module)</strong></td>
                                    <td>Number of bytes received from an upstream stream server. Values from several
                                        connections are separated by commas (,) and colons (:) like addresses in the
                                        $upstream_addr variable.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_bytes_received (ngx_stream_upstream_module)</strong></td>
                                    <td>Number of bytes received from an upstream stream server. Values from several
                                        connections are separated by commas (,) and colons (:) like addresses in the
                                        <em>$upstream_addr</em> variable.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_bytes_sent (ngx_http_upstream_module)</strong></td>
                                    <td>Number of bytes sent to an upstream stream server. Values from several
                                        connections are separated by commas (,) and colons (:) like addresses in the
                                        <em>$upstream_addr</em> variable.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_bytes_sent (ngx_stream_upstream_module)</strong></td>
                                    <td>Number of bytes sent to an upstream stream server. Values from several
                                        connections are separated by commas (,) and colons (:) like addresses in the
                                        <em>$upstream_addr</em> variable.
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_cache_status</strong></td>
                                    <td>It will keep the status of accessing a response cache. The status can be either
                                        "BYPASS", "MISS", "EXPIRED", "STALE", "REVALIDATED", "UPDATING" or "HIT".</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_connect_time (ngx_http_upstream_module)</strong></td>
                                    <td>It is used to keep the time spent on establishing a connection with the upstream
                                        server (1.9.1); the time is kept in seconds with millisecond resolution. In case
                                        of SSL, adds time spent on handshake. Times of several connections are separated
                                        by commas (,) and colons (:) like addresses in the $upstream_addr variable.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_connect_time (ngx_stream_upstream_module)</strong></td>
                                    <td>Keeps the time to connect to the upstream server; the time is kept in seconds
                                        with milliseconds resolution. Times of several connections are separated by
                                        commas (,) like addresses in the $upstream_addr variable.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_cookie_name</strong></td>
                                    <td>Cookie with the defined name sent by the upstream server in the Set-Cookie
                                        response header field. Only the cookies from the response of the last server are
                                        saved.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_first_byte_time</strong></td>
                                    <td>Time to receive the first byte of data. The time is kept in seconds with
                                        millisecond resolution. Times of multiple connections are separated by commas
                                        (,) like addresses in the $upstream_addr variable.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_header_time</strong></td>
                                    <td>It is used to keep the time spent on receiving header from the upstream server.
                                        Times of multiple connections are separated by commas (,) and colons (:) like
                                        addresses in the $upstream_addr variable.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_http_name</strong></td>
                                    <td>Keep the server response header fields.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_queue_time</strong></td>
                                    <td>It is used to keep time the request spent in the upstream queue; the time is
                                        kept in seconds with milliseconds resolution. Times of multiple connections are
                                        separated by commas (,) and colons (:) like addresses in the $upstream_addr
                                        variable.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_response_length</strong></td>
                                    <td>It is used to keep the length of the response obtained from the upstream server.
                                        The length is kept in bytes. Lengths of multiple responses are separated by
                                        commas (,) and colons (:) like addresses in the $upstream_addr variable.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_response_time</strong></td>
                                    <td>It is used to keep time spent on receiving the response from the upstream
                                        server; the time is kept in seconds with milliseconds resolution. Times of
                                        several connections are separated by commas (,) and colons (:) like addresses in
                                        the $upstream_addr variable.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_session_time</strong></td>
                                    <td>Session duration in seconds with milliseconds resolution. Times of several
                                        connections are separated by commas (,) like addresses in the $upstream_addr
                                        variable.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_status</strong></td>
                                    <td>It is used to keep the status code of the response obtained from the upstream
                                        server. Status codes of the several responses are separated by commas (,) and
                                        colons (:) like addresses in the $upstream_addr variable. If the server can't be
                                        selected, the variable keeps the 502 (Bad Gateway) status code.</td>
                                </tr>
                                <tr>
                                    <td><strong>$upstream_trailer_name</strong></td>
                                    <td>It is used to keep the field from the end of the response obtained from the
                                        upstream server.</td>
                                </tr>
                                <tr>
                                    <td><strong>$uri</strong></td>
                                    <td>Current URI in request, normalized. We can change the value of the $uri during
                                        request processing, e.g. when doing internal redirects, or when using index
                                        files.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </li>
            <li>
                Directive and Context<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom33" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom33"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Directive and Context</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>By default, the nginx configuration file can be located in:<br><br>
                            /etc/nginx/nginx.conf, <br>
                            /usr/local/etc/nginx/nginx.conf, or <br>
                            /usr/local/nginx/conf/nginx.conf <br>The location of the configuration file will vary
                            depending on the installation procedure of Nginx.</p>
                        <ul>
                            <li>
                                Directive: Configuration options in Nginx are known as directives. This option has name
                                and parameters, and this must end with a semicolon (;) otherwise Nginx will fail to load
                                the configuration and produce an error.
                            </li>
                            <li>Context: When we open the core Nginx configuration file in a text editor, the very first
                                thing we will notice that the configurations are organized in a tree-like structure
                                surrounded by curly braces i.e. "{" and "}". These locations surrounded by braces is
                                called context for placing configuration directive. Moreover, the configuration
                                directives along with their parameters, end with a semicolon.
                                <br><br>
                                This is the section where we can declare directives. It is similar to the scope in a
                                programming language.
                                <br><br>
                                Context can be nested within other contexts, thereby creating a context hierarchy.
                                <br>The lines padded by # are comments and not interpreted by Nginx.

                            </li>
                        </ul>
                    </div>
                </div><br>
                This file has the following content:<br>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2071" aria-expanded="false" aria-controls="collapseOne">
                                Directive
                            </button>
                        </h2>
                        <div id="collapseOne2071" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <pre class="language-nginx">
                                    <code>
                                        gzip on;  
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2071" aria-expanded="false" aria-controls="collapseTwo">
                                Context
                            </button>
                        </h2>
                        <div id="collapseTwo2071" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <pre class="language-nginx">
                                    <code>
                                        worker_processes 2; # directive in the global context  
                                        http {              # http context  
                                            gzip on;        # directive in http context  
                                          
                                          server {          # server context  
                                            listen 80;      # directive in server context  
                                          }  
                                        }  
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Directive Types<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom34" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom34"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Directive Types</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>Since the inheritance model differs for different directives, therefore, we have to pay
                            attention when using the same directive in multiple contexts. There is a total of three
                            types of directives, each with its inheritance model.</p>

                        <p>
                        <ol>
                            <li>Normal: It has one value per context. And we can define it only once in the context.
                                Subcontexts can override the parent directive, but this override will be valid only in a
                                given subcontext.</li>
                            <li>Array: Adding too many directives in the same context will add to the values instead of
                                overwriting them altogether. Defining a directive in a subcontext will override all the
                                values of a parent in the given subcontext.</li>
                            <li>Action Directive: Actions are directives that are used to change things. Their behavior
                                of inheritance will depend on the module.

                                For example: In the rewrite directive case, every matching directive will be executed.
                            </li>
                            <li></li>
                        </ol>
                        </p>

                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2081" aria-expanded="false" aria-controls="collapseOne">
                                Normal
                            </button>
                        </h2>
                        <div id="collapseOne2081" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                            <code>
                                                gzip on;  
                                                gzip off; # illegal to have two normal directives in the same context   
                                                  
                                                server {  
                                                  location /downloads {  
                                                    gzip off;  
                                                  }  
                                                  
                                                  location /assets {  
                                                    # gzip is in here  
                                                  }  
                                                }  
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2081" aria-expanded="false" aria-controls="collapseTwo">
                                Array
                            </button>
                        </h2>
                        <div id="collapseTwo2081" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                            <code>
                                                error_log /var/log/nginx/error.log;  
                                                error_log /var/log/nginx/error_notive.log notice;  
                                                error_log /var/log/nginx/error_debug.log debug;  
                                                  
                                                server {  
                                                  location /downloads {  
                                                    # this will override all the parent directives  
                                                    error_log /var/log/nginx/error_downloads.log;  
                                                  }  
                                                }  
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2081" aria-expanded="false" aria-controls="collapseThree">
                                Action Directive
                            </button>
                        </h2>
                        <div id="collapseThree2081" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                            <code>
                                                server {  
                                                    rewrite ^ /foobar;  
                                                    
                                                    location /foobar {  
                                                      rewrite ^ /foo;  
                                                      rewrite ^ /bar;  
                                                    }  
                                                  }  
                                                </code>
                                            </pre>
                                <ul class="points">
                                    <li>A server rewrite is executed, rewriting is done from <strong>/sample</strong> to
                                        <strong>/foobar</strong>.
                                    </li>
                                    <li>Then the location <strong>/foobar</strong> is matched.</li>
                                    <li>The 1<sup>st</sup> location rewrite is executed, rewriting from <strong>/foobar,
                                            to /foo</strong>.</li>
                                    <li>The 2<sup>nd</sup> location rewrite is executed, rewriting from <strong>/foo, to
                                            /bar</strong>.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Type of Context<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom35" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom35"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Type of Context</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>
                        <ol>
                            <li>Main Context
                                : The most general context is the main context. It is also called the global context.
                                The main context sets the settings for Nginx globally, and is the only context that is
                                not contained within the typical context blocks and that is not surrounded by curly
                                braces.
                                <br><br>
                                The main context is placed at the beginning of the core Nginx configuration file. The
                                directives for this context cannot be inherited in any other context and therefore can't
                                be overridden.<br><br>The main context is used to configure details that affect the
                                entire application on a basic level. Some common details that are configured in the main
                                context are the user and group to run the worker processes as, the total number of
                                workers, and the file to save the main process ID. The default error file for the entire
                                application can be set at the main context level.
                            </li>
                            <li>Events Context: The events context sets global options for connection processing. The
                                events context is contained within the main context. There can be only one event context
                                defined within Nginx configuration.
                                <br><br>
                                Nginx uses an event-based connection processing model, so the directive defined within
                                this context determines how worker processes should handle connections.
                            </li>
                            <li>HTTP Context: The HTTP context is used to hold the directives for handling HTTP or HTTPS
                                traffic.
                                <br><br>
                                The HTTP context is a sibling of the context of the event, so they must be listed
                                side-by-side, rather than nested. They both are the child of the main context.
                                <br><br>

                                Lower contexts handle the request, and the directives at this level control the defined
                                defaults for every virtual server.
                            </li>
                            <li>Server Context: The server context is declared within the http context. The server
                                context is used to define the Nginx virtual host settings. There can be multiple server
                                contexts inside the HTTP context. The directives inside the server context handle the
                                processing of requests for resources associated with a particular domain or IP address.
                                <br><br>

                                The directives in this context can override many of the directives that may be defined
                                in the http context, including the document root, logging, compression, etc. In addition
                                to the directives that are taken from the http context, we can also configure files to
                                try to respond to requests, issue redirects, and rewrites, and set arbitrary variables.
                            </li>
                            <li>Location Context: Location contexts define directives to handle the request of the
                                client. When any request for resource arrives at Nginx, it will try to match the URI
                                (Uniform Resource Identifier) to one of the locations and handle it accordingly.
                                <br><br>

                                Multiple location contexts can be defined within the server blocks. Moreover, a location
                                context can also be nested inside another location context.
                            </li>
                            <li>Upstream Context: The upstream context is used to configure and define an upstream
                                server. This context is allowed to define a pool of backend servers that Nginx can proxy
                                the used when request. This context is usually we are configuring proxies of various
                                types.
                                <br><br>

                                Upstream context enables Nginx to perform load balancing while proxying the request.
                                This context is defined inside the HTTP context and outside any server context.
                                <br><br>

                                The upstream context is referenced by name within server or location blocks. And then
                                pass the requests of a certain type to the pool of defined servers. The upstream will
                                then use an algorithm (by default round-robin) to determine which specific server need
                                to be used to handle the request.
                            </li>
                            <li>Mail Context: Although Nginx is most often used as a web or reverse proxy server, it can
                                also be used as a high-performance mail proxy server. The context that is used for this
                                type of directives is called the mail context. The mail context is defined inside the
                                main or global context or outside of the http context.
                                <br><br>

                                The main purpose of the mail context is to provide an area for configuring a mail
                                proxying solution on the server. Nginx can redirect authentication requests to an
                                external authentication server. It can then provide access to POP3, SMTP, and IMAP mail
                                servers for serving the actual mail data.
                            </li>

                            <li>If context: The if context is used to allow conditional execution of directives defined
                                within it. If the context is just like "if statement" of any other programming
                                languages. The if context will execute the contained instructions if a given condition
                                returns true.
                                <br><br>

                                The if context should be avoided as far as possible due to some limitations of it
                            </li>
                            <li>Limit_except context: The limit_except context is used to prevent the use of all HTTP
                                methods within the location context except the ones that we explicitly allow. For
                                example, if certain clients should have access to POST content and everyone should have
                                the ability to read the content, then we can use limit_except context for this. <br><br>
                                The above example allows all the visitors to use the GET header in the location
                                /wp-admin. The other HTTP headers are permitted if it is originated from local addresses
                                only.</li>
                            <li>Miscellaneous Contexts: Apart from the above contexts, there are few other contexts
                                available in Nginx and are described below. These contexts are dependent on optional
                                modules and are used very rarely.<br>
                                <ul class="points">
                                    <li><strong>split_clients:</strong> The split_client context splits the client's
                                        request into two or more categories. This context is defined in the HTTP context
                                        and is mainly used for A/B testing. </li>
                                    <li><strong>geo:</strong> The geo context categorizes client IP addresses. It is
                                        used to map the value of a variable depending on the connecting IP addresses.
                                    </li>
                                    <li><strong>charset_map:</strong> This context is used to add specific charset to
                                        the "Content-Type" response header field. Also, using the context, one can
                                        convert data from one charset to another charset with some limitations.</li>
                                    <li><strong>map:</strong> The map context is used to create variables whose values
                                        depend on the values of other variables and are defined in the http context.
                                    </li>
                                    <li><strong>perl/perl_set:</strong> It is used to implement location and variable
                                        handlers in Perl and insert Perl calls into SSI. Further, with the help of the
                                        perl_set context, we can install a Perl handler for a specific variable.</li>
                                    <li><strong>types:</strong> The types context maps the MIME types with correct file
                                        extensions. This context may appear in the http context, server context or
                                        location context. </li>
                                </ul>
                            </li>
                        </ol>
                        </p>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2085" aria-expanded="false" aria-controls="collapseOne">
                                Main Context
                            </button>
                        </h2>
                        <div id="collapseOne2085" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                            <code>
                                                user nginx;  
worker_processes auto;  
pid /run/nginx.pid;  
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2085" aria-expanded="false" aria-controls="collapseTwo">
                                Events Context
                            </button>
                        </h2>
                        <div id="collapseTwo2085" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                            <code>
                                                events {  
                                                    # events context  
                                                    worker_connections 768;   
                                                    multi_accept on;  
                                            }    
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2085" aria-expanded="false" aria-controls="collapseThree">
                                HTTP Context
                            </button>
                        </h2>
                        <div id="collapseThree2085" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                            <code>
                                                http {  
                                                    sendfile on;   
                                                    tcp_nopush on;     
                                                    tcp_nodelay on;    
                                                    keepalive_timeout 65;  
                                                    ...  
                                                    ...  
                                             }  
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2086" aria-expanded="false" aria-controls="collapseThree">
                                HTTP Context
                            </button>
                        </h2>
                        <div id="collapseThree2086" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                            <code>
                                                http {  
                                                    sendfile on;   
                                                    tcp_nopush on;     
                                                    tcp_nodelay on;    
                                                    keepalive_timeout 65;  
                                                    ...  
                                                    ...  
                                             }  
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2085" aria-expanded="false" aria-controls="collapseThree">
                                Server Context
                            </button>
                        </h2>
                        <div id="collapseThree2085" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                            <code>
                                                
                                                    server {  
                                                        listen 80;  
                                                        server_name domain1.com;  
                                                        root /var/www/html/wordpress;  
                                                        ...  
                                             }  
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2087" aria-expanded="false" aria-controls="collapseThree">
                                Location Context
                            </button>
                        </h2>
                        <div id="collapseThree2087" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                            <code>
                                                location /some_url {    
                                                    # configuration for processing URIs starting with /some_url  
                                                    }  
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2088" aria-expanded="false" aria-controls="collapseThree">
                                Upstream Context
                            </button>
                        </h2>
                        <div id="collapseThree2088" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                            <code>
                                                upstream backend_servers {  
                                                    server host1.example.com;  
                                                    server host2.example.com;  
                                                    server host3.example.com;  
                         }  
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree208566" aria-expanded="false"
                                aria-controls="collapseThree">
                                Mail Context
                            </button>
                        </h2>
                        <div id="collapseThree208566" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                            <code>
                                                mail {  
                                                    server_name mail.example.com;  
                                                    auth_http   localhost:9000/cgi-bin/nginxauth.cgi;  
                                                    proxy_pass_error_message on;  
                                                    ...  
                                             }  
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20854" aria-expanded="false"
                                aria-controls="collapseThree">
                                If context
                            </button>
                        </h2>
                        <div id="collapseThree20854" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                            <code>
                                                                 location /some_url {  
                                                                 if (test_condition) {  
                                                                      # do some stuff here  
                                                               }  
                                                     }  
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree208512" aria-expanded="false"
                                aria-controls="collapseThree">
                                Limit_except context
                            </button>
                        </h2>
                        <div id="collapseThree208512" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                            <code>
                                                location /wp-admin/ {   
                                                    limit_except GET {   
                                                      allow 127.0.0.1;   
                                                      deny all;   
                                                    }   
                                                }    
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                What is Health Checks?<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom36" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom36"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">What is Health Checks?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>A health check is a scheduled rule used to send the same request to each member. A health
                            check sends a request to each member of the load balancer group to establish the
                            availability of each member server to accept the client requests. For some types of health
                            checks, the response from the server is calculated to determine the health status of each
                            member server. The successful completion of the health check needs that the server passes
                            normal TCP and HTTP connection criteria. </p>
                        <p>In the TCP mode, a health check is performed with a TCP connection request. And in the HTTP
                            mode which is the standard health check type, a health check is performed with an HTTP GET
                            or HTTP POST method.</p>
                    </div>
                </div>
            </li>
            <li>
                HTTP Health Checks<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom37" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom37"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">HTTP Health Checks
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>Nginx Plus and Nginx open source can continually test our upstream servers, avoid the servers
                            that have failed, and gracefully add the recovered servers into the load-balanced group.
                            <br>
                        <ol>
                            <li>Passive Health Check: For passive health checks, Nginx Plus and Nginx monitor the
                                transaction as they happen, and try to resume the failed connections. If the transaction
                                still cannot be resumed, Nginx Plus and Nginx open-source mark the server as unavailable
                                and temporarily stop sending requests to it until it is marked active again.<br><br>
                                The conditions under which an upstream server is marked as unavailable are defined for
                                each upstream server with parameters to the server directive in the upstream block.
                            </li>
                            <li>Active Health Check: Nginx Plus periodically checks the health of upstream servers by
                                sending special health check requests to each server and verifying the correct response.
                            </li>
                            <li></li>
                        </ol>
                        </p>

                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2052" aria-expanded="false" aria-controls="collapseOne">
                                Passive Health Check
                            </button>
                        </h2>
                        <div id="collapseOne2052" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-nginx">
                                    <code>
                                        upstream backend {  
                                            server backend1.example.com;  
                                            server backend2.example.com max_fails=3 fail_timeout=30s;  
                                        }  
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2052" aria-expanded="false" aria-controls="collapseTwo">
                                Active Health Check
                            </button>
                        </h2>
                        <div id="collapseTwo2052" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                1) The location which passes requests to an upstream group, include the health_check
                                directive:
                                <pre class="language-nginx">
                                    <code>
                                        server {  
                                            location / {  
                                                  proxy_pass http://backend;  
                                                  health_check;  
                                              }  
                                          }  
                                    </code>
                                    </pre>
                                2) In the upstream server group, specify a shared memory zone with the zone directive:
                                <pre class="language-nginx">
                                        <code>
                                            http {  
                                                upstream backend {  
                                                    zone backend 64k;  
                                                    server backend1.example.com;  
                                                    server backend2.example.com;  
                                                }  
                                            }  
                                        </code>
                                        </pre>
                                3) We can override the default for active health checks with parameters to the
                                health_check directive:
                                <pre class="language-nginx">
                                            <code>
                                                location / {  
                                                    proxy_pass http://backend;  
                                                    health_check interval=10 fails=3 passes=2;  
                                                }  
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2052" aria-expanded="false" aria-controls="collapseThree">
                                Specifying the Requested URI
                            </button>
                        </h2>
                        <div id="collapseThree2052" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We can use the uri parameter of the health_check directive to set the URI to request in
                                a health check:
                                <pre class="language-nginx">
                                    <code>
                                        location / {  
                                            proxy_pass http://backend;  
                                            health_check uri=/some/path;  
                                        }   </code>
                                    </pre>
                                The specified URI (Uniform Resource Identifier) is appended to the server domain name or
                                IP address set for the server in the upstream block. In the above example, for the first
                                server in the sample backend group, a health check requests the URI
                                http://backend1.example.com/some/path.
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Defining Custom Conditions<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom38" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom38"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Defining Custom Conditions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>
                            We can specify the custom conditions that the response must satisfy for the server to pass
                            the health check. The conditions are defined in the match block, which is referenced in the
                            match parameter of the health_check directive:
                            <br><br>In the above example, the health check is passed if the status code of the response
                            is in the range 200-399, and its body does not contain the string maintenance mode.

                        </p>
                    </div>
                </div>
                <pre class="language-nginx">
                            <code>
                                http {  
                                    #...  
                                    match server_ok {  
                                        status 200-399;  
                                        body !~ "maintenance mode";  
                                    }  
                                    server {  
                                        #...  
                                        location / {  
                                            proxy_pass http://backend;  
                                            health_check match=server_ok;  
                                        }  
                                    }  
                                }  
                            </code>
                            </pre>
            </li>
            <li>
                NGINX Compression and Decompression<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom39" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom39"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">NGINX Compression and Decompression</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>
                            The compression process reduces the size of the transmitted data. However, since compression
                            happens at runtime, it can also include considerable processing overhead which can
                            negatively affect performance. Nginx performs compression before sending responses to
                            clients but does not double compress responses that are already compressed. <br><br>

                            Enabling Decompression: Some clients do not handle responses with the gzip encoding method.
                            At the same time, it might be desirable to store compressed data or responses on the fly and
                            store them in the cache. To successfully serve both clients that do and do not accept
                            compressed data, NGINX can decompress data on the fly when sending it to the latter type of
                            client.
                        </p>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2039" aria-expanded="false" aria-controls="collapseOne">
                                Enabling Compression
                            </button>
                        </h2>
                        <div id="collapseOne2039" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                To enable the compression, add the gzip directive with the on parameter:
                                <pre class="language-nginx">
                                            <code>
                                                gzip on;  
                                            </code>
                                            </pre>
                                By default, Nginx compresses responses only with text/html (MIME type). To compress
                                responses with other MIME types, add the gzip_types directive and list the additional
                                types.
                                <pre class="language-nginx">
                                                <code>
                                                    gzip_types text/plain application/xml;  
                                                </code>
                                                </pre>
                                We can define the minimum length of the response to compress, use the gzip_min_length
                                directive. The default is 20 bytes.
                                <pre class="language-nginx">
                                                    <code>
                                                        gzip_min_length 1000;    
                                                    </code>
                                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2039" aria-expanded="false" aria-controls="collapseTwo">
                                Enabling Decompression
                            </button>
                        </h2>
                        <div id="collapseTwo2039" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                To enable runtime decompression, use the gunzip directive.
                                <pre class="language-nginx">
                                            <code>
                                                location /storage/ {  
                                                    gunzip on;  
                                                    ...  
                                                }  
                                            </code>
                                            </pre>
                                The gunzip directive can be defined in the same context as the gzip directive:
                                <pre class="language-nginx">
                                                <code>
                                                    server {  
                                                        gzip on;  
                                                        gzip_min_length 1000;  
                                                        gunzip on;  
                                                        ...  
                                                    } 
                                                </code>
                                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2039" aria-expanded="false" aria-controls="collapseThree">
                                Sending Compressed Files
                            </button>
                        </h2>
                        <div id="collapseThree2039" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                To send a compressed file to the client instead of the regular one, set the gzip_static
                                directive to on within the appropriate context.
                                <pre class="language-nginx">
                                            <code>
                                                location / {  
                                                    gzip_static on;  
                                                }  
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                NGINX Dynamic Modules<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom40" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom40"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">NGINX Dynamic Modules
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>Nginx Plus is a modular architecture. We can include new features and functionality with
                            software modules, which can be plugged into a running Nginx Plus instance on demand.</p>
                        <p>Dynamic modules include functionality to Nginx Plus such as geolocating users by IP address,
                            resizing images, and embedding Lua scripts into the Nginx Plus event processing model.
                            Modules are created both by Nginx, incorporation and third-party developers.</p>
                        <p>With the help of dynamic modules, we can load separate shared object files at runtime as
                            modules - both third party modules as well as some native Nginx modules.</p>
                        <p>
                            The next Nginx Plus release will build on this dynamic modules feature. Nginx Plus has a
                            managed modules repository with a range of third party modules that we have tested and
                            certified against Nginx Plus, making it easier for us to add common extensions to Nginx Plus
                            with confidence.
                            <br><br>
                            Let's see the list of some important dynamic modules:
                        <ol>
                            <li>Brotli: Brotli is a general-purpose, lossless data compression algorithm that uses a
                                variant of the Huffman coding, LZ77 algorithm, and second-order context modeling. Its
                                compression ratio is comparable to the best currently available general-purpose
                                compression methods.</li>
                            <li>Cookie-Flag:Set the flags HttpOnly, secure and SameSite for cookies in Set-Cookie
                                upstream response headers.</li>
                            <li>Encrypted-Session: This dynamic module gives some encryption and decryption support for
                                Nginx variables based on AES-256 with MAC. It is usually used with the Set-Misc dynamic
                                module and the Nginx rewrite module.</li>
                            <li>GeoIP: Create variable based on the IP address of the client, using the precompiled
                                MaxMind GeoIP databases, for both Http and TCP/UDP traffic:</li>
                            <li>GeoIP2: Create variable based on the IP address of the client, using the precompiled
                                MaxMind GeoIP2 databases, which provides localized name information not present in the
                                original GeoIP databases.</li>
                            <li>Headers-More: It is used to set and clear the input and output headers, for extending
                                core Headers module:</li>
                            <li>Image-Filter: Crop, rotate, resize and perform other transformations of GIF, JPEG, and
                                PNG images.</li>
                            <li>Lua: Integrate Lua co-routines into the event-processing Module of Nginx.</li>
                            <li>Perl:Implement location and variable handlers in Perl, and insert Perl calls into SSI
                                (Server Side Includes).</li>
                            <li>RTMP:Stream RTMP (Real Time Messaging Protocol), Apple HTTP Live Streaming (HLS), and
                                Dynamic Adaptive Streaming over HTTP (DASH) video formats.</li>
                            <li>Set-Misc:Implement numerous additional set_* directives, by extending the Nginx core
                                Rewrite module.</li>
                        </ol>
                        </p>
                    </div>
                </div>
                <br>
                Displaying the List of Available Modules
                <pre class="language-bash">
                                <code>
                                    apt-cache search nginx-plus-module  
                                </code>
                                </pre>
                To display the list of available modules, run the following command (for Debian or Ubuntu OS)
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne20100" aria-expanded="false" aria-controls="collapseOne">
                                Brotli Installation Steps:
                            </button>
                        </h2>
                        <div id="collapseOne20100" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                1. First, install the Brotli module.
                                <pre class="language-nginx">
                                            <code>
                                                apt-get install nginx-plus-module-brotli  
                                            </code>
                                            </pre>
                                2. Add the following directive in the top level ("main") context of the main Nginx Plus
                                configuration file /etc/nginx/nginx.conf:
                                <pre class="language-nginx">
                                                <code>
                                                    load_module modules/ngx_http_brotli_filter_module.so;  
                                                    load_module modules/ngx_http_brotli_static_module.so;   
                                                </code>
                                                </pre>
                                3. Perform some additional configuration as required by the module.
                                <br>
                                4. To enable the module, reload Nginx Plus:
                                <pre class="language-nginx">
                                                    <code>
                                                        nginx -t && nginx -s reload    
                                                    </code>
                                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo20100" aria-expanded="false" aria-controls="collapseTwo">
                                Cookie-Flag Installation Steps:
                            </button>
                        </h2>
                        <div id="collapseTwo20100" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                1. Install the Cookie-Flag module.For CentOS, Amazon Linux, Oracle Linux, and RHEL:
                                <pre class="language-nginx">
                                            <code>
                                                apt-get install nginx-plus-module-cookie-flag  
                                            </code>
                                            </pre>
                                2. Add the following directive in the top-level ("main") context of the main Nginx Plus
                                configuration file /etc/nginx/nginx.conf:
                                <pre class="language-nginx">
                                                <code>
                                                    load_module modules/ngx_http_cookie_flag_filter_module.so;  
                                                </code>
                                                </pre>
                                3. Perform some additional configuration as required by the module.
                                <br>
                                4. To enable the module, reload Nginx Plus:
                                <pre class="language-nginx">
    <code>
        nginx -t && nginx -s reload  
    </code>
    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20100" aria-expanded="false"
                                aria-controls="collapseThree">
                                Encrypted-Session Installation Steps:
                            </button>
                        </h2>
                        <div id="collapseThree20100" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                1. Install the Encrypted - Session Module.
                                <pre class="language-nginx">
                                            <code>
                                                apt-get install nginx-plus-module-encrypted-session  
                                                </code>
                                            </pre>
                                2. Add the following directive in the top-level ("main") context of the main Nginx Plus
                                configuration file /etc/nginx/nginx.conf
                                <pre class="language-nginx">
                                                <code>
                                                    load_module modules/ndk_http_module.so;  
                                                    load_module modules/ngx_http_encrypted_session_module.so;   
                                                </code>
                                                </pre>
                                3. Perform some additional configuration as required by the module.
                                <br><br>
                                4. To enable the module, reload Nginx Plus:
                                <pre class="language-nginx">
    <code>
        nginx -t && nginx -s reload   
    </code>
    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20101" aria-expanded="false"
                                aria-controls="collapseThree">
                                GeoIP Installation Steps:
                            </button>
                        </h2>
                        <div id="collapseThree20101" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                1. Install the GeoIP module.
                                <pre class="language-nginx">
                                            <code>
                                                apt-get install nginx-plus-module-geoip  
                                                </code>
                                            </pre>
                                2. Add the following directive in the top-level ("main") context of the main Nginx Plus
                                configuration file /etc/nginx/nginx.conf:
                                <pre class="language-nginx">
                                                <code>
                                                    load_module modules/ngx_http_geoip_module.so;  
                                                    load_module modules/ngx_stream_geoip_module.so;    
                                                </code>
                                                </pre>
                                3. Perform some additional configuration as required by the module.
                                <br><br>
                                4. To enable the module, reload Nginx Plus:
                                <pre class="language-nginx">
                                                    <code>
                                                        nginx -t && nginx -s reload  
                                                    </code>
                                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20102" aria-expanded="false"
                                aria-controls="collapseThree">
                                GeoIP2
                            </button>
                        </h2>
                        <div id="collapseThree20102" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                1. Install the GeoIP2 module.
                                <pre class="language-nginx">
                                            <code>
                                                apt-get install nginx-plus-module-geoip2  
                                                </code>
                                            </pre>
                                2. Add the following directive in the top-level ("main") context of the main Nginx Plus
                                configuration file /etc/nginx/nginx.conf:
                                <pre class="language-nginx">
                                                <code>
                                                    load_module modules/ngx_http_geoip2_module.so;  
load_module modules/ngx_stream_geoip2_module.so;  
                                                </code>
                                                </pre>
                                3. Perform some additional configuration as required by the module.
                                <br><br>
                                4. To enable the module, reload Nginx Plus:
                                <pre class="language-nginx">
                                                    <code>
                                                        nginx -t && nginx -s reload  
                                                    </code>
                                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20104" aria-expanded="false"
                                aria-controls="collapseThree">
                                Headers-More Installation Steps:
                            </button>
                        </h2>
                        <div id="collapseThree20104" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                1. Install the Headers-More module.
                                <pre class="language-nginx">
                                            <code>
                                                apt-get install nginx-plus-module-headers-more  
                                                </code>
                                            </pre>
                                2. Add the following directive in the top-level ("main") context of the main Nginx Plus
                                configuration file /etc/nginx/nginx.conf:
                                <pre class="language-nginx">
                                                <code>
                                                    load_module modules/ngx_http_headers_more_filter_module.so;  
                                                </code>
                                                </pre>
                                3. Perform some additional configuration as required by the module.
                                <br><br>
                                4. To enable the module, reload Nginx Plus:
                                <pre class="language-nginx">
                                                    <code>
                                                        nginx -t && nginx -s reload  
                                                    </code>
                                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20108" aria-expanded="false"
                                aria-controls="collapseThree">
                                Image-Filter
                            </button>
                        </h2>
                        <div id="collapseThree20108" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                1. Install the Image-Filter module.
                                <pre class="language-nginx">
                                            <code>
                                                apt-get install nginx-plus-module-image-filter  
                                                </code>
                                            </pre>
                                2. Add the following directive in the top-level ("main") context of the main NGINX Plus
                                configuration file, /etc/nginx/nginx.conf:
                                <pre class="language-nginx">
                                                <code>
                                                    load_module modules/ngx_http_image_filter_module.so;   
                                                </code>
                                                </pre>
                                3. Perform additional configuration as required by the module.
                                <br><br>
                                4. To enable the module, reload NGINX Plus:
                                <pre class="language-nginx">
                                                    <code>
                                                        nginx -t && nginx -s reload   
                                                    </code>
                                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20110" aria-expanded="false"
                                aria-controls="collapseThree">
                                Lua Installation Steps:
                            </button>
                        </h2>
                        <div id="collapseThree20110" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                1. Install the Lua module.
                                <pre class="language-nginx">
                                            <code>
                                                apt-get install nginx-plus-module-lua  
                                                </code>
                                            </pre>
                                2. Add both of the following directives in the top-level ("main") context of the main
                                NGINX Plus configuration file, /etc/nginx/nginx.conf:
                                <pre class="language-nginx">
                                                <code>
                 load_module modules/ndk_http_module.so;  
load_module modules/ngx_http_lua_module.so;  
                                                </code>
                                                </pre>
                                3. Perform additional configuration as required by the module.
                                <br><br>

                                4. Reload NGINX Plus to enable the module:
                                <pre class="language-nginx">
                                                    <code>
                                                        nginx -t && nginx -s reload  
                                                    </code>
                                                    </pre>
                            </div>
                        </div>
                    </div>




                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20111" aria-expanded="false"
                                aria-controls="collapseThree">
                                Perl Installation Steps:
                            </button>
                        </h2>
                        <div id="collapseThree20111" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                1. Install the Perl module.
                                <pre class="language-nginx">
                                            <code>
                                                apt-get install nginx-plus-module-perl    
                                                </code>
                                            </pre>
                                2. Add both of the following directives in the top-level ("main") context of the main
                                NGINX Plus configuration file, /etc/nginx/nginx.conf:
                                <pre class="language-nginx">
                                                <code>
                                                    load_module modules/ngx_http_perl_module.so;  
                                                </code>
                                                </pre>
                                3. Perform additional configuration as required by the module.
                                <br><br>

                                4. Reload NGINX Plus to enable the module:
                                <pre class="language-nginx">
                                                    <code>
                                                        nginx -t && nginx -s reload  
                                                    </code>
                                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20112" aria-expanded="false"
                                aria-controls="collapseThree">
                                RTMP Installation Steps:
                            </button>
                        </h2>
                        <div id="collapseThree20112" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                1. Install the RTMP Media Streaming module.
                                <pre class="language-nginx">
                                            <code>
                                                apt-get install nginx-plus-module-rtmp   
                                                </code>
                                            </pre>
                                2. Add both of the following directives in the top-level ("main") context of the main
                                NGINX Plus configuration file, /etc/nginx/nginx.conf:
                                <pre class="language-nginx">
                                                <code>
                                                    load_module modules/ngx_rtmp_module.so;  
                                                </code>
                                                </pre>
                                3. Perform additional configuration as required by the module.
                                <br><br>

                                4. Reload NGINX Plus to enable the module:
                                <pre class="language-nginx">
                                                    <code>
                                                        nginx -t && nginx -s reload  
                                                    </code>
                                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20113" aria-expanded="false"
                                aria-controls="collapseThree">
                                Set-Misc Installation Steps:
                            </button>
                        </h2>
                        <div id="collapseThree20113" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                1. Install the Set-Misc module.
                                <pre class="language-nginx">
                                            <code>
                                                apt-get install nginx-plus-module-set-misc  
                                                </code>
                                            </pre>
                                2. Add both of the following directives in the top-level ("main") context of the main
                                NGINX Plus configuration file, /etc/nginx/nginx.conf:
                                <pre class="language-nginx">
                                                <code>
                                                    load_module modules/ndk_http_module.so;  
                                                    load_module modules/ngx_http_set_misc_module.so;   
                                                </code>
                                                </pre>
                                3. Perform additional configuration as required by the module.
                                <br><br>

                                4. Reload NGINX Plus to enable the module:
                                <pre class="language-nginx">
                                                    <code>
                                                        nginx -t && nginx -s reload  
                                                    </code>
                                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                NGINX Minimal Configuration<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom41" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom41"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">NGINX Minimal Configuration</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>A secure server is one that allows only as much as what is needed. Ideally, we would build a server based on a minimal system by enabling additional features individually. Doing with a minimal configuration is also helpful in debugging. If the error is not available in the minimal system, features are added individually and the search for the error goes on</p>
                        <br>
                      <p>  Location Directive: When no modifier is given, the path is treated as a prefix, after which anything can follow. The above example will match:
                        Modifier has assigned precedence:
<br><br>
=           - Exact match  
^~          - Preferential match  
~ && ~*     - Regex match  
no modifier - Prefix match  <br><br>
First of all, nginx will check for any exact matches. If it does not exist, it will look for preferential ones. If this match also fails, regex matches will be tested in the order of their appearance. If everything else fails, the last prefix match will be used.</p><p>
    try_files directive: So /foo.html will try to return files in the following order:
    <ul class="points">
        <li>$uri (/foo.html);</li>
        <li>index.html</li>
        <li>If none is found:404</li>
        </ul><br>
        If we define try_files in a server context, and then define a location that finds all requests, our try_files will not be executed. This happens because try_files in the server context defines its pseudo-location, which is the least specific location possible. Hence, defining location / will be more specific than our pseudo-location.
</p>
                    </div>
                </div>
                <pre class="language-nginx">
                    <code>
                        # /etc/nginx/nginx.conf  
  
                        events {}         # event context have to be defined to consider config valid  
                          
                        http {  
                         server {  
                            listen 80;  
                            server_name  javatpoint.co  www.javatpoint.co  *.javatpoint.co;  
                          
                            return 200 "Hello";  
                          }  
                        }  
                    </code>
                    </pre>
                    <br>
                    Root, location and try_files directives
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne20201" aria-expanded="false" aria-controls="collapseOne">
                                    root directive
                                </button>
                            </h2>
                            <div id="collapseOne20201" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The root directive is used to set the root directory for requests, allowing nginx to map the incoming request onto the file system.
                                    <pre class="language-java">
                                                <code>
                                                    root /var/www/javatpoint.co;  
                                                </code>
                                                </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo20201" aria-expanded="false" aria-controls="collapseTwo">
                                    Location Directive
                                </button>
                            </h2>
                            <div id="collapseTwo20201" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    The location directive is used to set the configuration depending on the requested URI (Uniform Resource Identifier).
                                    <pre class="language-java">
                                                <code>
                                                    location /foo {  
                                                        return 200 "foo";  
                                                      } 
                                                </code>
                                                </pre>
                                                
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree20201" aria-expanded="false" aria-controls="collapseThree">
                                    try_files directive
                                </button>
                            </h2>
                            <div id="collapseThree20201" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    This directive tries different paths and will return whichever is found.
                                    <pre class="language-java">
                                                <code>
                                                    server {  
                                                        location / {  
                                                          try_files $uri /index.html =404;  
                                                        }  
                                                      }    
                                                    </code>
                                                </pre>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
            <li>
                NGINX Reverse Proxy
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom42"
                    aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom42"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">NGINX Reverse Proxy</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>A proxy is a server that resides between internal applications and external clients, forwarding client requests to the appropriate server. An <strong>Nginx reverse proxy server</strong> is a proxy server that resides behind the firewall in a private network and directs client requests to the appropriate backend server.</p>
                        <p>A reverse proxy gives an additional level of abstraction and control to ensure the smooth flow of network traffic between clients and servers.</p>
                        <p>
                            Uses of Reverse Proxy Server<br>
                            <p><strong>Load - Balancing:</strong> A reverse proxy server can act as a traffic cop resides in front of our backend servers and distributing client requests across a group of servers in a manner that increases the speed and capacity utilization while ensuring no one server is overloaded, which can degrade performance. If the server is not up, then the load balancer redirects traffic to the remaining online servers.</p>
                           <p>Web Acceleration: Nginx reverse proxy is used to compress outbound and inbound data, as well as cache commonly requested content, both of which speed up the flow of traffic between clients and servers.</p>
                           <p><strong>Security and Anonymity:</strong> We can intercept requests of the clients headed for our backend servers, by doing this a reverse proxy server protects their identities and acts as an additional defense against security attacks. </p>
                        </p>
                        <h2 class="h2">Passing a Request to a Proxied Server</h2>
                        <p>When NGINX server proxies a request, it sends the request to a specified proxied server, fetches the response, and sends it back to the client. It is possible to provide a proxy requests to an HTTP server or a non-HTTP server using a specified protocol. Supported protocols include FastCGI, uwsgi, SCGI, and Memcached.</p>
                        <p>To pass a request to a non-HTTP proxied server, use the appropriate **_pass directive:</p>
                        <ul class="points">
                            <li><strong>fastcgi_pass:</strong> it passes a request to a fastCGI server.</li>
                            <li><strong>uwsgi_pass:</strong> it passes a request to an uwsgi server.</li>
                            <li><strong>scgi_pass:</strong> it passes a request to an SCGI server.</li>
                            <li><strong>memcached_pass:</strong> it passes a request to a memcached server.</li>
                            </ul>
                    </div>
                </div>
                To pass a request to an HTTP proxied server, the proxy_pass directive is defined inside the location.
                <pre class="language-java">
                    <code>
                        location /some/path/ {  
                            proxy_pass http://www.example.com/link/;  
                        }   
                    </code>
                    </pre>
            </li>
            <li>
                Nginx Security Controls<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom43" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom43"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Inner Classes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>When our content is valuable, and we are rightly concerned about the privacy and security of our users, then we can use Nginx to control and secure the access of our services and the data we manage.</p>
                        
                    </div>
                </div>
            </li>
            <li>
                Nginx SSL Termination<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom44" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom44"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Java Nginx SSL Termination
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>SSL (Secure Socket Layer) connection uses a certificate for authentication before sending encrypted data from a client computer to the webserver. SSL termination is a form of SSL offloading (decryption), shifts some of this responsibility from the webserver to a different machine. SSL termination is used to recognize encrypted data.</p>
                        <p>In this section, we will describe how to configure an HTTPS server on NGINX Plus and NGINX.</p>
                        <p>To set up an HTTPS server in our nginx.conf file, adds the ssl parameter to the listen directive in the server block, then specify the locations of the server certificate and private keys files:</p>
                        <p>The server certificate is a public entity. It is sent to every client that connects to the Nginx Plus or Nginx.</p>
                        <p>The private key is a secure key or entity and should be stored in a file with restricted access. However, the master process of nginx must be able to read this file. We can also store the private key in the same file as the certificate.</p>
                        <p>The ssl_protocol and ssl_ciphers directives can be used to require that clients use only the strong versions and ciphers of SSL/TLS when establishing connections.</p>
                    </div>
                </div>
                <pre class="language-nginx">
                    <code>
                        server {  
                            listen              443 ssl;  
                            server_name         www.example.com;  
                            ssl_certificate     www.example.com.crt;  
                            ssl_certificate_key www.example.com.key;  
                            ssl_protocols       TLSv1 TLSv1.1 TLSv1.2;  
                            ssl_ciphers         HIGH:!aNULL:!MD5;  
                            #...  
                        }  
                    </code>
                    </pre>
            </li>
            <li>
                SSL Termination for TCP Upstream Servers<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom46" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom46"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">SSL Termination for TCP Upstream Servers</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p class="pq"><strong>Obtaining the SSL Certificate</strong></p>
                        <p></p>First, we will need to obtain server certificates and a private key and put them on the server. A certificate can be obtained from a trusted CA (Certificate Authority) or generated using SSL library such as OpenSSL.<p></p><br>
                        <p><strong>Configure Nginx Plus</strong></p>
                        <p>To configure SSL Termination, include the following directives to the Nginx Plus configuration:</p><br>

                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2013" aria-expanded="false" aria-controls="collapseOne">
                                Enabling SSL
                            </button>
                        </h2>
                        <div id="collapseOne2013" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>To enable the SSL, define the ssl parameter of the listen directive for the TCP server that passes connections to an upstream server group</p>
                                <pre class="language-java">
                                            <code>
                                                stream {  
  
                                                    server {  
                                                        listen     12345 ssl;  
                                                        proxy_pass backend;  
                                                        #...  
                                                    }  
                                                } 
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2013" aria-expanded="false" aria-controls="collapseTwo">
                                Adding SSL Certificates
                            </button>
                        </h2>
                        <div id="collapseTwo2013" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>To add SSL Certificates, define the path to the certificates with the ssl_certificate directive, and specify the path to the private key in the ssl_certificate_key directive:</p>
                                <pre class="language-java">
                                            <code>
                                                server {  
                                                    #...  
                                                    ssl_certificate        /etc/ssl/certs/server.crt;  
                                                    ssl_certificate_key    /etc/ssl/certs/server.key;  
                                                }  
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2013" aria-expanded="false" aria-controls="collapseThree">
                                ssl_protocols and ssl_ciphers directives
                            </button>
                        </h2>
                        <div id="collapseThree2013" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-java">
                                            <code>
                                                server {  
                                                    #...  
                                                    ssl_protocols  TLSv1 TLSv1.1 TLSv1.2;  
                                                    ssl_ciphers    HIGH:!aNULL:!MD5;  
                                                }  
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Restricting Access with HTTP Basic Authentication<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom48" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom48"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Restricting Access with HTTP Basic Authentication</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                       <P>We can restrict access to our website or some parts of it by implementing a username and password authentication. Username and passwords are taken from a file created and populated by a password file creation tool, for example, apache2-utils.</P>
                    </div>
                </div>
                Creating a Password File
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2016" aria-expanded="false" aria-controls="collapseOne">
                               First Step
                            </button>
                        </h2>
                        <div id="collapseOne2016" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                To create username-password pairs, use a password file creation utility, for example, httpd-tools or apache2-utils:<br>
                                1. First, verify that httpd-tools or apache2-utils is installed.
                                
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2016" aria-expanded="false" aria-controls="collapseTwo">
                                Create a password file 
                            </button>
                        </h2>
                        <div id="collapseTwo2016" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>2. Create a password file and a first user, run the htpasswd utility with the -c flag which is used to create a new file, the file pathname as the first argument, and the username as the second argument.</p>
                                <pre class="language-java">
                                            <code>
  sudo htpasswd -c /etc/apache2/.htpasswd user1  
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2016" aria-expanded="false" aria-controls="collapseThree">
                                Create additional username-password pairs
                            </button>
                        </h2>
                        <div id="collapseThree2016" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                3. Create additional username-password pairs. Omit the -c flag since the file already exists:
                                <pre class="language-java">
                                            <code>
                                    sudo htpasswd /etc/apache2/.htpasswd user2  
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20163" aria-expanded="false" aria-controls="collapseThree">
                                paired usernames and encrypted passwords
                            </button>
                        </h2>
                        <div id="collapseThree20163" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                4. We can make sure that the file contains paired usernames and encrypted passwords:
                                <pre class="language-java">
                                            <code>
                                                cat /etc/apache2/.htpasswd  
                                                user1:$apr1$/woC1jnP$KAh0SsVn5qeSMjTtn0E9Q0  
                                                user2:$apr1$QdR8fNLT$vbCEEzDj7LyqCMyNpSoBh/  
                                                user3:$apr1$Mr5A0e.U$0j39Hp5FfxRkneklXaMrr/   
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Configuring Nginx Plus and Nginx for HTTP Basic Authentication
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2073" aria-expanded="false" aria-controls="collapseOne">
                                First Step
                            </button>
                        </h2>
                        <div id="collapseOne2073" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>1. Inside a location that we are going to protect, define the auth_basic directive and give a name to the password-protected area. The name of the area will be shown in the username and password dialog window when asking for credentials.</p>
                                <pre class="language-java">
                                            <code>
                                                location /api {  
                                                    auth_basic "Administrator's Area";  
                                                    #...  
                                                }\  
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2073" aria-expanded="false" aria-controls="collapseTwo">
                            Second Step
                            </button>
                        </h2>
                        <div id="collapseTwo2073" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>2. Define the auth_basic_user_file directive with the path to the .htpasswd file that contains user/password pairs:</p>
                                <pre class="language-java">
                                            <code>
                                                location /api {  
                                                    auth_basic           "Administrator's Area";  
                                                    auth_basic_user_file /etc/apache2/.htpasswd;   
                                                }  
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </li>
            <li>NGINX Content Caching<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom50" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom50"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">NGINX Content Caching</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>Caching refers to locally storing the information to speed the communication between a client such as a web server. The cache can be located on the client-side, the server-side, or both. Caching is useful for serving repetitive requests of static or infrequently changing data.</p>
                        <p>A content cache resides in between a client and an origin server and saves copies of all the content it sees. If a client requests content that the cache has stored, it returns the content directly without contacting the origin server.</p>
                        <p>In Nginx Plus, when caching is enabled, Nginx Plus saves responses in a disk cache and uses them to respond to clients without having to proxy requests for the same content every time.</p>
                    </div>
                </div>
              
            </li>
            <li>Enabling the Caching of Responses
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom52"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom52"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Enabling the Caching of Responses
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>

                            To enable the caching, add the proxy_cache_path directive in the top-level http { } context. The important and mandatory first parameter is the local file system path for cached content, and the mandatory keys zone parameter specifies the name and size of the shared memory zone which is used to store metadata about cached items:<br><br>
                            <p>After that add the proxy_cache directive in the context (protocol type, virtual server, or location) for which we want to cache server responses, specifying the zone name defined by the key_zone parameter to the proxy_cache_path directive.</p>
                        </p>
                    </div>
                </div>
               
                                <pre class="language-nginx">
                                            <code>
                                                http {  
                                                    ...  
                                                    proxy_cache_path /data/nginx/cache keys_zone=one:10m;  
                                                    server {  
                                                        proxy_cache mycache;  
                                                        location / {  
                                                            proxy_pass http://localhost:8000;  
                                                        }  
                                                    }  
                                                }  
                                            </code>
                                            </pre>
                            
            </li>
            <li>Nginx Processes Involved in Caching<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom57" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom57"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Nginx Processes Involved in Caching</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>There are Nginx Processes involved in caching:</p>
                        <p>The cache manager is activated periodically to check the cache's state. If the size of the cache exceeds the limit set by the max_size parameter to the proxy_cache_path directive, the cache manager removes the data that was accessed least recently. Cached data can exceed the limit (temporarily) during the time between cache manager activations.</p>
                        <p>The cache loader runs only once after NGINX will start. It loads metadata of previously cached data into the shared memory zone. Loading the entire cache at once could consume sufficient resources to slow NGINX performance during the first few minutes after startup. To avoid this problem, configure iterative loading of the cache by including the following parameters to the proxy_cache_path directive:</p>
                        <ul class="points">
                            <li><strong>loader_threshold -</strong> Duration of iteration, in milliseconds (by default value is 200).</li>
                            <li><strong>loader_files -</strong> Maximum no. of items loaded during one iteration (by default value is 100).</li>
                            <li><strong>loader_sleeps -</strong> Delay between iterations, in milliseconds (by default value is 50).</li>
                            </ul><br><br>
                           
                    </div>
                </div>
                <br>
                In this example, iterations last 300 milliseconds or until 200 items have been loaded:

                <pre class="language-java">
                    <code>
                        proxy_cache_path /data/nginx/cache keys_zone=one:10m loader_threshold=300 loader_files=200;  
                    </code>
                    </pre>
            </li>
            <li>Specifying which Requests to Cache<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom58" aria-controls="offcanvasBottom">Read
                    more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom58"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Specifying which Requests to Cache</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>NGINX Plus caches all responses by default to requests made with the HTTP HEAD and HTTP GET methods, the first time such responses are received from a proxied server. As the key for a request, NGINX Plus uses the request string. If a request has the same key or identifier as a cached response, NGINX Plus sends the cached response to the client. We can add various directives in the http {}, server {}, or location {} context to control which responses are cached.</p>
                        
                    </div>
                </div>
                <p>To change the request characteristics used in calculating the identifier or key, include the proxy_cache_key directive:</p>
                <pre class="language-java">
                    <code>
                        proxy_cache_key "$host$request_uri$cookie_user";   
                    </code>
                    </pre>
                    <p>To define the minimum number of times that a request with the same identifier must be made before the response is cached, include the proxy_cache_min_uses directive:</p>
                    <pre class="language-java">
                        <code>
                            proxy_cache_min_uses 5;    
                        </code>
                        </pre>
                        <p>To cache responses to requests with methods other than HEAD and GET, list them along with HEAD and GET as parameters to the proxy_cache_methods directive:</p>
                        <pre class="language-java">
                            <code>
                                proxy_cache_methods GET HEAD POST;   
                            </code>
                            </pre>
            </li>
            <li>Limiting or Disabling Caching<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom59" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom59"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Limiting or Disabling Caching</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>By default, responses remain in the cache indefinitely. They are removed only when the cache exceeds the maximum configured size, and then in order by length of time since they were last requested. You can set how long cached responses are considered valid, or even whether they are used at all, by including directives in the http {}, server {}, or location {} context:</p>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne2083" aria-expanded="false" aria-controls="collapseOne">
                                To limit how long cached responses with specific status codes are considered valid
                            </button>
                        </h2>
                        <div id="collapseOne2083" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                To limit how long cached responses with specific status codes are considered valid, use the proxy_cache_valid directive:
                                <pre class="language-java">
                                            <code>
                                                proxy_cache_valid 200 302 10m;  
proxy_cache_valid 404      1m;  
                                            </code>
                                            </pre>
                                            In this example, responses with the code 200 or 302 are considered valid for 10 minutes, and responses with code 404 are valid for 1 minute.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo2083" aria-expanded="false" aria-controls="collapseTwo">
                                validity time for responses with all status codes
                            </button>
                        </h2>
                        <div id="collapseTwo2083" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                To define the validity time for responses with all status codes, specify any as the first parameter:
                                <pre class="language-java">
                                            <code>
                                                static void myStaticMethod() {
        
                                                }
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree2083" aria-expanded="false" aria-controls="collapseThree">
                                To specify conditions under which NGINX Plus does not send cached responses to clients
                            </button>
                        </h2>
                        <div id="collapseThree2083" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>To specify conditions under which NGINX Plus does not send cached responses to clients, include the proxy_cache_bypass directive. Each parameter defines a condition and consists of several variables. If at least one parameter is not empty and does not equal "0" (zero), NGINX Plus does not look up the response in the cache but instead forwards the request to the backend server immediately.</p>
                                <pre class="language-java">
                                            <code>
                                                proxy_cache_bypass $cookie_nocache $arg_nocache$arg_comment;
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree20831" aria-expanded="false" aria-controls="collapseThree">
                                To define conditions under which NGINX Plus doesn't cache a response at all,
                            </button>
                        </h2>
                        <div id="collapseThree20831" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                To define conditions under which NGINX Plus doesn't cache a response at all, add the proxy_no_cache directive:
                                <pre class="language-java">
                                            <code>
                                                proxy_no_cache $http_pragma $http_authorization;  
                                                </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                </div>

            </li>
            <li>NGINX Load Balancing<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom69" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom69"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">NGINX Load Balancing</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>To ensure proper speed and optimized functioning, incoming network traffic is spread across a group of services. These backend services are commonly referred to as a server pool or server farm. With more spread across servers, there are fewer chances of a slowdown due to a loaded server.</p>
                        <p>High traffic websites serve thousands or even millions of people each day. Part of this service is displaying content, such as image, text, and video within seconds for users. Servers need to identify the data needed and execute it reliably every single time.</p>
                        <p>Load balancing is used to prevent servers from becoming crippled when there is an overflow of requests. A load balancer sends requests to servers that can efficiently handle them to maximize speed and performance.</p>
                        <p>Load balancing is a commonly used technique and an excellent way for resource utilization, maximizing throughput, reducing latency and ensuring fault-tolerant configurations across multiple application instances.</p>
                        <p>It is a useful mechanism to distribute incoming traffic around several capable virtual private servers.</p>
                        <p>Nginx, which is popular web server software, can be used to configure as a simple yet powerful load balancer to improve your server's resource availability and efficiency.</p>
                        <img class="mx-auto d-block"
                    src="https://static.javatpoint.com/tutorial/nginx/images/nginx-load-balancing.png" alt=""
                    style="width: 45vw;">
                    </div>
                </div>
               
            </li>






            <li>Setup Nginx Load Balancing<br>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree42589" aria-expanded="false"
                                aria-controls="collapseThree">
                                1. Login via SSH
                            </button>
                        </h2>
                        <div id="collapseThree42589" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                First of all, login to your nginx server as the root user.
                                <pre class="language-nginx">
                                <code>
                                    ssh root@IP_address  
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne3586" aria-expanded="false" aria-controls="collapseOne">
                                2. Update all the Packages
                            </button>
                        </h2>
                        <div id="collapseOne3586" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                All packages installed on it must be up to date:
                                <pre class="language-nginx">
                                <code>
                                    apt-get update && apt-get upgrade 
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo45583" aria-expanded="false" aria-controls="collapseTwo">
                                3. Install Nginx Web Server
                            </button>
                        </h2>
                        <div id="collapseTwo45583" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We need nginx web server installed on the virtual private server (VPS). Use the following command to install the Nginx:
                                <pre class="language-nginx">
                                <code>
                                    apt-get install nginx  
                                </code>
                                </pre>
                                After installation of Nginx, use the following command to check the Nginx is running:
                                <pre class="language-java">
                                    <code>
                                        service nginx status   
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo45589" aria-expanded="false" aria-controls="collapseTwo">
                                4. Append the Load Balancing Configuration
                            </button>
                        </h2>
                        <div id="collapseTwo45589" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Now, open your website's Nginx configuration file in any text editor:
                                <pre class="language-nginx">
                                <code>
                                    vim /etc/nginx/sites-available/yourdomain.com.conf              </code>
                                </pre>
                                And then append the load balancing configuration at the top of the file:
                                <pre class="language-java">
                                    <code>
                                        upstream loadbalancer {  
                                            server vps1.yourdomain.com;  
                                            server vps2.yourdomain.com;  
                                            server vps3.yourdomain.com;  
                                            }   
                                    </code>
                                    </pre>
                                    We should have Nginx installed and listening on 80 port number on all servers listed above

                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo455835" aria-expanded="false" aria-controls="collapseTwo">
                                5. Add Upstream Module
                            </button>
                        </h2>
                        <div id="collapseTwo455835" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                To set up a round-robin load balancer, we will have to use the nginx upstream module. Within the same configuration file i.e. yourdomain.com.conf, we need to add the upstream module in the virtual host configuration.
                                <pre class="language-nginx">
                                <code>
                                    server {  
                                        location / {  
                                        proxy_pass http://loadbalancer;  
                                        }  
                                        }  
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo4553" aria-expanded="false" aria-controls="collapseTwo">
                                6. Restart Nginx Server
                            </button>
                        </h2>
                        <div id="collapseTwo4553" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Save the configuration file and restart the nginx for the changes to take effect:
                                <pre class="language-nginx">
                                <code>
                                    service nginx restart  
                                </code>
                                </pre>
                                This whole configuration will equally distribute all incoming traffic across the three servers (vps1.yourdomain.com, vps2.yourdomain.com, vps3.yourdomain.com), nginx can be also configured to distribute the traffic more efficiently. It comes with the option of balancing such as weight balancing, max fails and IP hash balancing.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo45530" aria-expanded="false" aria-controls="collapseTwo">
                                7. Weight Balancing
                            </button>
                        </h2>
                        <div id="collapseTwo45530" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                We can use the weight balancing to specify the proportion of the traffic distributed to each of the servers that we listed in the upstream:
                                <pre class="language-nginx">
                                <code>
                                    upstream loadbalancer {  
                                        server vps1.yourdomain.com weight=1;  
                                        server vps2.yourdomain.com weight=2;  
                                        server vps3.yourdomain.com weight=5;  
                                        }  
                                </code>
                                </pre>
                                In the above example, vps2.yourdomain.com will receive twice as much as traffic compared to vps2.yourdomain.com and vps3.yourdomain.com will receive five times more traffic than vps1.yourdomain.com.
                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo4558351" aria-expanded="false" aria-controls="collapseTwo">
                                8. Max fails
                            </button>
                        </h2>
                        <div id="collapseTwo4558351" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                When we see the default settings of nginx, it will send data to the servers even if they are down. We can use the option of Max fails to prevent such cases.
                                <pre class="language-nginx">
                                <code>
                                    upstream loadbalancer {  
                                        server vps1.yourdomain.com max_fails=4  fail_timeout=20s;  
                                        server vps2.yourdomain.com weight=2;  
                                        server vps3.yourdomain.com weight=4;  
                                        }   
                                </code>
                                </pre>
                                In the above example, nginx server will attempt to connect to vps1.yourdomain.com, and if it is not responding for more than 20 seconds, it will make another attempt. After the 4 attempts, vps1.yourdomain.com will be considered as down.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo45583548" aria-expanded="false" aria-controls="collapseTwo">
                                9. IP hash balancing
                            </button>
                        </h2>
                        <div id="collapseTwo45583548" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                With this method, the visitors will always be sent to the same server. So, if a visitor received the content of vps1.yourdomain.com, it will always be transferred to that server unless the servers are down or inaccessible.
                                <pre class="language-nginx">
                                <code>
                                    upstream loadbalancer {  
                                        ip_hash;  
                                        server vps1.yourdomain.com;  
                                        server vps2.yourdomain.com;  
                                        server vps3.yourdomain.com down;  
                                        }  
                                </code>
                                </pre>
                                In the above example, vps3.yourdomain.com is known to be inaccessible, and it is marked as down.
                            </div>
                        </div>
                    </div>

                </div>
            </li>
            <li>NGINX Processing Requests<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom6093" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom6093"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">NGINX Processing Requests</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>We can specify multiple virtual servers, and each server is described by a <strong>server {}</strong> context.</p>
                        <pre class="language-java">
                            <code>
                                server {  
                                    listen      *:80 default_server;  
                                    server_name javatpoint.co;  
                                    
                                    return 200 "Hello from javatpoint.co";  
                                  }  
                                    
                                  server {  
                                    listen      *:80;  
                                    server_name nikita.co;  
                                    
                                    return 200 "Hello from nikita.co";  
                                  }  
                                    
                                  server {  
                                    listen      *:81;  
                                    server_name deep.co;  
                                    
                                    return 200 "Hello from deep.co";  
                                  }  
                            </code>
                            </pre> 
                            <p>The above example will give nginx some insight on how to handle incoming requests. First of all, nginx will check the listen directive to test which virtual server is listening on the given IP: port combination. Then the value from <strong>the server_name directive</strong> is tested against the Host header, which stores the server's domain name.</p>
                            <p>
                                Nginx chooses the virtual server in the following order:
                                <ul class="points">
                                    <li>Server listing on IP: port, with a matching directive i.e., <strong>server_name</strong>.</li>
                                    <li>Server listing on IP: port, with a <strong>default_server</strong> flag;</li>
                                    <li>Server listing on IP: port, first one defined.</li>
                                    <li>If there are no matches, refuse the connection.</li>
                                    </ul>
                                    From the above example, the output will be:<br>
                                    <pre class="language-bash">
                                        <code>
                                            Request to nikita.co:80     => "Hello from nikita.co"
Request to www.nikita.co:80 => "Hello from javatpoint.co"
Request to deep.co:80     => "Hello from javatpoint.co"
Request to deep.co:81     => "Hello from nikita.co"
Request to nikita.co:81     => "Hello from deep.co"  
                                        </code>
                                        </pre>
                            </p>
                    </div>
                </div>
            </li>

            <li>The server_name directive<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom7093" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom7093"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">The server_name directive</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>The server_name directive is used to accept multiple values; it is also used to handle wildcard matching and regular expressions.</p>
                        
                        If there is any ambiguity, then nginx uses the following order:<br>

                        <ul class="points">
                            <li>Exact name;</li>
                            <li>Longest wildcard name starting with an asterisk, for example, "*examples.org",</li>
                            <li>Longest wildcard name ending with an asterisk, for example, "mail.*";</li>
                            <li>First matching the regular expression.</li>
                            </ul>
                            <p>Nginx will store three hash tables: exact names, wildcards starting with an asterisk, and wildcards ending with an asterisk. If the result is not in the above-declared tables, the regular expressions will be tested sequentially.</p><br>
                            server_name  javatpoint.co  www.javatpoint.co  *.javatpoint.co;  <br>There is only one difference: .javatpoint.co is stored in the second table, which means that it is a bit slower than an explicit declaration.

                    </div>
                </div>
                <pre class="language-java">
                    <code>
                        server_name javatpoint.co www.javatpoint.co; # exact match  
                        server_name *.javatpoint.co;              # wildcard matching  
                        server_name javatpoint.*;                 # wildcard matching  
                        server_name  ~^[0-9]*\.javatpoint\.co$;   # regexp matching  
                    </code>
                    </pre>
            </li>

            <li>listen Directive<br>
                In most of the cases, we will see that the listen directive accepts IP: port values.
                <pre class="language-java">
                    <code>
                        listen 127.0.0.1:80;  
                        listen 127.0.0.1;    # port :80 is used by default  
                          
                        listen *:81;  
                        listen 81;           # all ips are used by default  
                          
                        listen [::]:80;      # IPv6 addresses  
                        listen [::1];        # IPv6 addresses   
                    </code>
                    </pre>
                    However, it is also possible to specify the sockets of UNIX-domain:
                    <pre class="language-java">
                        <code>
                            listen unix:/var/run/nginx.sock;    
                        </code>
                        </pre>
                        Even we can use the hostnames:
                        <pre class="language-java">
                            <code>
                                listen localhost:80;  
                                listen netguru.co:80;   
                            </code>
                            </pre>
                            And if the directive is not present, then use *:80.
            </li>
        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>