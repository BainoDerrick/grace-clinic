</main> <!-- End of flex-grow section -->

    <footer class="bg-gray-900 text-white py-8 border-t border-gray-800">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <div class="grid md:grid-cols-3 gap-8 mb-6 text-left text-sm text-gray-400">
                <div>
                    <h4 class="text-white font-bold mb-2">Grace Medical Clinic (GMC)</h4>
                    <p>Providing quality healthcare services with compassion and excellence.</p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-2">Quick Links</h4>
                    <ul>
                        <li><a href="<?= base_url('services') ?>" class="hover:text-blue-400">Our Services</a></li>
                        <li><a href="<?= base_url('contact') ?>" class="hover:text-blue-400">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-2">Emergency</h4>
                    <p class="text-blue-400 font-bold text-lg">+256 756 836 614</p>
                    <p class="text-blue-400 font-bold text-lg">+0392961402</p>
                </div>
            </div>
            <p class="border-t border-gray-800 pt-6">
                &copy; <?= date('Y'); ?> Grace Medical Clinic. All Rights Reserved.
            </p>
        </div>
    </footer>
</div> <!-- End #main-wrapper -->

<!-- WhatsApp Button -->
<a href="https://wa.me/256772610271?text=Hello%20I%20would%20like%20to%20book%20an%20appointment" 
   class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- Scripts -->
<script src="<?= base_url('assets/js/main.js'); ?>"></script>
</body>
</html>