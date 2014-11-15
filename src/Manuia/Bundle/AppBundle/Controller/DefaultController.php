<?php
namespace Manuia\Bundle\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Manuia\Bundle\AppBundle\Util\Urlizer;
use Github\Client;

class DefaultController extends Controller
{

    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $client = new Client();
        $client->authenticate('141470a4ad4f036bd8e23024e0c62c7d58654ba4', Client::AUTH_HTTP_TOKEN);




        $issues = [];
        $max_pages = 10;
        for ($i = 1; $i <= $max_pages; ++$i) {
            usleep(150000);
            $issuesPerPage = $client->api('issue')->all('B3Software', 'webportage', array(
                'state' => 'all',
                'per_page' => 100,
                'page' => $i
            ));
            if (count($issuesPerPage)) {
                $issues = array_merge($issues, $issuesPerPage);
            } else {
                break;
            }
        }

        echo '<hr><pre> DefaultController  / $issues <br />';
        var_dump($issues);
        echo '</pre>';

        return array(
            'test' => Urlizer::urlize("Je suis un test / ddqsd 15112 1 212 121 212 1<br>")
        );
    }
}
