<?php
function uploadFile($nameFolder, $file)
{
    $fileName = time().$file->getClientOriginalName();
    return $file->storeAs($nameFolder, $fileName, 'public');
}
