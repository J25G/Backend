<?php

namespace App\Http\Controllers\Web\Notices;

use App\Repositories\NoticeRepository;
use Illuminate\Http\Request;

class StoreNoticeController
{
    public function __invoke(Request $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        $priority = $request->get('priority');
        $noticeRepository = new NoticeRepository();
        $noticeRepository->create($title, $content, $priority);
        return redirect('notices');
    }
}
