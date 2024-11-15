<?php

function setHtmlPages(string $html): string
{
    return $html;
}

function getTitle(string $req): string
{
    return match ($req) {
        '/' => 'home',
        '/feedback' => 'feedback',
        default => '404',
    };

}

function getProcessedRowInForm(string $name): string
{
    return htmlspecialchars(trim($_POST[$name])??'');
}

function flash(?string $message = null)
{
    if ($message) {
        $_SESSION['flash'] = $message;
    } else {
        if (!empty($_SESSION['flash'])) { ?>
            <div class="alert alert-danger mb-3">
                <?=$_SESSION['flash']?>
            </div>
        <?php }
        unset($_SESSION['flash']);
    }
}

function redirectToPage($path)
{
    header("location: " . $path);
    die();
}

function pushSessionAuth(string $name, string $value): void
{
    $_SESSION[$name] = $value;
}

function checkSessionAuth(): bool
{
    if (!empty($_SESSION["auth"])){
        return true;
    }
    else{
        return false;
    }
}