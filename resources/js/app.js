require('./bootstrap');

$('#menu-movies').on('mouseover', addContentMovies);
$('#zone-movies').on('mouseleave', removeContent);

$('#menu-tvs').on('mouseover', addContentTVS);
$('#zone-tvs').on('mouseleave', removeContent);

$('#menu-actors').on('mouseover', addContentActors);
$('#zone-actors').on('mouseleave', removeContent);

function addContentMovies() {
    $('#drop-movies').append(`
    <div id="drop" class="origin-top-right absolute right-0 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
        <div id="drop-items" class="py-1" role="none">
            ${addMovies()}
        </div>
    </div > `);
}

function addContentTVS() {
    $('#drop-tvs').append(`
    <div id="drop" class="origin-top-right absolute right-0 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
        <div id="drop-items" class="py-1" role="none">
            ${addTVShows()}
        </div>
    </div > `);
}

function addContentActors() {
    $('#drop-actors').append(`
    <div id="drop" class="origin-top-right absolute right-0 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
        <div id="drop-items" class="py-1" role="none">
            ${addActors()}
        </div>
    </div > `);
}

function removeContent() {
    console.log(2);
    $('#drop').removeAttr('id', 'drop').remove();
}

function addMovies() {
    return `
        <a href="/movies" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200" role="menuitem" tabindex="-1" id="menu-item-0">Popular</a>
        <a href="/movies/now-playing" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200"" role="menuitem" tabindex="-1" id="menu-item-1">Now Playing</a>
        <a href="/movies/upcoming" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200"" role="menuitem" tabindex="-1" id="menu-item-2">Upcoming</a>
        <a href="/movies/top-rated" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200"" role="menuitem" tabindex="-1" id="menu-item-2">Top Rated</a>
        `;
}

function addTVShows() {
    return `
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200" role="menuitem" tabindex="-1" id="menu-item-0">Popular</a>
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200" role="menuitem" tabindex="-1" id="menu-item-1">Airing Today</a>
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200" role="menuitem" tabindex="-1" id="menu-item-2">On The Air</a>
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200" role="menuitem" tabindex="-1" id="menu-item-2">Top Rated</a>
    `;
}

function addActors() {
    return `
        <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200" role="menuitem" tabindex="-1" id="menu-item-0">Popular</a>
    `;
}