<!-- 1. HERO / OUR STORY SECTION -->
<section class="py-16 lg:py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <div class="inline-block px-4 py-2 bg-blue-50 text-blue-600 rounded-xl text-sm font-bold mb-6">
                    Established 2012
                </div>
                <h1 class="text-4xl lg:text-6xl font-extrabold text-slate-900 mb-8 leading-tight">
                    Healing with <span class="text-blue-600">Heart</span> & Science.
                </h1>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    Grace Medical Clinic began with a simple vision: to make healthcare accessible to everyone around Kampala. Over the last decade, we have grown from a small consultation room to a full-service medical clinic.
                </p>
                <p class="text-lg text-slate-600 leading-relaxed">
                    We don't just treat symptoms; we care for people. Our approach combines the diagnostic technology with the kind of compassionate attention you’d expect from a professional-run clinic.
                </p>
                
                <!-- Signature/Quote -->
                <div class="mt-10 flex items-center gap-4">
                    <img src="<?= base_url('assets/images/sanyu.jpeg'); ?>" alt="Chief Medical Officer" class="w-16 h-16 rounded-full object-cover border-2 border-blue-100">
                    <div>
                        <p class="text-slate-900 font-bold italic">"Your health is the greatest wealth you can possess."</p>
                        <p class="text-slate-500 text-sm">Tubenawe Edrine , Senior Nursing Officer</p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <!-- Main Image -->
                <div class="rounded-[3rem] overflow-hidden shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-500">
                    <img src="<?= base_url('assets/images/clinic 1.jpeg'); ?>" alt="Our Clinic Exterior" class="w-full h-[500px] object-cover">
                </div>
                <!-- Experience Badge -->
                <div class="absolute -bottom-8 -right-8 bg-blue-600 text-white p-8 rounded-[2rem] shadow-xl">
                    <span class="block text-4xl font-bold">10+</span>
                    <span class="text-sm opacity-80 uppercase tracking-widest">Years of <br>Excellence</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. MISSION & VISION (Bento Style) -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Mission -->
            <div class="bg-blue-600 rounded-[3rem] p-12 text-white relative overflow-hidden group">
                <div class="relative z-10">
                    <div class="w-14 h-14 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-bullseye text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold mb-4">Our Mission</h2>
                    <p class="text-blue-100 text-lg leading-relaxed">
                        To provide professional, affordable, and reliable healthcare services through continuous innovation and a commitment to medical integrity.
                    </p>
                </div>
                <i class="fa-solid fa-hand-holding-medical text-9xl absolute -right-10 -bottom-10 opacity-10 group-hover:scale-110 transition-transform"></i>
            </div>

            <!-- Vision -->
            <div class="bg-white border border-slate-100 rounded-[3rem] p-12 text-slate-900 shadow-sm">
                <div class="w-14 h-14 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fa-solid fa-eye text-2xl"></i>
                </div>
                <h2 class="text-3xl font-bold mb-4">Our Vision</h2>
                <p class="text-slate-500 text-lg leading-relaxed">
                    To be the leading private medical clinic in the Kampala, recognized for exceptional patient care, and medical excellence.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 3. CORE VALUES -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl lg:text-5xl font-bold text-slate-900 mb-4">The Grace Way</h2>
            <p class="text-slate-500 text-lg">Our core values guide every consultation and every procedure we perform.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-10">
            <!-- Value 1 -->
            <div class="text-center p-8 rounded-[2rem] hover:bg-slate-50 transition-colors group">
                <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                    <i class="fa-solid fa-heart-pulse text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Compassion</h3>
                <p class="text-slate-500 text-sm leading-relaxed">We treat every patient like a member of our own family, with dignity and empathy.</p>
            </div>

            <!-- Value 2 -->
            <div class="text-center p-8 rounded-[2rem] hover:bg-slate-50 transition-colors group">
                <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                    <i class="fa-solid fa-microscope text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Excellence</h3>
                <p class="text-slate-500 text-sm leading-relaxed">We maintain the highest standards of medical precision and professional ethics.</p>
            </div>

            <!-- Value 3 -->
            <div class="text-center p-8 rounded-[2rem] hover:bg-slate-50 transition-colors group">
                <div class="w-20 h-20 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                    <i class="fa-solid fa-shield-halved text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Integrity</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Transparency in diagnosis and pricing is at the heart of our service.</p>
            </div>
        </div>
    </div>
</section>

<!-- 4. FACILITY TEASER -->
<section class="py-12 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="bg-slate-900 rounded-[3.5rem] p-10 lg:p-20 overflow-hidden relative">
            <div class="grid lg:grid-cols-2 gap-12 items-center relative z-10">
                <div>
                    <h2 class="text-3xl lg:text-5xl font-bold text-white mb-6">A Healing Environment</h2>
                    <p class="text-slate-400 text-lg mb-8">Our facilities offer a clean, calm, and safe space right in the heart of Kampala, giving you a peaceful retreat where your care and comfort come first.</p>
                    <ul class="space-y-4 mb-10">
                        <li class="flex items-center gap-3 text-slate-300">
                            <i class="fa-solid fa-circle-check text-blue-500"></i> Private Recovery Spaces
                        </li>
                        <li class="flex items-center gap-3 text-slate-300">
                            <i class="fa-solid fa-circle-check text-blue-500"></i> Clean & Safe Procedure Room 
                        </li>
                        <li class="flex items-center gap-3 text-slate-300">
                            <i class="fa-solid fa-circle-check text-blue-500"></i> Best Clinical Laboratory Services around Kampala.
                        </li>
                    </ul>
                    <a href="<?= base_url('doctors'); ?>" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-2xl font-bold hover:bg-blue-700 transition-all">
                        Meet the Specialists
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="<?= base_url('assets/images/env1.jpeg'); ?>" alt="Patient Room" class="rounded-3xl h-64 w-full object-cover">
                    <img src="<?= base_url('assets/images/env2.jpeg'); ?>" alt="Clinic Environment" class="rounded-3xl h-64 w-full object-cover mt-8">
                </div>
            </div>
            <!-- Decorative circle -->
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600 opacity-10 rounded-full blur-[100px]"></div>
        </div>
    </div>
</section>