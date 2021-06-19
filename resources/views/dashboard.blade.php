<x-app-layout>
    <x-slot name="header">
        <a href="/" class="no-underline hover:underline hover:text-blue-400"><i class="fa fa-home"></i> Home </a><i class="fa fa-angle-right"></i>
        <?php $link = "" ?>
        @for($i = 1; $i <= count(Request::segments()); $i++)
            @if($i < count(Request::segments()) & $i > 0)
            <?php $link .= "/" . Request::segment($i); ?>
            <a href="<?= $link ?>" class="no-underline hover:underline hover:text-blue-400">{{ ucwords(str_replace('-',' ',Request::segment($i)))}}</a> >
            @else <a href="<?= $link ?>" class="underline text-blue-400 hover:text-blue-600">{{ucwords(str_replace('-',' ',Request::segment($i)))}}</a>
            @endif
        @endfor
    </x-slot>

    <div class="h-screen">
        <div class="flex h-full">
            <div class="w-1/4 bg-no-repeat bg-cover bg-center inline-block" style="background-image:url(img/sidebar.jpg)">
                <div class="border-b py-4 flex-row mb-1">
                    <img src="{{ asset('img/1.jpg') }}" class="block rounded-full mx-auto h-24">
                    <a href="" class="text-gray-100 font-semibold items-center">Edy Ridwan Hutagalung</a>
                    <p class="text-gray-500 font-medium items-center">Web Developer</p>
                </div>
                <ul class="flex flex-col mx-2 space-y-6 text-gray-100 shadow">
                    <li class="hover:text-green-400">
                        <a href="#" class="hover:underline"><i class="fa fa-user fa-lg mr-3"> Profile</i></a>
                    </li>
                    <li class="hover:text-green-400">
                        <a href="#" class="hover:underline"><i class="fa fa-envelope fa-lg mr-3"> Inbox</i></a>
                    </li>
                    <li class="hover:text-green-400">
                        <a href="#" class="hover:underline"><i class="fa fa-shopping-cart fa-lg mr-3"> Sales</i></a>
                    </li>
                    <li class="hover:text-green-400">
                        <a href="#" class="hover:underline"><i class="fa fa-line-chart fa-lg mr-3"> Analytics</i></a>
                    </li>
                    <li class="hover:text-green-400">
                        <a href="#" class="hover:underline"><i class="fa fa-bar-chart fa-lg mr-3"> Charts</i></a>
                    </li>
                    <li class="hover:text-green-400">
                        <a href="#" class="hover:underline"><i class="fa fa-table fa-lg mr-3"> Tables</i></a>
                    </li>
                    <li class="hover:text-green-400">
                        <a href="#" class="hover:underline"><i class="fa fa-wrench fa-lg mr-3"> Settings</i></a>
                    </li>
                    <li class="hover:text-green-400">
                        <a href="#" class="hover:underline"><i class="fa fa fa-file fa-lg mr-3"> Documentation</i></a>
                    </li>
                </ul>
            </div>
            <div class="w-3/4">
                <div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-md space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
                    <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:flex-shrink-0" src="{{asset('img/1.jpg')}}" alt="Woman's Face">
                    <div class="text-center space-y-2 sm:text-left">
                        <div class="space-y-0.5">
                            <p class="text-lg text-black font-semibold">
                            Erin Lindford
                            </p>
                            <p class="text-gray-500 font-medium">
                            Product Engineer
                            </p>
                        </div>
                        <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}

</x-app-layout>
