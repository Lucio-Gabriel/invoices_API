<?php

namespace App\Filters;

class UserFilter extends Filter {
  protected array $allowedOperatorsFields = [
        'name'        => ['gt', 'eq', 'lt', 'gte', 'lte', 'ne'],
        'email'         => ['eq', 'ne', 'in'],
    ];
}