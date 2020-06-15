@extends('layout')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="#">Željeznice BIH</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li ><a href="/" accesskey="1" title="">Homepage</a></li>
                <li class="current_page_item"><a href="/partneri" accesskey="2" title="">Partneri</a></li>
                <li><a href="/onama" accesskey="3" title="">O nama</a></li>
                <li><a href="/karte" accesskey="4" title="">Karte</a></li>
                <li><a href="/kontakt" accesskey="5" title="">Kontakt</a></li>

            </ul>

    </div>
    </div>
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>Partneri</h2>
                    <span class="byline">Naši partneri</span> </div>
                <p><img src="images/partneri.jpg" alt="" class="image image-full" /> </p>
                <p>ELEKTROPRIVREDA Sarajevo</p>
                <p> HOLD INA Sarajevo</p>
                <p>KLAS Sarajevo</p>
                <p> C.I.B.O.S. Ilijaš</p>
                <p> TVORNICA CEMENTA Kakanj</p>
                <p> ARCELOR MITTAL ŽELJEZARA Zenica</p>
                <p> GIKIL Lukavac</p>
                <p> SISECAM Lukavac</p>
                <p> RUDNIK MRKOG UGLJA Banovići</p>
                <p> ALUMINIJ Mostar</p>
                <p> BIRAČ Zvornik </p>
            </div>
            <div id="sidebar">
                <ul class="style1">
                    <li class="first">
                        <h3>ŽFBiH poduzele odgovarajuće mjere u cilju</h3>
                        <p><a href="#">Željeznice FBiH obavještavaju javnost da su, povodom aktuelne epidemiološke situacije u Bosni i Hercegovini i regionu izazvane korona…</a></p>
                    </li>
                    <li>
                        <h3>Ponovna uspostava saobraćaja putničkih</h3>
                        <p><a href="#">Željeznice FBiH obavještavaju javnost da će nakon završene sanacije klizišta na području ŽRS, u petak 13.03.2020.godine, odnosno, u</a></p>
                    </li>
                    <li>
                        <h3>Željeznice FBiH po evropskim standardima</h3>
                        <p><a href="#">Dva nacionalna željeznička operatora iz Bosne i Hercegovne i Hrvatske: Željeznice FBiH i HŽ Cargo, ugovorile su tokom…</a></p>
                    </li>
                </ul>
                <div id="stwo-col">
                    <div class="sbox1">
                        <h2>Pratite nas:</h2>
                        <ul class="style2">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Google+</a></li>
                        </ul>
                    </div>
                    <div class="sbox2">
                        <h2>Ostalo</h2>
                        <ul class="style2">
                            <li><a href="#">Galerija</a></li>
                            <li><a href="#">Video</a></li>
                            <li><a href="#">Drugi o nama</a></li>
                            <li><a href="#">Javne nabavke</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright" class="container">
        <p>&copy; Untitled. All rights reserved.</p>
    </div>

