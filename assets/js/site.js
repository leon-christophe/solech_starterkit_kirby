// ------------------------- Plyr video -------------------------

// Initialisation du javascript pour utiliser 
// la bibliothèque Plyr qui sert entre autre à customiser les lecteurs vidéos

var players = document.querySelectorAll(".player");
if(players.length){
    for(var i = 0; i< players.length; i++) {
        const player = new Plyr(players[i], {
            controls:['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'pip', 'airplay', 'fullscreen'],
        });
    }
};