<div class="bg-transparent text-slate-300">
    <div class="py-2 px-4 mx-auto max-w-screen-xl text-center lg:py-8 lg:px-12">
        <h1 class="font-bold text-lg lg:text-3xl bg-gradient-to-br from-white via-white/50 to-transparent bg-clip-text text-black">Dashboard<span class="text-black">.</span></h1>
        <p class="text-slate-600 text-sm mb-2">Welcome back,</p>
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
            <div class="flex flex-col md:flex-row space-y-5 md:space-y-0 md:space-x-5 my-5 justify-center">
                <a href="{{ route('applicant.index') }}" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="relative flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-red-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-black leading-4 group-hover:text-red-700">Applicants</p>
                            <p class="text-slate-600 text-sm hidden md:block">Manage applicants</p>
                        </div>
                    </div>
                </a>
                <a href="{{ route('filament.admin.auth.login') }}" class="hover:bg-white/10 transition duration-150 ease-linear rounded-lg py-3 px-2 group">
                    <div class="flex flex-col space-y-2 md:flex-row md:space-y-0 space-x-2 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-red-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-base lg:text-lg text-black leading-4 group-hover:text-red-700">Admin Panel</p>
                            <p class="text-slate-600 text-sm hidden md:block">Open admin panel</p>
                        </div>
                    </div>
                </a>
            </div>
            <hr class="my-2 border-slate-700">
            <main>
                <div class="pt-6 px-4">
                    <div class="w-full grid grid-cols-1 xl:grid-cols-2 gap-4">
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8">
                            <div class="mb-4 flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Latest 72H</h3>
                                    <span class="text-base font-normal text-gray-500">This is a list of latest registered users</span>
                                </div>
                            </div>
                            <div class="flex flex-col mt-8">
                                <div class="overflow-x-auto rounded-lg">
                                    <div class="align-middle inline-block min-w-full">
                                        <div class="shadow overflow-hidden sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Name
                                                    </th>
                                                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Date & Time
                                                    </th>
                                                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Role
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="bg-white">
                                                @if($recentUsers->isEmpty())
                                                    <tr>
                                                        <td colspan="3" class="p-4 text-center">No new users in the past 72 hours.</td>
                                                    </tr>
                                                @else
                                                    @foreach($recentUsers as $recentUser)
                                                        <tr>
                                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                                Our new user <span class="font-semibold">{{ $recentUser->name }}</span>
                                                            </td>
                                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                                {{ $recentUser->created_at->format('M d, Y') }}
                                                            </td>
                                                            <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                                {{ $recentUser->role->name }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second table starts here -->
                        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8">
                            <div class="mb-4 flex items-center justify-between">
                                <div>
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Latest 72H</h3>
                                    <span class="text-base font-normal text-gray-500">This is a list of latest registered administrators</span>
                                </div>
                            </div>
                            <div class="flex flex-col mt-8">
                                <div class="overflow-x-auto rounded-lg">
                                    <div class="align-middle inline-block min-w-full">
                                        <div class="shadow overflow-hidden sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Name
                                                    </th>
                                                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Date & Time
                                                    </th>
                                                    <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Role
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="bg-white">
                                                @if($recentAdmins->isEmpty())
                                                    <tr>
                                                        <td colspan="3" class="p-4 text-center">No new administrators in the past 72 hours.</td>
                                                    </tr>
                                                @else
                                                    @foreach($recentAdmins as $recentAdmin)
                                                        <tr>
                                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                                                Our new admin <span class="font-semibold">{{ $recentAdmin->name }}</span>
                                                            </td>
                                                            <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                                                {{ $recentAdmin->created_at->format('M d, Y') }}
                                                            </td>
                                                            <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                                                {{ $recentAdmin->role->name }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
                <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold leading-none text-gray-900">Latest Users</h3>
                    </div>
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200">
                            @foreach($users as $user)
                                <li class="py-3 px-2 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="h-8 w-8 rounded-full object-cover" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" />
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm font-medium text-gray-900 truncate">
                                                {{ $user->name }}
                                            </p>
                                            <p class="text-sm text-gray-500 truncate">
                                                {{ auth()->user()->isAdmin() || $user->role->name != 'administrator' ? $user->role->name : 'N/A' }}
                                            </p>
                                        </div>
                                        <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                            {{ $user->country }}
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                    <h3 class="text-xl leading-none font-bold text-gray-900 mb-10">Acquisition Overview</h3>
                    <div class="block w-full overflow-x-auto">
                        <table class="items-center w-full bg-transparent border-collapse">
                            <thead>
                            <tr>
                                <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">Top Roles</th>
                                <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">Users</th>
                                <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px"></th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                            @foreach($roles as $role)
                                @php
                                    $userCount = $userCounts[$role->id] ?? 0;
                                    $percentage = $totalUsers > 0 ? ($userCount / $totalUsers) * 100 : 0;
                                    $roundedPercentage = round($percentage);
                                @endphp
                                @if($role->name != 'administrator' || auth()->user()->isAdmin())
                                    <tr class="text-gray-500">
                                        <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">{{ $role->name }}</th>
                                        <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">{{ $userCounts[$role->id] ?? 0 }}</td>
                                        <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                            <div class="flex items-center">
                                                <span class="mr-2 text-xs font-medium">{{ $roundedPercentage }}%</span>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
