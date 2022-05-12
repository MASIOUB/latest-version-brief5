<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" style="color: #428DFC;" href="<?= createLink("/") ?>">Traveler Train</a>
    <button class="navbar-toggler menu-btn text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars" style="color: #428DFC;"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" style="color: #428DFC;" href="<?= createLink("/") ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: #428DFC;" href="<?= createLink("/booking") ?>">Booking</a>
            </li>
            <li class="nav-item">
                <?php if (isClient()) : ?>
                    <a class="nav-link" style="color: #428DFC;" href="<?= createLink("/booking/history") ?>">History</a>
                <?php endif; ?>
            </li>
        </ul>
        <ul class="navbar-nav gap-1">
            <?php if (isLoggedIn() && !isGuest()) : ?>
                <li><a style="color: #428DFC; font-size: x-large;" href='<?= createLink("/logout") ?>'><i class="fa-solid fa-user-check"></i></a></li>

            <?php else : ?>
                <li><a style="color: #428DFC; font-size: x-large;" href='<?= createLink("/register") ?>'><i class="fa-solid fa-user-plus"></i></a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>