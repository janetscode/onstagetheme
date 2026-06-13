    <!-- FOOTER -->
    <footer class="site-footer bg-light-blue">
        <div class="container footer-content">
            <div class="footer-logo-col">
                <img src="<?php echo get_template_directory_uri(); ?>/images/onstage_logo_transparent.png" alt="On Stage Logo" class="footer-logo">
            </div>
            <div class="footer-info-col">
                <div class="info-block">
                    <h4>Location</h4>
                    <p>3770 N Main St<br>Fall River, MA 02720<br>(508) 673-4880</p>
                </div>
                <div class="info-block">
                    <h4>Email Us</h4>
                    <p>LindaOnStage@AOL.com</p>
                </div>
            </div>
            <div class="footer-social-col">
                <p class="social-header">Socials</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/OnStageTheatricalProductionsInc"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
                <div class="footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; <?php echo date('Y'); ?> OnStage Theatrical Productions</p>
        </div>
    </footer>

    <!-- Lightbox Modal -->
    <dialog id="imageModal" class="lightbox-dialog">
        <button class="close-lightbox" onclick="document.getElementById('imageModal').close()">&times;</button>
        <button class="lightbox-btn prev-btn" onclick="navigateLightbox(-1)" aria-label="Previous Image"><i
                class="fa-solid fa-chevron-left"></i></button>
        <img id="lightboxImage" src="" alt="Popup Preview">
        <button class="lightbox-btn next-btn" onclick="navigateLightbox(1)" aria-label="Next Image"><i
                class="fa-solid fa-chevron-right"></i></button>
    </dialog>

    <script>
        let currentImagesList = [];
        let currentImageIndex = -1;

        function openLightbox(src) {
            const decodedSrc = decodeURIComponent(src);

            const container = document.querySelector('.gallery-grid');
            if (container) {
                currentImagesList = Array.from(container.querySelectorAll('img')).map(img => img.getAttribute('src'));
                currentImageIndex = currentImagesList.findIndex(imgSrc => decodeURIComponent(imgSrc) === decodedSrc);
            }

            updateLightboxImage();
            document.getElementById('imageModal').showModal();
        }

        function updateLightboxImage() {
            if (currentImageIndex >= 0 && currentImageIndex < currentImagesList.length) {
                document.getElementById('lightboxImage').src = currentImagesList[currentImageIndex];
            }
        }

        function navigateLightbox(direction) {
            if (currentImagesList.length === 0) return;
            currentImageIndex = (currentImageIndex + direction + currentImagesList.length) % currentImagesList.length;
            updateLightboxImage();
        }

        document.getElementById('imageModal').addEventListener('click', function (e) {
            if (e.target === this) {
                this.close();
            }
        });

        document.addEventListener('keydown', function (e) {
            const modal = document.getElementById('imageModal');
            if (modal && modal.open) {
                if (e.key === 'ArrowRight') {
                    navigateLightbox(1);
                } else if (e.key === 'ArrowLeft') {
                    navigateLightbox(-1);
                }
            }
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>
