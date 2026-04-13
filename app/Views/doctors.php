<!-- 1. HEADER SECTION -->
<section class="relative bg-slate-900 py-20 overflow-hidden">
    <!-- Background Glow Effect -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600 blur-[150px] opacity-20"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-500 blur-[120px] opacity-10"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
        <span class="text-blue-400 font-bold tracking-widest uppercase text-sm">Expert Team</span>
        <h1 class="text-4xl lg:text-6xl font-extrabold text-white mt-4 mb-6">Meet Our <span class="text-blue-500">Specialists</span></h1>
        <p class="text-slate-400 max-w-2xl mx-auto text-lg">
            Our team of dedicated medical professionals is led by experienced experts committed to your family's health and wellbeing.
        </p>
    </div>
</section>

<!-- 2. DOCTORS GRID SECTION -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6">
        
        <!-- Centering the single doctor for now; when you add more, the grid will handle it -->
        <div class="flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 w-full">
                
                <!-- Doctor 1: Dr. Grace -->
                <div class="bg-white rounded-[2.5rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 group">
                    <div class="relative h-80 overflow-hidden">
                        <!-- Background decoration behind doctor -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>
                        
                        <img src="<?= base_url('assets/images/sanyu.jpeg') ?>" alt="Tubenawe Edrine" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        
                        <!-- Social/Quick Info Overlay -->
                        <div class="absolute bottom-6 left-0 right-0 text-center z-20 translate-y-10 group-hover:translate-y-0 transition-transform duration-500 opacity-0 group-hover:opacity-100">
                            <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">Senior Nursing Officer</span>
                        </div>
                    </div>
                    
                    <div class="p-8 text-center">
                        <h3 class="text-2xl font-bold text-slate-900 mb-1">Tubenawe Edrine</h3>
                        <p class="text-blue-600 font-medium mb-4 italic">Senior Nursing Officer (SNO)</p>
                        
                        <div class="w-16 h-1 bg-blue-100 mx-auto mb-6 rounded-full"></div>
                        
                        <p class="text-slate-500 mb-8 leading-relaxed">
                            With over 10 years of experience, Tubenawe Edrine specializes in family medicine and maternal healthcare, ensuring every patient receives personalized attention.
                        </p>
                        
                        <a href="https://wa.me/256772610271?text=Hello%20Grace%20Medical%20Clinic%2C%20I%20would%20like%20to%20book%20an%20appointment%20specifically%20with%20Dr.%20Grace." 
                           class="inline-flex items-center justify-center w-full py-4 bg-slate-900 text-white rounded-2xl font-bold hover:bg-blue-600 transition-colors gap-2">
                            <i class="fa-solid fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>

                <!-- Doctor 2 template: update image path, profile details, and description -->
                <div class="bg-white rounded-[2.5rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 group">
                    <div class="relative h-80 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>

                        <img src="<?= base_url('assets/images/max.jpeg') ?>" alt="Doctor 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">

                        <div class="absolute bottom-6 left-0 right-0 text-center z-20 translate-y-10 group-hover:translate-y-0 transition-transform duration-500 opacity-0 group-hover:opacity-100">
                            <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">Medical Laboratory Assistant</span>
                        </div>
                    </div>

                    <div class="p-8 text-center">
                        <h3 class="text-2xl font-bold text-slate-900 mb-1">Kawalya Maxwell</h3>
                        <p class="text-blue-600 font-medium mb-4 italic">Medical Laboratory Assistant (MLA)</p>

                        <div class="w-16 h-1 bg-blue-100 mx-auto mb-6 rounded-full"></div>

                        <p class="text-slate-500 mb-8 leading-relaxed">
                            With over 5 years of dedicated experience in diagnostic excellence, Kawalya Maxwell is a vital part of the clinical team at Grace Medical Clinic. Registered with the Allied Health Professionals Council (AHPC), they emphasize laboratory safety, and high-quality results management.
                        </p>

                        <a href="https://wa.me/256745508089?text=Hello%20Grace%20Medical%20Clinic%2C%20I%20would%20like%20to%20book%20an%20appointment%20specifically%20with%20Mr.%20Kawalya%20Maxwell." class="inline-flex items-center justify-center w-full py-4 bg-slate-900 text-white rounded-2xl font-bold hover:bg-blue-600 transition-colors gap-2">
                            <i class="fa-solid fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>

                <!-- Doctor 3: No image yet - using emoji placeholder -->
                <div class="bg-white rounded-[2.5rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl transition-all duration-500 group">
                    <div class="relative h-80 overflow-hidden bg-gradient-to-br from-blue-50 to-slate-100 flex items-center justify-center">
                        <!-- Background decoration -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-10"></div>
                        
                        <!-- Emoji Placeholder - Replace with image when available -->
                        <!-- TO REPLACE: Delete the div below and uncomment the img tag, then update src path -->
                        <div class="text-9xl z-20">👨‍⚕️</div>
                        
                        <!-- Uncomment this img tag when you have the doctor image, then delete the emoji div above -->
                        <!-- <img src="<?= base_url('assets/images/doctor-3.jpg') ?>" alt="Doctor 3 Name" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"> -->
                        
                        <!-- Social/Quick Info Overlay -->
                        <div class="absolute bottom-6 left-0 right-0 text-center z-20 translate-y-10 group-hover:translate-y-0 transition-transform duration-500 opacity-0 group-hover:opacity-100">
                            <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">Medical Officer & Public Health Specialist</span>
                        </div>
                    </div>
                    
                    <div class="p-8 text-center">
                        <h3 class="text-2xl font-bold text-slate-900 mb-1">Dr. Ayebare Richard</h3>
                        <p class="text-blue-600 font-medium mb-4 italic">Medical Officer & Public Health Specialist</p>
                        
                        <div class="w-16 h-1 bg-blue-100 mx-auto mb-6 rounded-full"></div>
                        
                        <p class="text-slate-500 mb-8 leading-relaxed">
                            Dr. Ayebare Richard is a highly accomplished Medical Officer with over 10 years of clinical and administrative experience. A proud alumnus of Makerere University, he uniquely combines surgical and medical expertise with a Master’s specialization in Health Promotion. Dr. Ayebare is dedicated to bridging the gap between clinical treatment and community-wide disease prevention, ensuring every patient at Grace Medical Clinic receives holistic, evidence-based care.
                        </p>
                        
                        <a href="https://wa.me/256756836614?text=Hello%20Grace%20Medical%20Clinic%2C%20I%20would%20like%20to%20book%20an%20appointment%20specifically%20with%20Dr.%20Ayebare%20Richard." 
                           class="inline-flex items-center justify-center w-full py-4 bg-slate-900 text-white rounded-2xl font-bold hover:bg-blue-600 transition-colors gap-2">
                            <i class="fa-solid fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- 3. FINAL CTA -->
<section class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-6">
        <div class="bg-blue-600 rounded-[3rem] p-12 text-center text-white shadow-2xl shadow-blue-200">
            <h2 class="text-3xl lg:text-5xl font-bold mb-6">Want to Book an Appointment?</h2>
            <p class="mb-10 opacity-90 text-lg">We are always looking to provide the best care at Grace Medical Clinic.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="tel:+256756836614" class="bg-white text-blue-600 px-8 py-4 rounded-2xl font-bold hover:bg-slate-100 transition-all">
                    Call Help Desk
                </a>
                <a href="https://wa.me/256772610271?text=Hello%20Grace%20Medical%20Clinic%2C%20I%20would%20like%20to%20book%20an%20appointment%20specifically%20with%20Dr.%20Edrine." class="bg-blue-900 text-white px-8 py-4 rounded-2xl font-bold hover:bg-blue-950 transition-all flex items-center gap-2">
                    <i class="fab fa-whatsapp"></i> Inquiry via WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>