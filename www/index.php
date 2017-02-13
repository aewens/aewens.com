<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Austin Ewens, aewens, @aewens_">
        <meta name="description" content="My portfolio site">
        <title>Austin Ewens</title>
        <style>
            html, body {
                width: 100%;
                height: 100%;
                font-family: "HelveticaNeue-Light", "Helvetica Neue Light", 
                    "Helvetica Neue", Helvetica, Arial, "Lucida Grande", 
                    sans-serif;
                font-weight: 300;
                position: relative;
            }
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            #app {
                width: 360px;
                height: 100%;
                /*box-shadow: 0 1px 40px rgba(0, 0, 0, 0.3), 
                    0 0 40px rgba(0, 0, 0, 0.1) inset;*/
                margin: 0 auto;
                padding: 20px;
            }
            #app header {
                width: 100%;
            }
            #app header img {
                width: 96px;
                height: 96px;
                display: block;
                margin: 0 auto;
            }
            #app header #name {
                margin: 20px 0;
            }
            #app header #name h1 {
                text-align: center;
                font-family: "Courier New", Courier, 
                    "Lucida Sans Typewriter", "Lucida Typewriter", monospace;
                font-weight: normal;
                letter-spacing: 20px;
                margin-right: -20px;
            }
            #app section article {
                position: relative;
                width: 96px;
                height: 96px;
                margin: 0 auto 30px;
            }
            #app section article .blurb {
                width: 0;
                height: 0;
                margin: 0 auto;
                border-radius: 30px;
                font-size: 18px;
                text-align: center;
                overflow: hidden;
                padding: 0;
                border: none;
                transition: width 0.5s ease-in-out;
            }
            #app section article img {
                width: 96px;
                height: 96px;
                display: block;
            }
            #app section article:hover {
                width: 100%;
            }
            #app section article:hover img {
                display: none;
            }
            #app section article:hover .blurb {
                width: 100%;
                height: 96px;
                display: block;
                border: 1px solid rgba(0, 0, 0, 0.4);
                padding: 15px;
            }
            #app section article .blurb span {
                height: 64px;
                line-height: 64px;
            }
            a {
                text-decoration: none;
                color: #000;
                font-weight: bold;
            }
            a:hover {
                text-decoration: underline;
                cursor: pointer;
                position: relative;
            }
            #app section article img:hover + .blurb {
                /*display: block;*/
                color: red;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <header>
                <img src="images/logo.png" alt="logo">
                <div id="name">
                    <h1>austin</h1>
                    <h1>ewens</h1>
                </div>
            </header>
            <section>
                <article>
                    <div class="blurb">
                        Places you can find me:
                        <br>
                        <a href="https://github.com/aewens">Github</a>, 
                        <a href="https://twitter.com/aewens_">Twitter</a>, 
                        and my <a href="https://blog.aewens.com">Blog</a>.
                    </div>
                    <img src="images/about.png" alt="about">
                </article>
                <article>
                    <div class="blurb">
                        I am a web developer and designer that dabbles in tech 
                        support and minimalistic graphics design.
                    </div>
                    <img src="images/skills.png" alt="skills">
                </article>
                <article>
                    <div class="blurb">
                        <span>
                            <a href="mailto:email@aewens.com">
                                email@aewens.com
                            </a>
                        </span>
                    </div>
                    <img src="images/contact.png" alt="contact">
                </article>
            </section>
        </div>
    </body>
</html>
