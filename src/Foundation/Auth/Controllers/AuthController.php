<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2016, iBenchu.org
 * @datetime 2016-11-02 14:28
 */
namespace Notadd\Foundation\Auth\Controllers;

use Notadd\Foundation\Auth\AuthenticatesUsers;
use Notadd\Foundation\Routing\Abstracts\Controller;

/**
 * Class AuthController.
 */
class AuthController extends Controller
{
    use AuthenticatesUsers;

    /**
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * LoginController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return $this->view('auth.auth');
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return $this->login($this->request);
    }

    /**
     * @return string
     */
    public function username()
    {
        return 'name';
    }
}
