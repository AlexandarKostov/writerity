<x-app-layout title="Career">
    <div class="bg-transparent">
        <div class="flex flex-col items-center justify-center w-full px-4 py-20 text-center">
            <!-- Heading Section -->
            <h1 class="mx-auto max-w-4xl text-4xl font-bold tracking-tight text-black sm:text-5xl md:text-6xl lg:text-7xl">
                Don't just
                <span class="relative whitespace-nowrap text-red-700">work here.</span>
                <span class="relative whitespace-nowrap text-black">
            <span class="relative">Belong here.</span>
        </span>
            </h1>

            <!-- Code Section -->
            <code class="my-8 inline-flex items-center space-x-4 rounded-lg bg-gray-800 p-6 text-left text-sm text-white sm:text-base">
                <!-- Icon Section -->
                <span class="flex items-center gap-4">
            <span class="shrink-0 text-gray-500">$</span>
            <span class="flex-1">
                <span>composer require</span>
                <span class="text-yellow-500">laravel/writerity/careers</span>
            </span>
        </span>
                <!-- SVG Icon -->
                <svg class="shrink-0 h-5 w-5 transition-colors text-gray-500 hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M8 2a1 1 0 000 2h2a1 1 0 100-2H8z"></path>
                    <path d="M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z"></path>
                </svg>
            </code>
        </div>

        <div class="relative px-4 sm:px-6 lg:px-8 py-2">
            <div class="bg-white py-16 sm:py-24">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:mx-0">
                        <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-gray-900">
                            All positions
                        </h2>
                    </div>
                    @if($careers->isEmpty() || !$careers->contains('is_valid', 1))
                        <div class="text-center text-black mt-6">
                            No positions available at the moment.
                        </div>
                    @else
                        @php
                            // Define the headers in the desired display order
                            $headers = ['Graphics', 'System Development', 'HR & Administration', 'English Teacher'];
                        @endphp

                        @foreach($headers as $header)
                            @php
                                // Get careers for the current header
                                $filteredCareers = \App\Models\Career::getByHeader($header);
                            @endphp

                            @if($filteredCareers->isNotEmpty())
                                <!-- Header for the current section -->

                                <div class="mx-auto max-w-2xl lg:mx-0 mt-12 border-t">
                                    <h1 class="text-2xl sm:text-3xl font-bold tracking-tight text-gray-900 my-2">
                                        {{ $header }}
                                    </h1>
                                </div>

                                <!-- Careers for the current header -->
                                <div class="mx-auto grid gap-x-6 gap-y-10 sm:gap-x-8 sm:gap-y-12 border-gray-200 pt-8 sm:pt-12 lg:pt-16 lg:max-w-none grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                                    @foreach($filteredCareers as $career)
                                        <div class="relative flex flex-col bg-white shadow-lg rounded-xl overflow-hidden">
                                            @if($career->image)
                                                <div class="relative h-48 sm:h-60 overflow-hidden">
                                                    <img src="{{ $career->getThumbnail() }}" alt="card-image" class="w-full h-full object-cover">
                                                </div>
                                            @endif
                                            <div class="p-4 sm:p-6">
                                                <h5 class="text-lg sm:text-xl font-semibold text-gray-900 mb-2">
                                                    {{ $career->title }}
                                                </h5>
                                                <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                                                    {{ $career->getExcerpt() }}
                                                </p>
                                            </div>
                                            <div class="flex justify-end mt-auto p-4">
                                                <a wire:navigate href="{{ route('career.show', $career->id) }}"
                                                   class="py-2 px-4 sm:py-3 sm:px-6 text-xs sm:text-sm font-bold text-white bg-gray-900 rounded-lg hover:bg-gray-800 transition-all">
                                                    Read More & Apply
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        @endforeach

                        <!-- Display careers without any header -->
                        @php
                            $noHeaderCareers = \App\Models\Career::whereNull('header')->where('is_valid', 1)->get();
                        @endphp

                        @if($noHeaderCareers->isNotEmpty())
                            <div class="mx-auto max-w-2xl lg:mx-0">
                                <h1 class="text-2xl sm:text-3xl font-bold tracking-tight text-gray-900">
                                    Careers Without Header
                                </h1>
                            </div>

                            <div class="mx-auto mt-8 grid gap-x-6 gap-y-10 sm:gap-x-8 sm:gap-y-12 border-t border-gray-200 pt-8 sm:pt-12 lg:pt-16 lg:max-w-none grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                                @foreach($noHeaderCareers as $career)
                                    <div class="relative flex flex-col bg-white shadow-lg rounded-xl overflow-hidden">
                                        @if($career->image)
                                            <div class="relative h-48 sm:h-60 overflow-hidden">
                                                <img src="{{ $career->getThumbnail() }}" alt="card-image" class="w-full h-full object-cover">
                                            </div>
                                        @endif
                                        <div class="p-4 sm:p-6">
                                            <h5 class="text-lg sm:text-xl font-semibold text-gray-900 mb-2">
                                                {{ $career->title }}
                                            </h5>
                                            <p class="text-sm sm:text-base text-gray-700 leading-relaxed">
                                                {{ $career->getExcerpt() }}
                                            </p>
                                        </div>
                                        <div class="flex justify-end mt-auto p-4">
                                            <a wire:navigate href="{{ route('career.show', $career->id) }}"
                                               class="py-2 px-4 sm:py-3 sm:px-6 text-xs sm:text-sm font-bold text-white bg-gray-900 rounded-lg hover:bg-gray-800 transition-all">
                                                Read More & Apply
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    @endif

                </div>
            </div>
        </div>

        <div class="min-h-screen bg-gray-50 flex items-center justify-center py-10">
            <div class="w-full bg-white border border-gray-200 px-6 py-10 md:py-16 text-gray-800">
                <div class="max-w-6xl mx-auto">
                    <!-- Header -->
                    <div class="text-center mb-12">
                        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-700 leading-tight">
                            Benefits <br> working at our company
                        </h1>
                        <p class="text-base md:text-lg mt-4 text-gray-500">
                            Please note that there might be differences in benefits across our various locations.
                        </p>
                        <div class="mt-6 flex justify-center items-center space-x-1">
                            <span class="inline-block w-1 h-1 bg-red-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 bg-red-500 rounded-full"></span>
                            <span class="inline-block w-20 md:w-40 h-1 bg-red-500 rounded-full"></span>
                            <span class="inline-block w-3 h-1 bg-red-500 rounded-full"></span>
                            <span class="inline-block w-1 h-1 bg-red-500 rounded-full"></span>
                        </div>
                    </div>
                    <!-- Testimonials -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Testimonial Card 1 -->
                        <div class="bg-white shadow-md rounded-lg border border-gray-200 p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full overflow-hidden border border-gray-200">
                                    <img src="{{ asset('bg-images/satsuki.png') }}" alt="Satsuki Ohtain">
                                </div>
                                <div class="ml-4">
                                    <h6 class="text-sm font-semibold text-gray-700">Satsuki Ohtain</h6>
                                    <p class="text-xs text-gray-500">Project Manager</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                <span class="italic font-semibold text-gray-400">"</span>
                                I'm thrilled to be working globally from North Macedonia with colleagues from all over the world, regardless of borders. Together with my team, I'm overcoming challenges and feeling growth every day!
                                <span class="italic font-semibold text-gray-400">"</span>
                            </p>
                        </div>
                        <!-- Testimonial Card 2 -->
                        <div class="bg-white shadow-md rounded-lg border border-gray-200 p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full overflow-hidden border border-gray-200">
                                    <img src="{{ asset('bg-images/marina.png') }}" alt="Marina Funatsu">
                                </div>
                                <div class="ml-4">
                                    <h6 class="text-sm font-semibold text-gray-700">Marina Funatsu</h6>
                                    <p class="text-xs text-gray-500">Project Manager</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                <span class="italic font-semibold text-gray-400">"</span>
                                Working at an IT company was new to me, so there was a lot to learn, but my colleagues were incredibly supportive and patient, making it easier for me to contribute effectively. Our team is diverse, with employees from various backgrounds, and we thrive by sharing and learning from each other's unique experiences.
                                <span class="italic font-semibold text-gray-400">"</span>
                            </p>
                        </div>
                        <!-- Testimonial Card 3 -->
                        <div class="bg-white shadow-md rounded-lg border border-gray-200 p-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 rounded-full overflow-hidden border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=5" alt="Toshimi Narita">
                                </div>
                                <div class="ml-4">
                                    <h6 class="text-sm font-semibold text-gray-700">Toshimi Narita</h6>
                                    <p class="text-xs text-gray-500">Project Manager</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                <span class="italic font-semibold text-gray-400">"</span>
                                Writerity is a company where employees' autonomy is respected, making it easy to share opinions and build systems based on our own ideas. Taking time off is also easy, and with our workation system, you can work from anywhere in the world as long as you have internet access.
                                <span class="italic font-semibold text-gray-400">"</span>
                            </p>
                        </div>
                    </div>
                    <!-- Additional Testimonial -->
                    <div class="mt-8 bg-white shadow-md rounded-lg border border-gray-200 p-6">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden border border-gray-200">
                                <img src="{{ asset('bg-images/kizaki.png') }}" alt="Tetsuro Kizaki">
                            </div>
                            <div class="ml-4">
                                <h6 class="text-sm font-semibold text-gray-700">Tetsuro Kizaki</h6>
                                <p class="text-xs text-gray-500">One Year in N. Macedonia</p>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            <span class="italic font-semibold text-gray-400">"</span>
                            Being involved in technical meetings has not only enhanced my technical knowledge but also significantly improved my English communication skills. The move has exceeded my expectations. Beyond technical growth, it has broadened my life perspective, and I strongly recommend this opportunity to others.
                            <span class="italic font-semibold text-gray-400">"</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-gray-50">
            <div class="mx-auto max-w-[1340px] px-4 py-12 sm:px-6 lg:py-16 xl:py-24">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <div class="sm:max-w-xl">
                        <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                            Recruitment process
                        </h2>
                        <p class="mt-4 text-gray-700">
                            Yes, we are Writerity. But if you want to find out who we really are and if you’re a good fit for Writerity, this is the direction we’ll be moving in together.
                        </p>
                    </div>
                    <div class="mt-6 flex gap-4 sm:mt-0">
                        <button
                            aria-label="Previous slide"
                            id="keen-slider-previous"
                            class="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 w-6 rtl:rotate-180"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>

                        <button
                            aria-label="Next slide"
                            id="keen-slider-next"
                            class="rounded-full border border-rose-600 p-3 text-rose-600 transition hover:bg-rose-600 hover:text-white"
                        >
                            <svg
                                class="h-6 w-6 rtl:rotate-180"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M9 5l7 7-7 7"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="-mx-4 mt-8 sm:mx-0">
                    <div id="keen-slider" class="keen-slider">
                        <div class="keen-slider__slide">
                            <blockquote class="flex flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                                <div>
                                    <h2 class="text-4xl font-bold text-gray-900">1</h2>
                                    <p class="mt-4 text-2xl font-bold text-rose-600 sm:text-3xl">Application</p>
                                    <p class="mt-4 leading-relaxed text-gray-700">
                                        Prepare your CV and send it through the application form on our website. After the application deadline, we will get to know each other for the first time through all the data and materials you send about yourself.
                                    </p>
                                </div>
                            </blockquote>
                        </div>

                        <div class="keen-slider__slide">
                            <blockquote class="flex flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                                <div>
                                    <h2 class="text-4xl font-bold text-gray-900">2</h2>
                                    <p class="mt-4 text-2xl font-bold text-rose-600 sm:text-3xl">Technical & HR interview</p>
                                    <p class="mt-4 leading-relaxed text-gray-700">
                                        A shortlist has been made, we invite you for the first interview. This is followed by getting to know our values, projects, technologies... We believe that getting to know each other is a two-way street.
                                    </p>
                                </div>
                            </blockquote>
                        </div>

                        <div class="keen-slider__slide">
                            <blockquote class="flex flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                                <div>
                                    <h2 class="text-4xl font-bold text-gray-900">3</h2>
                                    <p class="mt-4 text-2xl font-bold text-rose-600 sm:text-3xl">Interview with clients</p>
                                    <p class="mt-4 leading-relaxed text-gray-700">
                                        Good cooperation and long-term projects lead to an excellent understanding between us and our clients. Getting to know the client always turns out to be a good thing, because it gives you new knowledge and tremendous insight into the work process itself. Take advantage of it.
                                    </p>
                                </div>
                            </blockquote>
                        </div>

                        <div class="keen-slider__slide">
                            <blockquote class="flex flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                                <div>
                                    <h2 class="text-4xl font-bold text-gray-900">4</h2>
                                    <p class="mt-4 text-2xl font-bold text-rose-600 sm:text-3xl">Decision & offer</p>
                                    <p class="mt-4 leading-relaxed text-gray-700">
                                        We enter the finals. Who is our best match? If it’s you - your job offer is on its way. We go through the entire bulleted list, answering all the questions you have.
                                    </p>
                                </div>
                            </blockquote>
                        </div>

                        <div class="keen-slider__slide">
                            <blockquote class="flex flex-col justify-between bg-white p-6 shadow-sm sm:p-8 lg:p-12">
                                <div>
                                    <h2 class="text-4xl font-bold text-gray-900">5</h2>
                                    <p class="mt-4 text-2xl font-bold text-rose-600 sm:text-3xl">Landing</p>
                                    <p class="mt-4 leading-relaxed text-gray-700">
                                        If the offer is officially accepted - you will land. Explore us as if you were on a new planet, we look forward seeing you!
                                    </p>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
    <script type="module">
        import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

        const keenSlider = new KeenSlider(
            '#keen-slider',
            {
                loop: true,
                slides: {
                    origin: 'center',
                    perView: 1.25,
                    spacing: 16,
                },
                breakpoints: {
                    '(min-width: 1024px)': {
                        slides: {
                            origin: 'auto',
                            perView: 2.5,
                            spacing: 32,
                        },
                    },
                },
            },
            []
        )

        const keenSliderPrevious = document.getElementById('keen-slider-previous')
        const keenSliderNext = document.getElementById('keen-slider-next')

        keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
        keenSliderNext.addEventListener('click', () => keenSlider.next())
    </script>
</x-app-layout>
