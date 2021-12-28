<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();

    if ($_SESSION['language'] == "") {
        $_SESSION['language'] = "en";
    } else {
    }
    $language = $_SESSION['language'];
    $page_password = $_COOKIE["password"];
    // echo $page_password;
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project01</title>
    <link rel="stylesheet" href="assets/styles/styles.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="assets/js/jquery-3.6.0.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/particles.js-master/particles.js"></script>
    <script src="assets/js/page-lock.js"></script>
    <script>
        var password; 
        var pass1="admin"; 
        page_password = "<?=$page_password?>"
        if(pass1 != page_password){
            password=prompt('Enter Password',''); 
            if (password==pass1){
                alert('Wellcome Back'); 
                const d = new Date();
                d.setTime(d.getTime() + (3*24*60*60*1000));
                let expires = "expires="+ d.toUTCString();
                document.cookie = "password="+ pass1 + ";" + expires + ";path=/";
                // hehe = "username="+ pass1 + ";" + expires + ";path=/";
                // console.log(hehe);
            } 
            else { window.location="../../../"; 
            } 
        }
    </script>

</head>
<body class="home-bg">
    <div  id="particles-js"></div>
    <input type="text" id="session_lang" value="<?=$language?>" disable hidden>
    <div class="resume">
        <div class="base">
            <div class="profile">
                <div class="photo"><img src="assets/img/me.jpg" /></div>
                <div class="info">
                    <h4 class="name">Leon Lai</h4><small class="language" data-translate="web-developer">Web
                        Developer</small>
                </div>
            </div>
            <div class="about">
                <h3 class="language" data-translate="about-me">About me</h3>
                <span>
                    <?php 
                    if($language == 'cn'){
                        echo'
                        使用 HTML、CSS 和 JavaScript 构建高质量的网站。
                        <br><br>
                        在网站开发和UXUI设计方面拥有1年以上丰富经验的Web开发人员，正在寻求在顶级技术公司的职位。
                        ';
                    }else{
                        echo'
                            Building quality websites with HTML, CSS, and JavaScript. 
                            <br>
                            <br>
                            Web developer and instructor with 1+ years of wellrounded experience in website development, objectoriented and UXUI design, seeks a position with a top 
                            technology firm.
                        ';
                    }
                ?>
                </span>
            </div>
            <br>
            <div class="contact">
                <h3 class="language" data-translate="contact">Contact</h3>
                <div class="call"><i class="fa fa-phone"></i><a target="_blank" href="tel:01111603308"><span>011-11603308</span></a></div>
                <div class="address"><i class="fa fa-map-marker"></i><a target="_blank" href="https://maps.google.com/maps?q=Kuala+Lumpur"><span>Kuala Lumpur</span></a></div>
                <div class="email"><i class="fa fa-envelope"></i><a target="_blank" href="mailto:ahlcc98@gmail.com"><span>ahlcc98@gmail.com</span></a></div>
            </div>
            <br>
            <div class="follow">
                <h3 class="language" data-translate="follow">Follow</h3>
                <div class="box">
                    <a href="https://codepen.io/leon-lai/" target="_blank"><i class="fab fa-codepen"></i></a>
                    <a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
                    <a href="https://t.me/Evilleon" target="_blank"><i class="fab fa-telegram-plane"></i></a>
                    <a href="https://wa.me/601111603308" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        <div class="func">
            <div class="translate">
                <h3 class=""><i class="fas fa-language"></i><span class="language"
                        data-translate="language">LANGUAGE</span></h3>
                <ul>
                    <li><small><span onclick="english();">English</span></small></li>
                    <li><small><span onclick="chinese();">中文</span></small></li>
                </ul>
            </div>
            <div class="work">
                <h3><i class="fa fa-briefcase"></i><span class="language" data-translate="work-exrerience">Work
                        Exrerience</span></h3>
                <ul>
                    <li><span>Web Developer</span><small>Thrive Tech <br> Jan 2021 - Present</small></li>
                    <li><span>IT Support</span><small>Web Server <br> Jul 2020 - Jan 2021</small></li>
                    <li><span>Front-End</span><small>Freelance <br> Dec 2019 - Jul 2020</small></li>
                </ul>
            </div>
            <div class="edu">
                <h3><i class="fa fa-graduation-cap"></i><span class="language"
                        data-translate="education">Education</span></h3>
                <ul>
                    <li><span>Diploma Software Engineering</span><small>New Era University College <br> Sep 2017 - Dec 2019</small></li>
                    <li><span>SPM</span><small>SMJK CONFUCIAN <br> Nov 2010 - Dec 2016 </small></li>
                </ul>
            </div>
            <div class="skills-prog">
                <h3><i class="fa fa-code"></i><span class="language" data-translate="skills">Programming Skills</span>
                </h3>
                <ul>
                    <li data-percent="90"><span>HTML5 & CSS</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                    <li data-percent="80"><span>jQuery</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                    <li data-percent="75"><span>JavaScript</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                    <li data-percent="70"><span>SQL</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                    <li data-percent="75"><span>PHP</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                    <li data-percent="52"><span>SEO</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                    <li data-percent="70"><span>UI&UX</span>
                        <div class="skills-bar">
                            <div class="bar"></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="skills-soft">
                <h3><i class="fa fa-th-list"></i><span class="language" data-translate="software">Software Skills</span>
                </h3>
                <ul>
                    <li data-percent="94">
                        <svg viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle class="cbar" cx="50" cy="50" r="45"></circle>
                        </svg><span>Visual Studio</span><small></small>
                    </li>
                    <li data-percent="80">
                        <svg viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle class="cbar" cx="50" cy="50" r="45"></circle>
                        </svg><span>Web Browsers</span><small></small>
                    </li>
                    <li data-percent="89">
                        <svg viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle class="cbar" cx="50" cy="50" r="45"></circle>
                        </svg><span>G SuiteMS</span><small></small>
                    </li>
                    <li data-percent="55">
                        <svg viewbox="0 0 100 100">
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle class="cbar" cx="50" cy="50" r="45"></circle>
                        </svg><span>G Suit</span><small></small>
                    </li>
                </ul>
            </div>
            <div class="interests">
                <h3><i class="fa fa-star"></i><span class="language" data-translate="interests">Interests</span></h3>
                <div class="interests-items">
                    <div class="draw"><i class="fa fa-code"></i><span class='language' data-translate="code">Code</span>
                    </div>
                    <div class="movie"><i class="fa fa-film"></i><span class='language'
                            data-translate="movie">Movie</span></div>
                    <div class="music"><i class="fa fa-headphones"></i><span class='language'
                            data-translate="music">Music</span></div>
                    <div class="game"><i class="fa fa-gamepad"></i><span class='language'
                            data-translate="game">Game</span></div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Language Translate Start-->
<script src="langcn.json"></script>
<script>
    function melayu() {
        // var change = $('input[name=malay]').val();
        var change = "BM";
        console.log(change);
        // alert(change);
        $.ajax({
            dataType: 'json',
            type: "GET",
            url: "ajax/update_session/index.php",
            data: {
                change: change
            },

            success: function (result) {
                console.log(result);
                window.location.replace('.');

            }
        });
    };

    function chinese() {
        var change = "CN";
        console.log(change);

        $.ajax({
            dataType: 'json',
            type: "GET",
            url: "ajax/update_session/index.php",
            data: {
                change: change
            },

            success: function (result) {
                console.log(result);
                window.location.replace('.');

            }
        });
    };

    function english() {
        var change = $('input[name=english]').val();
        console.log(change);
        $.ajax({
            dataType: 'json',
            type: "GET",
            url: "ajax/update_session/index.php",
            data: {
                change: change
            },

            success: function (result) {
                console.log(result);
                window.location.replace('.');

            }
        });
    };

    $(document).ready(function () {
        var session = $('#session_lang').val();
        console.log(session);
        if (session == "bm") {
            var lang = $(this).attr('data-translate');
            console.log(lang);

            var mydata = JSON.parse(malay);
            console.log(mydata);
            $('.language').each(function (index, item) {
                $(this).text(mydata[0][$(this).attr('data-translate')]);
                $(this).text(mydata[0][$(this).text()]);
            });
        } else if (session == "cn") {
            var lang = $(this).attr('data-translate');
            // console.log(lang);
            const mydata = JSON.parse(chinese_language);
            console.log(mydata);
            $('.language').each(function (index, item) {
                $(this).text(mydata[0][$(this).attr('data-translate')]);
                $(this).text(mydata[0][$(this).text()]);
            });
        } else {
            var lang = $(this).attr('id');
            var mydata = JSON.parse(english);
            console.log(mydata);
            $('.language').each(function (index, item) {
                $(this).text(mydata[0][$(this).attr('id')]);
                $(this).text(mydata[0][$(this).text()]);
            });
        }
    })
</script>
<!-- Language Translate End-->

<!-- Skill Rating Start-->
<script>
    $('.skills-prog li').find('.skills-bar').each(function (i) {
        $(this).find('.bar').delay(i * 150).animate({
            width: $(this).parents().attr('data-percent') + '%'
        }, 1000, 'linear', function () {
            return $(this).css({
                'transition-duration': '.5s'
            });
        });
    });

    $('.skills-soft li').find('svg').each(function (i) {
        var c, cbar, circle, percent, r;
        circle = $(this).children('.cbar');
        r = circle.attr('r');
        c = Math.PI * (r * 2);
        percent = $(this).parent().data('percent');
        cbar = ((100 - percent) / 100) * c;
        circle.css({
            'stroke-dashoffset': c,
            'stroke-dasharray': c
        });
        circle.delay(i * 150).animate({
            strokeDashoffset: cbar
        }, 1000, 'linear', function () {
            return circle.css({
                'transition-duration': '.3s'
            });
        });
        $(this).siblings('small').prop('Counter', 0).delay(i * 150).animate({
            Counter: percent
        }, {
            duration: 1000,
            step: function (now) {
                return $(this).text(Math.ceil(now) + '%');
            }
        });
    });
</script>
<!-- Skill Rating End-->

<!-- particles.JS Start-->
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 600
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 150,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function () {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);;
</script>
<!-- particles.JS End-->

<!-- Screen Size Detection Start -->
<script>
  var isMobile = {

      Android: function() {

          return navigator.userAgent.match(/Android/i);

      },

      BlackBerry: function() {

          return navigator.userAgent.match(/BlackBerry/i);

      },

      iOS: function() {

          return navigator.userAgent.match(/iPhone|iPad|iPod/i);

      },

      Opera: function() {

          return navigator.userAgent.match(/Opera Mini/i);

      },

      Windows: function() {

          return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);

      },

      any: function() {

          return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile
              .Windows());

      }

  };

  if (isMobile.any()) {

  } else {

  }
</script>
<!-- Screen Size Detection End -->
</html>