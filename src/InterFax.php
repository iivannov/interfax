<?php

namespace Iivannov\InterFax;

class InterFax
{

    /**
     * Your InterFax Username
     *
     * @var string
     */
    protected $username;

    /**
     * Your InterFax Password
     *
     * @var string
     */
    protected $password;

    /**
     * InterFax SoapClient
     *
     * @var InterFaxClient
     */
    protected $client;

    /**
     * The WSDL of the InterFax API
     * @var null|string
     */
    protected $wsdl = 'http://ws.interfax.net/dfs.asmx?wsdl';


    /**
     * InterFax constructor.
     * @param $username
     * @param $password
     * @param null $wsdl
     */
    public function __construct($username, $password, $wsdl = null)
    {
        $this->username = $username;
        $this->password = $password;

        if ($wsdl)
            $this->wsdl = $wsdl;

//        $this->client = new InterFaxClient($this->wsdl);
    }

    /**
     * Sends a text fax
     *
     * @param $number
     * @param $data
     * @return mixed
     * @throws InterFaxException
     */
    public function sendText($number, $data)
    {
        $params = [
            'Username' => $this->username,
            'Password' => $this->password,
            'FaxNumber' => $number,
            'Data' => $data,
            'FileType' => 'TXT'
        ];

        $response = $this->client->SendCharFax($params);

        if($response->SendCharFaxResult < 0)
            throw new InterFaxException($response->SendCharFaxResult);

        return $response;

    }

    /**
     * Sends a fax with a file attachment
     *
     * @param $number
     * @param $filename
     * @param $type
     * @return mixed
     * @throws InterFaxException
     * @throws \Exception
     */
    public function sendFile($number, $filename, $type)
    {
        $params = [
            'Username' => $this->username,
            'Password' => $this->password,
            'FaxNumber' => $number,
            'FileData' =>  $this->getFileContents($filename),
            'FileType' => $type
        ];

        $response = $this->client->Sendfax($params);

        if($response->SendfaxResult < 0)
            throw new InterFaxException($response->SendfaxResult);

        return $response;
    }

    /**
     * Reads and returns the contents of a file
     *
     * @param $filename
     * @return string
     * @throws \Exception
     */
    protected function getFileContents($filename)
    {
        try {
            return file_get_contents($filename);
        } catch (\Exception $e) {
            throw new \Exception("Cannot read given file attachment.");
        }
    }


}

