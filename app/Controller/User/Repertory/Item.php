<?php
declare (strict_types=1);

namespace App\Controller\User\Repertory;

use App\Controller\User\Base;
use App\Interceptor\Supplier;
use App\Interceptor\User;
use Kernel\Annotation\Interceptor;
use Kernel\Context\Interface\Response;
use Kernel\Plugin\Const\Theme;

#[Interceptor(class: [User::class, Supplier::class])]
class Item extends Base

{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->theme(Theme::USER_REPERTORY_ITEM, "Repertory/Item.html", "货源管理");
    }
}