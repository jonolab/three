<?php

namespace App\Repositories;

use App\Models\Cooking;
use Illuminate\Support\Facades\DB;

class CookingRepository
{
    public function __construct()
    {
    }

    public function search(int $userId): \Illuminate\Support\Collection
    {
        $query = DB::table('t_cooking as cook');
        $query->selectRaw(
            'cook.*, ing_1.name as ingredient_name_1, ing_2.name as ingredient_name_2,ing_3.name as ingredient_name_3'
        );
        $query->leftJoin('m_ingredient as ing_1', 'cook.ingredient_id_1', '=', 'ing_1.id');
        $query->leftJoin('m_ingredient as ing_2', 'cook.ingredient_id_2', '=', 'ing_2.id');
        $query->leftJoin('m_ingredient as ing_3', 'cook.ingredient_id_3', '=', 'ing_3.id');
        $query->where('user_id', $userId);
        return $query->get();
    }

    public function delete(int $id)
    {
        Cooking::where('id', $id)->update(['deleted_at' => date('Y-m-d H:i:s')]);
    }
}
