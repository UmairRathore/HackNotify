
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacknotify</title>

    <link rel="shortcut icon" type="image/png" href={{asset('frontend/assets/images/favicon.ico')}}>
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900')}}">

    <link rel="stylesheet" href={{asset('frontend/assets/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('frontend/assets/css/style.css')}}>


    <style>

        .tabs-wrapper {
            /*box-shadow: 2px 1px 20px #f9f9f9;*/
            /*border-radius: 0.5rem;*/
        }

        ul {
            list-style-type: none;
            padding-left: 0;
        }

        .nav-tabs {
            display: flex;
        }
        .nav-tabs{
            border: none !important;
        }

        .tab {
            background: #e7e7e7;
            border-radius: 78px;
            -webkit-flex: none;
            flex: none;
            -webkit-order: 0;
            order: 0;
            -webkit-flex-grow: 0;
            flex-grow: 0;
            margin: 0 6px;
            padding-right: 10px;
            padding-left: 10px;
            border: 0;
            font-family: TTHoves;
            font-style: normal;
            font-weight: 400;
            font-size: 13.5px;
            color: #5a5a5a;
            cursor: pointer;
        }

        .tab.is-active {
            background: #f01616;
            border-radius: 78px;
            -webkit-flex: none;
            flex: none;
            -webkit-order: 0;
            order: 0;
            -webkit-flex-grow: 0;
            flex-grow: 0;
            margin: 0 6px;
            padding-right: 10px;
            padding-left: 10px;
            border: 0;
            font-family: TTHoves;
            font-style: normal;
            font-weight: 400;
            font-size: 13.5px;
            color: #fff;
            cursor: pointer;
        }

        .tab-panel {
            display: none;
        }

        .tab-panel.is-active {
            display: block;
        }

        @media (min-width: 992px) {
            .navbar-expand-lg .navbar-collapse {
                display: -webkit-flex !important;
                display: flex !important;
                -webkit-flex-basis: auto;
                flex-basis: auto;
                padding-left: 0;
            }
        }

        .navbar-brand {
            display: inline-block;
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            padding-left: 0;
            margin-right: 0;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap;
        }

    </style>
</head>

<body>

<div class="container">
