@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center h-9/10">
        <div class="text-center">
            <h1 class="text-grey-darkest text-4xl mb-6">Admin</h1>
            <p class="uppercase tracking-wide text-sm text-grey-darkest ">For admin users only!</p>
        </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <section id="first-tab-group" class="tabgroup">
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
            <div id="tab1">
                <div class="submit-form">

                    <form id="form-submit" action="" method="get">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="from">From:</label>
                                    <select required name='from' onchange='this.form.()'>
                                        <option value="">Select a location...</option>
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
                                    <label for="to">To:</label>
                                    <select required name='to' onchange='this.form.()'>
                                        <option value="">Select a location...</option>
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
                                    <label for="departure">Departure date:</label>
                                    <input name="deparure" type="text" class="form-control date" id="deparure" placeholder="Select date..." required="" onchange='this.form.()'>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="return">Return date:</label>
                                    <input name="return" type="text" class="form-control date" id="return" placeholder="Select date..." required="" onchange='this.form.()'>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="Occupation">Occupation:</label>
                                    <input name="occupation" type="text" class="form-control date" id="occupation" placeholder="Select occupation:" required="" onchange='this.form.()'>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="Price">Price:</label>
                                    <input name="price" type="text" class="form-control date" id="price" placeholder="Select Price:" required="" onchange='this.form.()'>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="Brand">Brand:</label>
                                    <input name="brand" type="text" class="form-control date" id="brand" placeholder="Select Brand:" required="" onchange='this.form.()'>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="Version">Version:</label>
                                    <input name="version" type="text" class="form-control date" id="version" placeholder="Select Version:" required="" onchange='this.form.()'>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="Number of seats">Number of seats:</label>
                                    <input name="numofs" type="text" class="form-control date" id="numofs" placeholder="Select Number of Seats:" required="" onchange='this.form.()'>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <label for="Type">Type:</label>
                                    <input name="type" type="text" class="form-control date" id="type" placeholder="Select Type:" required="" onchange='this.form.()'>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <div class="radio-select">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <label for="round">Round</label>
                                            <input type="radio" name="trip" id="round" value="round" required="required"onchange='this.form.()'>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <label for="oneway">Oneway</label>
                                            <input type="radio" name="trip" id="oneway" value="one-way" required="required"onchange='this.form.()'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Make ticket</button>
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
@endsection

