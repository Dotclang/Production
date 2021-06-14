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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
