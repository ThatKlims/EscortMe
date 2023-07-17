@extends('layouts.BasicLayout')

@section('content')
    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table>
                        <thead class="bg-gray-50">
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Country
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Delete
                            </th>
                        </thead>
                        <tbody class="bg-white">
                            @forelse($BoobaSizes as $BoobaSize)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            {{$BoobaSize->booba_size}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <form class="pt-3" action="{{route('BoobaSize.destroy', ['BoobaSize' => $BoobaSize->id])}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="px-4 py-1 text-sm text-white bg-blue-400 rounded" type="submit">delete &rarr;</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                No Breast Size categories have been created
                            @endforelse
                        </tbody>
                    </table>
                    <a class="px-4 py-1 text-sm text-white bg-blue-400 rounded m-t-10" href="{{route('dashboard')}}">return</a>
                </div>
            </div>
        </div>
    </div>
@endsection
