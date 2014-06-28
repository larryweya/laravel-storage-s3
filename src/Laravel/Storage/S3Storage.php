<?php namespace Laravel\Storage;

class S3Storage implements StorageInterface {

    public function put($src, $dst)
    {
        return false;
    }

    public function url($path)
    {
        return null;
    }

    public function delete($path)
    {
        return false;
    }
}