<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Resources') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                     <table class="table-auto">
                         <thead>
                         <tr>
                             <th class="border">Title</th>
                             <th class="border">Type</th>
                             <th class="border">Posted</th>
                             <th class="border"></th>
                         </tr>
                         </thead>
                         <tbody>
                         @forelse($resources as $resource)
                             <tr>
                                 <td class="border">{{ $resource->title }}</td>
                                 <td class="border">{{ $resource->type->name }}</td>
                                 <td class="border">{{ $resource->posted_on }}</td>
                             </tr>
                         @empty
                         <tr>
                             <td colspan="3" class="border">No resources available</td>
                         </tr>
                         @endforelse
                         </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
