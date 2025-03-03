<x-app-layout>
    {{-- <div class="w-full bg-center bg-cover h-[38rem]" style="background-image: url('https://png.pngtree.com/background/20230411/original/pngtree-hospital-ward-bed-cartoon-background-picture-image_2389769.jpg');">
        <div class="flex items-center justify-center w-full h-full bg-gray-900/40">
            <div class="max-w-xl text-center">
                <h2 class="text-3xl font-semibold text-white lg:text-4xl">Best Health Care Solution <br><span class="text-sky-500 dark:text-green-400">In Your City</span></h2>
                <p class="mt-4 font-bold font-serif text-sm text-gray-300 dark:text-gray-100 lg:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates.</p>
                <div class="flex flex-col mt-6 space-y-3 lg:space-y-0 lg:flex-row">
                    <a href="#find" class="block px-5 py-2 text-sm font-medium tracking-wider text-center text-white transition-colors duration-300 transform bg-gray-900 rounded-md hover:bg-gray-700">Find Doctors</a>
                    <a href="/doctors" class="block px-5 py-2 text-sm font-medium tracking-wider text-center text-gray-700 transition-colors duration-300 transform bg-gray-200 rounded-md lg:mx-4 hover:bg-gray-300">Appointments</a>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="relative w-full bg-center bg-cover h-[38rem]"  style="background-image: url('https://png.pngtree.com/background/20230411/original/pngtree-hospital-ward-bed-cartoon-background-picture-image_2389769.jpg');">
        <div class="absolute inset-0 bg-black/20 backdrop-blur-[2px]"></div>
        <div class="container relative z-10 mx-auto px-6 py-32 flex items-center">
            <div class="max-w-2xl">
                <h1 class="text-5xl font-bold leading-tight mb-6">
                    <span class="text-white">Your Health, Our Priority</span>
                    <br>
                    <span class="bg-gradient-to-r from-sky-400 to-blue-500 bg-clip-text text-transparent">Expert Care Always</span>
                </h1>
                <p class="text-lg text-gray-100 mb-8 leading-relaxed">
                    Experience world-class healthcare services with our team of dedicated professionals.
                    Book appointments, consult specialists, and take control of your health journey.
                </p>
                <div class="flex gap-4">
                    <a href="#find" class="px-8 py-4 bg-white text-blue-600 rounded-full font-semibold hover:bg-blue-50 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Find Doctors
                    </a>
                    <a href="/doctors" class="px-8 py-4 bg-blue-600 text-white rounded-full font-semibold hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Book Appointment
                    </a>
                </div>
            </div>
        </div>
    </div>
    <x-about></x-about>
</x-app-layout>
