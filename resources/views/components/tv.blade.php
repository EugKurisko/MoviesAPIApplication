<h1 class="font-bold text-lg tracking-wider">{{ $title }} TVShows</h1>
            <div class="grid grid-cols-5 gap-x-3 gap-y-4 py-5">
    @foreach ($tvs as $tv)
                    <div class="mt-8 shadow-xl border-1 border-solid border-white rounded-3xl">
                        <div>
                            <a href="#">
                                <img src="https://image.tmdb.org/t/p/w500{{ $tv['poster_path'] }}" alt="movie">
                            </a>
                        </div>
                        <div class="flex justify-between items-center p-5">
                            <div class="bg-white">
                                <div class="mt-2 w-11/12 ">
                                    <a href="" class="mt-2 text-lg hover:text-blue-700 font-bold">
                                        {{ $tv['name'] }}
                                    </a>
                                </div>
                                <div class="mt-1">
                                    <span>
                                        {{ \Carbon\Carbon::parse($tv['first_air_date'])->toFormattedDateString()}}
                                    </span>
                                </div>
                            </div>
                            <div class="mr-4 w-11 h-11 bg-black border-2 border-solid border-green-600 rounded-full">
                                <span class="block text-white text-center p-2">{{ $tv['vote_average']*10 }}%</span>
                            </div>
                        </div>
                        <div class="mx-5 mb-2">
                            @foreach ($genres as $genre)
                                @foreach ($tv['genre_ids'] as $tvGenreId)
                                    @if ($tvGenreId === $genre['id'])
                                            {{ $genre['name'] }} |
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                @endforeach
                    </div>
                </div>
</div>