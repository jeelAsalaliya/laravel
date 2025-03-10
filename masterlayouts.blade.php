<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('style')
    <title>Document</title>
</head>
<body>
    <h3>Master Layouts Page</h3>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque tempora reprehenderit animi minus deserunt nobis molestias magnam quisquam harum maiores illo eaque odit numquam quam minima sint quis assumenda, illum fuga architecto cupiditate exercitationem voluptates. Repellendus omnis amet pariatur aut, quo tempora nisi eaque libero autem quas magnam, eum architecto commodi consectetur veritatis beatae iusto. Sed quae ipsum ab! Natus minima iusto adipisci, non esse architecto inventore labore accusantium debitis quis alias veniam maxime consequatur quos nobis repellat minus quibusdam quia sed a, ratione exercitationem asperiores. Atque, minus similique! Repellat aspernatur nihil iusto tempora totam facilis architecto magnam quam eius earum officia, porro quo laboriosam repudiandae pariatur? Eos, culpa dolorem. Sint cumque provident quis? Dignissimos dicta ex necessitatibus animi minus architecto dolorum vel.</p>
<main>
    <article>
        @hasSection ('content')
        @yield('content')            
        @else
            <h2>No Content Found.</h2>
        @endif
    </article>
</main>

@stack('scripts')
</body>
</html>

