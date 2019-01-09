# partial-flash
laravel partial-flash use sweet alert 


## 1-

# install

composer require "khaliilii/partial-flash"

## 2-

# php artisan vendor:publish

## 3-

# VENDOR and js,css files publish

php artisan vendor:publish --force

php artisan vendor:publish --tag=MyTag --force        ////publish view only this tag

selet my package for publish files

## 4-

# add this css and js on view file or layout file

    <script src="{{ asset('js/sweetalert.min.js') }}" ></script>
    
    <link href="{{ asset('css/sweetalert.min.css') }}" rel="stylesheet">
    
## 5-

# include partial view blad  on view file or layout file on end page

@include('vendor.partial.flash')

## 6- 
# use way....

    partialFlash()->overlay('title','message','warning');
    partialFlash()->error('title','message');
    partialFlash()->info('title','message');
    partialFlash()->warning('title','message');
    partialFlash()->success('title','message');
