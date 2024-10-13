<?php
declare(strict_types=1);

namespace App\Controller\Admin\Manage;

use App\Controller\Admin\Base;
use App\Interceptor\Admin;
use Kernel\Annotation\Interceptor;
use Kernel\Context\Interface\Response;

#[Interceptor(class: Admin::class)]
class Manage extends Base
{

    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->render("Manage/Manage.html", "管理员");
    }
}