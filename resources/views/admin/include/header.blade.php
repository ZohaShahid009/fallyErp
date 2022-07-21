<head>
    @include('admin.assets.meta')
    <title>MyCRM</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>




    {{-- rff --}}
    <meta name="description" content="Wysiwyg editor for bootstrap" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{asset('assets/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.ico') }}" />
    {{-- rff end --}}


    @include('admin.assets.css')
</head>
