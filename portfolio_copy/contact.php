<?php 
if($_POST ["submit"]) {
    $recipient="mcornell663@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];
    $mailBody="Name:
        $sender\nEmail:
        $senderEmail\n\n$message";

        mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

        $thankYou="<p>Thank you! Your message has been sent.
        </p>";
}

?> <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Raleway:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel='stylesheet' href='port.css'>

    <title img src="/img/mclogo5.png">Megan Cornell</title>
</head>

<body>
    <nav class=" navbar sticky-top navbar-expand-lg navbar-dark">
        <img class="navbar-brand" src="/img/mcLogo5.png" alt="Megan Cornell Logo" width="80" height="80">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-1">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/resume.html">Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact.html">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact.php">Contact php</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <h1 class="headings">Connect</h1>
        <section id="formWrapper2">
            <div class="formWrapper">
                <?=$thankYou ?>
                <form method="post" action="contact.php">
                    <label>Name:</label>
                    <input name:="sender">
                    <label>Eamil Address:</label>
                    <input name ="senderEmail">
                    <label>Message:</label>
                    <textarea rows="5" cols="20" name="message"> </textarea>
                    <input type="submit" name="submit">
</form>


            
                </div>
            </div>
        </section>
    </main>




    <footer class="footer">
        <p>Megan M.Cornell</p>
        <p>413.535.9082</p>
        <p>mcornell663@gmail.com</p>
        <br>
        <svg id="twitter" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 80 100">

            <g>
                <a id="twitter" xlink:href="https://twitter.com/mcornell08">
                    <path id="twitter"
                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
        </svg>
        </a>
        </g>
        <svg id="IN" xmlns="http://www.w3.org/2000/svg" width="150" height="100" viewBox="0 0 80 100">
            <g>
                <a id="IN" xlink:href="https://www.linkedin.com/in/mcornell-663">
                    <path id="IN"
                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
        </svg>
        </a>
        </g>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="/port.js"></script>
</body>


</html>