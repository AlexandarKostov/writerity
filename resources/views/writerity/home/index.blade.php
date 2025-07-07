<x-app-layout title="Home">
    <div class="bg-transparent">
        <div class="relative px-6 lg:px-8">
            <div class="isolate px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row sm:justify-between items-center">
                    <div class="text-center sm:text-left sm:w-1/2 flex flex-col justify-center">
                        <h1 class="text-4xl font-bold tracking-tight text-red-700 sm:text-6xl mb-4">Writerity</h1>
                        <p class="text-lg leading-8 text-gray-600 mb-6">
                            Writerity is a Japanese IT company with a solid foundation in web design, system development, and digital advertising.
                            From our scenic base in Ohrid, North Macedonia, where we relocated in November 2021 after starting in Skopje in September 2017,
                            we connect with clients and partners around the globe.
                            Our mission is clear: to develop cosmopolitan IT professionals who thrive in the ever-evolving tech landscape.
                        </p>
                        <div class="flex items-center justify-center sm:justify-start gap-x-6">
                            <a href="{{ route('about-us') }}" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                    <div class="sm:w-1/2 mt-6 sm:mt-0">
                        <img src="{{asset('bg-images/header001.png')}}" alt="Hero Image" class="w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-20 pb-16 text-center lg:pt-32">
            <p class="mx-auto -mt-4 max-w-2xl text-lg tracking-tight text-slate-700 sm:mt-6">Welcome to
            </p>

            <h1 class="mx-auto max-w-4xl font-display text-5xl font-medium tracking-tight text-slate-900 sm:text-7xl">
                <span class="inline-block">The
                    <span class="relative whitespace-nowrap text-red-700">
                    <svg aria-hidden="true" viewBox="0 0 418 42" class="absolute top-2/3 left-0 h-[0.58em] w-full fill-red-300/70" preserveAspectRatio="none"><path d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z"></path></svg>
                    <span class="relative">world's</span></span>
                </span>
                <span class="inline-block">largest software service.</span>
            </h1>

            <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-black">Offices worldwide</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-black">5</dd>
                    </div>
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-black">Full-time colleagues</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-black">47+</dd>
                    </div>
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-black">Hours per week</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-black">40</dd>
                    </div>
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-black">Paid time off</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-black">26 days</dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="relative px-6 lg:px-8">
            <div class="flex flex-col items-center justify-center text-center">
                <span class="px-2.5 py-1 bg-red-200 rounded-full text-center text-black text-xs font-medium leading-4">Leading Software Engineering </span>
                <h1 class="text-4xl font-bold tracking-tight text-black sm:text-6xl mb-4">What we do</h1>
            </div>
            <ul aria-label="Nested user feed" class="relative flex flex-col gap-12 py-12 pl-8 before:absolute before:top-0 before:left-8 before:h-full before:border before:-translate-x-1/2 before:border-slate-200 before:border-dashed after:absolute after:top-6 after:left-8 after:bottom-6 after:border after:-translate-x-1/2 after:border-slate-200 ">
                <li role="article" class="relative pl-8 ">
                    <div class="flex flex-col flex-1 gap-4">
{{--                        <a class="absolute z-10 inline-flex items-center justify-center w-8 h-8 text-white rounded-full -left-4 ring-2 ring-white">--}}
{{--                            <img src="https://i.pravatar.cc/48?img=1" alt="user name" title="user name" width="48" height="48" class="max-w-full rounded-full" />--}}
{{--                        </a>--}}
                        <h4 class="flex flex-col items-start text-lg font-medium leading-8 lg:items-center md:flex-row text-slate-700"><span class="flex-1">Mary Jane<span class="text-base font-normal text-black"> created a new thread about <span class="font-bold">IT company Writerity</span></span></span></span><span class="text-sm font-normal text-slate-400"> 3 hours ago</span></h4>
                        <p class=" text-slate-500">
                            Just heard that this company Writerity took the business and marketplace really seriously and starting to taking all the big clients and names all around the world, also
                            partner with IT engineers from North Macedonia and experienced managers with expertise in Asian markets.
                        </p>
                    </div>
                </li>
                <li role="article" class="relative pl-8 ">
                    <div class="flex flex-col flex-1 gap-4">
{{--                        <a href="#" class="absolute z-10 inline-flex items-center justify-center w-8 h-8 text-white rounded-full -left-4 ring-2 ring-white">--}}
{{--                            <img src="https://i.pravatar.cc/48?img=12" alt="user name" title="user name" width="48" height="48" class="max-w-full rounded-full" />--}}
{{--                        </a>--}}
                        <h4 class="flex flex-col items-start text-lg font-medium leading-8 lg:items-center md:flex-row text-slate-700"><span class="flex-1">John langan <span class="text-base font-normal text-slate-500"> 💚 liked the thread </span></span><span class="text-sm font-normal text-slate-400"> 2 hours ago</span></h4>
                    </div>
                    <ul role="group" class="relative flex flex-col gap-12 py-12 pl-6 lg:pl-8 after:absolute after:top-12 after:left-6 lg:after:left-8 after:bottom-12 after:border after:-translate-x-1/2 after:border-slate-200 before:absolute before:top-6 before:left-6 lg:before:left-8 before:bottom-6 before:border before:-translate-x-1/2 before:border-slate-200 before:border-dashed">
                        <li role="article" class="relative pl-6 lg:pl-8 ">
                            <div class="flex flex-col flex-1 gap-4">
{{--                                <a class="absolute z-10 inline-flex items-center justify-center w-8 h-8 text-white rounded-full -left-4 ring-2 ring-white">--}}
{{--                                    <img src="https://i.pravatar.cc/48?img=12" alt="user name" title="user name" width="48" height="48" class="max-w-full rounded-full" />--}}
{{--                                </a>--}}
                                <h4 class="flex flex-col items-start text-lg font-medium leading-8 lg:items-center md:flex-row text-slate-700"><span class="flex-1">John langan <span class="text-base font-normal text-slate-500"> replied </span></span><span class="text-sm font-normal text-slate-400"> 2 hours ago</span></h4>
                                <p class=" text-slate-500">Good one! Can you share with me all the things this company provides !?  </p>
                            </div>
                        </li>
                    </ul>
                </li>
                <li role="article" class="relative pl-8 ">
                    <div class="flex flex-col flex-1 gap-4">
{{--                        <a href="#" class="absolute z-10 inline-flex items-center justify-center w-8 h-8 text-white rounded-full -left-4 ring-2 ring-white">--}}
{{--                            <img src="https://i.pravatar.cc/48?img=13" alt="user name" title="user name" width="48" height="48" class="max-w-full rounded-full" />--}}
{{--                        </a>--}}
                       <h4 class="flex flex-col items-start text-lg font-medium leading-8 lg:items-center md:flex-row text-slate-700"><span class="flex-1">Manos Gaitanakis <span class="text-base font-normal text-slate-500"> 💚 liked the thread </span></span><span class="text-sm font-normal text-slate-400"> 2 hours ago</span></h4>
                    </div>
                </li>
                <li role="article" class="relative pl-8 ">
                    <div class="flex flex-col flex-1 gap-4">
{{--                        <a class="absolute z-10 inline-flex items-center justify-center w-8 h-8 text-white rounded-full -left-4 ring-2 ring-white">--}}
{{--                            <img src="https://i.pravatar.cc/48?img=1" alt="user name" title="user name" width="48" height="48" class="max-w-full rounded-full" />--}}
{{--                        </a>--}}
                        <h4 class="flex flex-col items-start text-lg font-medium leading-8 lg:items-center md:flex-row text-slate-700"><span class="flex-1">Mary Jane </span><span class="text-sm font-normal text-slate-400"> 1 hours ago</span></h4>
                        <p class=" text-slate-500">
                            <span class="text-black font-bold">Web/App & System Development</span>
                            <br>
                            At Writerity, we partner with IT engineers from North Macedonia and experienced managers with expertise in Asian markets to deliver high-quality web and app development services.
                            Our presence in North Macedonia allows us to leverage the region's growing IT sector, offering innovative and productive solutions tailored to your needs.
                            <br>
                            <span class="text-black font-bold">Web Advertisement Production</span>
                            <br>
                            We excel in creating effective web advertisement products, including rich media banners and videos. Our team of skilled designers and animators produces high-quality content that enhances your marketing campaigns and captivates your audience.
                            <br>
                            <span class="text-black font-bold">Language & IT School</span>
                            <br>
                            With a history of running a successful English and IT school in Cebu, Philippines, we are now launching our first teaching program in Ohrid, North Macedonia. Our goal is to equip non-native English speakers and IT beginners with the skills needed to become cosmopolitan IT professionals, fostering growth and global opportunities.
                            <br>
                            <span class="text-black font-bold">Hostel</span>
                            <br>
                            Opened on July 29, 2022, our hostel in Ohrid is designed to offer a comfortable and supportive environment for our students and professionals. We aim to expand this concept into a global network of co-working hostels, starting with our successful base in Ohrid.
                        </p>
                    </div>
                </li>
            </ul>
            <a href="{{ route('service') }}" class="mt-5 inline-flex items-center gap-x-1 text-red-700 decoration-2 group-hover:underline font-medium">
                Read more
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </a>
        </div>
        <div class="relative px-6 lg:px-8">
            <div class="flex flex-col items-center justify-center text-center py-12">
                <span class="px-2.5 py-1 bg-red-200 rounded-full text-center text-black text-xs font-medium leading-4">Writerity Plan </span>
                <h1 class="text-2xl font-bold tracking-tight text-black sm:text-4xl mb-4">Workflow care of clients</h1>
                <ul aria-label="Colored activity feed" class="relative flex flex-col gap-12 py-12 pl-6 before:absolute before:top-0 before:left-6 before:h-full before:border before:-translate-x-1/2 before:border-slate-200 before:border-dashed after:absolute after:top-6 after:left-6 after:bottom-6 after:border after:-translate-x-1/2 after:border-slate-200 ">
                    <li class="relative pl-6 ">
                        <span class="absolute left-0 z-10 flex items-center justify-center w-8 h-8 text-white -translate-x-1/2 rounded-full ring-2 ring-white bg-emerald-500 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" role="presentation">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
      </svg>
                        </span>
                        <div class="flex flex-col flex-1 gap-0">
                            <h4 class="text-sm font-medium text-slate-700"> Client Onboarding </h4>
                            <p class="text-xs text-slate-500">Gathering necessary information and setting up the client in the system.</p>
                        </div>
                    </li>
                    <li class="relative pl-6 ">
                        <span class="absolute left-0 z-10 flex items-center justify-center w-8 h-8 text-white -translate-x-1/2 rounded-full ring-2 ring-white bg-emerald-500 ">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" role="presentation">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                          </svg>
                        </span>
                        <div class="flex flex-col flex-1 gap-0">
                            <h4 class="text-sm font-medium text-slate-700"> Communication:</h4>
                            <p class="text-xs text-slate-500">Regularly interacting with clients to understand their needs and preferences.</p>
                        </div>
                    </li>
                    <li class="relative pl-6 ">
                        <span class="absolute left-0 z-10 flex items-center justify-center w-8 h-8 text-white -translate-x-1/2 rounded-full ring-2 ring-white bg-amber-500 ">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" role="presentation">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                          </svg>
                        </span>
                        <div class="flex flex-col flex-1 gap-0">
                            <h4 class="text-sm font-medium text-slate-700"> Service Delivery </h4>
                            <p class="text-xs text-slate-500">Providing the agreed-upon services or products efficiently and effectively.</p>
                        </div>
                    </li>
                    <li class="relative pl-6 ">
                        <span class="absolute left-0 z-10 flex items-center justify-center w-8 h-8 text-white -translate-x-1/2 rounded-full ring-2 ring-white bg-emerald-500 ">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" role="presentation">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                          </svg>
                        </span>
                        <div class="flex flex-col flex-1 gap-0">
                            <h4 class="text-sm font-medium text-slate-700"> Monitoring Progress </h4>
                            <p class="text-xs text-slate-500">Keeping track of client satisfaction and service outcomes.</p>
                        </div>
                    </li>
                    <li class="relative pl-6 ">
                        <span class="absolute left-0 z-10 flex items-center justify-center w-8 h-8 text-white -translate-x-1/2 rounded-full ring-2 ring-white bg-amber-500 ">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" role="presentation">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                          </svg>
                        </span>
                        <div class="flex flex-col flex-1 gap-0">
                            <h4 class="text-sm font-medium text-slate-700"> Feedback Collection </h4>
                            <p class="text-xs text-slate-500">Gathering input from clients to improve services.</p>
                        </div>
                    </li>
                    <li class="relative pl-6 ">
                        <span class="absolute left-0 z-10 flex items-center justify-center w-8 h-8 text-white -translate-x-1/2 bg-pink-500 rounded-full ring-2 ring-white ">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5" role="presentation"></svg>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                          </svg>
                        </span>
                        <div class="flex flex-col flex-1 gap-0">
                            <h4 class="text-sm font-medium text-slate-700"> Project done / Follow-up </h4>
                            <p class="text-xs text-slate-500">Reaching out to clients after service delivery to ensure satisfaction and address any issues.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="py-16">
            <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                <h2 class="mb-12 text-center text-2xl text-gray-900 font-bold md:text-4xl">What's our clients say</h2>
                <div class="grid gap-8 md:grid-rows-2 lg:grid-cols-2">
                    <div class="row-span-2 p-6 border border-gray-100 rounded-xl bg-gray-50 text-center sm:p-8">
                        <div class="h-full flex flex-col justify-center space-y-4">
                            <p class="text-gray-600 md:text-xl"> <span class="font-serif">"</span>
                                It is a pleasure to work with such a multicultural company as Writerity.
                                Its open-minded personnel that boosts a high level of expertise effectively addresses the specific requests of clients from different countries.
                                The Writerity team's creative approach, attention to detail, following deadlines, and quality assurance make it a valuable business partner.
                                <span class="font-serif">"</span></p>
                            <div>
                                <h6 class="text-lg font-semibold leading-none">Natalya Popova </h6>
                                <span class="text-xs text-gray-500">CEO GemMind Ukraine</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8">
{{--                        <img class="w-20 h-20 mx-auto rounded-full" src="https://tailus.io/sources/blocks/grid-cards/preview/images/avatars/first_user.webp" alt="user avatar" height="220" width="220" loading="lazy">--}}
                        <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                            <p class="text-gray-600"> <span class="font-serif">"</span>
                                Working at Writerity and its branch Retolinks has been a fantastic experience.
                                The company provides a supportive, growth-oriented environment where employees feel valued and encouraged. With an emphasis on teamwork and cross-cultural collaboration,
                                Writerity brings Japanese professionalism together with a relaxed work culture in Macedonia. Employees benefit from structured work hours, weekends off, and unique opportunities.
                                Retolinks, as part of Writerity, upholds these values, making it a truly inspiring place to grow both personally and professionally.
                                <span class="font-serif">"</span></p>
                            <div>
                                <h6 class="text-lg font-semibold leading-none">Tomislav Rapeshoski</h6>
                                <span class="text-xs text-gray-500">graphic designer Retolinks</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border border-gray-100 rounded-xl bg-gray-50 sm:flex sm:space-x-8 sm:p-8">
                        <div class="space-y-4 mt-4 text-center sm:mt-0 sm:text-left">
                            <p class="text-gray-600"> <span class="font-serif">"</span>
                                As a team lead and full-stack developer at Gamenic for the past four years, I've had the privilege of collaborating closely with Writerity.
                                Their professionalism and commitment to delivering high-quality results have consistently impressed me.
                                The team at Writerity fosters an environment of creativity and support, enabling us to tackle complex projects with confidence and efficiency.
                                It's been a pleasure to work alongside such a dedicated and talented group
                                <span class="font-serif">"</span></p>
                            <div>
                                <h6 class="text-lg font-semibold leading-none">Utsav Shrestha </h6>
                                <span class="text-xs text-gray-500">developer team lead at Gamenic Nalamiz Nepal </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative px-6 lg:px-8 py-2">
            <div class="bg-white py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:mx-0">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Keep with us</h2>
                        <p class="mt-2 text-lg leading-8 text-gray-600">Writerity Blog.</p>
                    </div>
                    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        @if($blogs->isEmpty())
                            <p class="p-4 text-center">No new blogs in the past 72 hours.></p>
                        @else
                            @foreach($blogs as $blog)
                                <article class="flex max-w-xl flex-col items-start justify-between">
                                    <div class="flex items-center gap-x-4 text-xs">
                                        <time datetime="2020-03-16" class="text-gray-500">{{ $blog->created_at->format('d-m-Y') }}</time>
                                        @foreach ($blog->articles as $article)
                                            <p class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $article->slug ?? 'Writerity' }}</p>
                                        @endforeach
                                    </div>
                                    <div class="group relative">
                                        <a wire:navigate href="{{ route('blog.show' , $blog->slug) }}">
                                            <img class="rounded-t-lg" src="{{ $blog->getThumbnail() }}" alt="thumbnail">
                                        </a>
                                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                            <a wire:navigate href="{{ route('blog.show' , $blog->slug) }}">
                                                <span class="absolute inset-0"></span>
                                                {{ $blog->title }}
                                            </a>
                                        </h3>
                                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"> {{ $blog->getExcerpt() }}</p>
                                    </div>
                                    <div class="relative mt-8 flex items-center gap-x-4">
                                        <img src="{{ $blog->author->profile_photo_url }}" alt="" class="h-10 w-10 rounded-full object-cover">
                                        <div class="text-sm leading-6">
                                            <p class="font-semibold text-gray-900">
                                                <a href="{{ route('blog.show' , $blog->slug) }}">
                                                    <span class="absolute inset-0"></span>
                                                    {{ $blog->author->name }}
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        @endif
                    </div>
                    <div class="flex items-center justify-center pt-12">
                        <a href="{{ route('blog.index') }}" class="px-4 py-2 text-sm font-semibold leading-6 text-white bg-red-700 rounded-md">
                            See more <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between mx-auto max-w-7xl">
                <div class="flex flex-col lg:w-1/2 text-center lg:text-left">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Make your idea live</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">Hire a larger software company.</p>
                    <div class="mt-6 sm:mt-0">
                        <img src="{{asset('bg-images/header002.png')}}" alt="Hero Image" class="w-full h-auto">
                    </div>
                </div>
                <form action="{{ route('contact.store') }}" method="POST" class="mt-16 max-w-xl lg:mt-0 lg:w-1/2">
                    @csrf
                    @method('POST')
                    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                        <div class="sm:col-span-2">
                            <label for="full_name" class="block text-sm font-semibold leading-6 text-gray-900">Full Name</label>
                            <div class="mt-2.5">
                                <input type="text" name="full_name" id="full_name" autocomplete="name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                            <div class="mt-2.5">
                                <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="phone_number" class="block text-sm font-semibold leading-6 text-gray-900">Phone Number</label>
                            <div class="mt-2.5">
                                <input type="text" name="phone_number" id="phone_number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="country" class="block text-sm font-semibold leading-6 text-gray-900">Country</label>
                            <div class="mt-2.5">
                                <input type="text" name="country" id="country" autocomplete="address-country" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="city" class="block text-sm font-semibold leading-6 text-gray-900">City</label>
                            <div class="mt-2.5">
                                <input type="text" name="city" id="city" autocomplete="address-locality" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                            <div class="mt-2.5">
                                <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <button type="submit" class="block w-full rounded-md bg-red-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Let's talk</button>
                        <div class="my-4">
                            <p class="block text-center w-full text-white bg-black hover:bg-black-800 focus:ring-4 focus:ring-black-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-black-600 dark:hover:bg-black-700 focus:outline-none dark:focus:ring-black-800">
                                Contact us at writerity@contact.com
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
