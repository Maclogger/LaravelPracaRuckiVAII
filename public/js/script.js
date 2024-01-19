document.addEventListener('DOMContentLoaded', function() {

    // zobrazovanie okienok pri profilových informáciách
    try {
        // Získanie modálneho okna
        var modalEdit = document.getElementById("editModal");
        var modalZmenaHesla = document.getElementById("editZmenaHelsaModal");
        var sekcia_profilove_informacie = document.getElementById("sekcia_profilove_informacie");


        // Získanie tlačidla, ktoré otvorí modálne okno
        var btnUpravaUdajov = document.getElementById("editaciaBtn");
        var btnZmenaHesla = document.getElementById("zmenaHeslaBtn");


        // Keď používateľ klikne na tlačidlo, otvorí sa modálne okno
        btnUpravaUdajov.onclick = function() {
            modalEdit.style.display = "block";
            sekcia_profilove_informacie.style.display = "none";
            modalZmenaHesla.style.display = "none";
        }


        btnZmenaHesla.onclick = function () {
            modalEdit.style.display = "none";
            sekcia_profilove_informacie.style.display = "none";
            modalZmenaHesla.style.display = "block";
        }

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

    } catch (e) {}

    // potvrdzovaci formulár pri pridávaní novej cesty
    try {
        document.getElementById('pridaj_cestu').onsubmit = function() {
            return confirm('Naozaj chcete pridať novú cestu?');
        };
    } catch (e) {}

    // Funkcia na kontrolu zhody hesiel
    try {
        function validatePassword() {
            var password = document.getElementById('heslo');
            var confirm_password = document.getElementById('password2');

            // Kontrola dĺžky hesla
            if (password.value.length < 8) {
                password.setCustomValidity('Heslo musí obsahovať minimálne 8 znakov');
                return;
            } else {
                password.setCustomValidity('');
            }
            // Kontrola zhody hesiel
            if (password.value !== confirm_password.value) {
                confirm_password.setCustomValidity('Heslá sa nezhodujú');
                //return;
            } else {
                confirm_password.setCustomValidity('');
            }
        }
        // Pripojenie funkcie na udalosti
        document.getElementById('heslo').onchange = validatePassword;
        document.getElementById('password2').onchange = validatePassword;


    } catch (e) {}

    try {

        var dlzkaTrasyInput = document.getElementById('dlzka_trasy');

        function validateDlzkaTrasy() {
            if (!/^\d+$/.test(dlzkaTrasyInput.value)) {
                dlzkaTrasyInput.setCustomValidity('Prosím zadajte dĺžku trasy ako celé číslo.');
            } else {
                dlzkaTrasyInput.setCustomValidity('');
            }
        }
        dlzkaTrasyInput.onchange = validateDlzkaTrasy;
    } catch (e) {}

    try {
        document.querySelectorAll('.dropdown-tlacitko-ostatni-uzivatelia').forEach(item => {
            item.addEventListener('click', event => {
                event.preventDefault();
                let button = event.target.closest('.dropdown-tlacitko-ostatni-uzivatelia');
                let uzivatelId = button.getAttribute('data-uzivatel-id');
                let dropdownContent = document.getElementById(`dropdown-${uzivatelId}`);

                if (dropdownContent) {
                    if (dropdownContent.style.height) {
                        dropdownContent.style.height = null;
                    } else {
                        let contentHeight = dropdownContent.scrollHeight + "px";
                        dropdownContent.style.height = contentHeight;
                    }
                } else {
                    console.error('Dropdown content not found for ID:', uzivatelId);
                }
            });
        });
    } catch (e) {}
});


function updateVytazenostValue(value) {
    document.getElementById('vytazenostValue').textContent = value + " %";
}

// potvrdzovaci formulár pri odstránení novej cesty
function potvrditMazanie(sprava) {
    return confirm(sprava);
}

function redirectTo(url) {
    window.location.href = url;
}

