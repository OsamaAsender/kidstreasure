@extends('layouts.app')

@section('title', 'Kids Treasure - Educational Toys & Workshops')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Welcome to Kids Treasure') }}
    </h2>
@endsection

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Hero Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 bg-gradient-to-r from-blue-50 to-purple-50">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="md:w-1/2 mb-6 md:mb-0 md:pr-8">
                            <h1 class="text-4xl font-bold text-gray-800 mb-4">Inspiring Young Minds</h1>
                            <p class="text-lg text-gray-600 mb-6">
                                Discover our educational treasure boxes and workshops designed to spark creativity, 
                                critical thinking, and a love for learning in children.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                                    Explore Products
                                </a>
                                <a href="#" class="bg-purple-500 hover:bg-purple-600 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                                    Join Workshops
                                </a>
                            </div>
                        </div>
                        <div class="md:w-1/2">
                            <img src="https://placehold.co/600x400/e0f2fe/1e40af?text=Kids+Treasure" alt="Kids Learning" class="rounded-lg shadow-md">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Featured Products Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Featured Products</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-blue-50 rounded-lg overflow-hidden shadow">
                            <img src="https://placehold.co/400x300/e0f2fe/1e40af?text=Innovation+Box" alt="Innovation Box" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Innovation Box</h3>
                                <p class="text-gray-600 mb-4">Spark creativity and problem-solving skills with our innovation treasure box.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-blue-600 font-bold">25 JOD</span>
                                    <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded font-medium text-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-green-50 rounded-lg overflow-hidden shadow">
                            <img src="https://placehold.co/400x300/dcfce7/166534?text=Creativity+Box" alt="Creativity Box" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Creativity Box</h3>
                                <p class="text-gray-600 mb-4">Unleash artistic talents and imagination with our creativity treasure box.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-green-600 font-bold">30 JOD</span>
                                    <a href="#" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded font-medium text-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-amber-50 rounded-lg overflow-hidden shadow">
                            <img src="https://placehold.co/400x300/fef3c7/92400e?text=Science+Box" alt="Science Box" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-xl font-semibold mb-2">Science Box</h3>
                                <p class="text-gray-600 mb-4">Explore the wonders of science with experiments and activities.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-amber-600 font-bold">35 JOD</span>
                                    <a href="#" class="bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded font-medium text-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Workshops Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Upcoming Workshops</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm">
                            <div class="p-5">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-xl font-semibold mb-2">Treasure and Creativity Workshop</h3>
                                        <p class="text-gray-600 mb-4">A fun-filled workshop where children learn to create and innovate.</p>
                                    </div>
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">Ages 6-10</span>
                                </div>
                                <div class="flex items-center text-gray-500 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>June 15, 2025 | 10:00 AM - 12:00 PM</span>
                                </div>
                                <div class="flex items-center text-gray-500 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span>Kids Treasure Center, Amman</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-purple-600 font-bold">15 JOD</span>
                                    <a href="#" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded font-medium text-sm">Register Now</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm">
                            <div class="p-5">
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-xl font-semibold mb-2">Science Explorers Workshop</h3>
                                        <p class="text-gray-600 mb-4">Discover the wonders of science through hands-on experiments.</p>
                                    </div>
                                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">Ages 8-12</span>
                                </div>
                                <div class="flex items-center text-gray-500 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>June 22, 2025 | 2:00 PM - 4:00 PM</span>
                                </div>
                                <div class="flex items-center text-gray-500 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span>Kids Treasure Center, Amman</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-green-600 font-bold">18 JOD</span>
                                    <a href="#" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded font-medium text-sm">Register Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials Section -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">What Parents Say</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                            <div class="flex items-center mb-4">
                                <div class="text-yellow-400 flex mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-600 italic mb-4">"The Innovation Box has been an amazing addition to our home learning. My son spends hours creating and experimenting with the materials. It's educational and fun at the same time!"</p>
                            <div class="font-medium">Layla Ahmad</div>
                            <div class="text-sm text-gray-500">Mother of Ahmad, 8 years old</div>
                        </div>
                        
                        <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                            <div class="flex items-center mb-4">
                                <div class="text-yellow-400 flex mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-gray-600 italic mb-4">"My daughter attended the Creativity Workshop and couldn't stop talking about it for days! The instructors were amazing and she made some beautiful crafts while learning important skills."</p>
                            <div class="font-medium">Omar Nasser</div>
                            <div class="text-sm text-gray-500">Father of Noor, 7 years old</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
