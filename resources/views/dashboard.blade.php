<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "{{asset('images/logo.png')}}" type = "image/png">
    <title>Escort me</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
</head>

<body>
<div class="flex">
    <div class="px-4 py-2 bg-gray-200 bg-indigo-600 lg:w-1/4">
        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-8 h-8 text-white lg:hidden" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <div class="hidden lg:block">
            <div class="my-2 mb-6">
                <h1 class="text-2xl font-bold text-white">{{Auth::user()->name }}'s (Admin) Dashboard</h1>
            </div>
            <ul>
                <li class="mb-6">
                    <div class="relative"></div>
                </li>
                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <a href="{{ url('/') }}" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-home"></i></span>
                        <span class="text-sm font-medium">Home</span>
                    </a>
                </li>
                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <a href="{{url("/dashboard/laraturst")}}" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-user"></i></span>
                        <span class="text-sm font-medium">Permissions and users</span>
                    </a>
                </li>


                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <a href="{{route('BoobaSize.index')}}" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-clipboard"></i></span>
                        <span class="text-sm font-medium">see All BreastSize Categories</span>
                    </a>
                </li>
                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <a href="{{route('BoobaSize.create')}}" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-plus"></i></span>
                        <span class="text-sm font-medium">Add BreastSize Categories</span>
                    </a>
                </li>


                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <a href="{{route('ethnicity.index')}}" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-clipboard"></i></span>
                        <span class="text-sm font-medium">see All ethnicities</span>
                    </a>
                </li>
                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <a href="{{route('ethnicity.create')}}" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-plus"></i></span>
                        <span class="text-sm font-medium">Add ethnicity</span>
                    </a>
                </li>


                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <a href="{{route('WillingToEscort.index')}}" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-clipboard"></i></span>
                        <span class="text-sm font-medium">see All Willing To escort options</span>
                    </a>
                </li>
                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <a href="{{route('WillingToEscort.create')}}" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-plus"></i></span>
                        <span class="text-sm font-medium">Add Willing To escort option</span>
                    </a>
                </li>


                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <a href="{{route('EyeColor.index')}}" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-clipboard"></i></span>
                        <span class="text-sm font-medium">see All Eye Colors</span>
                    </a>
                </li>
                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <a href="{{route('EyeColor.create')}}" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-plus"></i></span>
                        <span class="text-sm font-medium">Add Eye Color</span>
                    </a>
                </li>


                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <a href="{{route('HairColor.index')}}" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-clipboard"></i></span>
                        <span class="text-sm font-medium">see Hair Colors</span>
                    </a>
                </li>
                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <a href="{{route('HairColor.create')}}" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-plus"></i></span>
                        <span class="text-sm font-medium">Add Hair Color</span>
                    </a>
                </li>

                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <a href="{{route('Posts.index')}}" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-clipboard"></i></span>
                        <span class="text-sm font-medium">See All Posts</span>
                    </a>
                </li>


                <li class="mb-2 rounded hover:shadow hover:bg-gray-800">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button type="submit" class="inline-block w-full h-full px-3 py-2 font-bold text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-log-out"></i></span>
                        <span class="text-sm font-medium">Log Out</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>

    </div>
    <div class="w-full px-4 py-2 bg-gray-200 lg:w-full">
        <div class="container mx-auto mt-12">
            <div class="grid gap-4 lg:grid-cols-3">
                <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                    <div class="p-3 bg-indigo-600 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div class="mx-4">
                        <h4 class="text-2xl font-semibold text-gray-700">{{\Illuminate\Support\Facades\DB::table('users')->count()}}</h4>
                        <div class="text-gray-500">All Users</div>
                    </div>
                </div>
                <div class="flex items-center px-4 py-6 bg-white rounded-md shadow-md">
                    <div class="p-3 bg-indigo-600 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path
                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                        </svg>
                    </div>
                    <div class="mx-4">
                        <h4 class="text-2xl font-semibold text-gray-700">{{\Illuminate\Support\Facades\DB::table('posts')->count()}}</h4>
                        <div class="text-gray-500">All Posts</div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col mt-8">
                <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
