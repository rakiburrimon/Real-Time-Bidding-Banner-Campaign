<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>@yield('title')</title>
    @include('partials.head')
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('partials.menu')

            <div class="layout-page">
                @include('partials.navbar')

                <div class="content-wrapper">
                    @yield('content')
                </div>

            </div>
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    @include('partials.scripts')
</body>
</html>
