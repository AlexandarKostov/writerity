<x-app-layout :id="$career->id">
    <div class="bg-transparent">
        @if (session()->has('message'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                    {{ session()->get('message') }}
                </div>
                <button x-on:click="show = false" type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @endif
        <article class="col-span-4 md:col-span-3 mt-10 mx-auto py-5 w-full max-w-4xl px-4 sm:px-6 md:px-8">
            <!-- Image Section -->
            <img class="my-2 rounded-lg mx-auto w-full max-w-[600px]" src="{{ $career->getThumbnail() }}" alt="thumbnail">

            <!-- Title Section -->
            <h1 class="text-2xl md:text-4xl font-bold text-left text-gray-800 mt-4">
                {{ $career->title }}
            </h1>

            <!-- Valid Status Badge -->
            <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
        @if($career->is_valid === 1)
                    This position is still available.
                @endif
    </span>

            <!-- Description Section -->
            <div class="article-content py-3 text-gray-800 text-lg text-justify">
                {{ $career->description }}
            </div>

            <!-- Location Section -->
            <div class="article-content py-3 text-gray-800 text-lg text-justify">
                <p class="font-bold">Location :</p> <span>{{ $career->location }}</span>
            </div>

            <!-- Requirements Section -->
            <div class="article-content py-3 text-gray-800 text-lg text-justify">
                @if($career->requirement_one || $career->requirement_two)
                    <p class="font-bold">What we are looking for:</p>
                    @if($career->requirement_one)
                        <li>{{ $career->requirement_one }}</li>
                    @endif
                    @if($career->requirement_two)
                        <li>{{ $career->requirement_two }}</li>
                    @endif
                @endif
            </div>

            <!-- Preferred Section -->
            <div class="article-content py-3 text-gray-800 text-lg text-justify">
                @if($career->preferred_one)
                    <p class="font-bold">Preferred:</p>
                    <li>{{ $career->preferred_one }}</li>
                @endif
            </div>

            <!-- Working Conditions Section -->
            <div class="article-content py-3 text-gray-800 text-lg text-justify">
                @if($career->working_condition_one || $career->working_condition_two || $career->working_condition_three)
                    <p class="font-bold">Working Conditions:</p>
                    @if($career->working_condition_one)
                        <li>{{ $career->working_condition_one }}</li>
                    @endif
                    @if($career->working_condition_two)
                        <li>{{ $career->working_condition_two }}</li>
                    @endif
                    @if($career->working_condition_three)
                        <li>{{ $career->working_condition_three }}</li>
                    @endif
                @endif
            </div>

            <!-- Benefits Section -->
            <div class="article-content py-3 text-gray-800 text-lg text-justify">
                @if($career->benefit_one || $career->benefit_two || $career->benefit_three)
                    <p class="font-bold">Benefits working here:</p>
                    @if($career->benefit_one)
                        <li>{{ $career->benefit_one }}</li>
                    @endif
                    @if($career->benefit_two)
                        <li>{{ $career->benefit_two }}</li>
                    @endif
                    @if($career->benefit_three)
                        <li>{{ $career->benefit_three }}</li>
                    @endif
                @endif
            </div>
        </article>


    @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        <form action="{{ route('applicant.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto px-4">
            @csrf
            @method('POST')
            <input type="hidden" id="career_id" name="career_id" value="{{ $career->id }}">
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-black">Your full name</label>
                <input type="text" name="name" id="name" class="border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="John Doe" required />
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-black">Your email</label>
                <input type="email" name="email" id="email" class="border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="name@writerity.com" required />
            </div>

            <div class="mb-5">
                <label for="country" class="block mb-2 text-sm font-medium text-black">Country</label>
                <input type="text" name="country" id="country" class="border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="Japan" required />
            </div>

            <div class="mb-5">
                <label for="city" class="block mb-2 text-sm font-medium text-black">City</label>
                <input type="text" name="city" id="city" class="border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="Tokyo" required />
            </div>

            <div class="mb-5">
                <label for="phone_number" class="block mb-2 text-sm font-medium text-black">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" placeholder="+080-1234-5678" required />
            </div>

            <div class="mb-5">
                <label for="birth_date" class="block mb-2 text-sm font-medium text-black">Date of birth</label>
                <input type="date" name="birth_date" id="birth_date" class="border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" required />
            </div>

            <div class="mb-5">
                <label for="motivational_letter">Motivational letter</label>
                <textarea id="motivational_letter" type="text" name="motivational_letter"
                          autocomplete="motivational_letter"
                          class="block px-0 w-full text-sm text-black-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"></textarea>

            </div>

            <div class="mb-5">
                <label for="cv" class="block mb-2 text-sm font-medium text-black">Attach your CV</label>
                <input type="file" name="cv" id="cv" class="border border-gray-300 text-black text-sm rounded-lg block w-full p-2.5" required />
            </div>

            <button type="submit" class="text-white bg-black font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Apply</button>
        </form>

    </div>

</x-app-layout>
