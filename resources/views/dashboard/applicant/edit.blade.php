<x-app-layout>
    <div class="container mx-auto py-8 max-w-4xl">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-6 text-gray-700">Applicant Details</h2>


            <form action="{{ route('applicant.update', $applicant->id) }}" method="POST">
                @csrf
                @method('PATCH')
            <!-- General Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="id" class="block text-sm font-medium text-gray-700">Applicant ID</label>
                        <p class="mt-1 text-gray-800 bg-gray-50 p-2 rounded">{{ $applicant->id }}</p>
                    </div>
                    <div>
                        <label for="career_id" class="block text-sm font-medium text-gray-700">Career ID</label>
                        <p class="mt-1 text-gray-800 bg-gray-50 p-2 rounded">{{ $applicant->career_id }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label for="user_id" class="block text-sm font-medium text-gray-700">User ID</label>
                        <p class="mt-1 text-gray-800 bg-gray-50 p-2 rounded">{{ $applicant->user_id }}</p>
                    </div>
                    <div>
                        <label for="is_accepted" class="block text-sm font-medium text-gray-700">Accepted?</label>
                        <select
                            name="is_accepted"
                            id="is_accepted"
                            class="mt-1 block w-full h-10 border rounded px-4 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                            <option value="" {{ is_null($applicant->is_accepted) ? 'selected' : '' }}>In Review</option>
                            <option value="1" {{ $applicant->is_accepted == 1 ? 'selected' : '' }}>Accepted</option>
                            <option value="0" {{ $applicant->is_accepted === 0 ? 'selected' : '' }}>Not Accepted</option>
                        </select>
                    </div>
                </div>

                <!-- Personal Information -->
                <h3 class="text-lg font-semibold mt-8 mb-4 text-gray-700">Personal Information</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <p class="mt-1 text-gray-800 bg-gray-50 p-2 rounded">{{ $applicant->name }}</p>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <p class="mt-1 text-gray-800 bg-gray-50 p-2 rounded">{{ $applicant->email }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                        <p class="mt-1 text-gray-800 bg-gray-50 p-2 rounded">{{ $applicant->country }}</p>
                    </div>
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                        <p class="mt-1 text-gray-800 bg-gray-50 p-2 rounded">{{ $applicant->city }}</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <p class="mt-1 text-gray-800 bg-gray-50 p-2 rounded">{{ $applicant->phone_number }}</p>
                    </div>
                    <div>
                        <label for="birth_date" class="block text-sm font-medium text-gray-700">Birth Date</label>
                        <p class="mt-1 text-gray-800 bg-gray-50 p-2 rounded">{{ $applicant->birth_date }}</p>
                    </div>
                </div>

                <!-- Documents -->
                <h3 class="text-lg font-semibold mt-8 mb-4 text-gray-700">Documents</h3>
                <div>
                    <label for="cv" class="block text-sm font-medium text-gray-700">CV</label>
                    <p id="cv" class="mt-1 text-blue-500 hover:underline">
                        <a href="{{ route('applicant.download', $applicant->id) }}">Download CV</a>
                    </p>
                </div>

                <div class="mt-4">
                    <label for="motivational_letter" class="block text-sm font-medium text-gray-700">Motivational Letter</label>
                    <textarea
                        id="motivational_letter"
                        readonly
                        class="mt-1 block w-full h-24 border rounded px-4 bg-gray-50 resize-none"
                    >{{ $applicant->motivational_letter }}</textarea>
                </div>

                <!-- Action Buttons -->
                <div class="mt-8 flex justify-between">
                    <a href="{{ \Illuminate\Support\Facades\URL::previous() }}"
                       class="text-blue-600 hover:underline">
                        Back
                    </a>
                    <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>


</x-app-layout>
