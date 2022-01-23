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
                    <div id=timer>
                        <h1>Time : 60S<h1>
                    </div>
                    <form action="{{route('submit')}}" method="post">
                        @csrf
                        @foreach ($question as $key=>$val)
                        <div>
                            <x-label for="question{{$key}}" :value="$val->question" />

                            <x-input class="block mt-1 w-full" type="text" name="answer_{{$val->id}}" autofocus />
                        </div>
                        @endforeach
                        <x-button id="submit" class="ml-3 mt-1">
                            {{ __('Submit') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var time = 60
        setInterval(function(){
            time = time-1;
            if(time == 0){
                document.getElementById("submit").click()
            }
            document.getElementById("timer").innerHTML = `<h1>Time : ${time}S<h1>`
        },1000)
    </script>
</x-app-layout>