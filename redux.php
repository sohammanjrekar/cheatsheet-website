<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 p-2 headline" style="background:linear-gradient(to top right, #fb5475 0%, #f77b50 59%);">
        <div class="text-center " style="margin-top:5vh;"><img style="margin-right:2vh;" src="../../assets/img/redux.svg" alt="" /> Redux cheatsheet
        </div>
    </nav>
    <div class="container">
        <div class="p-5 mb-4 bg-light rounded-3 jumbo mt-2">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">Redux</h1>
                <div class="row">
                    <div class="col-md-8">
                        <p class="fs-4">
                            Redux is a predictable state container for JavaScript apps. It helps you write applications that behave consistently, run in different environments (client, server, and native), and are easy to test. On top of that, it provides a great developer experience,
                            such as live code editing combined with a time traveling debugger. You can use Redux together with React, or with any other view library. It is tiny (2kB, including dependencies), but has a large ecosystem of addons available.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="../../assets/img/redux.svg" alt="" style="width:100% ;" />
                    </div>
                </div>
                <button class="btn btn1" type="button" data-bs-toggle="offcanvas" data-bs-target="#o1" aria-controls="o1">
          Read More...
        </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="o1" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                            Readux
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p>
                            Features of React.js: There are unique features are available on React because that it is widely popular.
                            <br><br>
                            <ul>
                                <li>
                                    Use JSX: It is faster than normal JavaScript as it performs optimizations while translating to regular JavaScript. It makes it easier for us to create templates.</li>
                                <li>
                                    Virtual DOM: Virtual DOM exists which is like a lightweight copy of the actual DOM. So for every object that exists in the original DOM, there is an object for that in React Virtual DOM. It is exactly the same, but it does not have the power to directly
                                    change the layout of the document. Manipulating DOM is slow, but manipulating Virtual DOM is fast as nothing gets drawn on the screen.</li>
                                <li>
                                    One-way Data Binding: This feature gives you better control over your application.</li>
                                <li>
                                    Component: A Component is one of the core building blocks of React. In other words, we can say that every application you will develop in React will be made up of pieces called components. Components make the task of building UIs much easier. You can
                                    see a UI broken down into multiple individual pieces called components and work on them independently and merge them all in a parent component which will be your final UI.</li>
                                <li>
                                    Performance: React.js use JSX, which is faster compared to normal JavaScript and HTML. Virtual DOM is a less time taking procedure to update webpages content.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <ol>
            <!-- offcanvas -->
            <li>
                install Redux toolkit
                <pre class="language-jsx">
                <code>
                    npm install @reduxjs/toolkit react-redux
                </code>
            </pre>
            </li>
            <li>
                File structure in src folder (use cmd)
                <pre class="language-jsx">
    <code>
      mkdir store && cd store && type NUL > index.jsx && mkdir slices && cd slices && type NUL > Userslices.jsx
</code>
</pre>
            </li>
            <li>
                import createSlice package in file
                <pre class="language-jsx">
    <code>
        import {createSlice} from "@reduxjs/toolkit";
</code>
</pre>
            </li>
            <li>
                create slice
                <pre class="language-jsx">
    <code>
        const userSlice = createSlice({
            name: "user",
            initialState: [],
            reducers: {
                addUser(state, action) { 
                    state.push(action.payload)
                },
                removeUser(state, action) { },
                deleteUsers(state, action) { },
            }
        });
        
        export default userSlice.reducer;
        export const {addUser,removeUser,deleteUsers}=userSlice.actions;
</code>
</pre>
            </li>




            <li>
                create store in store/index.js and import all slices to create store
                <pre class="language-jsx">
    <code>
        import { configureStore } from "@reduxjs/toolkit";
</code>
</pre>
<pre class="language-jsx">
    <code>
        const store=configureStore({
            reducer:{
           user:userSlice,
           },
           });
           export default store;
</code>
</pre>
            </li>



            <li>
                Go to main.jsx then React.StrictMode to Provider
                <pre class="language-jsx">
    <code>
        import {Provider} from 'react-redux'
        import store from './store/index.jsx'
</code>
</pre>
<pre class="language-jsx">
    <code>
        ReactDOM.createRoot(document.getElementById('root')).render(
            &lt;Provider store={store}&gt;
            &lt;App /&gt;
            &lt;/Provider&gt;,
          )
          
</code>
</pre>
            </li>
            <li>
               use useDispatch to store data in redux store (send data to redux store)
                <pre class="language-jsx">
    <code>
        import {useDispatch} from 'react-redux'
</code>
</pre>
<pre class="language-jsx">
    <code>
        const dispatch=useDispatch();
        const addNewUser=(e)=>{
            dispatch(addUser(e));
              };
            
</code>
</pre>
            </li>
            <li>
                Get data from redux store (fetch data)
                <pre class="language-jsx">
    <code>
        import { useSelector } from 'react-redux'
</code>
</pre>
<pre class="language-jsx">
    <code>
        const data =useSelector((state)=>state.user)
</code>
</pre>
            </li>





            <li>
               one slice reducer used in another slice
                <pre class="language-jsx">
    <code>
        extraReducers(builder){
            builder.addCase(userSlice.actions.deleteUsers,()=>{
                return [];
            })
        }
</code>
</pre>
            </li>


            <li>
               CreateAction use to reduce drawbacks of extraReducers
                 <pre class="language-jsx">
     <code>
        import { createAction } from "@reduxjs/toolkit";
 </code>
 </pre>
 <pre class="language-jsx">
    <code>
       export const clearAllUsers=createAction('clearAllUsers');
</code>
</pre>
<pre class="language-jsx">
    <code>
        extraReducers(builder){
            builder.addCase(clearAllUsers,()=>{
                return [];
            })
        }</code>
</pre>
             </li>
            

        </ol>
    </div>
    </div>
    <?php require_once 'Footer.php'?>