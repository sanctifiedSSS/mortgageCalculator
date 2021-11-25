
<?php


/**
 * Http Request class
 */
class Request
{
    /**
     * Original GET Array
     * @var array
     */
    protected $originalGet = [];

    /**
     * Original POST array
     * @var array
     */
    protected $originalPost = [];

    /**
     * Original Server arr
     * @var array
     */
    protected $originalServer = [];


    /**
     * Method type
     * @var null|string
     */
    protected $method = null;

    /**
     * URL Path
     * @var string
     */
    protected $path = '/';


    /**
     * Create request object from Get and Post arrays
     * @param array $get
     * @param array $post
     */
    public function __construct($get, $post, $server)
    {
        $this->originalGet = $get;
        $this->originalPost = $post;
        $this->originalServer = $server;

        $this->method = $server['REQUEST_METHOD'];
        $this->path = $server['PATH_INFO'];
    }




    /**
     * Create Request from global vars _GET _POST
     * @return Request
     */
    public static function createFromGlobals() {
        return new self($_GET, $_POST, $_SERVER);
    }

    /**
     * Return true if method is GET
     * @return bool
     */
    public function isGet() {
        return $this->method === 'GET';
    }

    /**
     * Return true if method is POST
     * @return bool
     */
    public function isPost() {
        return $this->method === 'POST';
    }

    /**
     * Return request method
     * @return mixed|string|null
     */
    public function getMethod() {
        return $this->method;
    }

    /**
     * Return request path
     * @return mixed|string
     */
    public function getPath() {
        return $this->path;
    }

}
