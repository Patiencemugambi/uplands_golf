<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uplands Golf</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
    <?php include 'header.html'; ?>

        <section class="hero">
            <div class="herotext">
            <h2>World Class Golf</h2>
            <p>Designed by famed Golf Course Architect David Johnson. <br> Uplands Golf Course offers a range of <br> challenging holes that you're sure to love.</p>
            </div>
        </section>

        <section class="herodivs">
            <div>
                <h2>Explore</h2>
                <p>Learn about Uplands</p>
            </div>
            <div>
                <h2>Learn</h2>
                <p>Classes and Coaches</p>
            </div>
            <div>
                <h2>Compete</h2>
                <p>View upcoming events</p>
            </div>
        </section>

        <section class="hero2">
            <img src="images\golfclubs.jpg" alt="" height="40px" width="40px">
            <h2>Welcome to Uplands Golf</h2>
            <p>Experience the finest golf course, designed for players of all skill levels. Join us for an unforgettable round.</p>
        </section>

        <section id="testimonials" class="testimonials">
            <h2>Testimonials</h2>
            <p>Ready to experience a world-class golf course that caters to all skill levels? Hear what our satisfied customers are raving about! <br> Book your tee time today and discover why golfers love playing at Uplands!</p>
            <div>
            <div class="reviews">
                <p>"Uplands Golf Course provided the perfect challenge for my game. The course was beautifully maintained and the staff was incredibly friendly and helpful. I highly recommend it to golfers of all skill levels!"</p>
                <img src="images\njatikimathi.jfif" alt="Njati Kimathi" height="100px" width="100px">
                <p>Njati Kimathi</p>
            </div>
            <div class="reviews">
                <p>"The atmosphere at Uplands Golf Course was simply amazing. The views were breathtaking, and the course design was both creative and challenging. I had a fantastic time playing here, and I'll definitely be back!"</p>
                <img src="images\kananamakena.jpg" alt="Kanana Makena" height="100px" width="100px">
                <p>Kanana Makena</p>
            </div>
            <div class="reviews">
                <p>"Uplands Golf Course is the perfect place to relax and enjoy a round of golf with friends. The course is not too difficult, but it's still challenging enough to keep things interesting. I can't wait to come back again!"</p>
                <img src="images\merikebu.jfif" alt="Mutula Merikebu" height="100px" width="100px">
                <p>Mutula Merikebu</p>
            </div>
            </div>
        </section>
        
        <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1549729992416!2d37.07978877404415!3d-1.0448106354079427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4ef517d2dd15%3A0x8e7d07383daf5916!2sMount%20Kenya%20University!5e0!3m2!1sen!2ske!4v1719997178660!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>
