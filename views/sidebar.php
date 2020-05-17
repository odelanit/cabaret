<div class="ui visible sidebar labeled icon inverted vertical menu">
    <a class="item <?php if(is_url('/admin/index.php') || is_url('/admin/')) echo 'active' ?>" href="/admin/index.php">
        <i class="home icon"></i>
        Home
    </a>
    <a class="item <?php if(is_url('/admin/news.php') || is_url('/admin/create-news.php') || is_url('/admin/edit-news.php')) echo 'active' ?>" href="/admin/news.php">
        <i class="rss icon"></i>
        News
    </a>
    <a class="item <?php if(is_url('/admin/categories.php')) echo 'active' ?>" href="/admin/categories.php">
        <i class="tags icon"></i>
        Categories
    </a>
    <a class="item <?php if(is_url('/admin/menu.php')) echo 'active' ?>" href="/admin/menu.php">
        <i class="list icon"></i>
        Menu
    </a>
    <a class="item <?php if(is_url('/admin/events.php')) echo 'active' ?>" href="/admin/events.php">
        <i class="birthday cake icon"></i>
        Events
    </a>
</div>