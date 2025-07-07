<footer class="bg-transparent">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset('bg-images/logo.png')}}" class="h-20" alt="Writerity Logo" />
            </a>
            <ul class="text-sm space-x-4 flex items-center flex-wrap justify-center py-4">
                <li>
                    <a href="{{ route('about-us') }}" class="text-gray-500 hover:text-green-500">About Us</a>
                </li>
{{--                <li>--}}
{{--                    <a class="text-gray-500 hover:text-green-500" href="">Privacy Policy</a>--}}
{{--                </li>--}}
                <li>
                    <a href="{{ route('blog.index') }}" class="text-gray-500 hover:text-green-500">Blog</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="text-gray-500 hover:text-green-500">Login</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="{{ route('home') }}" class="hover:underline">Writerity™</a>. All Rights Reserved.</span>

        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400"">str. Vasil Stefoski no. 36 A, Ohrid <br><span class="hover:underline">+389 77 861 413</span></span>
    </div>
</footer>


