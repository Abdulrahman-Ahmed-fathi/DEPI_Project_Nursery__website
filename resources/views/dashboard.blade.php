<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-lg">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-6">Dashboard</h2>
           <ul>
    <li class="mb-4">
        <a href="" class="text-gray-700 font-semibold block hover:bg-gray-100 p-2 rounded-lg">About</a>
    </li>
    <li class="mb-4">
        <a href="" class="text-gray-700 font-semibold block hover:bg-gray-100 p-2 rounded-lg">Blog</a>
    </li>
    <li class="mb-4">
        <a href="" class="text-gray-700 font-semibold block hover:bg-gray-100 p-2 rounded-lg">Seat Bookings</a>
    </li>
    <li class="mb-4">
        <a href="" class="text-gray-700 font-semibold block hover:bg-gray-100 p-2 rounded-lg">Categories</a>
    </li>
    <li class="mb-4">
        <a href="" class="text-gray-700 font-semibold block hover:bg-gray-100 p-2 rounded-lg">Contacts</a>
    </li>
    <li class="mb-4">
        <a href="" class="text-gray-700 font-semibold block hover:bg-gray-100 p-2 rounded-lg">Courses</a>
    </li>
    <li class="mb-4">
        <a href="" class="text-gray-700 font-semibold block hover:bg-gray-100 p-2 rounded-lg">Facilities</a>
    </li>
    <li class="mb-4">
        <a href="" class="text-gray-700 font-semibold block hover:bg-gray-100 p-2 rounded-lg">Images</a>
    </li>
   
    <li class="mb-4">
        <a href="" class="text-gray-700 font-semibold block hover:bg-gray-100 p-2 rounded-lg">Teachers</a>
    </li>
    <li class="mb-4">
        <a href="" class="text-gray-700 font-semibold block hover:bg-gray-100 p-2 rounded-lg">Testimonials</a>
    </li>
    <li class="mb-4">
        <a href="" class="text-gray-700 font-semibold block hover:bg-gray-100 p-2 rounded-lg">Users</a>
    </li>
     <li class="mb-4">
        <a href="" class="text-gray-700 font-semibold block hover:bg-gray-100 p-2 rounded-lg">Settings</a>
    </li>
</ul>

            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 bg-gray-100 p-6">
            <div class="mb-4">
                <h1 class="text-3xl font-semibold">Welcome to Your Dashboard</h1>
            </div>

           
        </main>
    </div>
</x-app-layout>

