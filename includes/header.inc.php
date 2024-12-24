<!-- begin header.inc.php -->
 <?php $bag_length=null;?>
<!-- begin header.inc.php -->
<header>
    <div class="logo_container">
        <a href="/">
            <img class="myntra_home" src="images/icons/myntra_logo.webp" alt="Myntra Home" />
        </a>
    </div>
    <div class="search_bar">
        <span class="material-symbols-outlined search_icon">search</span>
        <input class="search_input" />
    </div>
    <div class="action_bar">
        <div class="action_container">
            <i class="action_icon BsFillPersonFill"></i>
            <span class="action_name">Profile</span>
        </div>
        
        <a class="action_container" style="color: #212529;" href="/bag">
            <i class="action_icon FaBagShopping"></i>
            <span class="action_name">Bag</span>
            <span class="bag-item-count"><?php echo $bag_length; ?></span>
        </a>
    </div>
    <nav class="nav_bar">
        <a href="/">Men</a>
        <a href="/">Women</a>
        <a href="/">Kids</a>
        <a href="/">Home & Living</a>
        <a href="/">Beauty</a>
        <a href="/">
            Studio <sup>New</sup>
        </a>
        <div class="dropdown">
            <button class="dropbtn">More</button>
            <div class="dropdown-content">
                <a href="/">Men</a>
                <a href="/">Women</a>
                <a href="/">Kids</a>
                <a href="/">Home & Living</a>
                <a href="/">Beauty</a>
                <a href="/">
                    Studio <sup>New</sup>
                </a>
                <div class="action_container">
                  <i class="action_icon FaFaceGrinHearts"></i>
                  <span class="action_name">Wishlist</span>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- end header.inc.php -->
