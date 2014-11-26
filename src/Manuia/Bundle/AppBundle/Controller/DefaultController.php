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
     * @Template()
     */
    public function indexAction()
    {
        $client = new Client();
        $client->authenticate('141470a4ad4f036bd8e23024e0c62c7d58654ba4', Client::AUTH_HTTP_TOKEN);
        
        $members = $client->api('organization')->members()->all('B3Software');
        echo '<hr><pre> DefaultController  / $event <br />';
        var_dump($members);
        echo '</pre>';
        die();
        
        $team = $client->api('team')->all('B3Software');
        echo '<hr><pre> DefaultController  / $event <br />';
        var_dump($team);
        echo '</pre>';
        die();
        $issues = [];
        $max_pages = 10;
        for ($i = 1; $i <= $max_pages; ++ $i) {
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
        
        foreach ($issues as $issue) {
            if ($issue['number'] == 551) {
                echo '<hr><pre> DefaultController  / $issue <br />';
                var_dump($issue);
                echo '</pre>';
                $events = $client->api('issues')->events()->all('B3Software', 'webportage', $issue['number']);
                foreach ($events as $event) {
                    echo '<hr><pre> DefaultController  / $event <br />';
                    var_dump($event);
                    echo '</pre>';
                }
                $comments = $client->api('issues')->comments()->all('B3Software', 'webportage', $issue['number']);
                foreach ($comments as $comment) {
                    echo '<hr><pre> DefaultController  / $comment <br />';
                    var_dump($comment);
                    echo '</pre>';
                }
            }
        }
        
        
        return array(
            'test' => Urlizer::urlize("Je suis un test / ddqsd 15112 1 212 121 212 1<br>")
        );
    }
}
