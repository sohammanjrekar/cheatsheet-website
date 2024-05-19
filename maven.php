<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;"
                src="../../assets/img/maven.svg" alt="" /> maven cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Maven</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4">
                            Maven tutorial provides basic and advanced concepts of apache maven technology. Our maven tutorial is developed for beginners and professionals.
                            <br><br> Maven is a powerful project management tool that is based on POM (project object model). It is used for projects build, dependency and documentation.
                            <br> <br>
                            It simplifies the build process like ANT. But it is too much advanced than ANT.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="../../assets/img/maven.svg" alt="" style="height:100%;width:100%;" />
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
                          Maven
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Maven is mostly used for the java projects to build web application packages. Maven provides different features which make it easy to build the web-application packages we manage complex projects easily.
                        <ol type="a">
                            <li>POM Files: Project Object Model(POM) Files are XML file that contains information related to the project and configuration information such as dependencies, source directory, plugin, goals etc. used by Maven to build the project. When you should execute a maven command you give maven a POM file to execute the commands. Maven reads pom.xml file to accomplish its configuration and operations.</li>
                            <li>Dependencies and Repositories: Dependencies are external Java libraries required for Project and repositories are directories of packaged JAR files. The local repository is just a directory on your machine's hard drive. If the dependencies are not found in the local Maven repository, Maven downloads them from a central Maven repository and puts them in your local repository.</li>
                            <li> Build Life Cycles, Phases, and Goals: A build life cycle consists of a sequence of build phases, and each build phase consists of a sequence of goals. Maven command is the name of a build lifecycle, phase, or goal. If a lifecycle is requested executed by giving the maven command, all build phases in that life cycle are executed also. If a build phase is requested executed, all build phases before it in the defined sequence are executed too.</li>
                            <li> Build Profiles: Build profiles a set of configuration values that allows you to build your project using different configurations. For example, you may need to build your project for your local computer, for development and test. To enable different builds you can add different build profiles to your POM files using its profiles elements which are triggered in a variety of ways.</li>
                            <li> Build Plugins: Build plugins are used to perform a specific goal. you can add a plugin to the POM file. Maven has some standard plugins you can use, and you can also implement your own in Java.</li>
                            
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                check maven installation and version
                <pre class="language-bash">
                    <code> 
                        mvn -v
                        </code>
</pre>
            </li>
            <li>To generate the archetype (Non-interactive)
                <pre class="language-sh">
                    <code> 
                        mvn archetype:generate -DgroupId=com.soham.app -DartifactId=myapp -DarchetypeArtifactId=maven-archetype-quickstart -DarchetypeVersion=1.4 -DinteractiveMode=false
                        </code>
</pre>
            </li>
            <li>To generate the archetype (interactive)
                <pre class="language-sh">
                    <code> 
                        mvn archetype:generate
                        </code>
</pre>
            </li>
            <li>
                What is Build Tool ? <button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom3" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">What is Build Tool ? </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A build tool takes care of everything for building a process. It does following:
<br/><br/>
1) Generates source code (if auto-generated code is used)<br/>
2) Generates documentation from source code<br/>
3) Compiles source code<br/>
4) Packages compiled code into JAR of ZIP file<br/>
5) Installs the packaged code in local repository, server repository, or central repository<br/>
                    </div>
                </div>
               
            </li>
            <li>What it does?
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom4"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">What it does?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Maven simplifies the above mentioned problems. It does mainly following tasks.
                        <ol class="points">
<li>It makes a project easy to build</li>
<li>It provides uniform build process (maven project can be shared by all the maven projects)</li>
<li>It provides project information (log document, cross referenced sources, mailing list, dependency list, unit test reports etc.)</li>
<li>It is easy to migrate for new features of Maven</li>
</ol>
Apache Maven helps to manage
<br/>
<ul>
    <li>Builds</li>
    <li>Documentation</li>
    <li>Reporing</li>
    <li>SCMs</li>
    <li>Releases</li>
    <li>Distribution</li>
    </ul>
                    </div>
                </div>
                
            </li>
            <li>Understanding the problem without Maven<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom5" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom5"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Understanding the problem without Maven</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>There are many problems that we face during the project development. They are discussed below:</p>
                        <p><strong>1) Adding set of Jars in each project:</strong> In case of struts, spring, hibernate frameworks, we need to add set of jar files in each project. It must include all the dependencies of jars also. </p>
                        <p><strong>2) Creating the right project structure:</strong> We must create the right project structure in servlet, struts etc, otherwise it will not be executed.</p>
                        <p><strong>3) Building and Deploying the project:</strong> We must have to build and deploy the project so that it may work.</p>
                    </div>
                </div>
            </li>
            <li>
                Difference between Ant and Maven<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvas2" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas2"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Difference between Ant and Maven</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <table class="alt table-bordered">
                            <tbody><tr><th>Ant</th><th>Maven</th></tr>
                            <tr><td>Ant <b>doesn't has formal conventions</b>, so we need to provide information of the project structure in build.xml file.</td><td>Maven <b>has a convention</b> to place source code, compiled code etc. So we don't need to provide information about the project structure in pom.xml file.</td></tr>
                            <tr><td>Ant is <b>procedural</b>, you need to provide information about what to do and when to do through code. You need to provide order.</td><td>Maven is <b>declarative</b>, everything you define in the pom.xml file.</td></tr>
                            <tr><td>There is <b>no life cycle</b> in Ant.</td><td>There is <b>life cycle</b> in Maven.</td></tr>
                            <tr><td>It is <b>a tool</b> box.</td><td>It is <b>a framework</b>.</td></tr>
                            <tr><td>It is <b>mainly a build tool</b>.</td><td>It is <b>mainly a project management tool</b>.</td></tr>
                            <tr><td>The ant scripts are <b>not reusable</b>.</td><td>The maven plugins are <b>reusable</b>.</td></tr>
                            <tr><td>It is <b>less preferred</b> than Maven.</td><td>It is <b>more preferred</b> than Ant.</td></tr>
                            </tbody></table>
                    </div>
                </div>
            </li>

            <li>Maven Repository
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom9"
                    aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom9"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Maven Repository</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        A maven repository is a directory of packaged JAR file with pom.xml file. Maven searches for dependencies in the repositories. There are 3 types of maven repository:
                        <br> <br> <ol>
                            <li>Local Repository</li>
                            <li>Central Repository</li>
                            <li>Remote Repository</li>
                            </ol>
                        <br> Maven searches for the dependencies in the following order:<br>Local repository then Central repository then Remote repository.
                        <img class="mx-auto d-block"
                    src="https://static.javatpoint.com/mavenpages/images/mavenrepository.jpg" alt=""
                    style="width: 40vw;">
                    If dependency is not found in these repositories, maven stops processing and throws an error.
                    </div>
                </div>
               <ul>
                <li>
                    Maven Local Repository<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasBottom1087" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom1087"
                        aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Maven Local Repository</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <p>Maven <b>local repository</b> is located in your local system. It is created by the maven when you run any maven command.</p>
                            <br><p>By default, maven local repository is %USER_HOME%/.m2 directory. For example: <b>C:\Users\SSS IT\.m2</b>.</p>
                            <br> We can change the location of maven local repository by changing the settings.xml file. It is located in MAVEN_HOME/conf/settings.xml, for example: E:\apache-maven-3.1.1\conf\settings.xml.
                        </div>
                    </div>
                   
                </li>
                <li>
                    Maven Central Repository<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasBottom1091" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom1091"
                        aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Maven Central Repository</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            <p>Maven <b>central repository</b> is located on the web. It has been created by the apache maven community itself.</p>
                            <br> <p>The path of central repository is: <a href="http://repo1.maven.org/maven2/" target="_blank">http://repo1.maven.org/maven2/</a>.</p>
                            <br> <p>The central repository contains a lot of common libraries that can be viewed by this url <a href="http://search.maven.org/#browse" target="_blank">http://search.maven.org/#browse</a>.</p>
                        
                        </div>
                    </div>
                   
                </li>
                <li>
                    Maven Remote Repository<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasBottom1093" aria-controls="offcanvasBottom">Read more...</button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom1093"
                        aria-labelledby="offcanvasBottomLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasBottomLabel">Maven Remote Repository</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body small">
                            Maven remote repository is located on the web. Most of libraries can be missing from the central repository such as JBoss library etc, so we need to define remote repository in pom.xml file.
                        </div>
                    </div>
                   
                </li>
               </ul>
            </li>
            <li>
                Maven pom.xml file<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom10" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom10"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Maven pom.xml file</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p><b>POM</b> is an acronym for <b>Project Object Model</b>. The pom.xml file contains information of project and configuration information for the maven to build the project such as dependencies, build directory, source directory, test source directory, plugin, goals etc.</p>
                        <p>Maven reads the pom.xml file, then executes the goal.</p>
                        <p>Before maven 2, it was named as project.xml file. But, since maven 2 (also in maven 3), it is renamed as pom.xml.</p>
                        Elements of maven pom.xml file
                        <table class="alt table-bordered">
                            <tbody><tr><th>Element</th><th>Description</th></tr>
                            <tr><td><b>project</b></td><td> It is the root element of pom.xml file.</td></tr>
                            <tr><td><b>modelVersion</b></td><td> It is the sub element of project. It specifies the modelVersion. It should be set to 4.0.0.</td></tr>
                            <tr><td><b>groupId</b></td><td> It is the sub element of project. It specifies the id for the project group.</td></tr>
                            <tr><td><b>artifactId</b></td><td>It is the sub element of project. It specifies the id for the artifact (project). An artifact is something that is either produced or used by a project. Examples of artifacts produced by Maven for a project include: JARs, source and binary distributions, and WARs.</td></tr>
                            <tr><td><b>version</b></td><td>It is the sub element of project. It specifies the version of the artifact under given group.</td></tr>
                            </tbody></table>
                            <br>
                            
                            Maven pom.xml file with additional elements
                            <table class="alt table-bordered">
                                <tbody><tr><th>Element</th><th>Description</th></tr>
                                <tr><td><b>packaging</b></td><td> defines packaging type such as jar, war etc.</td></tr>
                                <tr><td><b>name</b></td><td> defines name of the maven project.</td></tr>
                                <tr><td><b>url</b></td><td> defines url of the project.</td></tr>
                                <tr><td><b>dependencies</b></td><td>defines dependencies for this project.</td></tr>
                                <tr><td><b>dependency</b></td><td>defines a dependency. It is used inside dependencies.</td></tr>
                                <tr><td><b>scope</b></td><td>defines scope for this maven project. It can be compile, provided, runtime, test and system.</td></tr>
                                </tbody></table>
                    </div>
                </div>
               
            </li>
            <li>How to build the maven project or how to package maven project?<button class="btn btn1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasBottom12" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom12"
                    aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">How to build the maven project or how to package maven project?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <p>The <b>mvn package</b> command completes the build life cycle of the maven project such as:</p>   <ol>
                            <li>validate</li>
                            <li>compile</li>
                            <li>test</li>
                            <li>package</li>
                            <li>integration-test</li>
                            <li>verify</li>
                            <li>install</li>
                            <li>deploy</li>
                            </ol>    
                            <p>Now you will see that <b>a jar file is created</b> inside the project/target directory.
                    </div>
                </div>
                <pre class="language-bash">
                    <code>
                        mvn package  
                    </code>
                    </pre>

            </li>
            
        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>