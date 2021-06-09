<h1 class="font-bold text-lg tracking-wider">{{ $title }} Movies</h1>
            <div class="grid grid-cols-5 gap-x-3 gap-y-4 py-5">
                @foreach ($movies as $movie)
                    <div class="mt-8 shadow-xl border-1 border-solid border-white rounded-3xl">
                        <div>
                            <a href="#">
                                <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}" alt="movie">
                            </a>
                        </div>
                        <div class="flex justify-between items-center p-5">
                            <div class="bg-white">
                                <div class="mt-2 w-11/12 ">
                                    <a href="" class="mt-2 text-lg hover:text-blue-700 font-bold">
                                        {{ $movie['title'] }}
                                    </a>
                                </div>
                                <div class="mt-1">
                                    <span>
                                        {{ \Carbon\Carbon::parse($movie['release_date'])->toFormattedDateString()}}
                                    </span>
                                </div>
                            </div>
                            <div class="mr-4 w-11 h-11 bg-black border-2 border-solid border-green-600 rounded-full">
                                <span class="block text-white text-center p-2">{{ $movie['vote_average']*10 }}%</span>
                            </div>
                        </div>
                        <div class="mx-5 mb-2">
                            @foreach ($genres as $genre)
                                @foreach ($movie['genre_ids'] as $movieGenreId)
                                    @if ($movieGenreId === $genre['id'])
                                            {{ $genre['name'] }} |
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>