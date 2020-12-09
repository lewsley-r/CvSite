<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ronan Lewsley</title>
        
        <!-- CSS Stylesheet -->
        <link rel="stylesheet" href="{{ URL::asset('css/stylesheet.css') }}">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    <div class="header">
        <h2>Ronan's Blog</h2>
    </div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Dec 7, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some text..</p>
            </div>
            <div class="card">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Sep 2, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some text..</p>
        </div>
    </div>
    <div class="rightcolumn">
        <div class="card">
            <h2>About Me</h2>
            <img class = "Profile_photo" width="200" src ="{{ URL::asset('images/me.jpg') }}"/>
            <p class='bio'>Computer Science student at Ulster University. Currently a Junior developer at Flax and Teal. Source code for the site can be found in CvSite repo at my Github linked below.</p>
        </div>
        <div class="card">
            <h3>Popular Post</h3>
            <div class="fakeimg">Image</div><br>
            <div class="fakeimg">Image</div><br>
            <div class="fakeimg">Image</div>
        </div>
        <div class="card">
            <h3>Social Profiles</h3>
            <ul class = "social_links">
                <li><a href="https://github.com/lewsley-r">Github</a></li>
                <li><a href="https://www.linkedin.com/in/ronan-lewsley-9b1bbb199/">LinkedIn Profile</a></li>
                <li><a href="{{ URL::asset('files/Academic CV.docx') }}">Cv (.doc)</a></li>
                <li><a href="{{ url('/contact-us') }}">Contact Me</a></li>
            </ul>
        </div>
    </div>
    </div>

<div class="footer">
  <h2>Footer</h2>
</div>
        </div>
    </body>
</html>
