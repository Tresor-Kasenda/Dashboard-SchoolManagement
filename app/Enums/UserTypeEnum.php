<?php

declare(strict_types=1);

namespace App\Enums;

enum UserTypeEnum: string
{
    case USER_STUDENT = 'Etudiant';

    case USER_SCHOOL_MANAGEMENT = "Ecole";
}
