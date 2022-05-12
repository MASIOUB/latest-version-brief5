<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" style="color: #428DFC;" href="<?= createLink("/trip") ?>">Traveler Train</a>


    <ul class="navbar-nav gap-1">
        <?php if (isLoggedIn()) : ?>
            <li><a style="color: #428DFC; font-size: x-large;" href='<?= createLink("/logout") ?>'><i class="fa-solid fa-user-check"></i></a></li>

        <?php else : ?>
            <li><a style="color: #428DFC; font-size: x-large;" href='<?= createLink("/register") ?>'><i class="fa-solid fa-user-plus"></i></a></li>
        <?php endif; ?>
    </ul>
</nav>