<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tiny.cloud/1/nysryxf61cin9ccahvhi183yivlcmexslayu9e3kbzg6ubpt/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>tinymce.init({ selector:'textarea' });</script>

        <title>Ronan Lewsley</title>
        
        <!-- CSS Stylesheet -->
        <link rel="stylesheet" href="{{ URL::asset('css/stylesheet.css') }}">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="body2">
        <div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @if(auth()->check())
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                    @endif
                    
                </div>
            @endif
    
    <div class="header">
        <h2><img class='title-image' src= "{{ URL::asset('images/title-image.png') }}"></h2>
    </div>

    <div class="row">
        <div class="leftcolumn">
            <form method="post" action="blog-post">
            <div class="card">
                <h2>Blog Feed</h2>
                <table class="blueTable" class="table table-striped">
                    <thead>
                        <tr>
                        <td>Post Name</td>
                        <td>Post Content</td>
                        <td colspan="4">
                        <div class="links"><a href="#">&laquo;</a> <a class="active" href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">&raquo;</a></div>
                        </td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $val)
                        <tr>
                            <td>{{$val->post_name}}</td>
                            <td>{{$val->post_content}}</td>
    
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
            <h3>Profiles & Relevant Links</h3>
            <ul class = "links">
                <li><a href="https://github.com/lewsley-r">Github</a></li>
                <li><a href="https://www.linkedin.com/in/ronan-lewsley-9b1bbb199/">LinkedIn Profile</a></li>
                <li><a href="{{ URL::asset('files/Academic CV.doc') }}">Cv (Doc)</a></li>
                <li><a href="{{ URL::asset('files/Academic CV.pdf') }}">Cv (PDF)</a></li>
                <li><a href="{{ url('/contact-us') }}">Contact Me</a></li>
            @if(auth()->check())
            <li><a href="{{ url('/blog-post') }}">Post to Blog</a></li>
            @endif
                
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
