<header id="header">
    <h1><a href="/index">NICOURSE</a></h1>
    <nav id="nav">
        <ul>
            <li class="special">
                <a href="#menu" class="menuToggle"><span>Menu</span></a>
                <div id="menu">
                    <ul>
                        <li <?php if($title == "Home") echo "class='active'";?>> <a href="/nicourse">Home</a></li>
                        <li <?php if($title == "Login") echo "class='active'";?>> <a href="/login">Log In</a></li>
                        <li <?php if($title == "Register") echo "class='active'";?>> <a href="/register">Sign Up</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</header>



