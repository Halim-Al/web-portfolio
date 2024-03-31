<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halim Al</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
<link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css">
    <link rel="stylesheet" href="style.css">

    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <nav>
            <div class="brand">Halim Al</div>

            
            <div class="navmobile">
                <span></span>
                <span></span>
                <span></span>
            </div>


            <ul class="navbar">
            <li><a href="">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Project">Project</a></li>
            <li><a href="#Contact">Contact</a></li>
            <button>Download Cv</button>
            </ul>

        
            
        
        </nav>
    </header>

    <main>
        <section class="Hero">
            <div class="titlelayout">
                <p class="hello">Hello Everyone</p>
                <h1 class="title">I'm <span>Halim Al</span> as Back End Developer</h1>
                <p class="desc">i can help you to develop website as you want 100%, here my cv below</p>
                <button>Download Cv</button>
               </div>
               <div class="imglayout">
                  
                       <div><img src="img/Halimbg.png" alt=""></div>
                      
                  
                  
                 
               </div>

        </section>

        <section class="About" id="About">
            <div class="Abouttext">
            <h1>About me

                <hr>
            </h1>
            
            <p>"Hello, I'm Halim Al, a 20-year-old student currently pursuing a degree in Informatic Engineering at the University of Bina Insan. My passion for coding and technology has led me to specialize in back-end development. I've dedicated myself to crafting robust, efficient, and scalable solutions that power the backbone of web applications. With a keen eye for design and a drive to deliver outstanding user experiences, I've become a skilled back-end developer, continuously expanding my knowledge and expertise in this dynamic field."</p>
        </div>
            <div class="Skills">
            <h2>Skills & Language</h2>
            <div class="Language">
                <div><img src="img/html.png" alt="Html"></div>
                <div><img style="width: 110px;" src="img/css.png" alt="Css"></div>
                <div><img src="img/javascript.png" alt="Javascript"></div>
                <div><img src="img/PHP-logo.svg.png" style="width: 200px;" class="php"  alt="PHP"></div>
                <div><img src="img/1200px-Laravel.svg.png" alt="React"></div>
                <div><img src="img/sass.png" alt="Sass"></div>
                
                
            </div>
        </div>
        </section>


        <section class="Project" id="Project">
            <h1> My Project
                <hr>
               
            </h1>
            <h2>Click the image below to see my project</h2>
            <div class="myproject">
                <div><a href=""><img src="img/img1.jpg" alt=""></a><p>Project 1</p></div>
                <div><a href=""><img src="img/img1.jpg" alt=""></a><p>Project 2</p></div>
                <div><a href=""><img src="img/img1.jpg" alt=""></a><p>Project 3</p></div>
                <div><a href=""><img src="img/img1.jpg" alt=""></a><p>Project 4</p></div>
                
                
               
            </div>
        </section>


        <section class="Contact  " id="Contact">
            <h1>Get in touch with me</h1>
           

        <div class="Contact-container">

         

           
               <form action="mail.php" method="POST">

                <input type="text" placeholder="Your Name" name="name" required>
                <input type="email" name="email" id="" placeholder="Your Email" required>
                <textarea name="message" id="" cols="30" rows="10" placeholder="type your message.." required></textarea>
                <button type="submit" name="submit"><i class="fa-regular fa-paper-plane"></i> send message</button>
               </form>

              
          
        </div>
       
       
            <div class="brand">
            <p><a href="https://www.facebook.com/halim.al.37625"><i class="fa-brands fa-facebook fa-2xl"  ></i></a></p>
            <p><a href=" https://wa.me/6283174237168"><i class="fa-brands fa-whatsapp fa-2xl"></i></a></p>
            <p><a href="https://www.instagram.com/halim_al2/?hl=id"><i class="fa-brands fa-instagram fa-2xl"></i></a></p>
            <p><a href=""></a><i class="fa-brands fa-linkedin fa-2xl"></i></p>
            <p><a href="https://github.com/Halim-Al"><i class="fa-brands fa-github fa-2xl"></i></a></p>
           </div>

        </section>
      
        

    </main>

    <script type ="text/javascript">
        window.onload = function() {
            what();
            function what(){
                let date = new Date();
                document.getElementById('year').innerHTML = date.getFullYear()
            };
        }
    </script>

    <footer>
        &copycopyright Halim Al <span id="year"></span>
    </footer>

  
</body>
</html>