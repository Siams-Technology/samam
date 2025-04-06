<?php
// Dynamic PHP Variables
$pageTitle = "Hacked by Siam | Silent Hackers";
$footerText = "Hey there, government! We hacked this site because you don't bring PayPal services to Bangladesh.";
$metaDescription = "This is a defacement page by Siam. Silence is the most powerful scream.";
$metaKeywords = "cbsg, cbsg hacking, cbsg cybersecurity, cbsg related tools, cbsg vulnerabilities, cbsg research, cbsg attacks, cbsg hacking techniques, cbsg security breaches, cbsg defense, cbsg threat analysis, cbsg penetration testing, cbsg exploitation, cbsg digital forensics, cbsg malware, cbsg cyber risks, cbsg prevention, cbsg mitigation, cbsg network security, cbsg data protection, cbsg encryption, cbsg security best practices, cbsg threat intelligence, cbsg risk management, cbsg breach prevention, cbsg protection, cbsg cybersecurity solutions, cbsg experts, cbsg advisory, cbsg monitoring, cbsg advanced threats, cbsg security software, cbsg firewalls, cbsg authentication, cbsg encryption techniques, cbsg ethical hacking, cbsg hacking methods, cbsg incident response, cbsg forensic analysis, cbsg tools, cbsg hacking tutorials, cbsg cybersecurity news, cbsg research papers, cbsg attacks and defense, cbsg attack vectors, cbsg data leaks, cbsg exploit development, cbsg cybersecurity audits, cbsg exploitation techniques, cbsg risk assessment, cbsg vulnerability scanning, cbsg penetration tools, cbsg security training, cbsg updates, cbsg security measures, cbsg digital threats, cbsg advanced cybersecurity.";
$ogImage = "https://siams-technology.github.io/samam/pages/in-a-dramatic-illustration-with-a-dark-a_fDy-A6zbTjStYmxFa8cQGg_oumgpc5AR4iI67QLkYvaVw-removebg-preview.png";
$author = "Siam Mahmud";
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <div class="wrapper">
        <!-- Centered Logo -->
        <div class="logo-container">
            <img src="https://siams-technology.github.io/samam/pages/in-a-dramatic-illustration-with-a-dark-a_fDy-A6zbTjStYmxFa8cQGg_oumgpc5AR4iI67QLkYvaVw-removebg-preview.png" alt="Logo" id="logo">
        </div>
        
        <!-- Text Section (will be animated by TextScramble) -->
        <div class="text-container">
            <p id="tagline">GOT S3CURITY?</p>
            <div class="text" id="scramble-text">Hacked by Siam</div><br>
        </div>

        <!-- Footer Section -->
        <div id="footer" class="animated bounceIn">
            <h1 id="greyshadow"><?php echo $footerText; ?></h1>
        </div>

        <br />
    </div>

    <script type="text/javascript">
        // Text scramble animation
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

        // Initialize text scramble effect
        document.addEventListener('DOMContentLoaded', function() {
            const phrases = [
                'Hacked by Siam',
                '<?php echo $pageTitle; ?>'
            ]

            const el = document.getElementById('scramble-text')
            if (el) {
                const fx = new TextScramble(el)

                let counter = 0
                const next = () => {
                    fx.setText(phrases[counter]).then(() => {
                        setTimeout(next, 3500)
                    })
                    counter = (counter + 1) % phrases.length
                }

                next()
            }
        });

        // Dynamic title animation
        (function titleAnimation() {
            var msg = "<?php echo $pageTitle; ?>";
            var position = 0;
            var speed = 70;
            var direction = "forward";
            
            function updateTitle() {
                if (direction === "forward") {
                    if (position < msg.length) {
                        position++;
                        var scroll = msg.substr(0, position);
                        document.title = scroll;
                        setTimeout(updateTitle, speed);
                    } else {
                        direction = "backward";
                        setTimeout(updateTitle, speed);
                    }
                } else {
                    if (position > 0) {
                        position--;
                        var scroll = msg.substr(msg.length - position, msg.length);
                        document.title = scroll;
                        setTimeout(updateTitle, speed);
                    } else {
                        direction = "forward";
                        setTimeout(updateTitle, speed);
                    }
                }
            }
            
            updateTitle();
        })();
    </script>
</body>
</html>
