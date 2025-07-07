<x-app-layout title="Applicant">
    <div class="bg-transparent py-12">
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
        <div class="flex flex-col items-center justify-center text-center px-4">
            <h1 class="max-w-4xl font-display text-3xl sm:text-5xl font-bold tracking-normal text-black">
                Here you will find <span class="text-red-700">all Applicants.</span>
            </h1>
            <div class="w-full mt-10 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm font-light border border-gray-300 shadow-md rounded-lg">
                        <thead class="bg-gray-200 text-gray-700">
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Career ID</th>
                            <th class="px-4 py-2">User ID</th>
                            <th class="px-4 py-2 text-green-600">Accepted</th>
                            <th class="px-4 py-2">Full Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">CV</th>
                            <th class="px-4 py-2 hidden md:table-cell">M.Letter</th>
                            <th class="px-4 py-2 hidden lg:table-cell">Country</th>
                            <th class="px-4 py-2 hidden lg:table-cell">City</th>
                            <th class="px-4 py-2 hidden xl:table-cell">Phone</th>
                            <th class="px-4 py-2 hidden xl:table-cell">Birth</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($applicants as $applicant)
                            <tr class="border-t hover:bg-gray-100">
                                <td class="px-4 py-2">{{ $applicant->id }}</td>
                                <td class="px-4 py-2">{{ $applicant->career_id }}</td>
                                <td class="px-4 py-2">{{ $applicant->user_id }}</td>
                                <td class="px-4 py-2 font-bold {{ is_null($applicant->is_accepted) ? 'text-black' : ($applicant->is_accepted == 1 ? 'text-green-600' : 'text-red-700') }}">
                                    {{ is_null($applicant->is_accepted) ? 'In Review' : ($applicant->is_accepted == 1 ? 'Accepted' : 'Not Accepted') }}
                                </td>
                                <td class="px-4 py-2">{{ $applicant->name }}</td>
                                <td class="px-4 py-2">{{ $applicant->email }}</td>
                                <td class="px-4 py-2">
                                    <a href="{{ route('applicant.download', $applicant->id) }}" class="text-blue-500 hover:underline">
                                        Download CV
                                    </a>
                                </td>
                                <td class="px-4 py-2 hidden md:table-cell">{{ $applicant->motivational_letter }}</td>
                                <td class="px-4 py-2 hidden lg:table-cell">{{ $applicant->country }}</td>
                                <td class="px-4 py-2 hidden lg:table-cell">{{ $applicant->city }}</td>
                                <td class="px-4 py-2 hidden xl:table-cell">{{ $applicant->phone_number }}</td>
                                <td class="px-4 py-2 hidden xl:table-cell">{{ $applicant->birth_date }}</td>
                                <td class="px-4 py-2">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('applicant.edit', $applicant->id) }}" class="text-blue-600 hover:underline">Edit</a>
                                        <form action="{{ route('applicant.destroy', $applicant->id) }}" method="POST" class="text-red-600 hover:text-red-900">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="text-red-700 hover:underline">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
