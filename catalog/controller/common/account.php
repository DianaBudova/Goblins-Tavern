<?php
namespace Opencart\Catalog\Controller\Common;
/**
 * Class Account
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Account extends \Opencart\System\Engine\Controller {
    /**
     * @return string
     */
    public function index(): string {
        $this->load->language('common/account');

        $data['account'] = $this->url->link('account/account', 'language=' . $this->config->get('config_language') . (isset($this->session->data['customer_token']) ? '&customer_token=' . $this->session->data['customer_token'] : ''));

        return $this->load->view('common/account', $data);
    }

}