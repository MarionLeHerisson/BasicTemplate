<nav class="navbar navbar-inverse navbar-fixed-top mg-nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo BASE_URL ?>">basic_template</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php echo THISPAGE == '' ? 'class="active"' : '' ?>><a href="<?php echo BASE_URL ?>">Home</a></li>
                <li <?php echo THISPAGE == 'contact' ? 'class="active"' : '' ?>><a href="<?php echo BASE_URL ?>contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>