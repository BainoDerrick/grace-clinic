<!-- 1. HERO SECTION: Split Layout with Trust Badges -->
<section class="relative overflow-hidden bg-white py-12 lg:py-20">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
        <div>
            <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                <span class="relative flex h-3 w-3">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-600"></span>
                </span>
                Now Accepting New Patients
            </div>
            <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1] mb-6">
                Good Health <span class="text-blue-600">Is Our Commitment.</span>
            </h1>
            <p class="text-lg text-slate-600 mb-10 leading-relaxed max-w-lg">
                Experience the best and affordable healthcare around Kampala with a personal touch. Our specialists use medical technology to keep you and your family healthy.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="https://wa.me/256772610271" class="bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold shadow-xl shadow-blue-200 hover:bg-blue-700 transition-all flex items-center justify-center gap-2">
                    <i class="fab fa-whatsapp text-xl"></i> Book Appointment
                </a>
                <a href="<?= base_url('services') ?>" class="bg-white text-slate-700 border border-slate-200 px-8 py-4 rounded-2xl font-bold hover:bg-slate-50 transition-all text-center">
                    Explore Services
                </a>
            </div>
            
            <!-- Trust Stats -->
            <div class="mt-12 pt-8 border-t border-slate-100 grid grid-cols-3 gap-4">
                <div>
                    <span class="block text-2xl font-bold text-slate-900">500+</span>
                    <span class="text-sm text-slate-500">Patients Saved</span>
                </div>
                <div>
                    <span class="block text-2xl font-bold text-slate-900">2</span>
                    <span class="text-sm text-slate-500">Doctors</span>
                </div>
                <div>
                    <span class="block text-2xl font-bold text-slate-900">Business Hours</span>
                    <span class="text-sm text-slate-500">Support</span>
                </div>
            </div>
        </div>

        <!-- Hero Image Side -->
        <div class="relative">
            <div class="relative rounded-[2rem] overflow-hidden shadow-2xl">
                <img src="<?= base_url('assets/images/lab.jpeg') ?>" alt="Doctor" class="w-full h-full object-cover">
            </div>
            <!-- Floating Card -->
            <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-2xl shadow-xl border border-slate-50 hidden md:block animate-bounce-slow">
                <div class="flex items-center gap-4">
                    <div class="bg-green-100 p-3 rounded-xl text-green-600">
                        <i class="fa-solid fa-check-double text-xl"></i>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-slate-900">Ministry Certified</p>
                        <p class="text-xs text-slate-500">Standard Healthcare 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. SERVICES: Modern Bento Grid Layout -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-5xl font-bold text-slate-900 mb-4">Our Medical Expertise</h2>
            <p class="text-slate-500">Specialized departments designed for your recovery.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Large Card -->
            <div class="md:col-span-2 md:row-span-2 bg-blue-600 rounded-[2rem] p-10 text-white relative overflow-hidden group">
                <i class="fa-solid fa-heart-pulse text-8xl absolute -right-4 -bottom-4 opacity-10 group-hover:scale-110 transition-transform"></i>
                <h3 class="text-3xl font-bold mb-4">Minor Surgery</h3>
                <p class="mb-8 opacity-80 max-w-xs">We provide safe and affordable minor surgical procedures.</p>
                <a href="<?= base_url('services'); ?>" class="inline-flex items-center gap-2 bg-white text-blue-600 px-6 py-3 rounded-xl font-bold hover:bg-blue-50 transition-colors">
                    Learn More <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Small Card 1 -->
            <div class="md:col-span-2 bg-white rounded-[2rem] p-8 border border-slate-100 shadow-sm hover:shadow-md transition-all group">
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">Postnatal Care</h3>
                        <p class="text-slate-500">We offer compassionate postnatal care services to support new mothers with recovery, breastfeeding guidance, and newborn health checks after delivery.</p>
                    </div>
                    <div class="bg-orange-100 text-orange-600 p-4 rounded-2xl">
                        <i class="fa-solid fa-baby text-2xl"></i>
                    </div>
                </div>
            </div>

            <!-- Small Card 2 -->
            <div class="bg-white rounded-[2rem] p-8 border border-slate-100 shadow-sm hover:shadow-md transition-all">
                <div class="bg-blue-100 text-blue-600 w-12 h-12 flex items-center justify-center rounded-xl mb-4">
                    <i class="fa-solid fa-microscope"></i>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">Laboratory</h3>
                <p class="text-sm text-slate-500">Fast and accurate test results.</p>
            </div>

            <!-- Small Card 3 -->
            <div class="bg-white rounded-[2rem] p-8 border border-slate-100 shadow-sm hover:shadow-md transition-all">
                <div class="bg-purple-100 text-purple-600 w-12 h-12 flex items-center justify-center rounded-xl mb-4">
                    <i class="fa-solid fa-hands-helping"></i>
                </div>
                <h3 class="font-bold text-slate-900 mb-2">HIV Counselling</h3>
                <p class="text-sm text-slate-500">Professional support and guidance for those living with HIV.</p>
            </div>
        </div>
    </div>
</section>

<!-- 3. PROCESS SECTION: "How it Works" -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-bold text-slate-900 mb-8 leading-tight">Getting Care at Grace Medical Clinic <br>is Simple.</h2>
                <div class="space-y-8">
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-slate-900 text-white rounded-full flex items-center justify-center font-bold">1</div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Book Online or WhatsApp</h4>
                            <p class="text-slate-500 text-sm">Pick a time that works for you without the long queues.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold">2</div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Meet Your Specialist</h4>
                            <p class="text-slate-500 text-sm">Consult with doctors in a comfortable environment.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="flex-shrink-0 w-12 h-12 bg-slate-900 text-white rounded-full flex items-center justify-center font-bold">3</div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Start Your Recovery</h4>
                            <p class="text-slate-500 text-sm">Follow-up care and digital prescriptions sent to your phone.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-slate-100 rounded-[3rem] p-4">
                <img src="<?= base_url('assets/images/care.jpeg') ?>" class="rounded-[2.5rem] shadow-lg" alt="Patient care">
            </div>
        </div>
    </div>
</section>

<!-- 4. TESTIMONIAL: Simple & High Contrast -->
<section class="py-20 bg-slate-900 text-white overflow-hidden relative">
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <div class="text-yellow-400 mb-6 flex justify-center gap-1">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
        </div>
        <h2 class="text-2xl lg:text-4xl font-medium italic leading-relaxed mb-10">
            "The doctors at Grace Medical Clinic are exceptional. They took their time to explain my diagnosis and the treatment was very effective. Highly recommend their laboratory services!"
        </h2>
        <div class="flex items-center justify-center gap-4">
            <div class="text-left">
                <p class="font-bold">Bainomujuni Daphine</p>
                <p class="text-slate-400 text-sm">Student</p>
            </div>
        </div>
    </div>
    <!-- Decor -->
    <div class="absolute top-0 left-0 w-64 h-64 bg-blue-600 blur-[120px] opacity-20"></div>
</section>

<!-- 5. FINAL CTA -->
<section class="py-20 px-6">
    <div class="max-w-5xl mx-auto bg-blue-600 rounded-[3rem] p-12 text-center text-white relative overflow-hidden">
        <h2 class="text-3xl lg:text-5xl font-bold mb-6">Ready to prioritize your health?</h2>
        <p class="mb-10 opacity-80 text-lg">Contact us today for an appointment or emergency consultation.</p>
        <div class="flex flex-wrap justify-center gap-4">
             <a href="tel:+256756836614" class="bg-white text-blue-600 px-8 py-4 rounded-2xl font-bold hover:bg-slate-100 transition-all flex items-center gap-2">
                <i class="fa-solid fa-phone"></i> Call Emergency
            </a>
            <a href="https://wa.me/256772610271" class="bg-blue-900 text-white px-8 py-4 rounded-2xl font-bold hover:bg-blue-950 transition-all flex items-center gap-2">
                <i class="fab fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>