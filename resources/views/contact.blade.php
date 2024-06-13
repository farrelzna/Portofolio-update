@extends('master')
@section('contact')

<br><br>
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-tittle">Contact Me</h1>
                <p><i class="fa-solid fa-paper-plane"></i>farelizanmaulana@gmail.com</p>
                <p><i class="fa-sharp fa-solid fa-phone"></i>089099999</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100093467893083&mibextid=vk8aRt"><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-twitter-square"></i></a>
                    <a href="https://www.instagram.com/farelzna?igsh=MTY4eW0wNmZxNTlrcw=="><i class="fa-brands fa-instagram"></i></a>
                </div>
                <a href="images/my-cv.pdf" download class="btn btn2">donlowad cv</a>
            </div>
            <div class="contact-right">
                <form action="send.php" method="POST">
                    <input type="hidden" name="_subject" value="Pengiriman baru!">
                    <input type="hidden" name="_autoresponse" value="Terima kasih sudah melihat dan mencoba website ini!">
                    <input type="text" name="Name" placeholder="Your Name" required />
                    <input type="email" name="email" placeholder="Your Email" required />
                    <textarea name="Massage" rows="6" placeholder="Your Massage"></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection