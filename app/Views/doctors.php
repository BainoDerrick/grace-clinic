<!-- 1. HEADER SECTION -->
<section class="relative bg-slate-900 py-20 overflow-hidden">
    <!-- Background Glow Effect -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600 blur-[150px] opacity-20"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-500 blur-[120px] opacity-10"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
        <span class="text-blue-400 font-bold tracking-widest uppercase text-sm">Expert Team</span>
        <h1 class="text-4xl lg:text-6xl font-extrabold text-white mt-4 mb-6">Meet Our <span class="text-blue-500">Doctors</span></h1>
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
                        
                        <img src="<?= base_url('assets/images/grace.png') ?>" alt="Dr. Grace" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        
                        <!-- Social/Quick Info Overlay -->
                        <div class="absolute bottom-6 left-0 right-0 text-center z-20 translate-y-10 group-hover:translate-y-0 transition-transform duration-500 opacity-0 group-hover:opacity-100">
                            <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">Lead Doctor</span>
                        </div>
                    </div>
                    
                    <div class="p-8 text-center">
                        <h3 class="text-2xl font-bold text-slate-900 mb-1">Dr. Grace</h3>
                        <p class="text-blue-600 font-medium mb-4 italic">Medical Director & General Practitioner</p>
                        
                        <div class="w-16 h-1 bg-blue-100 mx-auto mb-6 rounded-full"></div>
                        
                        <p class="text-slate-500 mb-8 leading-relaxed">
                            With over 10 years of experience, Dr. Grace specializes in family medicine and maternal healthcare, ensuring every patient receives personalized attention.
                        </p>
                        
                        <a href="https://wa.me/256772610271?text=Hello%20Grace%20Medical%20Clinic%2C%20I%20would%20like%20to%20book%20an%20appointment%20specifically%20with%20Dr.%20Grace." 
                           class="inline-flex items-center justify-center w-full py-4 bg-slate-900 text-white rounded-2xl font-bold hover:bg-blue-600 transition-colors gap-2">
                            <i class="fa-solid fa-calendar-check"></i> Book Appointment
                        </a>
                    </div>
                </div>

                <!-- Provision for Doctor 2 (Hidden or Placeholder) -->
                <!-- You can uncomment this when you have a second doctor -->
                <!-- 
                <div class="bg-slate-100/50 rounded-[2.5rem] border-2 border-dashed border-slate-200 flex flex-col items-center justify-center p-12 text-center">
                    <div class="w-20 h-20 bg-slate-200 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-user-plus text-slate-400 text-2xl"></i>
                    </div>
                    <p class="text-slate-400 font-medium">New specialist joining soon</p>
                </div> 
                -->

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
                <a href="https://wa.me/256772610271?text=Hello%20Grace%20Medical%20Clinic%2C%20I%20would%20like%20to%20book%20an%20appointment%20specifically%20with%20Dr.%20Grace." class="bg-blue-900 text-white px-8 py-4 rounded-2xl font-bold hover:bg-blue-950 transition-all flex items-center gap-2">
                    <i class="fab fa-whatsapp"></i> Inquiry via WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>