<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="contact-page">
    <?php include 'header.html'; ?>
    <section class="contacthero">
            <div class="contactherotext">
            <h2>Contact Us</h2>
            </div>
    </section>
    <section class="bgcolor">

    <div class="contactform">
        <form action="form_handler.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    </section>

    <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1549729992416!2d37.07978877404415!3d-1.0448106354079427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4ef517d2dd15%3A0x8e7d07383daf5916!2sMount%20Kenya%20University!5e0!3m2!1sen!2ske!4v1719997178660!5m2!1sen!2ske" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <?php include 'footer.html'; ?>
</body>
</html>
