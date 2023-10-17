<?php

namespace Amir\PaginateCollection;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class Paginate
{
  public function __invoke()
      {
          Collection::macro('paginate', function($pageName = 'page', int $perPage = 15, int $total = null, $page = null){
              $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
              return new LengthAwarePaginator(
                  $this->forPage($page, $perPage),
                  $total ?: $this->count(),
                  $perPage,
                  $page,
                  [
                      'path' => LengthAwarePaginator::resolveCurrentPath(),
                      'pageName' => $pageName,
                  ]
                );
          });
      }
}