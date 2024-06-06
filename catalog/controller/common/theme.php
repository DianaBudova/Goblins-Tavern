<?php
namespace Opencart\Catalog\Controller\Common;
/**
 * Class Theme
 *
 * @package Opencart\Catalog\Controller\Common
 */
class Theme extends \Opencart\System\Engine\Controller {
    /**
     * @return string
     */
    public function index(): string {
        $data['theme'] = $this->session->data['theme'] ?? 'light';

        $url_data = $this->request->get;

        if (isset($url_data['route'])) {
            $route = $url_data['route'];
        } else {
            $route = $this->config->get('action_default');
        }

        $url = '';

        if ($url_data) {
            $url .= '&' . urldecode(http_build_query($url_data));
        }

        $data['href'] = $this->url->link($route, $url, true);

        return $this->load->view('common/theme', $data);
    }
}