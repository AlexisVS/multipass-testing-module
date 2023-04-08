<?php

//it('will not use debugging functions')
//    ->expect(['dd', 'dump', 'ray'])
//    ->each
//    ->not
//    ->toBeUsed();

it('Can access app entities')
    ->expect(['App\Models\User'])
    ->each
    ->toImplement('Illuminate\Contracts\Auth\Authenticatable');
