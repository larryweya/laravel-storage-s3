<?php namespace Laravel\Storage;

class S3Storage implements StorageInterface {

    public function put($src, $dst)
    {
        return false;
    }

    public function getURL($path)
    {
        return null;
    }

    public function delete($path)
    {
        return false;
    }
}