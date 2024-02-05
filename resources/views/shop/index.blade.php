<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User Task management
        </h2>
    </x-slot>

    <div class="flex justify-end">
        <a href="{{route('shop.create')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
            Create New Task
        </a>
    </div>
    <hr class="my-4">

    <table style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>first name</th>
                <th>last name</th>
                <th>task</th>
                <th>status</th>
                <th>created at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shops as $key =>$shop)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$shop->first_name}}</td>
                <td>{{$shop->last_name}}</td>
                <td>{{$shop->task}}</td>
                <td>{{$shop->status}}</td>
                <td>{{$shop->created_at}}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
</x-app-layout>
