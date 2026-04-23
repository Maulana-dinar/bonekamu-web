<style>
    .foooter {
    background-color: #c6914667;
    color: #fff;
    padding: 60px 80px 20px;
    font-family: 'Poppins', sans-serif;
    margin-top: 15vh;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    gap: 60px;
}

.footer-left {
    max-width: 300px;
}

.logo {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 600;
    font-size: 18px;
    margin-bottom: 15px;
}

.logo img {
    width: 40px; /* ukuran logo */
    height: auto;
}

.footer-left p {
    font-size: 13px;
    color: #000000;
    line-height: 1.6;
}

.socials {
    margin-top: 15px;
}

.socials a {
    margin-right: 10px;
}

.circle {
    display: inline-block;
    width: 30px;
    height: 30px;
    background: #fff;
    border-radius: 50%;
}

.footer-middle h4,
.footer-right h4 {
    font-size: 16px;
    margin-bottom: 15px;
}

.footer-middle ul,
.footer-right ul {
    list-style: none;
    padding: 0;
    font-size: 13px;
    color: #000000;
}

.footer-middle li,
.footer-right li {
    margin-bottom: 10px;
}

.footer-bottom {
    text-align: center;
    margin-top: 40px;
    font-size: 12px;
    color: #000000;
}

</style>
<footer class="foooter">
    <div class="footer-container">
        <!-- LEFT -->
        <div class="footer-left">
            <div class="logo">
                <img src="logo.png">
                <span>ASTRON</span>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Ut elit tellus, luctus nec ullamcorper mattis.
            </p>

            <div class="socials">
                <a href="#"><i class="circle"></i></a>
                <a href="#"><i class="circle"></i></a>
                <a href="#"><i class="circle"></i></a>
            </div>
        </div>

        <!-- MIDDLE -->
        <div class="footer-middle">
            <h4>Our Store</h4>
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Service</li>
                <li>Contact</li>
            </ul>
        </div>

        <!-- RIGHT -->
        <div class="footer-right">
            <h4>Get In Touch</h4>
            <ul>
                <li>📍 2433 Oak Ridge Omaha, QA 45065</li>
                <li>📞 207-867-452</li>
                <li>📱 082-245-7253</li>
                <li>✉ support@site.com</li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        Copyright © 2023 astron | Powered by astron
    </div>
</footer>