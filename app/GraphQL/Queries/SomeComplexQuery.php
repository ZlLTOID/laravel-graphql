<?php declare(strict_types=1);

namespace App\GraphQL\Queries;

use App\Models\Book;

final readonly class SomeComplexQuery
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        return Book::where('author', 'like', '%' . $args['search'] . '%')->get();
    }
}
