@extends('layouts.master')

@section('title')
@lang('messages.tips_for_trips') | @lang('messages.' . config('variants.name') . '_name')
@endsection

@section('content')
<div class="card mb-4">
    <div class="card-body">
        <div class="content">
            <div class="pb-4">
                <h3>@lang('messages.tips_for_trips')</h3>
            </div>
            <div class="first-part">
                <div class="row">
                    <div class="col-md">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">
                                Návštěvník
                            </h4>
                        </div>
                        <ul class="pl-4">
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp;
                                <a href="{{ asset('pdf/Geopark_cykloturisticka.pdf') }}" target="_blank">
                                    Geoturistická mapa Chrudimska-Hlinecka
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp;
                                <a href="{{ asset('pdf/Geopark_geoturisticka.pdf') }}" target="_blank">
                                    Cykloturistická mapa Chrudimska-Hlinecka
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp;
                                <a href="{{ asset('pdf/Pondelni_vylety.pdf') }}" target="_blank">
                                    Pondělní výlety
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp;
                                <a href="{{ asset('pdf/Top_mista.pdf') }}" target="_blank">
                                    TOP místa Chrudimska-Hlinecka
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp;
                                <a href="{{ asset('pdf/Vylety_v_desti.pdf') }}" target="_blank">
                                    Výlety v dešti
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp;
                                Více na <a href="https://www.navstevnik.cz/ke-stazeni/" target="_blank">
                                    Návštěvník.cz
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">
                                Betlém a okolí
                            </h4>
                        </div>
                        <ul class="pl-4">
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp;
                                <a href="{{ asset('pdf/Katalog_Betlem_Hlinsko.pdf') }}" target="_blank">
                                    Katalog Betlém Hlinsko
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp;
                                <a href="{{ asset('pdf/Oddychove_stezky_Hlinsko.pdf') }}" target="_blank">
                                    Oddychové stezky města Hlinska
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp;
                                <a href="http://www.hlinsko.cz/mesto/kultura" target="_blank">
                                    Kulturní akce
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="middle-part">
                <div class="pb-2">
                    <h4 class="color-{{ config('variants.name') }}">
                        @lang('messages.hell_certovina')
                    </h4>
                </div>
                <div class="row">
                    <div class="col-lg-8 pb-3">
                        <p>
                            V lesích na Čertovině u Hlinska vyrostlo unikátní zábavní centrum PEKLO.
                        </p>
                        <p>
                            Čertovinské peklo je jediné svého druhu nejen v naší republice,
                            ale i v celé Evropě.
                        </p>
                        <p>
                            Pekelné království se rozkládá celkem na pěti patrech.
                        </p>
                        <p>
                            Do hlubin země sahá dvanáct metrů, k
                            nebesům míří osmi metry.
                        </p>
                        <p>
                            Pod jednou střechou zde mohou návštěvníci zažít, ochutnat, vyzkoušet a spatřit opravdu
                            mnoho.
                        </p>
                        <p>
                            V celém interiéru vynikne skvělá práce českých řezbářů, truhlářů, kovářů i zedníků, na
                            jejichž rukou peklo vyrostlo a díky níž je tak jedinečné a nenapodobitelné.
                        </p>
                        <p>
                            <a href="https://www.peklocertovina.cz/" target="_blank">www.peklocertovina.cz</a>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ asset('img/peklo_certovina.png') }}" data-toggle="lightbox" data-gallery="gallery">
                            <img src="{{ asset('img/peklo_certovina.png') }}"
                                class="align-middle img-fluid rounded hover-shadow"
                                alt="@lang('messages.hell_certovina')">
                        </a>
                    </div>
                </div>
            </div>
            <div class="middle-part">
                <div class="pb-2">
                    <h4 class="color-{{ config('variants.name') }}">
                        Skanzen VESELÝ KOPEC
                    </h4>
                </div>
                <div class="row">
                    <div class="col-lg-4 pb-3">
                        <a href="{{ asset('img/vesely_kopec.png') }}" data-toggle="lightbox" data-gallery="gallery">
                            <img src="{{ asset('img/vesely_kopec.png') }}"
                                class="align-middle img-fluid rounded hover-shadow" alt="Veselý Kopec">
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <p>
                            Soubor lidových staveb Vysočina 8 km od Hlinska směr Trhová Kamenice.
                        </p>
                        <p>
                            Osada Veselý Kopec byla založena v první polovině 16. století, jako řada dalších sídel na
                            Hlinecku zabydlujících lesní krajinu.
                        </p>
                        <p>
                            Domov zde našli drobní rolníci, kteří si těžce zajišťovali
                            základní obživu.
                        </p>
                        <p>
                            Část roubených chaloupek původní osady postupem let zanikla, některé zásadním
                            způsobem změnily podobu, jedna jediná se dochovala do dnešních dnů.
                        </p>
                        <p>
                            Dnes zde naleznete téměř třicet objektů, které
                            dohromady tvoří osadu s volně rozptýlenou zástavbou.
                        </p>
                        <p>
                            <a href="http://www.hlinsko.cz/mesto/cestovni-ruch-turistika-pamatky/historicke-pamatky/5"
                                target="_blank">Veselý Kopec</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="middle-part">
                <div class="row">
                    <div class="col-lg pb-3">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">
                                Koupání
                            </h4>
                        </div>
                        <div class="row">
                            <div class="col-lg pb-3">
                                <ul class="pl-4">
                                    <li>
                                        <i class="fas fa-chevron-right"></i> &nbsp;
                                        <a href="https://www.zdarskypruvodce.cz/zdar-nad-sazavou/velke-darko/"
                                            target="_blank">
                                            Velké a Malé Dářko
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i> &nbsp;
                                        <a href="http://www.morerybnikreka.cz/" target="_blank">
                                            Rybník Řeka
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i> &nbsp;
                                        <a href="https://www.turistika.cz/mista/secska-prehrada/detail" target="_blank">
                                            Sečská přehrada
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i> &nbsp;
                                        <a href="https://www.turistika.cz/mista/milovsky-rybnik/detail" target="_blank">
                                            Rybník Milovy
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i> &nbsp;
                                        <a href="https://sportoviste.skutec.cz/koupaliste/" target="_blank">
                                            Koupaliště Skuteč
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i> &nbsp;
                                        <a href="http://www.sportovistehlinsko.cz/" target="_blank">
                                            Městský bazén Hlinsko
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i> &nbsp;
                                        <a href="http://www.hlinsko.cz/mesto/cestovni-ruch-turistika-pamatky/tipy-na-vylety/koupani/biotop"
                                            target="_blank">
                                            Přírodní koupací biotop Hlinsko
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg pb-3">
                                <a href="{{ asset('img/biotop_hlinsko.png') }}" data-toggle="lightbox"
                                    data-gallery="gallery">
                                    <img src="{{ asset('img/biotop_hlinsko.png') }}"
                                        class="align-middle img-fluid rounded hover-shadow"
                                        alt="@lang('messages.hell_certovina')">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg pb-3">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">
                                Památky
                            </h4>
                        </div>
                        <div class="row">
                            <div class="col-lg pb-3">
                                <ul class="pl-4">
                                    <li>
                                        <i class="fas fa-chevron-right"></i> &nbsp;
                                        <a href="https://www.zameklitomysl.info/" target="_blank">
                                            Zámek Litomyšl
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i> &nbsp;
                                        <a href="http://www.ceske-hrady-a-zamky.wz.cz/zamek-nove-hrady/"
                                            target="_blank">
                                            Zámek Nové Hrady
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i> &nbsp;
                                        <a href="https://www.zamek-slatinany.cz/cs" target="_blank">
                                            Zámek Slatiňany a hřebčinec
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i> &nbsp;
                                        <a href="https://www.vyletypocesku.cz/kocici-hradek-u-slatinan" target="_blank">
                                            Kočičí Hrádek
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i> &nbsp;
                                        <a href="http://www.policka.org/" target="_blank">
                                            město Polička
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fas fa-chevron-right"></i> &nbsp;
                                        <a href="https://www.vcm.cz/zamek/" target="_blank">
                                            Zámek Pardubice
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg">
                                <a href="{{ asset('img/zamek_litomysl.png') }}" data-toggle="lightbox"
                                    data-gallery="gallery">
                                    <img src="{{ asset('img/zamek_litomysl.png') }}"
                                        class="align-middle img-fluid rounded hover-shadow"
                                        alt="@lang('messages.hell_certovina')">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle-part">
                <div class="pb-2">
                    <h4 class="color-{{ config('variants.name') }}">
                        Cykloturistika
                    </h4>
                </div>
                <p>
                    Trasy a mapy na <a
                        href="http://cyklotrasy.cz/encyklopedie/objekty1.phtml?id=113869&id_t_oblasti=113869"
                        target="_blank">www.cyklotrasy.cz</a> nebo k zapůjčení u nás (délka, profil, obtížnost
                    trasy,
                    zajímavosti na trase).
                </p>
                <p>
                    Jsme připraveni zapůjčit Vám kvalitní jízdní kola a rovněž poskytneme asistenci při řešení
                    drobných
                    oprav kol při defektu.
                </p>
            </div>
            <div class="middle-part">
                <div class="row">
                    <div class="col-md">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">
                                Lyže
                            </h4>
                        </div>
                        <ul class="pl-4">
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp;
                                <a href="https://ceske-sjezdovky.cz/stredisko/181_hlinsko.html" target="_blank">
                                    Ski areál Hlinsko
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp;
                                <a href="http://www.hlinsko.cz/mesto/cestovni-ruch-turistika-pamatky/zimni-servis/bezecke-lyzovani"
                                    target="_blank">
                                    Běh na lyžích, areál Rataje Hlinsko
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md">
                        <div class="pb-2">
                            <h4 class="color-{{ config('variants.name') }}">
                                Golf
                            </h4>
                        </div>
                        <ul class="pl-4">
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp;
                                <a href="http://www.gccsh.cz/" target="_blank">
                                    Golfový klub Svobodné Hamry
                                </a>
                                – 8 km od Hlinska
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> &nbsp;
                                <a href="https://www.gcsvr1932.cz/" target="_blank">
                                    Golfový klub Svratka
                                </a>
                                – 13 km od Hlinska
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="last-part">
                <div class="pb-2">
                    <h4 class="color-{{ config('variants.name') }}">
                        Koně
                    </h4>
                </div>
                <p>
                    <a href="http://www.hlinsko.cz/mesto/cestovni-ruch-turistika-pamatky/tipy-na-vylety/kone"
                        target="_blank">
                        Z koňského hřbetu
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection