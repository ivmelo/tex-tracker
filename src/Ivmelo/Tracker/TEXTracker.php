<?php

namespace Ivmelo\Tracker;

use Goutte\Client;

/**
 * Tracks packages from Total Express.
 * http://www.totalexpress.com.br
 */
class TEXTracker
{
    /**
     * Package code. Found in the url for the tracking page.
     *
     * @var string
     */
    private $code;

    /**
     * Endpoint for web scrapping.
     *
     * @var string
     */
    private $endpoint = 'http://tracking.totalexpress.com.br/tracking_encomenda.php?code=';


    /**
     * Goutte client for web scraping and web requests.
     *
     * @var Goutte\Client
     */
    private $client;

    /**
     * Construct function.
     *
     * @param string $username  Package code from the tracking page url.
     */
    public function __construct($code = null)
    {
        $this->client = new Client();
        $this->setCode($code);
    }

    /**
     * Sets the instance tracking code.
     *
     * @param string $username  Package code from the tracking page url.
     */
    public function setCode($code) {
        if ($code != null) {
            $this->code = $code;
        }
    }

    /**
     * Tracks a package.
     *
     * @param string $username  Package code from the tracking page url.
     * @return array Tracking information.
     */
    public function track($code = null)
    {
        $this->setCode($code);

        // Package details.
        $data = [];

        try {
            $crawler = $this->client->request('GET', $this->endpoint . $this->code);

            $info = trim($crawler->filter('div[name="logo_total"]')->filter('b > font')->html());

            $info = explode('<br><b>', $info);

            $data['awb'] = substr($info[0], 11);
            $data['nota_fiscal'] = substr($info[1], 16);
            $data['pedido'] = substr($info[2], 11, -8);

            // Tracking info.
            $events = [];

            $tracking = $crawler->filter('#tabela1 > tr');

            for ($i=1; $i < $tracking->count(); $i++) {
                $event = [
                    'data' => trim($tracking->eq($i)->filter('td')->eq(0)->text()),
                    'hora' => trim($tracking->eq($i)->filter('td')->eq(1)->text()),
                    'status' => trim($tracking->eq($i)->filter('td')->eq(2)->text()),
                ];

                array_push($events, $event);
            }

            $data['eventos'] = $events;
        } catch (Exception $e) {
            // Do nothing for now. Will return an empty array.
        }

        return $data;
    }
}
