<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;"
                src="../../assets/img/nextjs-icon.svg" alt="" />NextJS cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">NextJS</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p class="fs-4">
                            The Next.js is React Based framework with server side rendering capability. It is very fast
                            and SEO friendly. Using Next.js, you can create robust react based application quite easily
                            and test them.
                        </p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="../../assets/img/nextjs-icon.svg" alt="" style="height:100%;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1"
                    aria-controls="o1">
                    Read More...
                </button>
                <a href="https://nextjs.org/docs">
                    <div class="button btn1 mx-1 text-center" style="font-size: 1em;width:5em;">Docs</div>
                </a>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1"
                    aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            NextJS
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>
                            The Next.js is React Based framework with server side rendering capability. It is very fast
                            and SEO friendly.
                            <br>
                            Using Next.js, you can create robust react based application quite easily and test them.
                            Following are the key features of Next.js.
                            <br><br><br>
                            Hot Code Reload : Next.js server detects modified files and reloads them automatically.
                            <br><br>
                            Automatic Routing : No need to configure any url for routing. files are to be placed in
                            pages folder. All urls will be mapped to file system. Customization can be done.
                            <br><br>
                            Component specific styles : styled-jsx provides support for global as well as component
                            specific styles.
                            <br><br>
                            Server side rendering : react components are prerendered on server hence loads faster on
                            client.
                            <br><br>
                            Node Ecosystem : Next.js being react based gels well with Node ecosystem.
                            <br><br>
                            Automatic code split : Next.js renders pages with libraries they need. Next.js instead of
                            creating a single large javascript file, creates multiples resources. When a page is loaded,
                            only required javascript page is loaded with it.
                            <br><br>
                            Prefetch : Next.js provides Link component which is used to link multiple components
                            supports a prefetch property to prefetch page resources in background.<br><br>

                            Dynamic Components : Next.js allows to import JavaScript modules and React Components
                            dynamically.
                            <br><br>
                            Export Static Site : Next.js allows to export full static site from your web application.
                            <br><br>
                            Built-in Typescript Support : Next.js is written in Typescripts and provides excellent
                            Typescript support.
                            <br />
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                Create Next App
                <pre class="language-sh">
                <code>
                    npx create-next-app@latest
                </code>
            </pre>
                <pre class="language-sh">
                <code>
                    yarn create next-app
                </code>
            </pre>
            </li>
            <li>
                start app
                <pre class="language-sh">
                    <code>
                        npm run start
                    </code>
                </pre>
                <pre class="language-sh">
                <code>
                    yarn run dev
                </code>
            </pre>
            </li>


            <li>
                create 404 error file
                <br>
                create not-found.js file then nextjs automatically set as error file (in file 'notfound' fuction used)
            </li>
            <li>
                create loading spinner
                <br>
                create loading.js file then nextjs automatically set loading spinner
            </li>
            <li>
                set every page css
                <br>
                create css file in styles folder and rename as about.module.css
            </li>


            <li>
                next/link <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o2"
                    aria-controls="o1">
                    Read More...
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o2"
                    aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            next/link
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        Client-side transitions between routes can be enabled via the Link component exported by
                        next/link.
                        <br><br>
                        For an example, consider a pages directory with the following files:
                        <br><br>
                        pages/index.js<br>
                        pages/about.js<br>
                        pages/blog/[slug].js<br><br><br>
                        Link accepts the following props:
                        <br><br>
                        href - The path or URL to navigate to. This is the only required prop. It can also be an object,
                        see example here<br>
                        as - Optional decorator for the path that will be shown in the browser URL bar. Before Next.js
                        9.5.3 this was used for dynamic routes, check our previous docs to see how it worked. Note: when
                        this path differs from the one provided in href the previous href/as behavior is used as shown
                        in the previous docs.
                        legacyBehavior - Changes behavior so that child must be &lt;a&gt;. Defaults to false.<br>
                        passHref - Forces Link to send the href property to its child. Defaults to false<br>
                        prefetch - Prefetch the page in the background. Defaults to true. Any
                        &lt;Link /&gt; that is in the viewport (initially or through scroll) will be preloaded. Prefetch
                        can be disabled by passing prefetch={false}. When prefetch is set to false, prefetching will
                        still occur on hover. Pages using Static Generation will preload JSON files with the data
                        for faster page transitions. Prefetching is only enabled in production.
                        replace - Replace the current history state instead of adding a new url into the stack.
                        Defaults to false
                        scroll - Scroll to the top of the page after a navigation. Defaults to true<br>
                        shallow - Update the path of the current page without rerunning getStaticProps,
                        getServerSideProps or getInitialProps. Defaults to false<br>
                        locale - The active locale is automatically prepended. locale allows for providing a
                        different locale. When false href has to include the locale as the default behavior is
                        disabled.
                        Note, when legacyBehavior is not set to true, all anchor tag properties can be passed to
                        next/link as well such as, className, onClick, etc.<br>
                    </div>
                </div>

                <pre class="language-jsx">
        <code>
            import Link from 'next/link'
        </code>
    </pre>
                <pre class="language-jsx">
        <code>
          

          
                &lt;ul&gt;
                  &lt;li&gt;
                    &lt;Link href="/"&gt;Home&lt;/Link&gt;
                  &lt;/li&gt;
                  &lt;li&gt;
                    &lt;Link href="/about"&gt;About Us&lt;/Link&gt;
                  &lt;/li&gt;
                  &lt;li&gt;
                    &lt;Link href="/blog/hello-world"&gt;Blog Post&lt;/Link&gt;
                  &lt;/li&gt;
                &lt;/ul&gt;
        </code>
    </pre>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                &lt;h1&gt; tag: “define heading of an HTML page but with first
                                level”
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <pre class="language-html">
                <code>
                    &lt;h1&gt;
                    //heading content
                    &lt;/h1&gt;
            </code>
            </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </li>









            <li>
                add css in page
                <pre class="language-sh">
                    <code>
                        import StyleSheet from '@/app/styles/main.module.css'
                        const page = () => {
                          return (
                            &lt;div&gt;
                            &lt;h1 className={StyleSheet.mainmy}&gt;contactus&lt;/h1&gt;
                                &lt;/div&gt;
                          )
                        }
                        
                        export default page
                        
                    </code>
                </pre>
               
            </li>

            <li>
                add font in layout page
                <pre class="language-sh">
                    <code>
                        import { Roboto } from 'next/font/google'
 
const roboto = Roboto({
  weight: '400',
  subsets: ['latin'],
  display: 'swap',
})
 
export default function RootLayout({ children }) {
  return (
    &lt;html lang="en" className={roboto.className}>
      &lt;body>{children}&lt;/body>
    &lt;/html>
  )
}
                        
                    </code>
                </pre>
               
            </li>

            <li>
                Nextjs Dynamic Route(create [id] name folder and in this folder create page.js) (slug)
                <pre class="language-sh">
                    <code>
                     
                        &lt;Link href={`/movie/${id}`}>   
                    </code>
                </pre>
               
            </li>
            
            <li>
                connect database to nextjs app. first create utils folder in src.then create file dbconn.js in utils
                <pre class="language-sh">
                    <code>
                        import mongoose from "mongoose";
const MONGODB_URL = process.env.MONGODB_URL;
if (!MONGODB_URL) {throw new Error("Please define the MONGODB_URI environment variable inside .env.local" )}
let cached = global.mongoose;
if (!cached) {cached = global.mongoose = { con: null, promise: null }}

const dbConnect = async () => {
  if (cached.conn) {return cached.conn; }
  if (!cached.promise) {
    const opts = { bufferCommands: false };
    cached.promise = mongoose.connect(MONGODB_URL, opts).then((mongoose) => {return mongoose;});}

  try {cached.conn = await cached.promise;} catch (e) {
    cached.promise = null;
    throw e;
  }
  return cached.conn;
};
export default dbConnect;
                    </code>
                </pre>
               
            </li>
            
            <li>
                add css in page
                <pre class="language-sh">
                    <code>
                     
                        
                    </code>
                </pre>
               
            </li>
            
            <li>
                add css in page
                <pre class="language-sh">
                    <code>
                     
                        
                    </code>
                </pre>
               
            </li>
            
            <li>
                add css in page
                <pre class="language-sh">
                    <code>
                     
                        
                    </code>
                </pre>
               
            </li>
            
            <li>
                add css in page
                <pre class="language-sh">
                    <code>
                     
                        
                    </code>
                </pre>
               
            </li>
            
            <li>
                add css in page
                <pre class="language-sh">
                    <code>
                     
                        
                    </code>
                </pre>
               
            </li>
            
            <li>
                add css in page
                <pre class="language-sh">
                    <code>
                     
                        
                    </code>
                </pre>
               
            </li>
            
            <li>
                add css in page
                <pre class="language-sh">
                    <code>
                     
                        
                    </code>
                </pre>
               
            </li>
            
            <li>
                add css in page
                <pre class="language-sh">
                    <code>
                     
                        
                    </code>
                </pre>
               
            </li>
        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>