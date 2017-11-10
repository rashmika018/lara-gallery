@extends('layouts.front')
   
    <link rel="stylesheet" href="{{ asset('public/styles/main.css') }}">
@section('content')
<div class="wrap">
	<div class="container">
	
	<div class="entry-content row-fluid">
	<h1>Let's get you started with LaraGallery</h1>
<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
<p style="text-align: justify;">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

</div>
    <div class="container">
        <div class="waterfall"> </div>
    </div>
    <script src="{{ asset('public/scripts/vendor.js') }}"></script>
    <script src="{{ asset('public/bootstrap-waterfall.js') }}"></script>
     <script id="waterfall-template" type="text/template">
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/1.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/2.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/3.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/4.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>Awesome! I love this pin!I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/5.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>How about this? Awesome! I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/6.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>I love this pin!I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/7.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>How about this? Awesome! I love this pin!I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/8.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>I love this pin!I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/9.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>How about this? Awesome! I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/10.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>How about this? Awesome! I love this pin!I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/11.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/12.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/13.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/14.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/15.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/16.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/17.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/18.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/19.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/20.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/1.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>How about this? Awesome! I love this pin!I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/2.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>How about this? Awesome! I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/3.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/4.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>Awesome! I love this pin!I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/5.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>How about this? Awesome! I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/6.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>I love this pin!I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/7.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>How about this? Awesome! I love this pin!I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/8.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>I love this pin!I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/9.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>How about this? Awesome! I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/10.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>How about this? Awesome! I love this pin!I love this pin!</small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/11.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/12.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/13.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/14.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/15.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/16.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/17.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/18.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/19.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="javascript:;"> <img src="public/images/20.jpg" /> </a>
            </li>
            <li class="list-group-item">
                <button type="button" class="btn btn-default btn-xs" title="thumb up"><span class="glyphicon glyphicon-thumbs-up"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs" title="thumb down"><span class="glyphicon glyphicon-thumbs-down"></span>
                </button>
                <button type="button" class="btn btn-default btn-xs pull-right" title="pin"><span class="glyphicon glyphicon-pushpin"></span>
                </button>
            </li>
            <li class="list-group-item">
                <div class="media">
                    <div class="media-left">
                        <a href="javascript:;"> <img class="media-object img-rounded" style="width: 30px; height: 30px;" src="public/images/avatar_30.png" /> </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading">Liber</h5> <small>This is very cool! </small> </div>
                </div>
            </li>
        </ul>
    </script>
 </div>
 </div>   
   <script>
        $('.waterfall')
            .data('bootstrap-waterfall-template', $('#waterfall-template').html())
            .waterfall();
    </script>
@endsection