<style type="text/css">

* {
    margin: 0;
    padding: 0;
    border: 0;
}
.menu ul {
    list-style: none;
}
.menu > ul >li {
    display:inline-block;
    background: lightgreen;
    width: 25%;
    position: relative;
    vertical-align: top;
    margin-left: -3px;
    border-top: 7px solid darkcyan;
}

.menu ul li a {
    color:black;
    display: block;
    padding: 15px;
    text-decoration: none;
}

.menu ul li a:hover {
    background:white;
    transition: .3s;
}

.sub-menu {
    display: none;
}

.menu-item:hover .sub-menu {
    display: block;
    position: absolute;
    top: 50px;
    background: lightgreen;
    width: 640px;
}

h1 {
    text-align: center;
    padding: 7px;
    margin: 5px;
}

.thanks {
    background: lightgreen;
    padding: 20px;
    max-width: 600px;
    border-radius: 7px;
    margin: 0 auto;
    font-size: 20px;
    text-align: center;
}

footer {
    text-align: center;
    padding: 20px 0px;
}
</style>
<header>
    <nav class="menu">
        <ul>
            <li class="menu-item"><a href="index.html">Home</a></li>
            <li class="menu-item"><a href="#">About</a></li>
            <li class="menu-item"><a href="#">Characters</a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="#">Aang</a></li>
                    <li class="menu-item"><a href="#">Katara</a></li>
                    <li class="menu-item"><a href="#">Toph</a></li>
                    <li class="menu-item"><a href="#">Zuko</a></li>
                </ul>
            </li>
            <li class="menu item"><a href="#">Songs</a></li>
        </ul>
    </nav>
</header>
<div class="thanks">
    <h1>Thanks for your submission!</h1>
    <p>You will hear from me soon.</p>
</div>
<footer>This website was created by Jourdan Dekle</footer>
