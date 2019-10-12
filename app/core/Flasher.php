<?php

class Flasher {

    public static function setFlash($message, $action, $tipe )
    {
        $_SESSION['flash'] = [
            'message' => $message, 
            'action' => $action,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
            Data Mahasiswa <strong>' . $_SESSION['flash']['message'] . '</strong> ' . $_SESSION['flash']['action'] . '
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          unset($_SESSION['flash']);
        }
    }
}