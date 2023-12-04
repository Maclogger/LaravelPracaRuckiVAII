document.addEventListener('DOMContentLoaded', function() {



    try {
        // Získanie modálneho okna
        var modalEdit = document.getElementById("editModal");
        var modalZmenaHesla = document.getElementById("editZmenaHelsaModal");
        var sekcia_profilove_informacie = document.getElementById("sekcia_profilove_informacie");


        // Získanie tlačidla, ktoré otvorí modálne okno
        var btnUpravaUdajov = document.getElementById("editaciaBtn");
        var btnZmenaHesla = document.getElementById("zmenaHeslaBtn");

        // Získanie elementu <span>, ktorý zatvorí modálne okno
        var spans = document.getElementsByClassName("close_profilove_informacie_js");



        // Použitie forEach na iteráciu cez všetky prvky s triedou 'close_profilove_informacie_js'
        Array.from(spans).forEach(function(span) {
            span.onclick = function() {
                modalEdit.style.display = "none";
                sekcia_profilove_informacie.style.display = "block";
                modalZmenaHesla.style.display = "none";
            };
        });


        // Keď používateľ klikne na tlačidlo, otvorí sa modálne okno
        btnUpravaUdajov.onclick = function() {
            modalEdit.style.display = "block";
            sekcia_profilove_informacie.style.display = "none";
        }


        btnZmenaHesla.onclick = function () {
            modalEdit.style.display = "none";
            sekcia_profilove_informacie.style.display = "none";
            modalZmenaHesla.style.display = "block";
        }
    } catch (e) {

    }

    try {
        document.getElementById('pridaj_cestu').addEventListener('submit', function() {
            return confirm('Potvrdiť vytvorenie cesty?');
        });
    } catch (e) {

    }

});


function updateVytazenostValue(value) {
    document.getElementById('vytazenostValue').textContent = value;
}


document.addEventListener('DOMContentLoaded', (event) => {

});



