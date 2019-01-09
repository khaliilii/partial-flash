<?php
/**
 * Created by PhpStorm.
 * User: mohsen
 * Date: 1/5/19
 * Time: 8:29 PM
 */

    function partialFlash($title = NULL ,$message = NULL)
    {
/*
        $flash = app('PartialFlash');
        if(func_num_args() == 0){
            return $flash;
        }
        return $flash->info($title,$message);
*/
        $flash = app(Khaliilii\PartialFlash\Facade\Flash::class);
        if(func_num_args() == 0){
            return $flash;
        }
        return $flash->info($title,$message);
    }
