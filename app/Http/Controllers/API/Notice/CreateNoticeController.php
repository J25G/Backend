<?php

namespace App\Http\Controllers\API\Notices;

use App\Http\Controllers\Controller;
use App\Repositories\NoticeRepository;
use Illuminate\Http\Request;

class CreateNoticeController extends Controller
{
    public function __invoke(Request $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        $priority = $request->get('priority');
        $noticeRepository = new NoticeRepository();
        $noticeRepository->create($title, $content, $priority);
        return response()->json([



            'message' => 'Aviso creado.'
        ]);
    }
}
