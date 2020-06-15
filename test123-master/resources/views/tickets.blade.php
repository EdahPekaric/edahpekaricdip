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
                    <li ><a href="/partneri" accesskey="2" title="">Partneri</a></li>
                    <li><a href="/onama" accesskey="3" title="">O nama</a></li>
                    <li class="current_page_item"><a href="/karte" accesskey="4" title="">Karte</a></li>
                    <li><a href="/kontakt" accesskey="5" title="">Kontakt</a></li>


                </ul>

            </div>
        </div>




    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>Karte</h2>
                    <span class="byline">Karte</span> </div>
                <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
                <section class="banner" id="top">
                    <meta name="description" content="">
                    <meta name="viewport" content="width=device-width, initial-scale=1">


                    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
                    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css') }}">
                    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontAwesome.css') }}">
                    <link rel="stylesheet" type="text/css" href="{{ asset('css/hero-slider.css') }}">
                    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl-carousel.css') }}">
                    <link rel="stylesheet" type="text/css" href="{{ asset('css/datepicker.css') }}">
                    <link rel="stylesheet" type="text/css" href="{{ asset('css/tooplate-style.css') }}">

                    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

                    <script type="text/javascript" src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">

                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <section id="first-tab-group" class="tabgroup">
                                    <div id="tab1">
                                        <div class="submit-form">

                                            <form id="form-submit" action="" method="get">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <label for="from">Mjesto polaska:</label>
                                                            <select required name='from' onchange='this.form.()'>
                                                                <option value="">Izaberi mjesto...</option>
                                                                <option value="Sarajevo">Sarajevo</option>
                                                                <option value="Mostar">Mostar</option>
                                                                <option value="Bihać">Bihać</option>
                                                                <option value="Čapljina">Čapljina</option>
                                                                <option value="Banja Luka">Banja Luka</option>
                                                                <option value="Neum">Neum</option>
                                                                <option value="Tuzla">Tuzla</option>
                                                                <option value="Zenica">Zenica</option>
                                                                <option value="Široki Brijeg">Široki Brijeg</option>
                                                                <option value="Trebinje">Trebinje</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <label for="to">Mjesto dolaska:</label>
                                                            <select required name='to' onchange='this.form.()'>
                                                                <option value="">Izaberi mjesto...</option>
                                                                <option value="Sarajevo">Sarajevo</option>
                                                                <option value="Mostar">Mostar</option>
                                                                <option value="Bihać">Bihać</option>
                                                                <option value="Čapljina">Čapljina</option>
                                                                <option value="Banja Luka">Banja Luka</option>
                                                                <option value="Neum">Neum</option>
                                                                <option value="Tuzla">Tuzla</option>
                                                                <option value="Zenica">Zenica</option>
                                                                <option value="Široki Brijeg">Široki Brijeg</option>
                                                                <option value="Trebinje">Trebinje</option>
                                                            </select>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <label for="departure">Datum polaska:</label>
                                                            <input name="deparure" type="text" class="form-control date" id="deparure" placeholder="Izaberi datum..." required="" onchange='this.form.()'>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <label for="return">Datum povratka:</label>
                                                            <input name="return" type="text" class="form-control date" id="return" placeholder="Izaberi datum..." required="" onchange='this.form.()'>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="radio-select">
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                    <label for="round">Povratna</label>
                                                                    <input type="radio" name="trip" id="round" value="round" required="required"onchange='this.form.()'>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-6">
                                                                    <label for="oneway">Jednosmjerna</label>
                                                                    <input type="radio" name="trip" id="oneway" value="one-way" required="required"onchange='this.form.()'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <button type="submit" id="form-submit" class="btn">Napravi kartu</button>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>

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

            </div>
        </div>
    </div>
    <div id="copyright" class="container">
        <p>&copy; Untitled. All rights reserved. </p>
    </div>

