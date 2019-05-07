<?

require '../libs/Smarty.class.php';
require 'model/db_admin.php';
require 'model/account.php';


class Admin
{

    /**
     * @var
     */
    protected $smarty;
    /**
     * @var
     */
    protected $admin = 'http://smarty.dev.test/';
    /**
     * @var
     */
    protected $insert;
    /**
     * @var
     */
    protected $select;

    public function __construct()
    {
        $this->insert = new Db_insert;
        $this->select = new Db_select;
        $this->update = new Db_update;
        $this->smarty = new Smarty;
        $this->smarty->caching = true;
        $this->smarty->assign("admin", $this->admin, true);
    }


}