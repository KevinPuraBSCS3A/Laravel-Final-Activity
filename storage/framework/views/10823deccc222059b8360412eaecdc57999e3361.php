<?php $__env->startSection('content'); ?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
    <style>

        /*===== GOOGLE FONTS =====*/
@import  url("https://fonts.googleapis.com/css2?family=Rockwell:wght@500;600;700&display=swap");

/*===== VARIABLES CSS =====*/
:root{
    --header-height: 3rem;
    --font-medium: 500;
}

/*===== Colores =====*/
:root{
    --first-color: #5361FF;
    --white-color: #FAFAFF;
    --dark-color: #2A3B47;
    --text-color: #697477;
}

/*===== Fuente y tipografia =====*/
:root{
    --body-font: 'Montserrat', sans-serif;
    --big-font-size: 6.25rem;
    --h2-font-size: 1.25rem;
    --normal-font-size: .938rem;
    --small-font-size: .813rem;
}
@media  screen and (min-width: 768px){
    :root{
        --big-font-size: 10.5rem;
        --h2-font-size: 2rem;
        --normal-font-size: 1rem;
        --small-font-size: .875rem;
    }
}

/*===== Margenes =====*/
:root{
    --mb-1: .5rem;
    --mb-2: 1rem;
    --mb-3: 1.5rem;
    --mb-4: 2rem;
}

/*===== z index =====*/
:root{
    --z-fixed: 100;
}

/*===== BASE =====*/
*,::before,::after{
    box-sizing: border-box;
}
html{
    scroll-behavior: smooth;
}
body{
    margin: var(--header-height) 0 0 0;
    font-family: var(--body-font);
    font-size: var(--normal-font-size);
    font-weight: var(--font-medium);
    color: var(--text-color);
    line-height: 1.6;
}
h1,h2,p{
    margin: 0;
}
ul{
    margin: 0;
    padding: 0;
    list-style: none;
}
a{
    text-decoration: none;
    color: var(--text-color);
}
img{
    max-width: 100%;
    height: auto;
    display: block;
}

/*===== CLASS CSS ===== */
.section{
    padding: 3rem 0;
}
.section-title{
    position: relative;
    font-size: var(--h2-font-size);
    color: var(--dark-color);
    margin: 0;
    text-align: center;
}
.section-title::after{
    position: absolute;
    content: "";
    width: 32px;
    height: .18rem;
    left: 0;
    right: 0;
    margin: auto;
    top: 2rem;
    background-color: var(--first-color);
}

/*===== LAYOUT =====*/
.bd-grid{
    max-width: 1024px;
    display: grid;
    grid-template-columns: 100%;
    grid-column-gap: 2rem;
    width: calc(100% - 2rem);
    margin-left: var(--mb-2);
    margin-right: var(--mb-2);

}
.l-header{
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: var(--z-fixed);
    background-color: #CD5C5C;
}

/*===== NAV =====*/
.nav{
    height: var(--header-height);
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #CD5C5C;
}
@media  screen and (max-width: 768px){
    .nav__menu{
        position: fixed;
        top: var(--header-height);
        right: -100%;
        width: 80%;
        height: 100%;
        padding: 2rem;
        background-color: rgba(255,255,255,.3);
        transition: .5s;
        backdrop-filter: blur(10px);
    }
}
.nav__item{
    margin-bottom: var(--mb-4);
}
.nav__link{
    position: relative;
    color: var(--dark-color);
}
.nav__link:hover{
    color: var(--first-color);
}
.nav__logo{
    color: var(--white-color);
}
.nav__toggle{
    color: var(--white-color);
    font-size: 1.5rem;
    cursor: pointer;
}

/*=== Show menu ===*/
.show{
    right: 0;
}

/*Active menu*/
.active::after{
    position: absolute;
    content: "";
    width: 100%;
    height: .18rem;
    left: 0;
    top: 2rem;
    background-color: var(--first-color);
}

/*===== HOME =====*/
.home{
    position: relative;
    background-color: #DC8C8C;
    overflow: hidden;
}
.home__container{
    height: calc(100vh - var(--header-height));
    row-gap: 5rem;
}
.home__title{
    align-self: flex-end;
    font-size: 150px;
    color: var(--white-color);
    line-height: .8;
}
.home__title span{
    text-shadow: 0 20px 25px rgba(0,0,0,.5);
}
.home__scroll{
    align-self: flex-end;
    padding-bottom: var(--mb-4);
}
.home__scroll-link{
    writing-mode: vertical-lr;
    transform: rotate(-180deg);
    color: var(--white-color);
}
.home__img{
    position: absolute;
    right: 0;
    bottom: 0;
    width: 295px;

}

/* ===== ABOUT =====*/
.about__container{
    justify-items: center;
    row-gap: 2rem;
    text-align: center;
}
.about__img{
    display: flex;
    justify-content: center;
    padding-top: 1rem;
    width: 200px;
    height: 200px;
    background-color: #DC8C8C;
    border-radius: 50px;
    overflow: hidden;
}
.about__img img{
    width: 100px;
}
.about__subtitle{
    font-size: var(--h2-font-size);
    color: #D45757;
    margin-bottom: var(--mb-1);
}
.about__text{
    margin-bottom: var(--mb-4);
}
.about__profession{
    display: block;
    margin-bottom: var(--mb-4);
}
.about__social-icon{
    font-size: 1.4rem;
    margin: 0 var(--mb-1);
}
.about__social-icon:hover{
    color: var(--first-color);
}

/* ===== SKILLS =====*/
.skills__container{
    row-gap: 2rem;
}
.skills__subtitle{
    color: var(--first-color);
    margin-bottom: var(--mb-3);
}
.skills__name{
    display: inline-block;
    font-size: var(--small-font-size);
    margin-right: var(--mb-2);
    margin-bottom: var(--mb-3);
    padding: .25rem .5rem;
    background-color: var(--white-color);
    border-radius: .25rem;
}
.skills__name:hover{
    background-color: var(--first-color);
    color: var(--white-color);
}
.skills__img img{
    border-radius: .5rem;
}

/* ===== PORTFOLIO =====*/
.portfolio{
    background-color: var(--white-color);
}
.portfolio__container{
    justify-items: center;
    row-gap: 2rem;
}
.portfolio__img{
    position: relative;
    overflow: hidden;
}
.portfolio__img img{
    border-radius: .5rem;
}
.portfolio__link{
    position: absolute;
    bottom: -100%;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(255,255,255,.3);
    border-radius: .5rem;
    cursor: pointer;
    backdrop-filter: blur(10px);
    transition: .3s;
}
.portfolio__img:hover .portfolio__link{
    bottom: 0;
}
.portfolio__link-name{
    color: var(--dark-color);
}

/* ===== CONTACT =====*/
.contact__container{
    row-gap: 2rem
}
.contact__subtitle{
    font-size: var(--normal-font-size);
    color: var(--first-color);
}
.contact__text{
    display: inline-block;
    margin-bottom: var(--mb-2);
}
.contact__inputs{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    column-gap: 1rem;
}
.contact__input{
    width: 100%;
    padding: .8rem;
    outline: none;
    border: 1.5px solid var(--dark-color);
    font-size: var(--normal-font-size);
    margin-bottom: var(--mb-4);
    border-radius: .5rem;
}
.contact__button{
    display: block;
    background-color: var(--first-color);
    color: var(--white-color);
    padding: .75rem 2.5rem;
    margin-left: auto;
    border-radius: .5rem;
    border: none;
    outline: none;
    font-size: var(--normal-font-size);
    cursor: pointer;
}

/* ===== FOOTER=====*/
.footer{
    background-color: #CD5555;
}
.footer__container{
    row-gap: 2rem;
}
.footer__title{
    font-size: 40px;
    color: var(--white-color);
    margin-bottom: var(--mb-2);
}
.footer__link{
    padding: .25rem 0;
}
.footer__link:hover{
    color: var(--first-color);
}
.footer__social{
    font-size: 55px;
    margin-right: var(--mb-1);

}
.footer__social:hover{
    color: var(--first-color);
}

/* ===== MEDIA QUERIES =====*/
/* For small devices */
@media  screen and (max-width: 320px) {
  .home__img {
    width: 230px;
  }
}

@media  screen and (min-width: 768px){
    body{
        margin: 0;
    }
    .section{
        padding-top: 4rem;
    }
    .section-title{
        margin-bottom: 3rem;
    }
    .section-title::after{
        width: 64px;
        top: 3rem;
    }

    .nav{
        height: calc(var(--header-height) + 1rem);
    }
    .nav__list{
        display: flex;
    }
    .nav__item{
        margin-left: var(--mb-4);
        margin-bottom: 0;
    }
    .nav__toggle{
        display: none;
    }
    .nav__link{
        color: var(--white-color);
    }
    .nav__link:hover{
        color: var(--white-color);
    }
    .active::after{
        background-color: var(--white-color);
    }

    .home__container{
        height: 100vh;
        grid-template-rows: 1.7fr 1fr;
        row-gap: 0;
    }
    .home__img{
        width: 524px;
        right: 10%;
    }

    .about__container{
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
        text-align: initial;
        padding: 4rem 0;
    }
    .about__img{
        width: 200px;
        height: 200px;
    }
    .about__img img{
        width: 165px;
    }

    .skills__container{
        grid-template-columns: repeat(2, 1fr);
        align-items: center;
    }

    .portfolio__container{
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        column-gap: 2rem;
    }

    .contact__container{
        grid-template-columns: repeat(2, 1fr);
        justify-items: center;
    }
    .contact__form{
        width: 380px;
    }

    .footer__container{
        grid-template-columns: repeat(3, 1fr);
        justify-items: center;
    }
}

@media  screen and (min-width: 1024px){
    .bd-grid{
        margin-left: auto;
        margin-right: auto;
    }
}

/* For tall screens on mobiles y desktop*/
@media  screen and (min-height: 721px) {
    .home__container {
        height: 640px;
    }
    .home__img {
        width: 500px;
        right: 24%;
    }
}

</style>
</head>

<body>
        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Kevin's Portfolio</title>
    
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Kevin Pura</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#dream" class="nav__link">CS 202</a></li>
                        <li class="nav__item"><a href="#visit" class="nav__link">CS 405</a></li>
                        <li class="nav__item"><a href="#years" class="nav__link">6 Years From Now</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <h1 class="home__title"><span> I'm <br> Kevin Pura</span></h1>

                    <img src="assets/img/Kevin.png" alt="" class="home__img">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section" id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                <section class="dream section" id="dream">
                    
                        <h2 class="about__subtitle">I'm Kevin Pura</h2>
                        <span class="about__profession">Programmer / Editor / Videographer</span>
                        <p class="about__text">I am Kevin, I'm a very happy go lucky type of person
that doesn't really care too much about everything, unless it's about
YouTube. My hobbies is reading when times get tough, but in the current
state of my learning I haven't got into much reading lately, I enjoy playing
different types of genres of MOBA, RPG, MMORPG. Basically give me a game and
time I'll be good at playing it. I like sleeping, medidating, thinking of
what it is to be a person, and I dislike many things but I don't tend to
hate it. I just dislike it.</p>
        
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="dream section" id="dream">
                <h2 class="section-title">CS 202</h2>

               <div class="skills__container bd-grid">
                        <p class="about__text">Concurrency</p>
                    </div> 

                    <div class="skills__container bd-grid">
                    <div class="skills__box">
                        <p class="about__text">Multiple calculations are being performed at the same time, which is referred to as concurrency. Whether we like it or not, concurrency is there in modern programming: several machines connected in a network. One computer can run several apps. Computers with many processors (today, often multiple processor cores on a single chip).</p>
                    </div> 
                   </section>

                   <!--===== PORTFOLIO =====-->
                   <section class="visit section" id="visit">
                <h2 class="section-title">CS 405</h2>

               <div class="skills__container bd-grid">
                        <p class="about__text">Laravel: Views</p>
                    </div> 

                    <div class="skills__container bd-grid">
                    <div class="skills__box">
                        <p class="about__text">Views are a Laravel method that separates the controller and domain logic from the presentation logic. They include the html code required by your application. Resources/views is the location of the views folder in the resources folder.</p>
                    </div> 
                   </section>

            <!--===== CONTACT =====-->
            <section class="years section" id="years">
                <h2 class="section-title">6 Years From Now</h2>

                <div class="skills__container bd-grid">
                <div class="skills__box">
                <p class="about__text">I can see myself in 6 years, making content on YouTube. Making people happy
with every post I do, making them smile even for a short amount of time.
Overall creating amazing content that will inspire people to be more creative
and open to what the future holds for them.</p>
</div>
                          </div>
                      </form>
                </div>
            </section>
        </main>S

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\My-Laravel-Personal-Webpage-main\resources\views/pages/home.blade.php ENDPATH**/ ?>