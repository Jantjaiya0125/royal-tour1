<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ROYAL TOUR</title>
    <link rel="stylesheet" href="urembo.css">
</head>
<body>
    <nav class="navbar">
        <h1 class="logo">ROYAL TOUR</h1>
        <ul class="nav-links">
            <li class="active"><a href="#"></a>Home</li>
            <li><a href="#"></a>Tours</li>
            <li><a href="#"></a>Explore</li>
            <li><a href="#"></a>About</li>
            <li class="ctn"><a  href="#">Contact</a></li>
        </ul>
        <img src="menu.jpg" alt="" class="menu-button">
    </nav>
    <header>
        <div class="header-content">
            <h2>Explore  The Colourful Tanzania</h2>
            <div class="line"></div>
            <h1>A WONDERFUL GIFT</h1>
            <a href="#" class="ctn">Learn More</a>
        </div>
    </header>
    <!--Events-->
    <section class="events">
        <div class="title">
            <h1>Upcoming Events</h1>
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col">
                <img src="nature.jpg" alt="">
                <h4>Serengeti Camp</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Ratione, reprehenderit. Nam iure dolorem ut aliquid molestias 
                     nisi iusto deleniti ipsam! Numquam vel earum illo repellendus
                      reprehenderit esse laborum repellat quidem.</p>
                      <a href="#" class="ctn">Learn More</a>
            </div>
            <div class="col">
                <img src="nature.jpg" alt="">
                <h4>Walking Holidays</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Ratione, reprehenderit. Nam iure dolorem ut aliquid molestias 
                     nisi iusto deleniti ipsam! Numquam vel earum illo repellendus
                      reprehenderit esse laborum repellat quidem.</p>
                      <a href="#" class="ctn">Learn More</a>
            </div>
        </div>
    </section>
    <section class="explore">
<div class="explore-content">
    <h1>EXPLORE THE NATURE OF TANZANIA</h1>
    <div class="line"></div>
    <p>Lorem ipsum dolor sit amet, 
        consectetur adipisicing elit.
         Enim voluptas sint exercitationem eius quisquam.
        Laudantium veniam voluptate, a esse omnis error? Saepe 
        excepturi aperiam harum sit non quasi inventore temporibus.</p>
        <a href="#" class="ctn">Learn More</a>
</div>
    </section>
    <section class="tours">
        <div class="row">
            <div class="col content-col">
                <h1>UPCOMING TOURS & DESTINATION</h1>
                <div class="line"></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum ex aliquam suscipit, voluptatum fuga incidunt porro expedita soluta sint vel, at praesentium laudantium vero laboriosam pariatur molestiae. Nostrum, quo ratione.
                </p>
                <a href="#" class="ctn"Learn More></a>
            </div>
            <div class="col image-col">
                <div class="image-gallery">
                    <img src="camera.jpg" alt="">
                    <img src="camera.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <div>
        <center><h1>VIDEOS</h1></center>
        <video width="100%" height="240" controls>
            <source src="walk.mp4" type="video/mp4">
          Your browser does not support the video tag.
          </video>
    </div>
    <section class="footer">
        <p>Serengeti Hotel,Arusha-Tanzania| Phone +255-753-930|Email:serengeti@gmail.com</p>
        <p>Copyright&copy Outdoor Royaltour</p>
    </section>
    <nav>
        <div>
            <h1>Group Assignment</h1>
            <h2>Member</h2>
            <table border="1">
                <tr>
                    <td>Khalid Juma Kassim: IMC/BAT/2124459</td>
                </tr>
                <tr>
                    <td>Halima Hija Boma:  IMC/BAIT/2114332</td>
                </tr>
                <tr>
                    <td>Edger Edson: IMC/BAIT/2124236</td>
                </tr>
                <tr>
                    <td>Abdulrazack Said Hamis: IMC/BAIT/2124197</td>
                </tr>
            </table>
        </div>
    </nav>
    <script>
        const menu-button=document.querySelector('menu-button')
        const navlinks=document.querySelector('nav-links')

        menu-button.addEventListener('click',()=>{
           navlinks.classList.toggle(mobile-menu) 
        })
    </script>
</body>
</html>