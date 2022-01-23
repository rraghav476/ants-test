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
                    @if ($passmsg??FALSE)
                        <div>{{$passmsg}}</div>
                    @elseif ($failmsg??FALSE)
                        <div>{{$failmsg}}</div>
                    @endif

                    <table class="table-auto">
                        <tr>
                            <th >Level</th> <th >Attempt</th><th>Action</th>
                        </tr>
                        <tr>
                            <td >{{$userInfo->level}}</td> 
                            <td >{{$userInfo->attempt}}</td>
                            <td>
                                @if($userInfo->attempt == 2)
                                    all attempt take by you
                                @else
                                    <a  href="{{route('startTest')}}">
                                        <x-button >
                                        {{ __('Start Test') }}
                                        </x-button>
                                    </a>
                                @endif
                            </td>
                        </td>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
