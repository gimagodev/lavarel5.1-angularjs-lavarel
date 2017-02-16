<?php

namespace CodeProject\Repositories;

use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

        /**
        * Responsável por conversar com o módulo de CLient.
        *
        * @param  
        * @return  
        */
class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
            public function model()
            {
                return Client::class;
            }
}