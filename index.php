<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo-container">
                <div class="logo">
                    <img src="./images/logo.svg">
                </div>
            </div>
            <ul class="nav-links">
                <li><a class="nav-link" href="#">HOME</a></li>
                <li><a class="nav-link" href="#">CONTACT US</a></li>
                <li><a class="nav-link" href="#">ABOUT US</a></li>
                <li><a class="nav-link" href="#">NOTIFICATION</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="slide-container">
            <div class="mySlides fade">
                <img src="./images/demo-1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="./images/demo-2.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="./images/demo-3.jpg" style="width:100%">
            </div>

            <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
            <button class="next" onclick="plusSlides(1)">&#10095;</button>
        </div>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>
    </main>
</body>

</html>