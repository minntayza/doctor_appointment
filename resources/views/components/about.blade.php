<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-12 items-center">
            <div class="lg:w-1/2">
                <img class="rounded-2xl shadow-2xl transform hover:scale-105 transition-transform duration-500"
                     src="https://images.unsplash.com/photo-1551601651-2a8555f1a136?fm=jpg&q=60&w=3000"
                     alt="Medical Care">
            </div>

            <div class="lg:w-1/2">
                <span class="text-blue-600 font-semibold uppercase tracking-wider">About Us</span>
                <h2 class="text-4xl font-bold mt-2 mb-6 text-gray-900">
                    Exceptional Medical Care
                    <span class="block text-blue-600">For Your Family</span>
                </h2>
                <p class="text-gray-600 leading-relaxed mb-8">
                    We provide comprehensive healthcare solutions with state-of-the-art facilities and experienced medical professionals.
                    Our commitment to excellence ensures that you receive the best possible care for all your health needs.
                </p>

                <div class="grid grid-cols-2 gap-8">
                    <div class="transform hover:scale-105 transition-all duration-300">
                        <div class="bg-blue-50 rounded-2xl p-6 text-center">
                            <img class="w-16 h-16 mx-auto mb-4" src="https://i.pinimg.com/736x/13/13/8e/13138ee8fdaf68ccc254197fa1099fa8.jpg" alt="Qualified Doctors">
                            <h3 class="font-semibold text-gray-900">Qualified Doctors</h3>
                            <p class="text-blue-600 text-sm">Expert Care</p>
                        </div>
                    </div>
                    <div class="transform hover:scale-105 transition-all duration-300">
                        <div class="bg-blue-50 rounded-2xl p-6 text-center">
                            <img class="w-16 h-16 mx-auto mb-4" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzesDlaVkhJqeDz2a6_Ff3dZRpuVJEK_87HQ&s" alt="Modern Equipment">
                            <h3 class="font-semibold text-gray-900">Modern Equipment</h3>
                            <p class="text-blue-600 text-sm">Advanced Technology</p>
                        </div>
                    </div>
                    <div class="transform hover:scale-105 transition-all duration-300">
                        <div class="bg-blue-50 rounded-2xl p-6 text-center">
                            <img class="w-16 h-16 mx-auto mb-4" src="https://img.freepik.com/premium-vector/emergency-situation-medicine-blue-concept-with-people-scene-flat-cartoon-style_198565-6510.jpg" alt="Emergency Care">
                            <h3 class="font-semibold text-gray-900">24/7 Emergency</h3>
                            <p class="text-blue-600 text-sm">Always Available</p>
                        </div>
                    </div>
                    <div class="transform hover:scale-105 transition-all duration-300">
                        <div class="bg-blue-50 rounded-2xl p-6 text-center">
                            <img class="w-16 h-16 mx-auto mb-4" src="https://www.shutterstock.com/shutterstock/photos/1649279041/display_1500/stock-vector-cute-cartoon-ambulance-car-with-hospital-background-medical-health-care-concept-vector-1649279041.jpg" alt="Ambulance Service">
                            <h3 class="font-semibold text-gray-900">Quick Ambulance</h3>
                            <p class="text-blue-600 text-sm">Fast Response</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Search and Services Section -->
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-6">
        <x-searchBarForDoctor/>
        <x-services/>

        <!-- Appointment Section -->
        <div class="mt-20">
            <div class="max-w-2xl mx-auto text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Schedule Your Visit
                </h2>
                <p class="text-gray-600">
                    Book an appointment with our experienced healthcare professionals.
                    We're here to provide you with the best medical care possible.
                </p>
            </div>

            <div class="flex justify-center">
                <a href="/doctors" class="group relative inline-flex items-center justify-center px-8 py-4 font-semibold text-white transition-all duration-300 ease-in-out bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600">
                    <span class="mr-2">Make Appointment</span>
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
