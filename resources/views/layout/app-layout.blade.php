<!DOCTYPE html>
<html lang="de" style="--vh: 1vh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keine Kinder zweiter Klasse!</title>
    @vite(["resources/css/app.scss"])
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/images/favicon/safari-pinned-tab.svg" color="#8000ff">
    <link rel="shortcut icon" href="/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#8000ff">
    <meta name="msapplication-config" content="/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Primary Meta Tags -->
    <meta name="title" content="Keine Kinder zweiter Klasse!">
    <meta name="description" content="Minderjährige Geflüchtete haben ein Recht auf kindgerechte Betreuung. Missstände wie im Jugendasylzentrum Lilienberg lassen sich verhindern: Schaffen Sie eine tragfähige Basis für die Betreuung geflüchteter Jugendlicher und deren Begleitung in die Selbständigkeit.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url("/") }}">
    <meta property="og:title" content="Keine Kinder zweiter Klasse!">
    <meta property="og:description" content="Minderjährige Geflüchtete haben ein Recht auf kindgerechte Betreuung. Missstände wie im Jugendasylzentrum Lilienberg lassen sich verhindern: Schaffen Sie eine tragfähige Basis für die Betreuung geflüchteter Jugendlicher und deren Begleitung in die Selbständigkeit.">
    <meta property="og:image" content="{{ url("images/og.jpg ")}}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url("/") }}">
    <meta property="twitter:title" content="Keine Kinder zweiter Klasse!">
    <meta property="twitter:description" content="Minderjährige Geflüchtete haben ein Recht auf kindgerechte Betreuung. Missstände wie im Jugendasylzentrum Lilienberg lassen sich verhindern: Schaffen Sie eine tragfähige Basis für die Betreuung geflüchteter Jugendlicher und deren Begleitung in die Selbständigkeit.">
    <meta property="twitter:image" content="{{ url("images/og.jpg ")}}">
</head>
<body>

    <main id="main-content">
        {{ $slot }}
    </main>

    @vite(["resources/js/app.js"])
</body>
</html>
