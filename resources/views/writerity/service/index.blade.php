<x-app-layout title="Service">
    <section class="relative">
        <div class="mx-auto   ">
            <div class="relative z-40 container mx-auto h-full       lg:px-8">
                <div class="px-4 py-4      lg:px-8 lg:pt-20">
                    <div class="grid gap-10 lg:grid-cols-2 mx-24">
                        <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">

                            <div class="max-w-xl mb-6">
                                <h2 class="max-w-lg mb-6   font-sans text-6xl font-bold       leading-normal">
                                    Key Services <br> We Serve
                                </h2>
                                <p>Work with larges Japanese company increase your quality and business profit</p>
                            </div>
                            <div class="my-4">
                                <p class="inline-block w-auto text-white bg-black hover:bg-black-800 focus:ring-4 focus:ring-black-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-black-600 dark:hover:bg-black-700 focus:outline-none dark:focus:ring-black-800">
                                    Contact us at writerity@contact.com
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center w-full   -mx-4 lg:pl-10">
                            <div class="flex flex-col items-end px-3">
                                <img class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56"
                                     src="{{asset('bg-images/service-3.jpg')}}"
                                     alt="">
                                <img class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40"
                                     src="{{asset('bg-images/service-2.jpg')}}"
                                     alt="">
                            </div>
                            <div class="px-3">
                                <img class="object-cover w-40 h-40 rounded shadow-lg sm:hbg-green-500ray-50-64 xl:h-80 sm:w-full xl:w-80"
                                     src="{{asset('bg-images/service-1.jpg')}}"
                                     alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap mt-4 gap-2 mx-24">
                    @include('writerity.service.partials.service-options')
                </div>
            </div>
        </div>
        <div class="lg:text-[250px] varien absolute top-8 left-24 text-green-500/5  z-0    ">
            Writerity
        </div>
    </section>
    <div class="bg-white py-8 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Technology</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">We have different modern up to date technologies used for Graphics & System Development.</p>
            </div>
            <div class="xl:col-span-2">
                <div class="text-center mb-12">
                    <p class="text-xl font-semibold text-gray-800">Graphics</p>
                </div>
                <ul class="grid grid-cols-1 gap-x-8 gap-y-12 sm:grid-cols-3 sm:gap-y-16 xl:grid-cols-3 xl:gap-x-12">
                    <li class="flex items-center justify-center">
                        <img class="h-16 w-16 " src="{{ asset('bg-images/ps.png') }}" alt="Tech Icon 1">
                    </li>
                    <li class="flex items-center justify-center">
                        <img class="h-16 w-16 " src="{{ asset('bg-images/ai.png') }}" alt="Tech Icon 2">
                    </li>
                    <li class="flex items-center justify-center">
                        <img class="h-16 w-16 " src="{{ asset('bg-images/ae.png') }}" alt="Tech Icon 3">
                    </li>
                </ul>
                <div class="text-center mt-12 mb-12">
                    <p class="text-xl font-semibold text-gray-800">System Development</p>
                </div>
                <ul class="grid grid-cols-1 gap-x-8 gap-y-12 sm:grid-cols-3 sm:gap-y-16 xl:grid-cols-3 xl:gap-x-12">
                    <li class="flex items-center justify-center">
                        <img class="h-16 w-16 " src="{{ asset('bg-images/laravel.png') }}" alt="Tech Icon 4">
                    </li>
                    <li class="flex items-center justify-center">
                        <img class="h-16 w-16 " src="{{ asset('bg-images/vue.png') }}" alt="Tech Icon 5">
                    </li>
                    <li class="flex items-center justify-center">
                        <img class="h-16 w-16 " src="{{ asset('bg-images/nginx.png') }}" alt="Tech Icon 6">
                    </li>
                    <li class="flex items-center justify-center">
                        <img class="h-16 w-16 " src="{{ asset('bg-images/swift.png') }}" alt="Tech Icon 6">
                    </li>
                    <li class="flex items-center justify-center">
                        <img class="h-16 w-16 " src="{{ asset('bg-images/android.png') }}" alt="Tech Icon 6">
                    </li>
                    <li class="flex items-center justify-center">
                        <img class="h-16 w-16 " src="{{ asset('bg-images/aws.png') }}" alt="Tech Icon 6">
                    </li>
                    <li class="flex items-center justify-center">
                        <img class="h-16 w-16 " src="{{ asset('bg-images/docker.png') }}" alt="Tech Icon 6">
                    </li>
                    <li class="flex items-center justify-center">
                        <img class="h-16 w-16 " src="{{ asset('bg-images/tens.png') }}" alt="Tech Icon 6">
                    </li>
                    <li class="flex items-center justify-center">
                        <img class="h-16 w-16 " src="{{ asset('bg-images/block.png') }}" alt="Tech Icon 6">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="overflow-hidden bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pr-8 lg:pt-4">
                    <div class="lg:max-w-lg">
                        <h2 class="text-base font-semibold leading-7 text-red-700">Web/App & System Development</h2>
                        <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    Web Development
                                </dt>
                                <dd class="inline">
                                    We are working on projects with IT engineers from North Macedonia and experienced managers who have worked on Asian markets.
                                </dd>
                            </div>
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    System Development
                                </dt>
                                <dd class="inline">
                                    Therefore we are able to provide productive and high quality web development services.
                                    One of the main reasons we opened our office in North Macedonia is because
                                    North Macedonia has a small, but rather diversified economy with big investment and growth potential, especially the IT sector.
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <img src="{{asset('bg-images/service-5.jpg')}}"
                     alt="Product screenshot"
                     class="w-full max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10"
                     width="2432"
                     height="1442">
            </div>
        </div>
    </div>
    <div class="overflow-hidden bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pr-8 lg:pt-4">
                    <div class="lg:max-w-lg">
                        <h2 class="text-base font-semibold leading-7 text-red-700">Web Advertisement Production</h2>
                        <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    Production
                                </dt>
                                <dd class="inline">
                                    We are creating web advertisement products such as rich media banners,
                                    videos, etc. for successful marketing campaigns. Our experienced, creative designers
                                    and animators will provide you with high-quality and effective production for advertisement.
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
                <img src="{{asset('bg-images/service-4.jpg')}}"
                     alt="Product screenshot"
                     class="w-full max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10"
                     width="2432"
                     height="1442">
            </div>
        </div>
    </div>
    <div class="overflow-hidden bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <img src="{{asset('bg-images/service-7.jpg')}}"
                     alt="Product screenshot"
                     class="w-full max-w-none rounded-xl shadow-xl ring-1 ring-gray-400/10"
                     width="2432"
                     height="1442">
                <div class="lg:pr-8 lg:pt-4">
                    <div class="lg:max-w-lg">
                        <h2 class="text-base font-semibold leading-7 text-red-700">Language & IT School</h2>
                        <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-gray-600 lg:max-w-none">
                            <div class="relative pl-9">
                                <dt class="inline font-semibold text-gray-900">
                                    School ?
                                </dt>
                                <dd class="inline">
                                    Since 2011, our affiliated company has an English and IT school in Cebu, Philippines. Now, we are preparing to start our first teaching program in Ohrid,
                                    North Macedonia. Our target students are non-native English speakers and IT beginners and the main goal of this program is to motivate them through
                                    learning and improving their language and IT skills to become cosmopolitan IT professionals.
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="relative overflow-hidden bg-white">
        <div class="mt-2 md:mt-0 py-12 pb-6 sm:py-16 lg:pb-24 overflow-hidden">
            <div class="text-center">
                <p class="text-sm font-bold uppercase tracking-widest text-gray-700">How It Works</p>
                <h2 class="mt-6 text-3xl font-bold tracking-tight text-black sm:text-4xl lg:text-5xl">
                    Your help is just a few steps away
                </h2>
            </div>
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 relative">
                <div class="relative mt-12 lg:mt-20">
                    <div class="absolute inset-x-0 hidden xl:px-44 top-2 md:block md:px-20 lg:px-28">
                        <svg class="w-full" xmlns="http://www.w3.org/2000/svg" width="875" height="48" viewBox="0 0 875 48"
                             fill="none">
                            <path
                                d="M2 29C20.2154 33.6961 38.9915 35.1324 57.6111 37.5555C80.2065 40.496 102.791 43.3231 125.556 44.5555C163.184 46.5927 201.26 45 238.944 45C312.75 45 385.368 30.7371 458.278 20.6666C495.231 15.5627 532.399 11.6429 569.278 6.11109C589.515 3.07551 609.767 2.09927 630.222 1.99998C655.606 1.87676 681.208 1.11809 706.556 2.44442C739.552 4.17096 772.539 6.75565 805.222 11.5C828 14.8064 850.34 20.2233 873 24"
                                stroke="#D4D4D8" stroke-width="3" stroke-linecap="round" stroke-dasharray="1 12" />
                        </svg>
                    </div>
                    <div
                        class="relative grid grid-cols-1 text-center gap-y-8 sm:gap-y-10 md:gap-y-12 md:grid-cols-3 gap-x-12">
                        <div>
                            <div
                                class="flex items-center justify-center w-16 h-16 mx-auto bg-white dark:bg-red-700 border-2 border-red-600 dark:border-red-600 rounded-full shadow">
                                <span class="text-xl font-semibold text-gray-700 dark:text-gray-200">1</span>
                            </div>
                            <p class="mt-3 sm:mt-4 text-base text-gray-600 dark:text-gray-400">
                                Contact us
                            </p>
                        </div>
                        <div>
                            <div
                                class="flex items-center justify-center w-16 h-16 mx-auto bg-white dark:bg-red-300 border-2 border-green-300 dark:border-red-300 rounded-full shadow">
                                <span class="text-xl font-semibold text-gray-700 dark:text-gray-200">2</span>
                            </div>
                            <p class="mt-3 sm:mt-4 text-base text-gray-600 dark:text-gray-400">
                                Set up everything
                            </p>
                        </div>
                        <div>
                            <div
                                class="flex items-center justify-center w-16 h-16 mx-auto bg-white dark:bg-red-700 border-2 border-red-500 dark:border-red-500 rounded-full shadow">
                                <span class="text-xl font-semibold text-gray-700 dark:text-gray-200">3</span>
                            </div>
                            <p class="mt-3 sm:mt-4 text-base text-gray-600 dark:text-gray-400">
                                Sign Contract
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-10">
                    <h2 class="mt-6 text-3xl font-bold tracking-tight text-black sm:text-4xl lg:text-5xl">
                        Don’t hesitate let's make great things together !
                    </h2>
                    <div class="flex justify-center my-4">
                            <p class="inline-block w-auto text-white bg-black hover:bg-black-800 focus:ring-4 focus:ring-black-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-black-600 dark:hover:bg-black-700 focus:outline-none dark:focus:ring-black-800">
                                Start now - writerity@contact.com
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
