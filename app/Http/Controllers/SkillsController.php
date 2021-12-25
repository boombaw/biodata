<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class SkillsController extends BaseController
{
    public function index()
    {
        $data = Skill::all();
        return response()->json($data);
    }
}
