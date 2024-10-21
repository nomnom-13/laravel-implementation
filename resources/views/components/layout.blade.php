<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raymond Santos</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <section class="header-section">
            <h1><a href="#me">Raymond Santos</a></h1>
            <nav>
                <ul>
                    <li><a href="#me" class="active">Home</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#hobby">Hobby</a></li>
                    <li><a href="#contact">Contact Me</a></li>
                </ul>
            </nav>
        </section>
    </header>

    <main>
        {{ $slot }}
    </main>
</body>

</html>