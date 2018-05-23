self.addEventListener( 'install', function ( event ) {
    var CACHE_NAME = 'booksgame_cache';
    var urlsToCache = [
        '/',
        'css/style-Copie.css',
        'css/styyle.css',
        'barcode.js',
        'jquery.js',
		'index.html',
		'equipe.html',
		'commencer_partie.html',
		'theme.html' , 
		'salle_rose.html',
		'livre_art.html',
		'livre_choisis.html',
		'code.html',
		'scan_valider.html'		
    ];
    event.waitUntil(
        caches.open( CACHE_NAME )
        .then( function ( cache ) {
            console.log( 'Opened cache' );
            return cache.addAll( urlsToCache );
        } )
    );
} );
self.addEventListener( 'fetch', function ( event ) {
    event.respondWith(
        caches.match( event.request )
        .then( function ( response ) {
            if ( response ) {
                return response;
            }
            return fetch( event.request );
        } )
    );
} );