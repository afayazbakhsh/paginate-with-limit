<?php

use Amir\PaginateLimit\Paginate;

// test('tests my', function(){
//     $paginate = new Paginate();

//     expect($paginate->my())
//     ->toBeNull();


// });

test('tests my')
    ->expect((new Paginate())->my())
    ->toBeNull();