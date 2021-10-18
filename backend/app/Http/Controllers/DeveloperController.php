<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterDeveloper;
use App\Http\Services\Contracts\DeveloperServiceInterface;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DeveloperController extends Controller
{
    private DeveloperServiceInterface $developerService;

    public function __construct(DeveloperServiceInterface $developerService)
    {
        $this->developerService = $developerService;
    }

    public function list(FilterDeveloper $request)
    {
        $data = $request->getData();
        $response = $this->developerService->list($data);

        return response()->json($response, Response::HTTP_OK);
    }

    public function getById(Request $request)
    {
        $data = $request->validate(['id' => 'required|integer']);
        $response = $this->developerService->getById(intval($data['id']));

        return response()->json($response, Response::HTTP_OK);
    }
}
