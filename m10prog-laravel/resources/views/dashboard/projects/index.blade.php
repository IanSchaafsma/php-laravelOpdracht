
@vite('resources/css/app.css')
   
        <h2 class="font-semibold text-xl text-dark dark:text-gray-200 leading-tight">
            In project folder 
            {{ ('Dashboard') }}
        </h2>

    <div class="py-12 bg-black">
        <div class="max-w-7xl mx-auto p4 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-white-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                @foreach($projects as $project)
                <a class="text-black" href="{{$project->title}}">{{ $project->titel }} -</a>
                <a class="text-black" href="{{$project->description}}">{{ $project->description }}</a><br>

                <a href="{{route('url.edit', ['url' => $project])}}" class="text-red-600 btn btn-primary">Wijzig</a>
                <form action="{{ route('url.destroy', ['url' => $project]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="text-white bg-red-500 hover:bg-red-700 py-1 px-2 rounded" type="submit">Verwijderen</button>
                        </form>
                <br>

                @endforeach
                {{$projects->links()}}
                </div>
                @auth
                <a href="{{route('url.create')}}" class="bg-green hover:bg-green text-black font-bold py-2 px-4 rounded float-right">
                {{ __('New project') }}
                </a>
                @endauth
            </div>
        </div>
    </div>