<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 pt-1 w-100">
        <div class="text-center " style="font-size: 5vh; font-weight: 900;padding-top:2vh">
            <img src="../img/git-scm-icon.svg" alt="" /> Git cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Git</h1>
                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-4">
                            Git is a popular version control system. It was created by Linus Torvalds in 2005, and has been maintained by Junio Hamano since then.<br> It is used for:
                            <br> Tracking code changes<br> Tracking who made changes<br> Coding collaboration<br>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="../img/git-scm-icon.svg" alt="" style="width:100% ;" />
                    </div>
                </div>
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1" aria-controls="o1">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            Git
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body"> What does Git do?
                        <ol type="a">
                            <li>
                                Manage projects with Repositories</li>
                            <li>
                                Clone a project to work on a local copy</li>
                            <li>
                                Control and track changes with Staging and Committing</li>
                            <li>
                                Branch and Merge to allow for work on different parts and versions of a project</li>
                            <li>
                                Pull the latest version of the project to a local copy</li>
                            <li>
                                Push local updates to the main project</li>
                        </ol>
                        Working with Git
                        <ol type="a">
                            <li>
                                Initialize Git on a folder, making it a Repository</li>
                            <li>
                                Git now creates a hidden folder to keep track of changes in that folder</li>
                            <li>
                                When a file is changed, added or deleted, it is considered modified</li>
                            <li>
                                You select the modified files you want to Stage</li>
                            <li>
                                The Staged files are Committed, which prompts Git to store a permanent snapshot of the files</li>
                            <li>
                                Git allows you to see the full history of every commit.</li>
                            <li>
                                You can revert back to any previous commit.</li>
                            <li>
                                Git does not store a separate copy of every file in every commit, but keeps track of changes made in each commit!</li>
                        </ol> Why Git?
                        <ol type="a">
                            <li>
                                Over 70% of developers use Git!</li>
                            <li>
                                Developers can work together from anywhere in the world.</li>
                            <li>
                                Developers can see the full history of the project.</li>
                            <li>
                                Developers can revert to earlier versions of a project.</li>
                        </ol> What is GitHub?
                        <ol type="a">
                            <li>
                                Git is not the same as GitHub.</li>
                            <li>
                                GitHub makes tools that use Git.</li>
                            <li>
                                GitHub is the largest host of source code in the world, and has been owned by Microsoft since 2018.</li>
                            <li>
                                In this tutorial, we will focus on using Git with GitHub.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                check if Git version
                <pre class="language-git">
                    <code> 
                        git --version
                        </code>
</pre>
            </li>
            <li>
                Configure Git<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom3" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Configure Git</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Note: Use global to set the username and e-mail for every repository on your computer.
                        <br><br><br> If you want to set the username/e-mail for just the current repo, you can remove global
                    </div>
                </div>
                <pre class="language-git">
            <code>     
                git config --global user.name "sohammanjrekar"
            </code>
        </pre>
                <pre class="language-git">
            <code>     
                git config --global user.email "mrsohammanjrekar@gmail.com"
            </code>
        </pre>
            </li>
            <li>Creating Git Folder
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom4" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom4" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Creating Git Folder</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        mkdir makes a new directory.
                        <br><br> cd changes the current working directory.
                        <br>
                        <br><br> Note: If you already have a folder/directory you would like to use for Git:<br><br> Navigate to it in command line, or open it in your file explorer, right-click and select "Git Bash here"
                    </div>
                </div>
                <pre class="language-git">
    <code>
        mkdir myproject
</code>
</pre>
                <pre class="language-git">
    <code>
        cd myproject
</code>
</pre>
            </li>
            <li>Initialize Git<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom5" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom5" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Initialize Git</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Once you have navigated to the correct folder, you can initialize Git on that folder
                        <br><br> In Java, there are different types of variables, for example:
                        <br><br><br> Note: Git now knows that it should watch the folder you initiated it on. Git creates a hidden folder to keep track of changes.
                    </div>
                </div> <pre class="language-git">
    <code>
        git init 
</code>
</pre> </li>
            <li>
                Git Adding New Files<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom180" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom180" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Git Adding New Files</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Files in your Git repository folder can be in one of 2 states:
                        <br><br> Tracked - files that Git knows about and are added to the repository<br><br><br> Untracked - files that are in your working directory, but not added to the repository<br><br> When you first add files to an empty repository,
                        they are all untracked. To get Git to track them, you need to stage them, or add them to the staging environment. <br><br><br> Note: Short status flags are:
                        <br> ?? - Untracked files<br> A - Files added to stage<br> M - Modified files<br> D - Deleted files<br>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne">
                                list the files in the directory
                            </button>
                        </h2>
                        <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                <code>
                                    ls   
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                                check the Git status
                            </button>
                        </h2>
                        <div id="collapseTwo1" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                <code>
                                    git status
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo189" aria-expanded="false" aria-controls="collapseTwo">
                                check the Git Short status
                            </button>
                        </h2>
                        <div id="collapseTwo189" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                <code>
                                    git status --short
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Git Adding in Staging Environment <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1800" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom1800" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Git Adding in Staging Environment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        One of the core functions of Git is the concepts of the Staging Environment, and the Commit.
                        <br><br><br> As you are working, you may be adding, editing and removing files. But whenever you hit a milestone or finish a part of the work, you should add the files to a Staging Environment.
                        <br><br><br> Staged files are files that are ready to be committed to the repository you are working on. You will learn more about commit shortly.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne196" aria-expanded="false" aria-controls="collapseOne">
                                git add index.html
                            </button>
                        </h2>
                        <div id="collapseOne196" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                <code>
                                    git add index.html
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo196" aria-expanded="false" aria-controls="collapseTwo">
                                add all file in Staging Environment
                            </button>
                        </h2>
                        <div id="collapseTwo196" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                <code>
                                    git add --all
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Git Commit <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1800" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom1800" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel"> Git Commit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Since we have finished our work, we are ready move from stage to commit for our repo. <br><br>Adding commits keep track of our progress and changes as we work. Git considers each commit change point or "save point". It is a point
                        in the project you can go back to if you find a bug, or want to make a change.<br><br> When we commit, we should always include a message. <br><br>By adding clear messages to each commit, it is easy for yourself (and others) to
                        see what has changed and when. <br><br>The commit command performs a commit, and the -m "message" adds a message.<br><br><br> Sometimes, when you make small changes, using the staging environment seems like a waste of time. It
                        is possible to commit changes directly, skipping the staging environment. The -a option will automatically stage every changed, already tracked file.<br><br> Warning: Skipping the Staging Environment is not generally recommended.
                        Skipping the stage step can sometimes make you include unwanted changes.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne197" aria-expanded="false" aria-controls="collapseOne">
                                stage to commit
                            </button>
                        </h2>
                        <div id="collapseOne197" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                <code>
                                    git commit -m "update"
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1961" aria-expanded="false" aria-controls="collapseTwo">
                                Git Commit without Stage
                            </button>
                        </h2>
                        <div id="collapseTwo1961" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                <code>
                                    git commit -a -m "Updated"
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo196165" aria-expanded="false" aria-controls="collapseTwo">
                                Git Commit Log
                            </button>
                        </h2>
                        <div id="collapseTwo196165" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                <code>
                                    git log
                            </code>
                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Git Help
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom18" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom18" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Git Help</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        If you are having trouble remembering commands or options for commands, you can use Git help.
                        <br><br><br> There are a couple of different ways you can use the help command in command line:<br><br> git command -help - See all the available options for the specific command<br><br> git help --all - See all possible commands
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne7" aria-expanded="false" aria-controls="collapseOne">
                                Git -help See Options
                            </button>
                        </h2>
                        <div id="collapseOne7" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion-body">
                                    <pre class="language-git">
                                        <code>
                                            git commit --help
                                    </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo">
                                    Git help See All Possible Commands
                                </button>
                            </h2>
                            <div id="collapseTwo7" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h3>Note: If you find yourself stuck in the list view, SHIFT + G to jump the end of the list, then q to exit the view.</h3>
                                    <pre class="language-git">
                                        
                                    <code>
                                        git help --all
                                </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
            <li>
                Git Branch<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom21" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom21" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Git Branch</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        In Git, a branch is a new/separate version of the main repository.
                        <br><br> Let's say you have a large project, and you need to update the design on it.
                        <br><br> How would that work without and with Git:
                        <br><br><br> Without Git:<br> Make copies of all the relevant files to avoid impacting the live version<br><br> Start working with the design and find that code depend on code in other files, that also need to be changed!<br><br>                        Make copies of the dependant files as well. Making sure that every file dependency references the correct file name<br><br> EMERGENCY! There is an unrelated error somewhere else in the project that needs to be fixed ASAP!
                        <br><br>Save all your files, making a note of the names of the copies you were working on
                        <br><br>Work on the unrelated error and update the code to fix it
                        <br><br>Go back to the design, and finish the work there
                        <br><br>Copy the code or rename the files, so the updated design is on the live version
                        <br><br>(2 weeks later, you realize that the unrelated error was not fixed in the new design version because you copied the files before the fix)<br><br><br> With Git:
                        <br>With a new branch called new-design, edit the code directly without impacting the main branch
                        <br><br>EMERGENCY! There is an unrelated error somewhere else in the project that needs to be fixed ASAP!
                        <br><br>Create a new branch from the main project called small-error-fix
                        <br><br>Fix the unrelated error and merge the small-error-fix branch with the main branch
                        <br><br>You go back to the new-design branch, and finish the work there
                        <br><br>Merge the new-design branch with main (getting alerted to the small error fix that you were missing)
                        <br><br>Branches allow you to work on different parts of a project without impacting the main branch. When the work is complete, a branch can be merged with the main project. You can even switch between branches and work on different
                        projects without them interfering with each other. Branching in Git is very lightweight and fast! <br> <br> <br> Emergency Branch <br> Now imagine that we are not yet done with hello-world-images, but we need to fix an error on
                        master.
                        <br> I don't want to mess with master directly, and I do not want to mess with hello-world-images, since it is not done yet.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne10" aria-expanded="false" aria-controls="collapseOne">
                                create a new branch
                            </button>
                        </h2>
                        <div id="collapseOne10" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion-body">
                                    <pre class="language-git">
                                        <code>
                                            git branch hello     
                                    </code>
                                    </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo11" aria-expanded="false" aria-controls="collapseTwo">
                                   check list of branches
                                </button>
                            </h2>
                            <div id="collapseTwo11" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <pre class="language-git">
                                    <code>
                                        git branch
                                </code>
                                </pre>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree">
                                    move our current workspace to the new branch
                                </button>
                            </h2>
                            <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-git">
                                        <code>
                                            git checkout hello
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree">
                                    create a new branch to deal with the emergency
                                </button>
                            </h2>
                            <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <pre class="language-git">
                                        <code>
                                            git checkout -b emergency-fix 
                                    </code>
                                    </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </li>
            <li>
                Git Branch Merge<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom37" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom37" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Git Branch Merge
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        The text-align-last property specifies how to align the last line of a text. <br><br> We divide modifiers into two groups:
                        <br> 1) Access Modifiers - controls the access level <br> 2) Non-Access Modifiers - do not control access level, but provides other functionality <br><br> 1) Access Modifiers <br> For classes, you can use either public or default
                        <br><br> </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne20" aria-expanded="false" aria-controls="collapseOne">
                                merge the current branch (master) with emergency-fix
                            </button>
                        </h2>
                        <div id="collapseOne20" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                    <code>
                                        git merge emergency-fix
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo20" aria-expanded="false" aria-controls="collapseTwo">
                                Deleted branch
                            </button>
                        </h2>
                        <div id="collapseTwo20" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                    <code>
                                        git branch -d emergency-fix
                                    </code>
                                    </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                Push Local Repository to GitHub<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom38" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom38" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Encapsulation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        git remote add origin URL specifies that you are adding a remote repository, with the specified URL, as an origin to your local Git repo.
                    </div>
                </div>
                <pre class="language-git">
                            <code>
                                git remote add origin https://github.com/w3schools-test/hello-world.git
                            </code>
                            </pre>
                <pre class="language-git">
                                <code>
                                    git push --set-upstream origin master
                                </code>
                                </pre>
            </li>
            <li>
                Pulling to Keep up-to-date with Changes<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom39" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom39" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">JPulling to Keep up-to-date with Changes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        When working as a team on a project, it is important that everyone stays up to date.<br><br> Any time you start working on a project, you should get the most recent changes to your local copy.<br><br> With Git, you can do that
                        with pull.
                        <br><br> pull is a combination of 2 different commands:<br> fetch <br> merge
                        <br>
                        <br> <br> Git Fetch <br> fetch gets all the change history of a tracked branch/repo. <br> <br> <br> Git Pull <br> pull is a combination of fetch and merge. It is used to pull all changes from a remote repository into the branch
                        you are working on.
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne30" aria-expanded="false" aria-controls="collapseOne">
                                Git Fetch
                            </button>
                        </h2>
                        <div id="collapseOne30" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                            <code>
                                                git fetch origin
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo30" aria-expanded="false" aria-controls="collapseTwo">
                                Git Pull
                            </button>
                        </h2>
                        <div id="collapseTwo30" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                            <code>
                                                git pull origin
                                            </code>
                                            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Push Changes to GitHub <pre class="language-git">
                                            <code>
                                                git push origin
                                            </code>
                                            </pre> </li>
            <li>Push Local Repository to GitHub Pages <pre class="language-git">
                                            <code>                                        
                                                git remote add gh-page https://github.com/w3schools-test/w3schools-test.github.io.git
                                            </code>
                                            </pre>
                <pre class="language-git">
                                                <code>                                        
                                                    git push gh-page master
                                                </code>
                                                </pre> </li>
            <li>Git Clone from GitHub
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom3995" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3995" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">JPulling to Keep up-to-date with Changes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Note: According to Git naming conventions, it is recommended to name your own repository origin, and the one you forked for upstream Now we have 2 remotes:<br>
                        <br> origin - our own fork, where we have read and write access<br> upstream - the original, where we have read-only access
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree42589" aria-expanded="false" aria-controls="collapseThree">
                                clone the repository
                </button>
                        </h2>
                        <div id="collapseThree42589" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                <code>
                                    git clone https://github.com/w3schools-test/w3schools-test.github.io.git
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3586" aria-expanded="false" aria-controls="collapseOne">
                                Configuring Remotes
                </button>
                        </h2>
                        <div id="collapseOne3586" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3>we have a full copy of a repository, whose origin we are not allowed to make changes to.</h3>
                                <pre class="language-git">
                                <code>
                                    git remote -v
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo45589" aria-expanded="false" aria-controls="collapseTwo">
                    fork own file
                </button>
                        </h2>
                        <div id="collapseTwo45589" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                <code>
                                    git remote add origin https://github.com/kaijim/w3schools-test.github.io.git
                                     </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Git Ignore and .gitignore<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom6093" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom6093" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Git Ignore and .gitignore</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Git Ignore<br> When sharing your code with others, there are often files or parts of your project, you do not want to share.
                        <br><br> Examples
                        <br> log files<br> temporary files<br> hidden files<br> personal files<br> etc.
                        <br><br> Git can specify which files or parts of your project should be ignored by Git using a .gitignore file.
                        <br> Git will not track files and folders specified in .gitignore. However, the .gitignore file itself IS tracked by Git. <br> Note: In this case, we use a single .gitignore which applies to the entire repository.
                        <br><br> It is also possible to have additional .gitignore files in subdirectories. These only apply to files or folders within that directory. Rules for .gitignore Here are the general rules for matching patterns in .gitignore
                        files:
                        <table class="ws-table-all notranslate table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width:30%">Pattern</th>
                                    <th>Explanation/Matches</th>
                                    <th style="width:30%">Examples</th>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>Blank lines are ignored</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td># <em>text comment</em></td>
                                    <td>Lines starting with # are ignored</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td><em>name</em></td>
                                    <td>All <em>name</em> files, <em>name</em> folders, and files and folders in any
                                        <em>name</em> folder</td>
                                    <td>/name.log<br>/name/file.txt<br>/lib/name.log</td>
                                </tr>
                                <tr>
                                    <td><em>name</em>/</td>
                                    <td>Ending with / specifies the pattern is for a folder. Matches all files and folders in any
                                        <em>name</em> folder</td>
                                    <td>/name/file.txt<br>/name/log/name.log<br><br><strong>no match:</strong><br>/name.log</td>
                                </tr>
                                <tr>
                                    <td><em>name</em>.<em>file</em></td>
                                    <td>All files with the <em>name.file</em></td>
                                    <td>/name.file<br>/lib/name.file</td>
                                </tr>
                                <tr>
                                    <td><em>/name</em>.<em>file</em></td>
                                    <td>Starting with / specifies the pattern matches only files in the root folder</td>
                                    <td>/name.file<br><br><strong>no match:</strong><br> /lib/name.file
                                    </td>
                                </tr>
                                <tr>
                                    <td><em>lib/name</em>.<em>file</em></td>
                                    <td>Patterns specifiing files in specific folders are always realative to root (even if you do not start with / )</td>
                                    <td>/lib/name.file<br><br><strong>no match:</strong><br> name.file
                                        <br>/test/lib/name.file</td>
                                </tr>
                                <tr>
                                    <td>**<em>/lib/name.file</em></td>
                                    <td>Starting with ** before / specifies that it matches any folder in the repository. Not just on root.</td>
                                    <td>/lib/name.file<br>/test/lib/name.file</td>
                                </tr>
                                <tr>
                                    <td>**<em>/name</em></td>
                                    <td>All <em>name</em> folders, and files and folders in any
                                        <em>name</em> folder</td>
                                    <td>/name/log.file<br>/lib/name/log.file<br>/name/lib/log.file</td>
                                </tr>
                                <tr>
                                    <td>/lib/**<em>/name</em></td>
                                    <td>All <em>name</em> folders, and files and folders in any
                                        <em>name</em> folder within the lib folder.</td>
                                    <td>/lib/name/log.file<br>/lib/test/name/log.file<br>/lib/test/ver1/name/log.file<br>
                                        <br><strong>no match:</strong><br> /name/log.file
                                    </td>
                                </tr>
                                <tr>
                                    <td>*.<em>file</em></td>
                                    <td>All files withe <em>.file</em> extention</td>
                                    <td>/name.file<br>/lib/name.file</td>
                                </tr>
                                <tr>
                                    <td>*<em>name</em>/</td>
                                    <td>All folders ending with <em>name</em></td>
                                    <td>/lastname/log.file<br>/firstname/log.file</td>
                                </tr>
                                <tr>
                                    <td><em>name</em>?.<em>file</em></td>
                                    <td>? matches a <strong>single</strong> non-specific character</td>
                                    <td>/names.file<br>/name1.file<br><br><strong>no match:</strong><br> /names1.file
                                    </td>
                                </tr>
                                <tr>
                                    <td><em>name</em>[a-z].<em>file</em></td>
                                    <td>[<em>range</em>] matches a <strong>single</strong> character in the specified range (in this case a character in the range of a-z, and also be numberic.)
                                    </td>
                                    <td>/names.file<br>/nameb.file<br><br><strong>no match:</strong><br> /name1.file
                                    </td>
                                </tr>
                                <tr>
                                    <td><em>name</em>[abc].<em>file</em></td>
                                    <td>[<em>set</em>] matches a <strong>single</strong> character in the specified set of characters (in this case either a, b, or c)</td>
                                    <td>/namea.file<br>/nameb.file<br><br><strong>no match:</strong><br> /names.file
                                    </td>
                                </tr>
                                <tr>
                                    <td><em>name</em>[!abc].<em>file</em></td>
                                    <td>[!<em>set</em>] matches a <strong>single</strong> character, <strong>except</strong> the ones spesified in the set of characters (in this case a, b, or c)</td>
                                    <td>/names.file<br>/namex.file<br><br><strong>no match:</strong><br> /namesb.file
                                    </td>
                                </tr>
                                <tr>
                                    <td>*.<em>file</em></td>
                                    <td>All files withe <em>.file</em> extention</td>
                                    <td>/name.file<br>/lib/name.file</td>
                                </tr>
                                <tr>
                                    <td><em>name</em>/<br>!<em>name</em>/secret.log</td>
                                    <td>! specifies a negation or exception. Matches all files and folders in any
                                        <em>name</em> folder, except name/secret.log</td>
                                    <td>/name/file.txt<br>/name/log/name.log<br><br><strong>no match:</strong><br>/name/secret.log</td>
                                </tr>
                                <tr>
                                    <td>*.<em>file<br></em>!<em>name</em>.file</td>
                                    <td>! specifies a negation or exception. All files withe <em>.file</em> extention, except name.file</td>
                                    <td>/log.file<br>/lastname.file<br><br><strong>no match:</strong><br> /name.file
                                    </td>
                                </tr>
                                <tr>
                                    <td>*.<em>file<br></em>!<em>name</em>/*<em>.file</em><br>junk.*</td>
                                    <td>Adding new patterns after a negation will re-ignore a previous negated file<br>All files withe <em>.file</em> extention, except the ones in <em>name</em> folder. Unless the file name is junk</td>
                                    <td>/log.file<br>/name/log.file<br><br><strong>no match:</strong><br> /name/junk.file
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <pre class="language-git">
                    <code>
                        touch .gitignore
                         </code>
                    </pre>
            </li>
            <li>Git Security SSH<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom60934" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom60934" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Git Security SSH</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        Git Security Up to this point, we have used HTTPS to connect to our remote repository. HTTPS will usually work just fine, but you should use SSH if you work with unsecured networks. <br><br>And sometimes, a project will require
                        that you use SSH. What is SSH SSH is a secure shell network protocol that is used for network management, remote file transfer, and remote system access. SSH uses a pair of SSH keys to establish an authenticated and encrypted secure
                        network protocol. <br><br>It allows for secure remote communication on unsecured open networks.<br><br><br> SSH keys are used to initiate a secure "handshake". When generating a set of keys, you will generate a "public" and "private"
                        key. <br><br>The "public" key is the one you share with the remote party. Think of this more as the lock. <br><br>The "private" key is the one you keep for yourself in a secure place. Think of this as the key to the lock. <br><br>SSH
                        keys are generated through a security algorithm. It is all very complicated, but it uses prime numbers, and large random numbers to make the public and private key. It is created so that the public key can be derived from the private
                        key, but not the other way around. </div>
                </div>
                <pre class="language-git">
                    <code>
                        ssh-keygen -t rsa -b 4096 -C "test@w3schools.com"
                         </code>
                    </pre>
                <pre class="language-git">
                        <code>
                            ssh-add /Users/user/.ssh/id_rsa
                             </code>
                        </pre>
            </li>
            <li>Test SSH Connection to GitHub
                <pre class="language-git">
                    <code>
                        ssh -T git@github.com
                         </code>
                    </pre>
                <pre class="language-git">
                        <code>
                            git remote add ssh-origin git@github.com:w3schools-test/hello-world.git
                             </code>
                        </pre>
            </li>
            <li>change a remote origin from HTTPS to SSH
                <pre class="language-git">
                    <code>
                        git remote set-url origin git@github.com:w3schools-test/hello-world.git
                             </code>
                        </pre>
            </li>
            <li>Git Revert Find Commit in Log
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom399593" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom399593" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Git Revert Find Commit in Log</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        First thing, we need to find the point we want to return to. To do that, we need to go through the log.
                        <br><br> To avoid the very long log list, we are going to use the --oneline option, which gives just one line per commit showing:
                        <br><br> The first seven characters of the commit hash the commit message
                        <br><br> We want to revert to the previous commit: 52418f7 (HEAD -> master) Just a regular update, definitely no accidents here..., and we see that it is the latest commit.
                        <br><br><br> Git Revert HEAD<br> We revert the latest commit using git revert HEAD (revert the latest change, and then commit), adding the option --no-edit to skip the commit message editor
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4258989" aria-expanded="false" aria-controls="collapseThree">
                                find the point we want to revert
                </button>
                        </h2>
                        <div id="collapseThree4258989" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-git">
                                <code>
                                    git log --oneline
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne358681" aria-expanded="false" aria-controls="collapseOne">
                                Git Revert HEAD
                </button>
                        </h2>
                        <div id="collapseOne358681" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body"> <pre class="language-git">
                                <code>
                                    git revert HEAD --no-edit
                                </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>Git Reset
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom399585" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom399585" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Git Reset</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        reset is the command we use when we want to move the repository back to a previous commit, discarding any changes made after that commit.
                        <br><br><br> Git Reset Find Commit in Log<br> First thing, we need to find the point we want to return to. To do that, we need to go through the log.
                        <br> To avoid the very long log list, we are going to use the --oneline option, which gives just one line per commit showing:
                        <br><br> The first seven characters of the commit hash - this is what we need to refer to in our reset command. the commit message
                    </div>
                </div>
                <pre class="language-git">
                                <code>
                                    git reset 9a9add8
                                </code>
                                </pre> </li>
            <li>Git Amend
                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom3995851" aria-controls="offcanvasBottom">Read more...</button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasBottom3995851" aria-labelledby="offcanvasBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasBottomLabel">Git Amend</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        reset is the command we use when we want to move the repository back to a previous commit, discardcommit --amend is used to modify the most recent commit. It combines changes in the staging environment with the latest commit, and creates a new commit.
                        This new commit replaces the latest commit entirely.
                    </div>
                </div>
                <pre class="language-git">
                                <code>
                                    git commit --amend -m "Added lines to README.md"
                                </code>
                                </pre> </li>
        </ol>
        </div>
        </div>
        <?php require_once 'Footer.php'?>