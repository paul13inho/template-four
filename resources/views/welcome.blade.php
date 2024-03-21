<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('styles.css')}}">
    <title>Template 4</title>
</head>
<body>


    <header>
        <div class="container-header max-width min-width">
            <div class="container-logo">
                <img src="{{asset('img/logo.png')}}" alt="logo">
                <p>goodmoney</p>
            </div>
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">about us</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="container-main max-width min-width">
            <div class="container-banner">
                <h1>Lorem ipsum dolor sit amet</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid beatae doloribus ducimus incidunt, magni maxime molestiae placeat quis saepe similique voluptatum. Alias, cumque dicta dolorem iusto mollitia quaerat voluptatibus.
                </p>

                <form action="">
                    @csrf
                    <label for="email">email</label>
                    <input type="text" id="email">
                    <label for="money">how much do you need?</label>
                    <input type="number" id="money">
                    <button>finding it for you</button>
                </form>
            </div>
        </div>

        <div class="container-2">
            <p>hi</p>
        </div>
    </main>

    <footer>
        <div class="container-footer max-width min-width">
            <p>footer</p>
        </div>

    </footer>



</body>
</html>
