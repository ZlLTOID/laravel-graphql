<?php declare(strict_types=1);

namespace App\GraphQL\Mutations;

use App\Models\Category;

final readonly class DeleteCategory
{
    /** @param  array{}  $args */
    public function __invoke(null $_, array $args)
    {
        $category = Category::findOrFail($args['id']);
        $category->delete();

        return $category;    }
}
