
        <footer id="footer" class="footer">
            <div class="bg">
                <div class="bg--model-01"></div>
                <img loading="lazy" src="./assets/img/bg-05.jpg" alt="
                http://www.freepik.com Designed by pikisuperstar / Freepik
                " class="bg--footer">
            </div>
            <div class="card">
                <h3 class="title text-light">kirim email dan dapatkan info serta promo menarik
                    lainnya secara up
                    to date</h3>
                <div class="card">
                    <p class="email text-light">email</p>
                    <form action="send.php" method="post">
                        <div class="card--internal">
                            <input class="input" type="email" name="message" placeholder="yourmail@gmail.com">
                            <button type="submit" name="send" class="button">kirim</button>
                        </div>
                    </form>
                </div>
                <div class="card">
                    <h3 class="title text-light">kontak dan social media</h3>
                    <div class="card--contact">
                        <a href="<?= $whatsappP;?>" class="icon">
                            <img src="./assets/img/whatsapp.png" alt="kontak-whatsapp">
                        </a>
                        <a href="" class="icon">
                            <img src="./assets/img/instagram.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="card">
                    <small class="copyright center text-light">2022 &copy; nctrn.dev All Right Reserved</small>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>