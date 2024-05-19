<?php require_once 'Navbar.php'?>
    <!-- mid part -->
    <nav class="mt-5 pt-1">
        <div class="text-center my-3" style="font-size: larger;font-weight:900;">
            <img src="../img/mongodb-icon.svg" alt="">MongoDB cheatsheet
        </div>
    </nav>
    <div class="container">
        <ol>
            <li>install mongoose
                <pre class="language-js">
                <code>
        npm install mongoose --save
                </code>
            </pre>
            </li>
            <li>add mongoose in database.js
                <pre class="language-js">
                    <code>
                        const mongoose = require('mongoose');
                </code>
                </pre>
                <pre class="language-js">
                <code>
                    const mongoose = require('mongoose');const mongoURL="mongodb://localhost:27017/react"const connectToMongoDB=()=>{
   
        mongoose.connect(mongoURL).then(()=>console.log('success')).catch(err => console.log(err));
            
}
module.exports=connectToMongoDB;
                </code>
            </pre>
            </li>
            <li>call fuction in index.js
                <pre class="language-js">
                <code>
                    const connectToMongoDB =require('./db')                    connectToMongoDB()
                </code>
            </pre>
            </li>
            <li>create schema
                <pre class="language-js">
                <code>
const mongoose = require("mongoose");
const { Schema } =mongoose;
const UserSchema = new mongoose.Schema({
  name: {
    type: String,
    required: true,
  },
  email: {
    type: String,
    required: true,
    unique: true,
  },
  password: {
    type: String,
    required: true,
  },
  date: {
    type: Date,
    default: Date.now,
  },
});                </code>
            </pre>
            </li>
            <li>complie schema in model
                <pre class="language-js">
                <code>
                    const Kitten = mongoose.model('Kitten', kittySchema);
                </code>
            </pre>
            </li>
            <li>use model to take new input
                <pre class="language-js">
                <code>
                    const silence = new Kitten({ name: 'Silence' });
                    console.log(silence.name);
                </code>
            </pre>
            </li>
        </ol>
    </div>
    <?php require_once 'Footer.php'?>