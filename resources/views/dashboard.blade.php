<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
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
    <div class="container text-center">
        <h2>Welcome in our website</h2>
        <a href="{{route('category.list')}}" class="btn btn-primary m-5">Show Categories</a>
        <a href="{{route('article.list')}}" class="btn btn-primary m-5">Show Articles</a>
    </div>
</x-app-layout>
