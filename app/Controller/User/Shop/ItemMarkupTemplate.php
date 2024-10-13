<?php
declare(strict_types=1);

namespace App\Controller\User\Shop;

use App\Controller\User\Base;
use App\Interceptor\Merchant;
use App\Interceptor\User;
use Kernel\Annotation\Interceptor;
use Kernel\Context\Interface\Response;
use Kernel\Plugin\Const\Theme;

#[Interceptor(class: [User::class, Merchant::class])]
class ItemMarkupTemplate extends Base
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->theme(Theme::USER_ITEM_MARKUP_TEMPLATE, "Shop/ItemMarkupTemplate.html", "同步模版");
    }
}