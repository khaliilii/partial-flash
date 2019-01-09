<?php
/**
 * Created by PhpStorm.
 * User: mohsen
 * Date: 1/5/19
 * Time: 10:55 PM
 */

namespace Khaliilii\PartialFlash\Facade;


class Flash
{
    public function __construct()
    {

    }

    public function create($title, $message, $level, $key = 'flash_message')
    {
        return session()->flash('flash_message', [
            'title' => $title,
            'message' => $message,
            'level' => $level
        ]);
    }

    public function info($title,$message)
    {
        return $this->create($title,$message, 'info');

    }

    public function success($title,$message)
    {
        return $this->create($title,$message, 'success');

    }

    public function warning($title,$message)
    {
        return $this->create($title,$message, 'warning');

    }

    public function error($title,$message)
    {
        return $this->create($title,$message, 'error');

    }

    public function overlay($title,$message, $level = 'success')
    {
        return $this->create($title,$message, $level,'flash_message_overlay');

    }
}
