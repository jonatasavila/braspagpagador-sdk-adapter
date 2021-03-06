<?php
/**
 * @author      Webjump Core Team <dev@webjump.com>
 * @copyright   2016 Webjump (http://www.webjump.com.br)
 * @license     http://www.webjump.com.br  Copyright
 *
 * @link        http://www.webjump.com.br
 *
 */
namespace Webjump\Braspag\Pagador\Http\Services;


use Webjump\Braspag\Pagador\Transaction\Resource\RequestAbstract;

interface ServiceInterface
{
    public function getEndPoint();

    /**
     * @return RequestAbstract
     */
    public function getRequest();
}
