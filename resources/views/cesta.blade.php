@extends('layouts.app')

@section('content')
<section id="cesta_sekcia">
        <div class="row cesta_sekcia">

            <!-- Nadpis Sekcie -->
            <div class="row mt-3">
                <div class="col">
                    <h1 class="text-center mb-4">Šturec</h1>
                </div>
            </div>

            <div class="row mt-5 h-100 hlavna_cast_cesty">


                <div class="col-lg-6 lavaStranaAtributy">

                    <img class="obrazokCesty" src="../images/sturec.jpg" alt="Obrázok Šturca">

                </div>


                <div class="col-lg-6 align-items-center pravaStranaAtributy">

                    <div class="row zaboleneRohy h-100">

                        <!-- Dĺžka trasy - ukazateľ -->
                        <div class="row mt-4 riadokAtribut align-items-center">
                            <div class="col-12 col-md-4">
                                <p>Dĺžka trasy:</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="slider-container">
                                    <div class="slider-fill dlzkaTrasy"></div>
                                    <div class="slider-value ukazatel">1km</div> <!-- Aktuálna hodnota -->
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="ukazatel">0 km</span> <!-- Min hodnota -->
                                    <span class="ukazatel">100 km</span> <!-- Max hodnota -->
                                </div>
                            </div>
                        </div>

                        <!-- Stav cesty - ukazateľ hodnotenia -->
                        <div class="row riadokAtribut align-items-center">
                            <div class="col-12 col-md-4">
                                <p>Stav cesty:</p>
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="slider-container">
                                    <div class="slider-fill stavCesty"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="ukazatel">Hrozné</span> <!-- Min hodnota -->
                                    <span class="ukazatel">Úžasné</span> <!-- Max hodnota -->
                                </div>
                            </div>
                        </div>

                        <!-- Vyťaženosť - farebné označenie -->
                        <div class="row riadokAtribut align-items-center">
                            <p class="w-auto">Vyťaženosť:</p>
                            <p class="w-auto atributVytazenosti">Rušná</p> <!-- bg-success pre zelenú, bg-warning pre oranžovú, bg-danger pre červenú -->
                        </div>

                        <!-- Vhodné pre motorky - ikona alebo textový indikátor -->
                        <div class="row riadokAtribut align-items-center">
                            <p class="w-auto">Vhodné pre motorky:</p>
                            <i class="w-auto bi bi-check-circle-fill indicator-yes"> ÁNO </i>
                        </div>

                        <!-- Vhodné cez zimné obdobie - ikona alebo textový indikátor -->
                        <div class="row mb-4 riadokAtribut align-items-center">
                            <p class="w-auto">Vhodné cez zimné obdobie:</p>
                            <i class="bi w-auto bi-x-circle-fill indicator-no"> NIE </i>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <section class="komentare row w-100">

            <!-- Nadpis Sekcie -->
            <div class="row mt-3">
                <div class="col-12">
                    <h2 class="text-center mb-0 mt-5">Komentáre</h2>
                </div>
            </div>

            <div class="row w-100 py-5 text-dark mt-0 mb-0">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-11 col-lg-9 col-xl-7">


                        <div class="d-flex flex-start mb-4">
                            <img class="rounded-circle shadow-1-strong me-3"
                                 src="../images/profilovky/1.jpg" alt="avatar" width="65"
                                 height="65" />
                            <div class="card w-100">
                                <div class="card-body p-4">
                                    <div class="">
                                        <h5>Karpaty Kruzr</h5>
                                        <p class="small">Pred 3 hodinami</p>
                                        <p>
                                            Ahojte, nedávno som prešiel cez Šturec a musím povedať, že to bola poriadna jazda. Výhľady sú fantastické, ak máte radi kopcovité terény a ostré zákruty. Cesta však môže byť trochu náročná, najmä ak nie ste zvyknutí na úzke horské cesty. Odporúčam prechádzať touto trasou skôr v letných mesiacoch, pretože počas zimy môže byť cesta dosť nebezpečná kvôli snehu a ľadu. Celkovo vzrušujúce, ale buďte opatrní!
                                        </p>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <a href="#!" class="link-muted me-2"><i class="bi bi-heart-fill me-1 ikonkaSrdiecko"></i>2540</a>
                                            </div>
                                            <a href="#!" class="link-muted"><i class="bi bi-reply-fill ikonkaReply"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-start mb-4">
                            <img class="rounded-circle shadow-1-strong me-3"
                                 src="../images/profilovky/4.jpg" alt="avatar" width="65"
                                 height="65" />
                            <div class="card w-100">
                                <div class="card-body p-4">
                                    <div class="">
                                        <h5>Vysoko Oktanovy</h5>
                                        <p class="small">Pred 5 hodinami</p>
                                        <p>
                                            Zdravím všetkých! Cesta Šturec je pre mňa ako adrenalínová injekcia. Užil som si každý kilometer, hlavne tie úseky, kde môžete naozaj využiť výkon motora. Miestami sú tam však povrchy, ktoré by potrebovali trochu údržby, takže si dávajte pozor na nečakané výmoly. Určite odporúčam zastaviť na vrchole a vychutnať si panoramatický výhľad. To prostredie, čistý vzduch - proste nezaplatiteľné!
                                        </p>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <a href="#!" class="link-muted me-2"><i class="bi bi-heart-fill me-1 ikonkaSrdiecko"></i>221</a>
                                            </div>
                                            <a href="#!" class="link-muted"><i class="bi bi-reply-fill ikonkaReply"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="d-flex flex-start mb-4">
                            <img class="rounded-circle shadow-1-strong me-3"
                                 src="../images/profilovky/3.jpeg" alt="avatar" width="65"
                                 height="65" />
                            <div class="card w-100">
                                <div class="card-body p-4">
                                    <div class="">
                                        <h5>Pripojka Na Ceste</h5>
                                        <p class="small">Pred 8 hodinami</p>
                                        <p>
                                            Čauko motoristi! Prešiel som Šturecom minulý mesiac a bol som trochu sklamaný. Možno som mal príliš vysoké očakávania kvôli všetkým tým recenziám, ale cítil som, že cesta je miestami príliš preplnená, hlavne cez víkendy. Plus, stretol som pár neohľaduplných vodičov, ktorí očividne nerešpektovali rýchlostné limity ani bezpečnostné pravidlá. Možno to bude lepšie počas týždňa, ale víkendy by som odporučal vyhnúť.
                                        </p>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <a href="#!" class="link-muted me-2"><i class="bi bi-heart-fill me-1 ikonkaSrdiecko"></i>17</a>
                                            </div>
                                            <a href="#!" class="link-muted"><i class="bi bi-reply-fill ikonkaReply"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-start">
                            <img class="rounded-circle shadow-1-strong me-3"
                                 src="../images/profilovky/2.jpg" alt="avatar" width="65"
                                 height="65" />
                            <div class="card w-100">
                                <div class="card-body p-4">
                                    <div class="">
                                        <h5>Asfaltova Amazonka</h5>
                                        <p class="small">Pred 2 dňami</p>
                                        <p>
                                            Hej kamaráti! Ako žena motoristka, ktorá miluje dobrodružstvo, musím povedať, že cesta Šturec ma naozaj nezklamala. Tá dráma v krajine, zákruty a adrenalinové stúpania a klesania boli ako stvorené pre moju motorku. Áno, cesta môže byť trochu vyzývavá, ale ak ste opatrní a rešpektujete ostatných na ceste, je to skvelý útek od ruchu mesta. A tie horské chaty na trase? Perfektné miesto na oddych a stretnutie s podobne zmýšľajúcimi dušami!
                                        </p>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <a href="#!" class="link-muted me-2"><i class="bi bi-heart-fill me-1 ikonkaSrdiecko"></i>13</a>
                                            </div>
                                            <a href="#!" class="link-muted"><i class="bi bi-reply-fill ikonkaReply"></i> Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </section>
    </section>
@endsection
