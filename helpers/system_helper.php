<?php
// Redirect to page
function redirect($page = FALSE, $message = NULL, $message_type = NULL)
{
    // checking location
    if (is_string($page)) {
        $location = $page;
    } else {
        $location = $_SERVER['SCRIPT_NAME'];
    }

    // check for message
    if ($message != NULL) {
        // Set Message
        $_SESSION['message'] = $message;
    }

    // check for message type
    if ($message_type != NULL) {
        // set message type
        $_SESSION['$message_type'] = $message_type;
    }

    // redirect
    header('Location:' . $location);
    exit;
}

function displayMessage()
{
    if (!empty($_SESSION['message'])) {

        // Assign message var
        $message = $_SESSION['message'];

        if (!empty($_SESSION['message_type'])) {
            // Assign message type var
            $message_type = $_SESSION['message_type'];

            // create output
            if ($message_type = 'error') {
                echo '<div class="alert alert-danger">' . $message . '</div>';
            } else {
                echo '<div class="alert alert-success">' . $message . '</div>';
            }
        }
        // unset message
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    } else {
        echo '';
    }
}