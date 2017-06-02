<nav id="menu">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Help <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Virtualūs kambariai<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach($pages as $value)
                        <li><a href="#"> {{$value['title']}}</a></li>
                            @endforeach
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
</nav>
