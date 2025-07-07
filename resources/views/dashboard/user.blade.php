<div class="bg-transparent text-slate-300">
    <div class="py-2 px-4 mx-auto max-w-screen-xl text-center lg:py-8 lg:px-12">
        <h1 class="font-bold text-lg lg:text-3xl bg-gradient-to-br from-white via-white/50 to-transparent bg-clip-text text-black">Dashboard<span class="text-black">.</span></h1>
        <p class="text-slate-600 text-sm mb-2">Welcome back, User</p>
        <div class="bg-white/10 col-span-3 rounded-lg p-4 text-center">
            <a wire:navigate href="{{ route('profile.show') }}" class="flex flex-col space-y-2 md:space-y-0 md:flex-row mb-5 items-center md:space-x-2 hover:bg-white/10 group transition duration-150 ease-linear rounded-lg group w-full py-3 px-2 justify-center">
                <div>
                    <img class="rounded-full w-20 h-20 relative object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                </div>
                <div>
                    <p class="font-medium group-hover:text-red-700 leading-4 text-black">{{ Auth::user()->name }}</p>
                    <span class="text-xs text-slate-400">Joined in {{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('F Y') }}</span>
                </div>
            </a>
            <hr class="my-2 border-slate-700">
            <main>
                <div class="relative px-6 lg:px-8 py-2">
                    <div class="bg-white py-12 sm:py-16">
                        <div class="mx-auto max-w-7xl px-6 lg:px-8">
                            <div class="mx-auto max-w-2xl lg:max-w-4xl text-center">
                                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Your Applies</h2>
                                @if($userApplicationsCount > 0)
                                    <p class="text-black text-sm mb-4">You applied to {{ $userApplicationsCount }} position/s.</p>
                                @else
                                    <p class="text-black text-sm mb-4">You have not applied to any positions yet.</p>
                                @endif
                            </div>
                            <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                                @foreach($applications as $application)
                                    @if($application->career->is_valid === 1)
                                        <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                                            @if($application->career->image)
                                                <div
                                                    class="relative h-auto mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                                                    <img
                                                        src="{{ $application->career->getThumbnail() }}"
                                                        alt="card-image" />
                                                </div>
                                            @endif
                                            <div class="p-6">
                                                <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                                    {{ $application->career->title }}
                                                </h5>
                                                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                                    {{ $application->career->description }}
                                                </p>
                                            </div>
                                                <hr class="border-slate-300">
                                                <div class="flex flex-col justify-center items-center">
                                                    <p class="block font-bold text-black antialiased">
                                                        {{ $application->name }}
                                                    </p>
                                                    <p class="block font-bold text-black antialiased">
                                                        {{ $application->email }}
                                                    </p>
                                                    <p class="whitespace-nowrap px-6 py-4 font-bold
                                                        {{ is_null($application->is_accepted) ? 'text-black' : ($application->is_accepted == 1 ? 'text-green-600' : 'text-red-700') }}">
                                                        {{ is_null($application->is_accepted) ? 'In Review' : ($application->is_accepted == 1 ? 'Accepted' : 'Not Accepted') }}
                                                    </p>
                                                </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
