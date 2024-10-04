<?php

require_once 'database/user.php';

function findPostAction($conn, $id)
{
    return findPostDb($conn, $id);
}

function readPostAction($conn)
{
    return readUserDb($conn);
}

function createPostAction($conn, $image, $title, $text)
{
    $createUserDb = createUserDb($conn, $image, $title, $text);
    $message = $createUserDb == 1 ? 'success-create' : 'error-create';
    header("Location: index.php?url=ler&message=$message");
    exit;  // Para garantir que o script não continue
}

function updatePostAction($conn, $id, $image, $title, $text)
{
    $updateUserDb = updateUserDb($conn, $id, $image, $title, $text);
    $message = $updateUserDb == 1 ? 'success-update' : 'error-update';
    header("Location: index.php?url=ler&message=$message");
    exit;  // Interrompe a execução após redirecionar
}

function deletePostAction($conn, $id)
{
    $deleteUserDb = deleteUserDb($conn, $id);
    $message = $deleteUserDb == 1 ? 'success-remove' : 'error-remove';
    header("Location: index.php?url=ler&message=$message");
    exit;  // Garante que a execução pare após o redirecioimagento
}
