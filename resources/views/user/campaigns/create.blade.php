@extends('layouts.masteruser')

@section('title' ,'Nueva Campaña')

@section('content')

    <div id="demo-main-wz">

        <!--nav-->
        <ul class="row wz-step wz-icon-bw wz-nav-off mar-top">
            <li class="col-xs-3">
                <a data-toggle="tab" href="#main-tab1">
                    <span class="text-danger"><i class="pli-mail-send icon-2x"></i></span>
                    <h5 class="mar-no">Campaña</h5>
                </a>
            </li>
            <li class="col-xs-3">
                <a data-toggle="tab" href="#main-tab2">
                    <span class="text-warning"><i class="pli-note icon-2x"></i></span>
                    <h5 class="mar-no">Mensaje</h5>
                </a>
            </li>
            <li class="col-xs-3">
                <a data-toggle="tab" href="#main-tab3">
                    <span class="text-info"><i class="pli-mens icon-2x"></i></span>
                    <h5 class="mar-no">Contactos</h5>
                </a>
            </li>
            <li class="col-xs-3">
                <a data-toggle="tab" href="#main-tab4">
                    <span class="text-success"><i class="pli-like-2 icon-2x"></i></span>
                    <h5 class="mar-no">Final</h5>
                </a>
            </li>
        </ul>

        <!--progress bar-->
        <div class="progress progress-xs">
            <div class="progress-bar progress-bar-primary"></div>
        </div>


        <!--form-->
        <form class="form-horizontal">
            <div class="panel-body">
                <div class="tab-content">

                    <!--First tab-->
                    <div id="main-tab1" class="tab-pane">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Campaña</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                            </div>
                        </div>

                        <div class="form-group" id="demo-dp-component">
                            <label class="col-lg-2 control-label">Fecha</label>

                            <div class="col-lg-4">
                                <div class="input-group date">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon"><i class="pli-calendar-4"></i></span>
                                </div>
                            </div>

                            <div id="demo-dp-range" class="col-lg-4">
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="form-control " name="start"/>
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="form-control " name="end"/>
                                </div>
                            </div>
                            <small class="text-muted">Auto close on select</small>
                        </div>


                    </div>

                    <!--Second tab-->
                    <div id="main-tab2" class="tab-pane fade">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Tipo</label>
                            <div class="col-lg-9">
                                <div class="radio">
                                    <input id="demo-radio-1" class="magic-radio" type="radio" name="memberType"
                                           value="free">
                                    <label for="demo-radio-1">Whatsapp</label>

                                    <input id="demo-radio-2" class="magic-radio" type="radio" name="memberType"
                                           value="personal">
                                    <label for="demo-radio-2">SMS</label>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Asunto</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="asunto" placeholder="Asunto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Mensaje</label>
                            <div class="col-lg-9">
                                <textarea placeholder="Escriba el texto del mensaje a enviar..." rows="4" name="mensaje"
                                          class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="pad-all">
                                <div id="demo-gallery" style="display:none;">

                                    <a href="#">
                                        <img alt="The winding road"
                                             src="{{asset('images/gallery/thumbs/tile1.jpg')}}"
                                             data-image="{{asset('images/gallery/big/tile1.jpg')}}"
                                             data-description="The winding road description"
                                             style="display:none">
                                    </a>

                                    <a href="#">
                                        <img alt="Pancake"
                                             src="{{asset('images/gallery/thumbs/tile2.jpg')}}"
                                             data-image="{{asset('images/gallery/big/tile2.jpg')}}"
                                             data-description="A pancake is a flat cake, often thin and round, prepared from a starch-based batter"
                                             style="display:none">
                                    </a>

                                    <a href="#">
                                        <img alt="Foreshore"
                                             src="{{asset('images/gallery/thumbs/tile3.jpg')}}"
                                             data-image="{{asset('images/gallery/big/tile3.jpg')}}"
                                             data-description="The part of a shore between high- and low-water marks, or between the water and cultivated or developed land."
                                             style="display:none">
                                    </a>

                                    <a href="#">
                                        <img alt="Yellow Flowers"
                                             src="{{asset('images/gallery/thumbs/tile4.jpg')}}"
                                             data-image="{{asset('images/gallery/big/tile4.jpg')}}"
                                             data-description="Those are yellow flowers"
                                             style="display:none">
                                    </a>

                                    <a href="#">
                                        <img alt="Waterfall"
                                             src="{{asset('images/gallery/thumbs/tile5.jpg')}}"
                                             data-image="{{asset('images/gallery/big/tile5.jpg')}}"
                                             data-description="A waterfall is a place where water flows over a vertical drop or a series of steep drops in the course of a stream or river."
                                             style="display:none">
                                    </a>

                                    <a href="#">
                                        <img alt="Pumpkin"
                                             src="{{asset('images/gallery/thumbs/tile6.jpg')}}"
                                             data-image="{{asset('images/gallery/big/tile6.jpg')}}"
                                             data-description="A pumpkin is a cultivar of a squash plant, most commonly of Cucurbita pepo, that is round, with smooth, slightly ribbed skin, and deep yellow to orange coloration."
                                             style="display:none">
                                    </a>

                                    <a href="#">
                                        <img alt="In the jungle"
                                             src="{{asset('images/gallery/thumbs/tile7.jpg')}}"
                                             data-image="{{asset('images/gallery/big/tile7.jpg')}}"
                                             data-description="This is my car"
                                             style="display:none">
                                    </a>

                                    <a href="#">
                                        <img alt="Note"
                                             src="{{asset('images/gallery/thumbs/tile8.jpg')}}"
                                             data-image="{{asset('images/gallery/big/tile8.jpg')}}"
                                             data-description="This is a note"
                                             style="display:none">
                                    </a>

                                    <a href="#">
                                        <img alt="Off-Road Motorcycle"
                                             src="{{asset('images/gallery/thumbs/tile9.jpg')}}"
                                             data-image="{{asset('images/gallery/big/tile9.jpg')}}"
                                             data-description="This is a motorcycle"
                                             style="display:none">
                                    </a>

                                    <a href="#">
                                        <img alt="Adventure"
                                             src="{{asset('images/gallery/thumbs/tile10.jpg')}}"
                                             data-image="{{asset('images/gallery/big/tile10.jpg')}}"
                                             data-description="River Adventure Camping"
                                             style="display:none">
                                    </a>




                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Third tab-->
                    <div id="main-tab3" class="tab-pane">
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Phone Number</label>
                            <div class="col-lg-9">
                                <input type="text" placeholder="Phone number" name="phoneNumber" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Address</label>
                            <div class="col-lg-9">
                                <input type="text" placeholder="Address" name="address" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">City</label>
                            <div class="col-lg-9 pad-no">
                                <div class="clearfix">
                                    <div class="col-lg-5">
                                        <input type="text" placeholder="City" name="city" class="form-control">
                                    </div>
                                    <div class="col-lg-3 text-lg-right"><label class="control-label">Poscode</label>
                                    </div>
                                    <div class="col-lg-4"><input type="text" placeholder="Poscode" name="poscode"
                                                                 class="form-control"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Fourth tab-->
                    <div id="main-tab4" class="tab-pane">

                        <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-2">
                                <div class="checkbox">
                                    <input id="demo-checkbox-1" class="magic-checkbox" type="checkbox"
                                           name="acceptTerms">
                                    <label for="demo-checkbox-1"> Accept the terms and policies</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--Footer buttons-->
            <div class="pull-right pad-rgt mar-btm">
                <button type="button" class="previous btn btn-primary"><</button>
                <button type="button" class="next btn btn-primary">></button>
                <button type="button" class="finish btn btn-success" disabled>Crear</button>
            </div>

        </form>




    </div>
    <script>
        $(document).on('nifty.ready', function () {


            $("#demo-gallery").unitegallery({
                tile_enable_shadow: false
            });



        });
    </script>

@endsection